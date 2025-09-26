<?php
    $myfile = fopen("halo.txt", "r")
                or die ("Unable to open file!");
    echo fread($myfile, filesize("halo.txt"));
    fclose($myfile);
    ?>
    