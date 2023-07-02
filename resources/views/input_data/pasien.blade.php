@extends('input_data/navbar')
@section('container')
<main>
    <div class="pt-6 px-4 py-6">
        <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex-shrink-0 text-center">
                        <h3 class="text-3xl font-extrabold mb-2  text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-[#07074D]">Input Pasien</h3>
                    </div>
                </div>
                <form action="/pasien" method="POST">
                    @csrf

                    <div class="mb-5">
                        <label for="nama_pasien" class="mb-3 block text-base font-medium text-blue-700">
                            Nama
                        </label>
                        <input type="text" name="nama_pasien" id="nama_pasien" placeholder="Nama Lengkap" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="alamat_pasien" class="mb-3 block text-base font-medium text-blue-700">
                            Alamat
                        </label>
                        <input type="text" name="alamat_pasien" id="alamat_pasien" placeholder="Alamat Lengkap" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="dokter_id" class="mb-3 block text-base font-medium text-blue-700">
                            Dokter
                        </label>
                        <input type="text" name="dokter_id" id="dokter_id" placeholder="ID Dokter" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="keluhan" class="mb-3 block text-base font-medium text-blue-700">
                            Keluhan
                        </label>
                        <textarea rows="4" name="keluhan" id="keluhan" placeholder="Jelaskan Keluhan" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md"></textarea>
                    </div>
                    <div>
                        <button class="hover:shadow-form rounded-md bg-blue-700 py-3 px-8 text-base  text-white outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                <div class="mb-4 flex items-center justify-between">
                    <div>
                        <h3 class="text-3xl font-extrabold mb-2  text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-[#07074D]">Pasien Terbaru</h3>
                    </div>
                    <div>
                        <a href="#" class="text-blue-700 text-sm">Lihat Detail</a>
                    </div>

                </div>
                <div class="flex flex-col mt-8">
                    <div class="overflow-x-auto rounded-lg">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="p-4 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                ID Pasien
                                            </th>
                                            <th scope="col" class="p-4 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Nama
                                            </th>
                                            <th scope="col" class="p-4 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Keluhan
                                            </th>
                                            <th scope="col" class="p-4 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                ID Dokter
                                            </th>
                                            <th scope="col" class="p-4 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Delete
                                            </th>
                                            <th scope="col" class="p-4 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Edit
                                            </th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @foreach ($datas as $key)
                                            
                                        <tr>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $key-> id }} 
                                            </td>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $key-> nama_pasien }} 
                                            </td>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $key-> keluhan }} 
                                            </td>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $key-> dokter_id }} 
                                            </td>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                <form action='/pasien/{{ $key->id }}' method='post'>
                                                    @method('delete')
                                                    @csrf                                                
                                                    <button class="hover:shadow-form rounded-md bg-red-600 py-3 px-6 text-base  text-white outline-none" onclick='return confirm("delete")'>
                                                        X
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                <form action='/pasien/{{ $key->id }}/edit' >
                                                    @csrf                                                
                                                    <button class="hover:shadow-form rounded-md bg-yellow-600 py-3 px-6 text-base  text-white outline-none" >
                                                        Edit
                                                    </button>
                                                </form>
                                            </td>
                                            

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection