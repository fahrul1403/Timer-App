<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Timer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Live Time</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Alarm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Prayer Time</a>
          </li>
        </ul>
        @if (Route::has('login'))
                  <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                      @auth
                          <a href="{{ url('/dashboard') }}" class="btn btn-outline-success">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" class="btn btn-outline-success">Log in</a>
  
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 btn btn-outline-success">Register</a>
                          @endif
                      @endauth
                  </div>
              @endif
      </div>
    </div>
  </nav>
  