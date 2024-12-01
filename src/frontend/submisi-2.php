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
            Data Submisi > Data Mahasiswa</h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <span class="flex flex-col gap-8">
                <table class="border-separate border-spacing-1">
                    <tr>
                        <th class="bg-gray-400 rounded">No</th>
                        <th class="bg-gray-400 rounded">Nama Mahasiswa</th>
                        <th class="bg-gray-400 rounded">Peran Perlombaan</th>
                        <th class="bg-gray-400 rounded">Aksi</th>
                    </tr>
                    <tr>
                        <td class="text-center bg-gray-200 rounded py-3">
                            1
                        </td>
                        <td class="bg-gray-200 rounded p-3">
                            <select class="w-full">
                                <!-- Opsi untuk nama mahasiswa -->
                                <option value="Jono">Jono</option>'
                                <option value="Joni">Joni</option>'
                                <option value="Jini">Jini</option>'
                            </select>
                        </td>
                        <td class="bg-gray-200 rounded p-3">
                            <select class="w-full">
                                <!-- Opsi untuk peran perlombaan -->
                                <option value="Ketua">Ketua</option>
                                <option value="Anggota">Anggota</option>
                            </select>
                        </td>
                        <td class="flex justify-center bg-gray-200 rounded py-3">
                            <button class="flex rounded-md  w-fit text-white bg-red-400">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </button>
                        </td>
                    </tr>
                </table>
                <button class="bg-[#31E266] text-white p-3 w-fit rounded-md flex">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                </button>
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