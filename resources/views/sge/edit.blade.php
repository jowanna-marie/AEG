<x-app-layout>
    <div
        class="flex items-center justify-center p-3 mt-16 text-gray-600 bg-white border-b-4 border-green-600 rounded-xl bg-opacity-90 md:mx-72">


        <form method="POST" action="{{ route('sge_types.update', $sge_type->id) }}">
            @csrf
            @method('patch')
            <div class="flex items-center justify-center mt-6 text-xl md:flex-row flex-cols">
                <x-jet-input type="text" value="{{ $sge_type->sgetype }}" name="sgetype" placeholder="SGE Name:"
                    class="w-auto px-5 py-2 font-semibold border border-gray-600 rounded-lg" autofocus required />
            </div>

            <div class="flex items-center justify-center mt-6">
                <textarea name="description" placeholder="Enter Description Here" cols="100" rows="10"
                    class="p-6 border border-gray-600 md:rounded-xl" required>{{ $sge_type->description }}</textarea>
            </div>

            <x-jet-button class="mt-4 ml-4">
                {{ __('Update') }}
            </x-jet-button>
        </form>
    </div>
</x-app-layout>
