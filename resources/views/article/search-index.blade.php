<x-layout>

    <x-navabar />

    

    <x-center>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Tutti gli articoli per :{{ $query }}
            </h1>
        </div>
    </div>

        
    <div class="container " >

        <div class="row card-deck" >

            

            @foreach ($articles as $article)

            
            <div class="col-6 .col-sm-6 .col-md-6 .col-lg-6" style="height: auto">
            <x-card


                title="{{ $article->title }}"
                subtitle="{{ $article->subtitle }}"
                image="{{ $article->image }}"
                body="{{ $article->body }}"
                category="{{ $article->name }}"
                data="{{ $article->created_at->format('d/m/Y') }}"
                user="{{ $article->user->name }}"
                :url="route('article.show', compact('article'))"
                :urlCategory="route('article.byCategory', ['category' => $article->category->id])"

           
            />

        </div>
            
            @endforeach
        

        </div>

    </div>


     </x-center>

    <x-footer />

    <x-footerlogin  />

</x-layout>

