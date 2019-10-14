@include('layout.header')
<body>
@include('layout.topbar')
<main role="main" class="container">
    <div class="starter-template">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Editar producto</h4>
                    </div>
                    <div class="card-body">
                        <form id="form-producto">
                            <input type="hidden" name="id" value="{{ $producto->id }}">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Nombre</label>
                                <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Costo</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="costo" value="{{ $producto->costo }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Precio</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="precio" value="{{ $producto->precio }}">
                                </div>
                            </div>
                            <a href="javascript:void(0)" id="btn-actualizar-producto" class="btn btn-warning btn-block">
                                ACTUALIZAR PRODUCTO
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('layout.assets')
</body>
</html>
