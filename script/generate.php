<?php


mkdir('src', 511, true);
for ($i = 0; $i < 120; $i++) {
    mkdir(sprintf('src/Module%d', $i));
    for ($ii = 0; $ii < 1000; $ii++) {
        touch(sprintf('src/Module%d/Example%d.php', $i, $ii));
    }
}

