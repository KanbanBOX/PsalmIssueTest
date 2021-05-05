<?php

$array = [new DateTimeImmutable(), new DateTime()];

foreach ($array as $key => $row) {
    var_export($row);
}
