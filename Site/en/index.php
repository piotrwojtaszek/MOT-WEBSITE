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
                    <a href="#section_1" onclick="toggleMenu()"><li>About the game</li></a>
                    <a href="#section_2" onclick="toggleMenu()"><li>Game instruction</li></a>
                    <a href="#section_3" onclick="toggleMenu()"><li>Why it is worth it</li></a>
                    <a href="#section_4" onclick="toggleMenu()"><li>About pain</li></a>
                    <a href="#section_5" onclick="toggleMenu()"><li>About us</li></a>
                    <!-- <li><a href="#section_6">Zaufali nam</a></li> -->
                    <a href="#section_7" onclick="toggleMenu()"><li>Contact</li></a>
                    <div class="nav_dropdown_language">
                        <div class="dropbtn"><img src="../media/multi/English.png" alt=""></div>
                        <div class="nav_dropdown_language_content">
                            <a href="../"><img src="../media/multi/Polish.png" alt="Polish lang"></a>
                            <a href="../ru"><img src="../media/multi/Russia.png" alt="Russia lang"></a>
                            <a href="../es"><img src="../media/multi/Espaniol.png" alt="Spanish lang"></a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="header_mail">Contact:<br> magic.spheres@uwr.edu.pl</div>
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
                <h4>game designed to distract attention during needle procedures</h4>
                <div class="inner_margin">
                    <p>Support your child during needle procedures. Change your child’s attitude towards medical procedures! You can use your smartphone for this just a few minutes before and during the needle procedure. The app <b>Magic Spheres</b> has five scenarios with several levels of difficulty, which were <b>designed, to divert the child’s attention from the pain. </b> <br>
                    Download the Magic Spheres app and <b>see, how diverting the child’s attention from needle procedures, reduces the pain and stress.</b>
                    </p>
                    <div class="download_containter">
                        <div class="download_text">
                        Download the full version of the game
                        </div>
                        <a href='https://play.google.com/store/apps/details?id=com.UWr.MagicSpheres&hl=en&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                            <img class="download_button" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/>
                        </a>
                    </div>
                    <a href="#section_2">
                        <div class="check_game">
                            <p>
                            See what the game looks like 
                            </p> 
                        </div>
                    </a>
                    <a href="#section_1">  
                        <div class="learn_more">
                           <p>Find out more</p>
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
                        Attention distraction
                        </h1>
                        <div></div>
                        <h4>
                        the potential in pain treatment confirmed by the research team VR4HEALTH LAB 
                        </h4>
                    </div>
                    <div class="section_1_1_content">
                        <div class="section_1_1_content_title">
                            <p>
                            For nearly a decade, researchers from the Institute of Psychology have been carrying out studies on attention diversion from short term pain. 
                            </p>
                        </div>
                        <div class="section_1_1_content_timeline">
                            <div class="section_1_1_content_boxes">
                                <div class="section_1_1_content_boxes_1">
                                    <div class="section_1_1_content_boxes_1_containter">
                                        <p>
                                        Recent research results showed that our game, requiring simultaneous tracking of many objects (strongly engaging the child’s attention): 
                                        </p>
                                        <ul>
                                            <li>
                                                <p>
                                                Reduced pain intensity by 59% in comparison to a control group 
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                Stress levels fell by 73% in the group of all 39 children  <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="6"></span>.
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
                                        A similar effect was obtained in another study (in a group of 57 children), in which additionally two types of interventions with Virtual Reality (VR) were compared. In one, children actively played an analogical game in VR, in the second – they watched films similar to the presented game. 
                                        </p>
                                        <ul>
                                            <li>
                                                <p>
                                                Both VR groups reported significantly lower pain and stress intensity in comparison to the control group. 
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                Between the groups, tendencies for grater pain and stress reduction in individuals actively playing the game during procedures was noticed <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="7"></span>.
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
                        Why did we create  <br> Magic Spheres?
                        </h1>
                    </div>
                    <div class="section_1_2_content">
                        <div class="section_1_2_content_child1">
                            <p>
                            Magic Spheres is the answer to the needs of minimalisation of stress and pain management in children during needle procedures. 
