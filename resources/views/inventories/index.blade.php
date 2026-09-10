@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Inventory Management</h1>
        <a href="{{ route('inventories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add New Item
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">SKU</th>
                    <th class="border border-gray-300 px-4 py-2">Quantity</th>
                    <th class="border border-gray-300 px-4 py-2">Price</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($inventories as $inventory)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">{{ $inventory->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $inventory->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $inventory->sku }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $inventory->quantity }}</td>
                        <td class="border border-gray-300 px-4 py-2">₱{{ number_format($inventory->price, 2) }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <a href="{{ route('inventories.show', $inventory->id) }}" class="text-blue-500 hover:underline mr-2">View</a>
                            <a href="{{ route('inventories.edit', $inventory->id) }}" class="text-yellow-500 hover:underline mr-2">Edit</a>
                            <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="border border-gray-300 px-4 py-2 text-center">No items found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
