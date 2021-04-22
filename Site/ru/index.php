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
                    <a href="#section_1" onclick="toggleMenu()"><li>Об игре</li></a>
                    <a href="#section_2" onclick="toggleMenu()"><li>Инструкция игры</li></a>
                    <a href="#section_3" onclick="toggleMenu()"><li>Почему это важно</li></a>
                    <a href="#section_4" onclick="toggleMenu()"><li>О боли</li></a>
                    <a href="#section_5" onclick="toggleMenu()"><li>О нас</li></a>
                    <!-- <li><a href="#section_6">Zaufali nam</a></li> -->
                    <a href="#section_7" onclick="toggleMenu()"><li>Контакт</li></a>
                    <div class="nav_dropdown_language">
                        <div class="dropbtn"><img src="../media/multi/Russia.png" alt=""></div>
                        <div class="nav_dropdown_language_content">
                            <a href="../"><img src="../media/multi/Polish.png" alt="Polish lang"></a>
                            <a href="../en"><img src="../media/multi/English.png" alt="English lang"></a>
                            <a href="../es"><img src="../media/multi/Espaniol.png" alt="Spanish lang"></a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="header_mail">Контакт:<br> magic.spheres@uwr.edu.pl</div>
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
                <h4>Игра отвлекающая внимание от уколов</h4>
                <div class="inner_margin">
                    <p>Помоги ребёнку во время укола! Измени отношение ребёнка к медицинским процедурам! Для этого достаточно воспользоваться своим телефоном за несколько минут до и во время  самой процедуры. В приложении <b>Magic Spheres</b> есть 5 сцен и несколько уровней сложности, целью которых является <b>отвлечь внимание ребёнка от уколов, а также уменьшить болевые ощущения и тревогу. </b> <br>
                    Скачай приложение Magic Spheres и проверь, как отвлечение внимания ребёнка от уколов уменьшит его боль и стресс.
                    </p>
                    <div class="download_containter">
                        <div class="download_text">
                        Скачай полную версию игры
                        </div>
                        <a href='https://play.google.com/store/apps/details?id=com.UWr.MagicSpheres&hl=pl&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                            <img class="download_button" alt='Доступно в Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/ru_badge_web_generic.png'/>
                        </a>
                    </div>
                    <a href="#section_2">
                        <div class="check_game">
                            <p>
                            Как выглядит игра
                            </p> 
                        </div>
                    </a>
                    <a href="#section_1">  
                        <div class="learn_more">
                           <p>Узнать больше</p>
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
                        <!-- <h1>
                            Dystrakcja uwagi 
                        </h1>
                        <div></div> -->
                        <h1 style="text-align:center !important; width:100%">
                        Отвлечение внимания и потенциал в лечении боли подтверждён исследовательской группой VR4HEALTH LAB
                        </h1>
                    </div>
                    <div class="section_1_1_content">
                        <div class="section_1_1_content_title">
                            <p>
                            Группа исследователей из факультета психологии Вроцлавского Университета уже почти 10 лет проводит исследования над отвлечением внимания от кратковременной боли.
                            </p>
                        </div>
                        <div class="section_1_1_content_timeline">
                            <div class="section_1_1_content_boxes">
                                <div class="section_1_1_content_boxes_1">
                                    <div class="section_1_1_content_boxes_1_containter">
                                        <p>
                                        Результаты последних исследований показали, что оригинальная игра, которая требует одновременного отслеживания нескольких объектов (сильно привлекающая внимание ребёнка):
                                        </p>
                                        <ul>
                                            <li>
                                                <p>
                                                Снизила интенсивность боли на 59% по сравнению с контрольной группой
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                Уровень стресса снизился на 73% в группе из всех 39 детей <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="6"></span>.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <img src="../media/multi/dialog-box.svg" alt="box"> -->
                                    <p class="section_1_1_content_boxes_p">
                                        2017
                                    </p>
                                </div>
                                <div class="section_1_1_content_boxes_2">
                                    <div class="section_1_1_content_boxes_2_containter">
                                        <p>
                                        Похожие результаты были получены в другом исследовании (в группе из 57 детей), в котором дополнительно сравнивались два типа вмешательств в виртуальной реальности (VR). В одной из них дети играли в игру в VR, а в другой –смотрели видео, аналогичное данной игре.
                                        </p>
                                        <ul>
                                            <li>
                                                <p>
                                                Обе группы VR сообщили о значительно более низкой интенсивности боли и стресса по сравнению с контрольной группой.
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                Наблюдалась тенденция к большему снижению боли и стресса среди групп VR у людей, которые активно играли во время процедуры  <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="7"></span>.
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
                        Зачем мы создали <br> Magic Spheres?
                        </h1>
                    </div>
                    <div class="section_1_2_content">
                        <div class="section_1_2_content_child1">
                            <p>
                            Magic Spheres - это ответ на необходимость минимизировать стресс и облегчить боль у детей во время лечения с прининением игл. Результаты предыдущих исследований VR4Health Lab указывают на большой потенциал этой оригинальной игры в отвлечении внимания детей от болевых раздражителей.
                            </p>
                        </div>
                        <div class="section_1_2_content_child2">
                            <p>
                            Учёные до сих пор исследуют, является ли использование VR более эффективным методом, чем использование других цифровых технологий <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="8"></span>, <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="9"></span>, поэтому игра была разработана в 2D-среде.<b> Обезболивающий эффект </b> - во время сдачи крови –<b>подтвердился</b> как для игр на VR <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="10"></span>, <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="11"></span>,<br> так и <b>для игр на других цифровых технологиях </b><span onclick="tooglePopupOn(this.id)" class="link-toogle" id="12"></span>, <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="13"></span>.
                            </p>
                        </div>
                        <div class="section_1_2_content_child3">
                            <p>
                            Чтобы сделать игру как можно проще, она была <b>специально разработана для использования на смартфоне и планшете</b>, так, чтобы и родители, и медицинские работники имели <b>неограниченный доступ к ней без дополнительных затрат.</b>
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
                    Инструкция игры
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
                    Почему стоит скачать <br>Magic Spheres?
                    </h1>
                </div>
                <div class="section_3_1_content">
                    <div class="section_3_1_content_1">
                        <p>В Magic Spheres используется обезболивающий механизм, который заключается в отвлечении внимания ребёнка от болевых раздражителей. Обезболивающий результат был тем сильнее, чем больше внимания ребёнка было приковано к раздражителям, которые отвлекают его внимание от процедуры (например, сдачи крови). Чтобы добиться этой цели, игра была разработана по уже упомянутому принципу отслеживания нескольких объектов, которая привлекает внимание ребёнка больше, чем другие игры. Этот метод отличается от большинства других, которые были использованы в исследованиях отвлечения внимания. Во-первых, она требует постоянного внимания, а не его кратковременного переключения. Во-вторых, требует постоянного отслеживания нескольких объектов одновременно <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="14"></span>. Методика отслеживания нескольких объектов уже была ранее протестирована во время исследования внимания людей разных возрастных групп, в том числе детей раннего возраста <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="15"></span>. 
                        </p>
                    </div>
                    <div class="section_3_1_content_2">
                        <p class="section_3_1_content_2_1">
                        Игра была спроектирована так, чтобы её могли использовать для детей любого возраста. Magic Spheres заключается в запоминании нескольких кратко подсвечивающихся объектов, а затем их поиске среди других движущихся объектов. 
