@extends('layouts.layoutMain')

@section('content')
<main>
    <!-- inicio slider principal -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="carousel-inner">
        <div class="carousel-item active slider-principal">
        <img src="{{asset ('/storage/images/Slider-01.jpg')}}" class="d-block w-100" alt="Muebles para oficina">
        <div class="carousel-caption d-md-block">
            <h5>Muebles de oficina</h5>
        </div>
        </div>
        <div class="carousel-item slider-principal">
        <img src="{{asset ('/storage/images/Slider-02.jpg')}}" class="d-block w-100" alt="Muebles para el hogar">
        <div class="carousel-caption d-md-block">
            <h5>Muebles para el hogar</h5>
        </div>
        </div>
        <div class="carousel-item slider-principal">
        <img src="{{asset ('/storage/images/Slider-03.jpg')}}" class="d-block w-100" alt="Muebles para la industria">
        <div class="carousel-caption ">
            <h5>Muebles para la industria</h5>
        </div>
        </div>
    </div>
    
    </div>
    <!-- fin slider principal -->

    <div class="btn-whatsapp"><a target="_blank" href="https://api.whatsapp.com/send?phone=541154179569&amp;text=Hola, quisiera pedir información."><i class="fab fa-whatsapp"></i></a>
    </div>


    <!-- inicio Sección nosotros -->
    <section id="nosotros">
        <div class="row nosotros">
            <div class="col-12 col-lg-8">
                <h2>Nosotros</h2>
                <p>Somos una empresa con trayectoria en la fabricación de muebles de oficina, para el hogar y la industria de la construcción. Estamos orientados a dar soluciones integrales a nuestros clientes, para lo cual contamos con colaboradores capacitados para brindarle la mejor atención y calidad. Somos un equipo de profesionales que brindamos en cada nuevo proyecto, nuestro extenso conocimiento en diseño, interiorismo y fabricación de muebles, avalados por nuestra experiencia en equipamiento a entes gubernamentales, hogares y locales comerciales.</p>
                <p><b>Nos esforzamos por imprimir en cada proyecto nuestra singular filosofía: Diseño innovador, Calidad y Servicio.</b></p>
                <p>Nuestra misión en SOSMA Muebles es comprometernos con las necesidades de nuestros clientes antes, durante y después de finalizado el proyecto, garantizando siempre calidad, eficiencia y compromiso.</p>
            </div>
        </div>
    </section>
    <!-- fin Sección nosotros -->
    
    <!-- inicio sección nuestro taller -->
    <section id="taller">
        <div class="row centrar taller">
            <div class="col-12 col-xs-12 col-md-10 col-lg-8">
        <div class="row media ">
                <div class="col-12">
                    <h2>Nuestro taller</h2>
                </div>
            
            <div class="row">
                <div class="col-12 col-lg-3">
                    <img src="{{asset ('/storage/images/taller.jpeg')}}" class="align-self-start mr-3" alt="Nuestro taller">
                </div>
                <div class="col-12 col-lg-9 media-body">
                    <p>Disponemos de talleres propios para el preparado, armado de cada producto, supervisados en cada etapa de la producción y materiales de 1º calidad para realizar lo más variados diseños de género.</p>
                    <p>Contamos con todas las máquinas y herramientas necesarias para realizar las diversas tareas que componen la carpintería de madera, los más variados muebles tanto en melamina como en madera maciza, carpintería de obra, puertas, zócalos, escaleras, tabiquería y revestimientos.</p>
                </div>
            
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- fin sección nuestro taller -->
    <!-- inicio lightbox -->
    <section id="galeria">
    <div class="container gallery-container galeria">

    <h2>Nuestros trabajos</h2>
        <div class="tz-gallery">

            <div class="row">

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-001.jpg')}}">
                        <img src="{{asset ('/storage/images/oficina/oficina-001.jpg')}}" alt="Muebles para oficina">
                    </a>
                    <div class="caption"><h3>Muebles de oficina</div>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-002.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-003.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-004.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-005.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-006.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-007.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-008.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-009.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/oficina/oficina-010.jpg')}}"></a>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-001.jpg')}}">
                        <img src="{{asset ('/storage/images/hogar/hogar-001.jpg')}}" alt="Muebles para el hogar">
                    </a>
                    <div class="caption"><h3>Muebles para el hogar</div>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-002.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-003.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-004.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-005.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-006.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-007.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-008.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-009.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-010.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-011.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-012.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-013.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-014.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-015.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-016.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-017.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-018.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-019.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-020.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-021.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/hogar/hogar-022.jpg')}}"></a>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-001.jpg')}}">
                        <img src="{{asset ('/storage/images/industria/industria-001.jpg')}}" alt="Muebles para la industria">
                    </a>
                    <div class="caption"><h3>Muebles para la industria</div>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-002.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-003.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-004.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-005.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-006.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-007.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-008.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-009.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-010.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-011.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-012.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-013.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-014.jpg')}}"></a>
                    <a class="lightbox" rel="lightbox" href="{{asset ('/storage/images/industria/industria-015.jpg')}}"></a>
                </div>
            </div>
            

            </div>

        </div>

    </div>
    </section>
    <!-- fin lightbox -->
    <!-- inicio sección medios de pago -->
    <section class="medios-de-pago">
        <div class="row">
            <div class="col-12">
                <h2>medios de pago</h2>
                <ul class="row list-group list-group-horizontal">
                    <li class="list-group-item col-6 col-sm-6 col-md-4 col-lg-2"><i class="fas fa-wallet"></i><p>Efectivo</p></li>
                    <li class="list-group-item col-6 col-sm-6 col-md-4 col-lg-2"><i class="far fa-credit-card"></i><p>Tarjeta de débito</p></li>
                    <li class="list-group-item col-6 col-sm-6 col-md-4 col-lg-2"><i class="fas fa-credit-card"></i><p>tajeta de crédito</p></li>
                    <li class="list-group-item col-6 col-sm-6 col-md-4 col-lg-2"><i class="fas fa-money-check-alt"></i><p>transferencia bancaria</p></li>
                    <li class="list-group-item col-6 col-sm-6 col-md-4 col-lg-2 "><i class="fas fa-landmark"></i><p>depósito bancario</p></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- fin sección medios de pago -->
    <!-- inicio sección contacto -->
    <section class="contacto" id="contacto">
        <h2>contáctenos</h2>
        <div class="row formulario">
            <div class="col-12 col-lg-8">
            <form action="{{ url('/leads') }}" method="post">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="first_name">Nombre</label>
                    <input type="text" class="form-control" placeholder="Juan" name="first_name" value="{{old('first_name')}}">
                    <p>{{$errors->first('first_name')}}</p>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="last_name">Apellido</label>
                    <input type="text" class="form-control" placeholder="Pérez" name="last_name" value="{{old('last_name')}}">
                    <p>{{$errors->first('last_name')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" placeholder="ejemplo@mail.com" name="email" value="{{old('email')}}">
                    <p>{{$errors->first('email')}}</p>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="phone">Teléfono</label>
                    <input type="text" class="form-control" placeholder="Número de teléfono con código de área" name="phone" value="{{old('phone')}}">
                    <p>{{$errors->first('phone')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="consulta">Consulta</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Qué necesitás?" name="consulta" value="{{old('consulta')}}"></textarea>
                    <p>{{$errors->first('consulta')}}</p>
                    </div>
                </div>
                <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <!-- fin sección contacto -->
</main>
@endsection 