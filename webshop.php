<?php
session_start();
include 'products.php'; 

// --- FILTER LOGICA ---

// 1. Haal de maximumprijs op (standaard 300)
$selected_price = isset($_GET['max_price']) ? $_GET['max_price'] : 300;

// 2. Haal de categorie op (standaard 'all' oftewel alles)
$selected_category = isset($_GET['category']) ? $_GET['category'] : 'all';

// 3. De filter lus
$filtered_products = [];

foreach ($products as $id => $product) {
    // Check 1: Is de prijs goed?
    $match_price = ($product['price'] <= $selected_price);

    // Check 2: Is de categorie goed? (Of staat hij op 'all'?)
    $match_category = ($selected_category == 'all' || $product['category'] == $selected_category);

    // Als BEIDE waar zijn, voegen we hem toe aan de lijst
    if ($match_price && $match_category) {
        $filtered_products[$id] = $product;
    }
}

// --- WINKELWAGEN LOGICA ---
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }
    $message = "Product toegevoegd aan winkelwagen!";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop | De Kaaiman</title>
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
                <li><a href="webshop.php" class="active">Webshop</a></li>
                <?php $count = isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?>
                <li><a href="winkelwagen.php">Winkelwagen (<?php echo $count; ?>)</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="fade-header-shop">
        <div class="header-content container">
            <h1>Onze <span class="gradient-text">Shop</span></h1>
            <p>Bestel eenvoudig voer, techniek en inrichting online.</p>
        </div>
    </header>

    <section class="container page-content">
        
        <?php if(isset($message)): ?>
            <div style="background: #43a047; color: white; padding: 10px; border-radius: 5px; margin-bottom: 20px; text-align: center;">
                <?php echo $message; ?> <a href="winkelwagen.php" style="font-weight: bold; text-decoration: underline;">Bekijk winkelwagen</a>
            </div>
        <?php endif; ?>

        <div class="shop-layout">
            
            <aside class="shop-sidebar">
                
                <div class="sidebar-block">
                    <h3>Categorieën</h3>
                    <ul>
                        <li><a href="webshop.php?category=all" class="<?php echo ($selected_category == 'all') ? 'active-cat' : ''; ?>">Alles tonen</a></li>
                        <li><a href="webshop.php?category=Verlichting" class="<?php echo ($selected_category == 'Verlichting') ? 'active-cat' : ''; ?>">Verlichting</a></li>
                        <li><a href="webshop.php?category=Verwarming" class="<?php echo ($selected_category == 'Verwarming') ? 'active-cat' : ''; ?>">Verwarming</a></li>
                        <li><a href="webshop.php?category=Voeding" class="<?php echo ($selected_category == 'Voeding') ? 'active-cat' : ''; ?>">Voeding</a></li>
                        <li><a href="webshop.php?category=Techniek" class="<?php echo ($selected_category == 'Techniek') ? 'active-cat' : ''; ?>">Techniek</a></li>
                        <li><a href="webshop.php?category=Terrariumbouw" class="<?php echo ($selected_category == 'Terrariumbouw') ? 'active-cat' : ''; ?>">Terrariumbouw</a></li>
                        <li><a href="webshop.php?category=Decoratie" class="<?php echo ($selected_category == 'Decoratie') ? 'active-cat' : ''; ?>">Decoratie</a></li>
                        <li><a href="webshop.php?category=Accessoires" class="<?php echo ($selected_category == 'Accessoires') ? 'active-cat' : ''; ?>">Accessoires</a></li>
                    </ul>
                </div>

                <div class="sidebar-block">
                    <h3>Filteren op Prijs</h3>
                    <form method="GET" action="webshop.php">
                        <input type="hidden" name="category" value="<?php echo $selected_category; ?>">
                        
                        <p>Max prijs: € <span id="price-display"><?php echo $selected_price; ?></span></p>
                        
                        <input type="range" name="max_price" min="0" max="300" 
                               value="<?php echo $selected_price; ?>" class="slider" id="price-slider">
                        
                        <button type="submit" class="btn-filter">Toepassen</button>
                    </form>
                </div>

            </aside>

            <div class="product-grid">
                <?php if (empty($filtered_products)): ?>
                    <div style="grid-column: 1/-1; text-align: center; padding: 2rem;">
                        <h3>Geen producten gevonden...</h3>
                        <p>Er zijn geen producten in de categorie "<strong><?php echo $selected_category; ?></strong>" onder de €<?php echo $selected_price; ?>.</p>
                        <br>
                        <a href="webshop.php" class="btn-main">Reset Filters</a>
                    </div>
                <?php else: ?>
                    <?php foreach ($filtered_products as $id => $product): ?>
                        <div class="product-card">
                            <div class="product-img">
                                <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
                                <?php if($product['price'] > 100): ?>
                                    <span class="sale-badge">Premium</span>
                                <?php endif; ?>
                            </div>
                            <div class="product-info">
                                <h4><?php echo $product['name']; ?></h4>
                                <p class="category"><?php echo $product['category']; ?></p>
                                <div class="price-row">
                                    <span class="price">€ <?php echo number_format($product['price'], 2, ',', '.'); ?></span>
                                    
                                    <form method="post" action="webshop.php?category=<?php echo $selected_category; ?>&max_price=<?php echo $selected_price; ?>">
                                        <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                                        <button type="submit" name="add_to_cart" class="btn-add">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container footer-content">
            <div class="footer-block">
                <h4>Snel naar</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="webshop.php">Webshop</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-block">
                <h4>Locatie</h4>
                <p>De Kaaiman<br>Leeuwenhoekweg 6B<br>Bergschenhoek</p>
            </div>
        </div>
        <div class="copyright">
            <p>© <?php echo date("Y"); ?> De Kaaiman.</p>
        </div>
    </footer>

    <script>
        const slider = document.getElementById("price-slider");
        const output = document.getElementById("price-display");
        slider.oninput = function() {
            output.innerHTML = this.value;
        }
    </script>

</body>
</html>