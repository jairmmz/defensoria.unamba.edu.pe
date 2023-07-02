@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Progress
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Progress</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Colored Progressbar</h4>
                    <p class="page-description">Add class <code>.bg-{color}</code> with <code>.progress-bar</code></p>
                    <div class="template-demo">
                        <div class="progress progress-md">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="5" style="width: 5%"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Progressbar Striped</h4>
                    <p class="page-description">Add class <code>.progress-bar-striped</code> with <code>.progress-bar</code>
                    </p>
                    <div class="template-demo">
                        <div class="progress progress-md">
                            <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 45%"
                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 60%"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Striped Animated</h4>
                    <p class="page-description">Add class <code>.progress-bar-animated</code> with
                        <code>.progress-bar</code></p>
                    <div class="template-demo">
                        <div class="progress progress-md">
                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">With Label</h4>
                    <p class="page-description">Progress bar with labels</p>
                    <div class="template-demo">
                        <div class="d-flex justify-content-between">
                            <small>Filled percentage</small>
                            <small>60%</small>
                        </div>
                        <div class="progress progress-lg mt-2">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <small>Photoshop</small>
                        </div>
                        <div class="progress progress-lg mt-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60% completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Progressbar Sizes</h4>
                    <p class="page-description">Add class <code>.progress-{size}</code> with <code>.progress</code></p>
                    <div class="template-demo">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-xl">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Circle progress bar</h4>
                    <p class="card-desccription">Circle progress using progressbar.js plugin</p>
                    <div class="row px-2 template-demo">
                        <div class="col-sm-3 col-md-4 col-6 circle-progress-block">
                            <div id="circleProgress1" class="progressbar-js-circle border rounded p-3"></div>
                        </div>
                        <div class="col-sm-3 col-md-4 col-6 circle-progress-block">
                            <div id="circleProgress2" class="progressbar-js-circle border rounded p-3"></div>
                        </div>
                        <div class="col-sm-3 col-md-4 col-6 circle-progress-block">
                            <div id="circleProgress3" class="progressbar-js-circle border rounded p-3"></div>
                        </div>
                        <div class="col-sm-3 col-md-4 col-6 circle-progress-block">
                            <div id="circleProgress4" class="progressbar-js-circle border rounded p-3"></div>
                        </div>
                        <div class="col-sm-3 col-md-4 col-6 circle-progress-block">
                            <div id="circleProgress5" class="progressbar-js-circle border rounded p-3"></div>
                        </div>
                        <div class="col-sm-3 col-md-4 col-6 circle-progress-block">
                            <div id="circleProgress6" class="progressbar-js-circle border rounded p-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
