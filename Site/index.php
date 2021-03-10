<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>
    <ul class="topnav">
        <li><a href="#kontakt">Kontakt</a></li>
        <li><a href="#zaufali">Zaufali nam</a></li>
        <li><a href="#onas">O nas</a></li>
        <li><a href="#dlaczego">Dlaczego warto</a></li>
        <li><a href="#instrukcja">Instrukcja gry</a></li>
        <li><a href="#idea">Idea gry</a></li>
    </ul>
    <div class="wrapper">

        <video id="videoBG" autoplay muted loop>
            <source src="media/vid/bgloop.mp4" type="video/mp4">
        </video>

        <section id="idea">
            <h4 class="section-title">IDEA GRY</h4>
            <div class="div-left">
                <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis nobis est pariatur expedita repudiandae cumque unde quaerat, consequuntur sapiente. Dolorem veritatis molestiae eaque sed! Temporibus vitae totam eius nemo ratione tempore sunt fugiat autem. Et, ullam sunt cupiditate doloremque provident reprehenderit nam beatae, voluptatum praesentium illum ipsum fugit. Sunt, rerum.
                </p>
            </div>
            <div class="div-right">
                <img class="image1"src="media/img/screen1.png" alt="Screen">
            </div>
        </section>
        <section id="instrukcja">
            <h4 class="section-title">INSTRUKCJA GRY</h4>
            <div class="div-left">
                <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis nobis est pariatur expedita repudiandae cumque unde quaerat, consequuntur sapiente. Dolorem veritatis molestiae eaque sed! Temporibus vitae totam eius nemo ratione tempore sunt fugiat autem. Et, ullam sunt cupiditate doloremque provident reprehenderit nam beatae, voluptatum praesentium illum ipsum fugit. Sunt, rerum.
                </p>
            </div>
            <div class="div-right">
                <img class="image1"src="media/img/screen1.png" alt="Screen">
            </div>
        </section>
        <section id="dlaczego">
            <h4 class="section-title">DLACZEGO WARTO</h4>
            <div class="div-left">
                <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis nobis est pariatur expedita repudiandae cumque unde quaerat, consequuntur sapiente. Dolorem veritatis molestiae eaque sed! Temporibus vitae totam eius nemo ratione tempore sunt fugiat autem. Et, ullam sunt cupiditate doloremque provident reprehenderit nam beatae, voluptatum praesentium illum ipsum fugit. Sunt, rerum.
                </p>
            </div>
            <div class="div-right">
                <img class="image1"src="media/img/screen1.png" alt="Screen">
            </div>
        </section>
        <section id="onas">
            <h4 class="section-title">O NAS</h4>
            <div class="div-left">
                <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis nobis est pariatur expedita repudiandae cumque unde quaerat, consequuntur sapiente. Dolorem veritatis molestiae eaque sed! Temporibus vitae totam eius nemo ratione tempore sunt fugiat autem. Et, ullam sunt cupiditate doloremque provident reprehenderit nam beatae, voluptatum praesentium illum ipsum fugit. Sunt, rerum.
                </p>
            </div>
            <div class="div-right">
                <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto perferendis veniam delectus sint qui! Blanditiis, ea temporibus, minima cum magni dolor inventore, explicabo doloribus soluta veniam officiis et reiciendis suscipit.
                </p> 
            </div>
        </section>
        <section id="zaufali">
            <h4 class="section-title">ZAUFALI NAM</h4>
            <div class="div-left">
                <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis nobis est pariatur expedita repudiandae cumque unde quaerat, consequuntur sapiente. Dolorem veritatis molestiae eaque sed! Temporibus vitae totam eius nemo ratione tempore sunt fugiat autem. Et, ullam sunt cupiditate doloremque provident reprehenderit nam beatae, voluptatum praesentium illum ipsum fugit. Sunt, rerum.
                </p>
            </div>
            <div class="div-right">
                <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto perferendis veniam delectus sint qui! Blanditiis, ea temporibus, minima cum magni dolor inventore, explicabo doloribus soluta veniam officiis et reiciendis suscipit.
                </p> 
            </div>
        </section> 
        <section id="kontakt">
            <h4 class="section-title">KONTAKT</h4>
            <div class="div-left">
                <p>
                            NAPISZ DO NAS
                </p>
            </div>
            <div class="div-right">
                <form class="contact-form "action="contactform.php" method="POST">
                    <input type="text" name="name" placeholder="Full name">
                    <input type="text" name="mail" placeholder="Your e-mail">
                    <textarea name="message" placeholder="Message"></textarea>
                    <button type="submit" name="submit">SEND MAIL</button>
                </form>
            </div>
        </section> 
</body>
</html>