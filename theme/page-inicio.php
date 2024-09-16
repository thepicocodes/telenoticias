<?php

/**
 *
 * Template Name: Home Page
 *
 * @package telenoticias
 */
get_header();
?>

<div
  class="w-full max-w-[1350px] grid grid-cols-1 xl:grid-cols-[160px_960px_160px] gap-y-5 gap-x-5 justify-items-center mt-8 mx-auto px-5">
  <div class="hidden xl:block order-1 w-full xl:max-w-40 h-40 xl:h-[600px] bg-[#D6CCFF]"></div>
  <div class="hidden xl:block order-3 w-full xl:max-w-40 h-40 xl:h-[600px] mb-5 bg-[#D6CCFF]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="w-full h-40 xl:h-[274px] mb-5 p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <!--  -->
    <section>
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-300">Lo más vistos</h5>
        <a href="" class="flex items-center gap-x-2 text-m-b text-blue-100">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-x-8 gap-y-5">
        <a href="#" class="relative block w-full min-h-[300px] bg-white">
          <article class="relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
              class="absolute top-0 left-0 w-full h-full ">
            <div
              class="rounded-lg h-full relative z-[1] p-5 lg:p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-m-b lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="flex flex-col gap-5">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>
      </div>
    </section>

    <section class="mt-10">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-300">El País</h5>
        <a href="" class="flex items-center gap-x-2 text-m-b text-blue-100">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 items-center gap-x-8 gap-y-5">
        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="rounded-lg w-full max-w-[752px] h-[274px] p-3 bg-[#F1F3F7]">
          <div class="w-full h-full bg-[#D6CCFF]"></div>
        </div>

        <div class="relative h-[300px]">

          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>

        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <!--  -->
    <section class="mt-20">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-300">El Mundo</h5>
        <a href="" class="flex items-center gap-x-2 text-m-b text-blue-100">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-x-8 gap-y-5">
        <a href="#" class="relative block w-full min-h-[300px] bg-white">
          <article class="relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
              class="absolute top-0 left-0 w-full h-full ">
            <div
              class="rounded-lg h-full relative z-[1] p-5 lg:p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-m-b lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="flex flex-col gap-5">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-300">Economía</h5>
        <a href="" class="flex items-center gap-x-2 text-m-b text-blue-100">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid lg:grid-cols-[1fr_300px] gap-x-8">
        <div>
          <!-- all -->
          <div class="grid grid-cols-1 md:grid-cols-2 mb-10 gap-y-6 gap-x-8 lg:justify-start">
            <a href="#" class="relative block w-full min-h-[300px] bg-white">
              <article class="relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                  class="absolute top-0 left-0 w-full h-full ">
                <div
                  class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <p class="mt-2 lg:text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="mt-2 text-xs text-lightBlue-100">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </article>
            </a>

            <a href="#" class="relative block w-full min-h-[300px] bg-white">
              <article class="relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                  class="absolute top-0 left-0 w-full h-full ">
                <div
                  class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <p class="mt-2 lg:text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="mt-2 text-xs text-lightBlue-100">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </article>
            </a>

            <a href="#" class="relative block w-full min-h-[300px] bg-white">
              <article class="relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                  class="absolute top-0 left-0 w-full h-full ">
                <div
                  class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <p class="mt-2 lg:text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="mt-2 text-xs text-lightBlue-100">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </article>
            </a>

            <a href="#" class="relative block w-full min-h-[300px] bg-white">
              <article class="relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                  class="absolute top-0 left-0 w-full h-full ">
                <div
                  class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <p class="mt-2 lg:text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="mt-2 text-xs text-lightBlue-100">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </article>
            </a>
          </div>
        </div>

        <div>
          <div>
            <div class="flex items-center border-b pb-2 mb-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/usd.png" alt="US Flag" class="h-6 mr-2">
              <h2 class="text-body-b font-bold">US Dólar</h2>
            </div>
            <div class="">
              <p class="text-body-b text-gray-100">Compra:<span class="font-normal text-black"> RD$ 59.80</span></p>
              <p class="mt-1.5 text-body-b text-gray-100">Venta:<span class="font-normal text-black"> RD$ 59.80</span>
              </p>
            </div>

            <div class="flex items-center border-b pb-2 mt-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/euro.png" alt="EU Flag" class="h-6 mr-2">
              <h2 class="text-body-b font-bold">EURO</h2>
            </div>
            <div class="">
              <p class="text-body-b text-gray-100">Compra:<span class="font-normal text-black"> RD$ 59.80</span></p>
              <p class="mt-1.5 text-body-b text-gray-100">Venta:<span class="font-normal text-black"> RD$ 59.80</span>
              </p>
            </div>
          </div>
          <!--  -->

          <div>
            <div id="lotery-swiper" class="swiper w-full mt-10">
              <h3 class="text-lg lg:text-h5 text-blue-300">Lotería</h3>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div>
                    <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                      <h5 class="text-body-b text-blue-100">Juega + Pega</h5>
                      <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                      </div>
                    </div>
                    <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                      <h5 class="text-body-b text-blue-100">Gana Más</h5>
                      <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                      </div>
                    </div>
                    <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                      <h5 class="text-body-b text-blue-100">Lotería Nacional</h5>
                      <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div>
                    <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                      <h5 class="text-body-b text-blue-100">Juega + Pega</h5>
                      <div class="mt-2 flex flex-row items-center gap-x-2.5">
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                      </div>
                    </div>
                    <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                      <h5 class="text-body-b text-blue-100">Gana Más</h5>
                      <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                      </div>
                    </div>
                    <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                      <h5 class="text-body-b text-blue-100">Lotería Nacional</h5>
                      <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                        <span
                          class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-lightBlue-100 bg-blue-300">01</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="w-full mt-6 flex justify-center">
              <div
                class="rounded-2xl !w-[114px] flex flex-row items-center justify-center px-2 py-1 bg-[#F1F1F1] swiper-pagination-fraction swiper-pagination-horizontal">
                <span class="custom-swiper-button-prev">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 320 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                  </svg>
                </span>

                <div class="custom-swiper-pagination text-center">
                  <span class="swiper-pagination-current"></span>
                  /
                  <span class="swiper-pagination-total"></span>
                </div>

                <span class="custom-swiper-button-next">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 320 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section>
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-300">Deportes</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-blue-100">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-x-8 gap-y-5">
        <a href="#" class="relative block w-full min-h-[300px] bg-white">
          <article class="relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
              class="absolute top-0 left-0 w-full h-full ">
            <div
              class="rounded-lg h-full relative z-[1] p-5 lg:p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-m-b lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="flex flex-col gap-5">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>
      </div>
    </section>

    <section class="mt-8">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-300">Aplausos</h5>
        <a href="" class="flex items-center gap-x-2 text-m-b text-blue-100">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 items-center gap-x-8 gap-y-5">
        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="rounded-lg w-full max-w-[752px] h-[274px] p-3 bg-[#F1F3F7]">
          <div class="w-full h-full bg-[#D6CCFF]"></div>
        </div>

        <div class="relative h-[300px]">

          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>

        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-300">Bienestar y Vida</h5>
        <a href="" class="flex items-center gap-x-2 text-m-b text-blue-100">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 items-center gap-x-8 gap-y-5">
        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="rounded-lg w-full max-w-[752px] h-[274px] p-3 bg-[#F1F3F7]">
          <div class="w-full h-full bg-[#D6CCFF]"></div>
        </div>

        <div class="relative h-[300px]">

          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>

        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-300">Aplausos</h5>
        <a href="" class="flex items-center gap-x-2 text-m-b text-blue-100">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-5">
        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>

        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span
                  class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div
                class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-300">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
    <section class="mt-10">
      <h3 class="text-h5 text-blue-300">Horóscopo del día</h3>

      <div id="tarot-swiper" class="swiper mt-6">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Escorpion</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-10">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/escorpio.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Aries</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aries.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Tauro</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tauro.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Géminis</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/geminis.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Cáncer</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cancer.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Leo</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/leo.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Virgo</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/virgo.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Libra</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/libra.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Sagitario</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sagitario.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Capricornio</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/capricornio.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Acuario</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/acuario.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-lightBlue-100 bg-blue-300">Piscis</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-100">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/piscis.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full mt-6 flex justify-center">
        <div
          class="rounded-2xl !w-[114px] flex flex-row items-center justify-center px-2 py-1 bg-[#F1F1F1] swiper-pagination-fraction swiper-pagination-horizontal">
          <span class="tarot-swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-300" viewBox="0 0 320 512">
              <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
            </svg>
          </span>

          <div class="tarot-swiper-pagination text-center">
            <span class="swiper-pagination-current"></span>
            /
            <span class="swiper-pagination-total"></span>
          </div>

          <span class="tarot-swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-300" viewBox="0 0 320 512">
              <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </span>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-300">El Tiempo</h5>
        <a href="" class="flex items-center gap-x-2 text-m-b text-blue-100">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-100" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>
      <div class="mt-6 grid lg:grid-cols-[1fr_320px] gap-x-6">
        <div>
          <!-- all -->
          <div class="section-item all flex flex-col mb-10 gap-y-6 gap-x-5 lg:justify-start">
            <a href="">
              <article class="w-full lg:h-[250px]">
                <div class="w-full h-max grid lg:grid-cols-[300px_1fr]">
                  <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                      class="rounded-tl-lg rounded-tr-lg rounded-bl-none rounded-br-none lg:rounded-tr-none lg:rounded-tl-lg lg:rounded-bl-lg w-full min-h-[256px] max-h-[300px] object-cover">
                  </div>
                  <div
                    class="rounded-bl-lg rounded-br-lg lg:rounded-bl-none lg:rounded-tr-lg lg:rounded-br-lg border w-full flex flex-col justify-between py-4 px-2 lg:px-4">
                    <div>
                      <p class="mt-2 text-body-b lg:text-m-b text-blue-300">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit...</p>
                    </div>
                    <div class="text-xs text-gray-700">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </div>
              </article>
            </a>

            <a href="">
              <article class="w-full lg:h-[250px]">
                <div class="w-full h-max grid lg:grid-cols-[300px_1fr]">
                  <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                      class="rounded-tl-lg rounded-tr-lg rounded-bl-none rounded-br-none lg:rounded-tr-none lg:rounded-tl-lg lg:rounded-bl-lg w-full min-h-[256px] max-h-[300px] object-cover">
                  </div>
                  <div
                    class="rounded-bl-lg rounded-br-lg lg:rounded-bl-none lg:rounded-tr-lg lg:rounded-br-lg border w-full flex flex-col justify-between py-4 px-2 lg:px-4">
                    <div>
                      <p class="mt-2 text-body-b lg:text-m-b text-blue-300">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit...</p>
                    </div>
                    <div class="text-xs text-gray-700">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </div>
              </article>
            </a>
          </div>
        </div>

        <div>
          <div class="rounded-lg p-4 bg-lightBlue-100">
            <h4 class="mb-2 text-body-b text-blue-900 text-center">The United Kingdom...</h4>
            <div
              class="border-t border-lightBlue-primary text-lightBlue-primary grid grid-cols-2 gap-x-2 items-center pt-2">
              <div class="border-r border-lightBlue-primary pr-6">
                <p class="text-xl-b text-brown-900">28° C</p>
                <p class="text-s text-brown-900">Nubes dispersas</p>
              </div>
              <div class="mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
              </div>
            </div>
          </div>

          <div class="rounded-lg flex flex-row justify-between items-center mt-2 px-4 py-2 bg-lightBlue-100">
            <div class="text-s text-brown-900">Miércoles</div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-8">
            <div class="text-s-b">
              <span class="mr-4 text-s-b text-blue-300">27° C</span>
              <span class="text-s-b text-blue-600">18° C</span>
            </div>
          </div>

          <div class="rounded-lg flex flex-row justify-between items-center mt-2 px-4 py-2 bg-lightBlue-100">
            <div class="text-s text-brown-900">Miércoles</div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-8">
            <div class="text-s-b">
              <span class="mr-4 text-s-b text-blue-300">27° C</span>
              <span class="text-s-b text-blue-600">18° C</span>
            </div>
          </div>

          <div class="rounded-lg flex flex-row justify-between items-center mt-2 px-4 py-2 bg-lightBlue-100">
            <div class="text-s text-brown-900">Miércoles</div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-8">
            <div class="text-s-b">
              <span class="mr-4 text-s-b text-blue-300">27° C</span>
              <span class="text-s-b text-blue-600">18° C</span>
            </div>
          </div>

          <div class="rounded-lg mt-2 px-4 py-2 bg-lightBlue-100">
            <div class="grid grid-cols-[1fr_46px_1fr] items-center gap-x-2">
              <h4 class="text-body-b text-brown-900">Punta Cana</h4>
              <div class="mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
              </div>
              <div class="">
                <p class="text-xl-b text-brown-900">28° C</p>
                <p class="text-xs-b text-brown-900">Muy nuboso</p>
              </div>
            </div>
          </div>

          <div class="rounded-lg mt-2 px-4 py-2 bg-lightBlue-100">
            <div class="grid grid-cols-[1fr_46px_1fr] items-center gap-x-2">
              <h4 class="text-body-b text-blue-900">Santiago</h4>
              <div class="mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
              </div>
              <div class="">
                <p class="text-xl-b text-brown-900">28° C</p>
                <p class="text-xs-b text-brown-900">Muy nuboso</p>
              </div>
            </div>
          </div>

          <div class="rounded-lg mt-2 px-4 py-2 bg-lightBlue-100">
            <div class="grid grid-cols-[1fr_46px_1fr] items-center gap-x-2">
              <h4 class="text-body-b text-blue-900">Samana</h4>
              <div class="mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
              </div>
              <div class="">
                <p class="text-xl-b">28° C</p>
                <p>Muy nuboso</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
  </div>
  <?php
  get_footer();