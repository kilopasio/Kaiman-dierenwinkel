<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verzorging Cichliden | De Kaaiman</title>
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
                <li><a href="aquarium.php" class="active">Aquarium</a></li> <li><a href="webshop.php">Webshop</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="care-header" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%, rgba(15, 17, 21, 1) 100%), url('img/cichlide.jpg');">
        <div class="header-content container">
            <span class="subtitle">Verzorgingsfiche</span>
            <h1>De <span class="text-blue">Malawi Cichlide</span></h1>
            <p>De kleurrijke juwelen van Afrika</p>
        </div>
    </header>

    <section class="container page-content">
        
        <div class="care-grid">
            
            <div class="care-content">
                <h2>Introductie</h2>
                <p>Cichliden zijn waarschijnlijk de meest veelzijdige vissen in de hobby. Vooral de soorten uit het Malawimeer (Afrika) zijn ongekend populair vanwege hun felle kleuren die niet onderdoen voor zoutwatervissen. Het zijn intelligente vissen met interessant broedgedrag.</p>

                <h3>Huisvesting & Inrichting</h3>
                <p>Malawi Cichliden zijn actieve zwemmers en hebben ruimte nodig. Een aquarium van minimaal 120cm (ca. 250 liter) is de basis. Omdat ze in de natuur tussen de rotsen leven, moet het aquarium ingericht worden met veel steenformaties, zodat er schuilplekken en territoria ontstaan.</p>

                <h3>Waterwaarden</h3>
                <p>Deze vissen houden van hard water met een hoge pH-waarde. Dit is cruciaal voor hun gezondheid en om hun kleuren mooi te houden.</p>
                <ul>
                    <li><strong>Temperatuur:</strong> 24°C tot 26°C</li>
                    <li><strong>pH waarde:</strong> Tussen 7.5 en 8.5</li>
                    <li><strong>Hardheid (GH):</strong> 10 - 20 DH</li>
                </ul>

                <h3>Voeding</h3>
                <p>Let op: veel Malawi Cichliden (de Mbuna groep) zijn herbivoren (planteneters). Ze hebben speciaal voer nodig op basis van algen (Spirulina). Geef ze geen rode muggenlarven of runderhart, daar kunnen hun darmen niet tegen!</p>

                <div class="promo-box">
                    <h4>Starten met een Cichlidenbak?</h4>
                    <p>Bekijk ons aanbod stenen, pompen en speciaalvoer.</p>
                    <a href="webshop.php?category=Voeding" class="btn-main">Naar de Webshop</a>
                </div>
            </div>

            <aside class="care-sidebar">
                <div class="passport-card">
                    <h3>Dierenpaspoort</h3>
                    <img src="img/cichlide.jpg" alt="Malawi Cichlide">
                    
                    <div class="passport-row">
                        <span class="label">🌍 Herkomst:</span>
                        <span class="value">Afrika (Malawimeer)</span>
                    </div>
                    <div class="passport-row">
                        <span class="label">📏 Grootte:</span>
                        <span class="value">10 - 25 cm</span>
                    </div>
                    <div class="passport-row">
                        <span class="label">📅 Leeftijd:</span>
                        <span class="value">8 - 10 jaar</span>
                    </div>
                    <div class="passport-row">
                        <span class="label">🌡️ Temperatuur:</span>
                        <span class="value">24°C - 27°C</span>
                    </div>
                    <div class="passport-row">
                        <span class="label">💧 Water:</span>
                        <span class="value">Hard & Alkalisch</span>
                    </div>
                    <div class="passport-row">
                        <span class="label">Difficulty:</span>
                        <span class="value stars">⭐⭐⭐☆☆</span>
                    </div>
                </div>
            </aside>

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