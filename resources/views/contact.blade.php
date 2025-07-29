@extends('Layouts.main')

@section('title', 'Hubungi Kami - Baherindo Motor')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">

    <h1 class="text-3xl font-bold text-red-800 mb-4">Hubungi Kami</h1>
    
    <p class="text-gray-700 mb-4">
        Terima kasih telah mengunjungi <strong>Baherindo Motor</strong>. Jika Anda memiliki pertanyaan, ingin melakukan pemesanan, 
        atau membutuhkan informasi lebih lanjut mengenai motor yang kami jual, jangan ragu untuk menghubungi kami melalui kontak berikut:
    </p>

    <ul class="space-y-4 text-gray-800">
        <li>
            <strong class="text-red-700">Telepon:</strong>
            <ul class="ml-4 list-disc">
                @foreach ($nomorhp as $nomor)
                    <li>
                        <a href="tel:{{ str_replace(' ', '', $nomor) }}" class="text-red-600 hover:underline">
                            {{ $nomor }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>

        <li>
            <strong class="text-red-700">Email:</strong>
            <ul class="ml-4 list-disc">
                @foreach ($email as $e)
                    <li>
                        <a href="mailto:{{ $e }}" class="text-red-600 hover:underline">
                            {{ $e }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>

        <li>
            <strong class="text-red-700">Alamat:</strong> Jl. Motor Sejahtera No. 88, Bekasi, Indonesia
        </li>
    </ul>

    <p class="text-gray-600 mt-6">
        Tim kami siap membantu Anda setiap hari kerja dari pukul <strong>08.00 hingga 17.00 WIB</strong>.
    </p>
</div>
@endsection
