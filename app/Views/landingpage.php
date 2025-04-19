<?= comp('head') ?>

<main id="holyverse" class="max-w-4xl mx-auto mt-20">
    <img src="/imgs/holyverse.svg" alt="HolyVerse">
    <p class="text-xl italic mt-5">“Pela manhã semeia a tua semente, e à tarde não retires a tua mão”</p>
    <a href="/login" class="bg-[#E76F51] block w-max py-3 px-16 rounded-full mt-16 text-white font-semibold hover:bg-[#D65F43] transition-all duration-150 ease-in-out">Começar a semear</a>
</main>

<section id="how-it-works" class="bg-[#F5F5F5] mt-40 rounded-[64px]">
    <div class="flex max-w-5xl mx-auto justify-between py-20">
        <div>
            <h1 class="font-[newsreader] text-7xl font-semibold">Organize <br>a sua leitura</h1>
            <ul class="flex flex-col mt-12 gap-8 mb-12">
                <li><span class="text-[#E76F51] font-bold">1.</span> Tenha uma bíblia digital a qualquer momento</li>
                <li><span class="text-[#E76F51] font-bold">2.</span> Múltiplas versões</li>
                <li><span class="text-[#E76F51] font-bold">3.</span> Todos os dias uma nova palavra do dia</li>
                <li><span class="text-[#E76F51] font-bold">4.</span> Faça anotações em seus versículos favoritos</li>
            </ul>
            <a href="/login" class="underline font-bold italic hover:text-[#E76F51] transition-all duration-150 ease-in-out">Começar agora</a>
        </div>
        <div class="flex gap-10">
            <img src="/imgs/img1.png" alt="Homem lendo a bíblia">
            <img src="/imgs/img2.png" alt="Capa da bíblia">
        </div>
    </div>
</section>

<footer class="max-w-4xl mx-auto mt-40 mb-20">
    <div class="flex justify-between items-start">
        <a href="/">
            <img src="/imgs/holyverse.svg" alt="HolyVerse" class="max-w-40">
        </a>

        <div>
            <h3 class="font-[newsreader] text-3xl">Contato</h3>
            <ul class="mt-5">
                <li>
                    <a href="#">holyverse@gmail.com</a>
                </li>
            </ul>
            <span class="block h-0.5 w-full bg-[#F5F5F5] my-8"></span>
            <div class="flex gap-8">
                <a href="#">
                    <img src="/imgs/instagram.svg" alt="Instagram">
                </a>
                <a href="#">
                    <img src="/imgs/tiktok.svg" alt="Tiktok">
                </a>
                <a href="#">
                    <img src="/imgs/email.svg" alt="Email">
                </a>
            </div>
        </div>

        <div>
            <h3 class="font-[newsreader] text-3xl">Informações</h3>
            <ul class="mt-5 flex flex-col gap-3">
                <li><a href="#holyverse">Início</a></li>
                <li><a href="#how-it-works">Como funciona?</a></li>
                <li><a href="/login" class="text-[#E76F51]">Começar a semear</a></li>
                <li><a href="#">Termos e condições</a></li>
            </ul>
        </div>
    </div>

    <p class="mt-20 font-thin">HolyVerse © Alguns direitos reservados.</p>

</footer>

<?= comp('foot') ?>