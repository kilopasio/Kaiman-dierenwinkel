<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verzorging Baardagaam | De Kaaiman</title>
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
                <li><a href="reptielen.php" class="active">Kennisbank</a></li> <li><a href="webshop.php">Webshop</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="care-header">
        <div class="header-content container">
            <span class="subtitle">Verzorgingsfiche</span>
            <h1>De <span class="text-green">Baardagaam</span></h1>
            <p>Pogona vitticeps</p>
        </div>
    </header>

    <section class="container page-content">
        
        <div class="care-grid">
            
            <div class="care-content">
                <h2>Introductie</h2>
                <p>De baardagaam is één van de populairste reptielen om te houden. Ze zijn relatief rustig, worden handtam en hebben een interessant gedrag. Ze komen oorspronkelijk uit de woestijngebieden van Australië.</p>

                <h3>Huisvesting</h3>
                <p>Voor een volwassen koppel is een terrarium van minimaal 120x50x50 cm nodig. Omdat het woestijndieren zijn, moet het terrarium goed geventileerd zijn. Als bodembedekking kun je speciaal terrariumzand gebruiken.</p>

                <h3>Verlichting & Warmte</h3>
                <p>Dit is het belangrijkste onderdeel. Baardagamen hebben veel licht en UV-B straling nodig om vitamine D3 aan te maken. Zonder dit krijgen ze botproblemen.</p>
                <ul>
                    <li><strong>Warmteplek:</strong> 40°C tot 45°C</li>
                    <li><strong>Koele kant:</strong> Ongeveer 26°C</li>
                    <li><strong>Nacht:</strong> Niet lager dan 18°C</li>
                </ul>

                <h3>Voeding</h3>
                <p>Baardagamen zijn omnivoren (alleseters). Jonge dieren eten vooral insecten (krekels, sprinkhanen), volwassen dieren eten meer groente en fruit (andijvie, paprika, paardenbloemblad).</p>

                <div class="promo-box">
                    <h4>Alles voor je Baardagaam nodig?</h4>
                    <p>Wij hebben een compleet starterspakket samengesteld.</p>
                    <a href="webshop.php?category=Terrariumbouw" class="btn-main">Bekijk in Webshop</a>
                </div>
            </div>

            <aside class="care-sidebar">
                <div class="passport-card">
                    <h3>Dierenpaspoort</h3>
                    <img src="img/baardagaam.jpg" alt="Baardagaam">
                    
                    <div class="passport-row">
                        <span class="label">🌍 Herkomst:</span>
                        <span class="value">Australië</span>
                    </div>
                    <div class="passport-row">
                        <span class="label">📏 Grootte:</span>
                        <span class="value">40 - 60 cm</span>
                    </div>
                    <div class="passport-row">
                        <span class="label">📅 Leeftijd:</span>
                        <span class="value">10 - 15 jaar</span>
                    </div>
                    <div class="passport-row">
                        <span class="label">🌡️ Temperatuur:</span>
                        <span class="value">25°C - 45°C</span>
                    </div>
                    <div class="passport-row">
                        <span class="label">💧 Luchtvochtigheid:</span>
                        <span class="value">30% - 40% (Droog)</span>
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