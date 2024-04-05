<!--CARD DI ALESSIO-->


<div class="container text-center">
    <div class="row">

        <div class="col-12 col-ml-12 col-sm-12 p-0" style="margin: 10px">

            <div class="card ml-2" style="background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};height: 850px;">

                <img src="{{ $image }}" class="card-img-top" alt="non disponibile" style="max-height: 600px;">

                <div class="card-body" style="max-height: 300px; overflow-y: scroll;">
                    <h5 class="card-title">{{ $title }}</h5>

                    <p class="card-text">{{ $subtitle }}</p>

                    <p class="card-text" style="max-height: 300px; overflow-y: auto;">{{ $body }}</p>

                    <p class="card-text">Redatto il {{ $data }} da {{ $user }}</p>

                    <a href="{{ $urlCategory }}"
                        class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>

                    <!--user story 5.1 inizio-->

                    <p class="small fst-italic text-capitalize">

                        @if (isset($tags) && count($tags) > 0)
                            @foreach ($tags as $tag)
                                #{{ $tag->name }}
                            @endforeach
                        @else
                            Nessun tag disponibile
                        @endif

                    </p>


                    <!--user story 5.1 fine-->


                    <a href="{{ $url }}" class="btn btn-info text-white">Leggi</a>
                    <a href="{{ $url }}" class="btn btn-info text-white">Modifica</a>
                    <a href="{{ $url }}" class="btn btn-info text-white">Cancella</a>
                    <div id="contenitore_bottone_like"></div>

                </div>


            </div>
        </div>

    </div>
</div>



<!--Card con Omar e Will

<div class="card">
    <div class="card-image">
        <img src="{{ asset('storage/logo.jpg') }}" alt="non disponibile";>
    </div>
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $subtitle }}</p>
    <p class="card-text" style="max-height: 300px; overflow-y: auto;">{{ $body }}</p>

    <h3 class="card-body">
        Descrizione
    </h3>
    <p style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus tempore assumenda voluptas
        error? Dolorem ipsam architecto aliquid et iusto praesentium corporis recusandae itaque totam, possimus saepe
        iure cupiditate quibusdam sapiente!</p>

    <a href="{{ $urlCategory }}"
        class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
    <a href="{{ $url }}" class="btn btn-info text-white">Leggi</a>
    <p class="footer">Redatto il {{ $data }} da {{ $user }}</p>
</div>

CARD DI WILLIAM-->


<!--<div class="class card">

    <img src="{{ asset('storage/logo.jpg') }}" alt="" class="card-img-top">
    <div>
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $subtitle }}</p>
        <a href="{{ $urlCategory }}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        Redatto il {{ $data }} da {{ $user }}
        <a href="{{ $url }}" class="btn btn-info text-white">Leggi</a>

    </div>
</div>-->
