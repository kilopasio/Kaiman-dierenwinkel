<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Kaaiman | Reptielen & Aquarium Speciaalzaak</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <nav>
        <div class="container nav-wrapper">
            <div class="logo">De Kaaiman</div>
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Reptielen</a></li>
                <li><a href="#">Aquarium</a></li>
                <li><a href="#">Webshop</a></li>
                <li><a href="#" class="btn-contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>De Wereld van <br> <span class="gradient-text">Water & Land</span></h1>
            <p>Dé speciaalzaak in Nijmegen voor tropische vissen, hagedissen, slangen en complete inrichting.</p>
            <div class="buttons">
                <a href="#assortiment" class="btn-main">Bekijk Assortiment</a>
            </div>
        </div>
    </header>

    <section class="intro container">
        <h2>Passie voor exotische dieren</h2>
        <p>Of je nu een beginner bent met je eerste aquarium of een ervaren houder van gifkikkers of baardagamen. Bij De Kaaiman vind je de kennis en de dieren die je zoekt.</p>
    </section>

    <section id="assortiment" class="categories container">
        
        <div class="card jungle-theme">
            <div class="card-img">
                <img src="images/reptiel.jpg" alt="Hagedis en Reptielen">
                <div class="badge green">Terrarium</div>
            </div>
            <div class="card-text">
                <h3>Reptielen & Amfibieën</h3>
                <p>Van baardagamen en gekko's tot slangen en kikkers. Wij hebben een ruim aanbod gezonde dieren en specialistische voeding.</p>
                <a href="#">Bekijk reptielen &rarr;</a>
            </div>
        </div>

        <div class="card ocean-theme">
            <div class="card-img">
                <img src="images/vis.jpg" alt="Tropische vissen">
                <div class="badge blue">Aquarium</div>
            </div>
            <div class="card-text">
                <h3>Vissen & Aquaria</h3>
                <p>Ontdek onze wand vol tropische vissen. Ook voor aquascaping, pompen, filters en waterplanten ben je bij ons aan het juiste adres.</p>
                <a href="#">Bekijk vissen &rarr;</a>
            </div>
        </div>

        <div class="card">
            <div class="card-img">
                <img src="images/supplies.jpg" alt="Inrichting en Voer">
                <div class="badge gray">Shop</div>
            </div>
            <div class="card-text">
                <h3>Inrichting & Techniek</h3>
                <p>Alles om de natuur na te bootsen. Kurk, lianen, stenen, verlichting en bodembedekking voor zowel natte als droge werelden.</p>
                <a href="#">Naar de webshop &rarr;</a>
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
                <p>Kom langs in onze winkel voor advies op maat.</p>
                <br>
                <p><strong>De Kaaiman</strong><br>Nijmegen</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; <?php echo date("Y"); ?> De Kaaiman - Specialist in Reptielen & Vissen.</p>
        </div>
    </footer>

</body>
</html>