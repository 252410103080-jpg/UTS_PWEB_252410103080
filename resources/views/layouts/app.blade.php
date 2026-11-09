
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SOloved</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f6f2;
            color: #3e3028;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        main {
            min-height: 75vh;
            padding: 30px 0;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #806f62;
        }
    </style>
</head>
<body>

    @include('components.navbar')

    <main class="container">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
