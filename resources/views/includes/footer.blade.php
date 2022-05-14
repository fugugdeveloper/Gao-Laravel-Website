  </div>

  </div>
  </div>
  <style>
      #footer_img {
          background: url("assets/img/footer.jpg") no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          /*  margin: 35px;*/
          font: 13px/24px normal Helvetica, Arial, sans-serif;
          color: #4F5155;

      }

  </style>
  <footer id="footer_img">
      <div class="row">
          <div class="col-md-4 col-sm-6 footer-navigation">
              <h3><img src="/img/logo.png" class="img-circle"
                      style="padding:0px;margin-left:0px;height:100px;"><span>Gola Artistoota </span></a></h3>
              <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">About</a><strong>·</strong><a
                      href="#">Contact</a></p>
              <p class="company-name">Gola Artistoota Oromoo © <script>
                      var CurrentYear = new Date().getFullYear()
                      document.write(CurrentYear)

                  </script>
              </p>
          </div>
          <div class="col-md-4 col-sm-6 footer-contacts">
              <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                  <p><span class="new-line-span">Gola Artistoota Oromoo</span> Haramaya, Ethiopia</p>
              </div>
              <div><i class="fa fa-phone footer-contacts-icon"></i>
                  <p class="footer-center-info email text-left"> +251924180924</p>
              </div>
              <div><i class="fa fa-envelope footer-contacts-icon"></i>
                  <p> <a href="mailto:fandishefugug@gmail.com" target="_blank">fandishefugug@gmail.com</a></p>
              </div>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-md-4 footer-about">
              <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                          class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
          </div>
      </div>
  </footer>
  <script src="assets/ckeditor.js"></script>

  <script>
      ClassicEditor
          .create(document.querySelector('#editor1'), {
              // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
          })
          .then(editor1 => {
              window.editor1 = editor1;
          })
          .catch(err => {
              console.error(err.stack);
          });

  </script>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/venobox.min.js"></script>


  <script>
      $(document).ready(function () {
          $('.venobox').venobox({
              closeColor: '#f4f4f4',
              spinColor: '#f4f4f4',
              arrowsColor: '#f4f4f4',
              closeBackground: '#171910',
              overlayColor: 'rgba(23,25,29,0.8)'
          });
      });

  </script>

  <script type="text/javascript" src="assets/js/jquery.nivo.slider.js"></script>
  <script type="text/javascript">
      $(window).load(function () {
          $('#slider').nivoSlider();
      });

  </script>
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- aos -->
  <script src="plugins/aos/aos.js"></script>
  <!-- venobox popup -->
  <script src="plugins/venobox/venobox.min.js"></script>
  <!-- filter -->
  <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <!-- Main Script -->
  <script src="assets/js/js/script.js"></script>

  </body>

  </html>
