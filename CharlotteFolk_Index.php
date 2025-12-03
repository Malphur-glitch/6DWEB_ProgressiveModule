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

 $name = "new";
 $list = [
    "Folk Index Cropped Leather Jacket",
    "City Knit Sweater",
    "Style Index Oversized Hoodie",
    "CF City Tee"
 ];

 $clothingPrice = [
    'Folk Index Cropped Leather Jacket' => 79.99,
    'City Knit Sweater' => 44.99,
    'Style Index Oversized Hoodie' => 39.50,
    'CF City Tee' => 21.00,

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
    <title>Charlotte Folk</title>

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


    <h2>Today's Clothing Deals:</h2>
    <ul>
        <?php foreach ($list as $item): ?>
            <li class="<?php
                echo match($item) {
                    "Folk Index Cropped Leather Jacket" => "FICLJ",
                    "City Knit Sweater" => "CKS",
                    "Style Index Oversized Hoodie" => "SIOH",
                    "CF City Tee" => "CFCT",
                    default => "None"
                };
            ?>">
                <?php
                    echo match($item) {
                        "Folk Index Cropped Leather Jacket" => "Get 20% off on this item priced at $" . $clothingPrice['Folk Index Cropped Leather Jacket'] . " for this month's sale!",
                        "City Knit Sweater" => "Buy one and get a free tote bag for this sweater priced at $" . $clothingPrice['City Knit Sweater'] . "!",
                        "Style Index Oversized Hoodie" => "This hoodie is previously priced at $" . $clothingPrice['Style Index Oversized Hoodie'] . ", now at 15% off!",
                        "CF City Tee" => "Get a free pin with this tee priced at $" . $clothingPrice['CF City Tee'] . "!",
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
                <td>$<?= $price ?></td>
            </tr>
        <?php } ?>
    </table>

    <h2>Bulk Purchase Discounts!</h2>
    <p>(Buy more shirts and get increasing discounts up to 5 items!)</p>
    <p>
        <?php
        while($counter <= $limit){
           echo $counter;
            echo ' shirts cost $';
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

