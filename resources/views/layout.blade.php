<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <!--Header con bootstrap-->
    <!--NO MODIFICAR-->
    <header>
        <!--Menú hamburguesa bootstrap-->
        <!--NO MODIFICAR-->
        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home')}}">El Faro</a>
                <button class="navbar-toggler cBlanco" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">El Faro</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('sport')}}">Deporte</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('bussines')}}">Economía</a></li>  
                        <!--se puede agregar luego-->
                        <!--li class="nav-item"><a class="nav-link" href="{{route('blog.index')}}">Blog</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Registro</a></li>  
                    </ul>
                    </div>
                </div>
            </div>
        </nav>
         <!--Sección anuncios-->
        <!--NO MODIFICAR-->
        <div id="carouselExampleCaptions" class="carousel slide pad" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/carousel/promo1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Not Milk</h5>
                    <p>Prueba la nueva leche, se te hará agua la boca</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/carousel/promo2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mc'Donals</h5>
                    <p>Todo el sabor de la carne en un solo lugar</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/carousel/promo3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Viajes Excelencia</h5>
                    <p>El mejor lugar de viajes</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </header>
    <!--Contenido general-->
    <main class="pt-5">
        @yield('content1')

        <!--Divisor-->
        <!--NO MODIFICAR-->
        <div class="imagenFondo row text-center">
            <div class="column ">
                <div class="d-flex p-5 align-items-center justify-content-center" >
                    <h4>Vemos al horizonte para mantenerte informado ---- Iluminamos tu conocimiento</h4>
                </div>
            </div>            
        </div>

        @yield('content2')
    </main>
    <!--Footer-->
    <!--NO MODIFICAR-->
    <footer class="text-center p-4 mt-4 row align-items-center justify-content-center">
        <div class="col-md-4 pb-3">
            <h4>Realizado por:</h4>
                <li>Elierze Valero</li>
                <li>Pablo Rodriguez</li>
                <li>Gonzalo Durán</li>
                <li>Dylan Perez</li>
                <li>Jerko Arancibia</li>
        </div>
        <div  class="col-md-4 ">
            <h5>© Todos los derechos reservados.</h5>
        </div>

        <div class="col-md-4 ">
            <li class="li"><a class="nav-link a" href="{{route('contact')}}">Contáctanos</a></li>
        </div>
    </footer>

    <!--Script para la web  -->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>