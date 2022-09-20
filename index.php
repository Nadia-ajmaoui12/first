<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      Nadia ajmaoui
    </title>
    <link rel = "icon" href = "images/N-galaxy-logo-removebg-preview.png"  type = "image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.6/dist/css/uikit.min.css" />
     <!-- BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- icons bootstrap -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- aos library -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <!-- other icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <!-- aos library -->
     <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
     <!-- recaptcha -->
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- css style folder -->
     <link rel="stylesheet" href="style-index.css">
</head>
<body>
<div class=" page-loading">
      <div class="middle-bars ">
          <div class="bar bar1"></div>
          <div class="bar bar2"></div>
          <div class="bar bar3"></div>
          <div class="bar bar4"></div>
          <div class="bar bar5"></div>
          <div class="bar bar6"></div>
          <div class="bar bar7"></div>
          <div class="bar bar8"></div>
          <div class="bar bar6"></div>
          <div class="bar bar7"></div>
          <div class="bar bar8"></div>
      </div>
  </div>
<header >
  <!-- Main Navbar -->
  <div style="background-color:white;"  uk-sticky="sel-target: uk-navbar-container; cls-active: uk-navbar-sticky">
   <nav class="uk-container uk-navbar  " >
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active">
                    <a href="#"><img class="brand" style="margin-left:-2rem;" height="100" width="100" src="images/N-galaxy-logo-removebg-preview.png" alt=""> <span class="uk-text-bold uk-text-default  uk-visible@xxxl uk-visible@xxl uk-visible@l uk-visible@m uk-visible@xm .uk-visible-*" style="color:#2b225a; font-family:Old Standard TT;"> Nadia  Ajmaoui</span></a>
                </li> 
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@s" uk-scrollspy-nav="closest: li; scroll: true">
                <li><a class="uk-text-large uk-button-text" href="#home" uk-scroll><i class="bi bi-house-door-fill"></i>Home</a></li>
                <li><a class="uk-text-large uk-button-text" href="#about" uk-scroll><i class="bi bi-person-circle"></i>About</a></li>
                <li><a class="uk-text-large uk-button-text" href="#education" uk-scroll><i class="bi bi-book"></i>Education</a></li>
                <li><a class="uk-text-large uk-button-text"href="#projects" uk-scroll><i class="bi bi-laptop"></i>Projects</a></li>
                <li><a class="uk-text-large uk-button-text" href="#skills" uk-scroll><i class="bi bi-code-square"></i>Skills</a></li>
                <li><a class="uk-text-large uk-button-text" href="#certificates" uk-scroll><i class="bi bi-check-circle"></i>Certficates</a></li>
                <li><a class="uk-text-large uk-button-text" href="#internships" uk-scroll><i class="bi bi-journal-check"></i>Internships</a></li>
                <li>
                <button style="margin-top:1.7rem;" class="uk-button uk-button-text " type="button"> <strong> More <i class="bi bi-three-dots-vertical"></i> </strong></button>
                <div uk-dropdown="animation: slide-top; animate-out: true; duration: 700">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="#modal-sections" uk-toggle><i class="bi bi-envelope-fill"></i>Contact-me</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a  href="https://www.google.com/maps/search/allal+fassi+nfiss+2/@31.65359,-8.0302061,15z/data=!3m1!4b1?hl=fr" target="_blank"><i class="bi bi-geo-alt"></i>adress</a></li>
                        <!-- <li class="uk-nav-divider"></li>
                        <li><a href="#about" uk-scroll><i class="bi bi-share"></i>share link</a></li> -->
                    </ul>
                </div>
                </li>
            </ul>
            <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
        </div>
    </nav>
  </div>
</header>

