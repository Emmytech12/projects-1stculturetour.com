<div class="live-help-div" title="Chat With Us Now" onclick="_open_live_chat()">
  <div class="pix-div">
    <img src="<?php echo $website_url?>/all-images/images/cutomercare.jpg" alt="Customer Care"/>
  </div>
  <i class="bi-question"></i> Live Help
</div>

<div id="back2Top" title="Back to top"  onclick="_back_to_top();"><i class="bi-box-arrow-up"></i></div>

<script>
AOS.init({
  easing: 'ease-in-out-sine'
});
</script>

<!-- <script>
  $(window).on('load', function (){
    $('#loading').hide();
  }) 
</script> -->

<script src="<?php echo $website_url?>/slide-property/carousel/product-slide.js" type="text/javascript" ></script>

<div class="media-link-div">
    <a href="" title="Call Customer Care">
    <li style="background:#008040;"><i class="bi-telephone-outbound-fill"></i></li></a>
    <a href="" target="_blank" title="Facebook">
    <li style="background:#2980b9;"><i class="bi-facebook"></i></li></a>
    <a href="" target="_blank" title="Twitter">
    <li style="background:#3498db;"><i class="bi-twitter"></i></li></a>
    <a href="" target="_blank" title="Instagram">
    <li style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></li></a>
      <li style="background:#25D366;"><i class="bi-whatsapp"></i></li>
</div>





<script>
  function openFullScreen() {
    document.getElementById('overlay').style.display = 'flex';
    document.getElementById('fullscreen-img').innerHTML = document.getElementById('preview-img').innerHTML;
  }

  function closeFullScreen() {
      document.getElementById('overlay').style.display = 'none';
  }
</script>

<div class="overlay" id="overlay" onclick="closeFullScreen()">
    <div class="fullscreen-img-div" id="fullscreen-img">
        <img src="<?php echo $website_url?>/all-images/body-pix/img3.jpg" alt="Olumo"/>
    </div>
</div>

