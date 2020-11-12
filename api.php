<?php

header('Content-Type:application/json');
require 'data.php';
//getta sve producte
$all_data = get_all();

if (!empty($_GET['name'])) {
	$name = $_GET['name'];
	$price = get_price($name);

	//da vratim i name i price
	$productArray = [
		$productName = $name,
		$productPrice = $price
	];

	if (empty($price)) {
		response(200, "Product Not Found", NULL);
	} else {
		//status, status_message, data
		response(200, "Product Found", $productArray);
	}
} else {
	response(200, "All Products", $all_data);
}

function response($status, $status_message, $data)
{
	header("HTTP/1.1 " . $status);

	//pravim array $response
	$response['status'] = $status;
	$response['status_message'] = $status_message;
	$response['data'] = $data;


	//pucam mu encode, da vratim json
	$json_response = json_encode($response);
	echo $json_response;
}
