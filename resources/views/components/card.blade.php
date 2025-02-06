<div class="col-12 col-md-4 p-1 m-1 card scale-hover" style="width: 19rem;">
    <img class="card-img-top mb-3"
        src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}"
        alt="Immagine dell'articolo {{ $article->title }}">

    <div class="card-body cardHeight d-flex align-items-evenly justify-content-center flex-column">
        <!-- idea: COME SU SUBITO.IT rendere titolo cliccabile -> porta su show, si illumina solo all'hover -->
        <h5 class="card-title mt-1">
            <a class="text-decoration-none colorSec" href="{{ route('articles.show', $article) }}">
                {{ $article->title }}
            </a>
        </h5>
        <p class="card-text fw-bold my-2">
            {{ $article->price }} €
        </p>
        <div class="row py-3 justify-content-between align-items-center mt-1">
            <div class="col-3">
                <a href="{{ route('articles.show', $article) }}" class="btn-custom">
                    {{ __('ui.details') }}
                </a>
            </div>
            <div class="col-8">
                {{-- PRIMA VERSIONE: no traduzione --}}
                {{--
                $article->category->name }}
                --}}





                <a class="btn categoryButton ms-1"
                    href="{{ route('categories.byCategory', ['category' => $article->category]) }}">
                    {{-- PRIMA VERSIONE: no traduzione --}}
                    {{-- {{ $article->category->name }} --}}

                    {{-- VERSIONE NON FUNZIONANTE --}}
                    {{-- {{ __("ui.$article->category->name"}} --}}
                    {{-- PERCHé NON FUNZIONA? non funziona perché in $article->category->name l'accesso al nome della
                    categoria non è immediato: Laravel deve
                    interpretare prima la relazione "$article->category" e poi, nell'oggetto $category, andare a pescare
                    la proprietà
                    "name". Quindi richiede 2 LIVELLI DI ACCESSO, e questo impedisce che $article->category->name viene
                    interpretato
                    automaticamente dentro la stringa
                    NB. nel caso invece di "{{ __("ui.$category->name"}}" $category->name viene interpretato perché
                    richiede 1 LIVELLO DI
                    ACCESSO --}}

                    {{ __('ui.' . $article->category->name) }}
                    {{-- PERCHE' FUZIONA? questa versione funziona perché abbiamo concatenato manualmente la stringa
                    'ui.' alla variabile
                    $article->category->name, che essendo appunto una variabile viene interpretata come tale da Laravel
                    --}}
                </a>
            </div>
        </div>
    </div>
</div>
