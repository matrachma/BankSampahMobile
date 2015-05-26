<?php 
session_start();

$sesi   = $_SESSION['sesi'];
include "konek.php";

if(empty($_SESSION['sesi'])){
    echo "<center><font color='red'>Anda tidak diperkenankan memasuki halaman ini, jika anda belum <a href='index.html'>login</a> !!</font></center>";
    exit;
}


?>
<html>
    <head>
        <title>Bank Sampah Mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
        <link rel="stylesheet" href="css/jquerymobile.nativedroid.css" />
        <link rel="stylesheet" href="css/jquerymobile.nativedroid.dark.css"  id='jQMnDTheme' />
        <link rel="stylesheet" href="css/jquerymobile.nativedroid.color.green.css" id='jQMnDColor' />
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
        <script type="text/javascript">
            
            function minmax(value, min, max) 
            {
                if(parseInt(value) < 0 || isNaN(value)) 
                    return 0; 
                else if(parseInt(value) > 100) 
                    return 100; 
                else return value;
            }
            
            function SubTotal1()
            {
                var konversi1 = 0;
                var theForm = document.forms["harga-sampah"];
                var selectedSampah1 = theForm.elements["sampah1"];
                var selectedBerat1 = theForm.elements["berat1"];
                if(!selectedSampah1.value){
                    konversi1 = 0;
                } else {
                    
                    konversi1 = selectedSampah1.value * selectedBerat1.value;
                }
                return konversi1;
            }
            
            /*function hitungSubTotal1(){
                var nilai1 = SubTotal1();
                //var cek1 =1;
                //HargaTotalSampah();
                var divobj1 = document.getElementById('total1');
                divobj1.style.display="inherit";
                divobj1.style.fontSize="large";
                divobj1.innerHTML = "Subtotal harga sampah  Rp."+Math.round(nilai1);
            }*/
            
            function SubTotal2()
            {
                var konversi2=0;
                var theForm = document.forms["harga-sampah"];
                var selectedSampah2 = theForm.elements["sampah2"];
                var selectedBerat2 = theForm.elements["berat2"];
                if(!selectedSampah2.value){
                    konversi2 = 0;
                /*} else if ((selectedSampah2.value >= 0) && (!selectedBerat2.value)){
                    konversi2 = 0;*/
                } else {
                    
                    konversi2 = selectedSampah2.value * selectedBerat2.value;
                }
                //hitungSubTotal2(konversi2);
                /*var divobj2 = document.getElementById('total2');
                divobj2.style.display="inherit";
                divobj2.style.fontSize="large";
                divobj2.innerHTML = "Subtotal harga sampah  Rp."+Math.round(konversi2);*/
                return konversi2;
            }
            
            /*function hitungSubTotal2(){
                var nilai2 = SubTotal2();
                //var cek2 =1;
                //HargaTotalSampah();
                var divobj2 = document.getElementById('total2');
                divobj2.style.display="inherit";
                divobj2.style.fontSize="large";
                divobj2.innerHTML = "Subtotal harga sampah  Rp."+Math.round(nilai2);
            }*/

            function SubTotal3()
            {
                var konversi3=0;
                var theForm = document.forms["harga-sampah"];
                var selectedSampah3 = theForm.elements["sampah3"];
                var selectedBerat3 = theForm.elements["berat3"];
                if(!selectedSampah3.value){
                    konversi3 = 0;
                /*} else if ((selectedSampah3.value >= 0) && (!selectedBerat3.value)){
                    konversi3 = 0;*/
                } else {
                    
                    konversi3 = selectedSampah3.value * selectedBerat3.value;
                }
                //hitungSubTotal3(konversi3);
                /*var divobj3 = document.getElementById('total3');
                divobj3.style.display="inherit";
                divobj3.style.fontSize="large";
                divobj3.innerHTML = "Subtotal harga sampah  Rp."+Math.round(konversi3);*/
                return konversi3;
            }
            
            /*function hitungSubTotal3(){
                var nilai3 = SubTotal3();
                //var cek4 =1;
                //HargaTotalSampah();
                var divobj3 = document.getElementById('total3');
                divobj3.style.display="inherit";
                divobj3.style.fontSize="large";
                divobj3.innerHTML = "Subtotal harga sampah  Rp."+Math.round(nilai3);
            }*/
            
            function SubTotal4()
            {
                var konversi4=0;
                var theForm = document.forms["harga-sampah"];
                var selectedSampah4 = theForm.elements["sampah4"];
                var selectedBerat4 = theForm.elements["berat4"];
                if(!selectedSampah4.value){
                    konversi4 = 0;
                /*} else if ((selectedSampah4.value >= 0) && (!selectedBerat4.value)){
                    konversi4 = 0;*/
                } else {
                    
                    konversi4 = selectedSampah4.value * selectedBerat4.value;
                }
                //hitungSubTotal4(konversi4);
                /*var divobj4 = document.getElementById('total4');
                divobj4.style.display="inherit";
                divobj4.style.fontSize="large";
                divobj4.innerHTML = "Subtotal harga sampah  Rp."+Math.round(konversii4);*/
                return konversi4;
            }
            
            /*function hitungSubTotal4(){
                var nilai4 = SubTotal4();
                //var cek4 =1;
                //HargaTotalSampah();
                var divobj4 = document.getElementById('total4');
                divobj4.style.display="inherit";
                divobj4.style.fontSize="large";
                divobj4.innerHTML = "Subtotal harga sampah  Rp."+Math.round(nilai4);
            }*/
            
            function SubTotal5()
            {
                var konversi5=0;
                var theForm = document.forms["harga-sampah"];
                var selectedSampah5 = theForm.elements["sampah5"];
                var selectedBerat5 = theForm.elements["berat5"];
                if(!selectedSampah5.value){
                    konversi5 = 0;
                /*} else if ((selectedSampah5.value >= 0) && (!selectedBerat5.value)){
                    konversi5 = 0;*/
                } else {
                    
                    konversi5 = selectedSampah5.value * selectedBerat5.value;
                }
                //hitungSubtotal5(konversi5);
                /*var divobj5 = document.getElementById('total5');
                divobj5.style.display="inherit";
                divobj5.style.fontSize="large";
                divobj5.innerHTML = "Subtotal harga sampah  Rp."+Math.round(konversi5);*/
                return konversi5;
            }
            
            /*function hitungSubTotal5(){
                var nilai5 = Subtotal5();
                //var cek5 =1;
                //HargaTotalSampah();
                var divobj5 = document.getElementById('total5');
                divobj5.style.display="inherit";
                divobj5.style.fontSize="large";
                divobj5.innerHTML = "Subtotal harga sampah  Rp."+Math.round(nilai5);
            }*/
            
            function HargaTotalSampah()
            {
                var a = SubTotal1();
                var b = SubTotal2();
                var c = SubTotal3();
                var d = SubTotal4();
                var e = SubTotal5();
                var TotalhargaSampah = a + b + c + d + e;
                                        
                var divobjAll = document.getElementById('totalAll');
                divobjAll.style.display="inherit";
                divobjAll.style.fontSize="x-large";
                divobjAll.innerHTML = "TOTAL  Rp."+Math.round(TotalhargaSampah);

            }
            
            function hideTotal()
            {
                var divobj1 = document.getElementById('total1');
                divobj1.style.display='none';
                var divobj2 = document.getElementById('total2');
                divobj2.style.display='none';
                var divobj3 = document.getElementById('total3');
                divobj3.style.display='none';
                var divobj4 = document.getElementById('total4');
                divobj4.style.display='none';
                var divobj5 = document.getElementById('total5');
                divobj5.style.display='none';
                var divobjAll = document.getElementById('totalAll');
                divobjAll.style.display='none';
            }
        
        
        </script>

    </head>
    <body onload='hideTotal()'>
            
    <div data-role="page" data-theme='b'>
        <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
            <a href="#mypanel" data-role='button' data-inline='true'><i class='lIcon fa fa-bars'></i></a>
            <h1>Konversi Harga Sampah</h1>
            <div id="totalAll"></div>
        </div>

        <!-- Script buat panel-->
        <div data-role="panel" data-display="push" id="mypanel" data-theme="b">
            <ul data-role="listview">
                <li>Menu</li>
                <li data-icon='false'><a href="nasabah.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-home'></i>Beranda</a></li>
                <li data-icon='false'><a href="profil.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-user'></i>Profil</a></li>
                <li data-icon='false'><a href="harga.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-calculator'></i>Harga Sampah</a></li>
                <li data-icon='false'><a href="log.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-file-text-o'></i>Log Kegiatan</a></li>
                <li data-icon='false'><a href="info.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-newspaper-o'></i>Informasi</a></li>
                <li data-icon='false'><a href="about.php?user=$sesi" data-ajax="false"><i class='lIcon fa fa-trash'></i>Tentang Bank Sampah</a></li>
                <li data-icon='false'><a href="logout.php?user=$sesi" data-ajax="false" onClick="return confirm('Anda yakin ingin Keluar ?')"><i class='lIcon fa fa-sign-out'></i>Logout</a></li>
            </ul>
        </div>

        <div id='map-canvas'></div>

          
		<div data-role="content">
	        <div class='inset'>
                <form action="" id="harga-sampah" onsubmit="return false;">
                    </br>
                    </br>
                    </br>
                    <tr>
                        <td><label for="select-choice-1b" class="select">Select</label></td>
                        <td><select id="sampah1" name='sampah1' onchange="HargaTotalSampah()" data-native-menu="true">
                            <option value="0"> --- Pilih Jenis Sampah --- </option>
                            <?php
                                $data1=mysql_query("SELECT * FROM sampah");
                                if (!$data1) { // add this check.
                                    die('Invalid query: ' . mysql_error());
                                }
                                while ($sampah1=mysql_fetch_array($data1)){
                                    echo "
                                        <option value=".$sampah1[harga]."> $sampah1[kategori] $sampah1[jenis]</option>";
                                }
                            ?>
                        </select></td>
                        <td>
                            <input type="number" min="0.1" step="0.1" name="berat1" id="berat1"  value="" onchange="HargaTotalSampah()" data-clear-btn="true" placeholder="Berat sampah (kg)" onkeyup="this.value = minmax(this.value, 0, 100)">
                        </td>
                        <td>
                            <div class="message success" id="total1"></div>
                        </td>
                    </tr>
                    
                    </br>
                
                    <tr>
                        <td><label for="select-choice-1b" class="select">Select</label></td>
                        <td><select id="sampah2" name='sampah2' onchange="HargaTotalSampah()" data-native-menu="true">
                            <option value="0"> --- Pilih Jenis Sampah --- </option>
                            <?php
                                $data2=mysql_query("SELECT * FROM sampah");
                                if (!$data2) { // add this check.
                                    die('Invalid query: ' . mysql_error());
                                }
                                while ($sampah2=mysql_fetch_array($data2)){
                                    echo "
                                        <option value=".$sampah2[harga]."> $sampah2[kategori] $sampah2[jenis]</option>";
                                }
                            ?>
                        </select></td>
                        <td>
                            <input type="number" min="0.1" step="0.1" name="berat2" id="berat2" value="" onchange="HargaTotalSampah()" data-clear-btn="true" placeholder="Berat sampah (kg)" onkeyup="this.value = minmax(this.value, 0, 100)">
                        </td>
                        <td>
                            <div class="message success" id="total2"></div>
                        </td>
                    </tr>
                        
                        </br>
            
                    <tr>
                        <td><label for="select-choice-1b" class="select">Select</label></td>
                        <td><select id="sampah3" name='sampah3' onchange="HargaTotalSampah()" data-native-menu="true">
                            <option value="0"> --- Pilih Jenis Sampah --- </option>
                            <?php
                                $data3=mysql_query("SELECT * FROM sampah");
                                if (!$data3) { // add this check.
                                    die('Invalid query: ' . mysql_error());
                                }
                                while ($sampah3=mysql_fetch_array($data3)){
                                    echo "
                                        <option value=".$sampah3[harga]."> $sampah3[kategori] $sampah3[jenis]</option>";
                                }
                            ?>
                        </select></td>
                        <td>
                            <input type="number" min="0.1" step="0.1" name="berat3" id="berat3" value="" onchange="HargaTotalSampah()" data-clear-btn="true" placeholder="Berat sampah (kg)" onkeyup="this.value = minmax(this.value, 0, 100)">
                        </td>
                        <td>
                            <div class="message success" id="total3"></div>
                        </td>
                    </tr>
            
                        </br>
            
                    <tr>
                        <td><label for="select-choice-1b" class="select">Select</label></td>
                        <td><select id="sampah4" name='sampah4' onchange="HargaTotalSampah()" data-native-menu="true">
                            <option value="0"> --- Pilih Jenis Sampah --- </option>
                            <?php
                                $data4=mysql_query("SELECT * FROM sampah");
                                if (!$data4) { // add this check.
                                    die('Invalid query: ' . mysql_error());
                                }
                                while ($sampah4=mysql_fetch_array($data4)){
                                    echo "
                                        <option value=".$sampah4[harga]."> $sampah4[kategori] $sampah4[jenis]</option>";
                                }
                            ?>
                        </select></td>
                        <td>
                            <input type="number" min="0.1" step="0.1" name="berat4" id="berat4" value="" onchange="HargaTotalSampah()" data-clear-btn="true" placeholder="Berat sampah (kg)" onkeyup="this.value = minmax(this.value, 0, 100)">
                        </td>
                        <td>
                            <div class="message success" id="total4"></div>
                        </td>
                    </tr>
        
                        </br>
        
                    <tr>
                        <td><label for="select-choice-1b" class="select">Select</label></td>
                        <td><select id="sampah5" name='sampah5' onchange="HargaTotalSampah()" data-native-menu="true">
                            <option value="0"> --- Pilih Jenis Sampah --- </option>
                            <?php
                                $data5=mysql_query("SELECT * FROM sampah");
                                if (!$data5) { // add this check.
                                    die('Invalid query: ' . mysql_error());
                                }
                                while ($sampah5=mysql_fetch_array($data5)){
                                    echo "
                                        <option value=".$sampah5[harga]."> $sampah5[kategori] $sampah5[jenis]</option>";
                                }
                            ?>
                            </select>
                        </td>
                        <td>
                            <input type="number" min="0.1" step="0.1" name="berat5" id="berat5" value="" onchange="HargaTotalSampah()" data-clear-btn="true" placeholder="Berat sampah (kg)" onkeyup="this.value = minmax(this.value, 0, 100)">
                        </td>
                        <td>
                            <div class="message success" id="total5"></div>
                        </td>
                    </tr>
                </form>
                <!--<div class="message info" id="totalAll"></div>-->
            </div>
        </div>


        <div data-position="fixed" data-tap-toggle="false" data-role="footer" data-tap-toggle="false" data-theme='b'>
            <div data-role="navbar">
                <ul>
                    <li><a href="nasabah.php?user=$sesi" data-ajax="false"><i class='blIcon fa fa-home'></i>Beranda</a></li>
                    <li><a href="konversi.php?user=$sesi" data-ajax="false"><i class='blIcon fa fa-calculator'></i>Konversi</a></li>
                    <li><a href="logout.php?user=$sesi" data-ajax="false" onClick="return confirm('Anda yakin ingin Keluar ?')"><i class='blIcon fa fa-sign-out'></i>Logout</a></li>
                </ul>
            </div>
        </div>

    </div>
    
    <script src="js/nativedroid.script.js"></script>
    </body>
</html>
