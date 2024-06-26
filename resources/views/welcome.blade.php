<x-layout>

    <x-navabar />



    

    <x-center>

        @if (session('message'))
    <div class="alert alert-succes text-center">
        {{session('message') }}
    </div>
    @endif



        
    <div class="container" >

        <div class="row card-deck" >

            

            @foreach ($articles as $article)
            

            
            <div class="col-6 .col-sm-6 .col-md-6 .col-lg-6" style="height: auto">
            <x-card

                :tags="$article->tags"
                :title="$article->title"
                :subtitle="$article->subtitle"
                :image="$article->image" 
                :body="$article->body"
                :category="$article->category->name"
                :data="$article->created_at->format('d/m/Y')"
                :user="$article->user->name "
                :url="route('article.show', compact('article'))"
                :urlCategory="route('article.byCategory', ['category' => $article->category->id])"

                :tempo="$article->readDuration()"

           
            />

        </div>
            
            @endforeach
        

        </div>

    </div>


     </x-center>

    <x-footer />

    <x-footerlogin  />

    
    

</x-layout>

