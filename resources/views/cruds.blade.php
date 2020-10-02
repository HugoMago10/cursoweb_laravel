@extends('template/master')
@section('contenido_central')
    <!-- ======= Cruds Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="container breadcrumb bg-transparent">
                <div class="d-flex pt-3">
                    <h3 class="title">Cruds Sistema</h3>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-lg-4 col-md-6 icon-box">
                    <a href="{!! asset('paises') !!}">
                        <div class="icon"><i class="icofont-earth"></i></div>
                        <h4 class="title">Paises</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 icon-box">
                    <a href="{!!asset('entidades')!!}">
                        <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                        <h4 class="title"><a href="">Estados</a></h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 icon-box">
                    <a href="{!!asset('municipios')!!}">
                        <div class="icon"><i class="icofont-institution"></i></div>
                        <h4 class="title"><a href="">Municipios</a></h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 icon-box">
                    <a href="{!!asset('provedores')!!}">
                        <div class="icon"><i class="icofont-live-support"></i></div>
                        <h4 class="title"><a href="">Provedores</a></h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 icon-box">
                    <a href="{!!asset('usuarios')!!}">
                        <div class="icon"><i class="icofont-user-alt-3"></i></div>
                        <h4 class="title"><a href="">Usuarios</a></h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 icon-box">
                    <a href="{!!asset('productos')!!}">
                        <div class="icon"><i class="icofont-brand-aliexpress"></i></div>
                        <h4 class="title"><a href="">Productos</a></h4>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Cruds -->
@endsection