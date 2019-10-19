<?php 
//Ini untuk koneksi saja
include 'conn.php';


 $nim_user=$_POST['nim'];
 $nama_user= $_POST['nama'];  
 $alamat_user= $_POST['alamat'];  
 $no_telpon= $_POST['notelpon']; 
 $pendidikan_user= $_POST['pendidikan']; 
 $jenis_kelamin= $_POST['jenisKelamin'];

 echo "SELAMAT ANDA SUDAH TERDAFTAR <br><p>";
 echo "Nim : $nim_user <br>";
 echo "Nama : $nama_user <br>";
 echo "Alamat : $alamat_user <br>";
 echo "Nomer Telephone : $no_telpon <br>";
 echo "Pendidikan : $pendidikan_user <br>";
 echo "Jenis Kelamin : $jenis_kelamin <br>";


    $sql ="INSERT INTO biodata (nim, nama, alamat, no_telpon, pendidikan, jenis_kelamin)". 
    "VALUES ('$nim_user','$nama_user', '$alamat_user', '$no_telpon', '$pendidikan_user','$jenis_kelamin')";
 
 mysqli_query($conn, $sql);


 header("location:index.php");


?>