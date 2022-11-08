<section class="">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">Store Konecta</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{url('producto/create')}}">Crear</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('producto')}}">Listar Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('producto.mayor')}}">Producto mas Vendido</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('producto.stock')}}">Producto con Mayor Stock</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
</section >
