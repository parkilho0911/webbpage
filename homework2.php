<?php
$n = 30;
for ($i = 0; $i < $n; $i++) {
    $data[$i] = rand(10, 100);
}
sort($data);
echo "Generated numbers: " . implode(", ", $data) . "\n";
echo "Sorted numbers: " . implode(", ", $data) . "\n";
?>