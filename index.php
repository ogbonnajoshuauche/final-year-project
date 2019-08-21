<?php

    include_once 'contoller/select.php';

    include_once 'contoller/insert.php';


    session_start();

    $select = new select();

     $insert = new insert();



    $loginUser = $select->login();

   $reset =  $insert->ResetPassword();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>STHC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   



    
    <navbar class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner" style="height: 80px;">
      
      <div class="container-fluid" style="margin-top: -10px;">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><img src="images/bg5.png"  style=" min-height:60px; width: 55px; margin-right: 5px;"> </div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li class="cta"><a href="#home-section" class="nav-link"><span  style=" border-color: #7971ea; padding: 10px 10px; color: #fff; background: #7971ea; border-radius: 30px; font-size: .7rem; font-weight: 900;  text-transform: uppercase;"> Home </span></a></li>
                   <li class="cta"><a href="#about-section" class="nav-link" > <span style=" border-color: #7971ea; padding: 10px 10px; color: #fff; background: #7971ea; border-radius: 30px; font-size: .7rem; font-weight: 900;  text-transform: uppercase;">About Us</span></a></li>
                    <li class="cta"><a href="#causelist-section" class="nav-link" ><span style=" border-color: #7971ea; padding: 10px 10px; color: #fff; background: #7971ea; border-radius: 30px; font-size: .7rem; font-weight: 900;  text-transform: uppercase;">Causelist</span></a></li>        
           </ul>
             </nav>
          </div>

          <div class="ml-auto w-15">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                
               <li class="cta"><a href="#userguide-section" class="nav-link" ><span style=" border-color: #7971ea; padding: 10px 10px; color: #fff; background: #7971ea; border-radius: 30px; font-size: .7rem; font-weight: 900;  text-transform: uppercase;">User Giude</span></a></li>
                <li class="cta"> <a href="#" class="btn btn-sm dropdown-toggle nav-link" data-toggle="dropdown" class="nav-link" style=" border-color: #7971ea; padding: 10px 10px; color: #fff; background: #7971ea; border-radius: 30px; font-size: .7rem; font-weight: 900;  text-transform: uppercase; width: 90px;">File A Case</a> 
                  <span class="caret"></span>
                    <ul class="dropdown-menu">
                        <li><a href="member/register_individual.php?case=" id="a">Individual</a></li>
                        <li><a href="member/register_organization.php?case=" id="a">Organization</a></li>
                  </ul></li>

                  <li class="cta"><a href="#contact-section" class="nav-link" ><span  style=" border-color: #7971ea; padding: 10px 10px; color: #fff; background: #7971ea; border-radius: 30px; font-size: .7rem; font-weight: 900;  text-transform: uppercase;">Contact Us</span></a></li>
                
              </ul>
              
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>

          <style type="text/css">
            #a{
              padding-left: 10px;
            }
          </style>
          
         

           
        </div>
      </div>
      
    </navbar>
 


    <div class="intro-section" id="home-section" style="margin-top: -70px;">
      
      <div class="slide-1" style="background-image: url('images/bg1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Web Based Case Filing and Documentation System for Court Proceedings</h1>
                  

                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">.</p>
                  <!-- <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Admission Now</a></p>
 -->
                </div>


              <div id="login" class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
               
                  <form action="" method="post" class="form-box">
                      <h3 class="h4 text-black mb-4">Sign In</h3>
                       <?php

                             switch ($loginUser) {
                                 case 'invaliduser':
                                     echo '

                                           <div class="alert alert-danger alert-sm text-center" style="font-size:18px;">
                                            <a href="#home-section" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                              <strong>Sorry!</strong> Wrong Details, Try Again.
                                           </div>

                                     ';
                               break;
              
                             default:
                
                               break;
                                   }

                            
                       ?>
                  
                    <div class="form-group">
                      <input type="email" name="m_email" class="form-control" placeholder="Email Addresss">
                    </div>
                    <div class="form-group">
                      <input type="password" name="m_pass" class="form-control" placeholder="Password">
                    </div>
                    
                    <div class="form-group">
                      <input type="submit" name="login" class="btn btn-primary btn-pill" value="Sign In">
                    </div>

                    <div class="form-group">
                        <a href="#" onclick="window.location.href='password_reset.php'">Forgot Password</a>
                    </div>

                       <h6>Not Registered? Click on FILE A CASE</h6>
                    <ul class="dropdown-menu">
                    </div>

                  </form>

                </div>




              
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

