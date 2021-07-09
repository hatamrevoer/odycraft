<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONT -->
    <link rel="icon" href="https://i.pinimg.com/originals/aa/37/cf/aa37cf563f3af66c920fa79da5de5d03.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <!-- END FONT -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.css" rel="stylesheet">
    <!--load all styles -->
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/brands.css" rel="stylesheet">
    <link href="css/solid.css" rel="stylesheet">
    <title>ODY CRAFT | FORUM</title>
</head>
<style>
    .blink {
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
    }

    @keyframes blink-animation {
        to {
            visibility: hidden;
        }
    }

    @-webkit-keyframes blink-animation {
        to {
            visibility: hidden;
        }
    }

    #back-to-top {
        color: violet;
        padding: 8px 10px;
        font-size: 24px;
        text-decoration: none;
    }

    .back-to-top {
        position: fixed !important;
        position: absolute;
        bottom: 20px;
        right: 20px;
        z-index: 999
    }
</style>

<body style="background-image: url('https://images6.alphacoders.com/108/thumb-1920-1082090.jpg');">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/Logo.png" title="odycraft" width="155"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><b>BERANDA</b></a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link" href="#about"><b>TENTANG</b></a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link" href="#trending"><b>TRENDING</b></a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link" href="#developer"><b>KONTAK</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </nav>
    <!--END NAVBAR-->

    <!--JUMBOTRON-->
        <div class="h-100 p-5 text-white bg-dark">
            <h2>Selamat datang! <button class="btn btn-primary" type="button" onclick="window.location.href = 'https://www.facebook.com/profile.php?id=100068514830286';">Silahkan bertanya disini!</button></h2>
            <p>Dan terima kasih anda telah berkunjung di forum ini!<br>Join minecraft copy alamat dan pastekan alamat server minecraftnya<br>Dibawah sini!<br>IP:<span class="blink">
                    <script language="javascript" type="text/javascript">
                        var teks = "odycraft.mc-alias.com"
                        var speed = 20

                        if (document.all || document.getElementById) {
                            document.write('<span id="highlight">' + teks + '</span>')
                            var storetext = document.getElementById ? document.getElementById("highlight") :
                                document.all.highlight
                        } else document.write(text)
                        var hex = new Array("00", "14", "28", "3C", "50", "64", "78", "8C", "A0", "B4", "C8", "DC", "F0")

                        var r = 1
                        var g = 1
                        var b = 1
                        var seq = 1

                        function changetext() {
                            rainbow = "#" + hex[r] + hex[g] + hex[b]
                            storetext.style.color = rainbow
                        }

                        function change() {
                            if (seq == 6) {
                                b--
                                if (b == 0)
                                    seq = 1
                            }
                            if (seq == 5) {
                                r++
                                if (r == 12)
                                    seq = 6
                            }
                            if (seq == 4) {
                                g--
                                if (g == 0)
                                    seq = 5
                            }
                            if (seq == 3) {
                                b++
                                if (b == 12)
                                    seq = 4
                            }
                            if (seq == 2) {
                                r--
                                if (r == 0)
                                    seq = 3
                            }
                            if (seq == 1) {
                                g++
                                if (g == 12)
                                    seq = 2
                            }
                            changetext()
                        }

                        function starteffect() {
                            if (document.all || document.getElementById)
                                flash = setInterval("change()", speed)
                        }

                        starteffect()
                    </script>
                </span></p>
        </div>
    </div>
    <!-- END JUMBOTRON -->
    <!-- JUMBOTRON TENTANG -->
    <section id="about" class="text-center">
            <div class=" h-100 p-5 bg-success" style="color:black;">
                <br><br><br><br><br><br><br><br><br><br><br>
                <h2><u>TENTANG KAMI</u></h2>
                <p>Ody craft adalah forum dan server minecraft pribadi maupun publik,<br>Ody craft juga adalah hiburan yang berada dalam game minecraft,<br>Kamu dapat memainkan server ody craft di minecraft java khususnya komputer atau laptop!<br>Ody craft juga menyediakan sebuah rank game minecraft yang mungkin anda ingin miliki!<br>Anda juga bisa membeli rank minecraft berupa vip admin hanya di forum ody craft!</p>
                <br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON TENTANG -->

    <!-- JUMBOTRON TRENDING -->
    <section id="trending" class="text-center">
            <div class="h-100 p-5" style="color:white;background-color:#34495E;">
                <br><br><br><br><br><br><br><br><br><br><br>
                <h2><u>TRENDING</u></h2>
                <img src="img/Minecraft_Account_Premium_Full_Access_with_VIP_rank_Hypixel-removebg-preview.png" width="255" height="300" style="border:55px solid transparent; border-image: url('img/pngtree-creative-atmosphere-technology-cool-border-element-png-image_585966-removebg-preview.png') 25% round;" title="VIP+">
                <img src="img/images-removebg-preview (1).png" width="255" height="300" style="border:55px solid transparent; border-image: url('img/pngtree-creative-atmosphere-technology-cool-border-element-png-image_585966-removebg-preview.png') 25% round;" title="MVP">
                <img src="img/941-9417310_art-artist-digital-digitalart-digitalartist-minecraft-money-removebg-preview.png" width="255" height="300" style="border:55px solid transparent; border-image: url('img/pngtree-creative-atmosphere-technology-cool-border-element-png-image_585966-removebg-preview.png') 25% round;" title="VIP+">
                <br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON TRENDING -->

    <!-- JUMBOTRON DEVELOPER -->
    <section id="developer" class="text-center">
            <div class="h-100 p-5" style="color:black;background-color:#148F77;">
                <br><br><br><br><br><br><br><br><br><br><br>
                <h2><u>Web developer & Web Design</u></h2>
                <img src="img/148175017_150392406898592_7481337234542245721_n-removebg-preview.png" width="450" height="455" title="VIP+">
                <p>Seorang yang membuat website forum ody craft<br>Dia juga seorang pembuat server ody craft!</p>
                <a href="https://www.facebook.com/profile.php?id=100068514830286" style="color:black;"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/golda_s4ns/" style="color:black;"><i class="fab fa-fw fa-instagram"></i></a>
                <a href="https://github.com/hatamrevoer" style="color:black;"><i class="fab fa-github"></i></a>
                <br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </section>
    <!-- END JUMBOTRON DEVELOPER -->

    <!--FOOTER-->
    <div class="text-center">
        <div class="h-100 p-1" style="color:black;background-color:#8E44AD;">
            <h3>©COPYRIGHT BY ODYCRAFT ALL RIGHT RESERVED❤️</h3>

        </div>
    </div>
    <div class='back-to-top'>
        <a href='#' id='back-to-top' title='back to top'>🔺</a>
        <!-- END FOOTER -->
</body>
<script defer src="js/brands.js"></script>
<script defer src="js/solid.js"></script>
<script defer src="js/fontawesome.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script>
    setInterval(function() {
        $(".berkedip").toggle();
    }, 300);
</script>

</html>