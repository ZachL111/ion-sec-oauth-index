<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(56, 32, 10, 62);
assert(DomainReviewLens::score($item) === 176);
assert(DomainReviewLens::lane($item) === "ship");
