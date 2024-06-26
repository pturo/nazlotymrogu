<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apteka Na Złotym Rogu</title>

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- ACP Cookies Modal -->
    <link rel="stylesheet" href="{{ asset('css/index_cookies.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/switchButton.css') }}" />

    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K5LL11FZM7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-K5LL11FZM7');
    </script>
</head>

<body>
    <header class="header">
        <a href="/" class="logo">
            <img src="{{ asset('img/Na_Zotym_Rogu.png') }}" alt="" width="100" height="100">
        </a>

        <i class="bx bx-menu" id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Strona główna</a>
        </nav>
    </header>

    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <h1>Apteka Na Złotym Rogu</h1>
            <p>
                Apteka "Na Złotym Rogu" to renomowana placówka w Chorzowie,
                oferująca kompleksową opiekę farmaceutyczną. Nasi doświadczeni
                farmaceuci służą fachową radą i szerokim wyborem leków,
                kosmetyków i artykułów medycznych. Zapraszamy do skorzystania z
                naszych usług i profesjonalnej obsługi.
            </p>
        </div>
        <div class="home-img">
            <!-- Slideshow container -->
            <div class="slideshow-container fade">
                <!-- Full images with numbers and message Info -->
                <div class="Containers">
                    <img src="{{ asset('img/apteka1.jpg') }}" style="width: 100%" />
                </div>

                <div class="Containers">
                    <img src="{{ asset('img/apteka2.jpg') }}" style="width: 100%" />
                </div>

                <!-- Back and forward buttons -->
                <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
                <a class="forward" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br />

            <!-- The circles/dots -->
            <div style="text-align: center">
                <span class="dots" onclick="currentSlide(1)"></span>
                <span class="dots" onclick="currentSlide(2)"></span>
            </div>
        </div>
        <div class="home-perks">
            <div class="perk-card">
                <a href="#"><i class="bx bx-package"></i></a>
                <h1>Szeroki wybór</h1>
                <p>
                    W swojej ofercie posiadamy szeroki wybór leków,
                    preparatów do pielęgnacji ciała oraz artykułów medycznych.
                </p>
            </div>
            <div class="perk-card">
                <a href="#"><i class="bx bx-support"></i></a>
                <h1>Wsparcie</h1>
                <p>
                    Nasi doświadczeni farmaceuci służą fachową radą i pomocą w
                    doborze odpowiednich leków oraz suplementów diety.
                </p>
            </div>
            <div class="perk-card">
                <a href="#"><i class="bx bx-check-shield"></i></a>
                <h1>Recepty</h1>
                <p>
                    Realizujemy leki recepturowe. Posiadamy też Epruf.
                </p>
            </div>
        </div>
        <div class="opening-hours">
            <h1>Godziny otwarcia</h1>
            <div class="opening-card">
                <div class="opening-row">
                    <p>poniedziałek</p>
                    <p>08:00-20:00</p>
                </div>
                <div class="opening-row">
                    <p>wtorek</p>
                    <p>08:00-20:00</p>
                </div>
                <div class="opening-row">
                    <p>środa</p>
                    <p>08:00-20:00</p>
                </div>
                <div class="opening-row">
                    <p>czwartek</p>
                    <p>08:00-20:00</p>
                </div>
                <div class="opening-row">
                    <p>piątek</p>
                    <p>08:00-20:00</p>
                </div>
                <div class="opening-row">
                    <p>sobota</p>
                    <p>Zamknięte</p>
                </div>
                <div class="opening-row">
                    <p>niedziela</p>
                    <p>Zamknięte</p>
                </div>
            </div>
        </div>
    </section>

    <!-- google map design -->
    <section class="map" id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.0073966317545!2d18.94316437624634!3d50.29178979877548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716cd87edaa493b%3A0x4ac91cdb4661a59b!2sNa%20Z%C5%82otym%20Rogu.%20Apteka!5e0!3m2!1spl!2spl!4v1694512328341!5m2!1spl!2spl"
            width="100%" height="450" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div></div>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-info">
            <h1>Apteka Na Złotym Rogu</h1>
            <a href="tel:+48666249584"><i class="bx bx-phone"></i> +48 666 249 584</a>
            <a href="tel:+48322413709"><i class="bx bx-phone"></i> +48 32 241 37 09</a>
            <a href="https://nazlotymrogu.pl/"><i class="bx bx-world"></i> www.nazlotymrogu.pl</a>
            <a href="mailto:apteka@nazlotymrogu.pl"><i class="bx bx-envelope"></i> apteka@nazlotymrogu.pl</a>
            <p><i class="bx bx-map"></i> Centrum 1, ul. Wolności 78, 41-500 Chorzów</p>
            <p><i class="bx bx-check-circle"></i> NIP: 627-24-37-286</p>
        </div>
        <hr color="white">
        <div class="footer-text">
            <p>Copyright &copy; 2023. Realizacja: Agencja <a href="https://digitalowa.pl"
                    target="_blank">Digitalowa.pl</a></p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="module" src="{{ asset('js/AdvancedCookiesPopup/index.js') }}"></script>
</body>

</html>
