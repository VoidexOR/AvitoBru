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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="checkbox"] {
            width: auto;
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>AvitoBru - любые компуктеры на ваш вкус</h1>

<form action="filter.php" method="post">
    <label for="brand">Производитель:</label>
    <input type="text" name="brand">

    <label for="max_price">Максимальная цена:</label>
    <input type="text" name="max_price">

    <label for="condition">Состояние:</label>
    <select name="condition">
        <option value="Новое">Новое</option>
        <option value="Б/у">Б/у</option>
    </select>

    <label>Дополнительное оборудование:</label>
    <input type="checkbox" name="wifi" value="wifi">Wi-Fi
    <input type="checkbox" name="ssd" value="ssd">SSD
    <input type="checkbox" name="gpu" value="gpu">GPU

    <input type="submit" value="Filter">
</form>

</body>
</html>
