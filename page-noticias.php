<?php
$theme = get_template_directory_uri();

get_header();

/*
Template Name: Notícias
*/

?>

<!-- Breadcrumb -->
<div class="mt-14 lg:mt-28">
  <div class="container">
    <nav>
      <ol class="flex flex-wrap gap-4 items-center">
        <li class="group">
          <a href="<?= home_url(); ?>" class="text-dark-1 text-sm pb-[4px] border-b-[2px] border-transparent group-[.isActive]:border-primary-dark hover:text-primary-dark transition">
            Inicial
          </a>
        </li>
        <img src="<?= $theme; ?>/dist/images/svg/breadcrum-divider.svg" alt="">
        <li class="group isActive" aria-current="page">
          <a href="<?= home_url(); ?>/noticias" class="text-dark-1 text-sm pb-[4px] border-b-[2px] border-transparent group-[.isActive]:border-primary-dark hover:text-primary-dark transition">
            Notícias
          </a>
        </li>
      </ol>
    </nav>
  </div>
</div>

<!-- Seção principal - Sobre o curso -->
<main class="bg-white mt-14 lg:mt-16 mb-20 md:mb-32">
  <div class="container grid grid-cols-12">

    <div class="col-span-12 mb-14">
      <div class="pb-2 md:pb-4 border-b-[4px] border-primary-base inline-block pr-4 md:pr-8">
        <h1 class="text-2xl lg:text-3.5xl text-dark-2 font-bold">
          <?= the_title(); ?>
        </h1>
      </div>
    </div>

    <!-- filtros -->
    <!-- <div class="col-span-12 lg:col-span-8 mb-10 lg:mb-28">
      <?php
      $tags = get_terms(
        array(
          'taxonomy' => 'post_tag',
          'orderby' => 'count',
          'order' => 'DESC',
          'number' => 10,
        )
      );

      if ($tags): ?>
        <div class="">
          <p class="text-2xl text-black font-semibold mb-4">
            Filtro
          </p>

          <ul class="flex flex-wrap gap-6">
            <?php foreach ($tags as $tag): ?>
              <li class="group">
                <a href="<?= get_tag_link($tag->term_id); ?>" class="block text-base text-dark-2 font-normal hover:text-primary-dark group-[.isActive]:font-medium group-[.isActive]:text-primary-dark border-[1px] border-dark-2 hover:border-primary-dark group-[.isActive]:border-primary-dark group-[.isActive]:border-[2px] rounded px-4 py-2 transition">
                  <?= $tag->name; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
    </div> -->

    <!-- barra de pesquisa -->
    <!-- <div class="col-span-12 lg:col-span-4 flex justify-end items-end mb-28">
      <form action="<?= get_permalink(); ?>" method="GET" class="search_form">
        <input name="search" type="text" value="<?= $_GET['search']; ?>" class="text-base block w-full p-2 pl-4 pr-10 rounded placeholder:text-dark-5 text-dark-2 bg-neve-base border border-dark-5 hover:border-dark-2 focus:border-primary-base focus:outline-[1px] focus:outline-offset-0 focus:outline-primary-base transition-all" placeholder="Sua pesquisa">
        <button>
          <img src="<?= $theme; ?>/dist/images/svg/search.svg" alt="">
        </button>
      </form>
    </div> -->

    <!-- grid de notícias -->
    <div class="col-span-12 grid gap-x-6 gap-y-12 grid-cols-12 mb-16">
      <?php
      $args = array(
        'posts_per_page' => 3,
      );

      $query = new WP_Query($args);

      if ($query->have_posts()):
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
          ?>

          <a href="<?= get_permalink(); ?>" class="group block col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 w-full h-full">
            <div class="relative block overflow-hidden h-2/3 max-h-[300px] lg:max-h-[185px] xl:max-h-[176px]">
              <?php if (get_the_post_thumbnail()): ?>
                <img src="<?= get_the_post_thumbnail(); ?>" class="object-cover h-full w-full group-hover:scale-110 transition" alt="">
              <?php else: ?>
                <div class="object-cover h-full w-full bg-fumaca-dark group-hover:scale-110 transition" alt=""></div>
              <?php endif; ?>
              <div class="absolute top-0 left-0 bg-primary-dark p-1 rounded-br">
                <span class="text-white font-semibold text-sm">
                  <?= $post_category; ?>
                </span>
              </div>
            </div>
            <div class="mt-4">
              <p class="text-dark-1 font-semibold text-base">
                <?= get_the_title(); ?>
              </p>
              <p class="text-sm md:text-base font-light text-dark-2">
                <?= get_the_date('d.m.Y'); ?>
              </p>
            </div>
          </a>

          <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>

    <!-- Paginaçaõ de notícias -->
    <!-- <div class="col-span-12 flex items-center justify-center">
      <nav aria-label="Paginação de notícias">
        <ul class="flex gap-x-1 text-3.5xl md:text-base font-normal">
          <li class="group isSelected">
            <a class="group-[.isSelected]:text-primary-dark group-[.isSelected]:font-semibold p-3" href="#">1</a>
          </li>
          <li class="group">
            <a class="group-[.isSelected]:text-primary-dark group-[.isSelected]:font-semibold p-3" href="#">2</a>
          </li>
          <li class="group">
            <a class="group-[.isSelected]:text-primary-dark group-[.isSelected]:font-semibold p-3" href="#">3</a>
          </li>
          <li class="group">
            ...
          </li>
          <li class="group">
            <a class="group-[.isSelected]:text-primary-dark group-[.isSelected]:font-semibold p-3" href="#">10</a>
          </li>
        </ul>
      </nav>
    </div> -->
  </div>
</main>

<?php
get_footer();
?>