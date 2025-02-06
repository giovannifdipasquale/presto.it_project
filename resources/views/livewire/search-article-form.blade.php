<div class="container-fluid search-custom mt-5">
    <div class="row justify-content-center py-4 search-custom">
        <div class="div-col col-8 d-flex justify-content-center align-items-center search-custom">
            <div class="div-flex d-flex h-100">
                <button class="dropdownButton p-2 d-flex rounded-start-2  align-items-center rounded-end-0" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <div class="grid-icon">
                    <i class="bi bi-grid"></i>
                </div>
                <span class="w-100">
                    {{__('ui.category')}}
                </span>
            </button>
            <ul class="dropdown-menu dropdownItems">
                @foreach ($categories as $category)
                <li>
                    <a class="d-flex dropdown-item justify-content-between"
                    href="{{ route('categories.byCategory', $category) }}">
                    <div class="grid-icon">
                        <i class="bi {{ $category->icon }}"></i>
                    </div>
                    <span class="w-100 text-center">
                        {{__("ui.$category->name")}}
                    </span>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="d-flex mx-0">
            <input wire:model="query" class="search-bar rounded-0 px-3" type="text" placeholder="Search"
            aria-label="Search">
            <button class="btn-search rounded-start-0" wire:click="searchArticles">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>
</div>
</div>
<div class="row justify-content-center align-items-center py-5">
    @forelse ($articles as $article)
    <x-card :$article />
    @empty
    <div class="col-12">
        <h3 class="text-center"> {{__('ui.noArticles')}} </h3>
    </div>
    @endforelse
</div> 
{{ $articles->links()}}
</div>



