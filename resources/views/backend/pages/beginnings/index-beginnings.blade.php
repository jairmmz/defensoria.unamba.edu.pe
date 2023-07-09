@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Principios
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('beginnings') }}">Principios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data table</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <h4 class="card-title">LISTA DE PRINCIPIOS</h4>
                <div>
                  <a href="{{ route('beginnings.add') }}" class="btn btn-primary btn-icon-text">
                    Añadir principio
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
                                    <th>Título</th>
                                    <th>Icono</th>
                                    <th>Descripción</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>New York</td>
                                    <td>$3200</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, esse?</td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Brazil</td>
                                    <td>$7500</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, esse?</td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tokyo</td>
                                    <td>$6300</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, esse?</td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Tokyo</td>
                                    <td>$2100</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, esse?</td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Tokyo</td>
                                    <td>$6300</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, esse?</td>
                                    <td>
                                        <button class="btn btn-outline-primary">Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Germany</td>
                                    <td>$2300</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, esse?</td>
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
