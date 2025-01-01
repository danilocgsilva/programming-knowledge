<?php

declare(strict_types=1);

require_once("./functions.php");

try {
    responds();
} catch (Exception $e) {
    printNewLine($e->getMessage());
}

