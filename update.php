<?php

$conn = mysqli_connect("localhost","root","", "transit_house");


function upload(){

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFIle = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo '<script>alert("File Gambar Belum Terpilih ! !");</script>';
        return false;
    }

    // filter file
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo '<script>alert("Yang Anda Upload Bukan Gambar ! !");</script>';
        return false;
    }

    // Cek ukuran file gambar
    if( $ukuranFIle > 2000000 ){
        echo '<script>alert("Ukuran File Gambar Terlalu Besar ! ! !");</script>';
        return false;
    }

    // Generate Nama File Baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // Upload Gambar
    move_uploaded_file($tmpName, 'assets/img/unit/'. $namaFileBaru);

    return $namaFileBaru;

}


    if(isset($_POST['btnUpdate'])){

        $Id_Zone = $_POST['Id_Zone'];
        $Name_Zone = $_POST['Nama_Zone'];
        $Type = $_POST['Type'];
        $Status = $_POST['Status'];
        $Kamar_Tidur = $_POST['Kamar_Tidur'];
        $Toilet = $_POST['Toilet'];
        $Luas_Bangunan = $_POST['Luas_Bangunan'];
        $Luas_Tanah = $_POST['Luas_Tanah'];

        // Cek user upload file gambar
        $gambarLama = $_POST['gambarLama'];

        if($_FILES['gambar']['error'] === 4 ){
            $gambar = $gambarLama;
        }else {
            $gambar = upload();
        }



        mysqli_query($conn, "UPDATE info_unit set Nama_Zone='$Name_Zone', Type='$Type', Status='$Status', Kamar_Tidur='$Kamar_Tidur', Toilet='$Toilet', Luas_Bangunan='$Luas_Bangunan', Luas_Tanah='$Luas_Tanah', Image='$gambar' where Id_Zone='$Id_Zone'");

        echo '<script>alert("Data Berhasil Diubah ! ! !");</script>';

        echo '<script>window.location.href = "admin.php";</script>';


    }else{
        echo '<script>alert("Data Gagal Diubah ! ! !");</script>';

    }

?>