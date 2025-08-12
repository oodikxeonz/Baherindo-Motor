@extends('Layouts.main')

@section('title', 'Welcome to Baherindo Mobil')

@section('content')
<div class="bg-gray-100 min-h-screen">

    <!-- Header -->
    <section class="max-w-7xl mx-auto px-4 pt-10 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900">
            Baherindo Mobil
        </h1>
        <p class="mt-3 text-lg text-gray-600">
            Jual Beli Mobil Second Termahal di Planet Bekasi
        </p>
    </section>

    <!-- Grid Mobil -->
    <section class="max-w-7xl mx-auto px-4 py-10">
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            @foreach ($mobil as $m)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:border-gray-300 transition-all duration-300 group">
 <a href="{{ route('mobil.show', $m->id) }}" class="block">                    <!-- Gambar -->
                    <div class="overflow-hidden rounded-t-xl">
                        <img src="{{ asset('storage/' . $m->gambar_mobil) }}" 
                             alt="{{ $m->nama_mobil }}" 
                             class="w-full aspect-square object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <!-- Info -->
                    <div class="p-4">
                        <h1 class="text-gray-900 font-bold text-lg">
                            Rp {{ number_format($m['harga_mobil'], 0, ',', '.') }}
                        </h1>
                        <h2 class="text-gray-700 font-medium mt-1 line-clamp-1">
                            {{ $m['nama_mobil'] }}
                        </h2>
                        <div class="flex justify-between items-center mt-3 text-sm text-gray-500">
                            <span class="px-2 py-0.5 bg-gray-100 rounded-full border border-gray-200">
                                {{ $m['tahun_mobil'] }}
                            </span>
                            <span>
                                {{ number_format($m['km_mobil'], 0, ',', '.') }} KM
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
