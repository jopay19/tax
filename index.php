﻿
 <?php
//PHP code to sent contact form to both client and owner
if (isset($_POST['submit'])) { //Check if user enter data
    $mailto = "jofer19marcos@gmail.com"; //My email address
    $from = $_POST['email']; //Senders email address
    $name = $_POST['name']; //User name
    $subject = $_POST['subject'];
    $subject2 = "Your Message Submitted Successfully | HMA WebDesign"; //This is for client
    $message = "Client Name: ". $name. ", Wrote the Following Message". "\n\n". $_POST['message'];
    $message2 = "Dear ". $name. "\n\n" ."Thank You for contacting us! We'll get back to you shortly"; //This is for sender
    $headers = "From: ". $from; // User entered email address
    $headers2 = "From: ". $mailto; //This will receive to client
    $result = mail($mailto, $subject, $message, $headers); //send email to website owner
    $result2 = mail($from, $subject2, $message2, $headers2); //send email to User as well
    if ($result) {
        echo '<script type="text/javascript">alert("Message Sent Successfully. Thank you! We will contact you shortly.")</script>';
    }else {
        echo '<script type="text/javascript">alert("Submission failed! Try again Later") </script>';
    }
} 

?>  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="eA-bzG__RUmd64Y9csVmeXVMe-tDQBeLc6PX18DAez0" />
    <script src="https://kit.fontawesome.com/9a9ba0f7cc.js" crossorigin="anonymous"></script>
    <title>
      
        Taxes by Leon
      
    </title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600' rel='stylesheet' type='text/css'>
      <link href="assets/css/toolkit-startup.css" rel="stylesheet">
      <link href="assets/css/application-startup.css" rel="stylesheet">
      <link type="text/css" href="myStyle.css" rel="stylesheet">


      <!------Top button cdn link-->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
      
      <!----Animate.css cdn link-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      /* …curses ios, etc… */
      body {
          font-family:Roboto;
      }
      p {
          font-size: 16px !important;
      }
      @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
          width: 1px;
          min-width: 100%;
          *width: 100%;
         
        }

        #stage {
          height: 1px;
          overflow: auto;
          min-height: 100vh;
          -webkit-overflow-scrolling: touch;
        }
      }
      #contactInfo {
          float: left;
          padding: 3px;
          margin-left: 17px;
          margin-top:-5px;
      }
      .info {
          margin-left: 15px;
          font-size: 15px;
          color:white;
      }
      .email:hover {
          color:#d4d4d4;
      }
      .icon {
          float: right;
          font-size: 22px;
          margin-right: 15px;
          color: white;
 
      }
      .icon:hover {
        color:#d4d4d4 !important;
      }
      .sideIcone {
          font-size: 20px;
          margin: 15px;
          color: black;
      }
      #socialLinks {
          width: 80%;
          margin: 10px auto;
      }
      #socialIcon {
          margin-right: 20px;
      }
       .main {
    width: 80%;
    margin: 10px auto;
}

 .form-control {
    padding-left: 10px;
}   
 .search {
     width: 14%;
     margin-top: -4px!important;
     margin-right: -4px!important;
 }
 
  @media (max-width: 600px) {
      .fontChange {
          font-size:20px;
          align-content:center;
          justify-content:center;
          text-align:center;
      }
      .contact {
          margin-top: 25px!important;  
      }
      .block-titleData {
        font-size: 29px !important;
        font-weight: 600 !important;
        margin-top: -20px !important;
      }
  }
  @media (max-width: 700px) {
      #ourWork {
          height: 450px!important;
      }
  }
  .fontChange:hover {
      color: rgb(37, 73, 141);
  }
  .myColor{
   background-color: rgb(36, 30, 30)!important;
   opacity: 0.7!important;
   width: 400px;
   height: 70px;
   padding-top:0.3px;
   margin: 0 auto;
 }
    </style>
  </head>


<body>
  <!-- Side Bar menu items code -->

