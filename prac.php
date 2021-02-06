<!DOCTYPE html>
<html lang="en">
<head>
  <title>local tours</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>


<?php
	$packagenm="cxbzr";
    $id="12";
    $image="one";
    $des="ok ho ko";
    $cost="1200"; 

  echo "<div class=\"container\">";
  echo "<h2>".$packagenm."</h2>";
  echo "<p>".$id."</p>";
  echo "<div class=\"card\" style=\"width:400px\">";
  
    echo "<img  src=\"/bootstrap/png/".$image." alt=\"Card image\" width=\"200px\">";
	
    echo "<div class=\"card-body\">";
	

      echo "<p class=\"card-text\">".$des."</p>";
	   echo "<p>".$cost."</p>";
     echo "</div>";
    echo "</div>";
  echo "</div>";
  ?>
  
  
  

 
  
</div>

</body>
</html>


