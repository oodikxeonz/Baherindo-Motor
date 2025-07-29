@extends('Layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
<div class="bg-gray-100 min-h-screen">

    <h1 class="p-4 text-4xl font-bold mb-2 drop-shadow-lg text-red-800">Selamat Datang di Baherindo Motor</h1>
    <p class="p-4 text-lg italic text-gray-700">Jual Beli Motor Second Termahal di Planet Bekasi</p>

    <div class="p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        @foreach ($motor as $m )
        <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="/aset/finn.jpg" alt="Foto Motor" class="w-full aspect-square object-cover rounded-md mb-3">
            <h1 class="text-red-700 font-bold text-xl">Rp. {{ number_format($m['price'], 0, ',', '.') }}</h1>
            <h2 class="text-lg font-semibold">{{ $m['name'] }}</h2>
            <div class="flex gap-3 text-sm text-gray-500">
                <span>{{ $m['Tahun'] }}</span>
                <span>{{ $m['km'] }} KM</span>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