<div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav">
                <li><a class="uk-text-default uk-button-text" href="#home"><i class="bi bi-house-door-fill"></i>Home</a></li>
                <li><a class="uk-text-default uk-button-text" href="#about"><i class="bi bi-person-circle"></i>About</a></li>
                <li><a class="uk-text-default uk-button-text" href="#education"><i class="bi bi-book"></i>Education</a></li>
                <li><a class="uk-text-default uk-button-text" href="#projects"><i class="bi bi-laptop"></i>Projects</a></li>
                <li><a class="uk-text-default uk-button-text" href="#skills"><i class="bi bi-code-square"></i>Skills</a></li>
                <li><a class="uk-text-default uk-button-text" href="#certificates"><i class="bi bi-check-circle"></i>Certficates</a></li>
                <li><a class="uk-text-default uk-button-text" href="#internships"><i class="bi bi-journal-check"></i>Internships</a></li>
                <li>
                <div class=" uk-inline">
                    <button class="  uk-button uk-button-text" type="button"><i class="bi bi-three-dots me-2"></i>More </button>
                    <div uk-dropdown="animation: slide-left; animate-out: true; duration: 700">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-active"><a href="#modal-sections" uk-toggle><i class="bi bi-envelope-fill"></i>Contact-me</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="https://www.google.com/maps/search/allal+fassi+nfiss+2/@31.65359,-8.0302061,15z/data=!3m1!4b1?hl=fr" target="_blank"><i class="bi bi-geo-alt"></i>Adress</a></li>
                            <!-- <li class="uk-nav-divider"></li>
                            <li><a href="#about" uk-scroll><i class="bi bi-share"></i>Share link</a></li> -->
                        </ul>
                    </div>
                </div>
                </li>
        </ul>
    </div>
</div>
<section id="home" class="home">
<div class="uk-position-relative uk-background-center-center uk-background-cover " uk-height-viewport>
	<div class="uk-position-cover uk-cover-container">
		<video  autoplay loop playsinline muted uk-cover>
			<source src="images/video.mp4"type="video/mp4">
		</video>
	</div>
    <div class="uk-position-relative uk-container uk-container-small uk-flex uk-flex-middle" uk-height-viewport="offset-top: true">
        <div class="uk-section" style=" background-color:transparent;margin: auto;">
            <div class="uk-container ">
                <h3 class="" ><span class="element"></span></h3>
            </div>
        </div>
        <div class="uk-margin"> 
            <svg class="arrows">
                <a href="#about" style=" scroll-behavior: smooth;"> <path class="a1" d="M0 0 L30 32 L60 0"> </path></a>
                <a href="#about" style=" scroll-behavior: smooth;">  <path class="a2" d="M0 20 L30 52 L60 20"></path></a>
                <a href="#about" style=" scroll-behavior: smooth;"> <path class="a3" d="M0 40 L30 72 L60 40"></path></a>
            </svg>
            
        </div>
	</div>
    
</div>
<nav class="social ">
<ul>
<li><a href="https://ma.linkedin.com/in/nadia-ajmaoui-23a938226">Linkedin <i class="fa fa-linkedin"></i></a></li>
<li><a href="https://github.com/Nadia-ajmaoui12" target="_blank"> Git hub <i class="fa fa-github"></i></a></li>
<li><a href="https://fr-fr.facebook.com/nadia.ajmaoui.7">Facebook <i class="fa fa-facebook"></i></a></li>
<li><a href="https://mail.google.com/mail/u/0/?pli=1#inbox"> Gmail <i class="fa fa-google"></i></a></li>
</ul>
</nav>
</section>


