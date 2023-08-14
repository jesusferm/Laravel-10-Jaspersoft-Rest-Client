<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Test Report Jasper Laravel 10 | linuxitos</title>
        <link rel="icon" href="{{ asset('assets/images/favicon.png')}}" type="image/png">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <a href="{{route('/')}}">
                        <img class="d-block mx-auto mb-4" src="{{asset('assets/images/logo.svg')}}" alt="" width="200">
                    </a>
                    <h1 class="d-inline">Welcome to Laravel!</h1> <small class="small align-top">v{{ Illuminate\Foundation\Application::VERSION }}</small>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            PDF: <a href="{{asset($pdf)}}" target="_blank">{{asset($pdf)}}</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <embed src="{{asset($pdf)}}" type="application/pdf" width="100%" height="600px"/>
                    </div>
                </div>
                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
