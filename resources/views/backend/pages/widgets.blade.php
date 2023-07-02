@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Statistics</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">$10,200</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Updated: 9:10am</small>
                                </div>
                            </div>
                            <small class="text-gray">Raised from 89 orders.</small>
                        </div>
                        <div class="d-inline-block">
                            <i class="fas fa-chart-pie text-info icon-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Daily Order</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h2 class="mb-0">$2256</h2>
                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                    <i class="far fa-clock text-muted"></i>
                                    <small class="ml-1 mb-0">Updated: 05:42pm</small>
                                </div>
                            </div>
                            <small class="text-gray">hey, let’s have lunch together</small>
                        </div>
                        <div class="d-inline-block">
                            <i class="fas fa-shopping-cart text-danger icon-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <img src="../images/faces/face11.html" class="img-lg rounded" alt="profile image" />
                        <div class="ml-3">
                            <h6>Maria</h6>
                            <p class="text-muted">maria@gmail.com</p>
                            <p class="mt-2 text-primary font-weight-bold">Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <img src="../images/faces/face9.jpg" class="img-lg rounded" alt="profile image" />
                        <div class="ml-3">
                            <h6>Thomas Edison</h6>
                            <p class="text-muted">thomas@gmail.com</p>
                            <p class="mt-2 text-primary font-weight-bold">Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <img src="../images/faces/face12.jpg" class="img-lg rounded" alt="profile image" />
                        <div class="ml-3">
                            <h6>Edward</h6>
                            <p class="text-muted">edward@gmail.com</p>
                            <p class="mt-2 text-primary font-weight-bold">Tester</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Todo</h4>
                    <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input"
                            placeholder="What do you need to do today?">
                        <button class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button>
                    </div>
                    <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                            <li>
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Meeting with Alisa
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Call John
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                            <li>
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Create invoice
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                            <li>
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Print Statements
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                            <li>
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Pick up kids from school
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card text-center">
                <div class="card-body">
                    <img src="../images/faces/face5.jpg" class="img-lg rounded-circle mb-2" alt="profile image" />
                    <h4>Maria Johnson</h4>
                    <p class="text-muted">Developer</p>
                    <p class="mt-4 card-text">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Lorem
                    </p>
                    <button class="btn btn-info btn-sm mt-3 mb-4">Follow</button>
                    <div class="border-top pt-3">
                        <div class="row">
                            <div class="col-4">
                                <h6>5896</h6>
                                <p>Post</p>
                            </div>
                            <div class="col-4">
                                <h6>1596</h6>
                                <p>Followers</p>
                            </div>
                            <div class="col-4">
                                <h6>7896</h6>
                                <p>Likes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Updates</h4>
                    <ul class="solid-bullet-list">
                        <li>
                            <h6>User confirmation</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing </p>
                            <p class="text-muted">
                                <i class="far fa-clock"></i>
                                7 months ago.
                            </p>
                        </li>
                        <li>
                            <h6>Continuous evaluation</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing </p>
                            <p class="text-muted">
                                <i class="far fa-clock"></i>
                                7 months ago.
                            </p>
                        </li>
                        <li>
                            <h6>Promotion</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing </p>
                            <p class="text-muted">
                                <i class="far fa-clock"></i>
                                7 months ago.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
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
    <div class="row">
        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Activity</h4>
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <p class="card-description">What's people doing right now</p>
                    <div class="list d-flex align-items-center border-bottom py-3">
                        <img class="img-sm rounded-circle" src="../images/faces/face4.jpg" alt="">
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0"><b>Dobrick </b>posted in Material</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="far fa-clock text-muted mr-1"></i>
                                    <p class="mb-0">That's awesome!</p>
                                </div>
                                <small class="text-muted ml-auto">2 hours ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom py-3">
                        <img class="img-sm rounded-circle" src="../images/faces/face5.jpg" alt="">
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0"><b>Stella </b>posted in Material</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="far fa-clock text-muted mr-1"></i>
                                    <p class="mb-0">That's awesome!</p>
                                </div>
                                <small class="text-muted ml-auto">3 hours ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom py-3">
                        <img class="img-sm rounded-circle" src="../images/faces/face7.jpg" alt="">
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0"><b>Peter </b>posted in Material</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="far fa-clock text-muted mr-1"></i>
                                    <p class="mb-0">That's Great!</p>
                                </div>
                                <small class="text-muted ml-auto">1 hours ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center pt-3">
                        <img class="img-sm rounded-circle" src="../images/faces/face6.jpg" alt="">
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0"><b>Nateila </b>posted in Material</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="far fa-clock text-muted mr-1"></i>
                                    <p class="mb-0">That's awesome!</p>
                                </div>
                                <small class="text-muted ml-auto">1 hours ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recomended</h4>
                    <div class="wrapper d-flex align-items-center py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="../images/faces/face5.jpg" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="mb-1">Stella Davidson</h6>
                            <small class="text-muted mb-0"><i class="fas fa-map-marker-alt mr-1"></i>New York City,
                                USA</small>
                        </div>
                        <div class="badge badge-pill badge-info ml-auto px-1 py-1"><i
                                class="fas fa-check font-weight-bold"></i></div>
                    </div>
                    <div class="wrapper d-flex align-items-center py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="../images/faces/face6.jpg" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="mb-1">Daniel Russel</h6>
                            <small class="text-muted mb-0"><i class="fas fa-map-marker-alt mr-1"></i>Florida, USA</small>
                        </div>
                        <div class="badge badge-pill badge-success ml-auto px-1 py-1"><i
                                class="fas fa-plus font-weight-bold"></i></div>
                    </div>
                    <div class="wrapper d-flex align-items-center py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="../images/faces/face7.jpg" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="mb-1">Bruno King</h6>
                            <small class="text-muted mb-0"><i class="fas fa-map-marker-alt mr-1"></i>Arkansas, USA</small>
                        </div>
                        <div class="badge badge-pill badge-info ml-auto px-1 py-1"><i
                                class="fas fa-check font-weight-bold"></i></div>
                    </div>
                    <div class="wrapper d-flex align-items-center py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="../images/faces/face8.jpg" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="mb-1">David Moore</h6>
                            <small class="text-muted mb-0"><i class="fas fa-map-marker-alt mr-1"></i>Arizon, USA</small>
                        </div>
                        <div class="badge badge-pill badge-success ml-auto px-1 py-1"><i
                                class="fas fa-plus font-weight-bold"></i></div>
                    </div>
                    <div class="wrapper d-flex align-items-center py-2 mb-4">
                        <img class="img-sm rounded-circle" src="../images/faces/face9.jpg" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="mb-1">Rafell John</h6>
                            <small class="text-muted mb-0"><i class="fas fa-map-marker-alt mr-1"></i>Alaska, USA</small>
                        </div>
                        <div class="badge badge-pill badge-success ml-auto px-1 py-1"><i
                                class="fas fa-plus font-weight-bold"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Messages</h4>
                    <div class="preview-list">
                        <div class="preview-item border-bottom px-0">
                            <div class="preview-thumbnail">
                                <img src="../images/faces/face6.jpg" alt="image" class="rounded-circle" />
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Richard Joy
                                        <span class="float-right small">
                                            <span class="text-muted pr-3">13.06.2017</span>
                                        </span>
                                    </h6>
                                    <p>Thanks for the support!</p>
                                </div>
                            </div>
                        </div>
                        <div class="preview-item border-bottom px-0">
                            <div class="preview-thumbnail">
                                <img src="../images/faces/face8.jpg" alt="image" class="rounded-circle" />
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">William Alex
                                        <span class="float-right small">
                                            <span class="text-muted pr-3">08.07.2017</span>
                                        </span>
                                    </h6>
                                    <p>Meeting is postponed</p>
                                </div>
                            </div>
                        </div>
                        <div class="preview-item border-bottom px-0">
                            <div class="preview-thumbnail">
                                <img src="../images/faces/face9.jpg" alt="image" class="rounded-circle" />
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">David Grey
                                        <span class="float-right small">
                                            <span class="text-muted pr-3">15.07.2017</span>
                                        </span>
                                    </h6>
                                    <p>Please approve the request</p>
                                </div>
                            </div>
                        </div>
                        <div class="preview-item border-bottom px-0">
                            <div class="preview-thumbnail">
                                <img src="../images/faces/face11.html" alt="image" class="rounded-circle" />
                            </div>
                            <div class="preview-item-content d-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">Aleena Abraham
                                        <span class="float-right small">
                                            <span class="text-muted pr-3">12.06.2017</span>
                                        </span>
                                    </h6>
                                    <p>Hope to see you tomorrow</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
