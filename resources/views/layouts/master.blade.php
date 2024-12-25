<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <style>
            /* Kurangi jarak padding sesuai tinggi navbar */
            body {
                padding-top: 56px; /* Sesuaikan sesuai tinggi navbar */
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <!-- Navbar fixed di atas -->
            @include('layouts.navbar')

            <!-- Flash message dengan jarak kecil -->
            <div class="container mt-2"> <!-- mt-2 mengurangi jarak -->
                @include('layouts.flash')
            </div>

            <!-- Main content -->
            <div class="main p-3">
                <div class="text mb-2">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
