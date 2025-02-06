<nav id="navbar" class="navCustom  navbar transition navbar-expand-md fixed-top mb-0" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Presto.<span class="colorAcc">it</span> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">{{ __('ui.home') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('articles.index') }}" class="nav-link" aria-current="page"> {{
                        __('ui.allArticles') }} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.create') }}">
                        {{ __('ui.createArticle') }}
                    </a>
                </li>

            </ul>


            <ul class="navbar-nav ms-6 mb-2 mb-lg-0">

                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item border-end ps-2">
                    <a class="notificationRevisor nav-link" href="{{ route('revisor.index') }}">
                        {{ __('ui.dashboard') }}
                        <span class="badge-custom translate-middle badge bg-danger rounded-pill ms-2">{{
                            \App\Models\Article::toBeRevisedCount() }}</span>
                    </a>
                </li>
                @endif
                @endauth
                <li class="nav-item dropdown border border-top-0 border-bottom-0 border-start-0 ps-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @if (session('locale', 'it') === 'it')
                        <img width="28" height="28" src="{{ asset('vendor/blade-flags/language-' . 'it' . '.svg') }}"
                            alt="">
                        @elseif (session('locale', 'it') === 'en')
                        <img width="28" height="28" src="{{ asset('vendor/blade-flags/language-' . 'en' . '.svg') }}"
                            alt="">
                        @elseif (session('locale', 'it') === 'fr')
                        <img width="28" height="28" src="{{ asset('vendor/blade-flags/language-' . 'fr' . '.svg') }}"
                            alt=""> @endif
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <x-_locale lang="it" /> IT
                        </li>
                        <li>
                            <x-_locale lang="en" /> EN
                        </li>
                        <li>
                            <x-_locale lang="fr" /> FR
                        </li>

                    </ul>
                </li>

                @auth
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <bi class="bi bi-person-circle"></bi> {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                                {{ __('ui.logout') }}
                            </a>
                        </li>
                    </ul>
                    <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">
                        @csrf
                    </form>
                </li>
                @else
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('ui.hello') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('ui.login') }}</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('ui.register') }}</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>