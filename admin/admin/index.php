<?php 
session_start();
$sesi	= $_SESSION['sesi'];

if($_SESSION['sesi'] == "" || $_SESSION['sesi']  == NULL || empty($_SESSION['sesi'])){
	echo "<center><font color='red'>Anda tidak diperkenankan memasuki halaman ini, jika anda belum <a href='../index.php'>login</a> !!</font></center>";
	exit;
}
function logout() {
	session_start();
	session_destroy();
	echo "<meta http-equiv='refresh' content='0; url=../index.html'>";
}

$utama="<center><br><br><br><br><h2>Selamat Datang Kepada Admin Bank Sampah <br><br>Status Anda login sebagai <b>\" $sesi \"</b> Jangan lupa LOGOUT sebelum keluar.<br>Selamat Bekerja Dengan Baik.</h2></center>";
?>

<html>
<style type="text/css">
    body {
        background-image: url(../../Rental%20Mobil%20G.A.H/images/rentcar2.jpg);
    }
</style>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>.:: Web Server Bank Sampah ::.</title>
    <link rel="stylesheet" type="text/css" href="../include/style.css" />
</head>
    
<body>
    <table border=0 width="100%" bgcolor="transparent" cellpadding=2 cellspacing=2 >
        <tr>
		  <td colspan="2"><img src="../image/4.jpg" width="100%" height="180px">
		      <div style="position: absolute; width: 418px; height: 69px; z-index: 1; left:477px; top:44px" id="layer1">
                  <p align="center">
                      <font color="#FF0000">
                          <u>
                              <b>
                                  <font style="font-size:36px" face="Bookman Old Style">Bank Sampah</font>
                              </b>
                          </u>
                          <br>
                      </font>
                      <b>
                          <font size="4" color="#FFFFFF">Kota Bogor</font>
                      </b>
              </div>
		  </td>
        </tr>
	<tr>
		<td colspan=2 style="background: #88A695; border-top: solid 2px #f9f9f9">
            <marquee onMouseOver="this.stop();" behavior="alternate" onMouseOut="this.start();">Halaman Administrasi Bank Sampah</marquee>
		</td>
	</tr>
    <tr>
        <td>
            <div id="nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="?page=nasabah">NASABAH</a></li>
                <li><a href="?page=sampah">SAMPAH</a></li>
                <li><a href="?page=logNasabah">LOG NASABAH</a></li>
                <li><a href="?page=info">INFO</a></li>
                <li><a href="?page=logout" onClick="return confirm('Anda yakin ingin Keluar ?')" >LOGOUT</a></li>
            </ul>
            </div>
        </td>
    </tr>
    <tr>
	   <td width="100%" valign="top">
	       <h3>
               <?php 
                $page	= isset($_GET['page']) ? $_GET['page'] : "";
                if(strstr($page,"nasabah")) {
                    $j="Menu Data Nasabah";
                } else if(strstr($page,"sampah")) {
                    $j="Menu Data Sampah";
                } else if(strstr($page,"logNasabah")) {
                    $j="Menu Data Log Nasabah";
                } else if(strstr($page,"info")) {
                    $j="Menu Info Bank Sampah";
                } else {
                    $j="Menu Utama";
                } 
                echo $j;
               ?>
	       </h3>
	  <div class="tengah">
		<?php
            $page	=	isset($_GET['page']) ? $_GET['page'] : "";	
            if($page=="nasabah") {
                include "../nasabah/lihat_nasabah.php";
            } else if($page=="lihat_nasabah2") {
                include "../nasabah/$page.php";
            } else if($page=="lihat_nasabahNA") {
                include "../nasabah/$page.php";
            } else if($page=="lihat_nasabahND") {
                include "../nasabah/$page.php";
            } else if($page=="lihat_nasabahSA") {
                include "../nasabah/$page.php";
            } else if($page=="lihat_nasabahSD") {
                include "../nasabah/$page.php";
            } else if($page=="lihat_nasabahPA") {
                include "../nasabah/$page.php";
            } else if($page=="lihat_nasabahPD") {
                include "../nasabah/$page.php";
            } else if($page=="input_nasabah") {
                include "../nasabah/$page.php";
            } else if($page=="act_input_nasabah") {
                include "../nasabah/$page.php";
            } else if($page=="edit_nasabah") {
                include "../nasabah/$page.php";
            } else if($page=="act_edit_nasabah") {
                include "../nasabah/$page.php";
            } else if($page=="act_hapus_nasabah") {
                include "../nasabah/$page.php";
            } else if($page=="detil_nasabah") {
                include "../nasabah/$page.php";
            } else if($page=="sampah") {
                include "../sampah/lihat_sampah.php";
            } else if($page=="input_sampah") {
                include "../sampah/$page.php";
            } else if($page=="act_input_sampah") {
                include "../sampah/$page.php";
            } else if($page=="edit_sampah") {
                include "../sampah/$page.php";
            } else if($page=="act_edit_sampah") {
                include "../sampah/$page.php";
            } else if($page=="act_hapus_sampah") {
                include "../sampah/$page.php";
            } else if($page=="detil_sampah") {
                include "../sampah/$page.php";
            } else if($page=="logNasabah") {
                include "../logNasabah/lihat_$page.php";
            } else if($page=="detil_logNasabah") {
                include "../logNasabah/$page.php";
            } else if($page=="input_logNasabah") {
                include "../logNasabah/$page.php";
            } else if($page=="act_input_logNasabah") {
                include "../logNasabah/$page.php";
            } else if($page=="edit_logNasabah"){
                include "../logNasabah/$page.php";
            } else if($page=="act_edit_logNasabah"){
                include "../logNasabah/$page.php";
            } else if($page=="detil_logNasabah"){
                include "../logNasabah/$page.php";
            } else if($page=="info") {
                include "../info/lihat_info.php";
            } else if($page=="input_info") {
                include "../info/$page.php";
            } else if($page=="act_input_info") {
                include "../info/$page.php";
            } else if($page=="act_hapus_info") {
                include "../info/$page.php";
            } else if($page=="edit_info") {
                include "../info/$page.php";
            } else if($page=="act_edit_info") {
                include "../info/$page.php";
            } else if($page=="logout") {
                logout();
            } else {
                echo $utama;
            }
          ?>
           </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="background: #88A695; border-top: solid 2px #f9f9f9; font-size: 12px" align="center">&copy; copyright : Bank Sampah <br>All Right Reserved
        </td>
	</tr>
        
</table>


