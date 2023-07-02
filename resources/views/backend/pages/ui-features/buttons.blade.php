@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Buttons
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Buttons</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Single color buttons</h4>
                    <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>
                    <div class="template-demo">
                        <button type="button" class="btn btn-primary btn-fw">Primary</button>
                        <button type="button" class="btn btn-secondary btn-fw">Secondary</button>
                        <button type="button" class="btn btn-success btn-fw">Success</button>
                        <button type="button" class="btn btn-danger btn-fw">Danger</button>
                        <button type="button" class="btn btn-warning btn-fw">Warning</button>
                        <button type="button" class="btn btn-info btn-fw">Info</button>
                        <button type="button" class="btn btn-light btn-fw">Light</button>
                        <button type="button" class="btn btn-dark btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Rounded buttons</h4>
                    <p class="card-description">Add class <code>.btn-rounded</code></p>
                    <div class="template-demo">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
                        <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
                        <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
                        <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
                        <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
                        <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
                        <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
                        <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Outlined buttons</h4>
                    <p class="card-description">Add class <code>.btn-outline-{color}</code> for outline buttons</p>
                    <div class="template-demo">
                        <button type="button" class="btn btn-outline-primary btn-fw">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-fw">Secondary</button>
                        <button type="button" class="btn btn-outline-success btn-fw">Success</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                        <button type="button" class="btn btn-outline-warning btn-fw">Warning</button>
                        <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                        <button type="button" class="btn btn-outline-light btn-fw">Light</button>
                        <button type="button" class="btn btn-outline-dark btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Inverse buttons</h4>
                    <p class="card-description">Add class <code>.btn-inverse-{color} for inverse buttons</code></p>
                    <div class="template-demo">
                        <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                        <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                        <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                        <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                        <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                        <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                        <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                        <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Normal buttons</h4>
                    <p class="card-description">Use any of the available button classes to quickly create a styled button.
                    </p>
                    <div class="template-demo">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                        <button type="button" class="btn btn-link">Link</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h4 class="card-title">Icon Buttons</h4>
                            <p class="card-description">Add class <code>.btn-icon</code> for buttons with only icons</p>
                            <div class="template-demo d-flex justify-content-between flex-nowrap">
                                <button type="button" class="btn btn-primary btn-rounded btn-icon">
                                    <i class="fa fa-home"></i>
                                </button>
                                <button type="button" class="btn btn-dark btn-rounded btn-icon">
                                    <i class="fas fa-redo"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon">
                                    <i class="far fa-envelope-open"></i>
                                </button>
                                <button type="button" class="btn btn-info btn-rounded btn-icon">
                                    <i class="fa fa-star"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-rounded btn-icon">
                                    <i class="fa fa-map-marker"></i>
                                </button>
                            </div>
                            <div class="template-demo d-flex justify-content-between flex-nowrap">
                                <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                                    <i class="fa fa-home"></i>
                                </button>
                                <button type="button" class="btn btn-inverse-dark btn-icon">
                                    <i class="fas fa-redo"></i>
                                </button>
                                <button type="button" class="btn btn-inverse-danger btn-icon">
                                    <i class="far fa-envelope-open"></i>
                                </button>
                                <button type="button" class="btn btn-inverse-info btn-icon">
                                    <i class="fa fa-star"></i>
                                </button>
                                <button type="button" class="btn btn-inverse-success btn-icon">
                                    <i class="fa fa-map-marker"></i>
                                </button>
                            </div>
                            <div class="template-demo d-flex justify-content-between flex-nowrap mt-4">
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="far fa-heart text-danger"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="fa fa-music text-dark"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="fa fa-star text-primary"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="fa fa-signal text-info"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="fas fa-trash text-success"></i>
                                </button>
                            </div>
                            <div class="template-demo d-flex justify-content-between flex-nowrap">
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="fa fa-music"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="fa fa-star"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="fa fa-signal"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h4 class="card-title">Button Size</h4>
                            <p class="card-description">Use class <code>.btn-{size}</code></p>
                            <div class="template-demo">
                                <button type="button" class="btn btn-outline-secondary btn-lg">btn-lg</button>
                                <button type="button" class="btn btn-outline-secondary btn-md">btn-md</button>
                                <button type="button" class="btn btn-outline-secondary btn-sm">btn-sm</button>
                            </div>
                            <div class="template-demo mt-4">
                                <button type="button" class="btn btn-danger btn-lg">btn-lg</button>
                                <button type="button" class="btn btn-success btn-md">btn-md</button>
                                <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Block buttons</h4>
                    <p class="card-description">Add class <code>.btn-block</code></p>
                    <div class="template-demo">
                        <button type="button" class="btn btn-info btn-lg btn-block">Block buttons
                            <i class="fa fa-bars float-right"></i>
                        </button>
                        <button type="button" class="btn btn-dark btn-lg btn-block">Block buttons</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                            <i class="fa fa-user"></i>
                            Block buttons
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block buttons</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Button groups</h4>
                            <p class="card-description">Wrap a series of buttons with <code>.btn</code>
                                in <code>.btn-group</code></p>
                            <div class="template-demo">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-secondary">1</button>
                                    <button type="button" class="btn btn-outline-secondary">2</button>
                                    <button type="button" class="btn btn-outline-secondary">3</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="far fa-calendar"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="far fa-clock"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="template-demo">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary">1</button>
                                    <button type="button" class="btn btn-primary">2</button>
                                    <button type="button" class="btn btn-primary">3</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="far fa-calendar"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="far fa-clock"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="template-demo mt-4">
                                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-secondary">Default</button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                                            data-toggle="dropdown">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item">Go back</a>
                                            <a class="dropdown-item">Delete</a>
                                            <a class="dropdown-item">Swap</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-secondary">Default</button>
                                </div>
                                <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-secondary">Top</button>
                                    <button type="button" class="btn btn-outline-secondary">Middle</button>
                                    <button type="button" class="btn btn-outline-secondary">Bottom</button>
                                </div>
                            </div>
                            <div class="template-demo mt-4">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="fa fa-star d-block mb-1"></i>
                                        Favourites
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="fas fa-redo d-block mb-1"></i>
                                        Reload
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="fa fa-user d-block mb-1"></i>
                                        Users
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="card-title">Button with text and icon</h4>
                            <p class="card-description">Wrap icon and text inside <code>.btn-icon-text</code> and use
                                <code>.btn-icon-prepend</code>
                                or <code>.btn-icon-append</code> for icon tags
                            </p>
                            <div class="template-demo">
                                <button type="button" class="btn btn-primary btn-icon-text">
                                    <i class="far fa-check-square btn-icon-prepend"></i>
                                    Submit
                                </button>
                                <button type="button" class="btn btn-dark btn-icon-text">
                                    Edit
                                    <i class="fas fa-pencil-alt btn-icon-append"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-icon-text">
                                    <i class="fa fa-exclamation-triangle btn-icon-prepend"></i>
                                    Warning
                                </button>
                            </div>
                            <div class="template-demo">
                                <button type="button" class="btn btn-danger btn-icon-text">
                                    <i class="fa fa-upload btn-icon-prepend"></i>
                                    Upload
                                </button>
                                <button type="button" class="btn btn-info btn-icon-text">
                                    Print
                                    <i class="fa fa-print btn-icon-append"></i>
                                </button>
                                <button type="button" class="btn btn-warning btn-icon-text">
                                    <i class="fas fa-redo btn-icon-prepend"></i>
                                    Reset
                                </button>
                            </div>
                            <div class="template-demo mt-2">
                                <button type="button" class="btn btn-outline-primary btn-icon-text">
                                    <i class="far fa-check-square btn-icon-prepend"></i>
                                    Submit
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-icon-text">
                                    Edit
                                    <i class="fas fa-pencil-alt btn-icon-append"></i>
                                </button>
                                <button type="button" class="btn btn-outline-success btn-icon-text">
                                    <i class="fa fa-exclamation-triangle btn-icon-prepend"></i>
                                    Warning
                                </button>
                            </div>
                            <div class="template-demo">
                                <button type="button" class="btn btn-outline-danger btn-icon-text">
                                    <i class="fa fa-upload btn-icon-prepend"></i>
                                    Upload
                                </button>
                                <button type="button" class="btn btn-outline-info btn-icon-text">
                                    Print
                                    <i class="fa fa-print btn-icon-append"></i>
                                </button>
                                <button type="button" class="btn btn-outline-warning btn-icon-text">
                                    <i class="fas fa-redo btn-icon-prepend"></i>
                                    Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Social Icon Buttons</h4>
                    <p class="card-description">Add class <code>.btn-social-icon</code></p>
                    <div class="template-demo">
                        <button type="button" class="btn btn-social-icon btn-outline-facebook"><i
                                class="fab fa-facebook-f"></i></button>
                        <button type="button" class="btn btn-social-icon btn-outline-youtube"><i
                                class="fab fa-youtube"></i></button>
                        <button type="button" class="btn btn-social-icon btn-outline-twitter"><i
                                class="fab fa-twitter"></i></button>
                        <button type="button" class="btn btn-social-icon btn-outline-dribbble"><i
                                class="fab fa-dribbble"></i></button>
                        <button type="button" class="btn btn-social-icon btn-outline-linkedin"><i
                                class="fab fa-linkedin-in"></i></button>
                        <button type="button" class="btn btn-social-icon btn-outline-google"><i
                                class="fab fa-google"></i></button>
                    </div>
                    <div class="template-demo">
                        <button type="button" class="btn btn-social-icon btn-facebook"><i
                                class="fab fa-facebook-f"></i></button>
                        <button type="button" class="btn btn-social-icon btn-youtube"><i
                                class="fab fa-youtube"></i></button>
                        <button type="button" class="btn btn-social-icon btn-twitter"><i
                                class="fab fa-twitter"></i></button>
                        <button type="button" class="btn btn-social-icon btn-dribbble"><i
                                class="fab fa-dribbble"></i></button>
                        <button type="button" class="btn btn-social-icon btn-linkedin"><i
                                class="fab fa-linkedin-in"></i></button>
                        <button type="button" class="btn btn-social-icon btn-google"><i
                                class="fab fa-google"></i></button>
                    </div>
                    <div class="template-demo">
                        <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i
                                class="fab fa-facebook-f"></i></button>
                        <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i
                                class="fab fa-youtube"></i></button>
                        <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i
                                class="fab fa-twitter"></i></button>
                        <button type="button" class="btn btn-social-icon btn-dribbble btn-rounded"><i
                                class="fab fa-dribbble"></i></button>
                        <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i
                                class="fab fa-linkedin-in"></i></button>
                        <button type="button" class="btn btn-social-icon btn-google btn-rounded"><i
                                class="fab fa-google"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Social button with text</h4>
                    <p class="card-description">Add class <code>.btn-social-icon-text</code></p>
                    <div class="template-demo">
                        <button type="button" class="btn btn-social-icon-text btn-facebook"><i
                                class="fab fa-facebook-f"></i>Facebook</button>
                        <button type="button" class="btn btn-social-icon-text btn-youtube"><i
                                class="fab fa-youtube"></i>Youtube</button>
                        <button type="button" class="btn btn-social-icon-text btn-twitter"><i
                                class="fab fa-twitter"></i>Twitter</button>
                        <button type="button" class="btn btn-social-icon-text btn-dribbble"><i
                                class="fab fa-dribbble"></i>Dribbble</button>
                        <button type="button" class="btn btn-social-icon-text btn-linkedin"><i
                                class="fab fa-linkedin-in"></i>Linkedin</button>
                        <button type="button" class="btn btn-social-icon-text btn-google"><i
                                class="fab fa-google"></i>Google</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
