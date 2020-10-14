<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <!-- ===== CSS ===== -->
	<link rel="stylesheet" type="text/css" href="assets-s/css/styles.css">
	
    <!-- ===== BOX ICONS ===== -->
	<link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
	<title>HOME</title>
</head>
<body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="home.php" class="nav__logo">
                        <img src="assets-s/icons/logo.svg" alt="" class="nav__logo-icon">
                        <span class="nav__logo-text">Mubi Graphics</span>
                    </a>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>

                    <ul class="nav__list">
                        <a href="home.php" class="nav__link active">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">Dashboard</span>
                        </a>
                        <a href="myfiles.php" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__text">My Files</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-bell nav__icon' ></i>
                            <span class="nav__text">Notification</span>
                        </a>
                        
                        <a href="#" class="nav__link">
                            <i class='bx bxs-group nav__icon' ></i>
                            <span class="nav__text">Shared</span>
                        </a>
                        
                        <a href="#" class="nav__link">
                            <i class='bx bxs-photo-album nav__icon' ></i>
                            <span class="nav__text">Photos</span>
                        </a>
                        
                        <a href="#" class="nav__link">
                            <i class='bx bx-trash nav__icon' ></i>
                            <span class="nav__text">Recycle bin</span>
                        </a>
                        
                    </ul>
                </div>
                <div class="nav__nav">
                <div class="nav__content">
                        <div class="nav__data"><div class="nav__info">Get 1TB of storage from MubiGraphic apps.</div>
                        <div class="nav__learn"><a href="" class="nav__learn-more">Learn More</a>
                        </div>
                        </div>
                        <div class="nav__button">
                            <i class='bx bx-diamond icon-diamond' ></i>
                            <div class="nav__button-info">Go premium</div>
                        </div>
                </div>
                        
                <div class="nav__storage">
                    <span class="nav__storage-bar-under nav__storage-width-under"></span> 
                    <span class="nav__storage-bar nav__storage-width"></span>
                    <span class="nav__storage-number"><span class="nav__storage-number-color">3.45 GB</span> used of 5 GB</span>
                </div>
                </div>
                <a href="includes/logout.php" class="nav__link">
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Log Out</span>
                </a>
            </nav>
        </div>
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <div class="user-icon">
        <i class='bx bxs-user nav__icon' ></i>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Atque optio odio officiis nostrum nesciunt quam libero.
        Cumque impedit veritatis, quibusdam nulla accusantium illo.
        In velit laboriosam obcaecati quaerat eaque beatae.</p>

</body>
    <!-- MAIN JS -->
    <script src="assets-s/js/main.js"></script>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>