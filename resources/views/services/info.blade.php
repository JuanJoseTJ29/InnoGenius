@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<style>
    .fondo{
        background-color: #00aa66;
        color: white;
    } 
    h1, h2{
        font-weight: bold;
        font-style: oblique;
        font-family: 'Pacifico', cursive;
        font-size: 40px;
    }
    h2{
        font-size: 30px;
    }
    .foto{
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        margin: auto;
        margin-bottom: 20px;
    }
</style>

    <div class="container fondo">
        <div class="row justify-content-md-center text-center">
            <div class="col-4">
                <h1>¿Quienes somos?</h1>
            </div>
        </div>
        <div class="row justify-content-sm-center text-center">
            <div class="col-8">
                <p>Somos un grupo de estudiantes de la Universidad Nacional Mayor de San Marcos dede la facultad de Ingeniería de Sistemas e informática de la escuela de Ingeniería de Software quienes hemos decido desarrollar esta página web para poder ayudar a visibilizar distintos tipos de ideas innovadoras.
                    <br>  Gracias el equipo InnoGenius.</p>   
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row justify-content-center text-center">
            <div class="col-4">
                <h2>Nuestro Equipo</h2>
            </div>
        </div>
       
    </div>

    <div class="row justify-content-center text-center">
            <div class="col-4">
                <img src="https://miamidiario.com/wp-content/uploads/2019/01/pexels-photo-209151_0.jpeg"class="img-fluid foto" alt="">
                <p>Aquino Limache, Yojar Cristian<br>(Desarrollador Full stack)</p>
            </div>
            <div class="col-4">
                <img src="https://www.protecciononline.com/wp-content/uploads/2021/02/proteccion-online-12.png"class="img-fluid foto" alt="">
                <p>Tirado Julca, Juan Jose<br>( Gestor de base de datos y Frontend)</p>
            </div>
            <div class="col-4">
                <img src="https://miamidiario.com/wp-content/uploads/2019/01/pexels-photo-209151_0.jpeg"class="img-fluid foto" alt="">
                <p>Caramantin Llacsa , Jhoan Orlando<br>(Desarrollador Backend)</p>
            </div>
            <div class="col-4">
                <img src="https://www.protecciononline.com/wp-content/uploads/2021/02/proteccion-online-12.png"class="img-fluid foto" alt="">
                <p>Maita Medina, Andres<br>( Desarrollador Frontend)</p>
            </div>
            <div class="col-4">
                <img src="https://miamidiario.com/wp-content/uploads/2019/01/pexels-photo-209151_0.jpeg"class="img-fluid foto" alt="">
                <p>Criales Castro, Piero <br>( Desarrollador Backend )</p>
            </div>




     </div>

@endsection 