<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="fixed top-0 left-0 right-0 h-16 md:left-60 bg-white shadow-lg transition-all || aleft-60 az-10">
        <div class="w-full h-full px-4 flex items-center justify-between">
            <div class="flex-grow">
                <div class="w-full h-full flex items-center justify-between">
                    <div>
                        <button type="buttom" id="btn_menu">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 6l16 0"></path>
                                <path d="M4 12l16 0"></path>
                                <path d="M4 18l16 0"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-2">
                        <p class=" inline-block">{{ Auth::user()->name }}</p>
                        <a href="{{ route('dashboard.logout') }}" class="inline-block">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- Sidebar --}}
    <nav
        class="fixed top-0 left-0 bottom-0 w-0 md:w-60 overflow-hidden bg-white shadow-lg transition-all  || aw-60 az-10">
        <div class="h-16 bg-gray-300 text-center">
            <span class="text-3xl font-bold">Balcony Hotel</span>
        </div>
        <div class="shadow-lg p-4">
            <ul class="[&>li+li]:mt-2">
                <li><a href="{{ route('dashboard.dashboard.index') }}"
                        class="block border-b {{ request()->is('dashboard') ? 'text-red-500' : '' }} ">Trang chủ</a>
                </li>
                <li><a href="{{ route('dashboard.accommodations.index') }}"
                        class="block border-b {{ request()->is('dashboard/accommodations*') ? 'text-red-500' : '' }}">Loại
                        phòng</a></li>
                <li><a href="{{ route('dashboard.services.index') }}"
                        class="block border-b {{ request()->is('dashboard/services*') ? 'text-red-500' : '' }}">Dịch
                        vụ</a>
                </li>
                <li><a href="{{ route('dashboard.promotions.index') }}"
                        class="block border-b {{ request()->is('dashboard/promotions*') ? 'text-red-500' : '' }}">Khuyến
                        mãi</a></li>
                <li><a href="{{ route('dashboard.explores.index') }}"
                        class="block border-b {{ request()->is('dashboard/explores*') ? 'text-red-500' : '' }}">Khám
                        phá</a></li>
                <li><a href="{{ route('dashboard.gallery.index') }}"
                        class="block border-b {{ request()->is('dashboard/gallery*') ? 'text-red-500' : '' }}">Album</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="transition-all pt-16 pl-0 md:pl-60">
        @yield('main')
    </main>

    <script>
        let btnMenu = document.querySelector('#btn_menu');
        let nav = document.querySelector('nav');
        let header = document.querySelector('header');
        let main = document.querySelector('main');
        btnMenu.onclick = () => {
            nav.classList.toggle('w-60');
            nav.classList.toggle('z-10');
            header.classList.toggle('left-60');
            header.classList.toggle('z-10');

            nav.classList.toggle('md:w-0');
            header.classList.toggle('md:left-0');
            main.classList.toggle('md:pl-0');
        }
    </script>
</body>

</html>
