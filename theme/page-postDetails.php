<?php

/**
 *
 * Template Name: Post Details Page
 *
 * @package telenoticias
 */
get_header();
?>

<div class="mx-auto mt-8 grid w-full max-w-[1360px] grid-cols-1 justify-items-center gap-x-5 gap-y-5 px-5 xl:grid-cols-[160px_1fr_160px]">
  <div class="xl:max-w-40 order-1 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <div class="xl:max-w-40 order-3 mb-5 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <!--  -->
  <section class="order-2 w-full max-w-5xl">
    <!-- ad -->
    <div class="hidden md:block mx-auto h-[274px] w-full max-w-[994px] bg-[#F1F3F7] px-3 py-3">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <div class="mt-8">
      <span class="text-xl-b lg:text-h5 text-blue-100">Sociales</span>

      <h1 class="text-h3 lg:text-h1 mt-1 text-blue-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h1>

      <p class="text-m mt-2 text-[#6A6A6A]">
        Las autoridades de Palmira y la Policía Nacional llevan a
        cabo procedimientos especiales para el partido de este viernes
        en Palmaseca.
      </p>

      <div class="mt-2 flex flex-col items-center justify-between gap-4 border-b border-t border-[#E2E2E2] px-0 py-4 md:flex-row md:px-4">
        <div class="text-s text-[#8F8F8F]">
          Victor Santana • 08/04/2024 14:51
        </div>
        <div class="flex flex-row items-center gap-4">
          <span class="text-s md:text-body">compartir en:</span>
          <ul class="flex items-center gap-x-5">
            <li>
              <a href="" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-300" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                </svg>
              </a>
            </li>

            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-300" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="mt-10 grid gap-x-8 gap-y-5 md:grid-cols-[1fr_300px]">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Post thumbnail"
            class="aspect-square w-full rounded-lg object-cover object-center">

          <p class="text-body mt-8 leading-[24px] text-[#6A6A6A]">
            En medio de distintas realidades, Deportivo Cali y América protagonizarán una nueva edición del clásico vallecaucano. El Verde, que atraviesa una crisis deportiva que lo complica con el descenso, recibe al equipo de César Farías, que por el contrario dejó atrás la mala racha y encadenó una serie de resultados positivos que lo tiene en la pelea por clasificar a cuadrangulares de la Liga BetPlay.
            <br> <br>
            El derbi se jugará este viernes 12 de abril desde las 8:15 p.m., en Palmaseca. A dos días del enfrentamiento, las autoridades inician un plan de procedimientos especiales para garantizar la seguridad, así lo dio a conocer José Alberto Ortiz, periodista de Caracol Radio, quien detalló las medidas adoptadas por el municipio de Palmira y la Policía Nacional de cara al clásico.
            <br> <br>
            Entre las acciones que se llevarán a cabo destacan las reuniones con los representantes de las diferentes barras para garantizar el buen desarrollo del partido. También se reforzará el dispositivo de seguridad en tribunas que han sido sancionadas recientemente por malos comportamientos.
            <br> <br>
            Por otro lado, Caracol Radio señaló que “la Policía anunció que está preparada con mil uniformados para el clásico de fútbol de este viernes 12 de abril, en el estadio Palmaseca en Palmira, entre el Deportivo Cali y el América, para garantizar a los asistentes una fiesta del fútbol en paz y sana convivencia”.
          </p>
        </div>

        <div>
          <h3 class="text-blue-100 text-xl-b">Más visto</h3>
          <div class="mt-5 grid grid-cols-1 grid-rows-3 gap-y-4">
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
            <!-- -->
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
            <!--  -->
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
          </div>
          <div class="mx-auto mb-5 mt-10 h-[600px] w-[300px] rounded-lg bg-[#F1F3F7] p-3">
            <div class="h-full w-full bg-[#D6CCFF]"></div>
          </div>
        </div>
      </div>

      <!-- grid row -->
      <div class="mx-auto mt-10 w-full">
        <h5 class="text-h5 text-blue-100">Noticias relacionadas</h5>

        <div class="mt-5 grid gap-8 md:grid-cols-[1fr_320px] lg:grid-cols-[1fr_320px_1fr]">
          <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>

            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
          </div>

          <!-- Ad -->
          <div class="mx-auto flex h-[300px] w-[320px] items-center justify-center rounded-md bg-[#F1F3F7]">
            <div class="h-[250px] w-[300px] bg-[#D6CCFF]"></div>
          </div>
          <!--  -->

          <div class="grid gap-5 md:col-span-2 lg:col-auto">
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>

            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
          </div>
        </div>
      </div>
      <!-- Grid row -->
      <div class="mx-auto mt-5 w-full">
        <div class="mt-5 grid gap-8 md:grid-cols-[1fr_320px] lg:grid-cols-[1fr_320px_1fr]">
          <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
            <a href="#" class="relative block h-full w-full bg-white">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
              <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="text-lightBlue-100 mt-2 text-xs">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
          <!--  -->
          <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>

            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
          </div>
          <!--  -->
          <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
            <a href="#" class="relative block h-full w-full bg-white">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
              <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="text-lightBlue-100 mt-2 text-xs">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>
      </div>

      <div class="mx-auto mb-5 mt-10 hidden h-[114px] w-full max-w-[752px] bg-[#F1F3F7] p-3 md:block">
        <div class="h-full w-full bg-[#D6CCFF]"></div>
      </div>

  </section>
</div>


<?php
get_footer();
