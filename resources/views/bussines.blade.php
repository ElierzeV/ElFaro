@extends('layout')

@section('content1')

    <!--Noticias nuevas-->
        <!--h4==titulo-->
        <!--h5==Categoria-->
        <!--p==Articulo-->
        <!--div con img==foto de noticia-->
        <section class="row">
            <div class="mt-4 col-md-6">
                <h4 class="p-2">Reelegido Presidente Macron mantendrá su reforma de pensiones para retrasar la jubilación hasta los 65 años</h4>
                <h5 class="p-2">Economía</h5>
                <p class="p-2">El Gobierno del Mandatario se mostró favorable de abrir la discusión a otros puntos, como las condiciones de quienes empezaron a trabajar muy jóvenes o la compensación de empleos penosos.</p>
                <p class="p-2">Emmanuel Macron, reelegido para un nuevo mandato de cinco años, mantendrá su reforma para retrasar la edad mínima de jubilación de 62 a 65 años, pero dará un margen de discusión a otros puntos, como las condiciones de quienes empezaron a trabajar muy jóvenes o la compensación de empleos penosos.</p>
                <p class="p-2">Este es el mensaje de su ministro de Economía y Finanzas, Bruno Le Maire, que este lunes reconoció que detrás de la "gran victoria" obtenida este domingo por Macron en la segunda vuelta de las presidenciales frente a la ultraderechista Marine Le Pen, hay "una insatisfacción democrática muy profunda" y también "un mensaje de enfado de satisfacción".</p>
                <div class="p-2">
                    <img class="img-fluid" src="{{asset('images/economia/macronm.jpg')}}" alt="">
                </div>
            </div>
            <div class="mt-4 col-md-6">
                <div class="p-2">
                    <img class="img-fluid" src="{{asset('images/economia/Marcel.jpg')}}" alt="">
                </div>
                <h4 class="p-2">Mario Marcel por IPoM: “La economía no podía seguir al ritmo al cual cerró en 2021, eso es bastante claro y comprensible”</h4>
                <h5 class="p-2">Economía</h5>
                <p class="p-2">“Si las cosas siguen como están vamos a tener una inflación alta por algunos meses, y vamos a ver que comienza a ceder hacia el tercer trimestre de este año”, indicó el titular de las finanzas públicas.</p>
                <p class="p-2">Un menor crecimiento para 2022, y una posible contracción económica es lo que prevé el Banco Central en su último IPoM. Tras conocer el panorama que estima el ente rector y antes de participar en el consejo general de la Sofofa, el ministro de Hacienda, Mario Marcel, indicó que estas proyecciones corresponden a lo que se ha venido anticipando y que no se podían mantener las cifras que se vieron en 2021.</p>
            </div>
        </section>


@endsection


@section('content2')
        <!--Sección noticias antiguas-->
        <!--Imagen noticia-->
        <!--Categoria noticia-->
        <!--Titulo Noticia-->

        <section class="tarjetas row">
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center text-center mt-3">
                    <div >
                        <img class="img-fluid" src="{{asset('images/economia/juansutil.jpg')}}" alt="">
                    </div>
                    <h4>Juan Sutil afirmó que “el país está en condiciones” de subir el sueldo mínimo a $400 mil</h4>
                    <h5>Economía</h5>
                    <p class="px-5">“No sé si en septiembre, pero debiéramos alcanzar”, señaló el presidente de la CPC.</p>
                    <button class="btn btn-primary">Ver más</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center text-center mt-3">
                    <div >
                        <img class="img-fluid" src="{{asset('images/economia/eeuueconomia.jpg')}}" alt="">
                    </div>
                    <h4>Nuevo estímulo económico: de cuánto es el monto y quién podrá cobrarlo</h4>
                    <h5>economía</h5>
                    <p class="px-5">Ante la alta tasa de inflación en Estados Unidos y gracias a un superávit presupuestario, Pennsylvania busca enviar un nuevo estímulo económico de $2,000.</p>
                    <button class="btn btn-primary">Ver más</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center text-center mt-3">
                    <div >
                        <img class="img-fluid" src="{{asset('images/economia/coroneconomia.jpg')}}" alt="">
                    </div>
                    <h4>¿Cuál es el efecto de la política cero-covid en la economía de China?</h4>
                    <h5>Economía</h5>
                    <p class="px-5" text-justify>Las políticas para combatir el covid-19 en China han traído un efecto depresivo en su economía, según explica Mariano Turzi, director del Centro Indo-Pacífico</p>
                    <button class="btn btn-primary">Ver más</button>
                </div>
            </div>

            </div>
        </section>

@endsection