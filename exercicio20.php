<?php

for ($a = 0; $a < 8; $a++) {
    print "* * * * * * * * \n";
}
print "\n";

for ($b = 0; $b < 8; $b++) {
    for ($c = -1; $c < $b; $c++) {
        print "* ";
    }
    print "\n";
}

for ($o = 0; $o < 8; $o++) {
    for ($u = 8; $u > $o; $u--) {
        print "* ";
    }
    print "\n";
}

