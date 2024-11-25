<!DOCTYPE html>
<html>
<head>
	<title>Round Wise Project Evalution</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>
<body>
<?php
header("Content-Security-Policy: frame-ancestors 'none'");
?>


<header class="navigation">
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        
       
      </ul>
      
    </div>
  </div>
</nav>
</header>


<div id="top-image">
<div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <h1 class="text-white hero-font">Your Online<br><span class="yellow-text">Practical Exam</span> <br>Partner</h1>
      </div>
    </div>
  </div>
<img class="img-fluid boardimg" id="boardimg" src="assets/exam.webp" >
<img class="img-fluid penimg" id="penimg" src="assets/pen.webp" >
<img class="img-fluid laptopimg" id="laptopimg" src="assets/laptop.webp" >
<img class="img-fluid dotimg" id="dotimg" src="assets/dots.svg" >
<img class="img-fluid clockimg" id="clockimg" src="assets/clock.webp" >
<!-- <img class="img-fluid paperimg" id="paperimg" src="assets/paper.webp" > -->

</div>
<div class="about-sec my-5 py-5">
  <div class="container">
    <div class="row">
      <!-- <h2 class="playtext hding">What we do?</h2> -->
      <div class="col-lg-9 mx-auto text-center">
        <p class="text-dark about-text playtext ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an <span class="yellow-text"> unknown printer </span>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
      </div>
    </div>
  </div>
</div>


<div class="about-sec my-5 py-5">
  <div class="container">
    <div class="row col-9 mx-auto justify-content-center">
      <h2 class="playtext hding text-center mb-5 pb-3">Timeline</h2>
      <!-- <h2 class="playtext hding">What we do?</h2> -->
      <div class="col-md-4 text-center my-2">
        <img src="assets/blueprogress.png" class="img-fluid">
        <p class="date-small mb-0">Jan2022 - Feb2022</p>
        <p class="date-about">Requirement Gathering</p>
      </div>
      <div class="col-md-4 text-center my-2">
        <img src="assets/blueprogress.png" class="img-fluid roimg">
        <p class="date-small mb-0">Jan2022 - Feb2022</p>
        <p class="date-about">Requirement Gathering</p>
      </div>
      <div class="col-md-4 text-center my-2">
        <img src="assets/blueprogress.png" class="img-fluid">
        <p class="date-small mb-0">Jan2022 - Feb2022</p>
        <p class="date-about">Requirement Gathering</p>
      </div>
      <div class="col-md-4 text-center my-2">
        <img src="assets/blueprogress.png" class="img-fluid">
        <p class="date-small mb-0">Jan2022 - Feb2022</p>
        <p class="date-about">Requirement Gathering</p>
      </div>
      <div class="col-md-4 text-center my-2">
        <img src="assets/blueprogress.png" class="img-fluid">
        <p class="date-small mb-0">Jan2022 - Feb2022</p>
        <p class="date-about">Requirement Gathering</p>
      </div>
    </div>
  </div>
</div>


<div class="about-sec my-5 py-5">
  <div class="container">
    <div class="row col-10 mx-auto justify-content-center">
      <h2 class="playtext hding text-center mb-5 pb-3">Our <span class="yellow-text">Team</span></h2>
      <!-- <h2 class="playtext hding">What we do?</h2> -->
      <div class="col-md-3 text-center my-2">
        <img src="assets/demo.png" class="img-fluid teamimg">
        <p class="date-about mb-0">Mr. John Doe</p>
        <p class="date-small mb-0">18DCS056</p>
      </div>
      <div class="col-md-3 text-center my-2">
        <img src="assets/malav.png" class="img-fluid teamimg">
        <p class="date-about mb-0">Mr. John Doe</p>
        <p class="date-small mb-0">18DCS056</p>
      </div>
      <div class="col-md-3 text-center my-2">
        <img src="assets/demo.png" class="img-fluid teamimg">
        <p class="date-about mb-0">Mr. John Doe</p>
        <p class="date-small mb-0">18DCS056</p>
      </div>
      <div class="col-md-3 text-center my-2">
        <img src="assets/demo.png" class="img-fluid teamimg">
        <p class="date-about mb-0">Mr. John Doe</p>
        <p class="date-small mb-0">18DCS056</p>
      </div>
    </div>
  </div>
</div>






