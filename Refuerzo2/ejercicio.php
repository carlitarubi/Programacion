<link href="ejercicio.css" rel="stylesheet" type="text/css">
<?php


$menu=[
  'inicio',
  'blog',
  'video',
  'contacto'
];
 ?>

 <ul>
   <?php
   for ($i=0; $i < count($menu); $i++) {
     echo "<li>$menu[$i]</li>";
   }

    ?>
</ul>
