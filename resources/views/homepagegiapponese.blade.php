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

    <h1>日本語</h1>

    <!--NON LOGATO-->
@guest
<nav class="navbar navbar-expand-lg bg-body-tertiary">

    <div class="container-fluid">

        <!--LOGO-->

        <a class="navbar-brand" href="/"><img
                src="https://s3-eu-west-1.amazonaws.com/tpd/logos/5f2bcf6dd70c1600011198c5/0x0.png" width="100px"
                alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--VOCI MENU TECNOLOGIA-->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="dropdown">
                        <a style="margin-left: 50px" class="btn btn-primary dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORIE
                        </a>

                        <ul class="dropdown-menu" style="margin-left: 50px">
                            <li><a class="dropdown-item" href="#">Tecnologia</a></li>
                            <li><a class="dropdown-item" href="#">Smartphone</a></li>
                            <li><a class="dropdown-item" href="#">Schermi</a></li>
                            <li><a class="dropdown-item" href="#">Console</a></li>
                            <li><a class="dropdown-item" href="#">Computer</a></li>
                        </ul>
                    </div>
                </li>


                <!--VOCI MENU LOGIN/REGISTRATI-->

                <li class="nav-item dropdown">

                    <div class="dropdown">
                        <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ACCEDI
                        </a>

                        <ul class="dropdown-menu" style="margin-left: 100px">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        </ul>
                    </div>
                </li>


                <!--VOCI MENU LINGUA-->


                <li class="nav-item dropdown">

                    <div class="dropdown">
                        <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SELEZIONA LINGUA
                        </a>

                        <ul class="dropdown-menu" style="margin-left: 100px">
                            <li><a class="dropdown-item" href="{{ route('homepage') }}">Italiano</a></li>
                            <li><a class="dropdown-item" href="{{ route('homepageinglese') }}">Inglese</a></li>
                            <li><a class="dropdown-item" href="{{ route('homepagegiapponese') }}">Giapponesi</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!--BARRA DI RICERCA-->

                <form class="d-flex" role="search" style="margin-left: 100px">
                    <input style="width: 200px" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                </form>
            </ul>

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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--VOCI MENU TECNOLOGIA-->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="dropdown">
                        <a style="margin-left: 50px" class="btn btn-primary dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORIA
                        </a>

                        <ul class="dropdown-menu" style="margin-left: 50px">
                            <li><a class="dropdown-item" href="#">Tecnologia</a></li>
                            <li><a class="dropdown-item" href="#">Smartphone</a></li>
                            <li><a class="dropdown-item" href="#">Schermi</a></li>
                            <li><a class="dropdown-item" href="#">Console</a></li>
                            <li><a class="dropdown-item" href="">Computer</a></li>
                        </ul>
                    </div>
                </li>



                <!--CREA ARTICOLO-->

                <li class="nav-item dropdown">

                    <div class="dropdown">
                        <a style="margin-left: 50px" class="btn btn-primary dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ARTICOLI
                        </a>

                        <ul class="dropdown-menu" style="margin-left: 50px">
                            <li><a class="dropdown-item" href="{{ route('article.create') }}">Crea un articolo</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('article.index') }}">Tutti gli articoli</a>
                            </li>

                        </ul>
                </li>

                <!--VOCI MENU LINGUA-->


                <li class="nav-item dropdown">

                    <div class="dropdown">
                        <a style="margin-left: 50px" class="btn btn-primary dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SELEZIONA LINGUA
                        </a>

                        <ul class="dropdown-menu" style="margin-left: 50px">
                            <li><a class="dropdown-item" href="{{ route('homepage') }}">Italiano</a></li>
                            <li><a class="dropdown-item" href="{{ route('homepageinglese') }}">Inglese</a></li>
                            <li><a class="dropdown-item" href="{{ route('homepagegiapponese') }}">Giapponesi</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!--BARRA DI RICERCA-->

                <form class="d-flex" role="search" style="margin-left: 50px">
                    <input style="width: 200px" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Inizia la tua ricerca">
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                </form>

                <!--VOCI MENU LOGIN/REGISTRATI-->

                <li class="nav-item dropdown">

                    <div style="margin-left: 50px" class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            BENVENUTO {{ auth()->user()->name }}
                        </a>

                        <ul class="dropdown-menu" style="margin-left: 50px">
                            <li><a class="dropdown-item" href="#">
                                    <form action="/logout" method="post">
                                        @csrf

                            <li><a class="dropdown-item" href="">Admin</a></li>

                            <li><a class="dropdown-item" href="">Lavora con noi</a></li>

                            <button class="logout" type="submit">ESCI</button>
                            </a>
                </li>

            </ul>
        </div>
        </li>

    </div>
    </li>
    </div>
    </div>
