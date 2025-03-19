<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-teal-500 via-cyan-500 to-blue-500 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-2xl rounded-3xl p-10 w-full max-w-lg border-t-8 border-teal-500 transform transition duration-500 hover:scale-105">
        <h2 class="text-4xl font-bold text-center mb-8 text-teal-700">Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="nama" class="block font-medium text-teal-600">Nama :</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda"
                    class="w-full border-2 border-teal-300 rounded-xl p-3 mt-2 focus:ring-4 focus:ring-teal-400 focus:outline-none bg-teal-50">
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="npm" class="block font-medium text-cyan-600">NPM :</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM Anda"
                    class="w-full border-2 border-cyan-300 rounded-xl p-3 mt-2 focus:ring-4 focus:ring-cyan-400 focus:outline-none bg-cyan-50">
                @error('npm')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="kelas_id" class="block font-medium text-blue-600">Kelas :</label>
                <select name="kelas_id" id="kelas_id"
                    class="w-full border-2 border-blue-300 rounded-xl p-3 mt-2 focus:ring-4 focus:ring-blue-400 focus:outline-none bg-blue-50">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-teal-500 to-blue-500 text-white font-semibold py-3 rounded-xl hover:from-teal-600 hover:to-blue-600 transition transform hover:scale-110 shadow-lg">
                Submit
            </button>
        </form>
    </div>
</body>

</html>
