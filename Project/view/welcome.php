<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<script type="text/javascript" src="../script/searchJob.js" ></script>

<title>HOME PAGE</title>
</head>
<body onload="searchJob(document.getElementById('search').value)">

<header>
<?php
session_start();
include '../model/header.php';?>
</header>

<section>  
<!-- <nav></nav> -->
  <article>
    <div style="color: blue;"><?php if(!empty($_GET['successMsg'])){echo $_GET['successMsg'];} ?></div>

    <div class="row">
    <div class="col-5">
      <label for="search"><b>Search</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="search" name="search" placeholder="Search Here.." value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {if(!empty($_POST["search"])){echo $_POST["search"];}}?>" onkeyup="searchJob(this.value)" onblur="searchJob(this.value)">
    </div>
  </div>

  <div id="searchResults"> </div>

    <marquee><h1>WELCOME TO Kormoshala-Job for all. Find Your desire Jobs.  </h1></marquee><br><br>
    <div class="tag">Hot Jobs</div><hr>

     <div class="box1"><b>Waltor Group-</b><br>Marketing Officer<br>

     <a href="#"><img src="../docs/logo2.jpg" alt="logo" width="300"; height="280"> </a>

    </div>

     <div class="box2"><b>Square Pharmaceuticals-</b><br>Assisant Director <br>

     <a href="#"><img src="../docs/logoo.png" alt="logo" width="300"; height="280"></a>

    </div>

     </div>

     <div class="box3"><b>Bengal Group Of Industries-</b><br>General Manager<br>

     <a href="#"><img src="../docs/logo4.png" alt="logo" width="300"; height="280"></a>

    </div>


   
  </article>
</section>

<footer>
<?php include '../model/footer.php';?>
</footer>

</body>
</html>
