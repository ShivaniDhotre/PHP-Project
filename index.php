<?php
$insert = false;
if(isset($_POST['name'])){
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //create a database connections
    $con = mysqli_connect($server,$username,$password);

    //check for connection success
    if(!$con){
        die("connection to this databse failed due to" .
         mysqli_connect_error());
    }
   // echo "Sucess Connecting to the db";

    //collect post variabes
    $name = $_POST['name'];
    $gender= $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
   $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES
   ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

  // echo $sql;

    //Execute the query
   if($con->query($sql)==true){
   // echo "Successfully inserted";

   //flag for successful insertion
      $insert = true;
   }
   else{
    echo "ERROR: $sql <br> $con->error";
   }


   //close database connection
   $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome To IIT Kharagpur US Trip Form</h1>
        <p>Enter Your Details  And Submit This Form To Confirm Your Participation In Trip</p>
        <?php
        if($insert == true){
           echo  "<p class='submitMsg'>Thanks for submiting your form. 
           We are happy to see you joining us for the US trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            
            <input type="text" name="age" id="age" placeholder="Enter Your Age">

            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">

            <input type="email" name="email" id="email" placeholder="Enter Your Email">

            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">

            <textarea name="desc" id="desc" cols="30" rows="10"
             placeholder="Enter Any Other Information Hrer"></textarea>
            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>
   
</body>
</html>