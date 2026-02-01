<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquarium | De Kaaiman</title>
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
                <li><a href="aquarium.php" class="active">Aquarium</a></li>
                <li><a href="webshop.php">Webshop</a></li>
                <li><a href="contact.php" class="btn-contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="fade-header-aquarium">
        <div class="header-content container">
            <h1>Onze <span class="text-blue">Onderwaterwereld</span></h1>
            <p>Van kleurrijke discusvissen tot aquascaping op topniveau.</p>
        </div>
    </header>

    <section class="container page-content">
        <div class="intro-text">
            <h2>Leven in het Water</h2>
            <p>Een aquarium is meer dan een bak met water; het is een levend schilderij. Bij De Kaaiman adviseren we je graag over de juiste balans, waterwaardes en de mooiste bewoners voor jouw biotoop.</p>
        </div>

        <div class="animal-grid">
            <div class="animal-card ocean-theme">
                <h3>Tropische Vissen</h3>
                <p>Tetra's, Goerami's, Cichliden en onze trots: Discusvissen.</p>
            </div>
            <div class="animal-card ocean-theme">
                <h3>Aquascaping</h3>
                <p>Alles voor de planten: CO2 systemen, voedingsbodems en verlichting.</p>
            </div>
            <div class="animal-card ocean-theme">
                <h3>Techniek</h3>
                <p>Externe filters, pompen en verwarmingselementen van topmerken.</p>
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