<?php

    $F1 = 0;
    $F2 = 1;

while ($F1 < 500 or $F2 < 500) {

    print "$F1\n ";
    print "$F2\n ";

        $F1 = $F1 + $F2;
        $F2 = $F2 + $F1;

}