<div class="about-sec my-5 py-5">
  <div class="container">
    <div class="row col-10 mx-auto justify-content-center">
      <h2 class="playtext hding text-center mb-5 pb-3">Why to <span class="yellow-text">Choose</span> Us</h2>
      <!-- <h2 class="playtext hding">What we do?</h2> -->
     
      <table class="table  table-responsive">
        <thead>
          <tr>
            <th> </th>
            <th>Traditional Exams</th>
            <th>Our System</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Result Publishing</td>
            
            <td>~30 Days</td>
            <td>Immediate</td>
          </tr>
          
          <tr>
            <td>Start to End Exam Cycle</td>
            <td>~3 months</td>
            <td>7-10 days</td>
          </tr>
          <tr>
            <td>Re-evaluation</td>
            <td>Additional Cost and Time</td>
            <td>No additional cost</td>
          </tr>
          <tr>
            <td>Multi-media led Questions</td>
            <td>Not Possible</td>
            <td>Enabled</td>
          </tr>
          <tr>
            <td>Randomising Evaluation of Answer Scripts</td>
            <td>Not Possible</td>
            <td>Enabled</td>
          </tr>
          <tr>
            <td>Process Inefficiencies</td>
            <td>High</td>
            <td>Mostly Eliminated</td>
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>




<div class="row col-12">
  <div class="mb-4  col-md-5">
     
                <div class="container p-0 m-0 col-10 mx-auto ">
                    <div class="row d-flex p-0 m-0 pt-4 col-12 upeve ">
                    <div class="d-flex col-md-2 col-sm-4 col-12 justify-content-center">
                            <h1>
                                <span class="fa-stack fa-lg num_ben">
                                    <div class="fa fa-circle-o-notch bgn11"></div>
                                    <i class=" fa-stack-2x"></i>
                                    <i class="fa-stack-1x  num_fon">1</i>
                                </span>
                            </h1>
                        </div>
                        <div class="col  event-text p-0">
                            <p class=" text-black playtext text-justify p-0 col-12 pt-3 fw_2">
                            We provide two-factor authentication, and if a user tries to log in again and again, their account will be locked. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container p-0 m-0  col-10 mx-auto">
                    <div class="row d-flex p-0 m-0 pt-4 col-12 upeve ">
                        <div class="d-flex col-md-2 col-sm-4 col-12 justify-content-center">
                            <h1>
                                <span class="fa-stack fa-lg num_ben">
                                    <div class="fa fa-circle-o-notch bgn11"></div>
                                    <i class=" fa-stack-2x"></i>
                                    <i class="fa-stack-1x  num_fon"><b>2</b></i>
                                </span>
                            </h1>
                        </div>
                        <div class="col  event-text p-0">
                            <p class=" text-black playtext text-justify p-0 col-12 pt-3 fw_2">
                            Get an instant certificate of participation when you use our system. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container p-0 m-0 col-10 mx-auto">
                    <div class="row d-flex p-0 m-0 pt-4 col-12 upeve ">
                        <div class="d-flex col-md-2 col-sm-4 col-12 justify-content-center">
                            <h1>
                                <span class="fa-stack fa-lg num_ben">
                                    <div class="fa fa-circle-o-notch bgn11"></div>
                                    <i class=" fa-stack-2x"></i>
                                    <i class="fa-stack-1x  num_fon">3</i>
                                </span>
                            </h1>
                        </div>
                        <div class="col  event-text p-0">
                            <p class=" text-black playtext text-justify p-0 col-12 pt-3 fw_2">
                            Instantly assign the project to the judge in just one click.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container p-0 m-0 col-10 mx-auto">
                    <div class="row d-flex p-0 m-0 pt-4 col-12 upeve ">
                        <div class="d-flex col-md-2 col-sm-4 col-12 justify-content-center ">
                            <h1>
                                <span class="fa-stack fa-lg num_ben">
                                    <div class="fa fa-circle-o-notch bgn11"></div>
                                    <i class=" fa-stack-2x"></i>
                                    <i class="fa-stack-1x  num_fon">4</i>
                                </span>
                            </h1>
                        </div>
                        <div class="col  event-text p-0">
                            <p class=" text-black playtext text-justify p-0 col-12 pt-3 fw_2">
                            Automatically renames the file with their particular user-id in the submission for different rounds.
                            </p>
                        </div>
                    </div>
                </div>
            


            <div class="container p-0 m-0 col-10 mx-auto">
                    <div class="row d-flex p-0 m-0 pt-4 col-12 upeve ">
                        <div class="d-flex col-md-2 col-sm-4 col-12 justify-content-center ">
                            <h1>
                                <span class="fa-stack fa-lg num_ben">
                                    <div class="fa fa-circle-o-notch bgn11"></div>
                                    <i class=" fa-stack-2x"></i>
                                    <i class="fa-stack-1x  num_fon">5</i>
                                </span>
                            </h1>
                        </div>
                        <div class="col  event-text p-0">
                            <p class=" text-black playtext text-justify p-0 col-12 pt-3 fw_2">
                            Admin has all the control from judge to student and accesses the statistics of people who worked based on examination.
                            </p>
                        </div>
                    </div>
                </div>
            </div>






            <div class="container col-md-6 lpvid" id="laptop">
  <div class="mockup mockup-macbook loaded opened">
    <div class="part top">
      <img src="https://d1xm195wioio0k.cloudfront.net/images/mockup/macbook-top.svg" alt="" class="top">
      <img src="https://d1xm195wioio0k.cloudfront.net/images/mockup/macbook-cover.svg" alt="" class="cover">

      <video autoplay controls>
        <source src="assets/lolll.mp4" type="video/mp4">
      </video>
      <!-- <img src="assets/lol.png"> -->
    </div>
    <div class="part bottom">
      <img src="https://d1xm195wioio0k.cloudfront.net/images/mockup/macbook-cover.svg" alt="" class="cover">
      <img src="https://d1xm195wioio0k.cloudfront.net/images/mockup/macbook-bottom.svg" alt="" class="bottom">
    </div>
  </div>
