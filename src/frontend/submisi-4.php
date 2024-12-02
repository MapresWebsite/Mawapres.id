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

</head>

<body class="bg-[#D9D9D9] font-sans">
    <?php include "sidebar.php"; ?>
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            Data Submisi > Data File</h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <span class="flex flex-wrap p-16 justify-between gap-y-20">
                <div class="flex flex-col items-center justify-between bg-white [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-2xl h-80 w-96">
                    <section class="flex flex-col items-center p-2">
                        <h1 class="font-semibold text-2xl">File Surat Tugas</h1>
                        <p class="text-base text-gray-500">Halo guys</p>
                        <img src="images/image_placeholder.png" alt="placeholder" class="size-56 object-cover">
                    </section>
                    <section class="w-full bg-[#2862C6] rounded-b-2xl flex justify-center">
                        <input type="file">
                        <!-- <p>Ukuran max 5.000 kb</p> -->
                    </section>
                </div>
                <div class="flex flex-col items-center bg-white [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg p-2 h-80 w-96">
                    <h1 class="font-semibold text-2xl">File Surat Tugas</h1>
                    <p class="text-base text-gray-500">Halo guys</p>
                    <img src="images/image_placeholder.png" alt="placeholder" class="size-56 object-cover">
                </div>
                <div class="flex flex-col items-center bg-white [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg p-2 h-80 w-96">
                    <h1 class="font-semibold text-2xl">File Surat Tugas</h1>
                    <p class="text-base text-gray-500">Halo guys</p>
                    <img src="images/image_placeholder.png" alt="placeholder" class="size-56 object-cover">
                </div>
                
            </span>
            <span class="flex flex-row-reverse relative gap-3">
                <button class="flex rounded-md  w-fit p-3 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>LANJUT</p>
                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </button>
                <button class="flex rounded-md  w-fit p-3 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>KEMBALI</p>

                </button>
            </span>

        </main>
    </section>

    <script src="script.js" async defer></script>
</body>

</html>