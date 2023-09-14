<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Na Złotym Rogu - Landing Page</title>

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- ACP Cookies Modal -->
    <link rel="stylesheet" href="{{ asset('css/index_cookies.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/switchButton.css') }}" />

    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <header class="header">
      <a href="/" class="logo">
        <img src="{{ asset('img/Na_Zotym_Rogu.png') }}" alt="" width="100" height="100">
      </a>

      <i class="bx bx-menu" id="menu-icon"></i>

      <nav class="navbar">
        <a href="#home" class="active">Strona główna</a>
        <a href="#services">Usługi</a>
        {{-- <a href="#blog">Blog</a> --}}
        <a href="#contact">Kontakt</a>
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
          <h1>Zakupy online</h1>
          <p>
            Stawiamy na wygodę naszych klientów, oferując możliwość
            zamówienia leków przez telefon lub internet.
          </p>
        </div>
      </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
      <div class="services-content">
        <h1>Nasze usługi</h1>
        <p>
          Usługi, które wykonujemy dla naszych klientów.
        </p>
      </div>
      <div class="services-list">
        <div class="service-card">
          <img src="{{ asset('img/service.jpg') }}" alt="" />
          <div class="card-content">
            <h1>Porady zdrowotne</h1>
            <p>
              Nasi wykwalifikowani farmaceuci swoją wiedzą oraz doświadczeniem
              pomogą klientom w odpowiednim doborze leku.
            </p>
            <a href="#" class="btn">Czytaj więcej</a>
          </div>
        </div>
        <div class="service-card">
          <img src="{{ asset('img/service.jpg') }}" alt="" />
          <div class="card-content">
            <h1>Realizacja zamówień</h1>
            <p>
              Istnieje możliwość zamówienia leków w naszej aptece oraz ich
              osobisty odbiór, dzięki czemu unikniemy długich kolejek.
            </p>
            <a href="#" class="btn">Czytaj więcej</a>
          </div>
        </div>
        <div class="service-card">
          <img src="{{ asset('img/service.jpg') }}" alt="" />
          <div class="card-content">
            <h1>Realizacja szczepień</h1>
            <p>
              W naszej aptece realizujemy również szczepienia na choroby
              zakaźne oraz epidemiologiczne, w tym na COVID-19.
            </p>
            <a href="#" class="btn">Czytaj więcej</a>
          </div>
        </div>
      </div>
    </section>

    <!-- blog section design -->
    {{-- <section class="blog" id="blog">
      <div class="blog-content">
        <h1>Nasz blog</h1>
        <p>
            Zapraszamy naszych klientów do czytania naszych wpisów na blogu.
            Tam zamieszczamy artykuły na temat zdrowia, prawidłowego stosowania
            leków oraz sposoby dbania o dobre samopoczucie.
        </p>
      </div>
      <div class="blog-list">
        <div class="blog-card">
          <img src="{{ asset('img/service.jpg') }}" alt="" />
          <div class="card-content">
            <h1>Post 1</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
              illum!
            </p>
            <a href="#" class="btn">Czytaj więcej</a>
          </div>
        </div>
        <div class="blog-card">
          <img src="{{ asset('img/service.jpg') }}" alt="" />
          <div class="card-content">
            <h1>Post 2</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
              illum!
            </p>
            <a href="#" class="btn">Czytaj więcej</a>
          </div>
        </div>
        <div class="blog-card">
          <img src="{{ asset('img/service.jpg') }}" alt="" />
          <div class="card-content">
            <h1>Post 3</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
              illum!
            </p>
            <a href="#" class="btn">Czytaj więcej</a>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- contact section design -->
    <section class="contact" id="contact">
      <h1>Skontaktuj się z nami!</h1>

      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Imię" />
          <input type="email" placeholder="E-mail" />
        </div>
        <div class="input-box">
          <input type="number" placeholder="Telefon" />
          <input type="text" placeholder="Temat" />
        </div>
        <textarea
          name=""
          id=""
          cols="30"
          rows="10"
          placeholder="Wiadomość"
        ></textarea>
        <input type="submit" value="Wyślij wiadomość" class="btn" />
      </form>
    </section>

    <!-- google map design -->
    <section class="map" id="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.0073966317545!2d18.94316437624634!3d50.29178979877548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716cd87edaa493b%3A0x4ac91cdb4661a59b!2sNa%20Z%C5%82otym%20Rogu.%20Apteka!5e0!3m2!1spl!2spl!4v1694512328341!5m2!1spl!2spl"
        width="100%"
        height="450"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
      <div></div>
    </section>

    <!-- footer design -->
    <footer class="footer">
      <div class="footer-info">
        <h1>Apteka Na Złotym Rogu</h1>
        <p><i class="bx bx-phone"></i> +48 666 249 584 / +48 32 241 37 09</p>
        <p><i class="bx bx-world"></i> www.nazlotymrogu.pl</p>
        <p><i class="bx bx-envelope"></i> apteka@nazlotymrogu.pl</p>
        <p><i class="bx bx-map"></i> Centrum 1, ul. Wolności 78, 41-500 Chorzów</p>
        <p><i class="bx bx-check-circle"></i> NIP: 627-24-37-286</p>
      </div>
      <hr color="white">
      <div class="footer-text">
        <p>Copyright &copy; 2023. Realizacja: <a href="https://digitalowa.pl" target="_blank">Agencja Digitalowa</a></p>
      </div>

      <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="module" src="{{ asset('js/AdvancedCookiesPopup/index.js') }}"></script>
  </body>
</html>
