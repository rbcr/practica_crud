@include('layout.header')
<body>
@include('layout.topbar')
<main role="main" class="container">
    <div class="starter-template">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Agregar producto</h4>
                    </div>
                    <div class="card-body">
                        <form id="form-producto">
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Nombre</label>
                                <input type="text" name="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Costo</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="costo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Precio</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="precio">
                                </div>
                            </div>
                            <a href="javascript:void(0)" id="btn-agregar-producto" class="btn btn-success btn-block">
                                AGREGAR PRODUCTO
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
