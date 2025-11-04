<?php
include 'templates/header.php';
include 'classes/Database.php';
include 'classes/Product.php';

$db = new Database();
$conn = $db->connect();
$product = new Product($conn);
$products = $product->getAll();
?>
<section class="shop">
    <h1>Shop</h1>
    <div class="products">
       <?php foreach($products as $p): ?>
             <div class="product-card">
                 <a href="product.php?id=<?= $p['id'] ?>">
                    <img src="images/<?= $p['image'] ?>" alt="<?= $p['name'] ?>">
                    <h2><?= $p['name'] ?></h2>
                    <p>$<?= $p['price'] ?></p>
                 </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php include 'templates/footer.php'; ?>