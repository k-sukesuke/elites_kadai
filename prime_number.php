<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i / 2 == 1 || $i / 3 == 1 || $i / 5 == 1 || $i / 7 == 1) {
    echo $i . ' ';
    } else if ($i / 1 != 1 && $i % 2 != 0 && $i % 3 != 0 && $i % 5 != 0 && $i % 7 != 0) {
    echo $i . ' ';
    } else {
    continue;
}
}
