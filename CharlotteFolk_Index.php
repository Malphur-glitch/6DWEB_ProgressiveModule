<?php 
declare(strict_types=1);

 $name = "new";
 $list = [
    "Folk Index Cropped Leather Jacket",
    "City Knit Sweater",
    "Style Index Oversized Hoodie",
    "CF City Tee",
    "City Index Caps",
    "CF Black Leather Belt",
    "CF Slides"
 ];

 $clothingPrice = [
    'Folk Index Cropped Leather Jacket' => 2999.00,
    'City Knit Sweater' => 2649.00,
    'Style Index Oversized Hoodie' => 2326.00,
    'CF City Tee' => 1236.00,
    'City Index Caps' => 899.99,
    'CF Black Leather Belt' => 459.50,
    'CF Slides' => 1290.00
 ];


$counter = 1;
$limit = 5;
$price = 19.99;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charlotte Folk Index</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php include 'includes/header.php'; ?>

    <?php 
        if ($name == "Adam") {
            echo "<h2>Welcome back, Adam!</h2>";
        } else {
            echo "<h2>Welcome to Charlotte Folk! As a first-timer, browse anything you like!</h2>";
        }
    ?>

    <h2>Our Featured Clothing Items:</h2>
    <p><?= $list[0] ?> </p>
    <p><?= $list[1] ?> </p>
    <p><?= $list[2] ?> </p>
    <p><?= $list[3] ?> </p>
    <p><?= $list[4] ?> </p>
    <p><?= $list[5] ?> </p>
    <p><?= $list[6] ?> </p>


    <h2>Today's Clothing Deals:</h2>
    <ul>
        <?php foreach ($list as $item): ?>
            <li class="<?php
                echo match($item) {
                    "Folk Index Cropped Leather Jacket" => "FICLJ",
                    "City Knit Sweater" => "CKS",
                    "Style Index Oversized Hoodie" => "SIOH",
                    "CF City Tee" => "CFCT",
                    "City Index Caps" => "CIC",
                    "CF Black Leather Belt" => "CFBLB",
                    "CF Slides" => "CFS",
                    default => "None"
                };
            ?>">
                <?php
                    echo match($item) {
                        "Folk Index Cropped Leather Jacket" => "Get 20% off on the leather jacket priced at Php " . $clothingPrice['Folk Index Cropped Leather Jacket'] . " for this month's sale!",
                        "City Knit Sweater" => "Buy one and get a free tote bag for the knit sweater priced at Php " . $clothingPrice['City Knit Sweater'] . "!",
                        "Style Index Oversized Hoodie" => "The style index oversized hoodie is previously priced at Php " . $clothingPrice['Style Index Oversized Hoodie'] . ", now at 15% off!",
                        "CF City Tee" => "Get a free pin with the white tee priced at Php " . $clothingPrice['CF City Tee'] . "!",
                        "City Index Caps" => "Get 10% off on CF index caps priced at Php " . $clothingPrice['City Index Caps'] . "!",
                        "CF Black Leather Belt" => "Buy the black leather belt priced at Php " . $clothingPrice['CF Black Leather Belt'] . " and get 5% off on your next purchase!",
                        "CF Slides" => "Get CF slides priced at Php " . $clothingPrice['CF Slides'] . ", now at 15% off!",
                        default => "No specials for today..."
                    };
                ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Price List</h2>
    <table>
        <tr>
            <th>Clothing</th>
            <th>Price</th>
        </tr>
        <?php foreach ($clothingPrice as $item => $price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td>P<?= $price ?></td>
            </tr>
        <?php } ?>
    </table>

    <h2>Bulk Purchase Discounts!</h2>
    <p>(Buy more shirts and get increasing discounts up to 5 items!)</p>
    <p>
        <?php
        while($counter <= $limit){
           echo $counter;
            echo ' shirts cost Php ';
            $total = $price * $counter;
            $discount = 0.02;
            $discount += 0.02;
            $total -= $total * $discount * ($counter - 1);
            echo number_format($total, 2);
            echo '<br>';
            $counter++;
        } ?>
    </p>


</body>

<footer>
    &copy; <?php echo date ("Y"); ?> Charlotte Folk. All rights reserved.
<?php include 'includes/footer.php'; ?>
    </footer>
</html>

