@extends('admin.components.app')

@section('container')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

    <section class="w-auto p-6 mx-auto bg-white rounded-md shadow-md ">
        <h2 class="text-lg font-semibold capitalize">Tambah Data Psikolog</h2>

        <form action="/dashboard/psikolog/add-psikolog" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap mt-4">
                <!-- Nama Psikolog -->
                <div class="w-1/2 md:w-1/2 pr-0 md:pr-3 mb-4 md:mb-0 px-2">
                    <label for="nama">Nama Psikolog</label>
                    <input id="nama" type="text" name="nama" placeholder="Masukkan Nama"
                        class="w-full px-4 py-2 mt-2 bg-white border rounded-md focus:border-red-500 focus:outline-none focus:ring-0"
                        required>
                </div>

                <!-- Role -->
                <div class="w-1/2 md:w-1/2 pl-0 md:pl-3 mb-4 md:mb-0 px-2">
                    <label for="role">Role</label>
                    <input id="role" type="text" name="role" placeholder="Contoh: Psikolog Klinis"
                        class="w-full px-4 py-2 mt-2 bg-white border rounded-md focus:border-red-500 focus:outline-none focus:ring-0"
                        required>
                </div>
            </div>

            <!-- Input yang lain tetap 1 kolom -->
            <div class="mt-4">
                <label for="tentang">Tentang Psikolog</label>
                <textarea id="tentang" name="tentang" placeholder="Jelaskan tentang psikolog"
                    class="w-full px-4 py-2 mt-2 bg-white border rounded-md focus:border-red-500 focus:outline-none focus:ring-0"
                    rows="4" required></textarea>
            </div>

            <div class="mt-4">
                <label for="kasus">Kasus yang Ditangani</label>
                <textarea id="kasus" name="kasus" placeholder="Contoh: Depresi, Kecemasan, Trauma"
                    class="w-full px-4 py-2 mt-2 bg-white border rounded-md focus:border-red-500 focus:outline-none focus:ring-0"
                    rows="4" required></textarea>
            </div>

            <div class="mt-4">
                <label for="price">Harga Per Sesi</label>
                <input id="price" type="number" name="price" placeholder="Contoh: 250000"
                    class="w-full px-4 py-2 mt-2 bg-white border rounded-md focus:border-red-500 focus:outline-none focus:ring-0"
                    required>
            </div>

            <div class="w-full mt-4">
                <label for="file_input">Upload Foto Psikolog</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" id="file_input" type="file" name="image"
                    accept="image/svg+xml, image/png, image/jpeg">
                <p class="text-sm text-black-500 dark:text-black-300" id="file_input_help">*SVG, PNG, JPG, JPEG</p>
            </div>


            <div class="flex justify-end mt-6">
                <a href="/dashboard/psikolog/"
                    class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-stone-500 rounded-md hover:bg-stone-600 focus:outline-none focus:bg-stone-600">Kembali</a>
                <button type="submit"
                    class="px-6 py-2 ml-2 leading-5 text-white transition-colors duration-200 transform bg-green-700 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Simpan</button>
            </div>
        </form>
    </section>
@endsection
