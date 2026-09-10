@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Add New Inventory Item</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('inventories.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Name *</label>
                <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">SKU *</label>
                <input type="text" name="sku" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('sku') }}" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Quantity *</label>
                <input type="number" name="quantity" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('quantity', 0) }}" min="0" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Price *</label>
                <input type="number" name="price" step="0.01" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('price') }}" min="0" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea name="description" class="w-full px-3 py-2 border border-gray-300 rounded">{{ old('description') }}</textarea>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="flex-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add Item
                </button>
                <a href="{{ route('inventories.index') }}" class="flex-1 bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded text-center">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
