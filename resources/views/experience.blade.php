<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />

        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <title>myBiodata</title>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/portfolio')}}">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/experience')}}">Experience</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To My Homepage</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            </div>
        </header>
     <!-- Experience-->
     <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Experience</h2>
                    <h3 class="section-subheading text-muted">Inilah Experience saya di SMK Taruna Bhakti</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>juni 2018 - april 2019</h4>
                                <h4 class="subheading">Kelas X</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Dikelas sepuluh, pembelajaran codingg mulai dari html dan css, pertama kali membuat biodata di web, gw berasa keren banget.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4> juni 2019 - april 2020</h4>
                                <h4 class="subheading">Kelas XI</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Dikelas sebelas, mengulangi pelajaran di kelas sepuluh, tetapi tambahannya javascript dan java, dan sudah membuat kasir, kalkulator, dll.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4> juni 2020 - juli 2020</h4>
                                <h4 class="subheading">Kelas XII</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">nah dikelas dua belas ini selalu dipusingi dengan tugas, saya juga sudah mempelajari laravel dan php, dan sudah banyak projek yang dibuat, dan nanti di bulan agustus saya akan magang.</p></div>
                        </div>
                    </li>
         <!-- Bootstrap core JS-->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>