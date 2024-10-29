<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') &Colon; Console ⚡️ {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=outfit:100,300,400,500,600,700|alatsi:400&display=swap"
        rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/pages/console.js'])
    @yield('viteResource')
</head>

<body class="text-gray-900 antialiased">
    <div class="min-h-svh relative isolate flex w-full bg-slate-50 max-lg:flex-col">
        <div class="fixed inset-y-0 left-0 w-64 bg-slate-50 max-lg:hidden">
            {{-- sidebar --}}
            <nav class="flex h-full min-h-0 flex-col">
                {{-- header --}}
                <div class="flex items-center gap-x-2 border-b border-b-slate-950/5 p-4">
                    <img class="size-10" src="{{ asset('favicon.png') }}" alt="Logo">
                    <span class="select-none truncate text-xl font-bold leading-tight tracking-wide">ePerpus
                        Elektro</span>
                </div>

                {{-- menu --}}
                <div role="menu" class="flex flex-1 flex-col overflow-y-auto p-4">
                    <x-sidebar />
                </div>

                {{-- auth user --}}
                <div class="relative flex min-w-0 flex-col border-t border-t-slate-950/5 p-4">
                    <div role="button" id="userAccount"
                        class="flex flex-row items-center gap-3 rounded-lg px-2 py-2.5 hover:bg-gray-800/5">
                        <span class="size-12 inline-grid shrink-0 rounded-lg bg-blue-100 p-1.5 align-middle">
                            <img class="size-full" src="{{ asset('avatars/avatar-' . rand(1, 5) . '.png') }}"
                                alt="Avatar User">
                        </span>
                        <div class="min-w-0 flex-1">
                            <span class="block truncate text-sm/5 font-normal">{{ auth()->user()?->fullname }}</span>
                            <span
                                class="block truncate text-xs/5 font-normal text-gray-500">{{ auth()->user()?->username }}</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-5 pointer-events-none text-gray-600">
                            <path d="m6.293 13.293 1.414 1.414L12 10.414l4.293 4.293 1.414-1.414L12 7.586z"></path>
                        </svg>
                    </div>

                    <div role="alertdialog" class="absolute -top-24 left-0 hidden w-full p-4" id="dialogUserAccount">
                        <div class="flex w-full flex-col gap-1.5 rounded-lg border border-slate-300/50 bg-white p-2">
                            <button id="closeDialogUserAccount"
                                class="inline-flex items-center self-end rounded-full p-0.5 text-center align-middle text-gray-500 transition-colors duration-200 hover:bg-red-400 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    class="size-4 pointer-events-none">
                                    <path
                                        d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                                    </path>
                                </svg>
                            </button>


                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button
                                    class="inline-flex w-full items-center gap-2 rounded-lg px-4 py-2.5 hover:bg-gray-900/5 hover:text-gray-900/80">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="size-5 pointer-events-none rotate-180" viewBox="0 0 24 24">
                                        <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                                        <path
                                            d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
                                        </path>
                                    </svg>
                                    <span class="truncate text-sm/5">Keluar</span>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </nav>
        </div>

        {{-- content --}}
        <main class="flex min-w-0 flex-1 flex-col py-2.5 pb-2.5 pl-[16.04rem]">
            <div class="grow rounded-lg bg-white p-10 shadow-sm ring-1 ring-slate-950/5">
                <div class="mx-auto max-w-6xl">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

</body>

</html>
