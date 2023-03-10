<nav class="navbar navbar-expand-lg"
    style="background-color: #72f0fc; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $baseURL; ?>?page=home">
            <img src="assets/svg/book.svg" alt="Medicine" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $baseURL; ?>?page=attivita">Attività Formativa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $baseURL; ?>?page=unita">Unità Didattica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $baseURL; ?>?page=gestatt">Gestione Attività</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $baseURL; ?>?page=gestuni">Gestione Unità</a>
                </li>
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>