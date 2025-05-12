 <div class="footer">
     <div class="f-info">
         <div class="container">
             <div class="row">
                 <div class="col-sm-4 col-md-4">
                     <div class="box-info">
                         <div class="box-info-icon">
                             <span class="fa fa-phone"></span>
                         </div>
                         <div class="box-info-body">
                             <p>Have a question? call us now</p>
                             <h4>+91 70128 29663</h4>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-4 col-md-4">
                     <div class="box-info">
                         <div class="box-info-icon">
                             <span class="fa fa-clock-o"></span>
                         </div>
                         <div class="box-info-body">
                             <p>We are open on</p>
                             <h4>Mon - Fri 08:00 - 20:00</h4>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-4 col-md-4">
                     <div class="box-info">
                         <div class="box-info-icon">
                             <span class="fa fa-phone"></span>
                         </div>
                         <div class="box-info-body">
                             <p>Need support? Drop us an email</p>
                             <h4><a href="mailto:info@naturalmscs.com" title="">info@naturalmscs.com</a></h4>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>

     <div class="container">

         <div class="row">
             <div class="col-sm-4 col-md-4">
                 <div class="footer-item">
                     <img src="{{ asset('website/images/footer-logo.png') }}" alt="logo bottom" class="logo-bottom" />
                     <div class="spacer-30"></div>
                     <h6>Registered Office</h6>
                     <p>11/744-745 Meenakshi Complex,<br>
                         Nelliyampadam, Vadakkancheri,<br>
                         Palakkad, Kerala -678686
                     </p>
                     <h6>Admin office</h6>
                     <p>PMJ Tower,1st Floor,<br>
                         Marathakkara,<br>
                         Thrissur - 680306
                     </p>
                     <div class="footer-sosmed">
                         <a href="#" title="">
                             <div class="item">
                                 <i class="fa fa-facebook"></i>
                             </div>
                         </a>
                         <a href="#" title="">
                             <div class="item">
                                 <i class="fa fa-twitter"></i>
                             </div>
                         </a>
                         <a href="#" title="">
                             <div class="item">
                                 <i class="fa fa-instagram"></i>
                             </div>
                         </a>
                         <a href="#" title="">
                             <div class="item">
                                 <i class="fa fa-pinterest"></i>
                             </div>
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-sm-3 col-md-3">
                 <div class="footer-item">
                     <div class="footer-title">
                         PAGES
                     </div>
                     <ul class="list">
                         <li><a href="about.html" title="">About</a></li>
                         <li><a href="project.html" title="">Projects</a></li>
                         <li><a href="pricing-table.html" title="">Pricing</a></li>
                         <li><a href="news-grid.html" title="">Blog</a></li>
                         <li><a href="faq.html" title="">Faq</a></li>
                         <li><a href="contact.html" title="">Contact</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-sm-5 col-md-5">
                 <div class="footer-item">
                     <div class="footer-title">
                         Subscribe
                     </div>
                     <p>Lit sed The Best in dolor sit amet consectetur adipisicing elit sedconsectetur adipisicing</p>
                     <form action="{{ route('website.subscription.submit') }}" method="POST" class="footer-subscribe">
                         @csrf
                         <!-- CSRF protection for form submission -->
                         <input type="email" name="email" class="form-control" placeholder="enter your email" required>
                         <input id="p_submit" type="submit" value="send">
                         <label for="p_submit"><i class="fa fa-envelope"></i></label>
                         <p>Get the latest updates and offers.</p>
                     </form>
                 </div>
             </div>
         </div>
     </div>

     <div class="fcopy">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 col-md-12">
                     <p class="ftex">&copy; 2025 NATURAL - All Rights Reserved</p>
                 </div>
             </div>
         </div>
     </div>
 </div>
