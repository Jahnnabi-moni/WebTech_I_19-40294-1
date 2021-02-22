<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $dobErr = $genderErr =$usernameErr=$passErr= $cpassErr="";
$name = $email = $dob = $gender  =$username=$pass=$cpass="";
$check=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "*Name cannot be Empty";
    $check=0;
  } else {

     $name = test_input($_POST["name"]);
     $check=1;

    if (!preg_match("/^[a-zA-Z-'. ]*$/",$name)) {
      $nameErr = "*Can contain a-z,A-Z,period,dash only";
      $name="";
       $check=0;

    }

    else if(str_word_count($name)<2)
    {
       $nameErr = "*must contain 2 words";
       $name="";
        $check=0;
    }
   

  }

  if (empty($_POST["email"])) {
    $emailErr = "*Email cannot be Empty";
     $check=0;
  } else {
    $email = test_input($_POST["email"]);
    $check=1;
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*Invalid format. Format would be anything@example.com";
       $check=0;
    }
  }

  //username
  if (empty($_POST["username"])) {
    $usernameErr = "*User Name cannot be Empty";
     $check=0;
  } else {

     $username =test_input($_POST["username"]);
     $check=1;

    if (!preg_match("/^[a-zA-Z-'._ ]*$/",$username)) {
      $usernameErr = "*Can contain a-z,A-Z,period,dash,underscrone only";
       $check=0;
      $username="";

    }

    else if(strlen($username)<2)
    {
       $usernameErr = "*must contain 2 characters";
       $username="";
        $check=0;
    }
   

  }


    if(empty($_POST["password"]))
    {
      $passErr="*Enter a Password";
       $check=0;
     }
     else
      {
       $pass =$_POST["password"];
       $check=1;
      }
    
       if(empty($_POST["cpassword"]))
       {
        $cpassErr="*Please Confirm your password";
        $cpass="";
        $check=0;
       }
       else
       {
        $cpass =$_POST["cpassword"];
        $check=1;
        if(!strcmp($pass, $cpass)==0)
        {
          $cpassErr="*Password must match";
          $cpass="";
          $check=0;
        }
       }





  
  if(empty($_POST['dob']))
$dobErr = "*You must fill date of birth";
 $check=0;
if(!empty($_POST['dob']))
{
    $dt=$_POST['dob'];
    $check=1;

    $today = strtotime("now");
    if(strtotime($dt)>$today)
    {
    $dobErr = "*Please Enter Valid Birthdate";
   $check=0;
 }
    else
     $dob = test_input($_POST["dob"]);
    $check=1;
}

  if (empty($_POST["gender"])) {
    $genderErr = "*Gender is required";
     $check=0;
  } else {
    $gender = test_input($_POST["gender"]);
    $check=1;
  }


 if($check == 1 )
 {
   if(isset($_POST["submit"]))
   {
    if(file_exists('data.json'))  
    
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'Name'            =>     $_POST['name'],
                     'Email'           =>     $_POST['email'],
                     'User Name'       =>     $_POST['username'],
                     'Password'        =>     $_POST['cpassword'],
                     'Gender'          =>     $_POST['gender'],  
                     'Date of Birth'   =>     $_POST['dob']  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           } 
   }
 }



}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2 style="color:DodgerBlue">Registration</h2>
<!-- <p><span class="error">* required field</span></p> -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <b>Name: </b><input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>

  <b>E-mail: </b><input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>

  <b>User Name: </b><input type="text" name="username" value="<?php echo $username;?>">
  <span class="error"><?php echo $usernameErr;?></span>
  <br><br>

  <b>Password: </b><input type="password" name="password" value="<?php echo $pass;?>">
  <span class="error"><?php echo $passErr;?></span>
  <br><br>

  <b>Confirm Password: </b><input type="password" name="cpassword" value="<?php echo $cpass;?>">
  <span class="error"><?php echo $cpassErr;?></span>
  <br><br>

  <b>Date Of Birth: </b><input type="date" name="dob" value="<?php echo isset($_POST['dob']); ?>">
  <span class="error"><?php echo $dobErr;?></span>
  <br><br>


  <b>Gender:</b>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error"><?php echo $genderErr;?></span>
  <br><br>




  <input type="submit" name="submit" value="Submit">
     <input type="reset">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";

?>

</body>
</html>