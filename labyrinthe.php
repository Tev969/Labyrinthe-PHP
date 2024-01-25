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
               [0, 0, 0, 0, 0, 0, 0, 0, 0],
               [2, 0, 2, 0, 0, 0, 0, 2, 0],
               [0, 0, 0, 0, 0, 2, 0, 0, 0],
               [2, 0, 0, 2, 0, 0, 0, 2, 1]
          ];

          function right()  {
           $map[0][0] == $map[0][0] ? $map[0][+1] : $map[0][0];
          }

          foreach ($map as  $row) {
               echo "<div class='row'>";
               foreach ($row as  $cell) {
                    switch ($cell) {
                         case '0':
                              echo '<div class="cells"><img class="img" src="https://www.vhv.rs/dpng/f/144-1443556_tetris-block-pixel-hd-png-download.png"></div>';
                              break;
                    
                         case '3': 
                            echo '<div class="cells"><img class="img" src="https://toppng.com/uploads/preview/fantome-dessin-115505320747bmn5i7pcd.png"></div>';
                              break;
                         
                              case '2':
                                   echo '<div class="cells"><img class="img" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ed991cf4-7c8c-4530-b6ba-a3abf3ab2eae/dcpa374-faab0c8a-42bc-445a-a335-6927b4b01801.png/v1/fill/w_1024,h_1044/super_mario__super_guide_block_2d_by_joshuat1306_dcpa374-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTA0NCIsInBhdGgiOiJcL2ZcL2VkOTkxY2Y0LTdjOGMtNDUzMC1iNmJhLWEzYWJmM2FiMmVhZVwvZGNwYTM3NC1mYWFiMGM4YS00MmJjLTQ0NWEtYTMzNS02OTI3YjRiMDE4MDEucG5nIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.ky5U_TUppyTctfYEtTFW1xugpKnpeJtVYSz1f-VGoNk"></div>';
                                   break;
                              case '1':
                                   echo '<div class="cells"><img class="img" src="https://i.pinimg.com/564x/f7/37/16/f737169b3271ec4a53f9cd904280ed19.jpg"></div>';
                         
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


  
     //    if (isset($_POST['top'])) {
     //      top();
     if (isset($_POST['right'])) {
          right();
      }
     //  if (isset($_POST['left'])) {
     //      left();
     //  } elseif (isset($_POST['bottom'])) {
     //      bottom();
     //  }

     ?>

</body>

</html>