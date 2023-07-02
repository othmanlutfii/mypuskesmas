@extends('input_data/navbar')
@section('container')
<main>
    <div class="pt-6 px-4 py-6">
        <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex-shrink-0 text-center">
                        <h3 class="text-3xl font-extrabold mb-2  text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-[#07074D]">Edit Data Pasien</h3>
                    </div>
                </div>
                <form action="/pasien/{{ $pasien->id }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-5">
                        <label for="nama_pasien" class="mb-3 block text-base font-medium text-blue-700">
                            Nama
                        </label>
                        <input type="text" value="{{ old("nama",$pasien->nama_pasien) }}" name="nama_pasien" id="nama_pasien" placeholder="Nama Lengkap" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="alamat_pasien" class="mb-3 block text-base font-medium text-blue-700">
                            Alamat
                        </label>
                        <input type="text" value="{{ old("alamat",$pasien->alamat_pasien) }}" name="alamat_pasien" id="alamat_pasien" placeholder="Alamat Lengkap" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="dokter_id" class="mb-3 block text-base font-medium text-blue-700">
                            Dokter
                        </label>
                        <input type="text" value="{{ old("id_dokter",$pasien->dokter_id) }}" name="dokter_id" id="dokter_id" placeholder="ID Dokter" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="keluhan" class="mb-3 block text-base font-medium text-blue-700">
                            Keluhan
                        </label>
                        <input type="textarea" rows="4" value="{{ old("keluhan", $pasien->keluhan) }}" name="keluhan" id="keluhan" placeholder="Jelaskan Keluhan" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md">
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
            </div>
        </div>
</main>
@endsection