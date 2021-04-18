<link rel="stylesheet" href="css/menu.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">




<body>

<div class="menu">
    <div class="menu-child">

        <div class="logo">
            <a href="http://iosu.wunu.edu.ua/">
                <img class="img-logo" src="img/4.png">
            </a>
        </div>

       

        <div class="nav">

            <div class="nav-child">

                <div class="nav-child-dot">
                    <a href="main.php">
                        Main Page
                    </a>
                </div>

                <div class="nav-child-dot">
                    Contact
                </div>

                <?php if ( isset ($_SESSION['user']) ) : ?>
                <div class="user-menu-user">
                    <?php if ( $_SESSION['user1']['avatar'] != NULL) : ?>
                        <div class="nav-child-dot">
                            <img class="user-menu-pfp" src="uploads/<?=$_SESSION['user1']['avatar']?>">
                        </div>
                    <?php else : ?>
                        <div class="nav-child-dot">
                            <img class="user-menu-pfp" src="uploads/avatar-guest.png">
                        </div>
                    <?php endif; ?>
                    <div class="nav-child-dot">
                        <p lass="user-menu-name">
                            <?=$_SESSION['user1']['full_name']?>
                        </p>
                    </div>
                </div>
                <div class="nav-child-dot">
                    <a href="user_settings.php">
                        <img class="user-menu-settings" src="uploads/3524640.svg">
                    </a>
                </div>
                <div class="nav-child-dot">
                    <a href="logout.php" class="logout">
                        Log out
                    </a>
                </div>
                
                <?php else : ?>

                    <div class="nav-child-dot">
                        <a href="login.php"> 
                            Login
                        </a>
                    </div>
                    
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>

</body>