<div class="stage-shelf stage-shelf-right hidden" id="sidebar">
  <ul class="nav nav-bordered nav-stacked flex-column">
    <li class="nav-header">Taxes by Leon </li>
    <li class="nav-item">
      <a class="nav-link active" href="index.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#aboutUs">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#services">Services</a>
    </li>
    <li class="nav-item">
       <a class="nav-link" href="#pricing">Pricing</a>
    </li>
    
    </li>
    <li class="nav-item">
       <a class="nav-link" href="#contact">Contact</a>
    </li>
    <li class="nav-item">
        <div class="main">
           <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Here">
                 <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
</li>
    <li class="nav-item">
        <div id="socialLinks">
            <a href="#" target="_blank" class="sideIcone"><i class="fa fa-facebook"></i></a>
            <a href="login.php" target="_blank" class="sideIcone"><i class="fa-solid fa-person"></i></a>
            <a href="#" target="_blank" class="sideIcone"><i class="fa fa-youtube"></i></a>
            <a href="#" target="_blank" class="sideIcone"><i class="fa fa-twitter"></i></a>
            <a href="#" target="_blank" class="sideIcone"><i class="fa fa-instagram"></i></a>
        </div>
    </li>
  </ul>
</div>

<div class="stage" id="stage">
<div class="block block-inverse block-fill-height app-header"
     style="background-image: url(images/taxbg.png); background-attachment: fixed; height:700px;">
 
  <div class="py-3 mx-4 fixed-top app-navbar">
   <div id="topBar">
       <div class ="topBarItems hidden-sm-down">
           <div id="contactInfo">
               <a href="mailto: jofer19marcos@gmail.com"  class="email info"><span class="ml-1 mr-2" style="font-size:20px; position:relative; top:1px;">&#9993;</span> @gmail.com</a>
               <span class="info"><span class="mr-2" style="font-size:20px; position:relative; top:1px;"><i class="fa fa-whatsapp"></i></span> +639-123-456-789</span>
           </div>
           <div id="socialIcon">
               <!-- <div class="search icon" >
                   <div class="input-group" style="margin-top:1px!important;">
                       <input type="search" name="search" class="form-control" placeholder="Search Here" style="height:25px!important;margin-top:4px;">
                       <div class="input-group-append">
                           <button class="btn btn-secondary mr-4 mb-1" style="height:25px!important; padding:3px 7px;">
                               <span ><i class="fa fa-search" ></i></span>
                           </button>
                       </div>
                   </div>
               </div> -->
               <a href="#" target="_blank" class="icon"><i class="fa fa-facebook"></i></a>
             
               <a href="#" target="_blank" class="icon"><i class="fa fa-youtube"></i></a>
               <a href="#" target="_blank" class="icon"><i class="fa fa-twitter"></i></a>
               <a href="#" target="_blank" class="icon"><i class="fa fa-instagram"></i></a>
               <a href="login.php" target="_blank" class="icon"><i class="fa-solid fa-person"></i></a>
           </div>
       </div>
   </div>

 <!-- top line -->
  <div id="topLine" class="hidden-sm-down"></div>

  <nav class="navbar container navbar-transparent navbar-padded navbar-toggleable-sm">
    <button
      class="navbar-toggler navbar-toggler-right hidden-md-up"
      type="button"  
      data-target="#stage"
      data-toggle="stage"
      data-distance="-250">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand mr-auto " href="#">
          <img src="images/taxesbg.png" style="width:150px; margin-top: -20px;"/>
    </a>

    <div class="hidden-sm-down">
      <ul class="navbar-nav mb-3">
        <li class="nav-item px-2">
          <a class="nav-link " href="index.html">Home</a>
        </li>
        <li class="nav-item px-2 ">
          <a class="nav-link" href="#aboutUs">About</a>
        </li>
        <li class="nav-item px-2 ">
          <a class="nav-link " href="#services">Services</a>
        </li>
        <li class="nav-item px-2 ">
          <a class="nav-link " href="#pricing">Pricing</a>
        </li>
        <li class="nav-item px-2">
            <a class="nav-link " href="#ourWork">Work</a>
        </li>
        <li class="nav-item px-2">
            <a class="nav-link " href="#contact">Contact</a>
         </li>
      </ul>
    </div>
  </nav>
