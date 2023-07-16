@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Noticias
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
                <h4 class="card-title">LISTA DE NOTICIAS</h4>                
                  <a href="{{ route('news.add') }}" class="btn btn-primary btn-icon-text">
                    Añadir noticia
                    <i class="btn-icon-append fas fa-plus"></i>
                  </a>
            </div>
              
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Imagen</th>
                                    <th>Enlace</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $new)
                                    <tr>
                                        <td>{{ $new->id }}</td>
                                        <td>{{ $new->title }}</td>
                                        <td>{{ Str::limit($new->description, 50) }}</td>
                                        <td>
                                            @if (!$new->image)
                                                <img src="{{ asset('assets/images/logo-du-unamba-min.png') }}" alt="">
                                            @else
                                            <img src="{{ asset('assets/images/' . $new->image) }}" alt="">
                                            @endif
                                        </td>
                                        <td><a href="{{ $new->link_to_news }}" target="_blank">Ir a la noticia</a></td>
                                        <td>
                                            <label class="badge badge-{{ $new->is_active == 1 ? 'info' : 'danger'  }}">
                                                {{ $new->is_active == 1 ? 'Activo' : 'Inactivo' }}
                                            </label>
                                        </td>
                                        <td>
                                            <a href="{{ route('news.edit', ['new' => $new->id ]) }}" class="btn btn-outline-primary mb-2">Editar</a>
                                            <form method="POST" action="{{ route('news.destroy', ['new' => $new->id ]) }}" >
                                                @csrf
                                                {{ method_field("DELETE") }}
                                                <a href="{{ route('news.destroy', ['new' => $new->id ]) }}" class="btn btn-outline-danger" onclick="event.preventDefault(); this.closest('form').submit();">Eliminar</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
