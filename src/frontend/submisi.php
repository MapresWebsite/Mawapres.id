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

<body class="bg-[#D9D9D9] font-sans flex flex-row">
    <?php include "sidebar.php"; ?>
    <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8">
        <form id="registration-form">
            <div id="part1">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                <button type="button" onclick="nextPart(1)">Next</button>
            </div>
            <div id="part2" style="display:none">
                <label for="nik">NIK:</label>
                <input type="text" id="nik" name="nik" required>
                <button type="button" onclick="nextPart(2)">Next</button>
            </div>
            <div id="part3" style="display:none">
                <label for="ktp">Upload KTP:</label>
                <input type="file" id="ktp" name="ktp" required>
                <button type="submit">Submit</button>
            </div>
        </form>

        <script>
            function nextPart(partNumber) {
                // Sembunyikan semua bagian
                for (let i = 1; i <= 3; i++) {
                    document.getElementById('part' + i).style.display = 'none';
                }
                // Tampilkan bagian yang sesuai
                document.getElementById('part' + (partNumber + 1)).style.display = 'block';
            }
        </script>

    </main>

    <script src="script.js" async defer></script>
</body>

</html>