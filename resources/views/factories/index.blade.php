<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Factories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <a href="{{ route('factories.create') }}">
                            <x-button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Add New Factory') }}
                            </x-button>
                        </a>
                    </div>

                    @if ($factories->isEmpty())
                        <p>No factories found.</p>
                    @else
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2">Factory Name</th>
                                    <th class="px-4 py-2">Location</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">Website</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($factories as $factory)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $factory->factory_name }}</td>
                                        <td class="border px-4 py-2">{{ $factory->location }}</td>
                                        <td class="border px-4 py-2">{{ $factory->email }}</td>
                                        <td class="border px-4 py-2">{{ $factory->website }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('factories.edit', $factory->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-1 px-2 rounded mr-2">
                                                {{ __('Edit') }}
                                            </a>
                                            <form action="{{ route('factories.destroy', $factory->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" style="background-color: #dc2626;" onclick="return confirm('Are you sure you want to delete this factory?');">
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mt-4">
                            {{ $factories->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>