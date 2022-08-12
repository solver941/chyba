    public function showProduct($id)
    {
        $all_from_row = Product::where('id', $id)->get();
        $image_path = $all_from_row[0]["image"];
        $product = Product::find($id);
        session_start();
        $bool = isset($_SESSION["add"]);
        $file = "added.txt";
        $current = file_get_contents($file);
        $image = $all_from_row[0]["image"];
        //echo readfile("added.txt");
        /*$bool = isset($current);
        echo $bool;*/
        $text = "Add to shopping cart";
        return view("products/show", compact("product", "all_from_row", "bool", "image", "text"));

    }
}
