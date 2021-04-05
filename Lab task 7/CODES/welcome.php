<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>HOME PAGE</title>
</head>
<body>

<header>
<?php
session_start();
include 'controller\header.php';?>
</header>

<section>  
<!-- <nav></nav> -->
  <article>
    <marquee><h1>WELCOME TO Kormoshala-Job for all. Find Your desire Jobs.  </h1></marquee><br><br>
    <div class="tag">Hot Jobs</div><hr><br><br><br>

     <div class="box1"><b>Waltor Group-</b><br>Marketing Officer<br>

     <a href="#"><img src="docs/logo2.jpg" alt="logo" width="300"; height="280"> </a>

    </div>

     <div class="box2"><b>Square Pharmaceuticals-</b><br>Assisant Director <br>

     <a href="#"><img src="docs/logoo.png" alt="logo" width="300"; height="280"></a>

    </div>

     </div>

     <div class="box3"><b>Bengal Group Of Industries-</b><br>General Manager<br>

     <a href="#"><img src="docs/logo4.png" alt="logo" width="300"; height="280"></a>

    </div>


   
  </article>
</section>

<footer>
<?php include 'controller\footer.php';?>
</footer>

</body>
</html>