<section id="about" class="about uk-margin-small-top">
  <div class="container-fluid">
      <h1  style="font-family:Old Standard TT;" class="display-4 text-center " data-aos="fade-up" >ABOUT ME <span class="animate-border tw-mt-30 tw-mb-30 uk-align-center"></span> </h1>
      <div class="row">
            <div class="uk-flex uk-flex-center">
                <div class="button-group filter-button-group" >
                <button data-filter=".about-me" id="filter-btn"><i class="bi bi-person"></i></button>
                <button id="filter-btn"> <a href="#modal-sections" uk-toggle data-filter=".gmail"><i style="color:white; border:purple;" class="bi bi-google"></i></a></button>
                <button data-filter=".phone" id="filter-btn">   <a href="tel://+212625677064" target="_blank" class="phone"><i style="color:white; border:purple;"  class="bi bi-telephone-fill"></i></a></button>
                <button data-filter=".adress" id="filter-btn"><i class="bi bi-geo-alt"></i></button>
                <button data-filter=".websites" id="filter-btn"><i class="bi bi-globe"></i></button>
                <button id="filter-btn"><a   href="Cv-ajmaoui (1).pdf"  download>  <span><i style="color:white; border:purple;" class="bi bi-download"></i></span></a></button> 
                </div>
            </div>
      </div>
      <div  class=" menu-items uk-flex uk-flex-center uk-margin-large-top  uk-margin-large-right uk-margin-large-left uk-margin-large-bottom">
            <!-- about section -->
            <div   class=" item about-me ">
              <div class="uk-card uk-card-default" style=" box-shadow: 0px 2px  8px #5c019c;" data-aos="fade-up">
                <strong >
                 <i class="bi bi-person-circle"></i>  My name is <span style="color:#a0078c;">Nadia Ajmaoui</span> web developer from <span style="color:#a0078c;"> Morocco </span>,i am outgoing, dedicated and open minded. I communicate with people and adapt easily to changes. I believe a person should work on developing their professional skills and learn new things all the time. Currently, I am looking for new career opportunities.
               </strong>            
              </div>
            </div>
            <div class=" item adress">
                <div class="uk-card uk-card-default uk-margin-medium-top" style=" height:3rem;  box-shadow: 0px 2px  8px #5c019c;" data-aos="fade-up">
                  <strong>   MARRAKECH/Allal fassi/nfiss II <small> <em>click here</em></small><button style="border:none; background-color:white;"> <a href="https://www.google.com/maps/search/allal+fassi+nfiss+2/@31.65359,-8.0302061,15z/data=!3m1!4b1?hl=fr"><i style="color: #1bb0e2;  border-radius:50%; background:white;"  class="h4 bi bi-globe"></i></a></button></strong> 
                </div>
            </div>
            <div  class=" item websites">
                <div class="uk-card uk-card-default uk-margin-medium-top " style=" height:fit-content; box-shadow: 0px 2px  8px #5c019c;"data-aos="fade-up" >
                  <strong >I have two versions of websites I made them to learn new things... my first version  <small> <em>click here</em></small> <button style="border:none; background-color:white;"> <a href="https://nadiaajmaoui.000webhostapp.com/index.php"><i style="color: #1bb0e2;  border-radius:50%; background:white;"  class=" h4 bi bi-globe"></i></a></button> my lastest version<small> <em>click here</em></small> <button style="border:none; background-color:white;"> <a href="#home"><i style="color: #1bb0e2;  border-radius:50%; background:white;"  class="h4 bi bi-globe"></i></a></button></strong> 
                </div>
            </div>
    <div class=" item gmail">
      <div id="modal-sections" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button> 
            <div class="container contact">
            <form method="post" >
                <div class="contact-form">
                        <div class="form-group">
                        <label class="control-label col-sm-2 uk-flex" for="fname">First Name:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="name" required>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-sm-2" for="lname">Last Name:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"  required>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="comment">Message:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="comment" name="message"  required></textarea>
                                </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeuJw8iAAAAALy9K088LdTMuvT1XPw__fDMFbtQ"></div>
                        <!-- recaptcha google  -->
                        <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10 uk-flex uk-flex-left">
                            <input style="font-weight: 600; width: 25%;background: linear-gradient(90deg,purple,#42008D,rgba(0,212,255,1) 100%); margin-top:2rem; color:white;" type="submit" name="submit" class="btn btn-default" value="send"></input>
                        </div>
                        </div>
                    </div>
            </form>

                    <div class="status uk-align-center">
                        <?php
                        if(isset($_POST['submit'])){

                            $user_name=$_POST['name'];
                            $l_name=$_POST['lname'];
                            $user_email=$_POST['email'];
                            $user_message=$_POST['message'];
                            
                            $email_form='mywebsite@gmail.com';
                            $email_subject="new form submission";
                            $email_body="Name:$user_name.\n"."Last_name:$l_name.\n".
                            "user_mail:$user_email.\n"."user_message: $user_message.\n";


                            $to_email="nadiaajmaoui12@gmail.com";
                            $headers="from:$email_form \r\n";
                            $headers="reply_to: $user_email \r\n";

                            //variable to restore the recaptcha key
                            $secret_key="6LeuJw8iAAAAABiJj3_tMSeVKckDXICP0hSM4avc";
                            $responsekey=$_POST['g-recaptcha-response'];
                            $userIP=$_SERVER['Remote_ADDR'];
                            $url="https://www.google.com/recaptcha/api/siteverify?secret= $secret_key&response=$responsekey&remoteip=$userIP";

                            $response= file_get_contents($url);
                            $response=json_decode($response);
                            
                            
                            if($response->success){
                            mail($to_email,$email_subject,$email_body,$headers) ;

                            echo"<h4>message sent successfully!</h4>";

                            }
                            else{
                                echo"<h3>the message is not sent please try again or send it directly to my  mailbox:nadiaajmaoui12@gmail.com </h3>";
                            }

                        }
                        ?>
                    </div>
                    
                 </div>
           </div>
       </div>
    </div>
