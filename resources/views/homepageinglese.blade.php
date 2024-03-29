<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>

<body class="corpo">

    <h1>inglese</h1>

    <!--NON LOGATO-->
    @guest
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <div class="container-fluid">

                <!--LOGO-->

                <a class="navbar-brand" href="/"><img
                        src="https://s3-eu-west-1.amazonaws.com/tpd/logos/5f2bcf6dd70c1600011198c5/0x0.png" width="100px"
                        alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--VOCI MENU TECNOLOGIA-->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <div class="dropdown">
                                <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    TECHNOLOGY
                                </a>

                                <ul class="dropdown-menu" style="margin-left: 100px">
                                    <li><a class="dropdown-item" href="#">Smartphone</a></li>
                                    <li><a class="dropdown-item" href="#">Screens</a></li>
                                    <li><a class="dropdown-item" href="#">Console</a></li>
                                    <li><a class="dropdown-item" href="#">Computer</a></li>
                                </ul>
                            </div>
                        </li>

                        <!--VOCI MENU TENDENZA-->

                        <li class="nav-item">

                            <div class="dropdown">
                                <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    TREND
                                </a>

                                <ul class="dropdown-menu" style="margin-left: 100px">
                                    <li><a class="dropdown-item" href="#">Animals</a></li>
                                    <li><a class="dropdown-item" href="#">Fashion </a></li>
                                    <li><a class="dropdown-item" href="#">Medicine</a></li>
                                    <li><a class="dropdown-item" href="#">Sport</a></li>
                                </ul>
                            </div>
                        </li>

                        <!--VOCI MENU NEWS -->

                        <li class="nav-item dropdown">

                            <div class="dropdown">
                                <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    NEWS
                                </a>

                                <ul class="dropdown-menu" style="margin-left: 100px">
                                    <li><a class="dropdown-item" href="#">World news</a></li>
                                    <li><a class="dropdown-item" href="#">Politics</a></li>
                                    <li><a class="dropdown-item" href="#">Finance</a></li>
                                    <li><a class="dropdown-item" href="#">Horoscope</a></li>
                                </ul>
                            </div>
                        </li>

                        <!--VOCI MENU LOGIN/REGISTRATI -->

                        <li class="nav-item dropdown">

                            <div class="dropdown">
                                <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    LOGIN
                                </a>

                                <ul class="dropdown-menu" style="margin-left: 100px">
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Sign in</a></li>
                                </ul>
                            </div>
                        </li>

                        <!--VOCI MENU LINGUA -->

                        <li class="nav-item dropdown">

                            <div class="dropdown">
                                <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELEZIONA LINGUA
                                </a>

                                <ul class="dropdown-menu" style="margin-left: 100px">
                                    <li><a class="dropdown-item" href="{{ route('homepage') }}">Italian</a></li>
                                    <li><a class="dropdown-item" href="{{ route('homepageinglese') }}">English</a></li>
                                    <li><a class="dropdown-item" href="{{ route('homepagegiapponese') }}">Japanese</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!--BARRA DI RICERCA -->

                        <form class="d-flex" role="search" style="margin-left: 100px">
                            <input style="width: 200px" class="form-control me-2" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>


                </div>
            </div>
        </nav>

    @endguest

    <!--AUTORIZZATO-->

    @auth

        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <div class="container-fluid">

                <!--LOGO-->

                <a class="navbar-brand" href="/"><img
                        src="https://s3-eu-west-1.amazonaws.com/tpd/logos/5f2bcf6dd70c1600011198c5/0x0.png" width="100px"
                        alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--VOCI MENU TECNOLOGIA-->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <div class="dropdown">
                                <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    TECHNOLOGY
                                </a>

                                <ul class="dropdown-menu" style="margin-left: 100px">
                                    <li><a class="dropdown-item" href="#">Smartphone</a></li>
                                    <li><a class="dropdown-item" href="#">Screens</a></li>
                                    <li><a class="dropdown-item" href="#">Console</a></li>
                                    <li><a class="dropdown-item" href="#">Computer</a></li>
                                </ul>
                            </div>
                        </li>

                        <!--VOCI MENU TENDENZA-->

                        <li class="nav-item">

                            <div class="dropdown">
                                <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    TREND
                                </a>

                                <ul class="dropdown-menu" style="margin-left: 100px">
                                    <li><a class="dropdown-item" href="#">Animals</a></li>
                                    <li><a class="dropdown-item" href="#">Fashion </a></li>
                                    <li><a class="dropdown-item" href="#">Medicine</a></li>
                                    <li><a class="dropdown-item" href="#">Sport</a></li>
                                </ul>
                            </div>
                        </li>

                        <!--VOCI MENU NEWS -->

                        <li class="nav-item dropdown">

                            <div class="dropdown">
                                <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    NEWS
                                </a>

                                <ul class="dropdown-menu" style="margin-left: 100px">
                                    <li><a class="dropdown-item" href="#">World news</a></li>
                                    <li><a class="dropdown-item" href="#">Politics</a></li>
                                    <li><a class="dropdown-item" href="#">Finance</a></li>
                                    <li><a class="dropdown-item" href="#">Horoscope</a></li>
                                </ul>
                            </div>
                        </li>

                        <!--CREA ARTICOLO-->

                        <li class="nav-item dropdown">

                            <div class="dropdown">
                                <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ARTICLES
                                </a>

                                <ul class="dropdown-menu" style="margin-left: 100px">
                                    <li><a class="dropdown-item" href="#">Create articles</a></li>
                                    <li><a class="dropdown-item" href="#">All articles</a></li>

                                </ul>
                        </li>

                        <!--VOCI MENU LINGUA -->

                        <select class="form-select" aria-label="Default select example" style="margin-left: 100px">
                            <option selected>SELECT LANGUAGE</option>
                            <option value="1"><a href="">ITALIAN</a></option>
                            <option value="1"><a href="./homepageinglese">ENGLISH</a></option>
                            <option value="1"><a href="">JAPANESE</a></option>
                        </select>

                        <!--VOCI MENU LOGIN/REGISTRATI -->

                    <li class="nav-item dropdown">

                      <div class="dropdown">
                          <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                              role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              BENVENUTO {{ auth()->user()->name }}
                          </a>

                          <ul class="dropdown-menu" style="margin-left: 100px">
                              <li><a class="dropdown-item" href="#">
                                      <form action="/logout" method="post">
                                          @csrf

                              <li><a class="dropdown-item" href="{{ route('homepageinglese') }}">Lavora con noi</a></li>
                              <li><a class="dropdown-item" href="{{ route('homepagegiapponese') }}">Amministratore</a>

                                  <button class="logout" type="submit">ESCI</button>
                                  </a>
                              </li>

                          </ul>
                      </div>
                  </li>

          </div>
          </li>

          <!--BARRA DI RICERCA -->

          <form class="d-flex" role="search" style="margin-left: 100px">
              <input style="width: 150px" class="form-control me-2" type="search" placeholder="Cerca"
                  aria-label="Inizia la tua ricerca">
              <button class="btn btn-outline-success" type="submit">Cerca</button>
          </form>
      </div>
      </div>
  </nav>


    @endauth

    <!--MESSAGGIO SCOREVOLE-->
    @guest
        <div id="animated-text-strip">
            <span class="marquee">LATEST NEWS FROM OUR PARTNER SKY&nbsp;</span>
            <span class="marquee">♠♠♠♠LATEST NEWS FROM OUR PARTNER SKY&nbsp;</span>
            <span class="marquee">♠♠♠♠LATEST NEWS FROM OUR PARTNER SKY&nbsp;</span>
            <span class="marquee">♠♠♠♠LATEST NEWS FROM OUR PARTNER SKY&nbsp;</span>
        </div>
    @endguest


    @auth

        <div id="animated-text-strip">
            <span class="marquee">COLLECTION OF ARTICLES FROM OUR USERS&nbsp;</span>
            <span class="marquee">♥♥♥♥COLLECTION OF ARTICLES FROM OUR USERS&nbsp;</span>
            <span class="marquee">♥♥♥♥COLLECTION OF ARTICLES FROM OUR USERS&nbsp;</span>
            <span class="marquee">♥♥♥♥COLLECTION OF ARTICLES FROM OUR USERS&nbsp;</span>
        </div>

        <!--PARTE DESTRA-->
        <div class="destraA" style="background-color: yellow ">

            <div class="F2contenitoreA">

                <h1>QUI VANNO LE 10 CARD</h1>

            </div>
        </div>

        <div id="animated-text-strip">
            <span class="marquee">LATEST NEWS FROM OUR PARTNER SKY&nbsp;</span>
            <span class="marquee">♠♠♠♠LATEST NEWS FROM OUR PARTNER SKY&nbsp;</span>
            <span class="marquee">♠♠♠♠LATEST NEWS FROM OUR PARTNER SKY&nbsp;</span>
            <span class="marquee">♠♠♠♠LATEST NEWS FROM OUR PARTNER SKY&nbsp;</span>
        </div>

    @endauth

    <!--PARTE CENTRALE-->

    <div class="contenitorepadre">

        <!--PARTE SINISTRA-->

        <div class="sinistra">

            <!--CARD GIREVOLI-->

            <div class="cards-wrapper">

                <!-- Card 1 -->
                <div class="card-container">

                    <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                    <!--<div class="card-container">-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="imgGirevole"
                                    src="https://m.media-amazon.com/images/I/815eN0AS-CL._AC_UF894,1000_QL80_.jpg"
                                    alt="IPHONE 15 PRO MAX ">
                                <h3>IPHONE 15 MAX PRO</h3>
                                <button class="btn description-btn">Description</button>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">Description</p>
                                <p>It has an excellent 6.7 inch display with a resolution of 1290 x 2796 pixels with
                                    LTPO Super Retina XDR OLED technology, 120Hz, HDR10, Dolby Vision, 1000 nits (typ),
                                    2000 nits (HBM). On the hardware side, the iPhone 15 Pro Max features an Apple A17
                                    Pro (3nm) SOC and has GB of RAM.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Card 2 -->
                <div class="card-container">

                    <!--<div class="cards-wrapper">-->
                    <!--<div class="card-container">-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="imgGirevole"
                                    src="https://images.samsung.com/is/image/samsung/p6pim/uk/2302/gallery/uk-galaxy-s23-s918-447009-sm-s918bzrheub-534887130?$650_519_PNG$"
                                    alt="IPHONE 15 PRO MAX ">
                                <h3>SAMSUNG GALAXY S24</h3>
                                <button class="btn description-btn">Description</button>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">Description</p>
                                <p>The Galaxy S24 series' AI tools – many powered by Google – summarize notes and web
                                    pages and make writing suggestions. Generative AI also modifies images taken with
                                    the smartphone in surprising ways</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Card 3 -->

                <div class="card-container">

                    <!--<div class="cards-wrapper">-->
                    <!--<div class="card-container">-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="imgGirevole"
                                    src="https://www.html.it/app/uploads/2023/03/PlayStation-5-Standard-Edition.png"
                                    alt="PLAYSTATION 5 ">
                                <h3>PLAYSTATION 5</h3>
                                <button class="btn description-btn">Description</button>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">Description</p>
                                <p>The PlayStation 5 uses AMD's Zen 2 processor with 8 cores at a variable frequency
                                    limited to 3.5 GHz. The GPU is a custom system-on-chip (SoC), based on AMD's RDNA 2,
                                    with 36 compute units running at variable frequency, limited to 2.23 GHz and capable
                                    of 10.28 TFLOPS.</p>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Card 4 -->
                <div class="card-container">


                    <!--<div class="cards-wrapper">-->
                    <!--<div class="card-container">-->
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="imgGirevole"
                                    src="https://m.media-amazon.com/images/I/713dZHEY2YL._AC_UF894,1000_QL80_.jpg"
                                    alt="IPHONE 15 PRO MAX ">
                                <h3>MSI KATANA 15</h3>
                                <button class="btn description-btn">Description</button>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">Description</p>
                                <p>MSI Notebook - Intel Core i7-12650H - RAM 16GB DDR5 - SSD 1TB - LCD 15.6" FHD
                                    (1920*1080), 144Hz 45%NTSC IPS-Level - GPU NVidia RTX4070 8GB DDR6 - Optical drive:
                                    no - Intel Wi- Fi 6 AX201(2*2 ax) + BT5.2 - Dimension: 359 x 259 x 24.9 mm - Weight:
                                    2.25 - Windows 11.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!--PARTE DESTRA-->
        <div class="destra">

            <div class="F2contenitore">

                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <!--IMMAGINE 1-->

                        <div class="carousel-item active">

                            <div class="card mb-3 "
                                style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://us.123rf.com/450wm/chatun09/chatun092211/chatun09221100141/194410490-ariete-costellazione-e-segno-zodiacale-sullo-sfondo-dell-universo-cosmico-disegno-blu-e-bianco.jpg?ver=6"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">HOROSCOPE</h5>
                                            <p class="card-text">The Moon in the sixth field asks you to do something
                                                simple to make your day better. In the workplace, Mercury in your Sign
                                                leaves you with the awareness of having left a positive impact,
                                                contributing to the success of your team's activities and feeling
                                                appreciated for your commitment. In the field ... </p>

                                            <!--PULSANTE DI INVIO LINK-->

                                            <a href="https://tg24.sky.it/lifestyle/oroscopo/oggi" target="_blank"
                                                class="btnSito">
                                                <strong>GO TO THE SKY PARTNER WEBSITE</strong>
                                            </a>
                                            <div id="container-stars">
                                                <div id="stars"></div>
                                            </div>

                                            <div id="glow">
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                            </div>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--IMMAGINE 2-->

                        <div class="carousel-item">

                            <div class="card mb-3 "
                                style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://play-lh.googleusercontent.com/kq54ZLU02wm63f2pASZrh2Q8aUDt_rKAeD_fmP-SOd0lSdUSTidIocWwKE1YdK-3Bg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">WORLD NEWS</h5>
                                            <p class="card-text">Guterres in Rafah: ceasefire. Israel: the UN is
                                                anti-Semitic with him
                                                UN, a text on Gaza will be voted on Monday. Hamas: 32,142 Palestinians
                                                dead. Three Houthi storage warehouses hit in Yemen </p>
                                            <a href="https://tg24.sky.it/mondo/2024/03/23/ucraina-russia-guerra-ultime-notizie-23-marzo-diretta"
                                                target="_blank" class="btnSito">
                                                <strong>GO TO THE SKY PARTNER WEBSITE</strong>
                                            </a>
                                            <div id="container-stars">
                                                <div id="stars"></div>
                                            </div>

                                            <div id="glow">
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                            </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--IMMAGINE 3-->

                        <div class="carousel-item">

                            <div class="card mb-3 "
                                style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Sport_balls.svg/480px-Sport_balls.svg.png"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">SPORT</h5>
                                            <p class="card-text">ATP Miami, Sinner beats Vavassori 6-3, 6-4 and reaches
                                                the third round
                                                The Italian derby was suspended yesterday at 3-2 40-40 in the first set
                                                due to rain and postponed to today </p>
                                            <!--PULSANTE DI INVIO LINK-->

                                            <a href="https://sport.sky.it/" target="_blank" class="btnSito">
                                                <strong>GO TO THE SKY PARTNER WEBSITE</strong>
                                            </a>
                                            <div id="container-stars">
                                                <div id="stars"></div>
                                            </div>

                                            <div id="glow">
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                            </div>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--IMMAGINE 4-->

                        <div class="carousel-item">

                            <div class="card mb-3 "
                                style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://www.digital-target.com/wp-content/uploads/2018/06/N14053_politica-2-638.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">POLITICS</h5>
                                            <p class="card-text">Bari, Decaro on Sky TG24: "No shadows on the council.
                                                Let's not lower our heads"
                                                Politics

                                                From Rome, where he participated in Libera's march, the mayor returns to
                                                the decision of ...</p>

                                            <!--PULSANTE DI INVIO LINK-->

                                            <a href="https://tg24.sky.it/politica" target="_blank" class="btnSito">
                                                <strong>GO TO THE SKY PARTNER WEBSITE</strong>
                                            </a>
                                            <div id="container-stars">
                                                <div id="stars"></div>
                                            </div>

                                            <div id="glow">
                                                <div class="circle"></div>
                                                <div class="circle"></div>
                                            </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--IMMAGINE 5-->

                    <div class="carousel-item">

                        <div class="card mb-3 "
                            style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://img.freepik.com/premium-vector/medicine-icons-set_98292-1962.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">MEDICINE</h5>
                                        <p class="card-text">USA, child born deaf can hear again thanks to gene therapy
                                            Health and wellness

                                            This is a successful experimental treatment, conducted at the Children's
                                            Hospital... </p>
                                        <!--PULSANTE DI INVIO LINK-->

                                        <a href="https://tg24.sky.it/salute-e-benessere/medicina" target="_blank"
                                            class="btnSito">
                                            <strong>GO TO THE SKY PARTNER WEBSITE</strong>
                                        </a>
                                        <div id="container-stars">
                                            <div id="stars"></div>
                                        </div>

                                        <div id="glow">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                        </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--IMMAGINE 6-->

                    <div class="carousel-item">

                        <div class="card mb-3 "
                            style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/542268-set-di-facce-di-animali-carini-vettoriale.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ANIMALS</h5>
                                        <p class="card-text">Brazil, first transgenic cow that produces human insulin
                                            in milk
                                            Science

                                            It could pave the way for an alternative production method to the current
                                            ones based...

                                            This is a successful experimental treatment, conducted at the Children's
                                            Hospital...</p>
                                        <!--PULSANTE DI INVIO LINK-->

                                        <a href="https://tg24.sky.it/spettacolo/moda" target="_blank"
                                            class="btnSito">
                                            <strong>GO TO THE SKY PARTNER WEBSITE</strong>
                                        </a>
                                        <div id="container-stars">
                                            <div id="stars"></div>
                                        </div>

                                        <div id="glow">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                        </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--IMMAGINE 7-->

                    <div class="carousel-item">

                        <div class="card mb-3 "
                            style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://st2.depositphotos.com/4060975/8544/v/950/depositphotos_85441904-stock-illustration-fashion-vector-icons-3.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">FASHION</h5>
                                        <p class="card-text">Fashion, star style: 21 details and trends from the Oscars
                                            red carpet
                                            Show

                                            The Oscars red carpet is a huge catwalk to keep an eye on to study the
                                            trends...</p>
                                        <!--PULSANTE DI INVIO LINK-->

                                        <a href="https://tg24.sky.it/argomenti/moda" target="_blank" class="btnSito">
                                            <strong>VAI AL SITO PARTENER SKY</strong>
                                        </a>
                                        <div id="container-stars">
                                            <div id="stars"></div>
                                        </div>

                                        <div id="glow">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                        </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--IMMAGINE 8-->

                    <div class="carousel-item">

                        <div class="card mb-3 "
                            style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://sociologicamente.it/wp-content/uploads/2022/07/borsa-finanza.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">FINANCE</h5>
                                        <p class="card-text">Controls on influencers, the Financial Police recover 11
                                            million
                                            News

                                            The investigations conducted on four influencers from Bologna, followed by
                                            50 million followers, and... </p>
                                        <!--PULSANTE DI INVIO LINK-->

                                        <a href="https://tg24.sky.it/argomenti/finanza" target="_blank"
                                            class="btnSito">
                                            <strong>GO TO THE SKY PARTNER WEBSITE</strong>
                                        </a>
                                        <div id="container-stars">
                                            <div id="stars"></div>
                                        </div>

                                        <div id="glow">
                                            <div class="circle"></div>
                                            <div class="circle"></div>
                                        </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @guest

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="frecce" class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="frecce" style="display: none;" class="carousel-control-next-icon"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            @endguest
        </div>
    </div>

    </div>

    </div>
    </div>

    @guest
        <!--FOOTER-->

        <footer class="contenitoreFinale">

            <div class="row">
                <!--LOGO I CAVALIERI DEL CODICE-->

                <center>
                    <h1>OUR TOOLS</h1>
                </center>

                <div class="gruppo" style="flex: 1;">

                    <!--<img src="/public/immagini/I cavalieri del codice.jpg" width="500px" alt="">-->
                    <img src="{{ asset('storage/logo.jpg') }}" width="500px" alt="I cavalieri del codice">

                </div>

                <div class="aulab" style="flex: 1;">

                    <!-- Card 1 -->
                    <div class="card-container">

                        <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                        <!--<div class="card-container">-->
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="imgGirevole"
                                        src="https://s3-eu-west-1.amazonaws.com/tpd/logos/5f2bcf6dd70c1600011198c5/0x0.png"
                                        alt="Aulab ">
                                    <h3>AULAB</h3>
                                    <button class="btn description-btn">Description</button>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title">Description</p>
                                    <p>Who we are. Aulab is the first Italian Coding Factory active since 2014 in the field
                                        of
                                        training and software development. With our courses we train resources in the IT
                                        field
                                        to be placed in companies looking for personnel.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="laravel" style="flex: 1;">

                    <!-- Card 2 -->
                    <div class="card-container">

                        <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                        <!--<div class="card-container">-->
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="imgGirevole"
                                        src="https://media.licdn.com/dms/image/D5612AQGfmy6NPGnt1w/article-cover_image-shrink_600_2000/0/1677779939155?e=2147483647&v=beta&t=sVIWSwY1JeDEVkYJtAl8PSRy_4TSOaolndjmzIUZxuk"
                                        alt="IPHONE 15 PRO MAX ">
                                    <h3>LARAVEL 10</h3>
                                    <button class="btn description-btn">Description</button>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title">Description</p>
                                    <p>Laravel is a PHP framework, obviously oriented towards object-oriented programming
                                        and
                                        MVC architectural pattern (which if you don't know I highly recommend studying) e
                                        to the elimination of one of our worst enemies, spaghetti code.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <center style="background-color:  #EE99C2">
                    <h1>THE KNIGHTS OF THE CODE</h1>
                </center>

                <div style="background-color:  #EE99C2" class="row">

                    <div class="alessio" style="flex: 1;">


                        <!-- Card 3 -->
                        <div class="card-container">

                            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                            <!--<div class="card-container">-->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img class="imgGirevole"
                                            src="https://i.pinimg.com/550x/73/e4/41/73e4413ffc2c0379fedb3fca1c701dea.jpg"
                                            alt="IPHONE 15 PRO MAX ">
                                        <h3>ALESSIO GIANNOCCARO</h3>
                                        <button class="btn description-btn">Description</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="ciao" class="title">DESCRIPTION</p>
                                        <h3>Età: 35 anni</h3>
                                        <h3>Hackadamy anno:2023/2024</h3>
                                        <h3>Ruolo:Frontend</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="omar" style="flex: 1;">


                        <!-- Card 4 -->
                        <div class="card-container">

                            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                            <!--<div class="card-container">-->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img class="imgGirevole"
                                            src="https://i.pinimg.com/736x/74/88/b3/7488b35161e8e3cc7f3a345d190cecdc.jpg"
                                            alt="IPHONE 15 PRO MAX ">
                                        <h3>OMAR</h3>
                                        <button class="btn description-btn">Description</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="title">DESCRIPTION</p>
                                        <h3>Età: 29 anni</h3>
                                        <h3>Hackadamy anno:2023/2024</h3>
                                        <h3>Ruolo:Backend</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="william" style="flex: 1;">


                        <!-- Card 5 -->
                        <div class="card-container">

                            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                            <!--<div class="card-container">-->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img class="imgGirevole"
                                            src="https://i.pinimg.com/236x/53/91/e7/5391e761d40b1f42c4d23ee5651e9b15.jpg"
                                            alt="IPHONE 15 PRO MAX ">
                                        <h3>WILLIAM</h3>
                                        <button class="btn description-btn">Description</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="title">DESCRIPTION</p>
                                        <h3>Età: 29 anni</h3>
                                        <h3>Hackadamy anno:2023/2024</h3>
                                        <h3>Ruolo:Backend</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="daniele" style="flex: 1;">


                        <!-- Card 6 -->
                        <div class="card-container">

                            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                            <!--<div class="card-container">-->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img class="imgGirevole"
                                            src="https://i.pinimg.com/236x/71/36/b3/7136b3a2a7d46f0264580680aaa0f935.jpg"
                                            alt="IPHONE 15 PRO MAX ">
                                        <h3>DANIELE</h3>
                                        <button class="btn description-btn">Description</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="title">DESCRIPTION</p>
                                        <h3>Età: 29 anni</h3>
                                        <h3>Hackadamy anno:2023/2024</h3>
                                        <h3>Ruolo:Backend</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


                <!--LOGO ICONE-->
                <div class="row" style="margin-top: 50px">
                    <ul class="example-2">
                        <li class="icon-content">
                            <a href="https://linkedin.com/" aria-label="LinkedIn" data-social="linkedin">
                                <div class="filled"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16" xml:space="preserve">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="tooltip">LinkedIn</div>
                        </li>
                        <li class="icon-content">
                            <a href="https://www.github.com/" aria-label="GitHub" data-social="github">
                                <div class="filled"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-github" viewBox="0 0 16 16" xml:space="preserve">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="tooltip">GitHub</div>
                        </li>
                        <li class="icon-content">
                            <a href="https://www.instagram.com/" aria-label="Instagram" data-social="instagram">
                                <div class="filled"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"
                                    xml:space="preserve">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="tooltip">Instagram</div>
                        </li>
                        <li class="icon-content">
                            <a href="https://youtube.com/" aria-label="Youtube" data-social="youtube">
                                <div class="filled"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16" xml:space="preserve">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="tooltip">Youtube</div>
                        </li>
                    </ul>



                </div>
            </div>

        </footer>

    @endguest


    @auth
        <!--FOOTER-->

        <footer class="contenitoreFinale">

            <div class="row">
                <!--LOGO I CAVALIERI DEL CODICE-->

                <center>
                    <h1>OUR TOOLS</h1>
                </center>

                <div class="gruppo" style="flex: 1;">

                    <!--<img src="/public/immagini/I cavalieri del codice.jpg" width="500px" alt="">-->
                    <img src="{{ asset('storage/logo.jpg') }}" width="500px" alt="I cavalieri del codice">

                </div>

                <div class="aulab" style="flex: 1;">

                    <!-- Card 1 -->
                    <div class="card-container">

                        <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                        <!--<div class="card-container">-->
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="imgGirevole"
                                        src="https://s3-eu-west-1.amazonaws.com/tpd/logos/5f2bcf6dd70c1600011198c5/0x0.png"
                                        alt="Aulab ">
                                    <h3>AULAB</h3>
                                    <button class="btn description-btn">Description</button>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title">DESCRIPTION</p>
                                    <p>Who we are. Aulab is the first Italian Coding Factory active since 2014 in the field
                                        of
                                        training and software development. With our courses we train resources in the IT
                                        field
                                        to be placed in companies looking for personnel.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="laravel" style="flex: 1;">

                    <!-- Card 2 -->
                    <div class="card-container">

                        <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                        <!--<div class="card-container">-->
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="imgGirevole"
                                        src="https://media.licdn.com/dms/image/D5612AQGfmy6NPGnt1w/article-cover_image-shrink_600_2000/0/1677779939155?e=2147483647&v=beta&t=sVIWSwY1JeDEVkYJtAl8PSRy_4TSOaolndjmzIUZxuk"
                                        alt="IPHONE 15 PRO MAX ">
                                    <h3>LARAVEL 10</h3>
                                    <button class="btn description-btn">Description</button>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title">DESCRIZIONE</p>
                                    <p>Laravel is a PHP framework, obviously oriented towards object-oriented programming
                                        and
                                        MVC architectural pattern (which if you don't know I highly recommend studying) e
                                        to the elimination of one of our worst enemies, spaghetti code.</p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>

                <center style="background-color:  #EE99C2">
                    <h1>THE KNIGHTS OF THE CODE</h1>
                </center>

                <div style="background-color:  #EE99C2" class="row">

                    <div class="alessio" style="flex: 1;">


                        <!-- Card 3 -->
                        <div class="card-container">

                            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                            <!--<div class="card-container">-->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img class="imgGirevole"
                                            src="https://i.pinimg.com/550x/73/e4/41/73e4413ffc2c0379fedb3fca1c701dea.jpg"
                                            alt="IPHONE 15 PRO MAX ">
                                        <h3>ALESSIO GIANNOCCARO</h3>
                                        <button class="btn description-btn">Description</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="ciao" class="title">DESCRIZIONE</p>
                                        <h3>Età: 35 anni</h3>
                                        <h3>Hackadamy anno:2023/2024</h3>
                                        <h3>Ruolo:Frontend</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="omar" style="flex: 1;">


                        <!-- Card 4 -->
                        <div class="card-container">

                            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                            <!--<div class="card-container">-->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img class="imgGirevole"
                                            src="https://i.pinimg.com/736x/74/88/b3/7488b35161e8e3cc7f3a345d190cecdc.jpg"
                                            alt="IPHONE 15 PRO MAX ">
                                        <h3>OMAR</h3>
                                        <button class="btn description-btn">Description</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="title">DESCRIZIONE</p>
                                        <h3>Età: 29 anni</h3>
                                        <h3>Hackadamy anno:2023/2024</h3>
                                        <h3>Ruolo:Backend</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="william" style="flex: 1;">


                        <!-- Card 5 -->
                        <div class="card-container">

                            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                            <!--<div class="card-container">-->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img class="imgGirevole"
                                            src="https://i.pinimg.com/236x/53/91/e7/5391e761d40b1f42c4d23ee5651e9b15.jpg"
                                            alt="IPHONE 15 PRO MAX ">
                                        <h3>WILLIAM</h3>
                                        <button class="btn description-btn">Description</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="title">DESCRIZIONE</p>
                                        <h3>Età: 29 anni</h3>
                                        <h3>Hackadamy anno:2023/2024</h3>
                                        <h3>Ruolo:Backend</h3>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>

                    <div class="daniele" style="flex: 1;">


                        <!-- Card 6 -->
                        <div class="card-container">

                            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
                            <!--<div class="card-container">-->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img class="imgGirevole"
                                            src="https://i.pinimg.com/236x/71/36/b3/7136b3a2a7d46f0264580680aaa0f935.jpg"
                                            alt="IPHONE 15 PRO MAX ">
                                        <h3>DANIELE</h3>
                                        <button class="btn description-btn">Description</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="title">DESCRIZIONE</p>
                                        <h3>Età: 29 anni</h3>
                                        <h3>Hackadamy anno:2023/2024</h3>
                                        <h3>Ruolo:Backend</h3>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>

                <!--LOGO ICONE-->


                <div class="row" style="margin-top: 50px">
                    <ul class="example-2">
                        <li class="icon-content">
                            <a href="https://linkedin.com/" aria-label="LinkedIn" data-social="linkedin">
                                <div class="filled"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16" xml:space="preserve">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="tooltip">LinkedIn</div>
                        </li>
                        <li class="icon-content">
                            <a href="https://www.github.com/" aria-label="GitHub" data-social="github">
                                <div class="filled"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-github" viewBox="0 0 16 16" xml:space="preserve">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="tooltip">GitHub</div>
                        </li>
                        <li class="icon-content">
                            <a href="https://www.instagram.com/" aria-label="Instagram" data-social="instagram">
                                <div class="filled"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"
                                    xml:space="preserve">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="tooltip">Instagram</div>
                        </li>
                        <li class="icon-content">
                            <a href="https://youtube.com/" aria-label="Youtube" data-social="youtube">
                                <div class="filled"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16" xml:space="preserve">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="tooltip">Youtube</div>
                        </li>
                    </ul>



                </div>
            </div>

        </footer>

    @endguest






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
