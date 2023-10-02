<?php
//handling post data
if(isset($_POST['bilangan1']) && isset($_POST['bilangan2'])) {
    $bil1 = $_POST['bilangan1'];
    $bil2 = $_POST['bilangan2'];
    echo "Hasil Perkalian : " . $bil1 . " x " . $bil2 . " = " . ($bil1*$bil2);
}

//handling get data
if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    echo "Hasil Pencarian dengan Kata Kunci : " . $keyword;
}


// //handling multiple input data menggunakan var_dump()
// if(isset($_POST['nama']) && isset($_POST['dari'])) {
//     echo "Nama : " . $_POST['nama'];
//     $dari = $_POST['dari'];
//     var_dump($dari);
// }

//handling multiple input data menggunakan foreach
if(isset($_POST['nama']) && isset($_POST['dari'])) {
    echo "Nama : " . $_POST['nama'] . "<br>";
    $dari = $_POST['dari'];
    echo "Kenal MDP dari : " . "<br>";
    foreach($dari as $value){
        echo $value . "<br>";
    }


}