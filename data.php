<?php

$products = [
	"product1"=>20,
	"product2"=>10,
	"product3"=>5,
	"product4"=>51,
	"product5"=>52,
	"product6"=>53,
	"product7"=>54
];

// Get price from product name
function get_price($name)
{
	global $products;
	
	foreach($products as $product=>$price)
	{
		if($product==$name)
		{
			return $price;
			break;
		}
	}
}

function get_one_product_info(){
	global $products;
	
}
function get_all(){

	global $products;
	$counter = 0;

	foreach($products as $product => $price){
		$api_array[$counter]['name'] = $product;
		$api_array[$counter]['price'] = $price;
		$counter++;
	}

	return $api_array;
}