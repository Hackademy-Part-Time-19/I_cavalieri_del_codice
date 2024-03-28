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

            <div class="distanza" class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a style="margin-left: 50px" class="btn btn-primary dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                TECNOLOGIA
                            </a>

                            <ul class="dropdown-menu" style="margin-left: 50px">
                                <li><a class="dropdown-item" href="#">Smartphone</a></li>
                                <li><a class="dropdown-item" href="#">Schermi</a></li>
                                <li><a class="dropdown-item" href="#">Console</a></li>
                                <li><a class="dropdown-item" href="#">Computer</a></li>
                                <li><a class="dropdown-item" href="#">AI</a></li>
                            </ul>
                        </div>
                    </li>

                    <!--VOCI MENU TENDENZA-->

                    <li class="nav-item">

                        <div class="dropdown">
                            <a style="margin-left: 50px" class="btn btn-primary dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                TENDENZA
                            </a>

                            <ul class="dropdown-menu" style="margin-left: 100px">
                                <li><a class="dropdown-item" href="#">Animali</a></li>
                                <li><a class="dropdown-item" href="#">Moda </a></li>
                                <li><a class="dropdown-item" href="#">Medicina</a></li>
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
                                <li><a class="dropdown-item" href="#">Notizie del mondo</a></li>
                                <li><a class="dropdown-item" href="#">Politica</a></li>
                                <li><a class="dropdown-item" href="#">Finanza</a></li>
                                <li><a class="dropdown-item" href="#">Oroscopo</a></li>
                            </ul>
                        </div>
                    </li>

                    <!--VOCI MENU LOGIN/REGISTRATI -->

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





                    <!--VOCI MENU LINGUA -->
                    <li class="nav-item dropdown">

                        <div class="dropdown">
                            <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SELEZIONA LINGUA
                            </a>

                            <ul class="dropdown-menu" style="margin-left: 100px">
                                <li><a class="dropdown-item" href="{{ route('homepage') }}">Italiano</a></li>
                                <li><a class="dropdown-item" href="{{ route('homepageinglese') }}">Inglese</a></li>
                                <li><a class="dropdown-item" href="{{ route('homepagegiapponese') }}">Giapponese</a></li>
                            </ul>
                        </div>
                    </li>

                    <!--BARRA DI RICERCA -->

                    <form class="d-flex" role="search" style="margin-left: 100px">
                        <input style="width: 200px" class="form-control me-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Cerca</button>
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
                                TECNOLOGIA
                            </a>

                            <ul class="dropdown-menu" style="margin-left: 100px">
                                <li><a class="dropdown-item" href="#">Smartphone</a></li>
                                <li><a class="dropdown-item" href="#">Schermi</a></li>
                                <li><a class="dropdown-item" href="#">Console</a></li>
                                <li><a class="dropdown-item" href="">Computer</a></li>
                            </ul>
                        </div>
                    </li>

                    <!--VOCI MENU TENDENZA-->

                    <li class="nav-item">

                        <div class="dropdown">
                            <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                TENDENZA
                            </a>

                            <ul class="dropdown-menu" style="margin-left: 100px">
                                <li><a class="dropdown-item" href="#">Animali</a></li>
                                <li><a class="dropdown-item" href="#">Moda </a></li>
                                <li><a class="dropdown-item" href="#">Medicina</a></li>
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
                                <li><a class="dropdown-item" href="#">Notizie del mondo</a></li>
                                <li><a class="dropdown-item" href="#">Politica</a></li>
                                <li><a class="dropdown-item" href="#">Finanza</a></li>
                                <li><a class="dropdown-item" href="#">Oroscopo</a></li>
                            </ul>
                        </div>
                    </li>

                    <!--CREA ARTICOLO-->

                    <li class="nav-item dropdown">

                        <div class="dropdown">
                            <a style="margin-left: 100px" class="btn btn-primary dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ARTICOLI
                            </a>

                            <ul class="dropdown-menu" style="margin-left: 100px">
                                <li><a class="dropdown-item" href="#">Crea articoli</a></li>
                                <li><a class="dropdown-item" href="#">Tutti gli articoli</a></li>

                            </ul>
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