</nav>




@endauth


    @endauth

    <!--MESSAGGIO SCOREVOLE-->
    @guest
        <div id="animated-text-strip">
            <span class="marquee">弊社パートナー SKY からの最新ニュース&nbsp;</span>
            <span class="marquee">♠♠♠♠弊社パートナー SKY からの最新ニュース&nbsp;</span>
            <span class="marquee">♠♠♠♠弊社パートナー SKY からの最新ニュース&nbsp;</span>
            <span class="marquee">♠♠♠♠弊社パートナー SKY からの最新ニュース&nbsp;</span>
        </div>
    @endguest


    @auth

        <div id="animated-text-strip">
            <span class="marquee">ユーザーからの記事のコレクション&nbsp;</span>
            <span class="marquee">♥♥♥♥ユーザーからの記事のコレクション&nbsp;</span>
            <span class="marquee">♥♥♥♥ユーザーからの記事のコレクション&nbsp;</span>
            <span class="marquee">♥♥♥♥ユーザーからの記事のコレクション&nbsp;</span>
        </div>

        <!--PARTE DESTRA-->
        <div class="destraA" style="background-color: black; ">

            <div class="F2contenitoreA">

                <h1>QUI VANNO LE 10 CARD</h1>

            </div>
        </div>

        <div id="animated-text-strip">
            <span class="marquee">弊社パートナー SKY からの最新ニュース&nbsp;</span>
            <span class="marquee">♠♠♠♠弊社パートナー SKY からの最新ニュース&nbsp;</span>
            <span class="marquee">♠♠♠♠弊社パートナー SKY からの最新ニュース&nbsp;</span>
            <span class="marquee">♠♠♠♠弊社パートナー SKY からの最新ニュース&nbsp;</span>
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
                                <h3>iPhone15MAXプロ</h3>
                                <button class="btn description-btn">説明</button>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">説明</p>
                                <p>解像度 1290 x 2796 ピクセルの優れた 6.7 インチディスプレイを備えています。
                                    LTPO Super Retina XDR OLED テクノロジー、120Hz、HDR10、ドルビー ビジョン、1000 nits (標準)、
                                    2000 ニット (HBM)。 ハードウェア面では、iPhone 15 Pro Max には Apple A17 が搭載されています。
                                    Pro (3nm) SOC と GB の RAM を搭載。</p>
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
                                <h3>サムスンギャラクシーS24</h3>
                                <button class="btn description-btn">説明</button>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">Description</p>
                                <p>Galaxy S24 シリーズの AI ツール - 多くは Google を利用しており、メモや Web を要約します
                                    ページを作成し、執筆の提案を行います。 生成 AI は、撮影した画像も変更します
                                    スマートフォンの意外な使い方</p>
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
                                <h3>プレイステーション5</h3>
                                <button class="btn description-btn">説明</button>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">Description</p>
                                <p>PlayStation 5 は、可変周波数で 8 コアを備えた AMD の Zen 2 プロセッサを使用しています
                                    3.5 GHz に制限されています。GPU は、AMD の RDNA 2 をベースにしたカスタム システムオンチップ (SoC) です。
                                    可変周波数で動作する 36 個の計算ユニットを備え、2.23 GHz に制限され、
                                    10.28TFLOPS。</p>
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
                                <h3>MSI カタナ 15</h3>
                                <button class="btn description-btn">説明</button>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">Description</p>
                                <p>MSI ノートブック - Intel Core i7-12650H - 16GB DDR5 RAM - 1TB SSD - 15.6 インチ FHD LCD
                                    (1920*1080)、144Hz 45%NTSC IPS レベル - GPU NVidia RTX4070 8GB DDR6 - 光学ドライブ:
                                    いいえ - Intel Wi-Fi 6 AX201(2*2 ax) + BT5.2 - 寸法: 359 x 259 x 24.9 mm - 重量:
                                    2.25 - Windows 11。</p>
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
                                style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }}; width: 800px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://us.123rf.com/450wm/chatun09/chatun092211/chatun09221100141/194410490-ariete-costellazione-e-segno-zodiacale-sullo-sfondo-dell-universo-cosmico-disegno-blu-e-bianco.jpg?ver=6"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">星占い</h5>
                                            <p class="card-text">第6フィールドの月があなたに何かを求めています
                                                あなたの一日をより良くするために簡単です。 職場では、水星が星座にあります
                                                ポジティブな影響を残したという意識が残ります。
                                                チームの活動と感情の成功に貢献する
                                                あなたの献身に感謝します。 現場で ... </p>

                                            <!--PULSANTE DI INVIO LINK-->

                                            <a href="https://tg24.sky.it/lifestyle/oroscopo/oggi" target="_blank"
                                                class="btnSito">
                                                <strong>SKY パートナーの Web サイトにアクセスする</strong>
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
                                style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }}; width: 800px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://play-lh.googleusercontent.com/kq54ZLU02wm63f2pASZrh2Q8aUDt_rKAeD_fmP-SOd0lSdUSTidIocWwKE1YdK-3Bg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">世界のニュース</h5>
                                            <p class="card-text">ラファのグテーレス氏：停戦。 イスラエル：国連は
                                                彼とは反ユダヤ主義者だ
                                                国連、ガザに関する文書は月曜日に投票される予定です。 ハマス: パレスチナ人32,142人
                                                死んだ。 イエメンでフーシ派の保管倉庫3棟が直撃 </p>
                                            <a href="https://tg24.sky.it/mondo/2024/03/23/ucraina-russia-guerra-ultime-notizie-23-marzo-diretta"
                                                target="_blank" class="btnSito">
                                                <strong>SKY パートナーの Web サイトにアクセスする</strong>
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
                                style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }}; width: 800px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Sport_balls.svg/480px-Sport_balls.svg.png"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">スポーツ</h5>
                                            <p class="card-text">ATPマイアミ、シナーがヴァヴァッソリを6-3、6-4で破り到達
                                                3ラウンド目
                                                イタリアダービーは昨日、第1セット3-2 40-40で中断となった。
                                                雨のため今日に順延</p>
                                            <!--PULSANTE DI INVIO LINK-->

                                            <a href="https://sport.sky.it/" target="_blank" class="btnSito">
                                                <strong>SKY パートナーの Web サイトにアクセスする</strong>
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
                                style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }}; width: 800px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://www.digital-target.com/wp-content/uploads/2018/06/N14053_politica-2-638.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">ポリシー</h5>
                                            <p class="card-text">バーリ、デカロ、スカイTG24にて: 「議会に影はない。
                                                頭を下げるのはやめましょう」
                                                政治

                                                リベラ行進に参加したローマから、市長はローマに戻る。
                                                ...の決定</p>

                                            <!--PULSANTE DI INVIO LINK-->

                                            <a href="https://tg24.sky.it/politica" target="_blank" class="btnSito">
                                                <strong>SKY パートナーの Web サイトにアクセスする</strong>
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
                            style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }}; width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://img.freepik.com/premium-vector/medicine-icons-set_98292-1962.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">MEDICINE</h5>
                                        <p class="card-text">アメリカ、遺伝子治療のおかげで聴覚障害で生まれた子供が再び聞こえるようになった
                                            健康とウェルネス

                                            これは小児病院で行われた成功した実験的治療法です。
                                            病院... </p>
                                        <!--PULSANTE DI INVIO LINK-->

                                        <a href="https://tg24.sky.it/salute-e-benessere/medicina" target="_blank"
                                            class="btnSito">
                                            <strong>SKY パートナーの Web サイトにアクセスする</strong>
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
                            style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }}; width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://static.vecteezy.com/ti/vettori-gratis/p3/542268-set-di-facce-di-animali-carini-vettoriale.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">動物</h5>
                                        <p class="card-text">ブラジル、ヒトインスリンを産生する初のトランスジェニック牛
                                            牛乳の中で
                                            科学

                                            現在の生産方法に代わる生産方法への道を開く可能性がある
                                            正直に基づいて...

                                            これは小児病院で行われた成功した実験的治療法です。
                                            病院...</p>
                                        <!--PULSANTE DI INVIO LINK-->

                                        <a href="https://tg24.sky.it/spettacolo/moda" target="_blank"
                                            class="btnSito">
                                            <strong>SKY パートナーの Web サイトにアクセスする</strong>
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
                            style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }}; width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://st2.depositphotos.com/4060975/8544/v/950/depositphotos_85441904-stock-illustration-fashion-vector-icons-3.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ファッション</h5>
                                        <p class="card-text">ファッション、スターのスタイル: オスカーの 21 の詳細とトレンド
                                            レッドカーペット
                                            見せる

                                            オスカーのレッド カーペットは、作品を研究するために注目すべき巨大なキャットウォークです。
                                            トレンド...</p>
                                        <!--PULSANTE DI INVIO LINK-->

                                        <a href="https://tg24.sky.it/argomenti/moda" target="_blank" class="btnSito">
                                            <strong>SKY パートナーの Web サイトにアクセスする</strong>
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
                            style="max-width: 800px; max-height: 8000px; margin-top:100px; background-color: #{{ dechex(mt_rand(0, 0xffffff)) }}; width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://sociologicamente.it/wp-content/uploads/2022/07/borsa-finanza.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ファイナンス</h5>
                                        <p class="card-text">インフルエンサーに対する規制、金融警察が11人を回収
                                            百万
                                            ニュース

                                            調査はボローニャの4人のインフルエンサーに対して行われ、その後、
                                            フォロワー数は5,000万人、そして...</p>
                                        <!--PULSANTE DI INVIO LINK-->

                                        <a href="https://tg24.sky.it/argomenti/finanza" target="_blank"
                                            class="btnSito">
                                            <strong>SKY パートナーの Web サイトにアクセスする</strong>
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
                    <h1>私たちのツール</h1>
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
                                    <h3>教室</h3>
                                    <button class="btn description-btn">説明</button>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title">説明</p>
                                    <p>私たちは何者なのか。 Aulab は、2014 年以来この分野で活動している最初のイタリアのコーディング ファクトリーです。
                                        の
                                        トレーニングとソフトウェア開発。 私たちのコースでは、IT 分野のリソースをトレーニングします
                                        分野
                                        人材を求めている企業に就職します。</p>
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
                                    <h3>ララベル10</h3>
                                    <button class="btn description-btn">説明</button>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title">説明</p>
                                    <p>Laravel は PHP フレームワークであり、明らかにオブジェクト指向プログラミングを指向しています。
                                        そして
                                        MVC アーキテクチャ パターン (知らない場合は、勉強することを強くお勧めします)
                                        私たちの最悪の敵の 1 つであるスパゲッティ コードを排除するために。</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <center style="background-color:  #EE99C2">
                    <h1>コードの騎士</h1>
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
                                        <button class="btn description-btn">説明</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="ciao" class="title">説明</p>
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
                                        <button class="btn description-btn">説明</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="title">説明</p>
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
                                        <button class="btn description-btn">説明</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="title">説明</p>
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
                                        <button class="btn description-btn">説明</button>
                                    </div>
                                    <div class="flip-card-back">
                                        <p class="title">説明</p>
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