<?php
        require 'db.php';
        include 'goodconnection.php';

        include 'menu.php';

    $page = isset($_GET['page']) ? $_GET['page']: 1;
    $limit = 1000;
    $offset = $limit * ($page - 1);

    $sql_select =  "SELECT * 
                    FROM post 
                    order by dateCreated ASC
                    LIMIT 3";
    $result = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);


    $sql_select456 =  "SELECT *
                    FROM tags 
                    order by tag_count_visit DESC
                    LIMIT 3";
    $result456 = mysqli_query($conn, $sql_select456);
    $row456 = mysqli_fetch_all($result456, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="https://raw.githubusercontent.com/JohnBlazek/codepen-resources/master/3d-carousel/js/libs.min.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <title>IOSU</title>
</head>
<body> 

<div class="main">
    <div class="main-child">
        <div class="text">
            <div class="indextest">
                <h1>
                    We Well Understand Your Intention
                </h1>
                <a class="button" href="review.php">Make an Appoinment</a>

            </div>
        </div>

        
    </div>
</div>

<div class="ss">
    <div class="ee">
        <div class="row">

            <div class="static__single">
                <h3 id="dynamic-number">1</h3>
                <h4>Chummery</h4>
            </div>


            <div class="static__single">
                <h3 id="dynamic-number1">1</h3>
                <h4>Satisfied student</h4>
            </div>


            <div class="static__single">
                <h3 id="dynamic-number2">1</h3>
                <h4>Rooms</h4>
            </div>


            <div class="static__single">
                <h3 id="dynamic-number3">1</h3>
                <h4>Student live now</h4>
            </div>

        </div>
    </div>
</div>

<div class="main-news">
    <div class="main-news-text">
        <h1>
            Latest From News
        </h1>
        <p class="main-news-text-bottom">
            Female divided bearing rule one called said Beginning set you living above saw seasons void created fruitful third years god.
        </p>
    </div>
    <div class="main-news-posts">
        <?php foreach($row as $row): ?>
            <div class="main-news-posts-post">
                <div class="main-news-posts-all">
                    <img class="main-news-posts-post-img" src="uploads/<?=$row['image']?>">
                    <div class="main-news-posts-post-text">
                        <h1><?=$row['text']?></h1>
                        <div class="main-news-posts-post-text-date">
                            <p><?=$row['dateCreated']?></p>
                            <p><?=$row['post_rating']?></p>
                        </div>

                        <p>ghwoijeg wegwiergiew gijoegijg ioj egwjio egrwji gwiojgwtjuoigwteu iojhgwe ujihpogwet juopwget ujoipwget juiopgter juoipgertj uoipgertwq juopigwetr juiopgetw ju9piogtewijop ewgtr  joipgewrtpoijegr w</p>
                    </div>
                </div>
                <div class="post-more">
                    <p>
                        Read More...
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
        
    </div>


</div>

<div class="main-news-text">
        <h1>
            Contacts
        </h1>
        <p class="main-news-text-bottom">
            Female divided bearing rule one called said Beginning set you living above saw seasons void created fruitful third years god.
        </p>
    </div>
<div class="main-bottom">

    <div class="main-bottom-left">
        <div class="bottom-single-block">

            <div class="single-block">
                <h3>Email</h3>
                <p>kniosutneu@gmail.com</p>
            </div>

            <div class="single-block">
                <h3>Локація</h3>
                <p>м. Тернопіль, майдан Перемоги буд.3</p>
            </div>

            <div class="single-block">
                <h3>Офіс</h3>
                <p>ЗУНУ, корпус №2, Кабінет №2301</p>
            </div>

            <div class="single-block">
                <h3>Телефон</h3>
                <p>0985865006 | 0968000965</p>
            </div>


        </div>
    </div>

    <div class="main-bottom-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10353.746570075997!2d25.5642565!3d49.5517839!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67e9a4189a2e63b3!2sKafedra%20Informatsiyno-Obchyslyuval%CA%B9nykh%20System%20Ta%20Upravlinnya%20Tneu!5e0!3m2!1sen!2sus!4v1589356212197!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

</div>

</body>
</html>
<script type="text/javascript">
    var currentNumber = $('#dynamic-number').text();

    $({numberValue: currentNumber}).animate({numberValue: 100}, {
        duration: 8000,
        easing: 'linear',
        step: function() { 
            $('#dynamic-number').text(Math.ceil(this.numberValue)); 
        }
    });
</script>

<script type="text/javascript">
    var currentNumber = $('#dynamic-number1').text();

    $({numberValue: currentNumber}).animate({numberValue: 80}, {
        duration: 8000,
        easing: 'linear',
        step: function() { 
            $('#dynamic-number1').text(Math.ceil(this.numberValue)); 
        }
    });
</script>

<script type="text/javascript">
    var currentNumber = $('#dynamic-number2').text();

    $({numberValue: currentNumber}).animate({numberValue: 15}, {
        duration: 8000,
        easing: 'linear',
        step: function() { 
            $('#dynamic-number2').text(Math.ceil(this.numberValue)); 
        }
    });
</script>

<script type="text/javascript">
    var currentNumber = $('#dynamic-number3').text();

    $({numberValue: currentNumber}).animate({numberValue: 55}, {
        duration: 8000,
        easing: 'linear',
        step: function() { 
            $('#dynamic-number3').text(Math.ceil(this.numberValue)); 
        }
    });
</script>
