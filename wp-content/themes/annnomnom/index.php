<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<title>Andrew Smith - Responsive Resume / Personal Portfolio Template</title>
<link rel="shortcut icon" href="favicon.ico">

<!-- Google Font-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700' rel='stylesheet' type='text/css'>
<!-- Design Style -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/scroll.css';?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/style.css';?>" />
<!-- Icon -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/font-awesome.css';?>" />
<!-- Portfolio Thumbnail / Slider -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/portfolio.css';?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/carousel.css';?>">
<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/responsive.css';?>" />
</head>
<body>
<div id="container" class="container">
  <!-- Left Menu / Logo-->
  <aside class="menu" id="menu">
    <div class="logo">
      <!-- Logo image-->
      <img src="http://placehold.it/140x140" alt=""/>
      <!-- Logo name-->
      <span>Andrew Smith</span></div>
    <!-- Mobile Navigation-->
    <a href="#menu1" class="menu-link"></a>
    <!-- Left Navigation-->
    <nav id="menu1" role="navigation"> <a href="#chapterintroduction"><span id="link_introduction" class="active">Home</span></a> <a href="#chapterabout"><span id="link_about">About</span></a> <a href="#chapterskills"><span id="link_skills">Skills</span></a> <a href="#chapterexperience"><span id="link_experience">Experience</span></a> <a href="#chaptereducation"><span id="link_education">Education</span></a> <a href="#chapterportfolio"><span id="link_portfolio">Portfolio</span></a> <a href="#chaptercontact"><span id="link_contact">Contact</span></a></nav>
    <div class="social"> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> </div>
    <div class="copyright"> © Andrew Smith.<br>
      All Rights Reserved. </div>
  </aside>
  <!-- Go to top link for mobile device -->
  <a href="#menu" class="totop-link">Go to the top</a>
  <div class="content-scroller">
    <div class="content-wrapper">

      <!-- Introduction -->
      <article class="content introduction noscroll" id="chapterintroduction">
        <div class="inner">
          <h2><span>HEllo, I'm</span><br>
            Andrew Smith</h2>
          <span class="title">UX Designer / Frontend Developer</span> </div>
        <div id="owl-demo" class="owl-carousel">
          <div class="item"><img src="http://placehold.it/804x979" alt="" /></div>
          <div class="item"><img src="http://placehold.it/804x979" alt="" /></div>
          <div class="item"><img src="http://placehold.it/804x979" alt="" /></div>
        </div>
      </article>

      <!-- About -->
      <article class="content about white-bg" id="chapterabout">
        <div class="inner">
          <h2>About</h2>
          <div class="title-divider"></div>
          <div class="about-con">
            <ul>
              <li>Name: Andrew Smith</li>
              <li>Email: <a href="mailto:andrew@gmail.com">andrew@gmail.com</a></li>
              <li>Phone: (123) - 456-7890</li>
              <li>Date of birth: 23 February 1986</li>
              <li>Address: PO Box 16122 Collins Street West, Victoria, USA.</li>
              <li>Nationality: United States</li>
            </ul>
            <h3>Professional Profile</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit.<br>
            </p>
            <a href="#" class="button">Download resume as PDF format</a> <img src="http://placehold.it/150x134" class="signature" alt="" /></div>
        </div>
      </article>

      <!-- Skills -->
      <article class="content skills gray-bg" id="chapterskills">
        <div class="inner">
          <h2>Skills</h2>
          <div class="title-divider"></div>
          <h3>Just My Awesome Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="skills-con">
            <div class="container-sub margin-top50">
              <div class="row">
                <div class="col-6 margin-bottom50">
                  <div class="col-6"><span class="chart" data-percent="75"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>Film Editing</h4>
                    <p>Expert, 4 years</p>
                  </div>
                </div>
                <div class="col-6 margin-bottom50">
                  <div class="col-6"><span class="chart" data-percent="88"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>Art Direction</h4>
                    <p>Advanced, 2 years</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col-6"><span class="chart" data-percent="90"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>Technical Expertise</h4>
                    <p>Expert, 8 years</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col-6"><span class="chart" data-percent="96"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>HTML5 CSS3</h4>
                    <p>Expert, 8 years</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub skill-list">
              <div class="row">
                <h3>Knowledge</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="col-4 margin-top10">
                  <ul>
                    <li>Google Analythics & SEO</li>
                    <li>Instal and Configure</li>
                    <li>E-commerce Platform</li>
                    <li>Color theory knowledge</li>
                  </ul>
                </div>
                <div class="col-4 margin-top10">
                  <ul>
                    <li>Photo manipulation skills</li>
                    <li>Digital Painting</li>
                    <li>Photo Composition</li>
                    <li>Good sense of Tipography</li>
                  </ul>
                </div>
                <div class="col-4 margin-top10">
                  <ul>
                    <li>Web Usability</li>
                    <li>Grid & Layout</li>
                    <li>Portrait Retouching</li>
                    <li>Video Editing</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub">
              <div class="row">
                <h3>Language Skills</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="progressbar-main margin-top50">
                  <div class="progress-bar-description">English Experienced</div>
                  <div id="progressBar" class="progress">
                    <div class="progress-value"></div>
                  </div>
                </div>
                <div class="progressbar-main margin-top40">
                  <div class="progress-bar-description">French Advanced</div>
                  <div id="progressBar2" class="progress">
                    <div class="progress-value"></div>
                  </div>
                </div>
                <div class="progressbar-main margin-top40">
                  <div class="progress-bar-description">German Basic</div>
                  <div id="progressBar3" class="progress">
                    <div class="progress-value"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Experience -->
      <article class="content experience white-bg" id="chapterexperience">
        <div class="inner">
          <h2>Experience</h2>
          <div class="title-divider"></div>
          <h3>14 Years Experience!</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="experience-con">
            <div class="container-sub">
              <div class="full-divider"></div>
              <div class="row">
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-send-o"></i></div>
                    <div class="flot-left">
                      <h5>Panara Media</h5>
                      <h4>Art Director</h4>
                      <span>2014 - 2013</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                    Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-briefcase"></i></div>
                    <div class="flot-left">
                      <h5>Ace Advertising</h5>
                      <h4>Project Manager</h4>
                      <span>2013 - 2011</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                    Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-arrows-alt"></i></div>
                    <div class="flot-left">
                      <h5>Linksture Web</h5>
                      <h4>Senior UX Designer</h4>
                      <span>2011 - 2008</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                    Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-quote-right"></i></div>
                    <div class="flot-left">
                      <h5>Matrix Media</h5>
                      <h4>Visual / UI Designer</h4>
                      <span>2008 - 2006</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                    Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-bullhorn"></i></div>
                    <div class="flot-left">
                      <h5>Creatika Agency</h5>
                      <h4>Graphic Designer</h4>
                      <span>2006 - 2004</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                    Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Education -->
      <article class="content education gray-bg" id="chaptereducation">
        <div class="inner">
          <h2>Education</h2>
          <div class="title-divider"></div>
          <h3>Just My Education</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="education-con">
            <div class="container-sub">
              <div class="full-divider"></div>
              <div class="row">
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-photo"></i></div>
                    <div class="flot-left">
                      <h5>University of Design</h5>
                      <h4>Bachelor of Arts</h4>
                      <span>2009 - 2010</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                    Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                    <div class="flot-left">
                      <h5>Boston State University</h5>
                      <h4>Visual Art & Design</h4>
                      <span>2006 - 2007</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                    Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-life-bouy"></i></div>
                    <div class="flot-left">
                      <h5>Boston State University</h5>
                      <h4>Degree of Design</h4>
                      <span>2004 - 2005</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                    Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Pportfolio -->
      <article class="content portfolio white-bg" id="chapterportfolio">
        <div class="inner">
          <h2>Portfolio</h2>
          <div class="title-divider"></div>
          <h3>Our portfolio features a variety of projects and services</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="portfolio-con">
            <div class="container-sub margin-top50">
              <div class="row">
                <div id="grid-gallery" class="grid-gallery">
                  <section class="grid-wrap">
                    <ul class="grid">
                      <li>
                        <figure> <img src="http://placehold.it/700x475" alt=""/>
                          <figcaption>
                            <div class="figcaption-details"> <img src="<?php echo get_template_directory_uri() . '/images/icon-plus.png';?>" height="82" width="82" alt="" />
                              <h3>Project Name</h3>
                              <span>Work Details</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                       <figure> <img src="http://placehold.it/700x475" alt=""/>
                          <figcaption>
                            <div class="figcaption-details"> <img src="<?php echo get_template_directory_uri() . '/images/icon-plus.png';?>" height="82" width="82" alt="" />
                              <h3>Project Name</h3>
                              <span>Work Details</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                       <figure> <img src="http://placehold.it/700x475" alt=""/>
                          <figcaption>
                            <div class="figcaption-details"> <img src="<?php echo get_template_directory_uri() . '/images/icon-plus.png';?>" height="82" width="82" alt="" />
                              <h3>Project Name</h3>
                              <span>Work Details</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure> <img src="http://placehold.it/700x475" alt=""/>
                          <figcaption>
                            <div class="figcaption-details"> <img src="<?php echo get_template_directory_uri() . '/images/icon-plus.png';?>" height="82" width="82" alt="" />
                              <h3>Project Name</h3>
                              <span>Work Details</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure> <img src="http://placehold.it/700x475" alt=""/>
                          <figcaption>
                            <div class="figcaption-details"> <img src="<?php echo get_template_directory_uri() . '/images/icon-plus.png';?>" height="82" width="82" alt="" />
                              <h3>Project Name</h3>
                              <span>Work Details</span> </div>
                          </figcaption>
                        </figure>
                      </li>
                    </ul>
                  </section>

                  <!-- Lightbox Popup -->
                  <section class="slideshow">
                    <ul>
                      <li>
                        <figure>
                          <figcaption>
                            <h3>Project Name</h3>
                            <span>Work Details</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis,            ullamco craft beer.</p>
                          </figcaption>
                          <div id="owl-demo" class="owl-carousel">
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                          </div>
                        </figure>
                      </li>
                      <li>
                        <figure>
                          <figcaption>
                           <h3>Project Name</h3>
                            <span>Work Details</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                          </figcaption>
                          <img src="http://placehold.it/700x475" alt="" />
                          </figure>
                      </li>
                      <li>
                        <figure>
                          <figcaption>
                            <h3>Project Name</h3>
                            <span>Work Details</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis,            ullamco craft beer.</p>
                          </figcaption>
                          <div id="owl-demo" class="owl-carousel">
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                            <div class="item"><img src="http://placehold.it/700x475" alt="" /></div>
                          </div>
                        </figure>
                      </li>
                      <li>
                       <figure>
                          <figcaption>
                           <h3>Project Name</h3>
                            <span>Work Details</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                          </figcaption>
                          <img src="http://placehold.it/700x475" alt="" />
                          </figure>
                      </li>
                      <li>
                        <figure>
                          <figcaption>
                           <h3>Project Name</h3>
                            <span>Work Details</span>
                            <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                          </figcaption>
                          <img src="http://placehold.it/700x475" alt="" />
                          </figure>
                      </li>
                    </ul>
                    <nav> <span class="fa nav-prev"></span> <span class="fa nav-next"></span> <span class="fa nav-close"></span> </nav>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Contact -->
      <article class="content contact gray-bg" id="chaptercontact">
        <div class="inner">
          <h2>Contact</h2>
          <div class="title-divider"></div>
          <h3>Let's Keep In Touch</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="full-divider"></div>
          <div class="contact-con margin-top50">
            <div class="container-sub">
              <div class="row">
                <div class="contact-details">
                  <div class="col-6">
                    <div class="contact-text">
                      <div class="col-2 icon-block address"><i class="fa fa-map-marker"></i></div>
                      <div class="flot-left"> <strong>Andrew Smith</strong><br>
                        PO Box 16122 Collins Street West,<br>
                        Victoria 8007, United States. </div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block phone"><i class="fa fa-phone"></i></div>
                      <div class="flot-left"> <strong>Phone</strong><br>
                        +123-456-7890 </div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block email"><i class="fa fa-envelope"></i></div>
                      <div class="flot-left"> <strong>Email</strong><br>
                        <a href="mailto:no-reply@domain.com">no-reply@domain.com</a> </div>
                    </div>
                  </div>
                  <div class="col-6 m-margin-top30">
                    <h3>I'm also on Social Networks</h3>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.
                    <div class="contact-social margin-top30"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-linkedin"></i></a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub">
              <div class="row">
                <div class="contact-form">
                  <h3>Drop Me a Line</h3>
                  <form id="form1" name="form1" method="post" >
                    <input name="name" type="text" id="name" placeholder="Your Name..." />
                    <input name="email" type="text" id="email" placeholder="Your Email..." />
                    <textarea name="message" id="message" cols="45" rows="5" placeholder="Your Message..."></textarea>
                    <input type="submit" name="button" id="button" value="say hello!" >
                    <div id="successmsg" ></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Introduction -->
      <article class="content introduction-end" id="chapterthankyou">
        <div class="inner">
          <div class="introduction-end-con margin-top50">
            <h3><strong>Andrew Smith</strong></h3>
            <div id="rotate" class="rotate">
              <div><span>awesome.</span></div>
              <div><span>invincible.</span></div>
              <div><span>unbeatable.</span></div>
              <div><span>indestructible.</span></div>
            </div>
          </div>
        </div>
      </article>
    </div>
    <!-- content-wrapper -->
  </div>
  <!-- content-scroller -->
