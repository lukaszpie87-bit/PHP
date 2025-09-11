<?php

    echo strlen( "Hello world!");   //outputs 12
    echo strlen( "Łódź");           //outputs 7
    //Polskie znaki w unicode zajmują dwa bajty

    echo mb_strlen( "Łódź");       //outputs 4

?>