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
