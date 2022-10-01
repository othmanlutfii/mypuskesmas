@extends('registration/registration')
@section('container')
<div class="inline-flex">
    <a href="{{url('/login')}}" class="group relative flex w-full justify-center rounded-l border border-transparent bg-blue-500 py-2 px-[88px] text-sm font-medium text-white focus:outline-none">
        Login Admin
    </a>
    <a href="{{url('/register')}}" class="group relative flex w-full justify-center rounded-r border border-transparent bg-blue-800 py-2 px-[88px] text-sm font-medium text-white focus:outline-none">
        Register Admin
    </a>
</div>
<div id="signup">
    <form class="mt-8 space-y-6" action="#" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="-space-y-px rounded-md shadow-sm">
            <div>
                <label for="first-name" class="sr-only">First Name</label>
                <input id="first-name" name="first-name" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="First Name">
            </div>
            <div>
                <label for="last-name" class="sr-only">Last Name</label>
                <input id="last-name" name="last-name" required class="relative block w-full appearance-none rounded-none  border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="Last Name">
            </div>
            <div>
                <label for="email-address" class="sr-only">Email Petugas</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none  border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="Email address">
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="Password">
            </div>
            <div>
                <label for="role" class="sr-only">Role</label>
                <select id="role" name="role" class="relative block w-full bg-white appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-600  focus:z-10 focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm" placeholder="Role">
                    <option selected>Role</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                </select>
            </div>
<br>
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