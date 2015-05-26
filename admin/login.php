<?php
    session_start();
    $_SESSION['sesi']	= NULL;

    include "include/koneksi_db.php";

    $user	= isset($_POST['user']) ? $_POST['user'] : "";
    $pass	= isset($_POST['pass']) ? $_POST['pass'] : "";


    $qry	= mysql_query("SELECT * FROM admin WHERE usernameA = '$user' AND passwordA = '$pass'");
    $sesi	= mysql_num_rows($qry);

    if ($sesi == 1) {
        $data_admin	= mysql_fetch_array($qry);

        $_SESSION['sesi'] = $data_admin['usernameA'];
        $idlog	=	$data_admin['usernameA'];
        echo "<script>alert('Anda berhasil Log In sebagai  : $idlog');</script>";
        echo "<meta http-equiv='refresh' content='0; url=admin/index.php?user=$sesi'>";

    } else {
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        echo "<script>alert('Anda Gagal Log In');</script>";
    }

?>