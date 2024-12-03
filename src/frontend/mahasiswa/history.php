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

<body class="bg-[#D9D9D9] font-sans">
    <?php include_once "sidebar.php"; ?>
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            Data Submisi > Data Mahasiswa</h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <span class="flex flex-col gap-8">
                <table id="dynamicTable" class="border-separate border-spacing-1">
                    <tr>
                        <th class="bg-gray-400 rounded">No</th>
                        <th class="bg-gray-400 rounded">Prestasi</th>
                        <th class="bg-gray-400 rounded">Status</th>
                    </tr>
                    <tr class="">
                        <td class="text-center flex-1 bg-gray-200 rounded">
                            1
                        </td>
                        <td>
                            <section class="flex flex-1 bg-gray-200 rounded hover:bg-slate-400">
                                <img src="../images/image_placeholder.png" alt="" class="size-48 object-cover">
                                <span class="flex flex-col gap-2 justify-center">
                                    <h4 class="font-bold text-2xl">Nama Kompetisi</h4>
                                    <h5 class="font-medium text-xl">Penyelenggara</h5>
                                    <p>1 Sep 2027</p>
                                </span>
                            </section>
                        </td>
                        <td class="text-center bg-gray-200 rounded text-gray-500">
                            <section class="flex items-center justify-center gap-1">
                                <span class="material-symbols-outlined">
                                    do_not_disturb_on
                                </span>
                                Proses
                            </section>
                        </td>

                    </tr>
                </table>
            </span>
        </main>
    </section>

    <!-- <script src="script.js" async defer></script> -->
</body>

</html>