</div>
<!-- Pie Chart / Skills -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/jquery-2.0.3.min.js';?>"></script>
<!-- Send Email -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/sendemail.js'?>"></script>
<!-- Progressbar / Skills-->
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/progressbar.js'?>"></script>
<!-- Portfolio-->
<script src="<?php echo get_template_directory_uri() . '/js/modernizr.custom.js'?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/head.min.js'?>"></script>
<!-- Portfolio Thumbnail -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/imagesloaded.min.js'?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/masonry.min.js'?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/class_helper.js'?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/grid_gallery.js'?>"></script>
<!-- Portfolio Grid -->
<script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
<!-- Page Scrolling -->
<script>
head.js(
    { jquery : "<?php echo get_template_directory_uri() . '/js/jquery.min.js';?>" },
    { mousewheel : "<?php echo get_template_directory_uri() . '/js/jquery.mousewheel.js';?>" },
    { mwheelIntent : "<?php echo get_template_directory_uri() . '/js/mwheelIntent.js';?>" },
    { jScrollPane : "<?php echo get_template_directory_uri() . '/js/jquery.jscrollpane.min.js';?>" },
    { history : "<?php echo get_template_directory_uri() . '/js/jquery.history.js';?>" },
    { stringLib : "<?php echo get_template_directory_uri() . '/js/core.string.js';?>" },
    { easing : "<?php echo get_template_directory_uri() . '/js/jquery.easing.1.3.js';?>" },
    { smartresize : "<?php echo get_template_directory_uri() . '/js/jquery.smartresize.js';?>" },
    { page : "<?php echo get_template_directory_uri() . '/js/jquery.page.js';?>" }
    );
</script>
<!-- Portfolio Slider-->
<script type="text/javascript"  src="<?php echo get_template_directory_uri() . '/js/carousel.js';?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/jquery.easypiechart.js';?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/text.rotator.js';?>"></script>
<!-- All Javascript Component-->
<script src="<?php echo get_template_directory_uri() . '/js/settings.js';?>"></script>
</body>
</html>