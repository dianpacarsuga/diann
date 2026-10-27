<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Manage Portofolio </h1>
            <a href="{{ route('cv') }}" class="text-blue-600 text-sm hover:underline">← Lihat CV</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.save') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Nama Lengap</label>
                <input type="text" name="nama" value="{{ $portofolio->nama ?? '' }}" class="w-full border p-2 rounded text-sm" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Jabatan</label>
                <input type="text" name="jabatan" value="{{ $portofolio->jabatan ?? '' }}" class="w-full border p-2 rounded text-sm" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Deskripsi Diri</label>
                <textarea name="deskripsi" class="w-full border p-2 rounded text-sm" rows="3" required>{{ $portofolio->deskripsi ?? '' }}</textarea>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" value="{{ $portofolio->email ?? '' }}" class="w-full border p-2 rounded text-sm" required>
                </div>
                <div>
                    <label class="block text-sm font-medium">No. Telepon</label>
                    <input type="text" name="telepon" value="{{ $portofolio->telepon ?? '' }}" class="w-full border p-2 rounded text-sm" required>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium">Alamat</label>
                <input type="text" name="alamat" value="{{ $portofolio->alamat ?? '' }}" class="w-full border p-2 rounded text-sm" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Foto Profil</label>
                <input type="file" name="foto" class="w-full border p-2 rounded text-sm">
                @if(isset($portofolio->foto))
                    <img src="{{ asset('storage/' . $portofolio->foto) }}" class="w-16 h-16 rounded mt-2 object-cover">
                @endif
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded font-bold text-sm hover:bg-green-700">
                Simpan / Update Data
            </button>
        </form>

        @if(isset($portofolio))
            <form action="{{ route('admin.delete', $portofolio->id) }}" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="w-full bg-red-600 text-white py-2 rounded font-bold text-sm hover:bg-red-700">
                    Hapus Data Profil (Delete)
                </button>
            </form>
        @endif
    </div>
</body>
</html>