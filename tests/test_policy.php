<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(55, 78, 13, 11, 7);
assert(Policy::score($signal_case_1) === 127);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(85, 106, 19, 11, 12);
assert(Policy::score($signal_case_2) === 216);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(84, 77, 21, 7, 10);
assert(Policy::score($signal_case_3) === 183);
assert(Policy::classify($signal_case_3) === "accept");
