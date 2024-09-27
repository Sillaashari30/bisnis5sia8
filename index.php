<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE PEMGROGRAMAN WEB 1</title>
	<link rel="stylesheet" type="text/css" href="sytle.css">
</head>
<body>
   <div id="boxmodel">
        <div id="image">
        </div>
         <div id="header1">
         <font face="algerian"size="6"color="red">
       <marquee behavior="alternate">
       WELCOME TO PEMROGRAMAN WEB BISNIS 1!.......</marquee></font>
     </div>
           <div id="header">
        <div class="menu-list">
        <ul>
        <li><a href=index.php?page=profil>KULINER</a></li>
        <li><a href="visi-misi.php">FASHION</a>
        <ul>
           <li><a href=index.php?page=visimisi>BAJU KAOS</a></li>
           <li><a href=index.php?page=misisaya>WISATA</a></li>
           <li><a href=index.php?page=perhitugan>TIKET.COM</a></li>
        </ul>
            <li><a href="materi.php">ELEKTRONIK</a>
        <ul>
             <li><a href=index.php?page=operator>operator</a></li>
             <li><a href=index.php?page=if>if</a></li>
             <li><a href=index.php?page=ifmajemuk>ifmajemuk</a></li>
             <li><a href=index.php?page=quis1>quis1</a></li>
             <li><a href=index.php?page=uts>uts</a></li>
             <li><a href=index.php?page=switch>switch</a></li>
             <li><a href=index.php?page=for>for</a></li>
             <li><a href=index.php?page=kalimatfor>kalimatfor</a></li>
             <li><a href=index.php?page=UAS>UAS</a></li>
             
        </ul>
          
    </ul>
  </div>
</div>
         
  <div id="nav">
<ul>

    <li><p> <a href=index.php?page=home>pisang krispy</a></li>
</ul>
<ul>
<li><p> <a href=index.php?page=kotaksaran>brownis</a></p>
</ul> 
<li><p> <a href=index.php?page=mochi>mochi</a></p>
</ul> 

</div>
<div id="content">
 <i><h4> <p>MENU YANG AKAN DISAJIKAN</p> </h4></i>
  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'profil':include'profil.php';break;
    case'tugas1':include'profil.php';break;
  }
  ?>

  
  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'materiweb1':include'tugas1.php';break;
    case'tugas1.php':include'tugas1.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'visimisi':include'visi.php';break;
    case'tugas1.php':include'visi.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'misisaya':include'misi.php';break;
    case'tugas1.php':include'misi.php';break;
  }
  ?>

   <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'materi2':include'tugas2.php';break;
    case'tugas1.php':include'tugas2.php';break;
  }
  ?>


   <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'home':include'home.php';break;
    case'tugas1.php':include'home.php';break;
  }
  ?>

  
 <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'kotaksaran':include'kotaksaran.php';break;
    case'tugas1.php':include'kotaksaran.php';break;
  }
  ?>

<?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'operator':include'operator.php';break;
    case'tugas1.php':include'operator.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'perhitugan':include'perhitungan_aritmatika.php';break;
    case'tugas1.php':include'perhitungan_aritmatika.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'latihanweb1':include'latihanweb1.php';break;
    case'tugas1.php':include'latihanweb1.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'if':include'if.php';break;
    case'tugas1.php':include'if.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'ifmajemuk':include'ifmajemuk.php';break;
    case'tugas1.php':include'ifmajemuk.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'uts':include'8_uts.php';break;
    case'tugas1.php':include'8_uts.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'switch':include'switch_jlhhari.php';break;
    case'tugas1.php':include'switch_jlhhari.php';break;
  }
  ?>
  
  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'for':include'for.php';break;
    case'tugas1.php':include'for.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'kalimat_for':include'kalimat_for.php';break;
    case'tugas1.php':include'kalimat_for.php';break;
  }
  ?>

  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'UAS':include'uas.php';break;
    case'tugas1.php':include'uas.php';break;
  }
  ?>
  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'mochi':include'mochi.php';break;
    case'tugas1.php':include'mochi.php';break;
  }
  ?>
  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'home';
  switch($page){
    case'sosispangsit':include'sosispangsit.php';break;
    case'tugas1.php':include'sosispangsit.php';break;
  }
  ?>

</div>
<div id="sidebar">
</div>
<div id="footer">
  www.Rumah makan Melenial.com@2024
</div>
</div>
</body>
</html>