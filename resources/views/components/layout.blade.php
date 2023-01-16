<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronatime</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')

    <style>
        .button {
            width: 384px;
        }

        .logo {
            width: 170px;
            height: 42px;
            background-image: url('/images/Coronatime.png');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 640px) {
            .button{
                width: 320px;
            }

            .logo{
                width: 137px;
                height: 33px;
                background-image: url('/images/Coronatime-1.png');
            }
        }
    </style>
</head>

<body class="h-screen w-screen overflow-x-hidden">
    {{ $slot ?? null }}
</body>

</html>
