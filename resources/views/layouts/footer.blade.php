 <!-- footer start -->
 <footer>
    <div class="container">
       <div class="row">
          <div class="col-md-4">
              <div class="full">
                 <div class="logo_footer">
                   <a href="#"><img width="210" src="/photoes/logo.jpg" alt="logo" /></a>
                 </div>
                 <div class="information_f">
                   <p><strong>ADDRESS:</strong> Along Great North Road , Nakonde, Zambia</p>
                   <p><strong>TELEPHONE:</strong> +260979331072</p>
                   <p><strong>EMAIL:</strong> simfukwehenry@yahoo.com</p>
                 </div>
              </div>
          </div>
          <div class="col-md-8">
             <div class="row">
             <div class="col-md-7">
                <div class="row">
                   <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Menu</h3>
                   <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Testimonial</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Contact</a></li>
                   </ul>
                </div>
             </div>
           
                </div>
             </div>     
             <div class="col-md-5">
                <div class="widget_menu">
                   <h3>Newsletter</h3>
                   <div class="information_f">
                     <p>Subscribe by our newsletter and get update protidin.</p>
                   </div>
                   <div class="form_sub">
                      <form>
                         <fieldset>
                            <div class="field">
                               <input type="email" placeholder="Enter Your Mail" name="email" />
                               <input type="submit" value="Subscribe" />
                            </div>
                         </fieldset>
                      </form>
                   </div>
                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <!-- footer end -->
 <div class="cpy_">
    <p class="mx-auto">© 2024 All Rights Reserved By <br>
       Hustle Technology and Finacial Solutions
    </p>
 </div>
 <!-- jQery -->
 <script src="js/jquery-3.4.1.min.js"></script>
 <!-- popper js -->
 <script src="js/popper.min.js"></script>
 <!-- bootstrap js -->
 <script src="js/bootstrap.js"></script>
 <!-- custom js -->
 <script src="js/custom.js"></script>
 <script>
  let currentImageIndex = 0;
    const images = document.querySelectorAll('.slider-image');
    
    setInterval(() => {
        images[currentImageIndex].classList.remove('active');
        currentImageIndex = (currentImageIndex + 1) % images.length;
        images[currentImageIndex].classList.add('active');
    }, 3000); // 3000ms = 3 seconds
 </script>