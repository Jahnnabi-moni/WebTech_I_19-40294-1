<!DOCTYPE html>
<html>
<head>
<title>HOME PAGE</title>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #99ff99;
  padding: 10px;
  text-align: center;
  font-size: 15px;
  color: blue;
}


article {
  float: left;
  padding: 20px;
  text-align: center;
  width: 100%;
  background-color:#e6e6e6 ;
  height: 400px;
}


section::after {
  content: "";
  display: table;
  clear: both;
}


footer {
  background-color: #00cc66;
  padding: 8px;
  height: 8%;
  text-align: center;
  color: white;
}

}
</style>
</head>
<body>

<header>
<?php include 'docs\header.php';?>
</header>

<section>  
<!-- <nav></nav> -->
  <article>
    <h1>WELCOME TO MAZUMDER's COMPANY</h1>
   
  </article>
</section>

<footer>
<?php include 'docs\footer.php';?>
</footer>

</body>
</html>
