<?php
session_start();
include 'products.php';

// Check welk product we moeten laten zien
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Bestaat dit product in onze lijst?
    if (isset($products[$id])) {
        $product = $products[$id];
    } else {
        // Product bestaat niet? Terug naar shop
        header("Location: webshop.php");
        exit;
    }
} else {
    // Geen ID meegegeven? Terug naar shop
    header("Location: webshop.php");
    exit;
}

// Winkelwagen logica (voor als je op deze pagina op 'kopen' klikt)
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }
    $message = "Toegevoegd aan winkelwagen!";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?> | De Kaaiman</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <nav>
        <div class="container nav-wrapper">
            <a href="index.php" class="brand-container">
                <img src="img/logo.png" alt="Logo De Kaaiman" class="nav-logo">
                <div class="logo-text">De Kaaiman</div>
            </a>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="webshop.php" class="active">Webshop</a></li>
                <?php $count = isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?>
                <li><a href="winkelwagen.php">Winkelwagen (<?php echo $count; ?>)</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div style="height: 100px; background: #000;"></div>

    <section class="container page-content">
        
        <div class="breadcrumbs">
            <a href="webshop.php">&larr; Terug naar Webshop</a>
        </div>

        <?php if(isset($message)): ?>
            <div style="background: #43a047; color: white; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                <?php echo $message; ?> <a href="winkelwagen.php" style="color: white; text-decoration: underline;">Bekijk winkelwagen</a>
            </div>
        <?php endif; ?>

        <div class="detail-container">
            <div class="detail-image">
                <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
            </div>

            <div class="detail-info">
                <span class="detail-category"><?php echo $product['category']; ?></span>
                <h1><?php echo $product['name']; ?></h1>
                <p class="detail-price">€ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                
                <p class="detail-desc">
                    <?php echo isset($product['desc']) ? $product['desc'] : "Geen omschrijving beschikbaar."; ?>
                </p>

                <div class="detail-actions">
                    <form method="post">
                        <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                        <button type="submit" name="add_to_cart" class="btn-main">In Winkelwagen</button>
                    </form>
                </div>

                <div class="detail-specs">
                    <ul>
                        <li>✅ Op voorraad in Bergschenhoek</li>
                        <li>✅ Voor 16:00 besteld, morgen in huis</li>
                        <li>✅ Gratis retourneren</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container footer-content">
            <div class="footer-block">
                <h4>Locatie</h4>
                <p>De Kaaiman<br>Leeuwenhoekweg 6B<br>Bergschenhoek</p>
            </div>
        </div>
        <div class="copyright">
            <p>© <?php echo date("Y"); ?> De Kaaiman.</p>
        </div>
    </footer>

</body>
</html>