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
    
  <div class="row">
    <div class="col-15">
      <label for="username"><b>User Name</b></label>
    </div>
    <div class="col-55">
      <input type="text" id="username" name="username" placeholder="Your name..">
    </div>
  </div><br>
  <span class="error"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];}?></span>

  
   <div class="row">
    <div class="col-15">
      <label for="password"><b>Password</b></label>
    </div>
    <div class="col-55">
      <input type="password" id="password" name="passsword" placeholder="Password">
    </div>
  </div><br>
  <span class="error"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
  

<input type="checkbox" name="remember" value=""  >Remember me<br><br>
  <input type="submit" class="registerbtn" name="submit" value="Log in"><br>
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