<div class="site-section" id="about-section">
      <div class="container">

        
            <h2 class="section-title"> <img src="images/bg3.png" style="height: 50px; width: 60px; margin-top: 10px;"> About Us</h2>


            <p class="mb-5">
              
              Welcome to State High Court Abakaliki Web Based Case Filing and Documentation System for Court Proceedings, Ebonyi State Judiciary. We are committed to ensuring disputes are resolved fairly, timely, transparently and economically by leveraging enabling technology with inherent seamless integration of the court processes, structures and administration.</p>
               <p>We provide automated case processing, payments and communication through this online court system to make it easy for various parties to a case to have timely access to pertinent case-related information. The  High Court System is comprised of The Criminal Division, The Land Division, The Probate and Family Division, The Commercial Division and The General Civil Division. The rules and procedures governing the operations of  State High Court Abakaliki Judicial Division (Civil Procedure).</p>

              <h3 style="text-decoration: underline; color: #7971ea">Committment Statement</h3>
              <p>We the staff of State High Court Abakaliki are committed to Abakaliki and the Community.</p>

              <p>Our mission is to provide quality and professional service in a knowledgeable manner. We take pride in our work and hold ourselves accountable to the highest standard of performance.</p>
              <p>Our goals are achieved through mutual co-operation, a strong sense of integrity, a positive attitude and teamwork</p>
              <h3 style="text-decoration: underline; color: #7971ea"> Mission Statement of State High Court Abakaliki</h3>

              <li> Discipline</li>
              <li>Honesty</li>
              <li>Hardwork</li>
              <li>Integrity</li>
              <li>Credence</li>
              <li> Dignity</li>
              <li> Honour</li>
              <li>Zeal for Results and Excellencee</li>
              </ul>
          </div>
        </div>

    
    
   <!--  <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$20</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Study Law of Physics</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Logo Design Course</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">JS Programming Language</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>



            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$20</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Study Law of Physics</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Logo Design Course</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">JS Programming Language</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>

          </div>

         

        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div> -->


    <div class="site-section" id="causelist-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="" data-aos-delay="">
            <h2 class="section-title">Causelist</h2>
            
          </div>
        </div>
        <div class="row mb-5 align-items-center">
<div class="container" style="margin-top: -40px;">
   <table class="table table-hover">
      <thead>
        <tr>
          <th>Date</th>
          <th>Platiff</th>
          <th>Defendant</th>
          <th>Solicitor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>2nd - May - 2019</th>
          <th>Chukwu Chukwuebuka D.</th>
          <th>Chisom Julius</th>
          <th>Barr. Ekeleme Jude</th>
        </tr>
        <tr>
          <th>4th - May - 2019</th>
          <th>Chukwu Friday S.</th>
          <th>Kalu Emma</th>
          <th>Barr. Oketa Christain</th>
        </tr>

        <tr>
          <th> 25th - August - 2019</th>
          <th> Ogbonna Joshua U.</th>
          <th>Chisom Emma</th>
          <th>Barr. Obasi Jude</th>
        </tr>

        <tr>
          <th>10th - February - 2019</th>
          <th> Yopa Chidiebere G.</th>
          <th>Nelson Abuchi</th>
          <th>Barr. Ajagba Chirs</th>
        </tr>
      </tbody>
    </table>
</div>
<!-- 
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">We Are Excellent In Education</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Strive for Excellent</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Education is life</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Teachers</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Benjamin Stone</h3>
                <p class="position">Physics Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Katleen Stone</h3>
                <p class="position">Physics Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Sadie White</h3>
                <p class="position">Physics Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Jerome Jensen</h3>
            <blockquote>
              <p>&ldquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit eius necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo provident odit molestias! Rem reprehenderit assumenda &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Why Choose Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">150 Universities Worldwide</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Top Professionals in The World</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Expand Your Knowledge</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Best Online Teaching Assistant Courses</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Best Teachers</h3></div>
              </div>

            </div> -->


