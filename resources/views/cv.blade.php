<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - {{ $portofolio->nama ?? 'Ketut Susilo' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Poppins', Times New Roman; }
    </style>
</head>
<body class="bg-gray-200 flex justify-center py-10">
    <div class="w-[850px] bg-white shadow-2xl flex overflow-hidden min-h-[1100px] relative">
        
        <!-- KOLOM KIRI (GELAP) -->
        <div class="w-[42%] bg-[#223e4a] text-white p-8 flex flex-col justify-between rounded-r-[40px] z-10">
            <div>
                <div class="w-48 h-48 rounded-full overflow-hidden mx-auto mb-6 border-4 border-white shadow-md">
                    @if(isset($portofolio->foto) && $portofolio->foto)
                        <img src="{{ asset('storage/' . $portofolio->foto) }}" class="w-full h-full object-cover">
                    @else
                        <img src="https://via.placeholder.com/200" class="w-full h-full object-cover" alt="Foto Profil">
                    @endif
                </div>

                <div class="text-left mb-6">
                    <h1 class="text-3xl font-bold tracking-wide leading-tight">{{ $portofolio->nama ?? 'Ketut Susilo' }}</h1>
                    <p class="text-gray-300 italic text-lg mt-1 font-light">{{ $portofolio->jabatan ?? 'Lulusan Baru' }}</p>
                </div>

                <p class="text-xs text-gray-200 leading-relaxed mb-8 text-justify font-light">
                    {{ $portofolio->deskripsi ?? 'Lulusan terbaik di jurusan Ilmu Komunikasi. Seorang yang cekatan, sigap, dapat diandalkan, mampu bekerja dalam tim dan dapat berkomunikasi dengan baik.' }}
                </p>

                <div class="mb-8">
                    <h2 class="text-xl font-bold tracking-wider border-b border-gray-500 pb-1 mb-3">KEAHLIAN</h2>
                    <ul class="text-xs space-y-2 font-light list-disc list-inside">
                        <li>Kepemimpinan</li>
                        <li>Kolaborasi</li>
                        <li>Aplikasi Produktivitas</li>
                        <li>Manajemen Waktu</li>
                    </ul>
                </div>
            </div>

            <div class="space-y-3 text-xs font-light pt-6">
                <h2 class="text-xl font-bold tracking-wider border-b border-gray-500 pb-1 mb-3">KONTAK</h2>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-phone text-base w-5"></i>
                    <span>{{ $portofolio->telepon ?? '+123-456-7890' }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-location-dot text-base w-5"></i>
                    <span>{{ $portofolio->alamat ?? '123 Anywhere St., Any City' }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-globe text-base w-5"></i>
                    <span>{{ $portofolio->email ?? 'www.reallygreatsite.com' }}</span>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN ( yang PUTIH ituu) -->
        <div class="w-[58%] p-10 text-gray-800 flex flex-col justify-between">
            <div class="space-y-7">
                <div>
                    <h2 class="text-xl font-bold tracking-wider text-[#1a2b32] mb-3 uppercase">DATA PRIBADI</h2>
                    <ul class="text-xs space-y-1.5 text-gray-700 font-medium">
                        <li class="grid grid-cols-12"><span class="col-span-5">• Tempat, Tanggal Lahir</span><span class="col-span-7">: Brocelle, 14 Oktober 2005</span></li>
                        <li class="grid grid-cols-12"><span class="col-span-5">• Alamat</span><span class="col-span-7">: {{ $portofolio->alamat ?? '123 Anywhere St., Any City' }}</span></li>
                        <li class="grid grid-cols-12"><span class="col-span-5">• Nomor Telephone</span><span class="col-span-7">: {{ $portofolio->telepon ?? '123-456-7890' }}</span></li>
                        <li class="grid grid-cols-12"><span class="col-span-5">• Jenis Kelamin</span><span class="col-span-7">: Laki-laki</span></li>
                        <li class="grid grid-cols-12"><span class="col-span-5">• Agama</span><span class="col-span-7">: - </span></li>
                        <li class="grid grid-cols-12"><span class="col-span-5">• Kewarga Negaraan</span><span class="col-span-7">: Indonesia</span></li>
                        <li class="grid grid-cols-12"><span class="col-span-5">• Email</span><span class="col-span-7">: {{ $portofolio->email ?? 'hello@reallygreatsite.com' }}</span></li>
                        <li class="grid grid-cols-12"><span class="col-span-5">• Status</span><span class="col-span-7">: Belum Menikah</span></li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl font-bold tracking-wider text-[#1a2b32] mb-3 uppercase">PENDIDIKAN</h2>
                    <ul class="text-xs space-y-1.5 text-gray-700 font-medium">
                        <li class="flex justify-between"><span>• SDN 3 Panam Co.</span> <span>(2005–2008)</span></li>
                        <li class="flex justify-between"><span>• SMPN 2 Wardiere Inc.</span> <span>(2008–2011)</span></li>
                        <li class="flex justify-between"><span>• SMAN 1 Wardiere Inc.</span> <span>(2011–2014)</span></li>
                        <li class="flex justify-between"><span>• POLITEKNIK CALTEX RIAU </span> <span>(2014–2018)</span></li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl font-bold tracking-wider text-[#1a2b32] mb-3 uppercase">PENGALAMAN</h2>
                    <div class="text-xs mb-3">
                        <p class="font-bold text-gray-800">Komunikasi Internal</p>
                        <p class="italic text-gray-600 mb-1">Strategi Komunikasi (Juni 2018 - Juli 2018)</p>
                        <ul class="list-disc list-inside space-y-1 text-gray-700 pl-1">
                            <li>Membantu mengembangkan strategi komunikasi pada klien.</li>
                            <li>Membuat konten dan berkoordinasi dengan tim terkait.</li>
                        </ul>
                    </div>
                </div>

                <div>
                    <h2 class="text-xl font-bold tracking-wider text-[#1a2b32] mb-2 uppercase">HOBI</h2>
                    <ul class="text-xs space-y-1 text-gray-700 font-medium">
                        <li>• Menari</li>
                        <li>• Travelling</li>
                        <li>• Menyanyi</li>
                    </ul>
                </div>
            </div>

            <div class="pt-6 border-t border-gray-200">
                <a href="{{ route('admin') }}" class="inline-block bg-[#223e4a] text-white text-xs px-4 py-2 rounded shadow hover:bg-black transition">
                    <i class="fa-solid fa-pen-to-square mr-1"></i> Edit Data via Admin 
                </a>
            </div>
        </div>
    </div>
</body>
</html>