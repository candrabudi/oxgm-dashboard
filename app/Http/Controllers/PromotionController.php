<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return view('promotion.index', compact('promotions'));
    }
    
    public function create()
    {
        return view('promotion.create');
    }

    public function store(Request $request)
    {
        try{
            $store = new Promotion();
            $store->title = $request->title;
            $store->content = $request->editor;
            $store->bonus_percentage = $request->bonus_percentage;
            $store->min_deposit = $request->min_deposit;
            $store->max_deposit = $request->max_deposit;
            $store->turn_over = $request->turn_over;
            $store->status = $request->status == 'on' ? 1 : 0;
            if ($request->hasFile('thumbnail')) {
                $path = $request->file('thumbnail')->store('thumbnails', 'public');
                $store->thumbnail = asset('storage/' . $path);
            }
            $store->save();

            return redirect()->route('promotion.list');
        }catch(\Exception $e){
            return redirect()->back();
        }
    }
}
