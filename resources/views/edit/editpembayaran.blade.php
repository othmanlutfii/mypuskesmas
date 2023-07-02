@extends('input_data/navbar')
@section('container')
<main>
    <div class="pt-6 px-4">
        <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                <div class="flex items-center text-center justify-center mb-4">
                    <h3 class="text-3xl font-extrabold mb-2  text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-[#07074D]">Edit Data Pembayaran</h3>
                </div>
                <form action="/pembayaran/{{ $pembayaran->id }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-5">
                        <label for="user_id" class="mb-3 block text-base font-medium text-blue-700">
                            Petugas
                        </label>
                        <input type="text" required autofocus value="{{ old("nama",$pembayaran->user_id) }}" name="user_id" id="user_id" placeholder="ID Petugas" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="pasien_id" class="mb-3 block text-base font-medium text-blue-700">
                            Pasien
                        </label>
                        <input type="text" required autofocus value="{{ old("nama",$pembayaran->pasien_id) }}" name="pasien_id" id="pasien_id" placeholder="ID Pasien" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="jumlah_harga" class="mb-3 block text-base font-medium text-blue-700">
                            Harga
                        </label>
                        <input type="text" required autofocus value="{{ old("nama",$pembayaran->jumlah_harga) }}" name="jumlah_harga" id="jumlah_harga" placeholder="Jumlah Harga" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
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
            
        </div>
</main>
@endsection