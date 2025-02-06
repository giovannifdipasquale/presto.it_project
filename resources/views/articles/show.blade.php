<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="display-4">{{ __('ui.detailArticles') }}
                    : {{ $article->title }}</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center py-5">
        <div class="col-12 col-md-6 mb-3">
            @if ($article->images->count() > 0)
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($article->images as $key => $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 img-show rounded shadow"
                                    alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                            </div>
                        @endforeach

                    </div>
                    @if ($article->images->count() > 1)
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif

                </div>
            @else
                <img src="https://picsum.photos/300" alt="nessuna foto inserita dell'utente">
            @endif

        </div>
    </div>
    <div class="row justify-content-center py-5">
        <div class="col-12 col-md-6 mb-3 justify-content-center text-center">
            <h2 class="display-5">
                <span class="fw-bold">{{ __('ui.title') }}
                    :</span>
                {{ $article->title }}
            </h2>
            <div class="d-flex flex-column justify-content-center h-75">
                <h4 class="fw-bold">{{ __('ui.price') }}: {{ $article->price }} €</h4>
                <h5>{{ __('ui.description') }}:</h5>
                <p>{{ $article->description }}</p>
            </div>
        </div>
    </div>
</x-layout>
