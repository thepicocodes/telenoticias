<?php

/**
 *
 * Template Name: Deportes Page
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
      <h5 class="text-xl-b lg:text-h5 text-blue-300">Deportes</h5>
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

    <section class="mt-8">
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

    <section class="mt-8">
      <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-[1fr_320px]">
        <div class="flex flex-col gap-y-5">

          <a href="">
            <article class="grid h-max w-full lg:h-[250px] lg:grid-cols-[300px_1fr]">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="max-h-[300px] min-h-[256px] w-full rounded-bl-none rounded-br-none rounded-tl-lg rounded-tr-lg object-cover lg:rounded-bl-lg lg:rounded-tl-lg lg:rounded-tr-none">

              <div
                class="flex w-full flex-col justify-between rounded-bl-lg rounded-br-lg border px-2 py-4 lg:rounded-bl-none lg:rounded-br-lg lg:rounded-tr-lg lg:px-4">
                <p class="text-body-b lg:text-m-b text-blueLight-900 mt-2">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit...</p>

                <div class="mt-1.5 text-xs text-gray-700">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>

          <a href="">
            <article class="grid w-full lg:h-[250px] lg:grid-cols-[1fr_300px]">
              <div
                class="order-2 flex w-full flex-col justify-between rounded-bl-lg rounded-br-lg border px-2 py-4 lg:order-1 lg:rounded-bl-lg lg:rounded-br-none lg:rounded-tl-lg lg:rounded-tr-none lg:px-4">
                <p class="mt text-body-b lg:text-m-b text-bluelight-900 mt-2">lorem ipsum dolor sit amet, consectetur
                  adipiscing elit...</p>

                <div class="mt-1.5 text-xs text-gray-700">
                  victor santana • 08/04/2024 14:51
                </div>
              </div>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="relative order-1 max-h-[300px] min-h-[256px] w-full rounded-bl-none rounded-br-none rounded-tl-lg rounded-tr-lg object-cover lg:order-2 lg:rounded-bl-none lg:rounded-br-lg lg:rounded-tl-none lg:rounded-tr-lg">
            </article>
          </a>

          <a href="">
            <article class="grid h-max w-full w-full lg:h-[250px] lg:grid-cols-[300px_1fr]">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="max-h-[300px] min-h-[256px] w-full rounded-bl-none rounded-br-none rounded-tl-lg rounded-tr-lg object-cover lg:rounded-bl-lg lg:rounded-tl-lg lg:rounded-tr-none">

              <div
                class="flex w-full flex-col justify-between rounded-bl-lg rounded-br-lg border px-2 py-4 lg:rounded-bl-none lg:rounded-br-lg lg:rounded-tr-lg lg:px-4">
                <p class="text-body-b lg:text-m-b text-blueLight-900 mt-2">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit...</p>

                <div class="mt-1.5 text-xs text-gray-700">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>

          <a href="">
            <article class="grid w-full lg:h-[250px] lg:grid-cols-[1fr_300px]">
              <div
                class="order-2 flex w-full flex-col justify-between rounded-bl-lg rounded-br-lg border px-2 py-4 lg:order-1 lg:rounded-bl-lg lg:rounded-br-none lg:rounded-tl-lg lg:rounded-tr-none lg:px-4">
                <p class="mt text-body-b lg:text-m-b text-bluelight-900 mt-2">lorem ipsum dolor sit amet, consectetur
                  adipiscing elit...</p>

                <div class="mt-1.5 text-xs text-gray-700">
                  victor santana • 08/04/2024 14:51
                </div>
              </div>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
                class="relative order-1 max-h-[300px] min-h-[256px] w-full rounded-bl-none rounded-br-none rounded-tl-lg rounded-tr-lg object-cover lg:order-2 lg:rounded-bl-none lg:rounded-br-lg lg:rounded-tl-none lg:rounded-tr-lg">
            </article>
          </a>
        </div>

        <div class="flex flex-col items-center">
          <div class="w-full p-4">
            <div class="mb-4 flex items-center border-b pb-2">
              <img src="<?php echo get_template_directory_uri(); ?>/images/usd.png" alt="US Flag" class="mr-2 h-6">
              <h2 class="text-body-b font-bold">US Dólar</h2>
            </div>
            <div class="">
              <p class="text-body-b text-gray-100">Compra:<span class="font-normal text-black"> RD$ 59.80</span></p>
              <p class="text-body-b mt-1.5 text-gray-100">Venta:<span class="font-normal text-black"> RD$ 59.80</span>
              </p>
            </div>

            <div class="mt-4 flex items-center border-b pb-2">
              <img src="<?php echo get_template_directory_uri(); ?>/images/euro.png" alt="EU Flag" class="mr-2 h-6">
              <h2 class="text-body-b font-bold">EURO</h2>
            </div>
            <div class="">
              <p class="text-body-b text-gray-100">Compra:<span class="font-normal text-black"> RD$ 59.80</span></p>
              <p class="text-body-b mt-1.5 text-gray-100">Venta:<span class="font-normal text-black"> RD$ 59.80</span>
              </p>
            </div>
          </div>

          <div class="mt-5 h-[300px] w-[300px] rounded-md bg-[#F1F3F7] p-4">
            <div class="h-full w-full bg-[#D6CCFF]"></div>
          </div>
          <div class="mt-5 h-[300px] w-[300px] rounded-md bg-[#F1F3F7] p-4">
            <div class="h-full w-full bg-[#D6CCFF]"></div>
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
      <div class="mt-8 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-x-8 gap-y-5">
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
          <div class="relative h-[300px]">
            <a href="#" class="relative block w-full h-full bg-white">
              <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
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

          <div>
            <h3 class="text-m-b lg:text-h5 text-blue-300">Siguenos</h3>
            <ul class="mt-2 flex flex-wrap items-center gap-8">
              <li>
                <a href="" class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-300 h-8" viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-300 h-8" viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-300 h-8" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-300 h-8" viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M331.5 235.7c2.2 .9 4.2 1.9 6.3 2.8c29.2 14.1 50.6 35.2 61.8 61.4c15.7 36.5 17.2 95.8-30.3 143.2c-36.2 36.2-80.3 52.5-142.6 53h-.3c-70.2-.5-124.1-24.1-160.4-70.2c-32.3-41-48.9-98.1-49.5-169.6V256v-.2C17 184.3 33.6 127.2 65.9 86.2C102.2 40.1 156.2 16.5 226.4 16h.3c70.3 .5 124.9 24 162.3 69.9c18.4 22.7 32 50 40.6 81.7l-40.4 10.8c-7.1-25.8-17.8-47.8-32.2-65.4c-29.2-35.8-73-54.2-130.5-54.6c-57 .5-100.1 18.8-128.2 54.4C72.1 146.1 58.5 194.3 58 256c.5 61.7 14.1 109.9 40.3 143.3c28 35.6 71.2 53.9 128.2 54.4c51.4-.4 85.4-12.6 113.7-40.9c32.3-32.2 31.7-71.8 21.4-95.9c-6.1-14.2-17.1-26-31.9-34.9c-3.7 26.9-11.8 48.3-24.7 64.8c-17.1 21.8-41.4 33.6-72.7 35.3c-23.6 1.3-46.3-4.4-63.9-16c-20.8-13.8-33-34.8-34.3-59.3c-2.5-48.3 35.7-83 95.2-86.4c21.1-1.2 40.9-.3 59.2 2.8c-2.4-14.8-7.3-26.6-14.6-35.2c-10-11.7-25.6-17.7-46.2-17.8H227c-16.6 0-39 4.6-53.3 26.3l-34.4-23.6c19.2-29.1 50.3-45.1 87.8-45.1h.8c62.6 .4 99.9 39.5 103.7 107.7l-.2 .2zm-156 68.8c1.3 25.1 28.4 36.8 54.6 35.3c25.6-1.4 54.6-11.4 59.5-73.2c-13.2-2.9-27.8-4.4-43.4-4.4c-4.8 0-9.6 .1-14.4 .4c-42.9 2.4-57.2 23.2-56.2 41.8l-.1 .1z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-300 h-8" viewBox="0 0 576 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                      d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <section class="mt-8">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-5">
        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
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
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-8 max-w-[960px]">
      <div class="mt-6 grid gap-x-5 gap-y-5 md:grid-cols-2 lg:grid-cols-3">
        <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
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

        <div class="h-[300px] w-full rounded-lg bg-[#F1F3F7] p-3">
          <div class="h-full w-full bg-[#D6CCFF]"></div>
        </div>

        <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
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

      <div class="mt-6 grid gap-x-5 gap-y-5 md:grid-cols-2 lg:grid-cols-3">
        <a href="#" class="relative block h-full w-full bg-white">
          <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
              class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
            <div
              class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
              <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="text-lightBlue-100 mt-2 text-xs">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <a href="#" class="relative block h-full w-full bg-white">
          <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
              class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
            <div
              class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
              <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="text-lightBlue-100 mt-2 text-xs">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
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

  </div>
  <?php
  get_footer();