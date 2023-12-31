@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
    <h1 class="m-0 text-dark">Perfil</h1>
@stop

@section('content')
<div class = "container-fluid">
    <div class = "row">
        <div class = "col-md-3">
            <div class = "card card-dark">
                <div class = "card-body box-profile">
                    <div class = "text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ Gravatar::get($profile->user->email)}}" alt="User profile picture">
                    </div>
                    <h3 class = "profile-username text-center"> {{ $profile->firstname ?? '' }} {{ $profile->lastname ?? '' }}   </h3>
                    <p class="text-muted text-center">{{ $profile->profession ?? '' }}</p>
                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                                <b>Teléfono:</b> <a class="float-right">+51 948971165</a>
                                </li>
                                <li class="list-group-item">
                                <b>Correo:</b> <a class="float-right">prueba@gmail.com</a>
                                </li>
                                <li class="list-group-item">
                                <b>Dirección:</b> <a class="float-right">Av.Las Palmeras 123-SMP</a>
                            </li>
                      </ul>

                </div>

            </div>

        </div>
        <div class = "col-md-9">
            <div class = "card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Historial</a></li>
                    </ul>
                  </div>
            <div class = "card-body ">
                <div class="tab-content">


                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="activity">
                         <div class="post">

                            <h1> Aqui iran los donativos realizados </h1>
                        </div>
                    </div>


                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <h1> Aqui ira el historial de los donativos recibidos </h1>
                    </div>

                </div>
         </div>
        </div>
    </div>

</div>

@stop
