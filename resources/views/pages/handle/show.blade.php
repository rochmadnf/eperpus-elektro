@extends('layouts.app')

@section('title', 'Detail Berkas')

@php
    $prevUrl = str()->of(url()->previous())->contains(config('app.url')) ? url()->previous() : route('welcome');

    $loadedAsset = asset(auth()->check() ? $file->filepath : $file->abstract_path);
@endphp

@section('content')
    <div class="relative flex min-h-screen w-full flex-col">
        @if (!auth()->check())
            <a href="{{ route('login') }}"
                class="absolute bottom-4 z-50 inline-flex items-center gap-4 self-center rounded-xl bg-blue-500 px-4 py-2 text-white shadow-md shadow-blue-800">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    class="size-8 pointer-events-none">
                    <path d="M12 7.75C10.11 7.75 9.75 8.54 9.75 10V10.62H14.25V10C14.25 8.54 13.89 7.75 12 7.75Z" />
                    <path
                        d="M11.9984 15.0984C12.606 15.0984 13.0984 14.606 13.0984 13.9984C13.0984 13.3909 12.606 12.8984 11.9984 12.8984C11.3909 12.8984 10.8984 13.3909 10.8984 13.9984C10.8984 14.606 11.3909 15.0984 11.9984 15.0984Z" />
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM17.38 14.5C17.38 16.7 16.7 17.38 14.5 17.38H9.5C7.3 17.38 6.62 16.7 6.62 14.5V13.5C6.62 11.79 7.03 11 8.25 10.73V10C8.25 9.07 8.25 6.25 12 6.25C15.75 6.25 15.75 9.07 15.75 10V10.73C16.97 11 17.38 11.79 17.38 13.5V14.5Z" />
                </svg>
                <span class="font-medium">Masuk untuk Akses Penuh</span>
            </a>
        @endif

        <div class="flex h-12 flex-row items-center gap-4 bg-blue-500 text-white">
            <a href="{{ $prevUrl }}" class="bg-gray-800 px-2 py-3">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    class="size-6 pointer-events-none">
                    <path
                        d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM18 12.75H7.81L10.82 15.76C11.11 16.05 11.11 16.53 10.82 16.82C10.67 16.97 10.48 17.04 10.29 17.04C10.1 17.04 9.91 16.97 9.76 16.82L5.47 12.53C5.33 12.39 5.25 12.2 5.25 12C5.25 11.8 5.33 11.61 5.47 11.47L9.76 7.18C10.05 6.89 10.53 6.89 10.82 7.18C11.11 7.47 11.11 7.95 10.82 8.24L7.81 11.25H18C18.41 11.25 18.75 11.59 18.75 12C18.75 12.41 18.41 12.75 18 12.75Z" />
                </svg>
            </a>

            <div class="flex flex-1 items-center">
                <h3 class="truncate text-sm font-medium">{{ $file->title }}</h3>
            </div>
        </div>

        <div class="grid grow">
            <iframe class="min-h-full w-full"
                src="{{ asset('assets/vendor/pdfjs/web/viewer.html?file=' . $loadedAsset . '&download') }}"
                frameborder="0"></iframe>
        </div>
    </div>
@endsection
