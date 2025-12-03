<?php 
declare(strict_types=1);

function create_logo(){
    return 'img src = "img/logo.png" alt = "Charlotte Folk Logo"> ';
}

function create_copyright_notice(){
    $year = date('Y');
    $message = '&copy; ' . $year;
    return $message;
}


$products = [
    "Folk Index Cropped Leather Jacket" => [
        "price" => 2999.00,
        "stock" => 10
    ],
    "City Knit Sweater" => [
        "price" => 2649.00,
        "stock" => 11
    ],

    "Style Index Oversized Hoodie" => [
        "price" => 2326.00,
        "stock" => 15
    ],

    "CF City T-Shirt" => [
        "price" => 1236.00,
        "stock" => 8
    ],
    "City Index Caps" => [
        "price" => 899.99,
        "stock" => 5
    ],

    "CF Black Leather Belt" => [
        "price" => 459.50,
        "stock" => 18
    ],

    "CF Slides" => [
        "price" => 1290.00,
        "stock" => 9
    ]


];

$tax = 20;
function get_reorder_message(int $stock) : string{
    $message = ($stock < 10) ? "Yes" : "No";
    return $message;
}

function get_total_value(float $price, int $stock): float {
    $totalValue = $price * $stock;
    return $totalValue;
}

function get_tax_due(float $price, int $stock, int $tax): float {
    $totalValue = get_total_value($price, $stock);
    $taxDue = ($tax / 100) * $totalValue;
    return $taxDue;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php include 'includes/header.php'; ?>


    <h2>Stock Control</h2>
    <table>
        <tr>
            <th>Product</th>
            <th>Stock</th>
            <th>Re-order</th>
            <th>Total Value</th>
            <th>Tax Due</th>

        </tr>
        <?php foreach ($products as $product_name => $data) { ?>
            <tr>
                <td><?= $product_name ?></td>
                <td><?= $data['stock'] ?></td>
                <td><?= get_reorder_message($data['stock']) ?></td>
                <td>Php <?= get_total_value($data['price'], $data['stock']) ?></td>
                <td>Php <?= get_tax_due($data['price'], $data['stock'], $tax) ?> </td>

            </tr>
        <?php } ?>
    </table>


</body>

<footer>
    &copy; <?php echo date ("Y"); ?> Charlotte Folk. All rights reserved.
<?php include 'includes/footer.php'; ?>
    </footer>
</html>

