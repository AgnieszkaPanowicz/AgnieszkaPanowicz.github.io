<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Portfolio Agnieszki Panowicz">
    <meta name="author" content="Agnieszka Panowicz">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  
    <!--<link rel="icon" href="/favicon.ico">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/simple-lightbox.css?v2.14.1" />
    <title>Portfoli - Agnieszka Panowicz</title>
</head>

<body>

    <header>
        <nav class="menu">
            <a href="strony.html">Strony www</a>            
            <a href="strony2.html">CSS</a>
            <a href="js.html">JS</a>
            <a href="grafika.html">Grafika</a>
            <a href="#about">O mnie</a>
            <a href="#section3">Kontakt</a>
            <a href="cv.html" target="_blank">CV</a>
            <div class="dot"></div>
        </nav>
    
        <div class="menu-scroll">
            <ul>
                <li><a href="strony.html">Strony www</a></li>
                <li><a href="strony2.html">CSS</a></li>
                <li><a href="js.html">JS</a></li>
                <li><a href="grafika.html">Grafika</a></li>
                <li><a href="#about">O mnie</a></li>
                <li><a href="#section3">Kontakt</a></li>
                <li><a href="cv.html" target="_blank">CV</a></li>
            </ul>
        </div>
    
        <div class="menu-mobile">
            <div class="top-mobile">
                <div>
                    <span>Portfolio</span>
                    Agnieszka Panowicz
                </div>
                <i class="fa-solid fa-bars" id="hamburger-menu"></i>
            </div>
                    
    
            <ul>
                <li><a href="strony.html">Strony www</a></li>
                <li><a href="strony2.html">CSS</a></li>
                <li><a href="grafika.html">Grafika</a></li>
                <li><a href="#about">O mnie</a></li>
                <li><a href="#section3">Kontakt</a></li>
                <li><a href="cv.html" target="_blank">CV</a></li>
            </ul>
        </div>
    
        <div class="logo">
            <span>Portfolio</span>
            Agnieszka Panowicz
            <img src="img/cloud-logo2.png" alt="clud" width="92" height="48">
        </div>
    
        <div class="baner">
            <img src="img/baner.png" alt="Portfolio" class="balon" width="1254" height="436">        
        </div>
    
        <button id="topButton" onclick="topFunction()" aria-label="Przewiń na górę">
            <i class="fa-solid fa-angle-up"></i>
        </button>
    </header>
    
    <section>
        <div class="contents img-right">
            <div class="text">
                <h3>projekt graficzny</h3>
                <h2>HTML + CSS</h2>
                <span>CMS NA wordpressie</span>
                <a href="strony.html"><button class="butt" aria-label="Zobacz projekty graficzne">Zobacz więcej</button></a>
            </div>
            <img src="img/page1.jpg" alt="HTML + CSS" width="564" height="402">
        </div>
        <div class="contents img-left">
            <div class="text">
                <h3>strony responsywne</h3>
                <h2>STYLE CSS</h2>
                <a href="strony2.html"><button class="butt" aria-label="Zobacz strony">Zobacz więcej</button></a>
            </div>
            <img src="img/page2.jpg" alt="HTML + CSS" width="564" height="402">
        </div>
        <div class="contents img-right">
            <div class="text">
                <h2>JAVASCRIPT</h2>
                <span>Wykonane przeze mnie skrypty w języku JavaScript.</span>
                <a href="js.html"><button class="butt" aria-label="Zobacz kod JavaScript">Zobacz więcej</button></a>
            </div>
            <img src="img/page6.jpg" alt="HTML + CSS" width="564" height="402">
        </div>
        <div class="contents img-left">
            <div class="text">
                <h3>strony, loga, wizytówki...</h3>
                <h2>ADOBE + COREL</h2>
                <span>projekty graficzne</span>
                <a href="grafika.html"><button class="butt" aria-label="Zobacz grafiki">Zobacz więcej</button></a>
            </div>
            <img src="img/page4.jpg" alt="HTML + CSS" width="564" height="402">
        </div>
        <div class="contents img-right">
            <div class="text">
                <h2>malarstwo</h2>
                <span>w wolnym czasie...</span>
                <a href="malarstwo.html"><button class="butt" aria-label="Zobacz obrazy">Zobacz więcej</button></a>
            </div>
            <a href="malarstwo.html"><img src="img/page5.jpg" alt="HTML + CSS" width="564" height="402"></a>
        </div>

        <img src="img/clouds.png" class="top-clouds" alt="About">
    </section>

    <div id="section2">
        <div class="about" id="about">
            <img src="img/me.jpg" class="me" alt="O mnie">
            <div>
                <h2>O MNIE</h2>
                Nazywam się Agnieszka Panowicz. Jestem z Gdańska.
                <br><br>
                Od lat rozwijam się w zakresie tworzenia stron internetowych oraz projektowania grafik.
                Od 3 lat pracuję dla firmy KingApp gdzie stawiam strony na systemie opracowanym przez tą firmę i styluję skupiając się by były to strony responsywne.
                <br><br>
                Wcześniej zajmowałam się projektowaniem i stawianiem stron WWW głównie na systemie Wordpress. Tworzyłam grafiki do Internetu jak i na potrzeby druku. Korzystałam z takich programów jak Photoshop, Illustrator, Corel czy Figma. Projektowałam m.in.: szablony stron, loga, wizytówki, ulotki, banery, plakaty, identyfikacje wizyalne firmy.
                <br><br>
                Aktualnie uczę się języka JavaScript i Reacta w celu zmierzenia się na stanowisku Frontend Developera.
            </div>
        </div>

        <img src="img/clouds2.png" class="top-clouds" alt="Contact">
    </div>

    <div id="section3" class="kontakt">
        <div>
            <h2>KONTAKT</h2>

            Agnieszka Panowicz
            <br>
            agnieszkapanowicz@gmail.com
            <br>
        </div>    
        <div class="form">
 
            <form method="post" action="index.php#section3" id="contactForm">
                <input type="email" placeholder="Podaj e-mail" id="email" name="email"> <br>
                <div class="error-email">Popraw adres e-mail</div>
                <textarea name="message" placeholder="Wiadomość" id="message"></textarea> <br>
                <div class="error-message">Pole tekstowe jest puste</div>
                <button aria-label="Wyślij wiadomość">Wyślij</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
                $message = strip_tags(trim($_POST["message"]));

                if (empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    http_response_code(400);
                    echo "Please fill out all required fields and enter a valid email address.";
                    exit;
                }

                $recipient = "agnus21@o2.pl";
                $subject = "Wiadomość z portfolio...";
                $email_content .= "Email: $email\n\n";
                $email_content .= "Message:\n$message\n";

                $headers = "From: $email";

                if (mail($recipient, $subject, $email_content, $headers)) {
                    http_response_code(200);
                    echo "Dziekuję, Twoja wiadomość została wysłana.";
                } else {
                    http_response_code(500);
                  echo "Hmm, coś poszło nie tak. Wiadomość nie została wysłana.";
                }
            } 
            ?>

        </div>
    </div>
    
    <footer></footer>

    <script src="js/script.js"></script>

</body>
</html>

