<?php
// Include the static data
include 'dbcon.php';

// Handling AJAX request
if (isset($_GET['category'])) {
    $category = $_GET['category'];

    if (array_key_exists($category, $products)) {
        foreach ($products[$category] as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product['product_picture'] . '" alt="' . $product['product_name'] . '">';
            echo '<h2>' . $product['product_name'] . '</h2>';
            echo '<p>' . $product['product_specs'] . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No products found for this category.</p>';
    }
    exit(); // This prevents the rest of the code from running if it's an AJAX request
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Product Display</h1>
    <form>
        <label for="category">Select a category:</label>
        <select id="category" name="category" onchange="loadProducts()">
            <option value="">--Select Category--</option>
            <option value="laptops">Laptops</option>
            <option value="mobiles">Mobiles</option>
            <option value="tv">TVs</option>
        </select>
    </form>

    <div id="product-display">
        <!-- Product details will be displayed here -->
    </div>

    <script src="script.js"></script>
</body>
</html>
