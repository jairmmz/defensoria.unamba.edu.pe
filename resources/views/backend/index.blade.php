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
                            <a href="{{ route('users') }}" class="text-white"><i class="icon-sm fa fa-user mr-2"></i> Usuarios</a>
                            <h2>54000</h2>
                            <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                        </div>
                        <div class="statistics-item">
                            <a href="{{ route('news') }}" class="text-white"><i class="icon-sm fa fa-user mr-2"></i> Noticias</a>
                            <h2>54000</h2>
                            <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                        </div>
                        <div class="statistics-item">
                            <a href="{{ route('regulations') }}" class="text-white"><i class="icon-sm fa fa-user mr-2"></i> Reglamentos</a>
                            <h2>54000</h2>
                            <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                        </div>
                        <div class="statistics-item">
                            <a href="{{ route('settings') }}" class="text-white"><i class="icon-sm fa fa-user mr-2"></i>Ajustes generales</a>
                            <h2>54000</h2>
                            <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                        </div>
                    </div>
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