</div> 
</section>
<section  id="education" class=" education uk-margin-large-top">
<div class="uk-position-relative uk-background-center-center uk-background-cover " uk-height-viewport>
	<div class="uk-position-cover uk-cover-container">
		<video  autoplay loop playsinline muted uk-cover>
			<source src="images/video.mp4"type="video/mp4">
		</video>
	</div>
    <div class="uk-position-relative uk-container uk-container-small uk-flex uk-flex-middle" uk-height-viewport="offset-top: true">
       <div class="uk-section" style=" background-color:white;margin: auto;">
            <h1 style="font-family:Old Standard TT;" class="display-4 text-center uk-margin-large-bottom " data-aos="fade-up">Education <span class="animate-border tw-mt-30 tw-mb-30 uk-align-center"></span>  </h1>
            <div class="uk-child-width-expand@s" uk-grid>
                <div class="uk-grid-item-match">
                    <div class="uk-margin-small-left">
                        <ul class="timeline">
                                <li class="timeline-item mb-5">
                                <h5 class="fw-bold"><i class="bi bi-mortarboard me-2" ></i>3rd year IIR (2021-2022) </h5>
                                <p class="text-muted mb-2 fw-bold"  data-aos="fade-right"  data-aos-easing="ease-out-cubic"> EMSI(Moroccan school of engineering sciences)</p>
                                <p class="text-muted" data-aos="fade-right"  data-aos-easing="ease-out-cubic" >
                                   -I studied in the field of Computer and Network Engineering.
                                </p>
                                </li>

                                <li class="timeline-item mb-5">
                                <h5 class="fw-bold"><i class="bi bi-mortarboard me-2"></i>2nd year IIR (2020-2021)</h5>
                                <p class="text-muted mb-2 fw-bold"  data-aos="fade-right"  data-aos-easing="ease-out-cubic" > EMSI(Moroccan school of engineering sciences)</p>
                                <p class="text-muted"  data-aos="fade-right"  data-aos-easing="ease-out-cubic" >    
                                    -Second preparatory year.
                                </p>
                                </li>

                                <li class="timeline-item mb-5">
                                <h5 class="fw-bold"><i class="bi bi-mortarboard me-2"></i>1rst year IIR (2019-2020)</h5>
                                <p class="text-muted mb-2 fw-bold"  data-aos="fade-right"  data-aos-easing="ease-out-cubic" > EMSI(Moroccan school of engineering sciences)</p>
                                <p class="text-muted" data-aos="fade-right"  data-aos-easing="ease-out-cubic" >    
                                 -First preparatory year.
                                </p>
                                </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <ul class="timeline">
                        <li class="timeline-item mb-5">
                            <h5 class="fw-bold"><i class="bi bi-mortarboard me-2"></i>Bachelor's degree in physical sciences (2018-2019)</h5>
                            <p class="text-muted mb-2 fw-bold" data-aos="fade-right"  data-aos-easing="ease-out-cubic"  >AL bachir school</p>
                        </li>
                    </ul>
                </div>
            </div>
         </div> 
	</div>
    
</div>
</section>

