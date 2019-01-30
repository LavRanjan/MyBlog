@extends('layout.app')
@section('content')
  <style>
    .circle-chart {
      width: auto !important;
      height: auto !important;
    }
    .text_in{
      font-family: inherit;
      font-size: 20px;
      /* top: 67% !important; */
      margin: 15px 0 -33px 4px;
    }
  </style>
<!-- About Section Start -->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
            {{--<img class="img-fluid" src="/images/p1.jpg" alt="lav ranjan giri">--}}
          </div>
        </div> 
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
            <h3>About Me</h3>
            <p>More then 3 yrs of experience in building website and web based application with Core PHP and Laravel.
                I have very good experience in designing architecture of database in mysql, Unit testing of module and implement
                buisness requirement into applications.As a PHP developer, Mostly I focus on the backend part of the apllication or projects.
                I am having hands on experience in writing restful services for mobile application in laravel as well as in Core PHP.
                I like to solve complex problems and eager to learn new technologies especially related to web.</p>
            <div class="about-profile">
              <ul class="admin-profile">
                <li><span class="pro-title"> Name </span> <span class="pro-detail">Lav Ranjan Giri</span></li>
                <li><span class="pro-title"> Age </span> <span class="pro-detail">27 Years</span></li>
                <li><span class="pro-title"> Experience </span> <span class="pro-detail">3+ Years</span></li>
                <li><span class="pro-title"> Country </span> <span class="pro-detail">India</span></li>
                <li><span class="pro-title"> Location </span> <span class="pro-detail"> BTM 1st Stage,Bengaluru-29</span></li>
                <li><span class="pro-title"> e-mail </span> <span class="pro-detail">lavranjankumar@gmail.com</span></li>
                <li><span class="pro-title"> Phone </span> <span class="pro-detail">+ (91) 8197630451</span></li>
                <li><span class="pro-title"> Freelance </span> <span class="pro-detail">Available</span></li>
              </ul>
            </div>
            <a href="file/Lav_Ranjan_[PHP-Laravel]Experienced_softwareEngg.pdf" target="_blank" class="btn btn-common"><i class="icon-paper-clip"></i> Download Resume</a>
            <a href="#contact" class="btn btn-danger"><i class="icon-speech"></i> Contact Me</a>
          </div>
        </div>   
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Services Section Start -->
  <section id="services" class="services section-padding">
    <h2 class="section-title wow flipInX" data-wow-delay="0.4s">What I do</h2>
    <div class="container">
      <div class="row">
        <!-- Services item -->
        <div class="col-md-6 col-lg-2 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
            <div id="demo">
              <div class="circlechart" data-percentage="80"><p class="text_in"></p></div>
            </div>
            {{--<div class="text_in">PHP</div>--}}
              <img src="/skills/ph.png" style="width:65%">
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-2 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
            <div id="demo">
              <div class="circlechart" data-percentage="75"><p class="text_in"></p></div>
            </div>
            {{--<div class="text_in">Laravel</div>--}}
              <img src="/skills/lr.png" style="width:65%">
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-2 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
              <div id="demo">
                  <div class="circlechart" data-percentage="65"><p class="text_in"></p></div>
              </div>
              {{--<div class="text_in">MySQL</div>--}}
              <img src="/skills/1.png" style="width:65%">
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-2 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
              <div id="demo">
                  <div class="circlechart" data-percentage="65"><p class="text_in"></p></div>
              </div>
              {{--<div class="text_in">PostgreSQL</div>--}}
              <img src="/skills/p4.png" style="width:105%">
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-2 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
              <div id="demo">
                  <div class="circlechart" data-percentage="60"><p class="text_in"></p></div>
              </div>
              {{--<div class="text_in">HTML,CSS</div>--}}
              <img src="/skills/h.png" style="width:65%">
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-2 col-xs-12" >
          <div class="services-item wow fadeInDown" data-wow-delay="0.3s" >
              <div id="demo">
                  <div class="circlechart" data-percentage="80"><p class="text_in" ></p></div>
              </div>
              {{--<div class="text_in" >Jquery</div>--}}
              <img src="/skills/j.png" style="width:65%">
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Services Section End -->

  <!-- Resume Section Start -->
  <div id="resume" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="education wow fadeInRight" data-wow-delay="0.3s">
            <ul class="timeline">
              <li>
                <i class="icon-graduation"></i>
                <h2 class="timelin-title">Education</h2>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">MCA - Visvesvaraya Technological University(Belgaum)</h3>
                  <span>2013-2016</span>
                  <p class="line-text">I pursued my postgraduation from Dayananda Sagar College of Engineering (Bangalore,Karnatka) affliated to Vishveswarya technological university(VTU) with aggregate of 82%.</p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">BCA - CCS University(Meerut)</h3>
                  <span>2010 - 2013</span>
                  <p class="line-text"> I pursued my postgraduation from Neelkanth Institute of Technology (Meerut,UP) affliated to Chaudhary Charan Singh University(CCSU) with aggregate of 74%.</p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Higher Secondary School - Shivam School(Bihta)</h3>
                  <span>2008 - 2010</span>
                  <p class="line-text">Completed my high schooling from Shivam School(Bihta) affiliated by Central Board of Secondary Education (CBSE). </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="experience wow fadeInRight" data-wow-delay="0.6s">
            <ul class="timeline">
              <li>
                <i class="icon-briefcase"></i>
                <h2 class="timelin-title">Experience</h2>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Backend Developer - Pacewisdom Solution Pvt Ltd.</h3>
                  <span>Oct 2018 - Present</span>
                  <p class="line-text"> Worked on the position of Backend Developer and handling all the duties and work of this position efficiently.Worked with the project manager and mainly responsible for writing user define function in PostgresSql and client side scripts for developing laravel and Postgressql based web applications..</p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Software Engineer - City-link Portal Pvt Ltd.</h3>
                  <span>Jul 2016 - Sep 2017</span>
                  <p class="line-text"> Worked on the position of Software engineer. Worked with the Team lead and responsible for writing Stored Procedure,Events,Trigger and scripts for developing PHP and MySQL based web applications.</p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Intern PHP Developer - City-link Portal Pvt Ltd.</h3>
                  <span>Feb 2016 - Jul 2016</span>
                  <p class="line-text">Worked as Intern and completed and successfully deployed a project in City-link Portal Pvt Ltd. </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Resume Section End -->

  <!-- Portfolio Section -->
  <section id="portfolios" class="section-padding">
    <!-- Container Starts -->
      <div class="container-fluid">
          <h2 class="section-title wow flipInX" data-wow-delay="0.4s">My Remarkable Works</h2>
          <div class="container py-3">
              <div class="row">
                  <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="card" >
                          <img class="card-img-top" src="images/projects/syngene.jpg" alt="GST Garage">
                          <div class="card-body">
                              <h5 class="card-title">Syngene International</h5>
                              <p class="card-text">The project Synegne Internation is Laravel CMS based application. All the content is handled by admin of the website like contentnt manipulation with preview and publish feature.</p>
                              <a href="http://syngenedev.pacewisdom.com/" class="btn btn-outline-info" target="_blank" style="color: dimgrey">Know more..</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="card" >
                          <img class="card-img-top" src="images/projects/syngene-admin.jpg" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title">Syngene International-Admin</h5>
                              <p class="card-text">This is the Admin pannel of Syngene International to manage the content of website by the admin. Application has role based login system to authenticate user for specific module provide access accordingly.</p>
                              <a href="http://syngenedev.pacewisdom.com/admin/" class="btn btn-outline-info" target="_blank" style="color: dimgrey">Know more..</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="card" >
                          <img class="card-img-top" src="images/projects/1payLogin.jpg" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title">One Payroll</h5>
                              <p class="card-text"> provide service to multiple tennant/Company .This application Involves thing like creating employee and setting organization paycycle environment.This application has numerous
                                  features like clockin/clockout,Leave managment,Loan apply and many others.</p>
                              <a href="https://onepay.pacewisdom.in/" class="btn btn-outline-info" target="_blank" style="color: dimgrey">Know more..</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="container py-3">
              <div class="row">
                  <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="card" >
                          <img class="card-img-top" src="images/projects/rsz_1gst_home.jpg" alt="GST Garage">
                          <div class="card-body">
                              <h5 class="card-title">GST Garage</h5>
                              <p class="card-text">The project GST Garage is all about the GST information and raising appeal for GST. In this website we can check all the GST tax and CGST ,IGST tax for any product. We have implemented a mock test module for user's who wants to get preapare for GST test .</p>
                              <a href="https://gstgarage.com/" class="btn btn-outline-info" target="_blank" style="color: dimgrey">Know more..</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="card" >
                          <img class="card-img-top" src="images/projects/Contract.jpg" alt="Planned Demand Truck Hiring">
                          <div class="card-body">
                              <h5 class="card-title">Planned Demand Truck Hiring-Admin</h5>
                              <p class="card-text"> This application facilitates customer to hire trucks on contract basis. Customer has to few details to create contract for the vehicle. Reports like Invoice, Trip Sheet and other report will be generated by the system on the month basis</p>
                              <a href="https://Admin.city-link.co.in/contract" class="btn btn-outline-info" target="_blank" style="color: dimgrey">Know more..</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 d-flex align-items-stretch">
                      <div class="card" >
                          <img class="card-img-top" src="images/projects/rsz_1cl-ond.jpg" alt="ON Demand Truck Hiring">
                          <div class="card-body">
                              <h5 class="card-title">ON Demand Truck Hiring</h5>
                              <p class="card-text">The City-Link is a transportation based company, it allows you to customize trucking solution for small / medium & large business setups with High end technology for fulfillment of In-City logistics and can be Expect reliability & transparency while you deal with City-Link.</p>
                              <a href="#" class="btn btn-outline-info" target="_blank" style="color: dimgrey">Know more..</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <!-- Container Ends -->
  </section>
  <!-- Portfolio Section Ends --> 

  <!-- Counter Area Start-->
  <section class="counter-section section-padding">
    <div class="container">
      <div class="row">
        <!-- Counter Item -->
        <div class="col-md-3 col-sm-6 work-counter-widget text-center">
          <div class="counter wow fadeInDown" data-wow-delay="0.3s">
            <div class="icon"><i class="icon-briefcase"></i></div>
            <div class="counterUp">250</div>
            <p>Project Working</p>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-md-3 col-sm-6 work-counter-widget text-center">
          <div class="counter wow fadeInDown" data-wow-delay="0.6s">
            <div class="icon"><i class="icon-check"></i></div>
            <div class="counterUp">950</div>
            <p>Project Done</p>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-md-3 col-sm-6 work-counter-widget text-center">
          <div class="counter wow fadeInDown" data-wow-delay="0.9s">
            <div class="icon"><i class="icon-diamond"></i></div>
            <div class="counterUp">150</div>
            <p>Awards Received</p>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-md-3 col-sm-6 work-counter-widget text-center">
          <div class="counter wow fadeInDown" data-wow-delay="1.2s">
            <div class="icon"><i class="icon-heart"></i></div>
            <div class="counterUp">299</div>
            <p>Happy Clients</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Counter Area End-->

  <!-- Contact Section Start -->
  <section id="contact" class="section-padding">      
    <div class="contact-form">
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <h2>Contact Form</h2>
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required="" data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group has-error">
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required=""></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common disabled" id="submit" type="submit" style="pointer-events: all; cursor: pointer;">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="footer-right-area wow fadeIn">
              <h2>Contact Address</h2>
              <div class="footer-right-contact">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <p>San Francisco, CA</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <p><a href="mailto:hello@tom.com">hello@tom.com</a></p>
                  <p><a href="mailto:tomsaulnier@gmail.com">tomsaulnier@gmail.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <p><a href="#">+ (00) 123 456 789</a></p>
                  <p><a href="#">+ (00) 123 344 789</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </section>
  <!-- Contact Section End -->