</div>


  <div class="block-xs-middle ">
    <div class="container " >
      <div class="row justify-content-center mt-4">
        <div class="col-sm-10 col-lg-7 ">
          <h1 class="block-titleData frequency mt-5 wow fadeInDown" style="font-size: 48px; color: #439bd6;">Tax payment by Leon</h1>
           <hr class="my-2 float-left wow fadeInLeft" data-wow-delay="0.3s" style= "border: 1px solid rgb(7, 7, 7); width: 94%;" />
          <p class="lead mb-4 mt-2 text-muted float-left wow fadeInUp" data-wow-delay="0.6s">Online Tax- No need for personal bank appearance to pay and file tax returns; No need for manual stamping with the BIR office; Beating the red light is not tight because final hour is until 10:00PM of the filing date as compared to the banking hours for payment. Taxation is the imposition of compulsory levies on individuals or entities by governments in almost every country of the world. Taxation is used primarily to raise revenue for government expenditures, though it can serve other purposes as well.</p>

             <!-- Action button -->
            <div class="wow zoomInUp" data-wow-duration="1.5s"  data-wow-delay="1s">
              <a href="homepage.html" target="_blank" class="btn myBtn btn-outline-secondary btn-md" style="font-size: 25px;">
                   More About The Company
              </a>
            </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <div id="aboutUs" class="container-fluid" style="background-color:rgb(95, 134, 134)">
    <div class="row flex-row-reverse py-5 mr-5">
      <div class="col-md-5 col-sm-10 col-xs-10 my-auto mr-3 wow zoomIn" data-wow-delay="0.2s" data-wow-duration="1s">
        <img src="images/taxxxxx.jpg" style="width: 100%;">
      </div>
      <div class="col-md-6 col-sm-11 col-xs-12 ml-5">
            <h2 class="text-uppercase mb-4 mt-4 text-white wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">
          About Tax
            </h1>
            <p class="text-white lead text-muted wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                What Are Taxes? Taxes are mandatory contributions levied on individuals or corporations by a government entity—whether local, regional, or national. Tax revenues finance government activities, including public works and services such as roads and schools, or programs such as Social Security and Medicare.
            </p>

            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <h4 class="text-white text-uppercase mb-2">What is the purpose of tax?</h4>
                    <p class="text-muted lead ">
                         
The main purpose of taxation is to raise revenue for the services and income supports the community needs. Public revenues should be adequate for that purpose. 2. Tax should, as far as possible, be levied equitably, according to ability to pay.
                    </p>
                </div>
                <div class="col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                    <h4 class="text-white text-uppercase mb-2">Who invented tax?</h4>
                    <p class="text-muted lead">
                        The first elements of income tax can be found during the eras of the Egyptians and Antiquity in Rome. The Romans introduced public taxes comprising of modest assessments on owned wealth. The more money someone had in their property, the more money they paid
                    </p>
                </div>
            </div>
    </div>
   </div>
 </div>

    <div id="services" class="block"
         style="background-image: url(images/taxx.jpg); background-attachment: fixed; height:auto; padding: 30px!important; ">
        <h1 class="text-center text-uppercase mt-3 text-white wow jackInTheBox" data-wow-delay="0.1s">Services We can Provide</h1>
        <div class="container">
              <div class="card-deck">
                  <div class="card my-5 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                    <img class="card-img-top img-fluid mx-auto" src="images/responsive.png" style="width:45%;" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title text-center mt-0 mb-3">TAX PAYMENT OFFERS</h4>
                          <p class="card-text lead text-center">
                           </p>
                           <ul>
                               <li>ETC</li>
                               <li>ETC</li>
                               <li>ETC</li>
                               <li>ETC </li>
                               <li>ETC</li>
                           </ul>  
                          <div class="d-flex justify-content-center mt-5 mb-5">
                              <a href="#" target="_blank" type="button" class="btn btn-outline-success btn-md"> &#x1F6C8; Learn More</a>
                          </div>
                  </div>
                </div>
                  <div class="w-100 d-none d-sm-block d-md-none"></div>
                  <div class="card my-5 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.2s">
                      <img class="card-img-top img-fluid mx-auto mt-3" src="images/template.png" style="width:35%;">
                      <div class="card-body">
                          <h4 class="card-title text-center mb-4 mt-4">TAX PAYMENT OFFERS</h4>
                          <p class="card-text text-center">
                          </p>
                          <ul>
                            <li>ETC</li>
                            <li>ETC</li>
                            <li>ETC</li>
                            <li>ETC </li>
                            <li>ETC</li>
                          </ul>
                          <div class="d-flex justify-content-center my-5">
                              <a href="#" target="_blank" class="btn btn-outline-success btn-md"> &#x1F6C8; Learn More</a>
                          </div>
                      </div>
                  </div>
                  <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
                  <div class="card my-5 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.2s">
                      <img class="card-img-top img-fluid mx-auto mt-4" src="images/wordpress.png" style="width:32%;" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title text-center mt-4 mb-4">TAX PAYMENT OFFERS</h4>
                          <p class="card-text text-center mx-2"> 
                          <ul>
                            <li>ETC</li>
                            <li>ETC</li>
                            <li>ETC</li>
                            <li>ETC </li>
                            <li>ETC</li>
                          </ul>
                          <div class="d-flex justify-content-center my-5">
                              <a href="https://www.fiverr.com/share/3bYYY9" target="_blank" class="btn btn-outline-success btn-md"> &#x1F6C8; Learn More </a>
                          </div>
                      </div>
                  </div>
              </div>
    </div>
