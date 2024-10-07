<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $setting = GeneralSetting::first();
        return view('generalsetting.index', compact('setting'));
    }

    public function saveSettings(Request $request)
    {
        // Find the setting record by ID (or create if it doesn't exist)
        $setting = GeneralSetting::firstOrNew(['id' => 1]);

        // Assign form data to the setting model
        $setting->web_name = $request->input('web_name');
        $setting->web_description = $request->input('web_description');
        $setting->web_url = $request->input('web_url');
        $setting->web_status = $request->has('web_status') ? 1 : 0;

        // Handle file uploads for logo and favicon with URL
        if ($request->hasFile('logo')) {
            // Store the file and get its path
            $path = $request->file('logo')->store('logos', 'public');
            // Store the full URL in the database
            $setting->web_logo_url = asset('storage/' . $path);
        }

        if ($request->hasFile('favicon')) {
            // Store the file and get its path
            $path = $request->file('favicon')->store('favicons', 'public');
            // Store the full URL in the database
            $setting->web_favicon_url = asset('storage/' . $path);
        }

        // Save the settings to the database (insert or update)
        $setting->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Settings saved successfully');
    }

}
