@extends('layouts.layoutMain')

@section('content')
<main>
    <h1>Gracias por contactarnos, nos comunicaremos a la brevedad</h1>
    <!-- fin slider principal -->

    <div class="btn-whatsapp"><a target="_blank" href="https://api.whatsapp.com/send?phone=541164047968&amp;text=Hola Nico, nos encanta la web!!!"><i class="fab fa-whatsapp"></i></a>
    </div>


    <!-- inicio Sección nosotros -->
    <section id="nosotros">
        <div class="row nosotros">
            <div class="col-12 col-lg-8">
                <h2>Nosotros</h2>
                <p>Somos una empresa joven en el rubro de la decoración de interiores y atendida por personas capacitadas en el rubro, se ha destacado por su profesionalismo y dedicación en el diseño de cada uno de sus productos. Nos esforzamos por imprimir en cada proyecto nuestra singular filosofía: Diseño innovador, Calidad y Servicio.</p>
            </div>
        </div>
    </section>
    <!-- fin Sección nosotros -->
    <!-- inicio sección pestañas -->
    <section>
        <div class="row pestanias">
            <div class="col-12 col-lg-8">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link-pills active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Trabajos a medida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-pills" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Puertas a medida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-pills" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Servicios</a>
                </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Muebles estándar y a medida. Muebles de cocina. Vanitory. Placares Vestidores. Muebles de living. Dormitorio. Fabricados en melamina de 18mm. Canto abs. Herrajes de primera calidad. Excelente terminación</div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Puertas fabricadas con materiales de excelente calidad. Enchapadas en madera o en fórmica. Con bordes de cedro</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error sint, sunt ipsa repudiandae reiciendis vel minima ipsam voluptates eum consequatur hic maiores ducimus atque culpa modi voluptatem, nesciunt eos sequi.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin sección pestañas -->
    <!-- inicio sección nuestro taller -->
    <section id="taller">
        <div class="row centrar">
            <div class="col-12 col-xs-12 col-md-10 col-lg-8">
        <div class="row media taller">
                <div class="col-12">
                    <h2>Nuestro taller</h2>
                </div>
            
            <div class="row">
                <div class="col-12 col-lg-3">
                    <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/taller.jpg" class="align-self-start mr-3" alt="...">
                </div>
                <div class="col-12 col-lg-9 media-body">
                    <p>Disponemos de talleres propios para el preparado, armado de cada producto, supervisados en cada etapa de la producción y materiales de 1º calidad para realizar lo más variados diseños de género.</p>
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

            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/biblioteca-001.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/biblioteca-001.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/biblioteca-002.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/biblioteca-002.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/biblioteca-003.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/biblioteca-003.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/biblioteca-004.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/biblioteca-004.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-001.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-001.jpg" alt="Park">
                    </a>
                </div>
            </div> 
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-002.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-002.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-003.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-003.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-004.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-004.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-005.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-005.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-006.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-006.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-007.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-007.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-008.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-008.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-009.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-009.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-010.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-010.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-011.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-011.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-012.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-012.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-013.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-013.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-014.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/cocina-014.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/rack-001.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/rack-001.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/rack-002.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/rack-002.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/rack-003.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/rack-003.jpg" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="thumbnail">
                    <a class="lightbox" href="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/rack-004.jpg">
                        <img src="http://estudiokarai.com/sosma_muebles/storage/app/public/images/images/rack-004.jpg" alt="Park">
                    </a>
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
    
</main>
@endsection 