<div class="site-section" id="userguide-section">
      <div class="container">

     
       <h1 class="section-title" >Court User Advice  </h2>
        <br>

          <div class="row services text-center">
         <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-book"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea"> Start a case in the Court</h3>
            <p class="text-left description">
            <ul>
              <p> How do you start if you decide to go to court?</p>
              <p>Go to the court to seek advice from court registrar.</p>
              <p>Consult a lawyer in particular if you want to 
                  go to the High Court,to advice you, help  
                  you prepare all the necessary documents.</p>
             </ul>
            </p>
          </div>

           <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-database"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea">Cannot Afford the services of a Solicitor </h3>
            <p class="text-left description">
                If you cannot afford to pay a lawyer,
                contact any organization
                that offers free legal services. For example:
                Legal Aid Council; Human Rights Commission; 
                Civil Society Organizations; Nigerian Bar Association; 
                NGO’s (Non-governmental Organizations/Civil Society
                Organizations) offering legal assistance.
            </p>
          </div>
            <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i
             class="fa fa-file"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea">Type of Court to File Your Case</h3>
            <p class="text-left description">
            In civil cases, the monetary value of the matter determines whether
            it is the Magistrate Court or the High Court that has to hear the
            case. For example, in State High Court Abakaliki, if your matter involves little or no monetary claim (less than N1,000,000.00), the proper court is
            the Magistrate Court or Customary Court; if the amount is higher
            than N1,000,000.00), go to the High Court. If you are uncertain,
            consult a lawyer of (OR) the chief registrar of the High Court.
            </p>
          </div>
        </div>




         <h1 class="section-title" >Web Based Case Filing System User Manual </h2>
        <br>

          <div class="row services text-center">
         <div data-animate="fadeInUp" class="col-lg-6">
            <div class="icon"><i class="fa fa-book"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea">Accessing the Home Page </h3>
            <br>
       Any visitor can access some relevant pages on the website by clicking on their menus: 
       <br>

      <span style="color:#d47f00; text-transform: uppercase;">Causelist:</span> List of court cases scheduled in a week, month et cetera. By clicking on the causelist menu, a table loads on the page.
      <br>
    
        <span style="color:#d47f00; text-transform: uppercase;">Self-Help:</span> A User guide for a novice to the website. By clicking on the Self-Help menu, a Self-Help procedural Guide loads on a separate page. <br>

        <span style="color:#d47f00; text-transform: uppercase;">Contact:</span>  Clicking on Contact menu opens a page with contact form. A form to be filled and sent to the Admin through the submit button. 
        </p>
          </div>

           <div data-animate="fadeInUp" class="col-lg-6">
            <div class="icon"><i class="fa fa-database"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea"> File a Case</h3>
            <p class="text-left description">
                If you cannot afford to pay a lawyer,
                contact any organization
                that offers free legal services. For example:
                Legal Aid Council; Human Rights Commission; 
                Civil Society Organizations; Nigerian Bar Association; 
                NGO’s (Non-governmental Organizations/Civil Society
                Organizations) offering legal assistance.
            </p>
          </div>
            <div data-animate="fadeInUp" class="col-lg-12">
            <div class="icon"><i
             class="fa fa-file"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea">Filing a Case</h3>
    
              <p>In order to file a case, click on File a case option in the left panel of the Dashboard screen. (The Dashboard screen appears as soon as a Registered User logs in his registered email id and Password for this web based case filing system in the Home page of the website). On clicking File a case option in the left panel of the Dashboard screen, a screen
              where to file’ will be shown.
            </p>
             
              <p>
              Upload documents:After filling all the forms provided for filing new case, users can upload the relevant file using the Upload Documents button. The file should be in pdf format. If you have token to digitally sign pdf document, then you can use  it to sign the document. Otherwise, the document can be signed by a user before uploading it.
              The type of document to be uploaded can be chosen from the drop down menu and by pressing upload button; file can be selected by user for upload. User needs to name the document with the appropriate document title.  Then select the range of amount for claims in the drop down button provided if claim is uploaded.User can then click on Pay court fees and pay applicable fees by clicking the Pay fees button to generate payment invoice. Print the Invoice after payment.
              Print out the form to keep your own copy.
          </p>
           
          </div>
        </div>

         <h1 class="section-title" style=" padding-left:200px;" >Web System User Manual </h2>
        <br>

          <div class="row services text-center">
         <div data-animate="fadeInUp" class="col-lg-6">
            <div class="icon"><i class="fa fa-book"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea">User registration </h3>
            <p class="text-left description">
             A new user can register using the ‘create account’ option in the Login screen Menu For registration purpose, a user must choose whether to register as an Individual or Organization.
              If you are an  Individual going to court with or without a lawyer, choose individual account, Otherwise, it is recommended that you choose organization account if you are an organization. Then proceed to fill the registration form. Ensure that your details are correct. All the fields are mandatory.
            </p>
          </div>

           <div data-animate="fadeInUp" class="col-lg-6">
            <div class="icon"><i class="fa fa-database"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea"> User Login</h3>
            <p class="text-left description">

              <p>You are required to have a unique email and password. Email and passwords should never be shared, even among filers from the same law firm.</p>
              <p>Forgot password: In case a User has forgotten his/her password used to register on this website, click the Forgot password option on the Login screen to retrieve the same as provided. This opens a new screen which requires User to fill in his registered e-mail address. Click the Send Mail button to receive the password on his registered e-mail address. On clicking Send Mail button, a notification appears showing password has been successfully mailed at user’s registered mail Filing a case.
              </p>
              
            </p>
          </div>

          <div data-animate="fadeInUp" class="col-lg-6">
            <div class="icon"><i class="fa fa-database"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea"> Document Format requirements</h3>
            <p class="text-left description">
            The formatting requirements for any case filed through the e-fling shall be as far as possible in compliance with the respective provisions/rules of the State High court Abakaliki. It is recommended to file cases/documents using this facility in single line spacing, Times New Roman font style, 14 font size only.   
            </p>
          </div>



           <div data-animate="fadeInUp" class="col-lg-6">
            <div class="icon"><i class="fa fa-database"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea"> Accessing Other Dashboard  Menu (s)</h3>
            <p class="text-left description">
              When a user logs in to his account, to access e-fling, he reaches the Home page of e-fling. User is required to submit his user id and password. On correctly submitting his email id and password, he is directed to the dashboard screen
            </p>
          </div>

          <div data-animate="fadeInUp" class="col-lg-12">
            <div class="icon"><i class="fa fa-database"></i></div>
            <h3 class="heading mb-3 text-400" style="text-decoration: underline; color: #7971ea"> Accessing Proceedings and Judgment(s)</h3>
            <p class="text-left description">
                  Clicking on the Proceedings opens a page where user(s) can view list of cases e-filed by them successfully along with the respective court proceedings.
                  Clicking on the Judgment opens a page where user(s) can view Court judgment on respective cases.
                  Making a Complaint: Only users can click on Complaint menu to fill the complaint form and submit to the Admin though the submit button.
            </p>
          </div>
        </div>

<div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">


            
            <h2 class="section-title mb-3 text-center">Message Us</h2>

            <?php

                echo($insert->send_message());

            ?>
            <p class="mb-5"></p>
          
            <form method="POST">
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="full_name" placeholder="Full name" required="">
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Write your message here." required=""></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                      
                      <input type="submit" name="send_message" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send Message">
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
  </body>

   <footer class="footer-section " id="" style=" height:100px;background-color: black;">
    
    <div> <p style=" float: right; padding-right: 20px; color: #ffffff; padding-top: 40px;"  > Copyright &copy;  <span style="color:orange;">State High Court Abakaliki</span> <script>document.write(new Date().getFullYear());</script>. All right reserved. </p>
    </div>     
    </footer>

  <script src="js/jquery-3.3.1.min.js"></script>

  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
</html>