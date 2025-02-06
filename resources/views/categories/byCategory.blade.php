<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2">
                    {{ __('ui.categories article') }}<span class="fst-italic fw-bold">{{ $category->name }}</span>
                </h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <x-card :$article />
            @empty
            <div class="col-12 text-center">
                <h3>
                    {{ __('ui.no articles') }}
                </h3>
                @auth
                <a class="btn btn-dark my-5" href="{{ route('articles.create') }}">{{ __('ui.createArticle') }}</a>
                @endauth
            </div>
            @endforelse
        </div>
    </div>
    
</x-layout>