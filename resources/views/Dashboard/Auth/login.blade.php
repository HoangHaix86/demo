<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <form method="post" action="{{ route('dashboard.checkLogin') }}" class="max-w-sm m-auto mt-6">
        @csrf
        @method('post')
        <div class="border-t-4 border-teal-700 overflow-hidden rounded shadow-md">
            <h3 class="text-xl text-center mt-8 mb-8">Welcome back!</h3>
            <div class="px-4 mb-4">
                <input type="text" name="username" placeholder="Username" class="border border-grey rounded w-full p-3">
            </div>
            <div class="px-4 mb-4">
                <input type="text" name="password" placeholder="Password" class="border border-grey rounded w-full p-3">
            </div>
            <div class="px-4 mb-4 flex">
                {{-- <div class="w-1/2">
                    <input type="checkbox" class="align-middle cursor-pointer -mt-1" id="remember-me">
                    <label for="remember-me" class="align-middle text-grey-dark text-md cursor-pointer">Remember
                        me</label>
                </div> --}}
                {{-- <div class="w-1/2 text-right">
                    <a href="#" class="font-semibold no-underline text-black">Forgot your password?</a>
                </div> --}}
            </div>
            <div class="px-4 mb-10">
                <button
                    class="border border-teal-dark bg-teal-700 rounded w-full px-4 py-3 text-white font-semibold">Sign
                    in</button>
            </div>
            {{-- <div class="bg-grey-lighter text-center text-grey-dark py-5">
                Don't have a account? <a href="#" class="font-semibold no-underline text-black">Signup</a>
            </div> --}}
        </div>
    </form>
</body>

</html>
