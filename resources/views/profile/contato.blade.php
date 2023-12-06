<x-layout>
    <div class="mx-auto max-w-2xl text-center">
        <img class="mx-auto h-10" src="http://localhost:8000/img/logo_marijuana.png" alt="logo_marijuana">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contato</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Deixe sua mensagem: Estamos ansiosos para ouvir de você!
            Utilize este espaço para compartilhar suas perguntas, comentários ou sugestões. Sua opinião é
            importante
            para nós, e responderemos o mais breve possível. Agradecemos por escolher se conectar conosco!
        </p>
    </div>
    <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Primeiro
                    nome</label>
                <div class="mt-2.5">
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Último
                    nome</label>
                <div class="mt-2.5">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                <div class="mt-2.5">
                    <input type="email" name="email" id="email" autocomplete="email"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Número de
                    telefone</label>
                <div class="relative mt-2.5">
                    <div class="absolute inset-y-0 left-0 flex items-center">
                    </div>
                    <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                        class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Mensagem</label>
                <div class="mt-2.5">
                    <textarea name="message" id="message" rows="4"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>
            <div class="flex gap-x-4 sm:col-span-2">
                <div class="flex h-6 items-center">
                    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                    <button type="button"
                        class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                        <span class="sr-only">Agree to policies</span>
                        <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                        <span aria-hidden="true"
                            class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                    </button>
                </div>
                <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
                    Ao selecionar esta opção, você concorda com nossa política de privacidade.
                    <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                </label>
            </div>
        </div>
        <div class="mt-10">
            <button type="submit"
                class="block w-full rounded-md bg-gradient-to-r from-green-400 via-teal-500 to-emerald-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:from-green-500 hover:via-teal-600 hover:to-emerald-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
        </div>
    </form>
    </div>
</x-layout>