Игра состоит из нескольких уровней. Уровни отличаются друг от друга фоном и количеством летающих объектов, чтобы с каждым пройденным уровнем поддерживать заинтересованность ребёнка и повышать вероятность отвлечения внимания от болевых ощущений.
                        </p>
                        <div class="section_3_1_content_2_divider"></div>
                        <p class="section_3_1_content_2_2">
                        Игра специально разработана для использования во время кратковременной, болезненной процедуры, поэтому рекомендуется использовать её только для этой цели; в качестве короткой игровой тренировки, в течение нескольких минут непосредственно перед процедурой и в течение нескольких минут во время самой процедуры. Это позволит сохранить эффект новизны и максимально сосредоточить внимание ребёнка на задаче, выполняемой в игре. Чем лучше ребёнок освоит игру, тем слабее может быть обезболивающий эффект.
                        </p>
                    </div>
                    <div class="section_3_1_content_3">
                        <div class="section_3_1_content_3_1">
                            <p>
                            Игры была придумана для поддержания психического благополучия детей, родителей и медицинских работников.
                            </p>
                        </div>
                        <div class="section_3_1_content_3_2">
                            <ul>
                                <li><p>Бесплатная</p></li>
                                <li><p>Доступна каждому</p></li>
                                <li><p>Проста в использовании</p></li>
                            </ul>
                        </div>
                        <div class="section_3_1_content_3_3">
                        <p>Использование игры не предполагает участия в научном исследовании.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_3_2">
                <div class="section_3_2_title">
                    <h1>
                    Отвлеките внимание ребенка от боли
                    </h1>
                    <h4>
                    Протестируй игру и уменьш тревогу ребёнка перед процедурой.
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
                    Несколько слов о болевых ощущениях, детских страхах и способе избавиться от боязни уколов...
                    </h1>
                </div>
                <div class="section_4_1_content">
                    <div class="section_4_1_content_1">
                        <p> <b>Боль</b> это неприятное сенсорное и эмоциональное переживание, которое испытывают даже младенцы. Переживание боли субъективно, а переносимость боли развивается уже с раннего детства, а точнее начиная с первых телесных травм.  <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="1"></span>. Дети уже с самого рождения обречены на боль, вызванную уколами. У здоровых детей контакт с иглой чаще всего происходит во время вакцинации, которая может быть проведена больше дюжины раз до наступления 18 лет. У детей, нуждающихся в постоянном лечении, это происходит ещё чаще в связи с обязательным прохождением таких процедур, как сдача крови, уколы, внутривенные и артериальные инъекции. Помимо негативного воздействия, боль и тревога делают лечение с применением игл очень тяжёлым как для родителей, так и для медицинских работников  <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="3"></span>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="section_4_2_content">
                    <div class="section_4_2_content_1">
                        <div class="section_4_2_content_1_container">
                        <img src="../media/multi/syringe_512.png" alt="">
                        <ul>
                            <li><p>Прививки</p></li>
                            <li><p>Сдача крови</p></li>
                            <li><p>Стационарное лечение</p></li>
                            <li><p>Стоматологическое лечение</p></li>
                        </ul>
                        </div>
                        <p class="section_4_2_content_1_2">
                            <b>Для детей уколы являются одним из наиболее страшных процедур </b>
                        </p>
                    </div>
                    <div class="section_4_2_content_2">
                        <img src="../media/multi/cry_baby_1024_ru.png" alt="">
                        <p>
                        Как себя чувствует ребёнок во время процедуры?
                        </p>
                    </div>
                    <div class="section_4_2_content_3">
                        <p class="section_4_2_content_3_1"><b>Пренебрежение по отношению к боли и стрессу во время процедур могут:</b></p>
                        <ul>
                            <li><p>Быть причиной негативного отношения к обследованиям</p></li>
                            <li><p>Подавлять желание в дальнейшем принимать участие в медицинских процедурах</p></li>
                            <li><p>Быть причиной избегания медицинских исследований и лечения из-за боязни уколов</p></li>
                            <li><p>Усиливать страх и тревогу</p></li>
                            <li><p>Вызвать боязнь шприцов и уколов (трипанофобию)</p></li>
                            <li><p>Снизить переносимость боли &nbsp;<span onclick="tooglePopupOn(this.id)" class="link-toogle" id="2"></span></p></li>
                        </ul>
                    </div>
                </div>
                <div class="section_4_3">
                    <div class="section_4_3_title">
                        <h1>
                        Как облегчить боль и тревогу ребёнка во время процедуры?
                        </h1>
                    </div>
                </div>
                <div class="section_4_3_content">
                    <div class="section_4_3_content_1">
                        <p>
                        Болевые ощущения и стресс, вызванные уколами, можно уменьшить разными способами. Была подтверждена эффективность использования таких психологических техник, как отвлечение внимания (от источника боли), гипноз, комбинации расслабляющих дыхательных техник и другие техники, заимствованные из когнитивно-поведенческой терапии <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="4"></span>. ​
