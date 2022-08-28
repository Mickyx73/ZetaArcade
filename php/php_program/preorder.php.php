<?php
//index.php

$error = '';
$name = '';
$email = '';
$phonenumber = '';
$game = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["phonenumber"]))
 {
  $error .= '<p><label class="text-danger">phonenumber is required</label></p>';
 }
 else
 {
  $phonenumber = clean_text($_POST["phonenumber"]);
 }
 if(empty($_POST["game"]))
 {
  $error .= '<p><label class="text-danger">game is required</label></p>';
 }
 else
 {
  $game = clean_text($_POST["game"]);
 }

 if($error == '')
 {
  $file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'phonenumber' => $phonenumber,
   'game' => $game
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for contacting us</label>';
  $name = '';
  $email = '';
  $phonenumber = '';
  $game = '';
 }
 

}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Send Us A Message</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">ZETA ARCADE</h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <h3 align="center">PRE ORDER FORM</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>Enter Name</label>
      <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
     </div>
     <div class="form-group">
      <label>Enter PhoneNumber</label>
      <input type="text" name="phonenumber" class="form-control" placeholder="Enter PhoneNumber" value="<?php echo $phonenumber; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Game</label>
      <textarea name="game" class="form-control" placeholder="Enter Game name"><?php echo $game; ?></textarea>
     </div>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-success" value="Submit" />
     </div>

    </form>


    
    
         
   </div>
  </div>
 </body>
</html>
