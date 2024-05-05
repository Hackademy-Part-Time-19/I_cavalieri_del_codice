<div class="container text-center">

    <div class="row">

        <div class="col-12 col-ml-12 col-sm-12 p-0" style="margin: 10px">

            <div id="colore" class="card ml-2" style="background-color: #5DEBD7;height: 850px;  border-radius: 10%;">

                <img height="500px"
                    src="{{Storage::url($image)}}"
                    class="card-img-top" alt="Non disponibile" style="max-height: 600px; border-radius: 10%;">

                <div class="card-body" style="max-height: 300px; overflow-y: scroll;">

                    <h5 class="card-title">{{ strtoupper($title ?? 'NON DISPONIBILE') }}</h5>

                    <p class="card-text">{{ $subtitle ?? 'NON DISPONIBILE' }}</p>

                    <!-- User story 5.3: inizio -->

                    @if ($category)
                        <a class="small text-muted d-flex justify-content-center align-items-center"
                            href="{{ $urlCategory ?? 'NON DISPONIBILE' }}">CATEGORIE:{{ strtoupper($category ?? 'NON DISPONIBILE') }}</a>
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

                    <p class="card-text" style="max-height: 300px; overflow-y: auto;">{{ $body ?? 'NON DISPONIBILE' }}
                    </p>

                    <p class="card-text">Redatto il {{ $data ?? 'NON DISPONIBILE' }} da {{ strtoupper($user ?? 'NON DISPONIBILE') }}
                    </p>
{{-- DA SISTEMARE
                    <span>{{$tempo}} min</span>--}}

                    <a href="{{$url ?? 'non disponibile'}}"></a>

                    <button class="btn btn-primary dropdown" onclick="changeCardColor(this)">MODIFICA TEMA</button>

                    <label class="container likecustom">
                        <input class="inputcustom" type="checkbox">
                        <svg id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M29.845,17.099l-2.489,8.725C26.989,27.105,25.804,28,24.473,28H11c-0.553,0-1-0.448-1-1V13  c0-0.215,0.069-0.425,0.198-0.597l5.392-7.24C16.188,4.414,17.05,4,17.974,4C19.643,4,21,5.357,21,7.026V12h5.002  c1.265,0,2.427,0.579,3.188,1.589C29.954,14.601,30.192,15.88,29.845,17.099z"
                                id="XMLID_254_"></path>
                            <path
                                d="M7,12H3c-0.553,0-1,0.448-1,1v14c0,0.552,0.447,1,1,1h4c0.553,0,1-0.448,1-1V13C8,12.448,7.553,12,7,12z   M5,25.5c-0.828,0-1.5-0.672-1.5-1.5c0-0.828,0.672-1.5,1.5-1.5c0.828,0,1.5,0.672,1.5,1.5C6.5,24.828,5.828,25.5,5,25.5z"
                                id="XMLID_256_"></path>
                        </svg>
                    </label>


                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let cards = document.querySelectorAll('.card');
    let originalColors = [];

    cards.forEach((card, index) => {
        originalColors[index] = card.style.backgroundColor;
    });

    let colors = ['#FF5733', '#33FF57', '#3357FF', '#5733FF', '#57FF33', '#FF3357'];
    let currentColorIndex = 0;

    function changeCardColor(button) {
        let card = button.parentNode;
        let index = Array.from(card.parentNode.children).indexOf(card);

        if (currentColorIndex >= colors.length) {
            currentColorIndex = 0;
        }

        card.style.backgroundColor = colors[currentColorIndex];
        currentColorIndex++;
    }
</script>
