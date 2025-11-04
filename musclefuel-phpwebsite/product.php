<?php
include 'templates/header.php';
include 'classes/Database.php';
include 'classes/Product.php';

$db = new Database();
$conn = $db->connect();
$product = new Product($conn);
$id =$_GET['id'] ?? 1;
$p = $product->getSingle($id);
?>
  <section class="product-detail">
    <h1><?= $p['name'] ?></h1>
    <img src="images/<?= $p['image'] ?>" alt="<?= $p['name'] ?>">
    <p><?= $p['description'] ?></p>
    <p> Price: $<?= $p['price'] ?></p>
 </section>

<?php include 'templates/footer.php'; ?>