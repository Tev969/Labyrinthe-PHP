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
          $map = [
               [3, 0, 0, 0, 2, 0, 0, 2, 0],
               [2, 0, 0, 2, 0, 0, 0, 2, 0],
               [2, 0, 0, 2, 0, 0, 0, 2, 0],
               [2, 0, 0, 2, 0, 0, 0, 2, 0],
               [2, 0, 0, 2, 0, 0, 0, 2, 0]
          ];

          foreach ($map as  $row) {
               echo "<div class='row'>";
               foreach ($row as  $cell) {
                    echo "<div  class='cells'></div>";
                    switch ($cell) {
                    
                         case '3': 
                              echo '<div  class="cells"><img src="https://toppng.com/uploads/preview/fantome-dessin-115505320747bmn5i7pcd.png" height=25px width=25px></div>';
                              break;
                         
                         default:
                              # code...
                              break;
                    }
                 
               }
               echo "</div>";
          }


          ?>


     </section>

     <form action="labyrinthe.php" method="post">
          <button class="directionButtons" name="top" type="submit">TOP</button>
          <button class="directionButtons" name="right" type="submit">RIGHT</button>
          <button class="directionButtons" name="left" type="submit">LEFT</button>
          <button class="directionButtons" name="bottom" type="submit">BOTTOM</button>
     </form>

     <?php


     function top()
     {
     }
     //    if (isset($_POST['top'])) {
     //      top();
     //  } elseif (isset($_POST['right'])) {
     //      right();
     //  }
     //  if (isset($_POST['left'])) {
     //      left();
     //  } elseif (isset($_POST['bottom'])) {
     //      bottom();
     //  }

     ?>

</body>

</html>