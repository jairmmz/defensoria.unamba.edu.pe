@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Popups
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dialogs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Popups</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A basic message</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('basic')">Click here!</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A title with a text under</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('title-and-text')">Click
                                    here!</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A success message!</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('success-message')">Click
                                    here!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A success message!</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('custom-html')">Click
                                    here!</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A success message!</p>
                                <button class="btn btn-outline-primary"
                                    onclick="showSwal('warning-message-and-cancel')">Click here!</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A message with auto close timer</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('auto-close')">Click
                                    here!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="card-title">Avgrund Popup</h4>
                            <p class="card-description">Avgrund simple popup</p>
                            <a href="#" id="show" class="btn btn-outline-primary">Click here!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
