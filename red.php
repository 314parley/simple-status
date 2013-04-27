<?php
$png = imagecreatetruecolor(25, 16);
    imagesavealpha($png, true);

    $trans_colour = imagecolorallocatealpha($png, 0, 0, 0, 127);
    imagefill($png, 0, 0, $trans_colour);
    
    $red = imagecolorallocate($png, 255, 0, 0);
    imagefilledellipse($png, 10, 10, 10, 10, $red);
    
    header("Content-type: image/png");
    imagepng($png);
?>