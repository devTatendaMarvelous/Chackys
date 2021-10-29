<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="/css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="/css/color-themes/default-theme.css" rel="stylesheet">


<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link href="/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="/css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="/css/color-themes/default-theme.css" rel="stylesheet">


<link rel="shortcut icon" href="images/fa vicon.png" type="image/x-icon">
<link rel="icon" href="images/favico n.png" type="image/x-icon">

<!-- Responsive -->




        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts


        
<script src="/js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>

<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/script.js"></script>
<script src="/js/color-settings.js"></script>

<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/mixitup.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/script.js"></script>
<script src="/js/color-settings.js"></script>
    </body>
</html>
