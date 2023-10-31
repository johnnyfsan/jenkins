<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<?php
// SECAO DE HEADER
  include_once("./header.php");
?>

  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Ajudamos empresas a se tornarem mais eficientes e seguras com o uso adequado da tecnologia.</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Quer saber mais? Clique no link abaixo</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="https://api.whatsapp.com/send?phone=5541998214576&text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20os%20servi%C3%A7os%20e%20solu%C3%A7%C3%B5es%20ofertados%20pela%20Comps!" target="_blank" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>WhatsApp</span>
                <i class="bi bi-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <main id="main">
    <?php
    // SECAO DE PAGINAS //
      include_once("./sobre.php");
      include_once("./missao-proposito-valores.php");
      include_once("./servicos.php");
      include_once("./solucoes.php");
      include_once("./contato.php");
      include_once("./footer.php");
    ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Cookie Banner -->
<div id="cb-cookie-banner" class="alert alert-dark cookie-color-banner text-center mb-0" role="alert">
  &#x1F36A; Este site usa cookies para garantir que você tenha a melhor experiência em nosso site.
  <a href="https://www.cookiesandyou.com/" target="blank">Saiba mais</a>
  <button type="button" class="btn btn-primary btn-sm ms-3" onclick="window.cb_hideCookieBanner()">
    Entendi
  </button>
</div>
<!-- End of Cookie Banner -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>