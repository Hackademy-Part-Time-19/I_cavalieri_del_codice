<div class="container text-center">

    <div class="row">

        <div class="col-12 col-ml-12 col-sm-12 p-0" style="margin: 10px">

            <div class="card ml-2" style="background-color: #{{ dechex(mt_rand(0, 0xffffff)) }};height: 850px;">

                <img height="500px"  src="{{ $image ??'https://www.prolococisanobg.it/wp-content/uploads/2017/10/Non-disponibile-_04.jpg' }}" class="card-img-top" alt="Non disponibile" style="max-height: 600px;">

                <div class="card-body" style="max-height: 300px; overflow-y: scroll;">

                    <h5 class="card-title">{{ $title ?? 'NON DISPONIBILE' }}</h5>

                    <p class="card-text">{{ $subtitle ?? 'NON DISPONIBILE' }}</p>

                     <!-- User story 5.3: inizio -->

                   @if ($category)

                   <a class="small text-muted d-flex justify-content-center align-items-center" href="{{ $urlCategory ?? 'NON DISPONIBILE' }}">{{ $category ?? 'NON DISPONIBILE' }}</a>
                       
                   @else

                   <p class="small fst-italic text-capitalize"></p>
                       
                   @endif

                   <!-- User story 5.3: fine -->

                   <!-- User story 5.1: inizio -->
                   <p class="small fst-italic text-capitalize">
                    @if (isset($tags) && count($tags) > 0)
                        @foreach ($tags as $tag)
                            #{{ $tag->name }}
                        @endforeach
                    @else
                        Nessun tag disponibile
                    @endif
                </p>

                 <!-- User story 5.1: fine -->

                    <p class="card-text" style="max-height: 300px; overflow-y: auto;">{{ $body ?? 'NON DISPONIBILE' }}</p>

                    <p class="card-text">Redatto il {{ $data ?? 'NON DISPONIBILE' }} da {{ $user ?? 'NON DISPONIBILE' }}</p>

                    

                    

                    <button id="toggleButton">tema</button>

                    <a href="{{ $url ?? 'NON DISPONIBILE' }}" class="btn btn-info text-white" target="_blank">Modifica</a>

                    <a href="{{ $url ?? 'NON DISPONIBILE' }}" class="btn btn-info text-white" target="_blank">Cancella</a>

                    <div id="contenitore_bottone_like"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

let isRandom = false;

document.getElementById('toggleButton').addEventListener('click', function() {
    const card = document.querySelector('.card');

    if (isRandom) {
        card.style.backgroundColor = '#ffffff'; // Colore di sfondo predefinito
    } else {
        const randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
        card.style.backgroundColor = randomColor;
    }

    isRandom = !isRandom;
});






</script>
