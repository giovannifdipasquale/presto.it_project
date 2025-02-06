<x-layout>
    <div class="container-fluid">
        <div class="row shadow-lg bgColorMainO justify-content-center align-items-center pt-5 pb-2">
            <div class="col-12 mt-4">
                <h1 class="text-center pb-2 ">
                    {{ __('ui.login') }}

                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="bg-secondary-subtle shadow rounded p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">{{ __('ui.email') }}
                        </label>
                        <input type="email" class="form-control" id="loginEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark">{{ __('ui.login') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>