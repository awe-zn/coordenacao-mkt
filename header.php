<?php
$theme = get_template_directory_uri();
?>

<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php bloginfo('title') . wp_title(); ?>
  </title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Css -->
  <link href="<?= $theme; ?>/dist/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= $theme; ?>/dist/owl.theme.default.min.css" rel="stylesheet">
  <link href="<?= $theme; ?>/dist/output.css" rel="stylesheet">

  <?= wp_head(); ?>
</head>

<body>

  <header class="bg-dark-1 z-40 sticky top-0">
    <div class="container py-4 flex items-center justify-between">
      <div>
        <a href="<?= home_url(); ?>">
          <img class="hidden sm:block" src="<?= $theme; ?>/dist/images/logo.png" alt="">
          <img class="block sm:hidden" src="<?= $theme; ?>/dist/images/logo-sm.png" alt="">
        </a>
      </div>
      <button data-menu="menu" class="lg:hidden w-6 h-6">
        <img src="<?= $theme; ?>/dist/images/svg/menu.svg" alt="">
      </button>
      <nav id="menu" class="hidden overflow-y-auto lg:block py-4 md:py-6 lg:py-0 absolute z-40 w-screen lg:w-auto h-screen lg:h-auto top-0 left-0 lg:static bg-dark-2 lg:bg-dark-1">
        <div class="container">
          <div class="flex">
            <button data-menu="menu" class="lg:hidden w-6 h-6 ml-auto">
              <img src="<?= $theme; ?>/dist/images/svg/x-mark.svg" alt="">
            </button>
          </div>
          <ul class="flex flex-col items-center lg:flex-row pt-2 lg:pt-0">
            <li class="group isActive w-full lg:w-fit max-w-[228px] lg:hidden">
              <a href="<?= home_url(); ?>" class="text-base text-neve-base py-6 lg:py-2 px-3 block transition border-b group-last:border-b-0 border-b-primary-light lg:border-0 lg:border-transparent group-[.isActive]:text-primary-light group-[.isActive]:font-medium hover:opacity-80 group-[.isActive]:hover:opacity-100">
                Página inicial
              </a>
            </li>
            <li class="group w-full lg:w-fit max-w-[228px]">
              <a href="<?= home_url(); ?>/noticias" class="text-base text-neve-base py-6 lg:py-2 px-3 block transition border-b group-last:border-b-0 border-b-primary-light lg:border-0 lg:border-transparent group-[.isActive]:text-primary-light group-[.isActive]:font-medium hover:opacity-80 group-[.isActive]:hover:opacity-100">
                Notícias
              </a>
            </li>
            <!-- <li class="group w-full lg:w-fit max-w-[228px]">
              <a href="/src/index.html#horarios" class="text-base text-neve-base py-6 lg:py-2 px-3 block transition border-b group-last:border-b-0 border-b-primary-light lg:border-0 lg:border-transparent group-[.isActive]:text-primary-light group-[.isActive]:font-medium hover:opacity-80 group-[.isActive]:hover:opacity-100">
                Horários
              </a>
            </li>
            <li class="group w-full lg:w-fit max-w-[228px]">
              <a href="/src/sobre.html" class="text-base text-neve-base py-6 lg:py-2 px-3 block transition border-b group-last:border-b-0 border-b-primary-light lg:border-0 lg:border-transparent group-[.isActive]:text-primary-light group-[.isActive]:font-medium hover:opacity-80 group-[.isActive]:hover:opacity-100">
                O Curso
              </a>
            </li>
            <li class="group w-full lg:w-fit max-w-[228px] lg:hidden">
              <a href="/src/sobre.html#professores" class="text-base text-neve-base py-6 lg:py-2 px-3 block transition border-b group-last:border-b-0 border-b-primary-light lg:border-0 lg:border-transparent group-[.isActive]:text-primary-light group-[.isActive]:font-medium hover:opacity-80 group-[.isActive]:hover:opacity-100">
                Professores
              </a>
            </li>
            <li class="group w-full lg:w-fit max-w-[228px] lg:hidden">
              <a href="/src/index.html#projetos" class="text-base text-neve-base py-6 lg:py-2 px-3 block transition border-b group-last:border-b-0 border-b-primary-light lg:border-0 lg:border-transparent group-[.isActive]:text-primary-light group-[.isActive]:font-medium hover:opacity-80 group-[.isActive]:hover:opacity-100">
                Projetos
              </a>
            </li>
            <li class="group w-full lg:w-fit max-w-[228px] hidden lg:block">
              <a href="/src/estrutura-curricular.html" class="text-base text-neve-base py-6 lg:py-2 px-3 block transition border-b group-last:border-b-0 border-b-primary-light lg:border-0 lg:border-transparent group-[.isActive]:text-primary-light group-[.isActive]:font-medium hover:opacity-80 group-[.isActive]:hover:opacity-100">
                Estrutura curricular
              </a>
            </li>
            <li class="group w-full lg:w-fit max-w-[228px]">
              <a href="/src/tutoriais.html" class="text-base text-neve-base py-6 lg:py-2 px-3 block transition border-b group-last:border-b-0 border-b-primary-light lg:border-0 lg:border-transparent group-[.isActive]:text-primary-light group-[.isActive]:font-medium hover:opacity-80 group-[.isActive]:hover:opacity-100">
                Tutoriais
              </a>
            </li> -->
          </ul>
        </div>
      </nav>
    </div>
  </header>