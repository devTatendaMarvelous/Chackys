<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sign In</title>
    
    <link href="{{asset('css/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('css/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/assets/css/authentication/form-2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/assets/css/forms/switches.css')}}">
</head>
<body class="form">
    
   
    <!--  END LOADER -->

    <div class="form-container outer">
{{-- =================CONMTENT====================== --}}


     @yield('content')


     {{-- ============================================= --}}
      </div>
<!-- ======================================================================================================================== -->
 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('css/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('css/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('css/assets/js/authentication/form-2.js')}}"></script>
    <script>
        var loaderElement = document.querySelector('#load_screen');
        setTimeout( function() {
            loaderElement.style.display = "none";
        }, 3000);
    </script>

    <!-- ============================================================= -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('css/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('css/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('css/assets/js/app.js')}}"></script>
    
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('css/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{asset('css/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('css/assets/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

</body>


</html>