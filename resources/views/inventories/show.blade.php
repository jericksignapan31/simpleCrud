@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Item Details</h1>

        <div class="mb-4">
            <p class="text-gray-600 font-semibold">Name:</p>
            <p class="text-lg">{{ $inventory->name }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 font-semibold">SKU:</p>
            <p class="text-lg">{{ $inventory->sku }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 font-semibold">Quantity:</p>
            <p class="text-lg">{{ $inventory->quantity }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 font-semibold">Price:</p>
            <p class="text-lg">₱{{ number_format($inventory->price, 2) }}</p>
        </div>

        @if ($inventory->description)
            <div class="mb-6">
                <p class="text-gray-600 font-semibold">Description:</p>
                <p class="text-lg">{{ $inventory->description }}</p>
            </div>
        @endif

        <div class="flex gap-2">
            <a href="{{ route('inventories.edit', $inventory->id) }}" class="flex-1 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded text-center">
                Edit
            </a>
            <a href="{{ route('inventories.index') }}" class="flex-1 bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded text-center">
                Back
            </a>
        </div>
    </div>
</div>
@endsection
