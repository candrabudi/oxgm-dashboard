<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="Koo2zWJKliRELq4FawEfkQPg3CJYusp6ppGFZw4O">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Midone - Tailwind Admin Dashboard Template</title>
    <link rel="stylesheet" href="css/vendors/tippy.css">
    <link rel="stylesheet" href="css/vendors/litepicker.css">
    <link rel="stylesheet" href="css/vendors/tiny-slider.css">
    <link rel="stylesheet" href="css/themes/enigma/side-nav.css">
    <link rel="stylesheet" href="css/vendors/leaflet.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <link rel="stylesheet" href="css/components/mobile-menu.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div
        class="enigma py-5 px-5 md:py-0 sm:px-8 md:px-0 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 md:before:bg-none md:bg-slate-200 md:dark:bg-darkmode-800 before:fixed before:inset-0 before:z-[-1]">
        @include('layouts.componentns.mobilemenu')
        @include('layouts.componentns.navbar')
        <div class="flex overflow-hidden">
            @include('layouts.componentns.sidenav')
            <div
                class="max-w-full md:max-w-none rounded-[30px] md:rounded-none px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 md:pt-20 pb-10 mt-5 md:mt-1 relative dark:bg-darkmode-700 before:content-[''] before:w-full before:h-px before:block">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 2xl:col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            @yield('content')

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="js/vendors/dom.js"></script>
    <script src="js/vendors/tailwind-merge.js"></script>
    <script src="js/vendors/lucide.js"></script>
    <script src="js/vendors/tippy.js"></script>
    <script src="js/vendors/dayjs.js"></script>
    <script src="js/vendors/litepicker.js"></script>
    <script src="js/vendors/popper.js"></script>
    <script src="js/vendors/dropdown.js"></script>
    <script src="js/vendors/tiny-slider.js"></script>
    <script src="js/vendors/transition.js"></script>
    <script src="js/vendors/chartjs.js"></script>
    <script src="js/vendors/leaflet-map.js"></script>
    <script src="js/vendors/axios.js"></script>
    <script src="js/utils/colors.js"></script>
    <script src="js/utils/helper.js"></script>
    <script src="js/vendors/simplebar.js"></script>
    <script src="js/vendors/modal.js"></script>
    <script src="js/components/base/theme-color.js"></script>
    <script src="js/components/base/lucide.js"></script>
    <script src="js/components/base/tippy.js"></script>
    <script src="js/components/base/litepicker.js"></script>
    <script src="js/components/report-line-chart.js"></script>
    <script src="js/components/report-pie-chart.js"></script>
    <script src="js/components/report-donut-chart.js"></script>
    <script src="js/components/report-donut-chart-1.js"></script>
    <script src="js/components/simple-line-chart-1.js"></script>
    <script src="js/components/base/tiny-slider.js"></script>
    <script src="js/themes/enigma.js"></script>
    <script src="js/components/base/leaflet-map-loader.js"></script>
    <script src="js/components/mobile-menu.js"></script>
    <script src="js/components/themes/enigma/top-bar.js"></script> 
</body>
</html>
