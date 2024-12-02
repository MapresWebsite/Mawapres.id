<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="style.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body class="relative">
    <main class="relative z-10 flex items-center justify-center min-h-screen">
        <section class="bg-[#2862C6] p-8 rounded-lg shadow-lg relative">
            <!-- Gambar tekstur di atas background warna biru -->
            <div class="absolute inset-0 bg-cover bg-center opacity-[0.06]" style="background-image: url('images/pola.jpg');"></div>

            <form action="" class="flex flex-col items-center p-4 gap-1 w-96 relative z-10">
                <span class="flex flex-col items-center">
                    <h1 class="font-bold mb-4 text-3xl text-white">
                        LOGIN
                    </h1>
                    <p class="mb-4 text-white">Silakan masukkan akun Anda.</p>
                </span>
                <input type="text" name="username" id="username" placeholder="Username" class="border rounded-md w-full mb-4 p-2 flex-1 bg-[#F0EDFF]">
                <div class="w-full mb-4">
                    <input type="password" name="password" id="password" placeholder="Password" class="border rounded-md w-full p-2 flex-1 bg-[#F0EDFF]">
                    <label for="showPassword" class="mt-2 flex items-center text-white cursor-pointer">
                        <input type="checkbox" id="showPassword" class="mr-2">
                        Tampilkan Password
                    </label>
                </div>
                <span class="flex flex-col gap-5">
                    <button type="submit" class="bg-[#F35804] text-white py-2 px-4 rounded-md font-bold text-xl">MASUK</button>
                    <button class="bg-[#F35804] text-white px-4 rounded-full font-bold text-xs">Lupa Password?</button>
                </span>
            </form>
        </section>


    </main>
    <figure class="absolute top-0 left-0 w-screen h-screen">
        <img src="images/grapol.jpg" alt="Gambar 1" class="absolute inset-0 w-full h-full object-cover opacity-50">
        <img src="images/glass.jpg" alt="Gambar 2" class="absolute inset-0 w-full h-full object-cover opacity-25">
        <div class="bg-gradient-to-tr from-[#2337EB] to-[#1278DE] absolute inset-0 w-full h-full opacity-20"></div>
    </figure>
    <script src="scripts/hide_pass.js" async defer></script>
</body>


</html>