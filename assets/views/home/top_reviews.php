<?php
/**
 * @var array $selectedReviews
 * @var \App\Model\Review $review
 */

// Bootstrap glyph icons (several examples)
$iconVariants = array(
    'refresh', 'download', 'pencil', 'camera', 'qrcode', 'tags', 'random'
);

// Number of review columns
$reviewColumns = isset($reviewColumns) && is_numeric($reviewColumns) ? $reviewColumns : 2;

// Bootstrap styles for the given column count:
$columnStyles = "col-xs-12 col-sm-12 col-md-6 col-md-6";
if ($reviewColumns == 3) {
    $columnStyles = "col-xs-12 col-sm-12 col-md-4 col-md-4";
}

?>
