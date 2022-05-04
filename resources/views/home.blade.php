@extends('layout')

@section('content1')

    <!--Noticias nuevas-->
    <!--h4==titulo-->
    <!--h5==Categoria-->
    <!--p==Articulo-->
    <!--div con img==foto de noticia-->
    <section class="row">
        <div class="mt-4 col-md-6">
            <h4 class="p-2">Chile es el país que más bajó la confianza en su economía a nivel mundial, según Ipsos</h4>
            <h5 class="p-2">Categoria: Economia</h5>
            <p class="p-2">De acuerdo a un informe de Ipsos titulado “Índice de Confianza del Consumidor” (CCI, por sus siglas en inglés), Chile es
            el país del mundo donde más bajó la confianza en la economía. Para el análisis se consideró la opinión de más de 21 mil personas en 28 países, con el objetivo de medir el nivel de
            optimismo de los consumidores en relación con la situación de las economías locales, las finanzas personales, los
            ahorros y las garantías para realizar inversiones.</p>
            <p>En marzo, la confianza de los consumidores chilenos bajó 2,5 puntos respecto a febrero, llegando a 42,6 puntos, siendo
            la mayor baja de puntaje de todos los mercados analizados. Con este resultado, nuestro país se ubica en el lugar 19
            entre las 28 economías medidas globalmente por Ipsos, estando como el tercer país de Latinoamérica con el puntaje más
            bajo solo superando a Perú (42,2) y Argentina (38,5).</p>
            <p>Con los datos de marzo, Chile se ubicó en una zona en donde predomina el pesimismo por sobre el optimismo en la economía
            (menor a 50 puntos). De hecho nuestro país se ubica por debajo tanto del promedio mundial (48,6 puntos) como del
            promedio de Latinoamérica (43.4 puntos).</p>
            <div class="p-2">
                <img class="img-fluid" src="{{asset('images/noticiaG/EcoChile.jpg')}}" alt="">
            </div>
        </div>
        <div class="mt-4 col-md-6">
            <div class="p-2">
                <img class="img-fluid" src="{{asset('images/noticiaG/Ben.jpg')}}" alt="">
            </div>
            <h4 class="p-2">Aseguran que importante club italiano está tras los pasos de Ben Brereton</h4>
            <h5 class="p-2">Categoria: Deporte</h5>
            <p class="p-2">Ben Brereton vive un gran presente en el Blackburn Rovers y ha despertado el interés de varios clubes importantes en
            Europa. West Ham, Leeds United, el Fenerbahce y el Sevilla son algunos de los equipos que han preguntado por los servicios del
            atacante.</p>
            <p>Sin embargo, un nuevo interesado se ha sumado a la lista. Se trata de la Fiorentina de Italia, club donde militaron
            Matías Fernández y David Pizarro.</p>
            <p>“Con 20 goles en 24 partidos ligueros con la camiseta del Blackburn Rovers, Ben Brereton es uno de los grandes
            delanteros de la liga inglesa”, reveló el medio Serie B News de Italia.</p>
            <p>“Ya anotó 4 veces con la camiseta de Chile y el delantero ha despertado el interés de algunos clubes europeos
            importantes. Entre ellos está el Sevilla , que probablemente no redimirá a Anthony Martial del Manchester United”,
            agregaron.</p>
            <p>Además, señalaron que el Sevilla es el competidor más serio para quedarse con Brereton. “El club andaluz es el
            competidor más serio para las ambiciones moradas de traer al poderoso delantero a Florencia, para quien la Serie B
            inglesa comienza a sentirse muy apretada”, cerraron.</p>
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
                    <img class="img-fluid" src="{{asset('images/noticiaG/Card1pesoCPL.jpg')}}" alt="">
                </div>
                <h4>Peso chileno se deprecia ante un dólar que llega a máximos de casi $860</h4>
                <h5>Categoria: Economia</h5>
                <p class="px-5">a depreciación del peso chileno se debe mayormente a factores externos, pero también hay que considerar la incertidumbre
                en la Convención Constitucional, que suma ingredientes adicionales.</p>
                <button class="btn btn-primary">Ver más</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex flex-column align-items-center text-center mt-3">
                <div >
                    <img class="img-fluid" src="{{asset('images/noticiaG/Card2ManRM.jpg')}}" alt="">
                </div>
                <h4>El aspirante ante el rey: Manchester City recibe a Real Madrid en la ida de ’semis’ de Champions</h4>
                <h5>Categoria: Deporte</h5>
                <p class="px-5">Manchester City y Real Madrid dan vida a la ida de las semifinales de la Champions League.</p>
                <button class="btn btn-primary">Ver más</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex flex-column align-items-center text-center mt-3">
                <div >
                    <img class="img-fluid" src="{{asset('images/noticiaG/ColoCad3.jpg')}}" alt="">
                </div>
                <h4>Colo Colo podría perder hasta 10 puntos si se comprueba que regaló tickets a hinchas</h4>
                <h5>Categoria: Deporte</h5>
                <p class="px-5">Colo Colo arriesga una severa sanción si se comprueba que el club dio entradas a barristas.</p>
                <button class="btn btn-primary">Ver más</button>
            </div>
        </div>

        </div>
    </section>

@endsection