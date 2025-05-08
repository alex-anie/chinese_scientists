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
                    foreach($chinese_scientists as $scientist){
                        echo '
                            <aside class="mini-card">
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
                        ';
                    }
                ?>
            </section>
        </article>
    </main>
</body>
</html>