<br><b>В случае планового лечения с использованием иглы рекомендуется одновременно использовать несколько способов уменьшения болевых ощущений  для каждого ребёнка, таких как <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="5"></span>:</b> 

                        </p>
                    </div>
                    <div class="section_4_3_content_cotainter">
                        <div class="section_4_3_content_cotainter_1">
                            <img src="../media/multi/child_mom.png" alt="child-and-mom">
                            <p>
                            Младенцам: покормить грудью во время процедуры или дать выпить сладкий напиток, например, с сахарозой
                            </p>
                        </div>
                        <div class="section_4_3_content_cotainter_2">
                            <img src="../media/multi/chair.png" alt="chair">
                            <p>Комфортная позиция тела во время процедуры</p>
                        </div>
                        <div class="section_4_3_content_cotainter_3">
                            <img src="../media/multi/krem.png" alt="krem">
                            <p>Местная анастезия</p>
                        </div>
                        <div class="section_4_3_content_cotainter_4">
                            <img src="../media/multi/MagicSpheresLogo.png" alt="">
                            <p>Соответствующее возрасту методы отвлечения внимания</p>
                        </div>
                    </div>
                </div>
        </section>
        <section id="section_5">
        <div class="section_5_1">
                <div class="section_5_1_title">
                    <h1>
                    Кто разработал игру?
                    </h1>
                </div>
                <div class="section_5_1_content">
                    <p>
                    Игра <i> Magic Spheres</i> была разработана командой исследователей Laboratorium VR4Health из <br>факультета психологии Вроцлавского Университета.
                    <br><br>
                    Команда исследователей в течении нескольких лет проводит исследования над использованием виртуальной реальности в лечении боли, создает методики, используемые в научных исследованиях в Польше и Норвегии, а также распространяет сведения о возможностях использования новых технологий в различных областях психологии.
                    </p>
                    <p>
                    <i> Magic Spheres </i> является результатом многолетней работы и опыта в экспериментальных исследованиях - лабораторных и клинических - над возможностями использования новых техногологий в психологии
                    </p>
                </div>
                <div class="section_5_2_content">
                    <div class="section_5_2_content_1">
                        <div class="section_5_2_content_title">
                            <p>Новые технологии </p>
                        </div>
                        <div class="section_5_2_content_body">
                            <ul>
                                <li><p>Технология VR</p></li>
                                <li><p> <b>Игры 2D</b></p></li>
                                <li><p>HRV Biofeedback</p></li>
                                <li><p>Дыхательные техники</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="section_5_2_content_2">
                        <div class="section_5_2_content_title">
                            <p>Проверенные области применения</p>
                        </div>
                        <div class="section_5_2_content_body">
                            <ul>
                                <li>
                                    <p><b>Снижение болевых ощущений у детей</b></p>
                                </li>
                                <li>
                                    <p>Снижение хронической боли у взрослых и пожилых людей</p>
                                </li>
                                <li>
                                    <p>Когнитивная тренировка для пожилых людей</p>
                                </li>
                                <li>
                                    <p>Воспринятие собственного тела</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section_5_2_content_3">
                        <div class="section_5_2_content_title">
                            <p>Кто может воспользоваться результатами исследований?</p> 
                        </div>
                        <div class="section_5_2_content_body">
                            <ul>
                                <li>
                                    <p><b>Дети</b></p>
                                </li>
                                <li>
                                    <p>Взрослые</p>
                                </li>
                                <li>
                                    <p>Пожилые</p>
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
            <h1>Контакт</h1>
            <div class="section_7_content">
                <div class="section_7_content_containter_1">
                    <p class="section_7_content_1">VR4Health Lab</p>
                    <p class="section_7_content_2">Факультет Психологии Вроцлавского Университета</p>
                    <p class="section_7_content_3">г. Вроцлав, 50-527 ул. J. Wł. Dawida 1</p>
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