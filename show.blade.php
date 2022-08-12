!--head xmlns="">-->
<head>
    <title>Product</title>
    <link href="public/my_product.css" rel="stylesheet">
</head>


<h1 style="text-align: center">{{ $all_from_row[0]["name"] }} {{ $all_from_row[0]["model"] }}</h1>
<div>
    <!--    <img src={{ $product->image }} height=300>-->
    <img src="{{ asset("images/" . $image) }}" height="300" width="400">

    <br>
    <p class="text">
        {{ $all_from_row[0]["description"] }}
    </p>
</div>

on>-->


<?php
if ($bool == true) {
    $text = "Remove from shopping cart";
    ?>
<button onclick="doSomething()" class="corner" id="test">{{$text}}</button>
    <?php

} else {
    $text = "Add to shopping cart";
    ?>
<button onclick="doSomething()" class="corner" id="test">{{$text}}</button>
    <?php
}


function doSomething()
{
    if ($text === "Add to shopping cart") {
        $_SESSION["add"] = true;
        //$text = "Remove from shopping cart";
        echo "<meta http-equiv='refresh' content='0'>";


    } else {
        $_SESSION["add"] = false;
        //$text = "Add to shopping cart";
        echo "<meta http-equiv='refresh' content='0'>";
    }
}
?>
