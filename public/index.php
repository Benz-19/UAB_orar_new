<?php
include "../src/config/config.php";
include "includes/autoloader.inc.php";

$db = new Database($server, $username, $password, $dbname);
$conn = $db->getConnection();


if ($conn) {
    echo "yes";
}

?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets//images/uni-logo.jpg" type="image/x-icon">
    <?php include "../public/includes/adds.php"; ?>
    <!-- CORE -->
    <link href="./assets/css/index.css" rel="stylesheet">
    <title>Oeconomica</title>
</head>

<body>
    <!-- Header -->
    <?php include "./includes/header.php"; ?>

    <main>
        <!-- HERO SECTION -->
        <section id="hero-sec">
            <article class="hero-cont">
                <img src="./assets/videos/edu-2.gif" alt="GIF de exemplu" loading="lazy" class="hero-img">
            </article>

            <article class="hero-section hero-info">
                <div id="taglineCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1>Simplifică-ți călătoria academică</h1>
                            <p class="subheading">Gestionează-ți programul fără efort.</p>
                        </div>
                        <div class="carousel-item">
                            <h1>Planifică înainte, realizează mai mult</h1>
                            <p class="subheading">Rămâi organizat și concentrează-te pe ceea ce contează cel mai mult.</p>
                        </div>
                        <div class="carousel-item">
                            <h1>Cursurile tale, simplificate</h1>
                            <p class="subheading">Accesează-ți programul oricând, oriunde.</p>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#taglineCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#taglineCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Următorul</span>
                    </a>
                </div>
            </article>
        </section>

        <!-- ABOUT -->
        <section class="about-section py-5 bg-light mt-4">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Side: Image -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="./assets/images/calendar_2693507.png" alt="Descrierea platformei" class="img-fluid rounded shadow calender">
                    </div>

                    <!-- Right Side: Text -->
                    <div class="col-md-6">
                        <h2 class="text-warning mb-4">Despre Oeconomica</h2>
                        <p class="text-muted">
                            Oeconomica este o platformă inteligentă proiectată pentru a simplifica planificarea și gestionarea academică.
                        </p>
                        <p class="text-muted">
                            Fie că ești student, profesor sau administrator, Oeconomica face procesul eficient și fără efort.
                        </p>
                        <a href="#features" class="btn btn-color mt-3">Află mai multe</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- FACULTIES -->
        <section id="faculty-sec">
            <h2 class="display-6 text-center">ORARUL STUDENȚILOR</h2>
            <section class="faculty-card container-fluid d-flex">
                <article class="card">
                    <img src="./assets/images/Faculty-letters.png" class="card-img-top" alt="Imagine Litere">
                    <div class="card-body">
                        <h5 class="card-title">Facultatea de Litere</h5>
                        <p class="card-text">Un exemplu rapid de text pentru a construi pe titlul cardului și pentru a completa conținutul principal.</p>
                        <a href="#" class="btn btn-color">Deschide</a>
                    </div>
                </article>
                <article class="card">
                    <img src="./assets/images/Faculty-eco.png" class="card-img-top" alt="Imagine Economie">
                    <div class="card-body">
                        <h5 class="card-title">Facultatea de Economie</h5>
                        <p class="card-text">Un exemplu rapid de text pentru a construi pe titlul cardului și pentru a completa conținutul principal.</p>
                        <a href="#" class="btn btn-color">Deschide</a>
                    </div>
                </article>
                <article class="card">
                    <img src="./assets/images/Faculty-eng-info.png" class="card-img-top" alt="Imagine Inginerie">
                    <div class="card-body">
                        <h5 class="card-title">Facultatea de Inginerie și Informatică</h5>
                        <p class="card-text">Un exemplu rapid de text pentru a construi pe titlul cardului și pentru a completa conținutul principal.</p>
                        <a href="./schedules/students/F_eng_comp.php" class="btn btn-color">Deschide</a>
                    </div>
                </article>
                <article class="card">
                    <img src="./assets/images/Faculty-law-social.png" class="card-img-top" alt="Imagine Drept">
                    <div class="card-body">
                        <h5 class="card-title">Facultatea de Drept și Științe Sociale</h5>
                        <p class="card-text">Un exemplu rapid de text pentru a construi pe titlul cardului și pentru a completa conținutul principal.</p>
                        <a href="#" class="btn btn-color">Deschide</a>
                    </div>
                </article>
                <article class="card">
                    <img src="./assets/images/Faculty-orth.png" class="card-img-top" alt="Imagine Teologie">
                    <div class="card-body">
                        <h5 class="card-title">Facultatea de Teologie Ortodoxă</h5>
                        <p class="card-text">Un exemplu rapid de text pentru a construi pe titlul cardului și pentru a completa conținutul principal.</p>
                        <a href="#" class="btn btn-color">Deschide</a>
                    </div>
                </article>
                <article class="card">
                    <img src="./assets/images/Doctorate-stud.png" class="card-img-top" alt="Imagine Doctorat">
                    <div class="card-body">
                        <h5 class="card-title">Studii Doctorale</h5>
                        <p class="card-text">Un exemplu rapid de text pentru a construi pe titlul cardului și pentru a completa conținutul principal.</p>
                        <a href="#" class="btn btn-color">Deschide</a>
                    </div>
                </article>
            </section>
        </section>

        <!-- OTHER SCHEDULES -->
        <section id="others-sec">
            <h2 class="display-6 text-center">ALTE ORARE</h2>
            <section class="others-card container-fluid d-flex">
                <article class="card">
                    <img src="./assets/images/teaching.png" class="card-img-top" alt="Imagine Profesori">
                    <div class="card-body">
                        <h5 class="card-title">Profesori</h5>
                        <p class="card-text">Un exemplu rapid de text pentru a construi pe titlul cardului și pentru a completa conținutul principal.</p>
                        <a href="#" class="btn btn-color">Deschide</a>
                    </div>
                </article>
                <article class="card">
                    <img src="./assets/images/buildings.png" class="card-img-top" alt="Imagine Clădiri">
                    <div class="card-body">
                        <h5 class="card-title">Sali</h5>
                        <p class="card-text">Un exemplu rapid de text pentru a construi pe titlul cardului și pentru a completa conținutul principal.</p>
                        <a href="#" class="btn btn-color">Deschide</a>
                    </div>
                </article>
            </section>
        </section>

        <!-- REVIEWS -->
        <section class="review-section py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Ne prețuim feedback-ul dvs.</h2>
                <p class="text-center text-muted mb-5">Spuneți-ne cum putem îmbunătăți sau ce vă place la Oeconomica!</p>

                <form id="reviewForm">
                    <div class="row">
                        <!-- Name Field -->
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Numele dumneavoastră</label>
                            <input type="text" class="form-control" id="name" placeholder="Introduceți numele dvs." required>
                        </div>
                        <!-- Email Field -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Adresa dumneavoastră de email</label>
                            <input type="email" class="form-control" id="email" placeholder="Introduceți email-ul dvs." required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Rating Field -->
                        <div class="col-md-6 mb-3">
                            <label for="rating" class="form-label">Evaluarea dumneavoastră</label>
                            <select class="form-control" id="rating" required>
                                <option value="" disabled selected>Notați-ne</option>
                                <option value="1">1 - Foarte slab</option>
                                <option value="2">2 - Slab</option>
                                <option value="3">3 - Bun</option>
                                <option value="4">4 - Foarte bun</option>
                                <option value="5">5 - Excelent</option>
                            </select>
                        </div>
                        <!-- Suggestion Field -->
                        <div class="col-md-6 mb-3">
                            <label for="suggestions" class="form-label">Sugestii</label>
                            <textarea class="form-control" id="suggestions" rows="3" placeholder="Împărtășiți-ne gândurile dvs." required></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3">Trimiteți feedback</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include "./includes/footer.php"; ?>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core JS -->
    <script src="./assets/js/light_dark_mode.js"></script>
    <script src="./assets/js/menuBtn.js"></script>
    <script src="./assets/js/copyright.js"></script>
</body>

</html>