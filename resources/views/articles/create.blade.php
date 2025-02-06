<x-layout>
    <div class="container-fluid">
        <div class="row shadow-lg bgColorMainO justify-content-center align-items-center pt-5 pb-2">
            <div class="col-12 mt-4">
                <h1 class="text-center pb-2 ">
                    {{ __('ui.createArticle') }}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12 col-md-6">
                <livewire:create-article-form>
            </div>
        </div>
    </div>
</x-layout>