@endsection

@section('jscode')
 <script type="text/javascript">
     $('.circlechart').circlechart();
   
   $("#contactForm").validator().on("submit", function (event) {
      if (event.isDefaultPrevented()) {
          // handle the invalid form...
          formError();
          submitMSG(false, "Did you fill in the form properly?");
      } else {
          // everything looks good!
          event.preventDefault();
          submitForm();
      }
  });


  function submitForm(){
      // Initiate Variables With Form Content
      var name = $("#name").val();
      var email = $("#email").val();
      var msg_subject = $("#msg_subject").val();
      var message = $("#message").val();


      $.ajax({
          type: "POST",
          url: "assets/php/form-process.php",
          data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&message=" + message,
          success : function(text){
              if (text == "success"){
                  formSuccess();
              } else {
                  formError();
                  submitMSG(false,text);
              }
          }
      });
  }

  function formSuccess(){
      $("#contactForm")[0].reset();
      submitMSG(true, "Message Submitted!")
  }

  function formError(){
      $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
          $(this).removeClass();
      });
  }

  function submitMSG(valid, msg){
      if(valid){
          var msgClasses = "h3 text-left tada animated text-success";
      } else {
          var msgClasses = "h3 text-left text-danger";
      }
      $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
  }
 </script>
@endsection

