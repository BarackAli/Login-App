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
                        <a href="home.php" class="nav__link ">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">Dashboard</span>
                        </a>
                        <a href="myfiles.php" class="nav__link active">
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
                
                <a href="includes/logout.php" class="nav__link">
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Log Out</span>
                </a>
            </nav>
        </div>
    <h2>My files</h2>
    <div class="files">
    <div class="upload">
    <div class="plus-icon">
    <i class='bx bx-plus'></i></div>
    <div class="upload-data"><a href="#" class="folder__link"><i class='bx bx-check-circle'></i></a></div>
    <p>Upload</p>
    </div>
    
    <div class="upload">
    <div class="plus-icon">
    <i class='bx bxs-folder-open' ></i></div>
    <p>Folder</p>
    </div>
    </div>
    
    <div class="folders">
        <div class="folder">
            <div class="folder-icon"><i class='bx bx-folder'></i></div>
        <h3>Attachments</h3>
        </div>
        
        <div class="folder">
            <div class="folder-icon"><i class='bx bx-folder'></i></div>
            <h3>Documents</h3>
        </div>
        
        <div class="folder">
            <div class="folder-icon"><i class='bx bx-archive' ></i></div>
            <h3>Archive</h3>
        </div>
        
    </div>

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