</div>

<!-- Our Work -->
<div class="block block-inverse app-high-praise" id="ourWork"
     style="background-image: url(assets/img/startup-3.jpg); padding:30px!important; background-attachment: fixed; height:720px;">
    <h1 class="text-center text-uppercase font-weight-bold mt-4 wow rotateInDownLeft" >Our Work Samples</h1>
    <div class="container col-md-9 ">
        <!-- Slide Show -->
        <div id="carouselExampleIndicators" class="carousel slide mt-5 mb-5 wow zoomIn" data-wow-delay="0.3s" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner" style="max-height: 650px !important;">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/1.jpg" alt="Web Theme">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>etc.</h5>
                        <p>etc.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/2.jpg" alt="Website Theme Design">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>etc.</h5>
                        <p>etc.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/3.jpg" alt="Website Theme Design">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>etc.</h5>
                        <p>etc.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/4.jpg" alt="Website Theme Design">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>etc.</h5>
                        <p>etc.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/5.jpg" alt="Website Theme Design">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>etc.</h5>
                        <p>etc.</p>
                    </div>
                </div>
                
            
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--Ende Slide Show-->
  </div>
</div>

<!------------------Pricing code--------------------->

<div id="accordion">
    <div class="card" id="pricing">
        <div class="card-header" id="headingOne">
            <h5 class="my-4 text-center wow fadeInLeft" data-wow-duration="1s">
                <button class="btn btn-link .text-decoration-none" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span class="h1 mt-3 fontChange"><strong>TAX PAYMENT OFFERS</strong></span>
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body" id="webDesignPricing">
                
                <div class="block app-price-plans" style="padding:30px !important;">
                    <div class="container text-center">

                       <div class="row mb-5">
                            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                                <h3>TAX PAYMENTS </h3>
                            </div>
                       </div>

                        <div class="row">
                            <div class="col-md-4 px-4 pb-2 mb-5">
                                <div class="px-2">
                                    <h4 class="text-uppercase font-weight-bold">Basic</h4>
                                    <div class="mr-4">
                                        <p style="color:black!important;">
                                            <sub style="font-size:20px;">$</sub>
                                            <span style="font-size:70px; font-weight:300; font-family: Work sans" , Helvetica, Arial, sans-serif;>15</span>
                                        </p>
                                    </div>
                                    <p class="pb-1">
                                      etc.
                                    </p>
                                </div>

                                <ul class="list-unstyled list-bordered text-xs-left my-4">
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> #####</strong></li>
                                    <li class="py-3"> <strong><span class="mr-2">&#128505;</span>#####</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> shesh</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> ######</strong></li>
                                </ul>

                                <a href="https://www.fiverr.com/haaddison1/develop-a-responsive-website-with-html-css-and-bootstrap" target="_blank" class="btn btn-lg btn-primary btn-block">
                                 Start Now
                                </a>
                            </div>

                            <div class="col-md-4 px-4 pb-2 mb-5">
                                <div class="px-2">
                                    <h4 class="text-uppercase font-weight-bold">Standard</h4>
                                    <div class="mr-4">
                                        <p style="color:black!important;">
                                            <sub style="font-size:20px;">$</sub>
                                            <span style="font-size:70px; font-weight:300; font-family: Work sans" , Helvetica, Arial, sans-serif;>
                                                50
                                            </span>
                                        </p>
                                    </div>
                                    <p class="pb-1">
                                    #####
                                    </p>
                                </div>

                                <ul class="list-unstyled list-bordered text-xs-left my-4">
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span>#####</strong></li>
                                    <li class="py-3"> <strong><span class="mr-2">&#128505;</span> #####</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> #####</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> #####</strong></li>
                                </ul>

                                <a href="https://www.fiverr.com/haaddison1/develop-a-responsive-website-with-html-css-and-bootstrap" target="_blank" class="btn btn-lg btn-primary btn-block">
                                    Start Now
                                </a>
                            </div>

                            <div class="col-md-4 px-4 pb-2 mb-5">
                                <div class="px-2">
                                    <h4 class="text-uppercase font-weight-bold">Premium</h4>
                                    <div class="mr-4">
                                        <p style="color:black!important;">
                                            <sub style="font-size:20px;">$</sub>
                                            <span style="font-size:70px; font-weight:300; font-family: Work sans" , Helvetica, Arial, sans-serif;>
                                                100
                                            </span>
                                        </p>
                                    </div>
                                    <p class="pb-1">
                                    #####
                                    </p>
                                </div>

                                <ul class="list-unstyled list-bordered text-xs-left my-4">
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> #####</strong></li>
                                    <li class="py-3"> <strong><span class="mr-2">&#128505;</span>#####</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span>#####</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span>#####s</strong></li>
                                </ul>

                                <a href="https://www.fiverr.com/haaddison1/develop-a-responsive-website-with-html-css-and-bootstrap" target="_blank" class="btn btn-lg btn-primary btn-block">
                                    Start Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
               
            </div>
        </div>
    </div>
    

    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="my-4 text-center wow fadeInLeft" data-wow-duration="1s">
                <button class="btn btn-link collapsed .text-decoration-none" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="h1 mt-3 fontChange"><strong>TAX OFFERS</strong></div>
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body" id="emailTemplatePricing">
               

                <div class="block app-price-plans" style="padding:30px !important;">
                    <div class="container text-center">

                        <div class="row mb-5">
                            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                                <h3>etc</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 px-4 pb-2 mb-5">
                                <div class="px-2">
                                    <h4 class="text-uppercase font-weight-bold">Basic</h4>
                                    <div class="mr-4">
                                        <p style="color:black!important;">
                                            <sub style="font-size:20px;">$</sub>
                                            <span style="font-size:70px; font-weight:300; font-family: Work sans" , Helvetica, Arial, sans-serif;>
                                                10
                                            </span>
                                        </p>
                                    </div>
                                    <p class="pb-1">
                                       Cristal
                                    </p>
                                </div>

                                <ul class="list-unstyled list-bordered text-xs-left my-4">
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Delivery within 2 Days</strong></li>
                                    <li class="py-3"> <strong><span class="mr-2">&#128505;</span> One Page 5 Sections</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> shesh</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Ulimited chicken wings</strong></li>
                                </ul>

                                <a href="https://www.fiverr.com/haaddison1/design-a-responsive-html-email-template-or-newsletter" target="_blank" class="btn btn-lg btn-primary btn-block">
                                    Start Now
                                </a>
                            </div>

                            <div class="col-md-4 px-4 pb-2 mb-5">
                                <div class="px-2">
                                    <h4 class="text-uppercase font-weight-bold">Standard</h4>
                                    <div class="mr-4">
                                        <p style="color:black!important;">
                                            <sub style="font-size:20px;">$</sub>
                                            <span style="font-size:70px; font-weight:300; font-family: Work sans" , Helvetica, Arial, sans-serif;>
                                                25
                                            </span>
                                        </p>
                                    </div>
                                    <p class="pb-1">
                                       erwin
                                    </p>
                                </div>

                                <ul class="list-unstyled list-bordered text-xs-left my-4">
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Delivery within 2 Days</strong></li>
                                    <li class="py-3"> <strong><span class="mr-2">&#128505;</span> One Page 5 Sections</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> shesh</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Ulimited chicken wings</strong></li>
                                </ul>

                                <a href="https://www.fiverr.com/haaddison1/design-a-responsive-html-email-template-or-newsletter" target="_blank" class="btn btn-lg btn-primary btn-block">
                                    Start Now
                                </a>
                            </div>

                            <div class="col-md-4 px-4 pb-2 mb-5">
                                <div class="px-2">
                                    <h4 class="text-uppercase font-weight-bold">Premium</h4>
                                    <div class="mr-4">
                                        <p style="color:black!important;">
                                            <sub style="font-size:20px;">$</sub>
                                            <span style="font-size:70px; font-weight:300; font-family: Work sans" , Helvetica, Arial, sans-serif;>
                                                40
                                            </span>
                                        </p>
                                    </div>
                                    <p class="pb-1">
                                        Cute na si jofer
                                    </p>
                                </div>

                                <ul class="list-unstyled list-bordered text-xs-left my-4">
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Delivery within 2 Days</strong></li>
                                    <li class="py-3"> <strong><span class="mr-2">&#128505;</span> One Page 5 Sections</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> shesh</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Ulimited chicken wings</strong></li>
                                </ul>

                                <a href="https://www.fiverr.com/haaddison1/design-a-responsive-html-email-template-or-newsletter" target="_blank" class="btn btn-lg btn-primary btn-block">
                                    Start Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="my-4 text-center wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s" >
                <button class="btn btn-link collapsed .text-decoration-none" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="h1 mt-3 fontChange"><strong>TAX PRICING</strong> </div>
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body" id="wpPricing">
                

                <div class="block app-price-plans" style="padding:30px !important;">
                    <div class="container text-center">

                        <div class="row mb-5">
                            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                                <h3>Etc</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 px-4 pb-2 mb-5">
                                <div class="px-2">
                                    <h4 class="text-uppercase font-weight-bold">Basic</h4>
                                    <div class="mr-4">
                                        <p style="color:black!important;">
                                            <sub style="font-size:20px;">$</sub>
                                            <span style="font-size:70px; font-weight:300; font-family: Work sans" , Helvetica, Arial, sans-serif;>
                                                15
                                            </span>
                                        </p>
                                    </div>
                                    <p class="pb-1">
                                       anonas
                                    </p>
                                </div>

                                <ul class="list-unstyled list-bordered text-xs-left my-4">
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Delivery within 2 Days</strong></li>
                                    <li class="py-3"> <strong><span class="mr-2">&#128505;</span> One Page 5 Sections</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> shesh</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Ulimited chicken wings</strong></li>
                                </ul>

                                <a href="https://www.fiverr.com/haaddison1/design-responsive-wordpress-website-with-elementor-pro" target="_blank" class="btn btn-lg btn-primary btn-block">
                                    Start Now
                                </a>
                            </div>

                            <div class="col-md-4 px-4 pb-2 mb-5">
                                <div class="px-2">
                                    <h4 class="text-uppercase font-weight-bold">Standard</h4>
                                    <div class="mr-4">
                                        <p style="color:black!important;">
                                            <sub style="font-size:20px;">$</sub>
                                            <span style="font-size:70px; font-weight:300; font-family: Work sans" , Helvetica, Arial, sans-serif;>
                                                60
                                            </span>
                                        </p>
                                    </div>
                                    <p class="pb-1">
                                      hakdog
                                    </p>
                                </div>

                                <ul class="list-unstyled list-bordered text-xs-left my-4">
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Delivery within 2 Days</strong></li>
                                    <li class="py-3"> <strong><span class="mr-2">&#128505;</span> One Page 5 Sections</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> shesh</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Ulimited chicken wings</strong></li>
                                </ul>

                                <a href="https://www.fiverr.com/haaddison1/design-responsive-wordpress-website-with-elementor-pro" target="_blank" class="btn btn-lg btn-primary btn-block">
                                    Start Now
                                </a>
                            </div>

                            <div class="col-md-4 px-4 pb-2 mb-5">
                                <div class="px-2">
                                    <h4 class="text-uppercase font-weight-bold">Premium</h4>
                                    <div class="mr-4">
                                        <p style="color:black!important;">
                                            <sub style="font-size:20px;">$</sub>
                                            <span style="font-size:70px; font-weight:300; font-family: Work sans" , Helvetica, Arial, sans-serif;>
                                                100
                                            </span>
                                        </p>
                                    </div>
                                    <p class="pb-1">
                                        Harurut
                                    </p>
                                </div>

                                <ul class="list-unstyled list-bordered text-xs-left my-4">
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Delivery within 2 Days</strong></li>
                                    <li class="py-3"> <strong><span class="mr-2">&#128505;</span> One Page 5 Sections</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> shesh</strong></li>
                                    <li class="py-3"><strong><span class="mr-2">&#128505;</span> Ulimited chicken wings</strong></li>
                                </ul>

                                <a href="https://www.fiv " target="_blank" class="btn btn-lg btn-primary btn-block">
                                    Start Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                


            </div>
        </div>
    </div>
