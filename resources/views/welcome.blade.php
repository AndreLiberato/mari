<!doctype html> <html> <head> <meta charset="UTF-8"> <meta name="viewport"
  content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script> <script type="module"
  src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> <script nomodule
  src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@vite('resources/css/novo.css') @vite('resources/js/app.js')
</head>

<body class="bg-gradient-to-r from-green-400 via-teal-500 to-emerald-600">
  <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <img class="h-10 inline" src="http://localhost:8000/img/logo_marijuana.png" alt="logo_marijuana">
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="menu(this)"></ion-icon>
      </span>
    </div>

    <ul 
      class="meuMenu md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-green-400 duration-500">QUEM SOMOS</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-green-400 duration-500">NOTÍCIAS</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-green-400 duration-500">ASSOCIE-SE</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="/user/contact" class="text-xl hover:text-green-400 duration-500">CONTATO</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-green-400 duration-500">PERGUNTAS</a>
      </li>

      <button
        class="bg-gradient-to-r from-green-400 via-teal-500 to-emerald-600 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-gradient-to-r hover:from-green-500 hover:via-teal-600 hover:to-emerald-700 rounded">
        Acesso a Plataforma Marijuana
      </button>
      <h2 class=""></h2>
    </ul>
  </nav>
  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Marijuana</h2>
        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Bem-vindo à nossa plataforma dedicada à cannabis medicinal! Aqui, oferecemos informações confiáveis, apoio e uma comunidade acolhedora para aqueles interessados nos benefícios terapêuticos da cannabis. Seja paciente, profissional de saúde ou defensor, junte-se a nós para explorar avanços, desafios e histórias inspiradoras sobre o uso medicinal da cannabis.</p>
      </div>
      <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
            aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-green-400 to-green-600 opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
      <div class="grid gap-8 lg:grid-cols-2">
        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-between items-center mb-5 text-gray-500">
            <span
              class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
              <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                </path>
              </svg>
              Curiosidade
            </span>
            <span class="text-sm">14 de agosto</span>
          </div>
    
          <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">O sobrevivente do Holocausto que descobriu o THC, principal psicoativo da maconha</a></h2>
          <p class="mb-5 font-light text-gray-500 dark:text-gray-400">O caminho para entender o funcionamento bioquímico da maconha e suas propriedades medicinais foi aberto por um cientista israelense que sobreviveu ao Holocausto.</p>
          <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
              <img class="w-7 h-7 rounded-full"
                src="https://ichef.bbci.co.uk/news/645/cpsprodpb/ce1a/live/611f0e90-c1da-11ed-8664-a98fcb0c4a5a.jpg"
                alt="Jese Leos avatar" />
              <span class="font-medium dark:text-white">
              Raphael Mechoulam
              </span>
            </div>
            <a href="#"
              class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
              Leia mais
              <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </article>
        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-between items-center mb-5 text-gray-500">
            <span
              class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
              <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                  clip-rule="evenodd"></path>
                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
              </svg>
              Notícias
            </span>
            <span class="text-sm">14 de agosto</span>
          </div>
          <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Anvisa autoriza cultivo de cannabis para pesquisa na UFRN</a></h2>
          <p class="mb-5 font-light text-gray-500 dark:text-gray-400">A Universidade Federal do Rio Grande do Norte (UFRN) é a primeira instituição do país a conquistar a 
            liberação para cultivo controlado e processamento da planta cannabis para fins de pesquisa científica.</p>
          <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
              <img class="w-7 h-7 rounded-full"
                src="https://www.ufrn.br/resources/documentos/identidadevisual/brasao/brasao_flat.png"
                alt="Bonnie Green avatar" />
              <span class="font-medium dark:text-white">
              Williane Silva
              </span>
            </div>
            <a href="#"
              class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
              Leia mais
              <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>
  <div class="bg-white py-24 sm:py-32" >
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3 ">
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base leading-7 text-gray-600">Mais de 50 países ao redor do mundo legalizaram o uso medicinal da cannabis.</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">50 países</dd>
      </div>
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base leading-7 text-gray-600">Nos Estados Unidos, mais de 30 estados legalizaram o uso medicinal da cannabis, e alguns também legalizaram o uso recreativo.</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">30 estados</dd>
      </div>
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base leading-7 text-gray-600">Mercado de cannabis mundial deve crescer US$ 105 bilhões até 2026</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">105 bilhões</dd>
      </div>
    </dl>
  </div>
</div>

  <footer>
    <p>© 2023 Seu Nome. Todos os direitos reservados.</p>
    <p>Entre em contato: contato@seudominio.com</p>
  </footer>
  <script>
            function menu(e) {
                let list = document.querySelector('.meuMenu');
                e.name === 'menu' ? (e.name = "close", list.classList.add('z-10'),list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu",list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
        }
  </script>

</body>

</html>