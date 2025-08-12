@extends('Layouts.main')

@section('title', 'Form Tambah Mobil')

@section('content')
<div class="px-6 py-10 bg-gray-50 min-h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-2xl border border-gray-200 animate-fadeIn">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Tambah Mobil Baru</h1>

        <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <!-- Nama Mobil -->
            <div>
                <label for="nama_mobil" class="text-sm font-medium text-gray-700">Nama Mobil</label>
                <input type="text" id="nama_mobil" name="nama_mobil" required
                    placeholder="Contoh: Toyota Avanza"
                    class="mt-1 w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
            </div>

            <!-- Harga -->
            <div>
                <label for="harga_mobil" class="text-sm font-medium text-gray-700">Harga</label>
                <input type="number" id="harga_mobil" name="harga_mobil" required
                    placeholder="Contoh: 150000000"
                    class="mt-1 w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
            </div>

            <!-- Tahun -->
            <div>
                <label for="tahun_mobil" class="text-sm font-medium text-gray-700">Tahun</label>
                <input type="number" id="tahun_mobil" name="tahun_mobil" required
                    placeholder="Contoh: 2020"
                    class="mt-1 w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
            </div>

            <!-- Kilometer -->
            <div>
                <label for="km_mobil" class="text-sm font-medium text-gray-700">Kilometer (KM)</label>
                <input type="number" id="km_mobil" name="km_mobil" required
                    placeholder="Contoh: 50000"
                    class="mt-1 w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
            </div>

            <!-- Gambar Mobil -->
            <div>
                <label for="gambar_mobil" class="text-sm font-medium text-gray-700">Gambar Mobil</label>
                <input type="file" id="gambar_mobil" name="gambar_mobil"
                    class="mt-1 w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
            </div>

            <!-- Tombol Simpan -->
            <div class="pt-4">
                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-300 transform hover:scale-[1.02]">
                    + Tambah Mobil
                </button>
            </div>
        </form>
    </div>
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 0.4s ease-in-out;
}
</style>
@endsection
