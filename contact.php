<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Route | De Kaaiman</title>
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
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="fade-header-contact">
        <div class="header-content container">
            <h1>Kom <span class="gradient-text">Langs</span></h1>
            <p>De koffie staat klaar aan de Leeuwenhoekweg in Bergschenhoek.</p>
        </div>
    </header>

    <section class="container page-content">
        
        <div class="contact-grid">
            
            <div class="contact-info">
                <h2>Adres & Gegevens</h2>
                <p>Heb je een vraag over je huisdier of zoek je iets specifieks? Bel ons of kom gezellig langs in de winkel.</p>
                
                <ul class="info-list">
                    <li>
                        <strong>📍 Adres:</strong><br>
                        Leeuwenhoekweg 6B<br>
                        2661 CZ Bergschenhoek
                    </li>
                    <li>
                        <strong>📞 Telefoon:</strong><br>
                        <a href="tel:0105213800">010 - 521 38 00</a>
                    </li>
                    <li>
                        <strong>📧 Email:</strong><br>
                        <a href="mailto:info@dekaaiman.nl">info@dekaaiman.nl</a>
                    </li>
                </ul>

                <div class="hours-block">
                    <h3>🕒 Openingstijden</h3>
                    <ul>
                        <li><span>Maandag:</span> <span class="closed">Gesloten</span></li>
                        <li><span>Dinsdag:</span> <span>09:30 - 18:00</span></li>
                        <li><span>Woensdag:</span> <span>09:30 - 18:00</span></li>
                        <li><span>Donderdag:</span> <span>09:30 - 18:00</span></li>
                        <li><span>Vrijdag:</span> <span>09:30 - 18:00</span></li>
                        <li><span>Zaterdag:</span> <span>09:30 - 17:00</span></li>
                        <li><span>Zondag:</span> <span class="closed">Gesloten</span></li>
                    </ul>
                </div>
            </div>

            <div class="contact-visuals">
                
                <div class="map-container">
                    <iframe 
                        width="100%" 
                        height="400" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Leeuwenhoekweg+6B,+Bergschenhoek&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>

                <form class="contact-form">
                    <h3>Stuur een bericht</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Jouw Naam" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Emailadres" required>
                    </div>
                    <div class="form-group">
                        <textarea rows="4" placeholder="Waar kunnen we je mee helpen?" required></textarea>
                    </div>
                    <button type="submit" class="btn-main">Verstuur Bericht</button>
                </form>
            </div>

        </div>
    </section>

    <footer>
        <div class="container footer-content">
            <div class="footer-block">
                <h4>Snel naar</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="reptielen.php">Reptielen</a></li>
                    <li><a href="aquarium.php">Aquarium</a></li>
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

</body>
</html>