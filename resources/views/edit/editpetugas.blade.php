@extends('input_data/navbar')
@section('container')
<main>
    <div class="pt-6 px-4">
        <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                <div class="flex items-center text-center justify-center mb-4">
                    <h3 class="text-3xl font-extrabold mb-2  text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-[#07074D]">Edit Data Petugas</h3>
                </div>
                <form action="/petugas/{{ $petugas->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-5">
                        <label for="nama_petugas" class="mb-3 block text-base font-medium text-blue-700">
                            Nama
                        </label>
                        <input type="text" name="nama_petugas" required autofocus value="{{ old("nama",$petugas->nama_petugas) }}" id="nama_petugas" placeholder="Nama Lengkap" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="alamat_petugas" class="mb-3 block text-base font-medium text-blue-700">
                            Alamat
                        </label>
                        <input type="text" name="alamat_petugas" required autofocus value="{{ old("nama",$petugas->alamat_petugas) }}" id="alamat_petugas" placeholder="Alamat Lengkap" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="jabatan" class="mb-3 block text-base font-medium text-blue-700">
                            Jabatan
                        </label>
                        <input type="text" name="jabatan" required autofocus value="{{ old("nama",$petugas->jabatan) }}" id="jabatan" placeholder="Security, Kebersihan" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="jam_jaga" class="mb-3 block text-base font-medium text-blue-700">
                            Jam Bertugas
                        </label>
                        <input type="text" name="jam_jaga" required autofocus value="{{ old("nama",$petugas->jam_jaga) }}" id="jam_jaga" placeholder="Hari, Jam Awal - Jam Akhir" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
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