<!-- projects section -->
<section id="projects" class="projects">
<h1 style="font-family:Old Standard TT;" class="display-4 text-center uk-margin-large-bottom " data-aos="fade-up">Projects <span class="animate-border tw-mt-30 tw-mb-30 uk-align-center"></span>  </h1>
   <div style="background-color:white;" class="container uk-margin-large-bottom uk-margin-large-top">
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid >
            <div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-hover uk-card-body  uk-animation-shake" data-aos-easing="ease-out-cubic"  >
                    <h3 class="uk-card-title" style="font-family:anton; color:purple; font-weight:bold;">Restaurant website</h3>
                    <div class="uk-width-auto">
                    <img class="" width="100%" height="100%" src="images/fork.jpg">
                </div>
                    <p>Creation of a website restaurent which offers some recipe,this project allowed me to practice (js/html/css/bootstrap) and to know their basic notions.</p>
                </div>
            </div>
            </div>
            <div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-hover uk-card-body  uk-animation-shake"data-aos-easing="ease-out-cubic"  >
                    <h3 class="uk-card-title" style="font-family:anton; color:purple; font-weight:bold;">Parking website</h3>
                    <div class="uk-width-auto">
                    <img class="" width="100%" height="100%" src="images/park.jpg">
                </div>
                    <p class="uk-margin-medium-bottom">Creation of a site that allows the management of a parking lot with (VB).</p>
                </div>
            </div>
            </div>
            <div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-hover uk-card-body  uk-animation-shake">
                    <h3 class="uk-card-title"style="font-family:anton; color:purple; font-weight:bold;" data-aos-easing="ease-out-cubic">Student management website</h3>
                    <div class="uk-width-auto">
                    <img class="" width="100%" height="100%" src="images/person.jpg">
                </div>
                    <p  class="uk-margin-small-bottom">Created a site that allows student management (add/remove/edit) using mysql as the database , and based on (php/bootstrap).</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- latest projet -->
    <h1 class="display-4 text-center uk-margin-large-bottom uk-margin-medium-top  " data-aos="fade-up">  My Latest Projects <span class="animate-border tw-mt-30 tw-mb-30 uk-align-center"></span> </h1>

    <div style="background-color:white;" class="container">
            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                <div class="uk-animation-toggle" tabindex="0">
                    <div class="uk-card uk-card-default uk-card-hover uk-card-body  uk-animation-shake" >
                        <h3 class="uk-card-title" style="font-family:anton; color:purple; font-weight:bold;" data-aos-easing="ease-out-cubic">my websites</h3>
                        <div class="uk-width-auto">
                        <img class="" width="100%" height="100%" src="images/website.jpg">
                    </div>
                        <p  >I created my own web site (html/bootstrap 5/css/uikit/js) to learn new things and to give visitor the opportunity to quickly and easily learn about me and  all the things i can do and my skills too , The first version <small style="color:rgb(119, 196, 255);"> click here</small> <button class="web-btn" style="border:none;margin-left:-2px; background-color:white; width:2rem;"> <a href="https://nadiaajmaoui.000webhostapp.com/index.php" target="_blank"><i style="  color:rgb(119, 196, 255);  font-size:25px; background:transparent;"  class="bi bi-globe "></i></a></button> The lastest version<small style="color:rgb(119, 196, 255);"> click here </small> <button class="web-btn" style="border:none;margin-left:-2px; background-color:white; width:2rem;"> <a href="#home"><i style=" color:rgb(119, 196, 255); font-size:25px; background:transparent;"  class="bi bi-globe"></i></a></button> .</p>
                    </div>
                </div>
                </div>
                <div>
                <div class="uk-animation-toggle" tabindex="0">
                    <div class="uk-card uk-card-default uk-card-hover uk-card-body   uk-animation-shake">
                        <h3 class="uk-card-title" style="font-family:anton; color:purple; font-weight:bold;" data-aos-easing="ease-out-cubic"> Car rental website</h3>
                        <div class="uk-width-auto">
                        <img class="" width="100%" height="100%" src="images/rental.jpg">
                    </div>
                        <p  class="uk-margin-medium-bottom">Car rental site for which we manage the reservation process, and also we have the admin interface to manage the catalog and also the reservations to see the complete project please<small style="color:rgb(119, 196, 255);"> click here </small> <button class="web-btn" style="border:none;margin-left:-2px; background-color:white; width:2rem;"> <a href="https://www.google.com/maps/search/allal+fassi+nfiss+2/@31.65359,-8.0302061,15z/data=!3m1!4b1?hl=fr"><i style=" color:rgb(119, 196, 255); font-size:25px; background:transparent;"  class="bi bi-car-front"></i></a></button> .</p>
                    </div>
                </div>
                </div>
            </div>
    </div>
