</main>
<!--Start footer-->
<style>
   #footer {
  position: absolute;
  bottom: 0;
  width: 100%;
}

#bottom-bar {
  position: relative;
  margin-top: -50px; /* adjust this value to match the height of your footer */
  z-index: 1; /* make sure it's above other elements */
}
</style>
<footer id="footer" class="bg-dark text-white py-2" id="bottom-bar">
    <div class="contain">
        <div class="row align-items-center  justify-content-lg-between">
          <div class="col-lg-12">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
                 <a href="#" class="nav-link pe-0 text-white" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                 <a href="#" class="nav-link pe-0 text-white" target="_blank">Services</a>
              </li>
              <li class="nav-item">
                 <a href="#" class="nav-link pe-0 text-white" target="_blank">Contact</a>
              </li>
              <li class="nav-item">
                 <a href="#" class="nav-link pe-0 text-white" target="_blank">Help</a>
              </li>
            </ul>
          </div>
        </div>
    </div>
</footer>

<!--Start footer-->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="./assets/js/jquery-3.6.4.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Owl-carousel-Javascript-CDN-->
<script src="jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--isoplugin-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--Javasript-->


<script src="./assets/js/custom.js"></script>
<!--Custom Javasript-->
<script src="index.js"></script>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    alertify.set('notifier','position', 'top-right');
    <?php 
    if(isset($_SESSION['message'])) 
    {
      ?>        
        alertify.success('<?= $_SESSION['message'] ?>');
      <?php
        unset($_SESSION['message']);
    } 
   ?>
  </script>
</body>
</html>