</div>

</div>





          







<script>


$(window).scroll(function () {
        if ($('.navigation').offset().top > 100) {
            $('.navigation').addClass('nav-bg');
        } else {
            $('.navigation').removeClass('nav-bg');
        }
    });
    const header=document.querySelector('.mockup-macbook');
    $(window).scroll(function () {
  $('div').each(function () {
      if($(this).position().top <= $(window).scrollTop()+400 && ($(this).position().top + $(this).outerHeight()) > $(window).scrollTop()) {
          if(($(this).attr('id')=="laptop")||($(this).attr('id')=="laptop")){
            header.classList.remove('open');
            header.classList.add('scrolled');
            
           
          }
         
          if($(this).attr('id')=="laptop"){
            header.classList.remove('scrolled');
            header.classList.add('open');
            
          }
        
      }
  });
});

 window.onload = function () {

var parallaxBox = document.getElementById('top-image');
var

    c2left = document.getElementById('boardimg').offsetLeft,
    c2top = document.getElementById('boardimg').offsetTop,
    c3left = document.getElementById('penimg').offsetLeft,
    c3top = document.getElementById('penimg').offsetTop,
    c4left = document.getElementById('laptopimg').offsetLeft,
    c4top = document.getElementById('laptopimg').offsetTop,
    c5left = document.getElementById('dotimg').offsetLeft,
    c5top = document.getElementById('dotimg').offsetTop,
    c6left = document.getElementById('clockimg').offsetLeft,
    c6top = document.getElementById('clockimg').offsetTop;
    // c7left = document.getElementById('paperimg').offsetLeft,
    // c7top = document.getElementById('paperimg').offsetTop;

parallaxBox.onmousemove = function (event) {
    event = event || window.event;
    var x = event.clientX - parallaxBox.offsetLeft,
        y = event.clientY - parallaxBox.offsetTop;

    /*  mouseParallax('l1', c1left, c1top, x, y, 5); */
    mouseParallax('boardimg', c2left, c2top, x, y, 25);
    mouseParallax('penimg', c3left, c3top, x, y, 20);
    mouseParallax('laptopimg', c4left, c4top, x, y, 35);
    mouseParallax('dotimg', c5left, c5top, x, y, 45);
    mouseParallax('clockimg', c6left, c6top, x, y, 40);
    // mouseParallax('paperimg', c7left, c7top, x, y, 25);
 
};

};

function mouseParallax(id, left, top, mouseX, mouseY, speed) {
var obj = document.getElementById(id);
var parentObj = obj.parentNode,
    containerWidth = parseInt(parentObj.offsetWidth),
    containerHeight = parseInt(parentObj.offsetHeight);
obj.style.left = left - (((mouseX - (parseInt(obj.offsetWidth) / 2 + left)) / containerWidth) * speed) + 'px';
obj.style.top = top - (((mouseY - (parseInt(obj.offsetHeight) / 2 + top)) / containerHeight) * speed) + 'px';
}












</script>
</body>
</html>