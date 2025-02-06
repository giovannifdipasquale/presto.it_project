<x-layout>
    <div class="container-fluid">
        <div class="row shadow-lg bgColorMainO justify-content-center align-items-center pt-5 pb-2">
            <div class="col-12 mt-4">
                <h1 class="text-center pb-2 ">
                    {{ __('ui.dashboard') }}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center mt-3 py-2">
            @if ($article_to_check)
                @if ($article_to_check->images->count())

                    <div class="row col-12 col-md-8">
                        @foreach ($article_to_check->images as $key => $image)
                            <div class="col-6">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded-start"
                                                alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                        </div>
                                        <div class="card-body">
                                            <h5>Labels</h5>
                                            @if ($image->labels)
                                                @foreach ($image->labels as $label)
                                                    #{{ $label }}
                                                @endforeach
                                                @else
                                                <p class="fst-italic">No labels</p>
                                            @endif
                                        </div>
                                        <div class="col-md-8 ps-3">
                                            <div class="card-body">
                                                <h5 class="">Ratings</h5>
                                                <div class="row justify-content-center">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->adult }}"></div>
                                                    </div>
                                                    <div class="col-10">adult</div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->violence }}"></div>
                                                    </div>
                                                    <div class="col-10">violence</div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->spoof }}"></div>
                                                    </div>
                                                    <div class="col-10">spoof</div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->racy }}"></div>
                                                    </div>
                                                    <div class="col-10">racy</div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->medical }}"></div>
                                                    </div>
                                                    <div class="col-10">medical</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row col-12 col-md-8">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 mb-4 text-center">
                                <img src="https://picsum.photos/300" class="img-fluid rounded shadow">
                            </div>
                        @endfor
                    </div>
                @endif
                <div class="col-md-4 d-flex flex-column justify-content-start">
                    <div class="">
                        <h1>{{ $article_to_check->title }}</h1>
                        <h3>{{ __('ui.author') }}: {{ $article_to_check->user->name }}</h3>
                        <h4>{{ $article_to_check->price }}€</h4>
                        <h4 class="fst-italic text-muted">{{ $article_to_check->category->name }}</h4>
                        <p class="h6">{{ $article_to_check->description }}</p>
                    </div>
                    <hr>

                    <div class="d-flex  p-3  justify-content-around">
                        <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger py-2 fw-bold">
                                <bi class="bi bi-hand-thumbs-down-fill pe-3"></bi> {{ __('ui.refuse') }}
                            </button>
                        </form>
                        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success py-2 fw-bold d-flex">
                                <bi class="bi bi-hand-thumbs-up-fill pe-3"></bi>{{ __('ui.accept') }}
                            </button>
                        </form>

                    </div>

                    @if ($last_accepted === 0 || $last_accepted === 1)
                        <div class="d-flex justify-content-center p-2">
                            <form class="d-flex flex-column justify-content-center align-items-center"
                                action="{{ route('revert') }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <label class="form-label fw-bold" for="revert"> - {{ __('ui.cancel') }}
                                    - </label>
                                <button type="submit" id="revert"
                                    class="btn btn-outline-secondary py-2 my-3 fw-bold">
                                    <i class="bi bi-arrow-counterclockwise pe-3"></i>
                                    {{ __('ui.cancel button') }} </button>
                            </form>
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
        </div>


    </div>


    </div>
@else
    <div class="row justify-content-center align-items-center text-center height-custom">
        <div class="col-12">
            <h2 class="fst-italic display-4">
                {{ __('ui.noArticles') }}
            </h2>
            <form class="d-flex flex-column justify-content-center align-items-center" action="{{ route('revert') }}"
                method="POST">
                @csrf
                @method('PATCH')

                <label class="form-label fw-bold" for="revert"> - {{ __('ui.cancel') }}
                    - </label>
                <button type="submit" id="revert" class="btn btn-outline-secondary py-2 my-3 fw-bold"> <i
                        class="bi bi-arrow-counterclockwise pe-3"></i>
                    {{ __('ui.cancel button') }} </button>
            </form>
            <a href="{{ route('homepage') }}" class="mt-5 btn btn-success">{{ __('ui.return') }}</a>
        </div>
    </div>

    @endif


</x-layout>
