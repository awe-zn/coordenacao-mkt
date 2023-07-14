<?php
$theme = get_template_directory_uri();
?>

<!-- Rodapé -->
<footer>
  <div class="bg-dark-1 py-14 md:py-20">
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-16 md:gap-8">
      <div class="hidden lg:flex lg:col-span-3 xl:col-span-4 items-center justify-center">
        <a href="<?= home_url(); ?>">
          <img src="<?= $theme; ?>/dist/images/logo-lg.png" alt="">
        </a>
      </div>

      <!-- Rodapé - Contato -->
      <div class="space-y-8 lg:col-span-4 xl:col-span-3 lg:col-start-5 xl:col-start-6">
        <p class="text-primary-light text-2xl font-semibold">
          Contato
        </p>
        <ul class="text-white space-y-4">
          <li class="">
            <a href="tel:<?= get_field('telefone_contato', get_option('home_page_id')); ?>" class="flex gap-4 hover:underline" target="_blank">
              <img src="<?= $theme; ?>/dist/images/svg/phone.svg" alt="">
              <?= get_field('telefone_contato', get_option('home_page_id')); ?>
            </a>
          </li>
          <li class="">
            <a href="mailto:<?= get_field('email_contato', get_option('home_page_id')); ?>" class="flex gap-4 hover:underline" target="_blank">
              <img src="<?= $theme; ?>/dist/images/svg/mail.svg" alt="">
              <?= get_field('email_contato', get_option('home_page_id')); ?>
            </a>
          </li>
          <li class="">
            <a href="<?= get_field('link_endereco_contato', get_option('home_page_id')); ?>" class="flex gap-4 hover:underline" target="_blank">
              <img src="<?= $theme; ?>/dist/images/svg/location.svg" alt="">
              <?= get_field('endereco_contato', get_option('home_page_id')); ?>
            </a>
          </li>
        </ul>
      </div>

      <!-- Rodapé -  Fique atento -->
      <div class="space-y-8 lg:col-span-4 xl:col-span-3 xl:col-start-10">
        <p class="text-primary-light text-2xl font-semibold">
          Fique atento
        </p>
        <div class="space-y-6">
          <p class="text-white text-base font-normal">
            Lorem ipsum dolor sit amet adipiscing elit aliquam mauris sed ma
          </p>
          <form action="" class="space-y-4">
            <input type="email" required placeholder="Digite seu E-mail" class="block w-full bg-neve-base rounded px-4 py-2 text-base placeholder:text-dark-4 text-black transition-all focus:outline-none hover:outline hover:outline-[2px] hover:outline-offset-0 hover:outline-primary-extra-light focus:outline focus:outline-[2px] focus:outline-offset-0 focus:outline-primary-base focus:shadow-input">
            <input type="submit" value="Enviar" class="block text-center py-2 px-8 bg-transparent hover:bg-primary-light hover:bg-opacity-10 border border-primary-light rounded text-white font-semibold text-base transition cursor-pointer">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="flex items-center justify-center bg-dark-1 border-t border-neve-base py-4">
    <a href="https://agenciaweb.ifrn.edu.br/" target="_blank" title="Agência Web Escolar" class="block">
      <img src="<?= $theme; ?>/dist/images/svg/awe-logo.svg" alt="Logo da agência web escolar">
    </a>
  </div>
</footer>

<script src="<?= $theme; ?>/dist/js/plugins/jquery-3.6.4.min.js"></script>
<script src="<?= $theme; ?>/dist/js/plugins/owl.carousel.min.js"></script>
<script>
  $(document).ready(function () {
    $('#projetos_slider').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      items: 1,
      dots: true,
      dotsContainer: '#projetos_slider_dots',
    });
  });

  $(document).ready(function () {
    $('#testimonials_slider').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      items: 1,
      dots: true,
      dotsContainer: '#testimonials_slider_dots',
    });
  });

</script>
<script type="module" src="<?= $theme; ?>/dist/js/index.js"></script>

<?= wp_footer(); ?>

</body>

</html>