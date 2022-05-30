<?php

$conn = mysqli_connect('localhost','root','','login');
if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $course = $_POST['course'];
    $country = $_POST['country'];
    $date = $_POST['date'];
    
 
$insert ="INSERT INTO `login`( `name`, `email`, `contact`, `course`, `country`, `date` ) VALUES (' $name','$email','$contact','$course','$country','$date')";
 mysqli_query($conn, $insert);
header('location:page1.php');

}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">


<section class="contact">

   <h1 class="heading">login</h1>

   <form action="" method="post">

      <div class="flex">

         <div class="inputBox">
            <span>Name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>

         <div class="inputBox">
            <span>Email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>

         <div class="inputBox">
            <span>Contact Number</span>
            <input type="number" placeholder="enter your number" name="contact" required>
         </div>
        

         <div class="inputBox">
            <span>Course Level</span>
            <select name="course">
            <option value="kanpur">UG</option>
            <option value="Bangalore">PG</option>
              
              
            </select>
         </div>
         <div class="inputBox">
            <span>Country Preference</span>
            <select name="country">
            <option value="USA">USA</option>
            <option value="Australia">Australia</option>
               <option value="New Zealand">New Zealand</option>
               <option value="Canada">Canada</option>
               <option value="UK">UK</option>
               <option value="Ireland">Ireland</option>
               <option value="Germany">Germany</option>
            </select>
         </div>
         
         <div class="inputBox">
            <span>date of birth</span>            
            <textarea name="date" placeholder="enter your date of birth" required cols="3" rows="1"></textarea>
         </div>
         
        
      </div>

      <input type="submit" value="send information" name="send" class="btn">

   </form>

</section>



</div>


</body>
</html>