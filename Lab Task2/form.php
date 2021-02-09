<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bgErr ="";
$name = $email = $dob = $gender  = $bg ="";
$degree= array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name cannot be Empty";
  } else {

     $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-'. ]*$/",$name)) {
      $nameErr = "Can contain a-z,A-Z,period,dash only";
      $name="";

    }

    else if(str_word_count($name)<2)
    {
       $nameErr = "must contain 2 words";
       $name="";
    }
   

  }

  if (empty($_POST["email"])) {
    $emailErr = "Email cannot be Empty";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid format. Format would be anything@example.com";
    }
  }
  
  if(empty($_POST['dob']))
$dobErr = "You must fill date of birth";
if(!empty($_POST['dob']))
{
    $dt=$_POST['dob'];

    $today = strtotime("now");
    if(strtotime($dt)>$today)
    $dobErr = "Please Enter Valid Birthdate";
    
     $dob = test_input($_POST["dob"]);
}

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

    
  if (empty($_POST["degree"])) {
    $degreeErr = "At least two of them must be selected";
  } else {
    
    foreach ($_POST["degree"] as $key) {
      # code...
      array_push($degree, $key);
    }

    
    if(count($degree)<2)
    $degreeErr = "At least two of them must be selected";
 
  }



  if(empty($_POST['bg'])){
$bgErr = "You must select a Blood Group";
$bg="";}
else{
  $bg = test_input($_POST["bg"]);
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2 style="color:DodgerBlue"> Form Validation </h2>
<!-- <p><span class="error">* required field</span></p> -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <b>Name: </b><input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <b>E-mail: </b><input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <b>Date Of Birth: </b><input type="date" name="dob" value="<?php echo isset($_POST['dob']); ?>">
  <span class="error">*<?php echo $dobErr;?></span>
  <br><br>


  <b>Gender:</b>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>


<b>Degree:</b>
<input type="checkbox" name="degree[]" value="SSC"  > SSC
<input type="checkbox" name="degree[]" value="HSC"  > HSC
<input type="checkbox" name="degree[]" value="BSc" > BSc
<input type="checkbox" name="degree[]" value="MSc" > MSc

 <span class="error">* <?php echo $degreeErr;?></span>

  <br><br>


  <label><b>Blood Group:</b></span></label>  
  <select name="bg">
  <option value="" <?= (isset($_POST['bg']) == "")? "selected":"";?>></options>
  <option value="A+" <?= (isset($_POST['bg']) == "1")? "selected":"";?>>A+</options>
  <option value="A-" <?= (isset($_POST['bg']) == "2")? "selected":"";?>>A-</options>
  <option value="B+" <?= (isset($_POST['bg']) == "3")? "selected":"";?>>B+</options>
  <option value="B-" <?= (isset($_POST['bg']) == "4")? "selected":"";?>>B-</options>
  <option value="AB+" <?= (isset($_POST['bg'])== "5")? "selected":"";?>>AB+</options>
  <option value="AB-" <?= (isset($_POST['bg']) == "6")? "selected":"";?>>AB-</options>
  <option value="O+" <?= (isset($_POST['bg']) == "7")? "selected":"";?>>O+</options>
  <option value="O-" <?= (isset($_POST['bg']) == "8")? "selected":"";?>>O-</options>
  <option value="" <?= (isset($_POST['bg']) == "9")? "selected":"";?>></options>
</select>
<span class="error">* <?php echo $bgErr;?></span>
<br><br>


  <input type="submit" name="submit" value="Submit">  
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
$length=count($degree);
for ($i=0; $i <$length ; $i++) { 
  # code...
  echo $degree[$i];
  echo "<br>";
}
echo $bg;

?>

</body>
</html>