</section>

<!-- skills projects using filter method (like isotope) -->
<section  id="skills" class="skills"  data-aos-easing="ease-out-cubic" >
  <h1  style="color:black; padding-top:5rem; font-family:Old Standard TT;" class="display-4 text-center "  data-aos="fade-up"> Skills <span class="animate-border tw-mt-30 tw-mb-30 uk-align-center"></span> </h1>
<div class="container" data-aos="fade-up" >
    <div  uk-filter="target: .js-filter; animation: delayed-fade">
            <ul   class="uk-subnav  uk-flex uk-flex-center">
                <li  uk-filter-control><a style="text-decoration:none;" class="uk-text-large uk-button-text" href="#">All</a></li>
                <li uk-filter-control=".tag-desktop"><a style="text-decoration:none;" class=" uk-button-text" href="#">Desktop</a></li>
                <li uk-filter-control=".tag-web"><a style="text-decoration:none;" class=" uk-button-text" href="#">Web</a></li>
            </ul>

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center " uk-grid>
            <li class="tag-desktop">
                <div class="uk-card uk-card-default uk-card-body"  >
                    <h4>Cpp</h4>
                    <div class="container">
                        <div class="skills cpp">75%</div>
                    </div>
                </div>      
            </li>
            <li class="tag-desktop">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>C</h4>
                    <div class="container">
                        <div class="skills c">90%</div>
                    </div>
                </div>      
            </li>

            <li class="tag-desktop">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>Sql server</h4>
                    <div class="container">
                        <div class="skills sql">50%</div>
                    </div>
                </div>      
            </li>
            <li class="tag-desktop">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>Python</h4>
                    <div class="container">
                        <div class="skills python">60%</div>
                    </div>
                </div>      
            </li>
            <li class="tag-web">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>Html</h4>
                    <div class="container">
                        <div class="skills html">80%</div>
                    </div>
                </div>      
            </li>
            <li class="tag-web">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>Java script</h4>
                    <div class="container">
                        <div class="skills js">65%</div>
                    </div>
                </div>      
            </li>
            <li class="tag-web">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>Css</h4>
                    <div class="container">
                        <div class="skills css">70%</div>
                    </div>
                </div>      
            </li>
            <li class="tag-web">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>Uikit</h4>
                    <div class="container">
                        <div class="skills uikit">60%
                        </div>
                    </div>
                </div>      
            </li>
            <li class="tag-web">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>Bootstap 5</h4>
                    <div class="container">
                        <div class="skills bootstrap">60%</div>
                    </div>
                </div>      
            </li>
            <li class="tag-web">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>Bulma</h4>
                    <div class="container">
                        <div class="skills bulma">50%</div>
                    </div>
                </div>      
            </li>
            <li class="tag-web">
                <div class="uk-card uk-card-default uk-card-body">
                    <h4>Php</h4>
                    <div class="container">
                        <div class="skills php">58%</div>
                    </div>
                </div>      
            </li>
        </ul>
  </div>
</div>
</section>

