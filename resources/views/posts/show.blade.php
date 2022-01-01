<x-layout>

    {{-- <article> --}}
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        <x-post-detail-card :post="$post"/>
    </main>
    {{-- </article> --}}
    {{-- <div class="hidden lg:block">
        <a href="/" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8 items-right">Volver</a>
    </div> --}}
</x-layout>
