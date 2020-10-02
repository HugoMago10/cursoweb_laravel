@extends('template/master')
@section('contenido_central')
<main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{ asset('estilos/img/slide/ima3.jpg') }}">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{ asset('estilos/img/slide/ima4.jpg') }}">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url({{ asset('estilos/img/slide/ima5.jpg') }}">
            </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </section><!-- End Hero -->
</main>
@endsection