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


            <div class="inline-flex">
                <a href="{{url('/login')}}" class="group relative flex w-full justify-center rounded-l border border-transparent bg-blue-500 py-2 px-[88px] text-sm font-medium text-white focus:outline-none">
                    Login Admin
                </a>
                <a href="{{url('/register')}}" class="group relative flex w-full justify-center rounded-r border border-transparent bg-blue-800 py-2 px-[88px] text-sm font-medium text-white focus:outline-none">
                    Register Admins
                </a>
            </div>
            <div id="signup">
                <form class="mt-8 space-y-6" action="/register" method="post">
                    @csrf
                    <input type="hidden" name="remember" value="true">
                    <div class="-space-y-px rounded-md shadow-sm">
                        <div>
                            <label for="name" class="sr-only">Name</label>
                            <input id="name" name="name" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="Name">
                        </div>
                        <div>
                            <label for="email-address" class="sr-only">Email Petugas</label>
                            <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none  border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm @error("email") is-invalid @enderror " placeholder="Email address">
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="Password">
                        </div>
                        <div>
                            <label for="role" class="sr-only">Role</label>
                            <select id="role" name="role" class="relative block w-full bg-white appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-600  focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="Role">
                                <option>Admin</option>
                                <option>Kasir</option>
                                <option>Resepsionis</option>
                            </select>
                        </div>
            <br>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none">
                                    Submit
                                </button>
                            </div>
                        </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>