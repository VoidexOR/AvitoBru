<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AvitoBru - любые компуктеры на ваш вкус</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .computer-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            float: left;
            width: 300px;
        }

        .computer-box img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        p {
            margin: 0;
        }
    </style>
</head>
<body>

<h1>Результаты запроса:</h1>

<?php
// Example computers with "img_src" column for images
$filteredComputers = [
    ['brand' => 'Dell', 'price' => 800, 'condition' => 'Новое', 'wifi' => true, 'ssd' => true, 'gpu' => false, 'img_src' => 'https://img.mvideo.ru/Pdb/30022732b.jpg'],
    ['brand' => 'HP', 'price' => 600, 'condition' => 'Б/у', 'wifi' => true, 'ssd' => false, 'gpu' => true, 'img_src' => 'https://img.mvideo.ru/Pdb/30020479b.jpg'],
    ['brand' => 'Lenovo', 'price' => 700, 'condition' => 'Новое', 'wifi' => true, 'ssd' => true, 'gpu' => true, 'img_src' => 'https://img.mvideo.ru/Pdb/30030931b.jpg'],
    // Add more example computers as needed
];

// Retrieve form data
$brand = $_POST['brand'] ?? '';
$maxPrice = $_POST['max_price'] ?? '';
$condition = $_POST['condition'] ?? '';
$wifi = isset($_POST['wifi']) ? true : false;
$ssd = isset($_POST['ssd']) ? true : false;
$gpu = isset($_POST['gpu']) ? true : false;

// Filter computers based on form data
$filteredComputers = array_filter($filteredComputers, function ($computer) use ($brand, $maxPrice, $condition, $wifi, $ssd, $gpu) {
    $brandMatch = empty($brand) || stripos($computer['brand'], $brand) !== false;
    $maxPriceMatch = empty($maxPrice) || $computer['price'] <= (int)$maxPrice;
    $conditionMatch = empty($condition) || $computer['condition'] === $condition;
    $wifiMatch = !$wifi || ($wifi && $computer['wifi']);
    $ssdMatch = !$ssd || ($ssd && $computer['ssd']);
    $gpuMatch = !$gpu || ($gpu && $computer['gpu']);

    return $brandMatch && $maxPriceMatch && $conditionMatch && $wifiMatch && $ssdMatch && $gpuMatch;
});

// Check if the array is not empty before using foreach
if (!empty($filteredComputers)) {
    // Display filtered results
    foreach ($filteredComputers as $computer) {
        echo '<div class="computer-box">';
        // Use the "img_src" column for the image URL
        echo '<img src="' . $computer['img_src'] . '" alt="Computer Image">';
        echo '<p>';
        echo 'Производитель: ' . $computer['brand'] . '<br>';
        echo 'Цена: ₽' . $computer['price'] . '<br>';
        echo 'Состояние: ' . $computer['condition'] . '<br>';
        echo 'Wi-Fi: ' . ($computer['wifi'] ? 'Yes' : 'No') . '<br>';
        echo 'SSD: ' . ($computer['ssd'] ? 'Yes' : 'No') . '<br>';
        echo 'GPU: ' . ($computer['gpu'] ? 'Yes' : 'No') . '<br>';
        echo '</p>';
        echo '</div>';
    }
} else {
    echo '<p>No results found.</p>';
}
?>

</body>
</html>
