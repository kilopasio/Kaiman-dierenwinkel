<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reptielen | De Kaaiman</title>
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
                <li><a href="reptielen.php" class="active">Reptielen</a></li>
                <li><a href="aquarium.php">Aquarium</a></li>
                <li><a href="#">Webshop</a></li>
                <li><a href="contact.php" class="btn-contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="fade-header">
        <div class="header-content container">
            <h1>Onze <span class="text-green">Reptielen</span></h1>
            <p>Ontdek onze collectie slangen, hagedissen en amfibieën.</p>
        </div>
    </header>

    <section class="container page-content">
        <div class="intro-text">
            <h2>Koudbloedige Passie</h2>
            <p>Bij De Kaaiman vind je een wisselend assortiment aan gezonde dieren. Al onze dieren zijn nakweek en worden met de grootst mogelijke zorg gehuisvest.</p>
        </div>

        <div class="animal-grid">
            <div class="animal-card">
                <h3>Slangen</h3>
                <p>O.a. Koningspythons, Boa's en Rattenslangen.</p>
            </div>
            <div class="animal-card">
                <h3>Hagedissen</h3>
                <p>Baardagamen, Luipaardgekko's en Varanen.</p>
            </div>
            <div class="animal-card">
                <h3>Amfibieën</h3>
                <p>Pijlgifkikkers, Salamanders en Padden.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container footer-content">
            <div class="footer-block">
                <h4>Openingstijden</h4>
                <ul>
                    <li>Maandag: 13:00 - 18:00</li>
                    <li>Di - Vr: 10:00 - 18:00</li>
                    <li>Zaterdag: 10:00 - 17:00</li>
                </ul>
            </div>
            <div class="footer-block">
                <h4>Locatie</h4>
                <p>De Kaaiman<br>Nijmegen</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; <?php echo date("Y"); ?> De Kaaiman.</p>
        </div>
    </footer>

</body>
</html>