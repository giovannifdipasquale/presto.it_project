<div class="container-fluid my-5">
    <div class="row category-container">
        <!-- Card Tecnologia -->
        @foreach ($categories as $category)
            <div class="card col-5 col-md-2 m-1 category-card colorIcon">
                <a href="{{ route('categories.byCategory', $category) }}" class="card-body text-decoration-none">
                    <div class="category-icon">
                        <i class="bi {{ $category->icon }}"></i>
                    </div>
                    <p class="card-text"> {{ __("ui.$category->name") }}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>
