<?php

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $namalengkap = $_POST['namalengkap'];
    $jk = $_POST['jk'];
    $programstudi = $_POST['programstudi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    function status($skill){
        if ($skill >= 100 && $skill <= 150) {
            return "Sangat Baik";
        } if ($skill >= 60 && $skill <= 100) {
            return "Baik";
        } if ($skill >= 40 && $skill <= 60) {
            return "Cukup";
        } if ($skill >= 0 && $skill <= 40) {
            return "Kurang";
        } if ($skill >= 0 && $skill <= 0) {
            return "Tidak Memadai";
        }else {
            return "Ga Lolos";
        }
    }
    $status = status($skill);


    echo "NIM: " . $nim . "<br>";
    echo "Nama Lengkap: " . $namalengkap . "<br>";
    echo "Jenis Kelamin: " . $jk . "<br>";
    echo "Program Studi: " . $programstudi . "<br>";
    echo "Skill Web & Programming: " . $skill . "<br>";
    echo "Tempat Domisili: " . $domisili;
    echo "Email: " . $email . "<br>";
}

// Buat Logic nentuin skor dari skill
foreach ($skill as $s) {
    // cek skill nya
    switch ($s) {
        case 'html':
            $score += 10;
            break;
        case 'css':
            $score += 10;
            break;
        case 'javascript':
            $score += 20;
            break;
        case 'rwdbootstrap':
            $score += 20;
            break;
        case 'php':
            $score += 30;
            break;
        case 'python':
            $score += 30;
            break;
        case 'java':
            $score += 50;
            break;

        default:
            $score = 0;
            break;
    }
}




?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form IT Club</title>
</head>

<body>
    <form>
        <fieldset>
            <h1>Form IT Club</h1>
            <form method="POST" action="form_itclub.php">
                <div class="form-group row">
                    <label for="nim[]" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-adn"></i>
                                </div>
                            </div>
                            <input id="nim[]" name="nim[]" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="namalengkap" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="namalengkap" name="namalengkap" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk[]" id="jk[]_0" type="radio" class="custom-control-input" value="Laki - Laki">
                            <label for="jk[]_0" class="custom-control-label">Laki - Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk[]" id="jk[]_1" type="radio" class="custom-control-input" value="Perempuan">
                            <label for="jk[]_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="programstudi[]" class="col-4 col-form-label">Program Studi</label>
                    <div class="col-8">
                        <select id="programstudi[]" name="programstudi[]" class="custom-select">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Skill Web & Programming</label>
                    <div class="col-8">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html">
                            <label for="skill[]_0" class="custom-control-label">HTML</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css">
                            <label for="skill[]_1" class="custom-control-label">CSS</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript">
                            <label for="skill[]_2" class="custom-control-label">JavaScript</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="rwdbootstrap">
                            <label for="skill[]_3" class="custom-control-label">RWD Bootstrap</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php">
                            <label for="skill[]_4" class="custom-control-label">PHP</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python">
                            <label for="skill[]_5" class="custom-control-label">Python</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java">
                            <label for="skill[]_6" class="custom-control-label">Java</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="domisili[]" class="col-4 col-form-label">Tempat Domisili</label>
                    <div class="col-8">
                        <select id="domisili[]" name="domisili[]" class="custom-select">
                            <option value="jakarta">Jakarta</option>
                            <option value="depok">Depok</option>
                            <option value="depok">Bogor</option>
                            <option value="depok">Bekasi</option>
                            <option value="depok">Tanggerang</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-gg-circle"></i>
                                </div>
                            </div>
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </fieldset>
    </form>

    <hr>
    <?php
    echo "Nama Lengkap : " . $nama . "<br>";
    echo "Skill : ";
    foreach ($skill as $s) {
        echo $s . " ,";
    }
    echo "<br> Skor : " . $skor;
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>