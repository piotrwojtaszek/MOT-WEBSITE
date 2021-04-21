<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <script src="../script.js"></script>
    <title>Magic Spheres</title>
</head>
<body>
    <div class="header" id="sticky">
        <div class="header_container">
        <a href="#section_0" class="logo-img">
                <img class="logo" src="../media/multi/logo.png"></img>
            </a>
            <div class="nav_containter" id="nav_containter">
                <nav class="nav_links">
                    <a href="#section_1" onclick="toggleMenu()"><li>Sobre este juego</li></a>
                    <a href="#section_2" onclick="toggleMenu()"><li>Instrucciones para jugar </li></a>
                    <a href="#section_3" onclick="toggleMenu()"><li>Por qué vale la pena</li></a>
                    <a href="#section_4" onclick="toggleMenu()"><li>Acerca del dolor</li></a>
                    <a href="#section_5" onclick="toggleMenu()"><li>Sobre nosotros</li></a>
                    <!-- <li><a href="#section_6">Zaufali nam</a></li> -->
                    <a href="#section_7" onclick="toggleMenu()"><li>Contacto</li></a>
                    <div class="nav_dropdown_language">
                        <div class="dropbtn"><img src="../media/multi/Espaniol.png" alt=""></div>
                        <div class="nav_dropdown_language_content">
                            <a href="ru"><img src="../media/multi/Russia.png" alt="Polish lang"></a>
                            <a href="en"><img src="../media/multi/English.png" alt="English lang"></a>
                            <a href="es"><img src="../media/multi/Polish.png" alt="Polish lang"></a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="header_mail">Contacto:<br> magic.spheres@uwr.edu.pl</div>
            <div class="hamburger_menu" id="hamburger_menu" onclick="toggleMenu()">
                &#9776;
            </div>
        </div>
    </div>
    <div class="section_0" id="section_0">
        <video src="../media/multi/gameplay_loop.mp4" playsinline autoplay muted loop></video>
        <div class="bg_color"></div>
        <div class="text_wrap">
            <div class="centered">
                <h1>Magic Spheres</h1>
                <h4>juego diseñado para distraer la atención durante inyecciones y muestras de sangre</h4>
                <div class="inner_margin">
                    <p>Ayuda a tu hijo cuando se le aplican inyecciones o se le toma una muestra de sangre. ¡Cambia la actitud de tu hijo frente a los procedimientos médicos! Puedes usar tu teléfono inteligente unos minutos antes y después de la inyección para conseguirlo. La aplicación <b>Magic Spheres</b> cuenta con cuatro escenarios con diferentes niveles de dificultad <b>diseñados para apartar la atención del niño del dolor. </b> <br>
                    Descarga la aplicación Magic Spheres y <b>comprueba cómo distraer la atención del niño en el momento de la punción, reduce el dolor y el estrés.</b>
                    </p>
                    <div class="download_containter">
                        <div class="download_text">
                        Descarga la versión completa del juego
                        </div>
                        <a href='https://play.google.com/store/apps/details?id=com.UWr.MagicSpheres&hl=pl&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                            <img class="download_button" alt='pobierz z Google Play' src='https://play.google.com/intl/pl/badges/static/images/badges/pl_badge_web_generic.png'/>
                        </a>
                    </div>
                    <a href="#section_2">
                        <div class="check_game">
                            <p>
                            Descubre el juego  
                            </p> 
                        </div>
                    </a>
                    <a href="#section_1">  
                        <div class="learn_more">
                           <p>Mayor información</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <section id="section_1">
            <div class="section_1_container">
                <div class="section_1_1">
                    <div class="section_1_1_title">
                        <h1>
                        Distracción de la atención  
                        </h1>
                        <div></div>
                        <h4>
                        el potencial en el tratamiento del dolor confirmado por el equipo de investigación de VR4HEALTH LAB 
                        </h4>
                    </div>
                    <div class="section_1_1_content">
                        <div class="section_1_1_content_title">
                            <p>
                            Durante casi una década, los investigadores del Instituto de Psicología han realizado estudios sobre la distracción de la atención frente al dolor de corta duración. 
                            </p>
                        </div>
                        <div class="section_1_1_content_timeline">
                            <div class="section_1_1_content_boxes">
                                <div class="section_1_1_content_boxes_1">
                                    <div class="section_1_1_content_boxes_1_containter">
                                        <p>
                                        Estudios recientes han demostrado que nuestro juego, que requiere seguir con la mirada muchos objetos de manera simultánea, consigue mantener al niño muy atento y: 
                                        </p>
                                        <ul>
                                            <li>
                                                <p>
                                                Ha reducido la intensidad del dolor en un 59% en comparación con el grupo de control 
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                Los niveles de estrés han disminuido en un 73% en un grupo de 39 niños <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="6"></span>.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <img src="media/multi/dialog-box.svg" alt="box"> -->
                                    <p class="section_1_1_content_boxes_p">
                                        2017
                                    </p>
                                </div>
                                <div class="section_1_1_content_boxes_2">
                                    <div class="section_1_1_content_boxes_2_containter">
                                        <p>
                                        Un efecto similar se obtuvo en otro estudio (en un grupo de 57 niños), en el que adicionalmente se compararon dos tipos de intervenciones con Realidad Virtual (VR). En una, los niños jugaron activamente un juego analógico en VR; en la segunda, vieron vídeos similares a los del juego. 
                                        </p>
                                        <ul>
                                            <li>
                                                <p>
                                                Los dos grupos de VR reportaron un dolor y un grado de estrés  significativamente menores al grupo de control. 
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                Entre los grupos, se observaron tendencias de mayor reducción del dolor y del estrés entre los individuos que jugaron de forma activa durante los procedimientos médicos  <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="7"></span>.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="section_1_1_content_boxes_p">
                                        2020
                                    </p>
                                </div>
                                <div class="section_1_1_content_boxes_3">
                                    <div class="section_1_1_content_boxes_3_containter">
                                        <img src="../media/multi/MagicSpheresLogo.png" alt="logo">
                                    </div>
                                    <p class="section_1_1_content_boxes_p">
                                        2021
                                    </p>
                                </div>
                            </div>
                            <div class="section_1_1_timeline_svg">
                                <img src="../media/multi/timeline-vertical.svg" alt="" class="timeline_vertical">
                                <img src="../media/multi/timeline.svg" alt="" class="timeline_horizontal">
                            </div>
                        </div>
                </div>
                <div class="section_1_2">
                    <div class="section_1_2_title">
                        <h1>
                        ¿Por qué creamos <br> Magic Spheres?
                        </h1>
                    </div>
                    <div class="section_1_2_content">
                        <div class="section_1_2_content_child1">
                            <p>
                            Magic Spheres responde a la necesidad de minimizar el estrés y manejar el dolor en niños durante la aplicación de inyecciones y tomas de sangre. 
