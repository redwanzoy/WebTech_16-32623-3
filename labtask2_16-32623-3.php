<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $genderErr = $degreeErr = $dobErr = $bloodgErr ="";
$name = $email = $gender =  $degree = $dob = $bloodg ="";"";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
 
  if (empty($_POST["dob"])) {
    $dobErr = "Date of Birth is required";
  } else {
    $dob = $_POST["dob"];
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
  
  if (empty($_POST["bloodg"])) {
    $bloodgErr = "Blood Group is required";
  } else {
    $bloodg = $_POST["bloodg"];
  }
  
}

?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Date Of Birth:
  <input type="date" name="dob" value="<?php echo $dob;?>">>
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>
 
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>  
  Degree:
  <input type="checkbox" name="degree[]" value="SSC">SSC 
  <input type="checkbox" name="degree[]" value="HSC">HSC 
  <input type="checkbox" name="degree[]" value="BSc">BSc 
  <input type="checkbox" name="degree[]" value="MSc">MSc 

  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  
  Blood Group:
  <select name="bloodg">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+" selected>O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  </select>
  <span class="error">* <?php echo $bloodgErr;?></span>
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

if(isset($_POST["submit"]))
{
	if(!empty($_POST["degree"]))
	{
		
		foreach($_POST["degree"] as $degree)
		{
			echo $degree;
		}
	}
	else
	{
		echo $degreeErr ;
	}
}


echo "<br>";

echo $bloodg;
?>

</body>
</html>