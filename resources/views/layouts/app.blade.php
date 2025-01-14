<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hardware Market</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

    <!-- Link to bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous">

    <!-- Link to Social Media Button stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Finish the rest of the job as the stylesheet doesn't do it all... -->
    <style>
        /* Style all font awesome icons */
        .fa {
        padding: 20px;
        font-size: 30px;
        width: 70px;
        text-align: center;
        text-decoration: none;
        }

        /* Add a hover effect if you want */
        .fa:hover {
        opacity: 0.7;
        /* Workaround Implementation:
        because they are links they
        turned blue when being hovered.
        Perhaps find more elegant solution? */
        color:white;
        }

        /* Set a specific color for each brand */

        /* Facebook */
        .fa-facebook {
        background: #3B5998;
        color: white;
        }

        /* Twitter */
        .fa-twitter {
        background: #55ACEE;
        color: white;
        }

        /* Reddit */
        .fa-reddit {
        background: #ff5700;
        color: white;
        }
    </style>

</head>
<body>
    <div id="app">
        <main class="py-4">
            <x-header/>
            <div>
                @yield('content')
            </div>
            <x-footer/>
        </main>
    </div>
</body>
</html>
