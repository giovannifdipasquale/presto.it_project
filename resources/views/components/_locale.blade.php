<form action="{{route('setLocale', $lang)}}" class="d-inline" method="POST">
  @csrf
  <button type="submit" class="btn"> <img width="32" height="32"
      src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" alt=""></button>
</form>