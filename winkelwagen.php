<?php
session_start();
include 'products.php';

// Verwijder item logica
if (isset($_GET['remove'])) {
    $id_to_remove = $_GET['remove'];
    unset($_SESSION['cart'][$id_to_remove]);
    header("Location: winkelwagen.php"); // Herlaad pagina
    exit;
}

// Leegmaken
if (isset($_GET['clear'])) {
    unset($_SESSION['cart']);
    header("Location: winkelwagen.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen | De Kaaiman</title>
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
                <li><a href="reptielen.php">Reptielen</a></li>
                <li><a href="aquarium.php">Aquarium</a></li>
                <li><a href="webshop.php">Webshop</a></li>
                <li><a href="winkelwagen.php" class="active">Winkelwagen</a></li>
            </ul>
        </div>
    </nav>

    <header class="fade-header-shop" style="height: 40vh;">
        <div class="header-content container">
            <h1>Jouw <span class="gradient-text">Winkelwagen</span></h1>
        </div>
    </header>

    <section class="container page-content">
        
        <?php if (empty($_SESSION['cart'])): ?>
            <div style="text-align: center; padding: 50px;">
                <h2>Je winkelwagen is nog leeg!</h2>
                <p>Ga snel terug naar de shop om spullen te zoeken.</p>
                <br>
                <a href="webshop.php" class="btn-main">Naar de Webshop</a>
            </div>
        <?php else: ?>
            
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Prijs</th>
                        <th>Aantal</th>
                        <th>Totaal</th>
                        <th>Actie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $total_price = 0;
                    foreach ($_SESSION['cart'] as $id => $quantity): 
                        if (isset($products[$id])):
                            $product = $products[$id];
                            $line_total = $product['price'] * $quantity;
                            $total_price += $line_total;
                    ?>
                    <tr>
                        <td>
                            <strong><?php echo $product['name']; ?></strong><br>
                            <small><?php echo $product['category']; ?></small>
                        </td>
                        <td>€ <?php echo number_format($product['price'], 2, ',', '.'); ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td>€ <?php echo number_format($line_total, 2, ',', '.'); ?></td>
                        <td><a href="winkelwagen.php?remove=<?php echo $id; ?>" class="remove-link">❌</a></td>
                    </tr>
                    <?php endif; endforeach; ?>
                </tbody>
            </table>

            <div class="cart-total">
                <h3>Totaal te betalen: <span>€ <?php echo number_format($total_price, 2, ',', '.'); ?></span></h3>
                <br>
                <a href="webshop.php" class="btn-contact">Verder Winkelen</a>
                <a href="#" class="btn-main">Afrekenen</a>
                <br><br>
                <a href="winkelwagen.php?clear=true" style="color: #666; font-size: 0.9rem;">Winkelwagen leegmaken</a>
            </div>

        <?php endif; ?>

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