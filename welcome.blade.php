<head>
    <title>e-shop</title>
    <link href="/my_product.css" rel="stylesheet">
</head>

<a href="product/create">Přidat</a>
<a href="login" class="login">login</a>
<a href="register" class="register">register</a>
<a href="shopping_cart"><img src="shopping_cart.webp" height=500 class="corner" id="corner"></a><br>
<br><br><br><br><br>
<hr>
@foreach($products as $product)
    <div class="row">
        <div>


            <img src="{{ asset("images/" . $product->image) }}" height="300" width="400">
            <a href="/product/{{$product->id}}/show">
                {{ $product->name }} {{ $product->model }}</a>

        </div>
        <!--    <div id="container">
&lt;!&ndash;        <div id="txtimg">&ndash;&gt;
        <div id="img">
            <img src="{{ asset("images/" . $product->image) }}" height="300" width="400">
        </div>
        <a href="/product/{{$product->id}}/show">
        {{ $product->name }} {{ $product->model }}</a>-->

    </div>
    <!--    <img  src="images/img2.png" width="500" height="300" class="img2">-->
    <!--    <img src="{{ $product->image }}">-->
@endforeach

@if (session("message"))
    <div class="alert alert-success" role="alert"></div>
    {{ session("message")  }}
    </div>
@endif
