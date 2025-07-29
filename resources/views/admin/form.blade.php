@extends('Layouts.main')

@section('title', 'Form Tambah Motor')

@section('content')
<div class="px-6 py-10">
    <h1 class="text-3xl font-bold text-red-800 mb-6">Tambah Motor Baru</h1>

    <form action="" method="POST" class="space-y-6 w-full">
        @csrf

        <div>
            <label for="name" class="text-sm font-medium text-gray-700">Nama Motor</label>
            <input type="text" id="name" name="name" required
                placeholder="Nama Motor"
                class="p-3 mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>

        <div>
            <label for="price" class="text-sm font-medium text-gray-700">Harga</label>
            <input type="number" id="price" name="price" required
                placeholder="Harga"
                class="p-3 mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>

        <div>
            <label for="year" class="text-sm font-medium text-gray-700">Tahun</label>
            <input type="number" id="year" name="year" required
                placeholder="Tahun"
                class="p-3 mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>

        <div>
            <label for="km" class="text-sm font-medium text-gray-700">Kilometer (KM)</label>
            <input type="number" id="km" name="km" required
                placeholder="Kilometer"
                class="p-3 mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm">
        </div>

        <div class="pt-4">
            <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md transition duration-200">
                + Tambah Motor
            </button>
        </div>
    </form>
</div>
@endsection