The effects of VR4Health Lab’s earlier studies indicate great potential of our game in diverting child’s attention from painful stimuli. 
 
                            </p>
                        </div>
                        <div class="section_1_2_content_child2">
                            <p>
                            Researchers are still testing if the application of VR is more effective than using other digital technologies <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="8"></span>, <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="9"></span>, that is why the game was designed in a 2D environment.<b> Pain relief effectiveness </b>- during needle procedures - was confirmed for games in VR <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="10"></span>, <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="11"></span>,<br> <b>as well as when using other digital technologies</b> <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="12"></span>, <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="13"></span>.
                            </p>
                        </div>
                        <div class="section_1_2_content_child3">
                            <p>
                            Aiming at the simplest form of use, the game was <b>specially programmed for use on a smartphone and tablet.</b> This is so that both parents and health professionals can have <b>unlimited and independent access to it, without any additional costs.</b>
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
                    Game instruction
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
                    Why is downloading <br>Magic Spheres worth it?
                    </h1>
                </div>
                <div class="section_3_1_content">
                    <div class="section_3_1_content_1">
                        <p>In Magic Spheres a pain relief mechanism was used. It relies on the diversion of children’s attention from painful stimuli. The pain alleviation effect is stronger as the child’s attention is involved in the stimulus, which diverts the attention from the procedure. In order to reach this goal, the game was designed on the previously mentioned basis of tracking multiple items – which engages the child’s attention more than other games. This method is different from most others that have been used in studies of attention diversion. Firstly, it requires constant, uninterrupted attention, and not short term shifts of attention. Secondly, it requires paying attention to many objects simultaneously <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="14"></span>. The method of tracking multiple objects has been tested during research on attention in different age groups, including young children <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="15"></span>. 
                        </p>
                    </div>
                    <div class="section_3_1_content_2">
                        <p class="section_3_1_content_2_1">
                        The game has been designed in a way to enable its use for children of all ages. Magic Spheres consists of various shortly flashing elements, the task is to remember and find them among the other moving objects. The game contains some scenarios, each one has a different background and number of flying objects, so that with each level, the child’s interest can be maintained and the probability of pain distraction can be increased. 
                        </p>
                        <div class="section_3_1_content_2_divider"></div>
                        <p class="section_3_1_content_2_2">
                        The game was developed specifically for use during short term, painful procedures, so it should be used only for this purpose: as a practice for a few minutes, immediately before the procedure and during the procedure. This will enable the novelty effect to be maintained and maximise the child’s attention on the performed task in the game – the better the child masters the game, the weaker the effect of attention diversion of pain may be. 
                        </p>
                    </div>
                    <div class="section_3_1_content_3">
                        <div class="section_3_1_content_3_1">
                            <p>
                            The game was created to support mental well-being of children, parents and health care workers.
                            </p>
                        </div>
                        <div class="section_3_1_content_3_2">
                            <ul>
                                <li><p>Free</p></li>
                                <li><p>Available to everyone</p></li>
                                <li><p>Intuitive in use </p></li>
                            </ul>
                        </div>
                        <div class="section_3_1_content_3_3">
                        <p>Use of the game is not linked with participation in the research.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_3_2">
                <div class="section_3_2_title">
                    <h1>
                    Divert your child’s attention from pain
                    </h1>
                    <h4>
                    Test the game and minimalise child’s distress before a needle procedure.
                    </h4>
                </div>
                <div class="section_3_2_content">
                    <div class="section_3_2_content_1">
                        <div class="section_3_2_content_1_icon">
                            <img src="../media/multi/MagicSpheresLogo.png" alt="Magic_Spheres_Logo">
                        </div>
                        <div class="section_3_2_content_1_store">
                        <a href='https://play.google.com/store/apps/details?id=com.UWr.MagicSpheres&hl=en&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                            <img class="section_3_2_content_1_store_button" alt='pobierz z Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/>
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
                    A few words on pain, children’s fears and ways of disenchanting the fear of needle procedures.
                    </h1>
                </div>
                <div class="section_4_1_content">
                    <div class="section_4_1_content_1">
                        <p><b>Pain</b> is an unpleasant sensory and emotional experience, which is already experienced by infants. The experience of pain is subjective and individualised, and pain tolerance develops from early childhood – from first experiences of bodily injuries <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="1"></span>. Children from birth are exposed to needle procedures. In healthy children this is often through vaccinations, which can be done multiple times up to 18 years of age. In children requiring treatment this happens more often, in connection with the blood draw, injections or venepunctures. Beyond the negative effect on the child – the child’s pain and anxiety make procedures with the use of needles, more stressful for the parents and health care workers <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="3"></span>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="section_4_2_content">
                    <div class="section_4_2_content_1">
                        <div class="section_4_2_content_1_container">
                        <img src="../media/multi/syringe_512.png" alt="">
                        <ul>
                            <li><p>Vaccination</p></li>
                            <li><p>Blood draw</p></li>
                            <li><p>Hospital treatments</p></li>
                            <li><p>Dental treatments </p></li>
                        </ul>
                        </div>
                        <p class="section_4_2_content_1_2">
                            <b>For children, venepuncture Is one of the most frightening treatments</b>
                        </p>
                    </div>
                    <div class="section_4_2_content_2">
                        <img src="../media/multi/cry_baby_1024_en.png" alt="">
                        <p>
                        How does the child feel during the procedure?
                        </p>
                    </div>
                    <div class="section_4_2_content_3">
                        <p class="section_4_2_content_3_1"><b>Untreated pain and stress during procedures may:</b></p>
                        <ul>
                            <li><p>Create a negative attitude towards treatment </p></li>
                            <li><p>Discourage from medical procedures </p></li>
                            <li><p>Cause avoidance of medical tests and treatments due to fear of needles</p></li>
                            <li><p>Intensify fear </p></li>
                            <li><p>Develop needle phobia</p></li>
                            <li><p>Reduce pain tolerance &nbsp;<span onclick="tooglePopupOn(this.id)" class="link-toogle" id="2"></span></p></li>
                        </ul>
                    </div>
                </div>
                <div class="section_4_3">
                    <div class="section_4_3_title">
                        <h1>
                        How to soothe the child’s pain and anxiety during the procedure?
                        </h1>
                    </div>
                </div>
                <div class="section_4_3_content">
                    <div class="section_4_3_content_1">
                        <p>
                        The pain and stress related to needle treatments can be reduced with the help of various methods. Among psychological interventions, the effectiveness of pain distraction (diverting attention from pain), hypnosis, the combination of techniques derived from cognitive-behavioural therapy have all been confirmed  <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="4"></span>. ​