<section id="certificates" class="certficates">
<div class="uk-position-relative uk-container uk-container-small uk-flex uk-flex-middle" uk-height-viewport="offset-top: true">
       <div class="uk-section" style=" background-color:white;margin: auto;">
            <h1  style="font-family:Old Standard TT;" class="display-4 text-center uk-margin-large-bottom " data-aos="fade-up">Certificates:
                <span class="animate-border tw-mt-30 tw-mb-30 uk-align-center"></span>  </h1>
            <div class="uk-child-width-expand@s" uk-grid>
                <div class="uk-grid-item-match">
                            <div class="uk-text-center">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img style="border-style: groove;  border-width: 8px; border-color:#42008D; " src="images/cert1.PNG" alt="" class=""  data-aos="fade-up" >
                        <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                            <p class="uk-h4 uk-margin-remove">
                            <div class="uk-animation-toggle" tabindex="0">
                                <div class="uk-animation-Shake">
                                <button class="cert-btn"><a target="_blank"  href="https://www.coursera.org/account/accomplishments/certificate/RRFF992VMVMD">  <span><i style="color:white; font-weight:bold;" class="bi bi-link-45deg"></i></span></a></button> 
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
                <div>
                <div class="uk-text-center">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img  style="border-style: groove;  border-width: 8px; border-color:purple; border-color:#42008D;;" src="images/cert2.PNG" alt="" data-aos="fade-up" >
                        <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                            <p class="uk-h4 uk-margin-remove">
                            <div class="uk-animation-toggle" tabindex="0">
                                <div class="uk-animation-Shake">
                                     <button class="cert-btn"><a target="_blank"  href="https://www.coursera.org/account/accomplishments/certificate/RRFF992VMVMD">  <span><i style="color:white; font-weight:bold;" class="bi bi-link-45deg"></i></span></a></button> 
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
         </div> 
	</div>
</section>

<section  class="internships" id="internships">
<h1  style="color:black; padding-top:5rem;font-family:Old Standard TT;"  class="display-4 text-center " data-aos="fade-up" >Internships <span class="animate-border tw-mt-30 tw-mb-30 uk-align-center"></span>  </h1>
<div class="uk-background-fixed uk-background-center-center " style="background-image: url(images/people.jpg); background-size: cover; height:40rem;">
      <div class="uk-flex uk-flex-center">

      <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle" style="margin-top:10rem;" tabindex="0">
            <img src="images/image (1) (2).jpg" width=416 height=400 alt="stage" data-aos="fade-up"  data-aos-duration="500" >
            <div  style="margin:3rem; cursor:pointer;"class="uk-transition-slide-fade uk-position-cover uk-overlay uk-overlay-primary">
            <p class="uk-h4 uk-margin-remove" style=" font-weight:bold; color:black; "uk-tooltip=" An experience that allowed me to know the IT development sector and also to improve my skills.">
            <div  style="background-color:#f2b537; font-weight:bold; ">
                 2 months internship in an IT development company -megalogi-rabat  <br>
                    <div class="uk-animation-toggle" tabindex="0">
                        <div class="uk-animation-Shake">
                        <button class="link-btn uk-margin-small-top" style="backgound-color:transparent;"><a target="_blank"  href="https://megalogi.ma">  <span><i style="color:rgba(0,212,255,1); " class="  h4 bi bi-globe"></i></span></a></button> 
                        </div>
                    </div>
                </p>
            </div>
            </div>
        </div>
    </div>
      </div>
    </div>
</section>


<section class="footer uk-margin-small-top">
    <div class="uk-background-muted ">
        <div class="uk-child-width-expand@s uk-text-center">
            <div >
            <span  style="font-family:anton; font-size:12px; " class="uk-flex uk-flex-center">
                &copy;copyright 2022 all right reserved made  by  <span style="color:#f2b537; font-weight:bolder;margin-left:2px; ">Nadia Ajmaoui </span> 
            </div>
                <div class="">
                <div id="google_translate_element"> </div>
                </div>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.VERTICAL}, 'google_translate_element');
                        }
                    </script>
                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </span>
        </div>

    </div>
</section>
















<!-- typed script -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
   // typed style
  var options = {
  strings: [' Ajmaoui'],
  typeSpeed: 70,
  loop:true
    };
  var typed = new Typed('.second', options);
</script>

<!-- typed -->
<script>
   // typed style
  var options = {
  strings: [' welcome to my website ;'],
  typeSpeed: 70,
  loop:true
    };
  var typed = new Typed('.element', options);
</script>

<!-- aos -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<!-- jquery/bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    // loading page 
$('.page-loading').delay(2500).fadeOut();
</script>

<!-- aos library -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
 <!-- isotop -->

 <script src="js/isotope.pkgd.min.js"></script>
 <script>
 var $grid = $('.menu-items').isotope({
  // options
});
// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});
 </script>

 
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.6/dist/js/uikit-icons.min.js"></script>
<script src="js/js.js"></script>
<script>AOS.init();</script>
</body>
</html>
