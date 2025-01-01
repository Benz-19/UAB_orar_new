<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-evenly align-items-center">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="./assets/images/uni-logo.jpg" alt="logo" class="uni-logo">
            </a>

            <!-- Title -->
            <div class="mx-auto">
                <h1 class="display-6 text-center">OECONOMICA</h1>
            </div>
            <!-- Navbar Toggler -->
            <div id="navbtn">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Navbar Links -->
            <div class="navbar-links">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Studenți</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Profesori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Clădiri</a>
                        </li>
                        <li>
                            <!-- Light/Dark Mode Toggle -->
                            <div class="custom-control custom-switch ml-3">
                                <input type="checkbox" class="custom-control-input" id="themeToggle">
                                <label class="custom-control-label" for="themeToggle">
                                    <p>Temă</p>
                                    <i class="fas fa-sun" id="lightIcon"></i>
                                    <i class="fas fa-moon d-none" id="darkIcon"></i>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>