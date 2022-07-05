<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $title ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url() ?>/css/styles.css" rel="stylesheet" />





</head>

<body id="page-top">
    <!-- Navigation-->
    <?php foreach ($header as $h) : ?>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
                    <i class="fa-regular fa-hospital"></i>
                    <?php echo $h['judul_header1'] ?> <span><?php echo $h['judul_header2'] ?><span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link font-weight-bold" href="#portfolio"><?php echo $h['navbar1'] ?></a></li>
                        <li class="nav-item"><a class="nav-link font-weight-bold" href="#team"><?php echo $h['navbar2'] ?></a></li>
                        <li class="nav-item"><a class="nav-link active bg-light text-dark rounded font-weight-bold" href="#loginModal" data-bs-toggle="modal"><?php echo $h['navbar3'] ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead Baru -->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?php echo $h['opening_header1'] ?></div>
                <div class="masthead-heading text-uppercase"> <span class="auto-type"><span></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio"><?php echo $h['opening_header4'] ?></a>
            </div>
        </header>
    <?php endforeach; ?>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <?php foreach ($portfolio as $p) : ?>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $p['nama_portfolio'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $p['deskripsi'] ?><span></h3>
                </div>
            <?php endforeach; ?>

            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <?php foreach ($portfolio1 as $p1) : ?>
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url() . 'assets/portfolio/' . $p1['photo'] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $p1['nama_portfolio'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $p1['deskripsi'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <?php foreach ($portfolio2 as $p2) : ?>
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url() . 'assets/portfolio/' . $p2['photo'] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $p2['nama_portfolio'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $p2['deskripsi'] ?></div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/portfolio/9.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Farmasi</div>
                            <div class="portfolio-caption-subheading text-muted">Obat-obatan dan Alat Kesehatan</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/portfolio/10.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Hemodialisasi</div>
                            <div class="portfolio-caption-subheading text-muted">Pelayanan Cuci Darah</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/portfolio/11.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Rawat Inap</div>
                            <div class="portfolio-caption-subheading text-muted">Pelayanan untuk Observasi, dan Lain-lain.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/portfolio/12.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Radiologi</div>
                            <div class="portfolio-caption-subheading text-muted">Menggunakan Teknologi Canggih</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <?php foreach ($team as $t) : ?>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $t['judul_team'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $t['deskripsi'] ?></h3>
                </div>
            <?php endforeach; ?>

            <div class="row-2 d-flex justify-content-center">
                <div class="col-md-3">
                    <?php foreach ($team1 as $t1) : ?>
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url() . 'assets/team/' . $t1['photo'] ?>" alt="..." />
                            <h4><?php echo $t1['nama'] ?></h4>
                            <p><?php echo $t1['npm'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-md-3">
                    <?php foreach ($team2 as $t2) : ?>
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url() . 'assets/team/' . $t2['photo'] ?>" alt="..." />
                            <h4><?php echo $t2['nama'] ?></h4>
                            <p><?php echo $t2['npm'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-md-3">
                    <?php foreach ($team3 as $t3) : ?>
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url() . 'assets/team/' . $t3['photo'] ?>" alt="..." />
                            <h4><?php echo $t3['nama'] ?></h4>
                            <p><?php echo $t3['npm'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-md-3">
                    <?php foreach ($team4 as $t4) : ?>
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url() . 'assets/team/' . $t4['photo'] ?>" alt="..." />
                            <h4><?php echo $t4['nama'] ?></h4>
                            <p><?php echo $t4['npm'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-3">
                    <?php foreach ($team5 as $t5) : ?>
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url() . 'assets/team/' . $t5['photo'] ?>" alt="..." />
                            <h4><?php echo $t5['nama'] ?></h4>
                            <p><?php echo $t5['npm'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <center>
                    <?php foreach ($header as $h) : ?>
                        <div class="col-lg-4 text-lg-start">Copyright &copy; <b><?php echo $h['judul_header1'] ?> <?php echo $h['judul_header2'] ?> </b><?php echo date("Y"); ?></div>
                    <?php endforeach; ?>
                </center>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php foreach ($portfolio1 as $p1) : ?>
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $p1['nama_portfolio'] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $p1['deskripsi'] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url() . 'assets/portfolio/' . $p1['photo'] ?>" alt="..." />
                                    <p><?php echo $p1['content'] ?></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php foreach ($portfolio2 as $p2) : ?>
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $p2['nama_portfolio'] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $p2['deskripsi'] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url() . 'assets/portfolio/' . $p2['photo'] ?>" alt="..." />
                                    <p><?php echo $p2['content'] ?></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php foreach ($portfolio3 as $p3) : ?>
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $p3['nama_portfolio'] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $p3['deskripsi'] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url() . 'assets/portfolio/' . $p3['photo'] ?>" alt="..." />
                                    <p><?php echo $p3['content'] ?></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php foreach ($portfolio4 as $p4) : ?>
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $p4['nama_portfolio'] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $p4['deskripsi'] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url() . 'assets/portfolio/' . $p4['photo'] ?>" alt="..." />
                                    <p><?php echo $p4['content'] ?></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php foreach ($portfolio5 as $p5) : ?>
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $p5['nama_portfolio'] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $p5['deskripsi'] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url() . 'assets/portfolio/' . $p5['photo'] ?>" alt="..." />
                                    <p><?php echo $p5['content'] ?>
                                    </p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php foreach ($portfolio6 as $p6) : ?>
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $p6['nama_portfolio'] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $p6['deskripsi'] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url() . 'assets/portfolio/' . $p6['photo'] ?>" alt="..." />
                                    <p><?php echo $p6['content'] ?></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase text-center">Login</h2>
                                <p class="item-intro text-muted text-center">Silahkan Login Terlebih Dahulu.</p>
                                <div class="row">

                                    <div class="col-lg-12 mt-3">
                                        <div class="p-10">
                                            <?php echo $this->session->flashdata('pesan') ?> <form class="user" method="POST" action="<?php echo base_url('Welcome') ?>">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Enter Username..." name="username">
                                                    <?php echo form_error('username', '<div class="text small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                                    <?php echo form_error('password', '<div class="text small text-danger"></div>') ?>
                                                </div>

                                                <hr>
                                                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>



                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <center class="mt-5 mb-3">
                                    <button class="btn btn-danger btn-user " data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Tutup
                                    </button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url() ?>/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- Ditambahin 4 -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('.auto-type', {

            strings: [<?php foreach ($header as $h) : ?> "", "<?php echo $h['opening_header2'] ?>", "<?php echo $h['opening_header3'] ?>"
                <?php endforeach; ?>
            ],

            typeSpeed: 70,
            backSpeed: 70,
            loop: true
        });
    </script>
    <!-- Ditambahin 4 -->
</body>

</html>