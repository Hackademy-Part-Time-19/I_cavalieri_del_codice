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

                    <form class="d-flex" method="GET" action="{{ route('article.search')}}" style="margin-left: 50px">
                        <input style="width: 200px" class="form-control me-2" type="search" placeholder="Search"
                            aria-label="Search" name="query">
                        <button class="btn btn-outline-info" type="submit">Cerca</button>
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