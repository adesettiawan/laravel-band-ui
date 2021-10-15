<!-- Footer -->
<footer class="footer-style text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-9 col-md-12 mb-4 mb-md-0">
          <h5 class="mb-2 textF">Tweets Widget</h5>
  
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
            voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
          <h5 class="mb-2 textF">Follow Us</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-footer-style">Facebook</a>
            </li>
            <li>
              <a href="#!" class="text-footer-style">Instagam</a>
            </li>
            <li>
              <a href="#!" class="text-footer-style">Twitter</a>
            </li>
            <li>
              <a href="#!" class="text-footer-style">Youtube</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center text-dark p-3 footer-bottom-style">
      © <?= date('Y'); ?> Copyright:
      <a class="text-footer-style" href="">ProjectsBand.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>

<button onclick="topFunction()" id="myBtn" title="Home"><i class="fa fa-chevron-up"></i></button>

<script>
  
  var mybutton = document.getElementById("myBtn");
  
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
</html>