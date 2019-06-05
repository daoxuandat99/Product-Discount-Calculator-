<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $list = $_POST['list'];
    $discount = $_POST['discount'];
    $z = $list * $discount * 0.1;
    echo 'Product Description:' . $product . '<br>';
    echo 'Price:' . $list . '<br>';
    echo 'Discount Percent:' . $discount . '<br>';
    echo 'Discount Amount:' . $z . '<br>';
}

?>