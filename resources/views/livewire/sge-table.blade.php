<div>
    <div class="flex items-center justify-center py-6 md:justify-between">
        <input type="text" placeholder="Search"
            class="w-auto px-6 py-1 border-2 border-gray-400 rounded-full shadow-sm">
        <a href="{{ route('sge_types.create') }}"
            class="flex items-center justify-center px-8 text-white bg-green-600 border-2 border-green-600 rounded-full shadow-sm">
            Add SGE
        </a>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    SGE Type
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Description
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Delete</span>
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">View</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($sge_types as $sge_type)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $sge_type->sgetype }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $sge_type->description }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <form method="post" action="{{ route('sge_types.destroy', $sge_type->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="text-indigo-600 hover:text-indigo-900 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="{{ route('sge_types.edit', $sge_type->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 hover:underline">Edit</a>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="{{ route('sge_types.show', $sge_type->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 hover:underline">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
