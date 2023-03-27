<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->

    @vite(['resources/js/app.js',
            'resources/plugins/common/common.min.js',
            'resources/js/custom.min.js',
            'resources/js/settings.js',
            'resources/js/gleek.js',
            'resources/js/styleSwitcher.js',
            'resources/plugins/chart.js/Chart.bundle.min.js',
            'resources/plugins/circle-progress/circle-progress.min.js',
            'resources/plugins/d3v3/index.js',
            'resources/plugins/topojson/topojson.min.js',
            'resources/plugins/datamaps/datamaps.world.min.js',
            'resources/plugins/raphael/raphael.min.js',
            'resources/plugins/morris/morris.min.js',
            'resources/plugins/moment/moment.min.js',
            'resources/plugins/pg-calendar/js/pignose.calendar.min.js',
            'resources/plugins/chartist/js/chartist.min.js',
            'resources/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
            'resources/js/dashboard/dashboard-1.js'])
    @livewireStyles
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('layouts.partials.header')

        @include('layouts.partials.sidebar')

        {{ $slot }}

        @include('layouts.partials.footer')

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    {{-- <script src="{{ asset('plugins/common/common.min.js')}}"></script>
    <script src="{{ asset('js/custom.min.js')}}"></script>
    <script src="{{ asset('js/settings.js')}}"></script>
    <script src="{{ asset('js/gleek.js')}}"></script>
    <script src="{{ asset('js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{ asset('plugins/d3v3/index.js')}}"></script>
    <script src="{{ asset('plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{ asset('plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{ asset('plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



    <script src="{{asset('js/dashboard/dashboard-1.js')}}"></script> --}}
    @livewireScripts
</body>

</html>