@include('layout.header')
<body>
    @include('layout.topbar')
    <main role="main" class="container">
        <div class="starter-template">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <a href="{{ url("productos/agregar") }}" class="btn btn-success">AGREGAR PRODUCTO</a>
                        <hr>
                        <table id="tabla-productos" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Costo</th>
                                <th>Precio</th>
                                <th>Última actualización</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($productos as $producto)
                                <tr>
                                    <td>{{ $producto->id }}</td>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>$ {{ number_format($producto->costo, 2, '.', ',') }}</td>
                                    <td>$ {{ number_format($producto->precio, 2, '.', ',') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($producto->updated_at)->format('h:iA d/m/Y') }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="btn btn-secondary dropdown-toggle btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                ACCIONES
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ url("productos/editar/$producto->id") }}">EDITAR</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item btn-drop-producto" href="#" data-id="{{ $producto->id }}"><span class="text-danger">ELIMINAR</span></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layout.assets')
</body>
</html>
