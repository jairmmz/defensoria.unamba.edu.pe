@extends('backend.layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Información de la autoridad
        </h3>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <form action="{{ route('authorities.update') }}" enctype="multipart/form-data" autocomplete="off" method="POST">
                                @csrf
                                {{ method_field("PATCH") }}
                                <div class="form-group">
                                    <label for="charge_authority">Cargo de la autoridad</label>
                                    <input id="charge_authority" class="form-control" name="charge_authority" type="text" value="{{ old('charge_authority', $authoritie->charge_authority) }}">
                                    @error('charge_authority') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombres y apellidos</label>
                                    <input id="name" class="form-control" name="name" type="text" value="{{ old('name', $authoritie->name) }}">
                                    @error('name') <p class='text-danger text-xs'> {{ $message }} </p> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image_authority">Foto</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="file" class="dropify" name="image_authority" />
                                        </div>
                                    </div>
                                </div>
                                @error('image_authority') <p class='text-danger text-xs'> {{ $message }} </p> @enderror

                                <input class="form-control" name="id_user" type="hidden" value="{{ Auth::user()->id }}">

                                <input class="btn btn-primary" type="submit" value="Guardar">
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <div class="border-bottom text-center pb-2">
                                <b>Información de la autoridad</b>
                            </div>
                            <div class="py-4">
                                <p class="clearfix">
                                <b class="float-left">
                                    Cargo:
                                </b>
                                <span class="float-right">
                                    {{ $authoritie->charge_authority }}
                                </span>
                                </p>
                                <p class="clearfix">
                                <b class="float-left">
                                    Nombres y apellidos:
                                </b>
                                <span class="float-right">
                                    {{ $authoritie->name }}
                                </span>
                                </p>
                                <p class="clearfix">
                            </div>
                            <div class="text-center">
                                <b>Foto de perfil</b><br>
                                @if (!$authoritie->image_authority)
                                    <img style="width: 150px" src="{{ asset('assets/images/users/user-default.png') }}" alt="">
                                @else
                                    <img style="width: 150px" src="{{ asset('assets/images/' . $authoritie->image_authority) }}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
