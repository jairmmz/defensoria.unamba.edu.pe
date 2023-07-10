@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Usuarios
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data table</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <h4 class="card-title">LISTA DE USUARIOS</h4>
                <div>
                  <a href="{{ route('users.add') }}" class="btn btn-primary btn-icon-text">
                    Añadir noticia
                    <i class="btn-icon-append fas fa-plus"></i>
                  </a>
                </div>
            </div>
              
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Orden #</th>
                                    <th>Usuario</th>
                                    <th>Email</th>
                                    <th>Imagen</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2012/08/03</td>
                                    <td>Edinburgh</td>
                                    <td>New York</td>
                                    <td>
                                        <label class="badge badge-info">On hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2015/04/01</td>
                                    <td>Doe</td>
                                    <td>Brazil</td>
                                    <td>
                                        <label class="badge badge-danger">Pending</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2010/11/21</td>
                                    <td>Sam</td>
                                    <td>Tokyo</td>
                                    <td>
                                        <label class="badge badge-success">Closed</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>2000/10/30</td>
                                    <td>Sam</td>
                                    <td>Tokyo</td>
                                    <td>
                                        <label class="badge badge-info">On-hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>2016/11/12</td>
                                    <td>John</td>
                                    <td>Tokyo</td>
                                    <td>
                                        <label class="badge badge-success">Closed</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>2003/12/26</td>
                                    <td>Tom</td>
                                    <td>Germany</td>
                                    <td>
                                        <label class="badge badge-danger">Pending</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
