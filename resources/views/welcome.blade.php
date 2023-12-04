
<!doctype html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css') @vite('resources/js/app.js')
  </head>

  <body>
    <header>
      <!-- Navigation bar -->
      <nav
        class="relative flex w-screen items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
        data-te-navbar-ref style="background: linear-gradient(to right, #B0F291, #04BF68)">
        <div class="flex w-full flex-wrap items-center justify-between px-3">
          <div class="flex items-center">
            <div class="text-center py-4">
              <img class="w-48 pt-15 navbar-logo" src="http://localhost:8000/img/logo_marijuana.png" alt="logo_marijuana">
              <h4 class="mb53 mt2 pb0 text-xl font-semibold">
                Marijuana
              </h4>
              <!-- Ajuste as classes de tamanho (h-16 e w-16) conforme necessário -->
            </div>
            <!-- Hamburger menu button -->
            <button
              class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
              type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
              aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
              <!-- Hamburger menu icon -->
              <span class="[&>svg]:w-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="h-7 w-7">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </span>
            </button>
          </div>

          <!-- Navigation links -->
          <div class="mx-auto text-center">
            <div class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto"
              id="navbarSupportedContentY" data-te-collapse-item>
              <ul class="mr-auto flex flex-col lg:flex-row" data-te-navbar-nav-ref>
                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                  <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                    href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">QUEM SOMOS</a>
                </li>
                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                  <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                    href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">RECURSOS</a>
                </li>
                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                  <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                    href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">FALE CONOSCO</a>
                </li>
                <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                  <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                    href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">PERGUNTAS FREQUENTES</a>
                </li>
              </ul>
            </div>
          </div>

        </nav>
    </header>


    <!-- Slideshow container -->
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade ">
        <div class="numbertext">1 / 3</div>
        <img src="img/homepage" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/Cannabis-Medicinal.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="https://amame.org.br/wp-content/uploads/2016/09/Imagem-Banner.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center" style="background-color: #d0e8d0">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

<section>

<div class="row-line">
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="img/pesquisa.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Descubra os benefícios da cannabis medicinal e como a nossa plataforma pode ajudar você</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="img/Quimica.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="img/medical.png" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
</div>



</section>

      <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
      <div class="mx-6 py-10 text-center md:text-left">
        <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
          <!-- Tailwind Elements section -->
          <div class="">
            <h6 class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 h-4 w-4">
                <path
                  d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
              </svg>
              Tailwind ELEMENTS
            </h6>
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Products section -->
          <div class="">
            <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
              Products
            </h6>
            <p class="mb-4">
              <a href="#!" class="text-neutral-600 dark:text-neutral-200">Angular</a>
            </p>
            <p class="mb-4">
              <a href="#!" class="text-neutral-600 dark:text-neutral-200">React</a>
            </p>
            <p class="mb-4">
              <a href="#!" class="text-neutral-600 dark:text-neutral-200">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-neutral-600 dark:text-neutral-200">Laravel</a>
            </p>
          </div>
          <!-- Useful links section -->
          <div class="">
            <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
              Useful links
            </h6>
            <p class="mb-4">
              <a href="#!" class="text-neutral-600 dark:text-neutral-200">Pricing</a>
            </p>
            <p class="mb-4">
              <a href="#!" class="text-neutral-600 dark:text-neutral-200">Settings</a>
            </p>
            <p class="mb-4">
              <a href="#!" class="text-neutral-600 dark:text-neutral-200">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-neutral-600 dark:text-neutral-200">Help</a>
            </p>
          </div>
          <!-- Contact section -->
          <div>
            <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
              Contact
            </h6>
            <p class="mb-4 flex items-center justify-center md:justify-start">
              <x-icon name="map-pin" solid />
              New York, NY 10012, US
            </p>
            <p class="mb-4 flex items-center justify-center md:justify-start">
              <x-icon name="inbox" solid />
              info@example.com
            </p>
            <p class="mb-4 flex items-center justify-center md:justify-start">
              <x-icon name="phone" solid />

              + 01 234 567 88
            </p>
            <p class="flex items-center justify-center md:justify-start">
              <x-icon name="printer" solid />
              + 01 234 567 89
            </p>
          </div>
        </div>
      </div>

      <!--Copyright section-->
      <div class="bg-green-500 p-6 text-center dark:bg-neutral-700">
        <span>© 2023 Copyright:</span>
        <a class="font-semibold text-neutral-600 dark:text-neutral-400" href="https://tailwind-elements.com/">Tailwind
          Elements</a>
      </div>
    </footer>
  </body>

  <script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  </script>

  </html>