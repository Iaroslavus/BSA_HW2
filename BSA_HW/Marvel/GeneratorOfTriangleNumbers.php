<?php   
function genTriangleNumber($yild = 15) {
    for ($i = 0; $i < $yild; $i++) {
        yield $i / 2 * ($i + 1);
    }
}
foreach (genTriangleNumber() as $value) {
     echo '<br>' . $value;
}
