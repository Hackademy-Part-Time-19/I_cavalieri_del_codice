<!--CARD DI ALESSIO-->

<div  class="container"  >
    <div class="row">
        
        <div class="col-md-4 mb-3">
            <div class="card ml-2" style="background-color: #{{ dechex(mt_rand(0, 0xFFFFFF)) }};">
                <img src="{{ asset('storage/logo.jpg') }}" class="card-img-top" alt="non disponibile" style="max-height: 600px;">
                <div class="card-body" style="max-height: 300px; overflow-y: scroll;">
                    <h5 class="card-title">{{ $title }}</h5>
                    <p class="card-text">{{ $subtitle }}</p>
                    <p class="card-text" style="max-height: 300px; overflow-y: auto;">{{ $body }}</p>
                    <p class="card-text">Redatto il {{ $data }} da {{ $user }}</p>
                    <a href="{{ $urlCategory }}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
                    <a href="{{ $url }}" class="btn btn-info text-white">Leggi</a>
                    <div id="contenitore_bottone_like"></div>
                </div>
            </div>
        </div>
        
    </div>
</div>


<!--CARD DI WILLIAM-->


<!--<div class="class card">

    <img src="{{ asset('storage/logo.jpg') }}" alt="" class="card-img-top">
    <div>
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $subtitle }}</p>
        <a href="{{ $urlCategory}}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        Redatto il {{ $data }} da {{ $user }}
        <a href="{{ $url }}" class="btn btn-info text-white">Leggi</a>

    </div>
</div>-->
