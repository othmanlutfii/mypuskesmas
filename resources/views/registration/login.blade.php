@extends('registration/registration')
@section('container')
<div class="inline-flex">
    <a href="{{url('/login')}}" class="group relative flex w-full justify-center rounded-l border border-transparent bg-blue-700 py-2 px-[88px] text-sm font-medium text-white focus:outline-none">
        Login Admin
    </a>
    <a href="{{url('/register')}}" class="group relative flex w-full justify-center rounded-r border border-transparent bg-blue-500 py-2 px-[88px] text-sm font-medium text-white focus:outline-none">
        Register Admin
    </a>
</div>
<div id="login">
    <form class="mt-8 space-y-6" action="#" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="-space-y-px rounded-md shadow-sm">
            <div>
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="Email address">
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="Password">
            </div>
        </div>

        <div class="flex items-center justify-between">
            <div class="text-sm">
                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Forgot your password?</a>
            </div>
            <div class="flex items-center">
                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none">
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>
@endsection