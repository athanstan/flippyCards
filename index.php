<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flippy Cards</title>
    <!-- jQuery link -->
    <script type = "text/javascript" src = "js/jquery.min.js"></script>
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

<body background="photos/matrix.jpg">
<div class="container">

    <h1 class='text-center my-5 blogHeader'>Flippy Cards</h1>
    <div class="row cardRow">
            <div class="image-flip col-md-4 col-sm-6 mb-4" ontouchstart="this.classList.toggle('hover');">
                <div class="mainflip">
                    <div class="frontside">
                        <div class="card" width="12rem">
                            <img class="card-img-top" src="photos/clockHacker.jpg" alt="programmer on the clock">
                            <div class="card-inner_1">
                                <div class="card-inner_2">
                                    <header><p class="cardTitle">Programming</p><header>
                                </div>
                            </div>
                        </div>
                    </div> <!--/frontside-->
                    <div class="backside">
                    <a href="#" class="backsideLink">
                        <div class="card bodyBackside">
                            <img class="card-img-top" src="photos/linesofcode.jpg" alt="Colorful lines of code">
                            <div class="card-inner_1">
                                <div class="card-inner_2">
                                    <p class="cardTitle text-center mb-1">Programming</p>
                                    <p class="text-center">Lorem ipsum dolor sit amet, vel primis iriure argumentum at.</p>
                                </div>
                            </div>
                        </div></a>
                    </div> <!--/backside-->
                </div> <!--/mainFlip-->
            </div>
            <div class="image-flip col-md-4 col-sm-6 mb-4" ontouchstart="this.classList.toggle('hover');">
                <div class="mainflip">
                    <div class="frontside">
                        <div class="card" width="12rem">
                            <img class="card-img-top" src="photos/guyFawks.jpg" alt="Sir Guy Fawks">
                            <div class="card-inner_1">
                                <div class="card-inner_2">
                                    <p class="cardTitle">Hacking</p>
                                </div>
                            </div>
                        </div>
                    </div> <!--/frontside-->
                    <div class="backside">
                    <a href="#" class="backsideLink">
                        <div class="card bodyBackside">
                            <img class="card-img-top" src="photos/greenHoodHacker.jpg" alt="Green Hoody no Face">
                            <div class="card-inner_1">
                                <div class="card-inner_2">
                                    <p class="cardTitle text-center mb-1">Hacking</p>
                                    <p class="text-center">Lorem ipsum dolor sit amet, vel primis iriure argumentum at.</p>
                                </div>
                            </div>
                        </div></a>
                    </div> <!--/backside-->
                </div> <!--/mainFlip-->
            </div>
            <div class="image-flip col-md-4 col-sm-6 mb-4" ontouchstart="this.classList.toggle('hover');">
                <div class="mainflip">
                    <div class="frontside">
                        <div class="card" width="12rem">
                            <img class="card-img-top" src="photos/electronics.jpg" alt="Electronics">
                            <div class="card-inner_1">
                                <div class="card-inner_2">
                                    <p class="cardTitle" >Arduino</p>
                                </div>
                            </div>
                        </div>
                    </div> <!--/frontside-->
                    <div class="backside">
                        <div class="card bodyBackside">
                        <img class="card-img-top" src="photos/cuteRobot.jpg" alt="Just A Cute Robot">
                            <div class="card-inner_1">
                                <div class="card-inner_2">
                                    <p class="cardTitle" >Arduino</p>
                                    <p>Lorem ipsum dolor sit amet, vel primis iriure argumentum at. Simul offendit intellegebat cu eos, vim et epicuri praesent.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!--/backside-->
                </div> <!--/mainFlip-->
            </div>   
                               
    </div> <!--  RowEnd -->

    
</div> <!--  containeEnd -->


<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){

var frontHeight = $(".frontside").height();

$(".bodyBackside").height(frontHeight);
$(".image-flip").height(frontHeight);

$(window).resize(function(){
    var frontHeight = $(".frontside").height();

    $(".bodyBackside").height(frontHeight);
    $(".image-flip").height(frontHeight);


});
});

</script>

</body>
</html>