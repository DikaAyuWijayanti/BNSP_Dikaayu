<?php
 include 'conn.php';

 $id = $_GET['id'];

 $query=mysqli_query($db, "DELETE FROM tb_anggota WHERE id = '$id'");
 header("Location: index.php")
?>