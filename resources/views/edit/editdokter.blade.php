@extends('input_data/navbar')
@section('container')
<main>
    <div class="pt-6 px-4">
        <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                <div class="flex items-center text-center justify-center mb-4">
                    <h3 class="text-3xl font-extrabold mb-2  text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-[#07074D]">Edit Data Dokter</h3>
                </div>
                <form action="/dokter/{{ $dokter->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-5">
                        <label for="nama_dokter" class="mb-3 block text-base font-medium text-blue-700">
                            Nama
                        </label>
                        <input type="text" required autofocus value="{{ old("nama",$dokter->nama_dokter) }}"
                        name="nama_dokter" id="nama_dokter" placeholder="Nama Lengkap" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="alamat_dokter" class="mb-3 block text-base font-medium text-blue-700">
                            Alamat
                        </label>
                        <input type="text" name="alamat_dokter" required autofocus value="{{ old("alamat",$dokter->alamat_dokter) }}" id="alamat_dokter" placeholder="Alamat Lengkap" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="spealisasi_dokter" class="mb-3 block text-base font-medium text-blue-700">
                            Spesialisasi
                        </label>
                        <input type="text" name="spealisasi_dokter" required autofocus value="{{ old("alamat",$dokter->spealisasi_dokter) }}" id="spealisasi_dokter" placeholder="ex: Jantung, Kulit, etc" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md" />
                    </div>
                    
                    <div>
                        <button type="submit" class="hover:shadow-form rounded-md bg-blue-700 py-3 px-8 text-base  text-white outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

        </div>
</main>
@endsection