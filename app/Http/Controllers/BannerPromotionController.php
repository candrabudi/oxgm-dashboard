<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BannerSlider;
use Illuminate\Http\Request;

class BannerPromotionController extends Controller
{
    public function index()
    {
        $banners = BannerSlider::all();
        return view('bannerpromotion.index', compact('banners'));
    }

    public function store(Request $request)
    {
        try{
            $store = new BannerSlider();
            $store->banner_name = $request->banner_name;
            if ($request->hasFile('banner')) {
                $path = $request->file('banner')->store('banners', 'public');
                $store->banner_url = asset('storage/' . $path);
            }
            $store->banner_status = $request->banner_status;
            $store->save();

            return redirect()->back();
        }catch(\Exception $e){
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $banner = BannerSlider::where('id', $id)
                ->first();
            if(!$banner) {
                return redirect()->back();
            }

            $banner->banner_name = $request->banner_name;
            if ($request->hasFile('banner')) {
                $path = $request->file('banner')->store('banners', 'public');
                $banner->banner_url = asset('storage/' . $path);
            }
            $banner->banner_status = $request->banner_status;
            $banner->save();

            return redirect()->back();
        }catch(\Exception $e) {
            return redirect()->back();
        }
    }
}
