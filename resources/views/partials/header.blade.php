<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
      <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item">
            <a @class(['nav-link', 'active'=> Route::currentRouteName() == 'home']) aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li><a @class(['nav-link', 'active'=> Route::currentRouteName() == 'home']) aria-current="page" href="{{ route('comics.index') }}">Comics index</a></li>
          <li><a @class(['nav-link', 'active'=> Route::currentRouteName() == 'home']) aria-current="page" href="{{ route('comics.create') }}">Create Comic</a></li>

        </ul>
      </div>
    </div>
  </nav>
</header>