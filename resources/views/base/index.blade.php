
<!DOCTYPE html>
<html lang="pt-br">
@include('base.header', ['title' => 'Kaya Cakes'])
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Sabores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="mx-auto" style="width: 40%;" id="btns">
        @yield('container')
    </div>

    @include('base.footer')

</body>
</html>
