<?php
include 'header.php'
?>

<title>BMW</title>
<a href="#" class="button18" tabindex="0" onclick="location.href='/logout'"> Logout </a>
<a href="#" class="button18" tabindex="0" onclick="location.href='/catalog'">Catalog</a>

<div class="container">
    <h2>BMW</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="image/4.png"  style="width:100%;">
            </div>

            <div class="item">
                <img src="image/2.png"  style="width:100%;">
            </div>

            <div class="item">
                <img src="image/3.jpg"  style="width:100%;">
            </div>

            <div class="item">
                <img src="image/5.png"  style="width:100%;">
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><br>
</div><br><br>


<? include 'footer.php' ?>