Los efectos de estudios previamente realizados por el laboratorio de VR4Health  han evidenciado el gran potencial de nuestro juego para apartar la atención del niño de estímulos dolorosos.  
                            </p>
                        </div>
                        <div class="section_1_2_content_child2">
                            <p>
                            Los investigadores aún estudian si el uso de realidad virtual es más efectivo que el uso de otras tecnologías digitales <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="8"></span>, <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="9"></span>y por esto el juego ha sido diseñado para un entorno 2D. <b>La efectividad para aliviar el dolor </b>– durante aplicación de inyecciones y tomas de sangre –<b> la confirman</b> los juegos de VR <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="10"></span>, <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="11"></span>,<br> <b>así como el uso de otras tecnologías digitales</b> <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="12"></span>, <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="13"></span>.
                            </p>
                        </div>
                        <div class="section_1_2_content_child3">
                            <p>
                            Teniendo en cuenta la forma más simple de poder acceder al juego, este fue <b>programado especialmente para teléfonos inteligentes y tabletas. </b>Se ha hecho así para que tanto los padres como los profesionales de la salud puedan tener  <b>acceso ilimitado e independiente sin ningún costo adicional.</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section_2">
            <div class="section_2_1">
                <div class="section_2_1_title">
                    <h1>
                    Instrucciones para jugar 
                    </h1>
                </div>
                <div class="section_2_1_youtube_video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Wf3ryp1BzgM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section id="section_3">
            <div class="section_3_1">
                <div class="section_3_1_title">
                    <h1>
                    ¿Por qué vale la pena descargar <br>Magic Spheres?
                    </h1>
                </div>
                <div class="section_3_1_content">
                    <div class="section_3_1_content_1">
                        <p>Se usó un mecanismo para el alivio del dolor en Magic Spheres, que se basa en apartar la atención del niño de estímulos dolorosos. El alivio del dolor es mayor en cuanto la atención del niño está enfocada en un estímulo que aparta su atención del procedimiento. Para conseguir este objetivo, el juego se diseñó, como se mencionó anteriormente, para que se rastrearan múltiples objetos –lo que, a diferencia de otros juegos, mantiene la atención del niño–.  Este método es diferente al que ha sido usado en casi todos los otros estudios de distracción de la atención. Primero, requiere una atención constante e ininterrumpida. Y segundo, requiere mantener la atención en muchos objetos simultáneamente  <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="14"></span>. El método de rastrear múltiples objetos ha sido puesto a prueba en investigaciones sobre la atención en grupos de diferentes edades, incluyendo niños pequeños <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="15"></span>. 
                        </p>
                    </div>
                    <div class="section_3_1_content_2">
                        <p class="section_3_1_content_2_1">
                        El juego ha sido diseñado para que niños de todas las edades puedan usarlo. En <i>Magic Spheres </i>varios elementos parpadean de forma breve, y el jugador debe recordarlos y encontrarlos entre otros objetos que se mueven. El juego tiene varios escenarios, cada uno con un fondo y un número de objetos voladores distintos, para que, en cada nivel, el niño se mantenga atento, y de este modo se incremente la probabilidad de apartar su atención del dolor.
                        </p>
                        <div class="section_3_1_content_2_divider"></div>
                        <p class="section_3_1_content_2_2">
                        El juego fue diseñado específicamente para ser usado durante procedimientos dolorosos breves, y sólo se debería usar con este objetivo: a modo de ensayo durante algunos minutos; inmediatamente antes del procedimiento médico y durante el tratamiento. Esto permitirá mantener el efecto de novedad y maximizar la atención del niño respecto a la tarea que debe realizar en el juego –cuanto más domine el niño el juego, menor será el efecto de distracción del dolor−. 
                        </p>
                    </div>
                    <div class="section_3_1_content_3">
                        <div class="section_3_1_content_3_1">
                            <p>
                            El juego fue creado con el objetivo de ayudar al bienestar mental de niños, padres y profesionales de la salud. 
                            </p>
                        </div>
                        <div class="section_3_1_content_3_2">
                            <ul>
                                <li><p>Gratis</p></li>
                                <li><p>Disponible para todos </p></li>
                                <li><p>De manejo intuitivo  </p></li>
                            </ul>
                        </div>
                        <div class="section_3_1_content_3_3">
                        <p>El uso del juego no requiere participar en investigaciones clínicas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_3_2">
                <div class="section_3_2_title">
                    <h1>
                    Distrae la atención de tu hijo del dolor
                    </h1>
                    <h4>
                    Prueba el juego y minimiza el malestar del niño antes de una inyección o una toma de sangre.
                    </h4>
                </div>
                <div class="section_3_2_content">
                    <div class="section_3_2_content_1">
                        <div class="section_3_2_content_1_icon">
                            <img src="../media/multi/MagicSpheresLogo.png" alt="Magic_Spheres_Logo">
                        </div>
                        <div class="section_3_2_content_1_store">
                        <a href='https://play.google.com/store/apps/details?id=com.UWr.MagicSpheres&hl=pl&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                            <img class="section_3_2_content_1_store_button" alt='pobierz z Google Play' src='https://play.google.com/intl/pl/badges/static/images/badges/pl_badge_web_generic.png'/>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section_4">
        <div class="section_4_1">
                <div class="section_4_1_title">
                    <h1>
                    Algunas palabras sobre el dolor, los miedos del niño y formas de manejar el temor a las agujas
                    </h1>
                </div>
                <div class="section_4_1_content">
                    <div class="section_4_1_content_1">
                        <p> <b>El dolor</b> es una experiencia emocional y sensorial desagradable, que experimentamos desde muy pequeños. La experiencia del dolor es subjetiva e individual, y la tolerancia al dolor se desarrolla desde una edad temprana –desde las primeras experiencias de lesiones corporales <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="1"></span>. Desde el nacimiento, los niños se exponen a procedimientos con agujas. En niños sanos, esto por lo general ocurre con las vacunas, múltiples veces y hasta los 18 años. En niños que requieren tratamientos médicos, esto se da con mayor frecuencia, ya sea con tomas de sangre, inyecciones o venopunciones. La ansiedad y el dolor del niño − además de afectarlo de forma negativa−, hacen que los procedimientos con agujas sean estresantes tanto para los padres como para los profesionales de la salud <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="3"></span>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="section_4_2_content">
                    <div class="section_4_2_content_1">
                        <div class="section_4_2_content_1_container">
                        <img src="../media/multi/syringe_512.png" alt="">
                        <ul>
                            <li><p>Vacunación </p></li>
                            <li><p>Tomas de sangre</p></li>
                            <li><p>Tratamientos hospitalarios</p></li>
                            <li><p>Procedimientos dentales </p></li>
                        </ul>
                        </div>
                        <p class="section_4_2_content_1_2">
                            <b>La venopunción es uno de los tratamientos más temidos por los niños </b>
                        </p>
                    </div>
                    <div class="section_4_2_content_2">
                        <img src="../media/multi/cry_baby_1024_es.png" alt="">
                        <p>
                        ¿Cómo se siente el niño durante el procedimiento? 
                        </p>
                    </div>
                    <div class="section_4_2_content_3">
                        <p class="section_4_2_content_3_1"><b>El dolor sin tratar y el estrés frente a las intervenciones médicas pueden:</b></p>
                        <ul>
                            <li><p>Formar una imagen negativa del tratamiento </p></li>
                            <li><p>Disuadir de realizar los procedimientos médicos </p></li>
                            <li><p>Hacer que se eviten los exámenes médicos o tratamientos por el miedo a las agujas</p></li>
                            <li><p>Intensificar el miedo </p></li>
                            <li><p>Provocar una fobia a las agujas</p></li>
                            <li><p>Reducir la tolerancia al dolor &nbsp;<span onclick="tooglePopupOn(this.id)" class="link-toogle" id="2"></span></p></li>
                        </ul>
                    </div>
                </div>
                <div class="section_4_3">
                    <div class="section_4_3_title">
                        <h1>
                        ¿Cómo aliviar el dolor y la ansiedad del niño durante el procedimiento? 
                        </h1>
                    </div>
                </div>
                <div class="section_4_3_content">
                    <div class="section_4_3_content_1">
                        <p>
                        El dolor y el estrés relacionados con los tratamientos con agujas se pueden reducir con la ayuda de diferentes métodos. Se ha confirmado la efectividad de intervenciones psicológicas como la distracción del dolor (apartar la atención del dolor), la hipnosis, la combinación de técnicas para la relajación con la respiración y otras técnicas derivadas de la terapia cognitivo-conductual  <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="4"></span>. ​
