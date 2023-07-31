@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Dashboard - Defensoría Universitaria
        </h3>
    </div>
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <div class="statistics-item">
                            <a href="{{ route('users') }}" class="text-white"><i class="icon-sm fa fa-user mr-2"></i>
                                Usuarios</a>
                            <h2>{{ $users }}</h2>
                        </div>
                        <div class="statistics-item">
                            <a href="{{ route('news') }}" class="text-white"><i
                                    class="icon-sm fa fa-clipboard-list mr-2"></i> Noticias</a>
                            <h2>{{ $news }}</h2>
                        </div>
                        <div class="statistics-item">
                            <a href="{{ route('regulations') }}" class="text-white"><i
                                    class="icon-sm fa fa-file-pdf mr-2"></i> Reglamentos</a>
                            <h2>{{ $regulations }}</h2>
                        </div>
                        <div class="statistics-item">
                            <a href="{{ route('attention-form-index') }}" class="text-white"><i
                                    class="icon-sm fa fa-gavel mr-2"></i> Atención de casos</a>
                            <h2>{{ $attention }}</h2>
                        </div>
                        <div class="statistics-item">
                            <a href="{{ route('settings') }}" class="text-white"><i
                                    class="icon-sm fa fa-cog mr-2"></i>Ajustes generales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-calendar-alt"></i>
                        Calendario
                    </h4>
                    <div id="inline-datepicker-example" class="datepicker"></div>
                </div>
            </div>
        </div>
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

@endsection
