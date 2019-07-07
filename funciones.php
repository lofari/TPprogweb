<?php

function getProducts()
{
    $productosJson = file_get_contents('products.json');

    $asd = json_decode($productosJson);

    return $asd;
}

function getByBrand($brand)
{
    $final = [];
    $products = getProducts();
    foreach ($products as $product) {
        if ($product->SupplierName == $brand) {
            $final[] = $product;
        }
    }
    return $final;
}

function getByCat($cat)
{
    $final = [];
    $products = getProducts();
    foreach ($products as $product) {
        if ($product->Category == $cat) {
            $final[] = $product;
        }
    }
    return $final;
}

function getCategories()
{
    $catJson = file_get_contents('categories.json');

    $asd = json_decode($catJson);

    return $asd;
}
function getBrands()
{
    $brandsJson = file_get_contents('brands.json');

    $asd = json_decode($brandsJson);

    return $asd;
}

function guardarComentario($data,$ProductId){
    $comment = crearComment($data,$ProductId);

    $commentJSON = json_encode($comment);

    file_put_contents($ProductId.'.json', $commentJSON . PHP_EOL , FILE_APPEND );
}

function crearComment($data,$ProductId){
    $usuario = [
        'name' => $data['name'],
        'message' => $data['message'],
        'id' => traerUltimoIDComment($ProductId),
    ];

    return $usuario;
}

function traerTodosComment($ProductId){
    if (file_exists($ProductId.'.json')) {
        $todosJSON = file_get_contents($ProductId.'.json');
    }

    $commentsArray = explode(PHP_EOL, $todosJSON);

    array_pop($commentsArray);

    $todosPHP = [];

    foreach ($commentsArray as $unComment) {
        $todosPHP[] = json_decode($unComment, true);
    }
    return $todosPHP;
}


function traerUltimoIDComment($ProductId){
    $todos = traerTodosComment($ProductId);

    if (count($todos) == 0) {
        return 1;
    }

    $ultimoComment = array_pop($todos);

    $ultimoID = $ultimoComment['id'];

    return $ultimoID + 1;

}



function traerPorID($id)
{
    $todos = getProducts();
    foreach ($todos as $producto) {
        if ($producto->ProductId == $id) {
            $final = $producto;
            return $final;
        }
    }
}

    $products = getProducts();
    $categories = getCategories();
    $brands = getBrands();

    if (isset($_GET['brand'])) {
        $products = getByBrand($_GET['brand']);
    }elseif(isset($_GET['category'])) {
        $products = getByCat($_GET['category']);
    }
