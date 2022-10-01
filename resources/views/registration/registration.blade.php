<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} ">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myPuskesmas</title>

    @vite('resources/js/app.js')
</head>

<body class="h-screen bg-gray-50">
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div class="hover:animate-pulse">
                <img class="mx-auto h-12 w-auto scale-300" src="https://img.icons8.com/external-icematte-lafs/1000/external-Hospital-medical-menu-icematte-lafs.png" alt="Your Company">
                <div>
                    <h4 class="mt-6 text-center text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-sky-700 ">myPuskesmas</h4>
                </div>
            </div>
            @yield('container')
        </div>
    </div>
</body>

</html>