</div>


    <!--------------Features--------------->

<div id="features" class="block block-success app-block-marketing-grid" style="padding:50px!important;">
  <div class="container text-xs-center" >
    <div class="row mb-5" >
      <div class="col-xs-8 col-sm-10 offset-sm-1 col-lg-6 offset-lg-3 wow jackInTheBox" data-wow-delay="0.8s">
        <h2  class="mb-4 text-uppercase text-center .text-info font-weight-bold"> FEATURES</h2>
      </div>
    </div>

    <div class="row app-marketing-grid">
      <div class="col-md-4 px-4 mb-5 wow zoomIn" data-wow-delay="0.8s">
        <img class="mb-1" src="assets/img/startup-9.svg">
        <p><strong>Can Access 24/7</strong></p>
      </div>
      <div class="col-md-4 px-4 mb-5 wow zoomIn" data-wow-delay="0.9s">
        <img class="mb-1" src="assets/img/startup-10.svg">
        <p><strong>Account login no need for cards</strong> </p>
      </div>
      <div class="col-md-4 px-4 mb-5 wow zoomIn" data-wow-delay="1s">
        <img class="mb-1" src="assets/img/startup-11.svg">
        <p><strong>Timeless consuming:</strong></p>
      </div>
    </div>

    <div class="row app-marketing-grid">
      <div class="col-md-4 px-4 mb-5 wow zoomIn" data-wow-delay="1.1s">
        <img class="mb-1" src="assets/img/startup-12.svg">
        <p><strong>Affordable</strong> </p>
      </div>
      <div class="col-md-4 px-4 mb-5 wow zoomIn" data-wow-delay="1.2s">
        <img class="mb-1" src="assets/img/startup-13.svg">
        <p><strong>Can Access through Phones, Laptops or Tablets</strong> </p>
      </div>
      <div class="col-md-4 px-4 mb-5 wow zoomIn" data-wow-delay="1.3s" data-wow-duration="1s">
        <img class="mb-1" src="assets/img/startup-14.svg">
        <p><strong>Client Satisfaction and Accessible</strong></p>
      </div>
    </div>
  </div>
