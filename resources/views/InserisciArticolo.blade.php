<x-layout>

    <x-navbar />

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            
            <x-card
            title="{{ $article->title }}"
            subtitle="{{ $artcile->subtitle }}"
            image="{{ $article->image }}"
            category="{{ $article->name }}"
            data="{{ $article->created_at->format(d/m/Y) }}"
            user="{{ $article->user->name }}"
            url="{{ route('article.show' , compact(article)) }}"
            urlCategory='{{ route('article.byCategory' , ['category' => $article->category->id])}}'
             />
                
            @endforeach

        </div>

    </div>

    <x-footer />

    <x-footerlogin  />

    
</x-layout>