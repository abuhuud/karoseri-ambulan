<!-- Footer -->
<footer>
  <div class="container text-center mt-n4 mb-2 pb-2">
    <a href=" <?= base_url() ?>">
      <img style="width: 250px" src="<?= base_url('assets/img/Karoseriambulan-logo-2.png') ?>">
    </a>
    <span class="copyright mt-3">© Design : Ikrom Mauludin Salam</span>
  </div>
</footer>
<!-- End of Footer -->


<!-- JQuery, Popper JS, Boostrap JS -->

<script>
  $(document).ready(function() {
    $('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  });
</script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/all.js') ?>"></script>

</body>

</html>