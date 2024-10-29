<div class="flex items-end justify-between gap-4">
    <h1 class="text-2xl/8 font-semibold text-zinc-950">{{ $title }}</h1>

    @if ($showButton ?? true)
        <a href="{{ $route }}"
            class="inline-flex items-center gap-x-2 rounded-lg bg-blue-500 px-3 py-1.5 text-sm font-medium text-white transition duration-300 hover:bg-blue-600">
            <svg viewBox="0 0 24 24" fill="currentColor" class="size-6 pointer-events-none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM16 12.75H12.75V16C12.75 16.41 12.41 16.75 12 16.75C11.59 16.75 11.25 16.41 11.25 16V12.75H8C7.59 12.75 7.25 12.41 7.25 12C7.25 11.59 7.59 11.25 8 11.25H11.25V8C11.25 7.59 11.59 7.25 12 7.25C12.41 7.25 12.75 7.59 12.75 8V11.25H16C16.41 11.25 16.75 11.59 16.75 12C16.75 12.41 16.41 12.75 16 12.75Z" />
            </svg>
            <span class="text-base/5 font-medium">Tambah</span>
        </a>
    @endif
</div>
