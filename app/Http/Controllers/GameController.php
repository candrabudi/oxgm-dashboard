<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\GameType;
use App\Models\Provider;
use App\Models\GameApi;
use App\Models\ProviderTypeAssignment;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GameController extends Controller
{
    public function getProvider()
    {
        $gameApi = GameApi::first();
        $request_time = time();
        $sign = md5($request_time . $gameApi->api_key . 'productlist' . $gameApi->api_operator);

        $params = [
            'operator_code' => $gameApi->api_operator,
            'sign' => $sign,
            'request_time' => $request_time,
            'offset' => 0,
            'size' => 300,
        ];

        $response = Http::get($gameApi->api_url . '/api/operators/available-products', $params);

        if ($response->successful()) {
            $products = $response->json();
            foreach ($products as $p) {
                $sprovider = Provider::updateOrCreate(
                    ['product_code' => $p['product_code']],
                    [
                        'provider_name' => $p['product_name'],
                        'provider_code' => $p['provider'],
                        'provider_category' => $p['game_type'],
                        'provider_status' => $p['status'] === 'ACTIVED' ? 1 : 0,
                        'pri_image' => '-',
                        'sec_image' => '-',
                    ]
                );

                $gameCode = GameType::firstOrCreate(
                    ['name' => $this->mapGameType($p['game_type'])],
                    ['code' => $this->mapGameTypeCode($p['game_type']), 'image' => '-', 'status' => 1]
                );

                ProviderTypeAssignment::updateOrCreate(
                    ['provider_id' => $sprovider->id, 'game_type_code_id' => $gameCode->id],
                    ['provider_id' => $sprovider->id, 'game_type_code_id' => $gameCode->id]
                );
            }
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Request failed',
                'status' => $response->status(),
            ], $response->status());
        }
    }

    public function storeGameType()
    {
        $gameTypes = [
            ['Code' => 'CB', 'Description' => 'CARD & BOARDGAME'],
            ['Code' => 'ES', 'Description' => 'E-GAMES'],
            ['Code' => 'SB', 'Description' => 'SPORTBOOK'],
            ['Code' => 'LC', 'Description' => 'LIVE-CASINO'],
            ['Code' => 'SL', 'Description' => 'SLOTS'],
            ['Code' => 'LK', 'Description' => 'LOTTO'],
            ['Code' => 'FH', 'Description' => 'FISH HUNTER'],
            ['Code' => 'PK', 'Description' => 'POKER'],
            ['Code' => 'MG', 'Description' => 'MINI GAME'],
            ['Code' => 'OT', 'Description' => 'OTHERS'],
        ];

        foreach ($gameTypes as $gt) {
            GameType::updateOrCreate(
                ['code' => $gt['Code']],
                ['name' => $gt['Description'], 'image' => '-', 'status' => 1]
            );
        }
    }

    public function getProviderGames(Request $request)
    {
        $gameApi = GameApi::first();
        $providers = Provider::get();
        
        foreach ($providers as $prov) {
            $size = $prov->provider_category === 'SPORT_BOOK' ? $request->input('size', 20) : $request->input('size', 300);
            $request_time = time();
            $sign = md5($request_time . $gameApi->api_key . 'gamelist' . $gameApi->api_operator);

            $queryParams = [
                'operator_code' => $gameApi->api_operator,
                'request_time' => $request_time,
                'sign' => $sign,
                'size' => $size,
                'product_code' => $prov->product_code,
                'game_type' => $prov->provider_category,
                'offset' => 0,
            ];

            $response = Http::get($gameApi->api_url . '/api/operators/provider-games', $queryParams);

            if ($response->successful()) {
                $res = $response->json();

                if (!isset($res['provider_games']) && $prov->provider_category !== 'SPORT_BOOK') {
                    return response()->json($res);
                }

                foreach ($res['provider_games'] ?? [] as $game) {
                    $gameCode = GameType::firstOrCreate(
                        ['name' => $this->mapGameType($game['game_type'])],
                        ['code' => $this->mapGameTypeCode($game['game_type']), 'image' => '-', 'status' => 1]
                    );

                    Game::updateOrCreate(
                        ['game_code' => $game['game_code']],
                        [
                            'game_type_id' => $gameCode->id,
                            'provider_id' => $prov->id,
                            'provider_code' => $prov->provider_code,
                            'game_name' => $game['game_name'],
                            'product_code' => $game['product_code'],
                            'product_id' => $game['product_id'],
                            'game_type' => $game['game_type'],
                            'game_status' => $game['status'] === 'ACTIVED' ? 1 : 0,
                        ]
                    );
                }
            } else {
                Log::error('Failed to fetch provider games', [
                    'status' => $response->status(),
                    'response' => $response->body(),
                ]);
                return response()->json(['error' => 'Failed to fetch provider games'], $response->status());
            }
        }
    }

    private function mapGameType($type)
    {
        return match ($type) {
            'SPORT_BOOK' => 'SPORTBOOK',
            'LIVE_CASINO' => 'LIVE-CASINO',
            default => $type,
        };
    }

    private function mapGameTypeCode($type)
    {
        return match ($type) {
            'SPORT_BOOK' => 'SB',
            'LIVE_CASINO' => 'LC',
            default => 'OT',
        };
    }
}
