<?php
include "conn.php";
mysqli_query($con,"delete from data_transaksi where de=1");

header("location:../admin/rekap_keg_rka.php");
?>