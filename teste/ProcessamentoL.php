<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
   
 <?php
  
  if ($_POST['conta'] == 'AC'){
    header('Location: home.php');
  }

  if ($_POST['conta'] == 'AF'){
    header('Location: ADMhome.php');   
}
 ?> 
  <form  action='agenC.php' method='POST'>
 
  </form>
</body>
</html>