@extends('layouts.app')

@section('content')
    <div
        class="max-w-full md:max-w-none rounded-[30px] md:rounded-none px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 md:pt-20 pb-10 mt-5 md:mt-1 relative dark:bg-darkmode-700 before:content-[''] before:w-full before:h-px before:block">
        <div class="intro-y mt-8 flex items-center">
            <h2 class="mr-auto text-lg font-medium">Pengaturan Website</h2>
        </div>
        <div class="mt-5 grid grid-cols-12 gap-6">
            <div class="intro-y col-span-12 lg:col-span-6">
                <form action="{{ route('setting.general.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="intro-y box p-5">
                        <!-- Nama Website -->
                        <div>
                            <label for="crud-form-1" class="inline-block mb-2">Nama Website</label>
                            <input id="crud-form-1" type="text" name="web_name" value="{{ $setting->web_name }}" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        </div>
                
                        <!-- Deskripsi Website -->
                        <div class="mt-3">
                            <label for="crud-form-2" class="inline-block mb-2">Deskripsi Website</label>
                            <textarea id="crud-form-2" name="web_description" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>{{ $setting->web_description }}</textarea>
                        </div>
                
                        <!-- Logo -->
                        <div class="mt-3">
                            <label for="crud-form-3" class="inline-block mb-2">Logo</label>
                            <input id="crud-form-3" type="file" name="logo" class="w-full text-sm border-slate-200 shadow-sm rounded-md">
                        </div>
                
                        <!-- Favicon -->
                        <div class="mt-3">
                            <label for="crud-form-4" class="inline-block mb-2">Favicon</label>
                            <input id="crud-form-4" type="file" name="favicon" class="w-full text-sm border-slate-200 shadow-sm rounded-md">
                        </div>
                
                        <!-- Website URL -->
                        <div class="mt-3">
                            <label for="crud-form-5" class="inline-block mb-2">Website URL</label>
                            <input id="crud-form-5" type="text" name="web_url" value="{{ $setting->web_url }}" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        </div>
                
                        <div class="mt-3">
                            <label>Web Maintenance</label>
                            <div data-tw-merge="" class="flex items-center mt-2">
                                <input data-tw-merge="" type="checkbox" name="web_status"
                                    class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white"
                                    @if($setting->web_status == 0) checked @endif>
                            </div>
                        </div>
                        
                
                        <!-- Save Button -->
                        <div class="mt-5 text-right">
                            <button type="submit" class="bg-primary text-white w-24 py-2 px-3 rounded-md">Save</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
