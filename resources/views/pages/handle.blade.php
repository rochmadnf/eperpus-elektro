@extends('layouts.app')

@section('title', 'Daftar Berkas')

@section('content')
    <main class="flex min-h-screen w-full flex-col bg-slate-50 bg-circuit-gray-300/60">
        <div class="p-10">
            <div class="space-y-6 rounded-lg bg-white p-6">
                <header class="flex flex-row items-center gap-x-4">
                    <img src="{{ asset('favicon.png') }}" class="w-16" alt="Logo">
                    <h1 class="select-none text-center font-alatsi text-3xl font-bold uppercase">
                        Perpustakaan Elektronik Elektro</h1>
                </header>

                <div class="grow space-y-8">
                    <form action="{{ route('handle.search') }}" method="GET">
                        <div class="group/search">
                            <div
                                class="flex w-7/12 items-center gap-x-2 rounded-lg border border-slate-500/50 bg-white py-2 pl-4 pr-2 focus:border-amber-600 group-focus-within/search:border-amber-400 group-focus-within/search:shadow group-focus-within/search:shadow-amber-500 group-focus-within/search:ring-1 group-focus-within/search:ring-amber-400">
                                <input type="text" name="keyword"
                                    class="block w-full bg-transparent py-2 text-xl text-slate-900 outline-none placeholder:uppercase placeholder:text-slate-600/30 focus:border-none"
                                    placeholder="Katakunci..." value="{{ $prevKeyword }}">
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

                    <div role="listitem" class="flex w-full flex-col gap-8">
                        @foreach ($files as $file)
                            <div class="rounded-lg border border-slate-300/30 p-8 shadow shadow-slate-400">
                                <h3 aria-label="title">
                                    <a href="{{ route('handle.file.show', ['id' => $file->uuid]) }}"
                                        class="text-xl font-semibold tracking-wide">{{ $file->title }}</a>
                                </h3>

                                <div class="mt-6 space-y-1.5">
                                    <h5 class="text-base/5 font-medium uppercase">{{ $file->fileCategory->name }}</h5>
                                    <span class="block font-light text-gray-700">{{ $file->authors }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
