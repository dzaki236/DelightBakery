<?php
header("Content-Type:application/json");
function getDataCakeByCategories($category = null)
{
    // Inisialisasi cURL session
    $ch = curl_init();
    $url = 'https://664df6deede9a2b55655ae08.mockapi.io/service/v1/products';

    if (!is_null($category)) {
        # code...
        $url .= "?category=$category";
    }
    if (is_null($category)) {
        # code...
        $url .= '?best_seller=True';
    }
    // Set the URL
    curl_setopt($ch, CURLOPT_URL, $url);

    // Return the response as a string instead of outputting it
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Execute the cURL session
    $output = curl_exec($ch);

    // Close the cURL session
    curl_close($ch);

    // Decode the JSON response
    $data = json_decode($output, true);

    return $data;
}
function getDataCakeByCakeCode($cake_code)
{
    // Inisialisasi cURL session
    $ch = curl_init();
    $url = 'https://664df6deede9a2b55655ae08.mockapi.io/service/v1/products';

    if (!is_null($cake_code)) {
        # code...
        $url .= "?cake_code=$cake_code";
    }
    // Set the URL
    curl_setopt($ch, CURLOPT_URL, $url);

    // Return the response as a string instead of outputting it
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Execute the cURL session
    $output = curl_exec($ch);

    // Close the cURL session
    curl_close($ch);

    // Decode the JSON response
    $data = json_decode($output, true);

    return $data;
}
$cake_code = isset($_GET['cake_code']) ? $_GET['cake_code'] : NULL;
$category = isset($_GET['category']) ? $_GET['category'] : NULL;
if ($cake_code) {
    # code...
    echo json_encode(getDataCakeByCakeCode($cake_code));
} else {
    echo json_encode(getDataCakeByCategories($category));
}