<br><b>In the case of planned needle treatments, it is recommended to provide each child with various forms of pain relief, such as <span onclick="tooglePopupOn(this.id)" class="link-toogle" id="5"></span>:</b> 

                        </p>
                    </div>
                    <div class="section_4_3_content_cotainter">
                        <div class="section_4_3_content_cotainter_1">
                            <img src="../media/multi/child_mom.png" alt="child-and-mom">
                            <p>
                            Baby: breast feeding during treatment or the administration of sweet liquid to drink e.g. with saccharose.
                            </p>
                        </div>
                        <div class="section_4_3_content_cotainter_2">
                            <img src="../media/multi/chair.png" alt="chair">
                            <p>A comfortable position during treatment</p>
                        </div>
                        <div class="section_4_3_content_cotainter_3">
                            <img src="../media/multi/krem.png" alt="krem">
                            <p>Local anaesthesia</p>
                        </div>
                        <div class="section_4_3_content_cotainter_4">
                            <img src="../media/multi/MagicSpheresLogo.png" alt="">
                            <p>Attention distraction suitable for age</p>
                        </div>
                    </div>
                </div>
        </section>
        <section id="section_5">
        <div class="section_5_1">
                <div class="section_5_1_title">
                    <h1>
                    Who created the game?
                    </h1>
                </div>
                <div class="section_5_1_content">
                    <p>
                    The game <i> Magic Spheres</i> was designed by a team of researchers from the VR4Health Laboratory in <br>the Institute of Psychology in the University of Wroclaw. 
                    <br><br>
                    The team of researchers for several years has been conducting research on the application of virtual reality in pain relief, creating tools used in scientific research in Poland and in Norway, and popularising knowledge on the applicability of new technologies in different areas of psychology. 
                    </p>
                    <p>
                    <i> Magic Spheres </i> Spheres is the effect of many years of work and experience in experimental research – laboratory and clinical – on the possible applications of new technologies in psychology.
                    </p>
                </div>
                <div class="section_5_2_content">
                    <div class="section_5_2_content_1">
                        <div class="section_5_2_content_title">
                            <p>New technologies</p>
                        </div>
                        <div class="section_5_2_content_body">
                            <ul>
                                <li><p>VR technology </p></li>
                                <li><p><b>2D games</b></p></li>
                                <li><p>HRV Biofeedback </p></li>
                                <li><p>Breathing exercises </p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="section_5_2_content_2">
                        <div class="section_5_2_content_title">
                            <p>Researched areas of application</p>
                        </div>
                        <div class="section_5_2_content_body">
                            <ul>
                                <li>
                                    <p><b>Reduction of short term pain in children </b></p>
                                </li>
                                <li>
                                    <p>Reduction of chronic pain in adults and seniors</p>
                                </li>
                                <li>
                                    <p>Cognitive training in seniors</p>
                                </li>
                                <li>
                                    <p>Perception of own body </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section_5_2_content_3">
                        <div class="section_5_2_content_title">
                            <p>Who can benefit from the effects of the  research?</p> 
                        </div>
                        <div class="section_5_2_content_body">
                            <ul>
                                <li>
                                    <p><b>Children</b></p>
                                </li>
                                <li>
                                    <p>Adults</p>
                                </li>
                                <li>
                                    <p>Seniors</p>
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
            <h1>Contact</h1>
            <div class="section_7_content">
                <div class="section_7_content_containter_1">
                    <p class="section_7_content_1">VR4Health Lab</p>
                    <p class="section_7_content_2">Institute of Psychology, Wroclaw University </p>
                    <p class="section_7_content_3">Street: Wł. Dawida 1, 50-527 Wroclaw </p>
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