<br><b>En el caso de tratamientos con agujas planificados, se recomienda darle al niño varios tratamientos para aliviar el dolor, como:  <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="5"></span>:</b> 

                        </p>
                    </div>
                    <div class="section_4_3_content_cotainter">
                        <div class="section_4_3_content_cotainter_1">
                            <img src="../media/multi/child_mom.png" alt="child-and-mom">
                            <p>
                            Bebé: amamantarlo durante el tratamiento o administrarle un líquido dulce, por ejemplo, con sacarosa
                            </p>
                        </div>
                        <div class="section_4_3_content_cotainter_2">
                            <img src="media/multi/chair.png" alt="chair">
                            <p>Una posición cómoda durante el procedimiento</p>
                        </div>
                        <div class="section_4_3_content_cotainter_3">
                            <img src="media/multi/krem.png" alt="krem">
                            <p>Anestesia local</p>
                        </div>
                        <div class="section_4_3_content_cotainter_4">
                            <img src="media/multi/MagicSpheresLogo.png" alt="">
                            <p>Distracción de la atención apta para niños</p>
                        </div>
                    </div>
                </div>
        </section>
        <section id="section_5">
        <div class="section_5_1">
                <div class="section_5_1_title">
                    <h1>
                    ¿Quién creó el juego? 
                    </h1>
                </div>
                <div class="section_5_1_content">
                    <p>
                    El juego <i> Magic Spheres</i> fue diseñado por un equipo de investigadores del laboratorio VR4Health del <br>Instituto de Psicología de la Universidad de Wroclaw.
                    <br><br>
                    Durante varios años, el equipo ha realizado estudios sobre la aplicación de la realidad virtual para tratar el dolor, y ha creado herramientas para la investigación científica en Polonia y Noruega, al tiempo que ha popularizado el conocimiento y la aplicación de nuevas tecnologías en diferentes áreas de la psicología. 
                    </p>
                    <p>
                    <i> Magic Spheres </i> es el resultado de muchos años de trabajo y experiencia en investigación experimental –tanto en el laboratorio como en hospitales− sobre la posible aplicación de las nuevas tecnologías en psicología. 
                    </p>
                </div>
                <div class="section_5_2_content">
                    <div class="section_5_2_content_1">
                        <div class="section_5_2_content_title">
                            <p>Nuevas tecnologías bajo estudio</p>
                        </div>
                        <div class="section_5_2_content_body">
                            <ul>
                                <li><p>Tecnología VR </p></li>
                                <li><p> <b>Juegos 2D </b></p></li>
                                <li><p>HRV Biofeedback</p></li>
                                <li><p>Ejercicios de respiración</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="section_5_2_content_2">
                        <div class="section_5_2_content_title">
                            <p>Áreas de aplicación investigadas </p>
                        </div>
                        <div class="section_5_2_content_body">
                            <ul>
                                <li>
                                    <p><b>Reducción del dolor de corta duración en niños </b></p>
                                </li>
                                <li>
                                    <p>Reducción del dolor crónico en adultos y personas de la tercera edad </p>
                                </li>
                                <li>
                                    <p>Entrenamiento cognitivo en personas de la tercera edad </p>
                                </li>
                                <li>
                                    <p>Percepción del propio cuerpo</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section_5_2_content_3">
                        <div class="section_5_2_content_title">
                            <p>¿Quién se puede beneficiar con los resultados de la investigación? </p> 
                        </div>
                        <div class="section_5_2_content_body">
                            <ul>
                                <li>
                                    <p><b>Niños</b></p>
                                </li>
                                <li>
                                    <p>Adultos</p>
                                </li>
                                <li>
                                    <p>Personas de la tercera edad</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="section_6">
            <h1>
                Zaufali nam
            </h1>
        </section> -->
        <section id="section_7">
            <h1>Contacto</h1>
            <div class="section_7_content">
                <div class="section_7_content_containter_1">
                    <p class="section_7_content_1">VR4Health Lab</p>
                    <p class="section_7_content_2">Instituto de Psicología, Universidad de Wroclaw </p>
                    <p class="section_7_content_3">Calle: Wł. 1, 50-527 Wroclaw </p>
                </div>
                <p class="section_7_content_4">magic.spheres@uwr.edu.pl</p>
            </div>
        </section>

    </div>
    <div class="popup" id="popup-1">
        <div class="overlay">
            <div class="popup-content">
                <div class="close-btn" onclick="tooglePopupOff()" >&times;</div>
                <p id="popup-title">TITLE</p>
                <a id="popup-link" href="http://magicspheres.uni.wroc.pl/"><p id="popup-link-p">http://magicspheres.uni.wroc.pl/</p></a>
                <p id="popup-content">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati repellat ratione ut iure, temporibus optio dignissimos laborum aut expedita ab et error, aliquid repellendus praesentium ex eius, magni reprehenderit ipsa doloribus tenetur blanditiis. Explicabo ea impedit doloribus libero eaque possimus, omnis id optio aliquid necessitatibus! A rerum unde magnam ad.
                </p>
            </div>
        </div>
    </div>
</body>
</html>