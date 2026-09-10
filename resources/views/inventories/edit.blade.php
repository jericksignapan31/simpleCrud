@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Edit Inventory Item</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('inventories.update', $inventory->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Name *</label>
                <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('name', $inventory->name) }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">SKU *</label>
                <input type="text" name="sku" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('sku', $inventory->sku) }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Quantity *</label>
                <input type="number" name="quantity" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('quantity', $inventory->quantity) }}" min="0" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Price *</label>
                <input type="number" name="price" step="0.01" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('price', $inventory->price) }}" min="0" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea name="description" class="w-full px-3 py-2 border border-gray-300 rounded">{{ old('description', $inventory->description) }}</textarea>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="flex-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Item
                </button>
                <a href="{{ route('inventories.index') }}" class="flex-1 bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded text-center">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
