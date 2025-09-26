<?php
    $myfile= fopen("halo.txt","w")
                or die ("Unable to open file!");
    $txt = "Lukasz \n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>