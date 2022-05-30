
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 2</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

   <form action="page2.php" method="get">

     EMAIL: <input type="email" email="email">
     <input type="submit">
</form>



/*$conn = mysqli_connect('localhost','root','','login');

$insert =" SELECT *FROM `login` where `email`='tanishanigam3@gmail.com'";

$result = mysqli_query($conn, $insert);
/*header('location:page1.php');

$num =mysqli_num_rows($result);

echo $num;*/

 
// For output
echo $_GET["email"]

?>
</body>
</html>
<html>
-->
<!DOCTYPE html>
<html>
<body>
<form action="page2.php" method="get">

     EMAIL: <input type="text" name="name">
   
     <input type="submit">
</form>

<?php

if(isset($_GET["name"]))
{
$id=$_GET["name"];
echo $id;
}

/*$conn = mysqli_connect('localhost','root','','login');

$insert =" SELECT *FROM `login` where `email`='tanishanigam3@gmail.com'";

$result = mysqli_query($conn, $insert);
header('location:page1.php');

$num =mysqli_num_rows($result);*/


?>

</body>
</html>




