@extends('Layouts.main')

@section('title', 'Form Edit Motor')

@section('content')
<div class="px-6 py-10 bg-gray-50 min-h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-2xl border border-gray-200 animate-fadeIn">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Edit Motor</h1>

        <form action="{{ route('motor.update', $motor->id) }}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Motor -->
            <div>
                <label for="nama_motor" class="text-sm font-medium text-gray-700">Nama Motor</label>
                <input type="text" id="nama_motor" name="nama_motor" required
                    value="{{ old('nama_motor', $motor->nama_motor) }}"
                    placeholder="Masukkan nama motor"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
            </div>

            <!-- Harga -->
            <div>
                <label for="harga_motor" class="text-sm font-medium text-gray-700">Harga</label>
                <input type="number" id="harga_motor" name="harga_motor" required
                    value="{{ old('harga_motor', $motor->harga_motor) }}"
                    placeholder="Masukkan harga"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
            </div>

            <!-- Tahun -->
            <div>
                <label for="tahun_motor" class="text-sm font-medium text-gray-700">Tahun</label>
                <input type="number" id="tahun_motor" name="tahun_motor" required
                    value="{{ old('tahun_motor', $motor->tahun_motor) }}"
                    placeholder="Masukkan tahun"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
            </div>

            <!-- Kilometer -->
            <div>
                <label for="km_motor" class="text-sm font-medium text-gray-700">Kilometer (KM)</label>
                <input type="number" id="km_motor" name="km_motor" required
                    value="{{ old('km_motor', $motor->km_motor) }}"
                    placeholder="Masukkan kilometer"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
            </div>

            <!-- Gambar Motor -->
            <div>
                <label for="gambar_motor" class="text-sm font-medium text-gray-700">Gambar Motor</label>
                <input type="file" id="gambar_motor" name="gambar_motor"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-200">
                
                @if($motor->gambar_motor)
                    <div class="mt-3">
                        <img src="{{ asset('storage/' . $motor->gambar_motor) }}" alt="Foto Motor" class="w-32 h-32 object-cover rounded-lg shadow-md">
                    </div>
                @endif
            </div>

            <!-- Tombol Simpan -->
            <div class="pt-4">
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-300 transform hover:scale-[1.02]">
                    Simpan Perubahan
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
