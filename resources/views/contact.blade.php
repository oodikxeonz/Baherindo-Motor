@extends('Layouts.main')

@section('title', 'Hubungi Kami - Baherindo Motor')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-6">
    
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">Hubungi Kami</h1>
        <p class="mt-4 text-gray-700 max-w-2xl mx-auto leading-relaxed">
            Terima kasih telah mengunjungi <strong>Baherindo Motor</strong>. 
            Jika Anda memiliki pertanyaan, ingin melakukan pemesanan, atau membutuhkan informasi lebih lanjut 
            mengenai motor yang kami jual, jangan ragu untuk menghubungi kami melalui kontak berikut:
        </p>
    </div>

    <!-- Kontak -->
    <div class="max-w-4xl mx-auto grid gap-8 sm:grid-cols-2">
        
        <!-- Telepon -->
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
            <div class="flex items-center mb-4">
                <i class="fa-solid fa-phone text-gray-800 text-2xl mr-3"></i>
                <h2 class="text-lg font-semibold text-gray-900">Telepon</h2>
            </div>
            <ul class="space-y-2 text-gray-700">
                @foreach ($nomorhp as $nomor)
                    <li>
                        <a href="tel:{{ str_replace(' ', '', $nomor) }}" class="text-gray-800 hover:text-black hover:underline">
                            {{ $nomor }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Email -->
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
            <div class="flex items-center mb-4">
                <i class="fa-solid fa-envelope text-gray-800 text-2xl mr-3"></i>
                <h2 class="text-lg font-semibold text-gray-900">Email</h2>
            </div>
            <ul class="space-y-2 text-gray-700">
                @foreach ($email as $e)
                    <li>
                        <a href="mailto:{{ $e }}" class="text-gray-800 hover:text-black hover:underline">
                            {{ $e }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Alamat -->
        <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition sm:col-span-2">
            <div class="flex items-center mb-4">
                <i class="fa-solid fa-location-dot text-gray-800 text-2xl mr-3"></i>
                <h2 class="text-lg font-semibold text-gray-900">Alamat</h2>
            </div>
            <p class="text-gray-700 leading-relaxed">
                Jl. Motor Sejahtera No. 88, Bekasi, Indonesia
            </p>
        </div>
    </div>

    <!-- Jam Operasional -->
    <div class="text-center mt-12 text-gray-600">
        Tim kami siap membantu Anda setiap hari kerja dari pukul 
        <strong>08.00</strong> hingga <strong>17.00 WIB</strong>.
    </div>
</div>
@endsection
