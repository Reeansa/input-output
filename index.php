<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input - Output</title>
    <meta name="description" content="Raihan Febriyansah">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="h-screen">
    <div class="container m-auto object-center text-center text-[#232323] bg-white w-[50%] rounded-3xl" style="margin: 150px auto;">
        <h1 class="font-bold text-4xl relative top-[3rem]">Input / Output</h1>
        <form action="" method="post">
            <div class="border-input mt-20 mr-8 ml-8">
                <input class="h-full w-full" type="text" name="stringInp" id="i-string" placeholder="Masukkan String">
            </div>
            <div class="border-input mt-20 mt-8 mr-8 ml-8">
                <input class="h-full w-full" type="text" name="pengulanganInp" id="i-angka" placeholder="Masukkan Pengulangan">
            </div>
            <div class="mt-8">
                <button class="bg-black text-white relative left-[17rem] w-[4rem] mb-4" type="submit" name="submit">Submit</button>
            </div>
            <div class="">
                <h1 class="font-bold text-4xl relative bottom-[5vh] mt-8">Running</h1>
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $string = $_POST['stringInp'];
            $pengulangan = $_POST['pengulanganInp'];
            for ($i = 1; $i <= $pengulangan; $i++) {
                echo "$string $i <br>";
            }
            if ($pengulangan % 2 == 0) {
                echo "<div class='text-center'>
                <p>'$pengulangan' Merupakan bilangan genap</p>";
            } else {
                echo "<div class='text-center'>
                <p>'$pengulangan' Merupakan bilangan ganjil</p>";
            }
        }
        ?>
    </div>
</body>

</html>