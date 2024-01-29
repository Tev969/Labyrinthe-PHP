<?php
session_start();

if (!isset($_SESSION['map'])) {
     $map = [
          [0, 0, 0, 0, 2, 0, 0, 0, 2],
          [0, 0, 0, 0, 0, 0, 2, 0, 0],
          [2, 0, 2, 0, 0, 0, 0, 2, 0],
          [0, 0, 0, 0, 0, 2, 0, 0, 0],
          [2, 0, 0, 2, 0, 0, 0, 2, 1]
     ];

     $pos = [0, 0];
     $_SESSION['pos'] = $pos;
     $_SESSION['map'] = $map;
} else {
     $map = $_SESSION['map'];
     $pos = $_SESSION['pos'];
}

if (isset($_POST['right'])) {
     $pos = right($map, $pos);
  ;
}

if (isset($_POST['left'])) {
     $pos = left($map, $pos);
     $_SESSION['pos'] = $pos;
}

if (isset($_POST['top'])) {
     $pos = top($map, $pos);
     $_SESSION['pos'] = $pos;
}   $_SESSION['pos'] = $pos;

if (isset($_POST['bottom'])) {
     $pos = bottom($map, $pos);
     $_SESSION['pos'] = $pos;
}

function right($map, $pos) {

     if (count($map[0]) - 1 > $pos[0] && $map[$pos[1]][$pos[0] + 1] !== 2) {
          $pos[0] = $pos[0] + 1;
     }
     return $pos;
}

function left($map, $pos)
{

     if ($pos[0] > 0  && $map[$pos[1]][$pos[0] - 1] !== 2) {
          $pos[0] = $pos[0] - 1;
     }
     return $pos;
}

function top($map, $pos) {

     if ($pos[1] > 0   && $map[$pos[1] - 1][$pos[0]] !== 2) {
          $pos[1] = $pos[1] - 1;
     }
     return $pos;
}

function bottom($map, $pos)
{
     if (count($map) - 1 > $pos[1] && $map[$pos[1] + 1][$pos[0]] !== 2) {
          $pos[1] = $pos[1] + 1;
     }
     return $pos;
}

function areNeighbor($pos , $x , $y){
     if (($pos[0] == $x - 1 && $pos[1] === $y) || ($pos[0] == $x + 1 && $pos[1] === $y)) {
       return true;


     }
     if (($pos[1] == $y - 1 && $pos[0] == $x) || ($pos[1] == $y + 1 && $pos[0] === $x)) {
          return true;
     }
     return false;
}


function drawMap($map, $pos) {
     $victory = false;
     foreach ($map as $y =>  $row) {
          echo "<div class='row'>";
          foreach ($row as $x => $cell) {
               if ($pos[0] === $x && $pos[1] === $y) {
                    echo '<div class="cells"><img class="img" src="https://toppng.com/uploads/preview/fantome-dessin-115505320747bmn5i7pcd.png"></div>';
                    continue;                 
               }
               if (!areNeighbor( $pos , $x , $y )) {
                    echo '<div class="cells"><img class="img" src="https://cdn-icons-png.flaticon.com/128/6685/6685006.png"></div>';
                    continue;
                    
               }
               if (  $map[$pos[1]][$pos[0]] == 1)  {
                   $victory = true;
               }
           
               switch ($cell) {
                    case '0':
                         echo '<div class="cells"><img class="img" src="https://www.vhv.rs/dpng/f/144-1443556_tetris-block-pixel-hd-png-download.png"></div>';
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
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>Laby</title>
</head>

<body>
     
     <section class="gameContain">
          <?php
        
          drawMap($map, $pos);
          ?>
     </section>
     
     <form action="labyrinthe.php" method="post">
          <button class="directionButtons" name="top" type="submit">↑</button>
          <button class="directionButtons" name="right" type="submit">→</button>
          <button class="directionButtons" name="left" type="submit">←</button>
          <button class="directionButtons" name="bottom" type="submit">↓</button>
     </form>
     <h1><?= $victory = false ? null : "Tu à gagné !"?></h1>


</body>

</html>