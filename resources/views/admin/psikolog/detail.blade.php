@extends('admin.components.app')

@section('container')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

    <section class="w-auto p-6 mx-auto bg-white rounded-md shadow-md">
        <h2 class="text-lg font-semibold capitalize">Detail {{ $psikolog->nama }}</h2>

        <div class="grid grid-cols-1 gap-6 mt-4">
            <div class="flex flex-col items-center mb-6">
                <!-- Foto Psikolog -->
                <img src="{{ asset('storage/' . $psikolog->image) }}" alt="Foto Psikolog"
                    style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover;">

                <!-- Nama Psikolog -->
                <h2 class="mt-4 text-xl font-bold">{{ $psikolog->nama }}</h2>

                <!-- Role Psikolog -->
                <p class="mt-2 text-gray-700">{{ $psikolog->role }}</p>
            </div>


            <!-- Tentang -->
            <div>
                <label for="tentang">Tentang Psikolog</label>
                <textarea id="tentang" name="tentang" rows="4"
                    class="w-full px-4 py-2 mt-2 bg-white border rounded-md focus:border-red-500 focus:outline-none focus:ring-0"
                    readonly>{{ $psikolog->tentang }}</textarea>
            </div>

            <!-- Kasus -->
            <div>
                <label for="kasus">Kasus yang Ditangani</label>
                <textarea id="kasus" name="kasus" rows="4"
                    class="w-full px-4 py-2 mt-2 bg-white border rounded-md focus:border-red-500 focus:outline-none focus:ring-0"
                    readonly>{{ $psikolog->kasus }}</textarea>
            </div>

            <!-- Harga -->
            <div>
                <label for="price">Harga Per Sesi</label>
                <input id="price" type="text" name="price"
                    value="Rp {{ number_format($psikolog->price, 0, ',', '.') }}"
                    class="w-full px-4 py-2 mt-2 bg-white border rounded-md focus:border-red-500 focus:outline-none focus:ring-0"
                    readonly>
            </div>



            <!-- Tombol -->
            <div class="flex justify-end mt-6">
                <a href="/dashboard/psikolog/edit-psikolog/{{$psikolog->id}}"
                    class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Edit</a>
                <a href="/dashboard/psikolog"
                    class="px-6 py-2 ml-2 leading-5 text-white transition-colors duration-200 transform bg-stone-500 rounded-md hover:bg-stone-600 focus:outline-none focus:bg-stone-600">Kembali</a>
            </div>
        </div>
    </section>
@endsection
