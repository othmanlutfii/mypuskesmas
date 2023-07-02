@extends('input_data/navbar')
@section('container')
<main>
    <div class="pt-6 px-4">
        <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                <div class="flex items-center text-center justify-center mb-4">
                    <h3 class="text-3xl font-extrabold mb-2  text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-[#07074D]">Input Pembayaran</h3>
                </div>
                <form action="/pembayaran" method="POST">
                    @csrf

                    <div class="mb-5">
                        <label for="user_id" class="mb-3 block text-base font-medium text-blue-700">
                            Petugas
                        </label>
                        <input type="text" name="user_id" id="user_id" placeholder="ID Petugas" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="pasien_id" class="mb-3 block text-base font-medium text-blue-700">
                            Pasien
                        </label>
                        <input type="text" name="pasien_id" id="pasien_id" placeholder="ID Pasien" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="jumlah_harga" class="mb-3 block text-base font-medium text-blue-700">
                            Harga
                        </label>
                        <input type="text" name="jumlah_harga" id="jumlah_harga" placeholder="Jumlah Harga" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="metode_pembayaran" class="mb-3 block text-base font-medium text-blue-700">
                            Metode Pembayaran
                        </label>
                        <select name="metode_pembayaran" for="-metode_pembayaran" class="mb-3 block text-base text-center font-medium text-blue-700 bg-white shadow rounded-xl w-36 h-10  ">
                            <option selected>Cash</option>
                            <option>Debit</option>

                        </select>


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
                        <h3 class="text-3xl font-extrabold mb-2  text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-[#07074D]">Pembayaran Terbaru</h3>
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
                                                ID Pembayaran
                                            </th>
                                            <th scope="col" class="p-4 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                ID Pasien
                                            </th>
                                            <th scope="col" class="p-4 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Metode Pembayaran
                                            </th>
                                            <th scope="col" class="p-4 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                                                Jumlah Pembayaran
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
                                                {{ $key-> pasien_id }} 
                                            </td>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $key-> metode_pembayaran }} 
                                            </td>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $key-> jumlah_harga }} 
                                            </td>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                <form action='/pembayaran/{{ $key->id }}' method='post'>
                                                    @method('delete')
                                                    @csrf                                                
                                                    <button class="hover:shadow-form rounded-md bg-red-600 py-3 px-6 text-base  text-white outline-none" onclick='return confirm("delete")'>
                                                        X
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="p-4 text-left whitespace-nowrap text-sm font-normal text-gray-900">
                                                <form action='/pembayaran/{{ $key->id }}/edit' >
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