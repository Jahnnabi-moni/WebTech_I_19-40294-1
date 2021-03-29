<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>login page</title>
</head>
<body>


<header>
  <?php include 'controller/header.php';?>
  
</header>
 

<section>  

<!-- <nav></nav> -->
  <article>
    <form method="post" action="controller/loginController.php"> 
  <fieldset>
    <legend><b>LOGIN</b></legend>
     
        
   
  User Name: <input type="text" name="username" >
  <span class="error"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];}?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
  <hr>

<input type="checkbox" name="remember" value=""  >Remember me<br><br>
  <input type="submit" name="submit" value="Log in">
  <a href="#">Forget Password?</a>
  </fieldset> 
</form>
   
  </article>
</section>

<footer>
 <?php include 'controller\footer.php';?>
</footer>

</body>
</html>

