 <div class="footer">
     <div class="f-info">
         <div class="container">
             <div class="row">
                 <div class="col-sm-4 col-md-4">
                     <div class="box-info">
                         <div class="box-info-icon">
                             <div class="icon-wrapper">
                                 <img src="{{ asset('website/images/profile.svg') }}" alt="logo bottom" class="logo-bottom" />
                             </div>
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
                             <div class="icon-wrapper">
                                 <img src="{{ asset('website/images/calendar.svg') }}" alt="logo bottom" class="logo-bottom" />
                             </div>
                         </div>
                         <div class="box-info-body">
                             <p style="    line-height: 14px;">We are open on</p>
                             <h4>Mon - Sat 9.30 to 5.30</h4>
                             <h4 class="holiay">Second Saturday & Sunday Holiday</h4>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-4 col-md-4">
                     <div class="box-info">
                         <div class="box-info-icon">
                             <div class="icon-wrapper">
                                 <img src="{{ asset('website/images/mail.svg') }}" alt="logo bottom" class="logo-bottom" />
                             </div>
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
                     <img src="{{ asset('website/images/logo-02.svg') }}" alt="logo bottom" class="logo-bottom" />
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

                 </div>
             </div>

             <div class="col-sm-3 col-md-3">
                 <div class="footer-item">
                     <div class="footer-title">
                         PAGES
                     </div>
                     <ul class="list">
                         <li><a href="{{route('website.home')}}" title="">Home</a></li>
                         <li><a href="{{route('website.aboutus')}}" title="">About</a></li>
                         <li><a href="{{route('website.service')}}" title="">Projects</a></li>
                         <li><a href="{{route('website.contactUs')}}" title="">Contact</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-sm-5 col-md-5">
                 <div class="footer-item">
                     <!-- <div class="subscribeSec">
                         <div class="footer-title">
                             Subscribe
                         </div>
                         <p>Get the best in wellness – sign up to stay informed with our latest updates and offers.</p>
                         <form action="{{ route('website.subscription.submit') }}" method="POST" class="footer-subscribe">
                             @csrf
                             <label for="p_submit"><img src="{{ asset('website/images/mail.svg') }}" alt="logo bottom" class="logo-bottom" /></label>

                             <input type="email" name="email" class="form-control" placeholder="enter your email" required>
                             <input id="p_submit" type="submit" value="send">
                         </form>
                     </div> -->
                     <div class="footerAddress">
                         <div class="footer-title">
                             OUR BRANCHES
                         </div>
                         <p style="margin-top:-10px">Thrissur | Vadakkancheri | Ottappalam | Manjeri | Kozhikode | Kannur | Ernakulam | Kottayam | Idukki
                         </p>
                         <div class="footer-title">
                            UPCOMING BRANCHES

                         </div>
                         <p style="margin-top:-10px">Palakkad | Perinthalmanna | Mannarkkad | Malappuram | Ottappalam | Chavakkad | Thriprayar | Irinjalakuda | Kodungallur | Chalakudy | Kollam | Thiruvananthapuram

                         </p>
                     </div>

                     <div class="footer-sosmed">
                         <a target="_blank" href="https://www.facebook.com/naturalmscs" title="">
                             <div class="item">
                                 <i class="fa fa-facebook"></i>
                             </div>
                         </a>

                         <a target="_blank" href="https://www.instagram.com/naturalmscs/?fbclid=IwZXh0bgNhZW0CMTEAYnJpZBExSHl6cnBHZkxCUGxDZDNsSwEeeOXfbaWMo_4Kk8VXQLpXMGklr8htsxotVAZdfI_2y4jKyCpjQMBG2qMgn_A_aem_M7Kfvn8s6xKXsBqh5gLDQA" title="">
                             <div class="item">
                                 <i class="fa fa-instagram"></i>
                             </div>
                         </a>
                         <!-- <a href="#" title="">
                             <div class="item">
                                 <i class="fa fa-youtube"></i>
                             </div>
                         </a> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="fcopy">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 col-md-6">
                     <p class="ftex left">&copy; 2025 NATURAL - All Rights Reserved</p>
                 </div>
                 <div class="col-sm-12 col-md-6">
                     <p class="ftex right">Designed & Developed by <a href="https://dawsonwalsh.com/" target="_blank">DW</a></p>
                 </div>
             </div>
         </div>
     </div>
 </div>