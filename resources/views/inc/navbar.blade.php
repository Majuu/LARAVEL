<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="">PROJEKT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Strona startowa <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">O stronie</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorie</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">


              <a class="dropdown-item" href="/koty">Koty</a>
                <a class="dropdown-item" href="/papugi">Papugi</a>
                <a class="dropdown-item" href="/sowy">Sowy</a>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/contact">Kontakt</a>
          </li>

          @if(Auth::check() && Auth::user()->name == "admin")
          <li class="nav-item">
            <a class="nav-link" href="/messages">Wiadomości</a>
          </li>
          @endif

        </ul>

        <ul class="navbar-nav ml-auto">
        <div class="container">

              <div class="col-md-15">
                 @if (Auth::check())
                   <div class="alert alert-info push-right">
                     <strong>INFO: </strong>Jesteś zalogowany!
                  </div>
                @endif
                @if (!Auth::check())
                  <div class="alert alert-warning push right">
                     <strong>INFO: </strong>Zaloguj się, aby uzyskać więcej opcji
                 </div>
               @endif
              </div>
          </div>
        </div>

</ul>

        <!-- Right Side Of Navbar NOWO DODANE-->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="btn btn-outline-success" href="{{ route('login') }}">{{ __('Logowanie') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Rejestracja') }}</a></li>
                        @else

                            <li class="nav-item dropdown" style="position:relative; padding-left:50px;">
                                <img src="/img/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px;left:10px; border-radius:50%;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">
                                        {{ __('Profil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </div>
    </nav>
