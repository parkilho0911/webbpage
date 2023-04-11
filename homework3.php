<?php
$n = 10;
$f0 = 1;
$f1 = 1;
echo "i\tfi\tfi+1/fi\n";
echo "1\t$f0\t1\n";
echo "2\t$f1\t" . ($f1/$f0) . "\n";
for ($i = 3; $i <= $n; $i++) {
    $fi = $f0 + $f1;
    $ratio = $fi/$f1;
    echo "$i\t$fi\t$ratio\n";
    $f0 = $f1;
    $f1 = $fi;
}
?>