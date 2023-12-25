</main>
<!--Start footer-->
<footer id="footer" class="bg-dark text-light py-2 "  id="bottom-bar">
    <div class="container bg-dark ">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20px">ShopHouse</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, ad.</p>
            </div>
            <div class="col-lg-3 col-12">          
                <h4 class ="font-rubik font-size-20px">Address</i></h4>
                 <p class="font-rale font-size-14px text-white-50 pb-1">
                    #24, Ground Floor,<br>
                    2nd street xyz layout,<br>
                    Bac Giang, Viet Nam.
                 </p>
                 <a href="tel:+919879879876" class="text-white-50 pb-1 text-decoration-none"><i class="fa fa-phone"></i>+ 09 77347343764</a><br>
                 <a href="mailto:xyz@gmail.com" class="text-white-50 pb-1 text-decoration-none"><i class="fa fa-envelope"></i> xyz@gmail.com</a>
            </div>
            <div class="col-lg col-12">
                <h4 class="font-rubik font-size-20px">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="carts.php" class="font-rale font-size-14px text-white-50 pb-1">Cart</a>
                    <a href="my-order.php" class="font-rale font-size-14px text-white-50 pb-1">Order history</a>
                    <a href="view-order.php" class="font-rale font-size-14px text-white-50 pb-1">Delivery information</a>
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">Privacy policy</a>
                </div>
            </div>
            <div class="col-lg-4 col-12">          
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118829.82244517973!2d105.88474071640628!3d21.45156159999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313517a745114859%3A0x72186b8d58aab22d!2zxJDhu4FuIFThu6sgTG9uZyDEkGnhu4duIC0gQ8O0bmcgxJDhu5NuZyBU4bupIFBo4bun!5e0!3m2!1svi!2s!4v1680924953963!5m2!1svi!2s" class="w-100"  height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
    <p>&copy; Copyrights 2023. Designed by <a href="#" class="color-second">DumDumb</a></p>
</div>
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