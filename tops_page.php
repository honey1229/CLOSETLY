<?php
$products = [
    ["name" => "Floral Print Top", "price" => "₹799", "image" => "images/top1.jpg"],
    ["name" => "Casual Crop Top", "price" => "₹699", "image" => "images/top2.jpg"],
    ["name" => "Off Shoulder Blouse", "price" => "₹999", "image" => "images/top3.jpg"],
    ["name" => "Sleeveless Tank Top", "price" => "₹599", "image" => "images/top4.jpg"],
    ["name" => "Chiffon Ruffle Top", "price" => "₹899", "image" => "images/top5.jpg"],
    ["name" => "V-Neck Wrap Top", "price" => "₹849", "image" => "images/top6.jpg"],
    ["name" => "Lace Detail Blouse", "price" => "₹1099", "image" => "images/top7.jpg"],
    ["name" => "Classic White Shirt", "price" => "₹1299", "image" => "images/top8.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog - Tops</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar .logo {
            font-family: fantasy, cursive;
            font-size: 30px;
            font-weight: bold;
            color: #333;
        }
        .navbar .nav-items {
            display: flex;
            align-items: center;
        }
        .navbar .nav-items button {
            margin: 0 10px;
            padding: 8px 16px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #333;
            transition: color 0.3s ease;
        }
        .navbar .nav-items button:hover {
            color: #555;
        }
        .navbar .nav-items .search-bar {
            margin: 0 10px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        .catalog-container { padding: 20px; }
        .product-card { text-align: center; border: 1px solid #ddd; padding: 15px; border-radius: 10px; }
        .product-card img { width: 100%; height: 250px; object-fit: cover; border-radius: 10px; }
        .add-to-cart { margin-top: 10px; }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">FashionHub</div>
        <div class="nav-items">
            <button>Home</button>
            <button>Shop</button>
            <button>Contact</button>
            <input type="text" class="search-bar" placeholder="Search...">
        </div>
    </div>
    <div class="container catalog-container">
        <h2 class="text-center mb-4">Catalog - Tops</h2>
        <div class="row g-4">
            <?php foreach ($products as $product): ?>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <h5 class="mt-2"><?php echo $product['name']; ?></h5>
                        <p class="text-primary fw-bold"><?php echo $product['price']; ?></p>
                        <button class="btn btn-success add-to-cart">Add to Cart</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
