<?php
$theme = get_template_directory_uri();

get_header();
?>

<!-- Seção principaç -->
<main class="py-16 lg:py-28 bg-white">
  <div class="container grid gap-20 md:gap-8 xl:gap-0 grid-cols-1 lg:grid-cols-12">
    <div class="lg:col-span-7 xl:col-span-6">
      <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl md:text-4.5xl text-dark-2 font-bold">
          Notícias
        </h1>
        <a href="<?= home_url(); ?>/noticias" class="text-sm text-dark-1 block border-b-2 border-b-primary-dark hover:text-primary-dark transition">
          Ver mais
        </a>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <?php
        $args = array(
          'posts_per_page' => 3,
          'category_name' => 'destaque',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()):
          $post_count = 1;

          while ($query->have_posts()):
            $query->the_post();

            $post_categories = get_the_category();
            $post_category = '';

            foreach ($post_categories as $category) {
              if ($category->name !== 'destaque') {
                $post_category = $category->name;
                break;
              }
            }

            if ($post_count === 1): ?>
              <a href="<?= get_permalink(); ?>" class="group sm:col-span-2 h-fit">
                <div class="relative block overflow-hidden w-full h-full md:h-[428px]">
                  <img src="<?= get_the_post_thumbnail(); ?>" class="object-cover h-full w-full group-hover:scale-110 transition" alt="">
                  <div class="absolute top-0 left-0 bg-primary-dark p-1 md:p-2 rounded-br">
                    <span class="text-white font-semibold text-sm md:text-base">
                      <?= $post_category; ?>
                    </span>
                  </div>
                </div>
                <div class="mt-4">
                  <p class="text-dark-1 font-semibold md:font-bold text-base md:text-2xl">
                    <?= get_the_title(); ?>
                  </p>
                  <p class="text-sm md:text-base font-light text-dark-2">
                    <?= get_the_date('d.m.Y'); ?>
                  </p>
                </div>
              </a>
            <?php else: ?>
              <a href="<?= get_permalink(); ?>" class="group h-fit">
                <div class="relative block overflow-hidden w-full h-full md:max-h-[176px]">
                  <img src="<?= get_the_post_thumbnail(); ?>" class="object-cover h-full w-full group-hover:scale-110 transition" alt="">
                  <div class="absolute top-0 left-0 bg-primary-dark p-1 md:p-2 rounded-br">
                    <span class="text-white font-semibold text-sm md:text-base">
                      <?= $post_category; ?>
                    </span>
                  </div>
                </div>
                <div class="mt-4">
                  <p class="text-dark-1 font-semibold md:font-bold text-base md:text-2xl">
                    <?= get_the_title(); ?>
                  </p>
                  <p class="text-sm md:text-base font-light text-dark-2">
                    <?= get_the_date('d.m.Y'); ?>
                  </p>
                </div>
              </a>
            <?php endif; ?>

        <?php
        $post_count++;
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="lg:col-span-5 xl:col-start-8">
      <div class="mb-8">
        <h2 class="text-2xl md:text-4.5xl text-dark-2 font-bold">
          Eventos
        </h2>
      </div>
      <div class="space-y-6">
        <?php
        $args = array(
          'category_name' => 'evento',
          'posts_per_page' => -1,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
            $nome = get_the_title();
            $data = get_the_date();
            ?>

            <a href="<?= get_permalink(); ?>" class="block pb-6 border-b border-neve-dark last:border-transparent hover:opacity-70 transition">
              <p class="text-primary-base text-2xl md:text-3.5xl uppercase font-light mb-2">
                <strong class="font-bold">00</strong> Jan
              </p>
              <p class="text-base font-medium">
                <?php custom_excerpt(); ?>
              </p>
            </a>

            <?php
          endwhile;
        endif;

        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</main>

<!-- Seção 'O curso' -->
<section class="py-16 lg:py-28 bg-dark-2">
  <div class="container grid gap-14 lg:gap-8 grid-cols-1 lg:grid-cols-12">
    <div class="lg:col-span-6 space-y-6 md:space-y-12">
      <div class="">
        <h4 class="text-2xl md:text-4.5xl text-white font-bold">
          <?= get_field('titulo_sobre', get_option('home_page_id')); ?>
        </h4>
        <p class="text-base md:text-2xl font-normal text-primary-light ">
          <?= get_field('subtitulo_sobre', get_option('home_page_id')); ?>
        </p>
      </div>
      <div class="text-neve-dark text-base">
        <p>
          <?= get_field('descricao_sobre', get_option('home_page_id')); ?>
        </p>
      </div>
    </div>
    <div class="lg:col-span-6 xl:col-span-5 xl:col-start-8">
      <div class="grid grid-cols-2 grid-rows-2 gap-4 md:gap-6 items-stretch text-dark-2">
        <div class="bg-primary-light p-4">
          <p class="text-4.5xl text-center">
            <strong>00</strong>
          </p>
          <p class="text-sm font-medium text-center">
            Lorem ipsum dolor
          </p>
        </div>
        <div class="bg-primary-light p-4">
          <p class="text-4.5xl text-center">
            <strong>00</strong>
          </p>
          <p class="text-sm font-medium text-center">
            Lorem ipsum dolor
          </p>
        </div>
        <div class="bg-primary-light p-4">
          <p class="text-4.5xl text-center">
            <strong>00</strong>
          </p>
          <p class="text-sm font-medium text-center">
            Lorem ipsum dolor
          </p>
        </div>
        <div class="bg-primary-light p-4">
          <p class="text-4.5xl text-center">
            <strong>00</strong>
          </p>
          <p class="text-sm font-medium text-center">
            Lorem ipsum dolor
          </p>
        </div>
      </div>
    </div>
    <div class="lg:col-span-6 flex justify-center lg:justify-start">
      <!-- <a href="<?= home_url(); ?>/sobre" class="block text-center py-2 px-8 bg-transparent hover:bg-primary-light hover:bg-opacity-10 border border-primary-light rounded text-white font-semibold text-base transition">
        Saiba mais sobre o curso
      </a> -->
    </div>
  </div>
</section>

<!-- Seção de projetos -->
<section class="py-16 lg:py-28 bg-primary-gradient">
  <div class="container">
    <div class="space-y-2 max-w-[600px] mx-auto text-center mb-14 md:mb-16">
      <?php
      $title = get_field('titulo_projetos', get_option('home_page_id'));
      $title_regex = '/\*\*(.*?)\*\*/';
      $formatted_title = preg_replace($title_regex, ' <strong class="text-primary-base">$1</strong>', $title);
      ?>

      <h5 class="text-2xl md:text-4.5xl font-bold  text-dark-2">
        <?= $formatted_title ?>
      </h5>

      <p class="text-base text-dark-2">
        <?= get_field('descricao_projetos', get_option('home_page_id')); ?>
      </p>
    </div>

    <!-- Slider de projetos -->
    <div id="projetos_slider" class="owl-carousel owl-theme mb-8 md:mb-14 max-w-[1200px] mx-auto">

      <?php
      $args = array(
        'post_type' => 'projeto',
        'posts_per_page' => -1,
      );

      $projetos_query = new WP_Query($args);

      if ($projetos_query->have_posts()) {
        $counter = 0;

        while ($projetos_query->have_posts()) {
          $projetos_query->the_post();
          $counter++;

          if ($counter % 3 === 1) {
            echo '<div class="item grid gap-6 grid-cols-1 lg:grid-cols-3">';
          }
          ?>
          <div class="p-3 rounded border border-primary-base bg-white space-y-3">
            <div class="space-y-1.5">
              <p class="text-primary-base text-sm md:text-base font-bold">
                <?= get_the_title(); ?> - <span class="text-dark-2 font-normal">
                  <?= get_field('tipo_projeto_post'); ?>
                </span>
              </p>
              <p class="text-dark-3 text-sm md:text-base">
                <?= get_field('descricao_projeto_post'); ?>
              </p>
            </div>
            <div class="w-full">
              <a href="<?= get_field('link_projeto_post'); ?>" target="_blank" class="text-xs md:text-sm text-dark-2 border-b border-b-primary-base block w-fit px-0.5 ml-auto hover:text-primary-dark transition">
                Link do projeto
              </a>
            </div>
          </div>

          <?php
          if ($counter % 3 === 0 || $counter === $projetos_query->post_count) {
            echo '</div>';
          }
        }
      } else {
        echo 'Nenhum projeto encontrado.';
      }

      wp_reset_postdata();
      ?>
    </div>
    <div id="projetos_slider_dots"></div>
  </div>
</section>

<!-- Seção de depoimentos -->
<section class="py-16 lg:py-28 bg-dark-2">
  <div class="container">

    <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-2">
      <div class="lg:mb-14 lg:col-span-2 xl:col-span-1">
        <h5 class="text-2xl md:text-4.5xl font-bold  text-white mb-2">
          <?= get_field('titulo_depoimentos', get_option('home_page_id')); ?>
        </h5>

        <p class="text-base text-white mb-6">
          <?= get_field('descricao_depoimentos', get_option('home_page_id')); ?>
        </p>
      </div>

      <!-- Ícone -->
      <div class="flex justify-end mb-4 lg:mb-8 items-end">
        <div>
          <img class="lg:hidden" src="<?= $theme; ?>/dist/images/svg/quotes.svg" alt="">
          <img class="hidden lg:block" src="<?= $theme; ?>/dist/images/svg/quotes-lg.svg" alt="">
        </div>
      </div>
    </div>

    <!-- Slider de depoimentos -->
    <div id="testimonials_slider" class="owl-carousel owl-theme mb-8 md:mb-14">

      <?php
      $args = array(
        'post_type' => 'depoimentos',
        'posts_per_page' => -1,
      );

      $projetos_query = new WP_Query($args);

      if ($projetos_query->have_posts()) {
        $counter = 0;

        while ($projetos_query->have_posts()) {
          $projetos_query->the_post();
          $counter++;

          if ($counter % 4 === 1) {
            echo '<div class="item grid gap-6 lg:gap-12 grid-cols-1 lg:grid-cols-2">';
          }
          ?>
          <div class="flex gap-4 sm:gap-8 p-2.5 sm:p-5 rounded border-2 border-primary-base bg-neve-base">
            <div class="min-w-[80px] sm:min-w-[145px] flex flex-col lg:items-center">
              <div class="w-16 lg:w-28 h-16 lg:h-28 rounded-full overflow-hidden mb-2">
                <?php if (get_field('imagem_depoimento_post')): ?>
                  <img src="<?= get_field('imagem_depoimento_post'); ?>" alt="" class="object-cover h-full w-full">
                <?php else: ?>
                  <div class="object-cover h-full w-full bg-fumaca-dark"></div>
                <?php endif; ?>
              </div>
              <p class="text-dark-1 font-bold text-sm sm:text-base">
                <?= get_the_title(); ?>
              </p>
              <p class="text-primary-dark font-normal text-xs sm:text-base">
                <?= get_field('empresa_depoimento_post'); ?>,
                <?= get_field('cargo_depoimento_post'); ?>
              </p>
            </div>
            <div class="h-full w-[1px] bg-primary-extra-light"></div>
            <div class="text-xs sm:text-base text-dark-1 grow">
              <p>
                "What a great experience! This service is a great time saver. Our team managed to reduce the time needed for paperwork by a third. Highly recommend this service. What a great experience! This service is a great time saver.”
              </p>
            </div>
          </div>

          <?php
          if ($counter % 4 === 0 || $counter === $projetos_query->post_count) {
            echo '</div>';
          }
        }
      } else {
        echo 'Nenhum projeto encontrado.';
      }

      wp_reset_postdata();
      ?>
    </div>
    <div id="testimonials_slider_dots"></div>
  </div>
</section>

<!-- Seção de tutoriais -->
<section class="py-16 lg:py-28 bg-primary-gradient">
  <div class="container">
    <div class="space-y-6 md:space-y-12 max-w-[600px] mx-auto md:text-center">
      <?php
      $title = get_field('titulo_tutoriais', get_option('home_page_id'));
      $title_regex = '/\*\*(.*?)\*\*/';
      $formatted_title = preg_replace($title_regex, ' <strong class="text-primary-base">$1</strong>', $title);
      ?>

      <h5 class="text-2xl md:text-4.5xl font-bold  text-dark-2">
        <?= $formatted_title ?>
      </h5>
      <p class="text-base text-dark-2">
        <?= get_field('descricao_tutoriais', get_option('home_page_id')); ?>
      </p>
      <!-- <a href="<?= home_url(); ?>/tutoriais" class="block w-fit md:mx-auto text-center py-2 px-8 bg-primary-base hover:bg-primary-dark rounded text-white font-semibold text-base transition">
        Ver mais
      </a> -->
    </div>
  </div>
</section>

<?php
get_footer();
?>