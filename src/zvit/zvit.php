<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Звіти</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <A HREF="photo.html">Фото бригади</A>

    <script>
        $(function(){
            $("#lab1").load("lab1zvit.html");
            $("#lab2").load("lab2zvit.html");
            $("#lab3").load("lab3zvit.html");
            $("#lab4").load("lab4zvit.html");
            $("#lab5").load("lab5zvit.html");
            $("#lab6").load("lab6zvit.html");
        });
    </script>
</head>
<body>
<h4>ЗВІТИ  З ЛАБОРАТОРНИХ РОБІТ З ДИСЦИПЛІНИ « РОЗРОБЛЕННЯ WEB-ЗАСТОСУВАННЬ»</h4>
<h6  style="padding-bottom: 50px">
    БРИГАДА №1, Студенти групи ІА-03: Куцик М.С., Костянко В.В.
</h6>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="lab1-tab" data-bs-toggle="tab" data-bs-target="#lab1" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Лабораторна робота №1</button>
        <button class="nav-link" id="lab2-tab" data-bs-toggle="tab" data-bs-target="#lab2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Лабораторна робота №2</button>
        <button class="nav-link" id="lab3-tab" data-bs-toggle="tab" data-bs-target="#lab3" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Лабораторна робота №3</button>
        <button class="nav-link" id="lab4-tab" data-bs-toggle="tab" data-bs-target="#lab4" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Лабораторна робота №4</button>
        <button class="nav-link" id="lab5-tab" data-bs-toggle="tab" data-bs-target="#lab5" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Лабораторна робота №5</button>
        <button class="nav-link" id="lab6-tab" data-bs-toggle="tab" data-bs-target="#lab6" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Лабораторна робота №6</button>
        <button class="nav-link" id="lab7-tab" data-bs-toggle="tab" data-bs-target="#lab7" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Лабораторна робота №7</button>
        <button class="nav-link" id="lab8-tab" data-bs-toggle="tab" data-bs-target="#lab8" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Лабораторна робота №8</button>
        <button class="nav-link" id="lab9-tab" data-bs-toggle="tab" data-bs-target="#lab9" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Лабораторна робота №9</button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="lab1" role="tabpanel" aria-labelledby="nav-home-tab">1</div>
    <div class="tab-pane fade" id="lab2" role="tabpanel" aria-labelledby="nav-profile-tab">2</div>
    <div class="tab-pane fade" id="lab3" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>
    <div class="tab-pane fade" id="lab4" role="tabpanel" aria-labelledby="nav-home-tab">4</div>
    <div class="tab-pane fade" id="lab5" role="tabpanel" aria-labelledby="nav-profile-tab">5</div>
    <div class="tab-pane fade" id="lab6" role="tabpanel" aria-labelledby="nav-contact-tab">6</div>
    <div class="tab-pane fade" id="lab7" role="tabpanel" aria-labelledby="nav-home-tab">7</div>
    <div class="tab-pane fade" id="lab8" role="tabpanel" aria-labelledby="nav-profile-tab">8</div>
    <div class="tab-pane fade" id="lab9" role="tabpanel" aria-labelledby="nav-contact-tab">9</div>
</div>

</body>
</html>