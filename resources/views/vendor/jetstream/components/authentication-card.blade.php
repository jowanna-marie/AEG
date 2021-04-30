<div class="flex flex-col items-center justify-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0" style="background-image: url('{{asset('mapuabg.png')}}');">
    <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md bg-opacity-90 sm:max-w-md md:rounded-2xl">
        {{ $logo }}
        <div class="flex items-center justify-center my-6">
            <span class="text-3xl font-bold text-center text-gray-600">MAPÚA SGE Web Portal</span>
        </div>
        {{ $slot }}
    </div>
</div>
