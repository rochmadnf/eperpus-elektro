@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <main class="flex min-h-screen w-full flex-col items-center bg-slate-50 bg-circuit-gray-300/60">
        <div class="mt-16 space-y-16">
            <section role="heading" class="flex flex-col items-center gap-y-4">
                <img src="{{ asset('favicon.png') }}" class="mx-auto w-40" alt="Logo">
                <h1 class="select-none text-center font-alatsi text-5xl font-bold uppercase">
                    Perpustakaan Elektronik <br />Elektro</h1>
            </section>

            <form class="space-y-8 pl-2" action="{{ route('handle.search') }}" method="GET">
                {{-- keyword --}}
                <div class="group/search mb-5 space-y-2">
                    <h3 class="text-base font-medium uppercase">Akses perpustakaan
                        tanpa batas dan tanpa biaya.</h3>
                    <div
                        class="flex items-center gap-x-2 rounded-lg border border-slate-500/50 bg-white px-4 py-4 focus:border-amber-600 group-focus-within/search:border-amber-400 group-focus-within/search:shadow-md group-focus-within/search:shadow-amber-600 group-focus-within/search:ring-2 group-focus-within/search:ring-amber-400">
                        <input type="text" name="keyword"
                            class="block w-full bg-transparent py-2 text-xl text-slate-900 outline-none placeholder:uppercase placeholder:text-slate-600/30 focus:border-none"
                            placeholder="Katakunci...">
                        <button
                            class="inline-flex items-center justify-center gap-x-2 rounded-md bg-amber-500 px-4 py-3 font-medium text-white hover:bg-amber-600"
                            type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"
                                class="size-5 pointer-events-none">
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <span class="uppercase">Cari</span>
                        </button>
                    </div>
                </div>
            </form>

            {{-- statistic --}}
            <div class="grid w-full grid-cols-4 divide-x-2 divide-gray-900 pl-2">
                <div class="flex flex-col justify-center space-y-1 pr-6">
                    <h3 class="font-source-sans text-4xl font-bold">{{ $files->where('file_category_id', '=', 1)->count() }}
                    </h3>
                    <p class="text-xl font-medium uppercase">Buku</p>
                </div>
                <div class="flex flex-col justify-center space-y-1 px-6">
                    <h3 class="font-source-sans text-4xl font-bold">{{ $files->where('file_category_id', '=', 2)->count() }}
                    </h3>
                    <p class="text-xl font-medium uppercase">Skripsi</p>
                </div>
                <div class="flex flex-col justify-center space-y-1 px-6">
                    <h3 class="font-source-sans text-4xl font-bold">{{ $files->where('file_category_id', '=', 3)->count() }}
                    </h3>
                    <p class="text-xl font-medium uppercase">Laporan KP</p>
                </div>
                <div class="flex flex-col justify-center space-y-1 pl-6">
                    <h3 class="font-source-sans text-4xl font-bold">{{ $files->where('file_category_id', '=', 4)->count() }}
                    </h3>
                    <p class="text-xl font-medium uppercase">Laporan Magang</p>
                </div>
            </div>
        </div>
    </main>
@endsection
