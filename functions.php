<?php
$conn = mysqli_connect("localhost","root","","resi_porto");
$result = mysqli_query($conn, "SELECT * FROM user");
$hasil= mysqli_query($conn, "SELECT * FROM about");

function data($isi){
    global $conn;
    $c = mysqli_query($conn, $isi);
    $box = [];
    while ($keluarkan = mysqli_fetch_assoc($c))
    {
        $box[] = $keluarkan;
    }
    return $box;
}

    function tambah($data){
        global $conn;
        $email = $data["email"];
        $nama = $data["nama_k"];
        $pesan = $data["pesan"];
     
        $query = "INSERT INTO contact
                  VALUES 
                 ('','$email','$nama','$pesan', NOW())
                 ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);   
    }
?>