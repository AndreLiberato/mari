<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header>
      <nav class="relative flex w-full flex-wrap items-center justify-between bg-white text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600" data-te-navbar-ref>
          <div class="flex w-full flex-wrap items-center justify-between py-2 lg:py-4 px-3 lg:px-6">
              <div class="relative lg:hidden">
                  <button class="text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 mt-1.5 pr-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                          <path fill="currentColor" stroke="#383838" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.0" d="M2.75 12.25h10.5m-10.5-4h10.5m-10.5-4h10.5"/>
                      </svg>  
                  </button>  
              </div>
          </div>
      </nav>
    </header>
    <!--<header>
        <nav class="relative flex w-full flex-wrap items-center justify-between py-2 px-3 bg-white text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4" data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <div>
                    <a class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0" href="#">
                        <img class="navbar-logo" src="{{ asset('img/logo_marijuana.png') }}" alt="logo_marijuana">
                    </a>
                </div>
                <div class="mt-2 flex-grow lg:mt-0 lg:!flex lg:basis-auto" data-te-collapse-item>
                    <ul class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row" data-te-navbar-nav-ref>
                        <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                            <p class="text-neutral-600 disabled:text-black/30 dark:text-neutral-200  lg:px-0 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                                aria-current="page" href="#" data-te-nav-link-ref>
                                Editar Perfil
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center px-4">
                    <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                        href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                            style="height: 40px; width: 40px" alt="Foto de perfil do associado" loading="lazy" />
                    </a>
                </div>
            </div>
        </nav>
    </header>-->

    <section class="w-full mx-0 my-auto h-screen grid grid-cols-12">
      <nav class="col-start-1 col-span-2 left-0 top-auto z-[1035] shadow-zinc-400 shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0" style="background: linear-gradient(to right, #B0F291, #04BF68)">
        
      </nav>


      <!--<div id="accordionExample">
            <div
              class="rounded-t-lg bg-white dark:bg-neutral-800">
              <h2 class="mb-0" id="headingOne">
                <button
                  class="group relative flex w-full items-center rounded-t-[15px] border-0 bg-gradient-to-l from-[#B0F291] to-[#04BF68] px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                  type="button"
                  data-te-collapse-init
                  data-te-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne">
                  Informações de Acesso 
                  <span
                    class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </button>
              </h2>
              <div
                id="collapseOne"
                class="!visible border border-neutral-0 dark:border-neutral-600"
                data-te-collapse-item
                data-te-collapse-show
                aria-labelledby="headingOne"
                data-te-parent="#accordionExample">
                <div class="px-5 py-4">
                  <strong>This is the first item's accordion body.</strong> It is
                  shown by default, until the collapse plugin adds the appropriate
                  classes that we use to style each element. These classes control
                  the overall appearance, as well as the showing and hiding via CSS
                  transitions. You can modify any of this with custom CSS or
                  overriding our default variables. It's also worth noting that just
                  about any HTML can go within the <code>.accordion-body</code>,
                  though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div
              class="pt-px bg-white dark:border-neutral-600 dark:bg-neutral-800">
              <h2 class="mb-0" id="headingTwo">
                <button
                  class="group relative flex w-full items-center rounded-none bg-gradient-to-l from-[#B0F291] to-[#04BF68] px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                  type="button"
                  data-te-collapse-init
                  data-te-collapse-collapsed
                  data-te-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo">
                  Informações do Paciente
                  <span
                    class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="!visible hidden"
                data-te-collapse-item
                aria-labelledby="headingTwo"
                data-te-parent="#accordionExample">
                <div class="px-5 py-4">
                  <strong>This is the second item's accordion body.</strong> It is
                  hidden by default, until the collapse plugin adds the appropriate
                  classes that we use to style each element. These classes control
                  the overall appearance, as well as the showing and hiding via CSS
                  transitions. You can modify any of this with custom CSS or
                  overriding our default variables. It's also worth noting that just
                  about any HTML can go within the <code>.accordion-body</code>,
                  though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div
              class="pt-px bg-white dark:border-neutral-600 dark:bg-neutral-800">
              <h2 class="mb-0" id="headingThree">
                <button
                  class="group relative flex w-full items-center rounded-none bg-gradient-to-l from-[#B0F291] to-[#04BF68] px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                  type="button"
                  data-te-collapse-init
                  data-te-collapse-collapsed
                  data-te-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree">
                  Informações Pessoais
                  <span
                    class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </button>
              </h2>
              <div
                id="collapseThree"
                class="!visible hidden"
                data-te-collapse-item
                aria-labelledby="headingThree"
                data-te-parent="#accordionExample">
                <div class="px-5 py-4">
                  <strong>This is the second item's accordion body.</strong> It is
                  hidden by default, until the collapse plugin adds the appropriate
                  classes that we use to style each element. These classes control
                  the overall appearance, as well as the showing and hiding via CSS
                  transitions. You can modify any of this with custom CSS or
                  overriding our default variables. It's also worth noting that just
                  about any HTML can go within the <code>.accordion-body</code>,
                  though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div
              class="pt-px bg-white dark:border-neutral-600 dark:bg-neutral-800">
              <h2 class="mb-0" id="headingFour">
                <button
                  class="group relative flex w-full items-center rounded-none bg-gradient-to-l from-[#B0F291] to-[#04BF68] px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                  type="button"
                  data-te-collapse-init
                  data-te-collapse-collapsed
                  data-te-target="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseFour">
                  Informações da Patologia
                  <span
                    class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </button>
              </h2>
              <div
                id="collapseFour"
                class="!visible hidden"
                data-te-collapse-item
                aria-labelledby="headingFour"
                data-te-parent="#accordionExample">
                <div class="px-5 py-4">
                  <strong>This is the second item's accordion body.</strong> It is
                  hidden by default, until the collapse plugin adds the appropriate
                  classes that we use to style each element. These classes control
                  the overall appearance, as well as the showing and hiding via CSS
                  transitions. You can modify any of this with custom CSS or
                  overriding our default variables. It's also worth noting that just
                  about any HTML can go within the <code>.accordion-body</code>,
                  though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div
              class="pt-px bg-white dark:border-neutral-600 dark:bg-neutral-800">
              <h2 class="mb-0" id="headingFive">
                <button
                  class="group relative flex w-full items-center rounded-none bg-gradient-to-l from-[#B0F291] to-[#04BF68] px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                  type="button"
                  data-te-collapse-init
                  data-te-collapse-collapsed
                  data-te-target="#collapseFive"
                  aria-expanded="false"
                  aria-controls="collapseFive">
                  Documentação
                  <span
                    class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </button>
              </h2>
              <div
                id="collapseFive"
                class="!visible hidden"
                data-te-collapse-item
                aria-labelledby="headingFive"
                data-te-parent="#accordionExample">
                <div class="px-5 py-4">
                  <strong>This is the second item's accordion body.</strong> It is
                  hidden by default, until the collapse plugin adds the appropriate
                  classes that we use to style each element. These classes control
                  the overall appearance, as well as the showing and hiding via CSS
                  transitions. You can modify any of this with custom CSS or
                  overriding our default variables. It's also worth noting that just
                  about any HTML can go within the <code>.accordion-body</code>,
                  though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div
              class="pt-px bg-white dark:border-neutral-600 dark:bg-neutral-800">
              <h2 class="mb-0" id="headingSix">
                <button
                  class="group relative flex w-full items-center rounded-none bg-gradient-to-l from-[#B0F291] to-[#04BF68] px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                  type="button"
                  data-te-collapse-init
                  data-te-collapse-collapsed
                  data-te-target="#collapseSix"
                  aria-expanded="false"
                  aria-controls="collapseSix">
                  Contato
                  <span
                    class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </button>
              </h2>
              <div
                id="collapseSix"
                class="!visible hidden"
                data-te-collapse-item
                aria-labelledby="headingSix"
                data-te-parent="#accordionExample">
                <div class="px-5 py-4">
                  <strong>This is the second item's accordion body.</strong> It is
                  hidden by default, until the collapse plugin adds the appropriate
                  classes that we use to style each element. These classes control
                  the overall appearance, as well as the showing and hiding via CSS
                  transitions. You can modify any of this with custom CSS or
                  overriding our default variables. It's also worth noting that just
                  about any HTML can go within the <code>.accordion-body</code>,
                  though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div
              class="pt-px rounded-b-lg bg-white dark:border-neutral-600 dark:bg-neutral-800">
              <h2 class="accordion-header mb-0" id="headingSeven">
                <button
                  class="group relative flex w-full items-center border-0 bg-gradient-to-l from-[#B0F291] to-[#04BF68] px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)] [&[data-te-collapse-collapsed]]:rounded-b-[15px] [&[data-te-collapse-collapsed]]:transition-none"
                  type="button"
                  data-te-collapse-init
                  data-te-collapse-collapsed
                  data-te-target="#collapseSeven"
                  aria-expanded="false"
                  aria-controls="collapseSeven">
                  Notificações
                  <span
                    class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </button>
              </h2>
              <div
                id="collapseSeven"
                class="!visible hidden border border-neutral-0 dark:border-neutral-600"
                data-te-collapse-item
                aria-labelledby="headingSeven"
                data-te-parent="#accordionExample">
                <div class="px-5 py-4">
                  <strong>This is the third item's accordion body.</strong> It is
                  hidden by default, until the collapse plugin adds the appropriate
                  classes that we use to style each element. These classes control
                  the overall appearance, as well as the showing and hiding via CSS
                  transitions. You can modify any of this with custom CSS or
                  overriding our default variables. It's also worth noting that just
                  about any HTML can go within the <code>.accordion-body</code>,
                  though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>-->
    </section>
</body>
</html>