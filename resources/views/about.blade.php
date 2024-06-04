@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Acerca de') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <img src="{{ asset('img/logoApp.png') }}" class="rounded-circle" alt="user-image">
                </div>

                <div class="card-body">

                    <style>
                        p{
                            text-align: justify;
                        }
                    </style>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">AgroApp</h5>
                            <p>AgroApp es un software especializado para la gestión de proyectos agroindustriales, que optimiza la planificación, ejecución y monitoreo de actividades agrícolas. Ofrece funciones para gestionar inventarios, verificar costos y programar tareas, mejorando la eficiencia operativa y facilitando decisiones informadas.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Creditos</h5>
                            <p>Este software ha sido desarrollado por estudiantes de la Carrera de software de la Universidad Tecnica del Norte.</p>
                            <ul>
                                <li>Alejandro Mallama 0963243951</li>
                                <li>Diego Recalde 0967451554</li>
                                <li>Zamyr Guevara 0994284748</li>
                                <li>Melanie Ullco 0982473434</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
