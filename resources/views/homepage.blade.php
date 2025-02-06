<x-layout>

    <div class="container-fluid text-center py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-4 mt-5
                mb-2">Presto.it</h1>
                @auth
                <a class="btn btn-dark" href="{{ route('articles.create') }}">{{ __('ui.createArticle') }}</a>
                @endauth
            </div>
            @if (session('errorMessage'))
            <div class="alert alert-success text-center mt-3">
                {{ session('errorMessage') }}
            </div>
            @endif
            @if (session('message'))
            <div class="alert alert-success text-center mt-3">
                {{ session('message') }}
            </div>
            @endif
        </div>

        <x-category-card />
        <div class="row justify-content-center align-items-center ">
            <div class="col-12 mt-1">
                <h2 class="display-4 my-4">{{ __('ui.articlesPreview') }}</h2>
            </div>

        </div>

        <!-- Griglia delle card -->
        <div class="row centerCards justify-content-center">
            @forelse ($articles as $article)
            <x-card :$article />
            @empty
            <div class="col-12">
                <h3 class="text-center">{{ __('ui.noArticles') }}</h3>
            </div>
            @endforelse
        </div>
        <x-numbers />
    </div>
    <x-reviews-carousel />
</x-layout>