</div>

    <!-------------Footer--------------->

<div class="block block-inverse app-footer" id="contact" >
    <h2 class="w3-wide text-center mb-5 contact" style="position:relative; top: -50px;">
        CONTACT
    </h2>
 <div class="container">
     <div class="w3-content w3-padding-5" style="max-width:1090px; margin-top:-70px!important;">
         <div class="w3-row w3-padding-32">
             <div class="w3-col m6 w3-large mb-4">
                 <span class="ml-1"><i class="fa fa-map-marker" style="width:30px"></i></span> City, Country<br>
                 <i class="fa fa-whatsapp" style="width:30px"></i>+639-123-456-910<br>
                 <i class="fa fa-envelope" style="width:30px"> </i> <a href="mailto: hmawebdesign@hotmail.com">###</a> <br>
                 <div class="float-left my-3 ml-4">
                     <a href="#" target="_blank" class="icon ml-3"><i class="fa fa-facebook"></i></a>
                     <a href="#" target="_blank" class="icon ml-3"><i class="fa fa-linkedin"></i></a>
                     <a href="#" target="_blank" class="icon ml-3"><i class="fa fa-youtube"></i></a>
                     <a href="#" target="_blank" class="icon ml-2"><i class="fa fa-twitter"></i></a>
                     <a href="#" target="_blank" class="icon ml-2"><i class="fa fa-instagram"></i></a>
                 </div>
             </div>
             <div class="w3-col m6">
                 <form method="post" action="" style="margin:0 16px 8px 16px">
                     <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                         <div class="w3-half mb-2">
                             <input class="w3-input w3-border" type="text" placeholder="Full Name" required name="name">
                         </div>
                         <div class="w3-half">
                             <input class="w3-input w3-border" type="email" placeholder="Email" required name="email">
                         </div>
                     </div>
                     <input class="w3-input w3-border mb-3" type="text" placeholder="Subject" required name="subject">
                     <input class="w3-input w3-border" type="text" placeholder="Write your message..." required name="message">
                     <button class="btn w3-green w3-hover-black w3-section w3-left" type="submit" name="submit">SEND</button>
                 </form>
             </div>
         </div>
     </div>
  
    <div class="row">
      <div class="col-md-5 mb-5">
        <ul class="list-unstyled list-spaced">
          <li class="mb-4"><h4 class="text-uppercase">About</h4></li>
          <li>
              <span class="text-muted">
                  This website is brought to you by taxes by leon.
              </span>
          </li>
        </ul>
      </div>
      <div class="col-md-2 offset-md-1 mb-5">
        <ul class="list-unstyled list-spaced">
          <li class="mb-4"><h6  class="text-uppercase">Languages</h6></li>
           
           
        </ul>
      </div>
      <div class="col-md-2 mb-5">
        <ul class="list-unstyled list-spaced">
          <li class="mb-4"><h6>Explore</h6></li>
          <li><a href="#ourWork"  class="text-muted">Our Work</a></li>
          <li><a href="#features"  class="text-muted">Features</a></li>
          <li><a href="#"  class="text-muted">Videos</a></li>
          <li><a href="#"  class="text-muted">Blogs</a></li>
        </ul>
      </div>
      <div class="col-md-2 mb-5">
        <ul class="list-unstyled list-spaced">
          <li class="mb-4"><h6 class="text-uppercase">Important</h6></li>
          <li class="text-muted"><a href="#">Services</a></li>
          <li class="text-muted">Term & Conditions</li>
          <li class="text-muted">Privacy</li>
          <li class="text-muted">FAQ</li>
        </ul>
      </div>
    </div>
  </div>

 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<hr class="my-5" style="position:relative; top:60px;" />
    <div class="container mt-5 text-muted"style="position:relative; top:50px;">
        <center><p style="font-size: 9px;">&#169; Taxes by Leon. All rights reserved. 2022</p></center>
    </div>
</div>

<!-------------Javascript/ jQuery------------>

    <script type="text/javascript">
   

        //Get the Top button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }


    </script>

    <!------Animation------>
    <script src="wow.min.js"></script>
    <script src="jquery.waypoints.min.js"></script>
    <script>
              new WOW().init();
    </script>

    

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/toolkit.js"></script>
    <script src="assets/js/application.js"></script>

  </body>
</html>

