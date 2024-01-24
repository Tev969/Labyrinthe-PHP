<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>Laby</title>
</head>
<?php
include("./header.php")
?>

<body>

     <section class="gameContain">
          <?php
          $count = 96;
          for ($i = 0; $i < $count; $i++) {
               $divId = "div" . $i;
             
    echo "<div id='$divId' class='cells'></div>";
          }
          ?>

     </section>
     <form action="POST" method="post">
          <button class="directionButtons" type="button">TOP</button>
          <button class="directionButtons" type="button">RIGHT</button>
          <button class="directionButtons" type="button">LEFT</button>
          <button class="directionButtons" type="button">BOTTOM</button>
     </form>
   
</body>

</html>