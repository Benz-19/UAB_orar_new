<?php
include "../../../src/config/generateScheduleTitle.php";
include "../../../src/config/genTable.php";
include "../../../src/config/config.php";
include "../../../src/classes/database.class.php";
include "../../../src/classes/department.class.php";
include "../../../src/classes/schedules.class.php";
include "../../../src/classes/faculties.class.php";




if (isset($_POST["submit"])) {
    $department = $_POST["department"];
    $year = $_POST["year"];
    $group = $_POST["group"];

    if (empty($department) || empty($year) || empty($group)) {
        echo "Ensure that all fields are filled up.";
        exit();
    } else {
        // Initialize database connection
        $db = new Database;
        $db->Connection();

        // Get department ID
        $dept = new Department;
        $departmentId = $dept->getDepartmentId($department);

        // Get Schedule info
        $scheduleObj = new Schedule;

        if ($departmentId) {
            // Generate the title based on inputs
            $title = generateScheduleTitle($department, $year, $group);

            // Fetch the schedule
            $schedule = $scheduleObj->getSchedule($departmentId, $title);

            if (!empty($schedule)) {
                // Get the file path from the schedule
                $filePath = $schedule[0]['file_path'];

                if (file_exists($filePath)) {
                    // Generate HTML table from Excel file
                    $htmlTable = readExcelToHTMLTable($filePath);
                } else {
                    $htmlTable = "The file does not exist.";
                }
            } else {
                $htmlTable = "No schedule found for the selected criteria.";
            }
        } else {
            $htmlTable = "Invalid department selected.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280">
    <link rel="shortcut icon" href="../../assets/images/uni-logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/schedules.css">
    <link rel="stylesheet" href="../../assets/css/index.css">

    <?php include "../includes/addsSchedules.php"; ?>
    <title>Facultatea de Inginerie și Informatică</title>
</head>

<body>
    <!-- HEADER -->
    <?php include "../includes/headerSchedules.php"; ?>


    <section id="content-1">

        <!-- HERO SECTION -->
        <article id="hero-sec">
            <article class="hero-cont">
                <img src="../images/Faculty-eng-info.png" alt="GIF de exemplu" loading="lazy" class="hero-img">
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
        </article>

        <article class="form-cont">
            <div class="form-container">
                <form method="POST">
                    <h2 class="text-center mb-4">Selectare Orare</h2>

                    <!-- Department Dropdown -->
                    <div class="mb-3">
                        <label for="department" class="form-label">Selectați Department: </label>
                        <select class="form-select" name="department" id="department" required>
                            <option value=""></option>
                            <option value="">Alegeți Departmentul</option>
                            <option value="informatica">informatica</option>
                            <option value="inginerie">Inginerie Mecanică</option>
                            <option value="finante">Finanțe</option>
                            <option value="drept">Drept</option>
                        </select>
                    </div>

                    <!-- Year of Study Dropdown -->
                    <div class="mb-3 d-none" id="year-container">
                        <label for="year" class="form-label">Selectați Anul de Studii: </label>
                        <select class="form-select" name="year" id="year" required>
                            <option value=""></option>
                            <option value="">Alegeți Anul</option>
                            <option value="1">Anul I</option>
                            <option value="2">Anul II</option>
                            <option value="3">Anul III</option>
                            <option value="4">Anul IV</option>
                        </select>
                    </div>

                    <!-- Group Dropdown -->
                    <div class="mb-3 d-none" id="group-container">
                        <label for="group" class="form-label">Selectați Grupa: </label>
                        <select class="form-select" name="group" id="group" required>
                            <option value=""></option>
                            <option value="">Alegeți Grupa</option>
                            <option value="I">Grupa I</option>
                            <option value="II">Grupa II</option>
                            <option value="III">Grupa III</option>
                            <option value="IV">Grupa IV</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-40" name="submit" id="submitBtn">Vizualizați Orarul</button>
                    </div>
                </form>

                <!-- Display Schedule -->
                <?php if (isset($htmlTable)) : ?>
                    <div class="schedule-output mt-4">
                        <h2 class="text-center mb-4">Timetable</h2>
                        <?= $htmlTable ?>
                        <?php if (isset($filePath) && file_exists($filePath)) : ?>
                            <div class="text-center mt-3">
                                <a href="<?= $filePath ?>" class="btn btn-success" download>Download Timetable</a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
        </article>
    </section>

    <!-- FOOTER -->
    <?php include "../includes/footerSchedules.php"; ?>


    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const department = document.getElementById("department");
        const yearContainer = document.getElementById("year-container");
        const year = document.getElementById("year");
        const groupContainer = document.getElementById("group-container");
        const group = document.getElementById("group");
        const submitBtn = document.getElementById("submitBtn");

        // Show year dropdown when department is selected
        department.addEventListener("change", function() {
            if (department.value !== "") {
                yearContainer.classList.remove("d-none");
            } else {
                yearContainer.classList.add("d-none");
                groupContainer.classList.add("d-none");
                submitBtn.disabled = true;
            }
        });

        // Show group dropdown when year is selected
        year.addEventListener("change", function() {
            if (year.value !== "") {
                groupContainer.classList.remove("d-none");
            } else {
                groupContainer.classList.add("d-none");
                submitBtn.disabled = true;
            }
        });

        // Enable submit button when group is selected
        group.addEventListener("change", function() {
            if (group.value !== "") {
                submitBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
            }
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core JS -->
    <script src="../../assets/js/light_dark_mode.js"></script>
    <script src="../../assets/js/menuBtn.js"></script>
    <script src="../../assets/js/copyright.js"></script>
</body>

</html>