<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
        Data Profile
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- START SIDEBAR -->
        <div class="bg-green-600 text-white w-64 p-4 flex flex-col">
            <div class="flex items-center mb-6 justify-center h-14 border-b border-green-300">
                <i class="fas fa-database text-3xl"></i> {{-- GAMBAR DB --}}
                <span class="ml-2 text-xl font-bold">SPK FUZZY TAHANI</span>
            </div>
            <nav class="flex-1 ">
                <ul>
                    <li class="mb-2 h-14 border-b border-green-300">
                        <a class="flex items-center p-2 hover:bg-green-500 rounded" href="home">
                            <i class="fas fa-home mr-2 "></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="mb-2 ">
                        <span class="block text-sm font-semibold mb-1 text-gray-300 ">
                            DATA
                        </span>
                        <ul>
                            <li class="mb-1">
                                <a class="flex items-center p-2 hover:bg-green-500 rounded" href="variabel">
                                    <i class="fas fa-database mr-2"></i>
                                    Data Variabel
                                </a>
                            </li>
                            <li class="mb-1">
                                <a class="flex items-center p-2 hover:bg-green-500 rounded" href="fuzzy">
                                    <i class="fas fa-cogs mr-2"></i>
                                    Data Himpunan Fuzzy
                                </a>
                            </li>
                            <li class="mb-1">
                                <a class="flex items-center p-2 hover:bg-green-500 rounded" href="alternatif">
                                    <i class="fas fa-users mr-2"></i>
                                    Data Alternatif
                                </a>
                            </li>
                            <li class="mb-1">
                                <a class="flex items-center p-2 hover:bg-green-500 rounded" href="nilai">
                                    <i class="fas fa-edit mr-2"></i>
                                    Data Penilaian
                                </a>
                            </li>
                            <li class="mb-1">
                                <a class="flex items-center p-2 hover:bg-green-500 rounded" href="perhitungan">
                                    <i class="fas fa-calculator mr-2"></i>
                                    Data Perhitungan
                                </a>
                            </li>
                            <li class="mb-1">
                                <a class="flex items-center p-2 hover:bg-green-500 rounded h-14 border-b border-green-300" href="hasil">
                                    <i class="fas fa-chart-line mr-2"></i>Data Hasil Akhir
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-2 ">
                        <span class="block text-sm font-semibold mb-1 text-gray-300 ">USER</span>
                        <ul>
                            <li class="mb-1">
                                <a class="flex items-center p-2 hover:bg-green-500 rounded" href="user">
                                    <i class="fas fa-user mr-2"></i>
                                    Data User
                                </a>
                            </li>
                            <li class="mb-1">
                                <a class="flex items-center p-2 hover:bg-green-500 rounded" href="profile">
                                    <i class="fas fa-user-cog mr-2"></i>
                                    Data Profile
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            {{-- <div class="mt-auto">
                <button class="flex items-center p-2 hover:bg-green-500 rounded">
                    <i class="fas fa-chevron-left mr-2"></i>
                </button>
            </div> --}}
        </div>
        {{-- END SIDEBAR --}}
        {{-- ====================================================================================== --}}
        <!-- START KONTEN UTAMA -->
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center py-3 px-6 mb-6 h-12 border-b border-gray-300 bg-gray-100">
                <a href="#" class="ml-auto"> <!-- Tambahkan ml-auto untuk memindahkan ke kanan -->
                    <div class="flex items-center">
                        <span class="mr-2 text-gray-700 font-semibold">ADMIN</span>
                        <i class="fas fa-user-circle text-2xl text-gray-700"></i>
                    </div>
                </a>
            </div>            
            {{-- <div class="bg-green-100 p-4 rounded mb-6">
                <p>
                    Selamat datang
                    <span class="font-bold">
                        ADMIN
                    </span>
                    ! Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui pilihan menu di bawah.
                </p>
            </div> --}}
            {{-- MENU UTAMA --}}
            <div class="flex items-center mb-8"> 
                <a href="profile">
                    <h1 class="text-2xl font-bold text-gray-800 flex items-center">
                        <i class="fas fa-user-cog mr-2"></i>Data Profile
                    </h1>
                </a>
            </div>
            {{-- END KONTEN UTAMA --}}
        </div>
    </div>
</body>
</html>