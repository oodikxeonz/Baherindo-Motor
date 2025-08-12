@extends('layouts.main')

@section('title', 'Tentang Kami - Baherindo Motor')

@section('content')
<div class="bg-gray-100 min-h-screen py-10 px-6">

    <!-- Hero Section -->
    <div class="text-center mb-10">
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 drop-shadow-md">Tentang Kami</h1>
        <p class="mt-3 text-gray-700 max-w-3xl mx-auto">
            <strong>Baherindo Motor</strong> adalah dealer motor second terpercaya dan termahal di planet Bekasi.
            Berdiri sejak tahun 2010, kami telah melayani ribuan pelanggan dengan kualitas unit terbaik dan pelayanan profesional.
        </p>
    </div>

    <!-- Visi & Misi -->
    <div class="max-w-5xl mx-auto grid gap-6 sm:grid-cols-2 mb-10">
        <!-- Visi -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">Visi</h2>
            <p class="text-gray-700">
                Menjadi pusat jual beli motor bekas paling eksklusif dan terpercaya di Indonesia.
            </p>
        </div>

        <!-- Misi -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">Misi</h2>
            <ul class="space-y-2 text-gray-700 list-disc list-inside">
                <li>Menyediakan motor second dengan kualitas terbaik dan harga bersaing.</li>
                <li>Memberikan pelayanan yang profesional, cepat, dan ramah.</li>
                <li>Menjadi mitra terpercaya bagi para pecinta otomotif di seluruh Indonesia.</li>
            </ul>
        </div>
    </div>

    <!-- Layanan Kami -->
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Layanan Kami</h2>
        <ul class="space-y-3 text-gray-700">
            <li class="flex items-center">
                <i class="fa-solid fa-motorcycle text-gray-800 mr-3"></i>
                Jual beli motor bekas berkualitas
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-tags text-gray-800 mr-3"></i>
                Konsultasi harga dan kondisi motor
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-road text-gray-800 mr-3"></i>
                Test ride dan inspeksi unit
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-truck text-gray-800 mr-3"></i>
                Pengiriman motor ke seluruh Indonesia
            </li>
        </ul>
    </div>

    <!-- Footer -->
    <div class="text-center text-gray-600 mt-10">
        Terima kasih telah mempercayakan kebutuhan kendaraan Anda kepada <strong>Baherindo Motor</strong>.
    </div>
</div>
@endsection
