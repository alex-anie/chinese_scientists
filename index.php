<?php 
    include "chinese_scientists.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientists / China</title>
    <link rel="stylesheet" href="./css/main.css" />
   
</head>
<body>
    <main class="web-root">
        <section class="heading-wrapper">
            <h1 class="heading">Scientists / China</h1>
            <p class="heading-text">From sources across the web</p>
        </section>

        <article>
            <section class="card-container">
                <?php
                    foreach($chinese_scientists as $index => $scientist){
                        echo '
                            <aside class="mini-card" data-index="'.$index.'">
                                <div class="mini-profile-wrapper">
                                    <img src="'.$scientist['avatar'].'" alt="'.$scientist['bio'].'" class="mini-img">
                                </div>

                                <div class="mini-card-body">
                                    <div class="fullname-wrapper">
                                        <h4 class="fullname">'.$scientist['firstname']. ' '.$scientist['lastname'] .'</h4>
                                        <p class="birth-death">'.$scientist['birthday']. '-'.$scientist['death'].'</p>
                                    </div>

                                    <div class="chevron-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <polyline points="18 15 12 9 6 15" />
                                        </svg>
                                    </div>
                                </div>
                            </aside>

                            <aside class="large-card" data-index="'.$index.'">
                                <div class="bio-info">
                                    <div class="names-wrapper">
                                        <h1 class="names">'.$scientist['firstname'].' '.$scientist['lastname'].' </h1>
                                        <p class="bio">'.$scientist['bio'].'</p>
                                        <p class="link-wrapper"><a href="'.$scientist['weblink'].'" target="_blank">Learn more on wikipedia</a></p>
                                    </div>

                                    <div class="profile-img">
                                        <img src="'.$scientist['avatar'].'" alt="'.$scientist['bio'].'"/>
                                    </div>
                                </div>

                                <div class="personal-info">
                                    <p>First Name: <span> '.$scientist['firstname'].'</span></p>
                                    <p>Last Name: <span>'.$scientist['lastname'].'</span></p>
                                    <p>Born in: <span>'.$scientist['birthday'].'</span></p>
                                    <p>Died: <span>'.$scientist['death'].'</span></p>
                                    <p>Age: <span>'.$scientist['death'] - $scientist['birthday'].'</span></p>
                                </div>

                               <button class="close-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <line x1="18" x2="6" y1="6" y2="18" />
                                        <line x1="6" x2="18" y1="6" y2="18" />
                                    </svg>
                               </button>
                            </aside>
                        ';
                    }
                ?>
            </section>
        </article>
    </main>

    <script src="./js/app.js"></script>
</body>
</html>