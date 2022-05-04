@extends('layout')

@section('content1')

     <!--Noticias nuevas-->
        <!--h4==titulo-->
        <!--h5==Categoria-->
        <!--p==Articulo-->
        <!--div con img==foto de noticia-->
        <section class="row">
            <div class="mt-4 col-md-6 text-justify">
                <h4 class="p-2">Qué sucederá con la carrera de Tyson Fury.</h4>
                <h5 class="p-2">Categoría: Deporte</h5>
                <p class="p-2">Tras noquear a Dillan Whyte, Tyson Fury confirma interés de enfrentar a Francis Ngannou en 2023.</p>
                <p class="p-2">A esta altura, todos los portales del boxeo hablan sobre el espectacular nocaut de Tyson Fury ante su compatriota Dillian Whyte que tuvo lugar el último fin de semana para retener los títulos mundiales del CMB y el The Ring de la categoría pesado. Sin embargo, las propias declaraciones del púgil provocaron que todos se preocupen sobre su futuro profesional.</p>
                <p class="p-2">The Gypsy King, el boxeador de 33 años, estiró su invicto a 33 peleas gracias a las 32 victorias que registra (23 por KO) y al empate que data de 2018 cuando boxeó ante el estadounidense Deontay Wilder. Tras el combate, el propio Tyson Fury remarcó que podría haber sido "el telón final" para su carrera profesional. Esto ha sido motivo de análisis por todos los expertos de este deporte mientras salían de su asombro, que era similar al que tenían las 94 mil personas que estaban en Wembley y los miles de espectadores.</p>
                <p class="p-2">El primero de los que se pronunció fue Steve Bunce, quien dialogó con "BBC Radio 5 Live" y dijo que pese a lo que muchos no quieren escuchar "no es sorpresa del todo si se retira" aunque advirtió que "es complicada la situación". Asimismo, "Manchester Evening News" exhibió una aparente conversación entre el boxeador multicampeón y Francis Ngannou, campeón de peso pesado en la UFC, en la que mencionaban un supuesto combate amistoso donde las reglas del boxeo y la lucha se mezclarán. "Va a ser una pelea híbrida con diferentes tipos de reglas. Guantes de MMA, en el ring, mézclalo un poco. Algo diferente", dijo el camerunés.</p>
                <p class="p-2">Claramente Tyson Fury va a ser uno de los mejores de la historia por siempre y él lo sabe bien: "he estado fuera (de casa) por mucho tiempo. Cumplí todo lo que siempre quise cumplir. Me retiraré como el segundo peso pesado en la historia, después de Rocky Marciano, en retirarse invicto. Fui imbatible en este juego". El problema es que nadie sabe qué sucederá en el futuro y muchos lo relacionan con el mundo de cine, no como actor, sino como estrella retirada a la que le dedican una película o documental por lo que fue y por lo que hizo en este deporte.</p>
                <div class="p-2">
                    <img class="img-fluid" src="{{asset('images/deporte/tyson1.jpg')}}" alt="">
                </div>
            </div>
            <div class="mt-4 col-md-6">
                <div class="p-2">
                    <img class="img-fluid" src="{{asset('images/deporte/voley1.jpg')}}"  alt="">
                </div>
                <h4 class="p-2">Bethania de la Cruz ha ganado nueve coronas como refuerzo.</h4>
                <h5 class="p-2">Categoría: Deporte</h5>
                <p class="p-2">La dominicana, nueva vez, mostró su gran valía en una liga donde estaban jugadoras de alto calibre internacional.</p>
                <p class="p-2"> Bethania de la Cruz sigue cosechando éxitos en las Ligas Profesionales en el exterior y ahora le tocó el turno de coronarse campeona en la exigente Liga Profesional de Voleibol en Estados Unidos.</p>
                <p class="p-2">Ha levantado la copa de campeona tres veces en la Liga de Rusia, dos títulos en la Liga de Turquía, uno en Japón, en Puerto Rico y Corea del Sur y ahora en USA.</p>
                <p class="p-2">La estelar jugadora dominicana brilló con luz propia por segundo año seguido en la Liga de los Estados Unidos “Athletes Unlimited” que concluyó donde con su trabajo logró establecer numerosos récords en la segunda edición del evento.</p>
                <p class="p-2">El sistema de evaluación del torneo mezcla los logros individuales y colectivos acumulados durante cinco semanas en las que varía la composición de las plantillas.</p>
                <p class="p-2">Bethania, quien terminó subcampeona en la primera versión del evento en 2021 detrás de Jordan Larson, se desempeñó como capitana del equipo durante los cinco períodos de acción y ganó el título por un amplio margen al acumular 4,652 puntos.</p>
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
                        <img class="img-fluid" src="{{asset('images/deporte/mike1.jpg')}}" alt="">
                    </div>
                    <h4>No lo considera el mejor.</h4>
                    <h5>Categoría: Deporte</h5>
                    <p class="px-5">El Dardo que le lanzó Mike Tyson a Floyd Mayweather.</p>
                    <button class="btn btn-primary">Ver más</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center text-center mt-3">
                    <div >
                        <img class="img-fluid" src="{{asset('images/deporte/judo.jpg')}}" alt="">
                    </div>
                    <h4>Histórica del Judo Chileno.</h4>
                    <h5>Categoría: Deporte</h5>
                    <p class="px-5">Mary Dee Vargas es quinta en Grand Slam de Judo y pelea por medalla por primera vez.</p>
                    <button class="btn btn-primary">Ver más</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center text-center mt-3">
                    <div >
                        <img class="img-fluid" src="{{asset('images/deporte/natacion.jpg')}}" alt="">
                    </div>
                    <h4>Sigue Brillando en Natación.</h4>
                    <h5>Categoría: Deporte</h5>
                    <p class="px-5">Kristel Köbrich gana medalla de oro en el Open de Dinamarca.</p>
                    <button class="btn btn-primary">Ver más</button>
                </div>
            </div>

            </div>
        </section>

@endsection