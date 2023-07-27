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
                            <a href="{{ route('settings') }}" class="text-white"><i
                                    class="icon-sm fa fa-cog mr-2"></i>Ajustes generales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-table"></i>
                        Sales Data
                    </h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Item code</th>
                                    <th>Orders</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">
                                        Clifford Wilson
                                    </td>
                                    <td class="text-muted">
                                        PT613
                                    </td>
                                    <td>
                                        350
                                    </td>
                                    <td>
                                        <label class="badge badge-success badge-pill">Dispatched</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">
                                        Mary Payne
                                    </td>
                                    <td class="text-muted">
                                        ST456
                                    </td>
                                    <td>
                                        520
                                    </td>
                                    <td>
                                        <label class="badge badge-warning badge-pill">Processing</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">
                                        Adelaide Blake
                                    </td>
                                    <td class="text-muted">
                                        CS789
                                    </td>
                                    <td>
                                        830
                                    </td>
                                    <td>
                                        <label class="badge badge-danger badge-pill">Failed</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">
                                        Adeline King
                                    </td>
                                    <td class="text-muted">
                                        LP908
                                    </td>
                                    <td>
                                        579
                                    </td>
                                    <td>
                                        <label class="badge badge-primary badge-pill">Delivered</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">
                                        Bertie Robbins
                                    </td>
                                    <td class="text-muted">
                                        HF675
                                    </td>
                                    <td>
                                        790
                                    </td>
                                    <td>
                                        <label class="badge badge-info badge-pill">On Hold</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-calendar-alt"></i>
                        Calendar
                    </h4>
                    <div id="inline-datepicker-example" class="datepicker"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <button class="btn btn-social-icon btn-facebook btn-rounded">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <div class="ml-4">
                                <h5 class="mb-0">Facebook</h5>
                                <p class="mb-0">813 friends</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <button class="btn btn-social-icon btn-twitter btn-rounded">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <div class="ml-4">
                                <h5 class="mb-0">Twitter</h5>
                                <p class="mb-0">9000 followers</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <button class="btn btn-social-icon btn-google btn-rounded">
                                <i class="fab fa-google-plus-g"></i>
                            </button>
                            <div class="ml-4">
                                <h5 class="mb-0">Google plus</h5>
                                <p class="mb-0">780 friends</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-social-icon btn-linkedin btn-rounded">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                            <div class="ml-4">
                                <h5 class="mb-0">Linkedin</h5>
                                <p class="mb-0">1090 connections</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
