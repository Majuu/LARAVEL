    @foreach($kategorias as $kategoria)
  <a class="dropdown-item" href="/{{$kategoria->nazwa}}">{{$kategoria->nazwa}}</a>
  <p></p>
      @endforeach
