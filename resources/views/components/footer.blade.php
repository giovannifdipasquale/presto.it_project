<div class="container-fluid footer">
    <footer class="py-5">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5 class="colorAcc">{{ __('ui.footerUser') }}</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/" class="nav-link colorMain p-0 ">{{ __('ui.home') }}</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('register') }}" class="nav-link colorMain p-0 ">{{
                            __('ui.register') }}</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('login') }}" class="nav-link colorMain p-0 ">{{
                            __('ui.login') }}</a>
                    </li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="colorAcc">{{ __('ui.category') }}</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/" class="nav-link colorMain p-0 ">{{ __('ui.home') }}</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('articles.create') }}"
                            class="nav-link colorMain p-0 ">{{ __('ui.createArticle') }}</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('articles.index') }}" class="nav-link colorMain p-0 ">{{
                            __('ui.allArticles') }}</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="colorAcc">Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 colorMain">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 colorMain">Features</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 colorMain">Pricing</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 colorMain">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 colorMain">About</a></li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5 class="colorAcc">{{ __('ui.work') }}</h5>
                    <p>{{ __('ui.contact') }}</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        @auth
                        <a href="{{ route('mail.become-revisor') }}" class="btn bgColorAcc colorSec">{{ __('ui.request')
                            }}</a>
                        @endauth
                        @guest
                        <a href="{{ route('register') }}" class="btn bgColorAcc colorSec">{{ __('ui.request')
                            }}</a>
                        @endguest
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2025 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="bi bi-twitter-x colorAcc" href="#"></a></li>
                <li class="ms-3"><a class="bi bi-instagram colorAcc" href="#">
                    </a></li>
                <li class="ms-3"><a class="bi bi-whatsapp colorAcc" href="#"></a></li>
            </ul>
        </div>
    </footer>
</div>