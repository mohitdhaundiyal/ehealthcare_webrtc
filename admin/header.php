<style>
.nav-link {
    font-size:20px;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../images/image.png" width="30" height="30">
    </a>
    <a class="navbar-brand" href="dashboard.php"><strong>E-HEALTHCARE</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <strong>Patient</strong>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="add_patient.php">Add Patient</a>
                    <a class="dropdown-item" href="manage_patient.php">Manage Patient</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <strong>Doctor</strong>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="add_doctor.php">Add Doctor</a>
                    <a class="dropdown-item" href="manage_doctor.php">Manage Doctor</a> 
                </div>
            </li>
        </ul>
        <a href="source/admin_logout.php" class="btn btn-primary ml-auto">Logout</a>
    </div>
</nav>