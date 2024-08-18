@extends('Front.layout.app')
@section('title','Contact Us')
@section('content')


<!--=================================
page-title-->

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url({{URL::asset('Front/images/contact-us.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <div class="page-title-name">
            <h1>Contact us</h1>
            <p>We know the secret of your success</p>
          </div>
            <ul class="page-breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
              <li><span>Contact us</span> </li>
         </ul>
       </div>
       </div>
    </div>
  </section>

  <!--=================================
  page-title -->


  <!--=================================
   contact-->

  <section class="contact white-bg page-section-ptb">
    <div class="container">
     <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="section-title text-center">
              <h6>let's work together</h6>
              <h2>Let’s Get In Touch!</h2>
            </div>
        </div>
        </div>
        <div class="touch-in white-bg">
         <div class="row">
         <div class="col-lg-4 col-md-3 sm-mb-30">
             <div class="contact-box text-center h-100">
                <i class="ti-map-alt theme-color"></i>
                <h6 class="uppercase mt-20">Head Office - INDIA</h5>
                <p class="mt-20">LIG 229, Sheri No.1, Shashtri Nagar
                    Bhavnagar. 364001, Gujarat INDIA.</p>
                <p class="mt-20">Hiren Vora <br><a href="tel:+919824202828"> +91 98242 02828</a></p>
             </div>
         </div>
         <div class="col-lg-4 col-md-3 sm-mb-30">
             <div class="contact-box text-center h-100">
                <i class="ti-map-alt theme-color"></i>
                <h6 class="uppercase mt-20">Branch Office - CANADA</h5>
                <p class="mt-20">25,Rue Febre,Dollared-des-Ormeaux,Monteral , HNB1N8.</p>
                <p class="mt-20">Jinal Doshi <br><a href="tel:+15147090859">  + 1 514 709 0859</a></p>

             </div>
         </div>
         <div class="col-lg-4 col-md-3 sm-mb-30">
             <div class="contact-box text-center h-100">
                <i class="ti-email theme-color"></i>
                <h5 class="uppercase mt-20">Email</h5>
                <p class="mt-20"><a href="mailto:alangshipyard@gmail.com">alangshipyard@gmail.com</a></p>
                <p class="mt-20"><a href="mailto:info@marineenginespares.com">info@marineenginespares.com</a></p>
             </div>
          </div>
         </divx>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
         <p class="mt-50 mb-30">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within <span class="tooltip-content-2" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 24 hours!</span></p>
        </div>
       </div>
    <div class="row">
      <div class="col-sm-12">
           <div id="formmessage">Success/Error Message Goes Here</div>
             <form id="contactform" role="form" method="post" action="php/contact-form.php">
              <div class="contact-form clearfix">
                 <div class="section-field">
                   <input id="name" type="text" placeholder="Name*" class="form-control"  name="name">
               </div>
                 <div class="section-field">
                   <input type="email" placeholder="Email*" class="form-control" name="email">
                </div>
                  <div class="section-field">
                    <input type="text" placeholder="Phone*" class="form-control" name="phone">
                </div>
                   <div class="section-field textarea">
                     <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                   </div>
                <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div>
                 <div class="section-field submit-button">
                  <input type="hidden" name="action" value="sendEmail"/>
                 <button id="submit" name="submit" type="submit" value="Send" class="button"> Send your message </button>
                 </div>
                </div>
            </form>
            <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="../../images/pre-loader/loader-02.svg" alt=""></div>
        </div>
    </div>
    </div>
  </section>

  <!--=================================
   contact-->


  <!--=================================
   contact map -->

  <section class="contact-map clearfix o-hidden">
     <div class="container-fluid p-0">
       <div class="row">
        <div class="col-lg-12">
        <div style="width: 100%; height: 350px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.351085859697!2d72.12297747346031!3d21.766669062029333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f517296177a79%3A0x51acbf89d1efe7ee!2sChetan%20Overseas!5e0!3m2!1sen!2sin!4v1723134288556!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
       </div>
       </div>
     </div>
  </section>

  <!--=================================
   contact map -->

@endsection
