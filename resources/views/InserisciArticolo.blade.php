<x-layout>

    <x-navbar />

    <div class="container ">

        <div class="row card-deck">

            @foreach ($articles as $article)

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
            
            @endforeach

        </div>

    </div>


    <x-footer />

    <x-footerlogin  />

    
</x-layout>