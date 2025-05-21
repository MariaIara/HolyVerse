<?= comp('head') ?>

<header class="flex justify-between items-center max-w-3xl mx-8 sm:mx-15 md:mx-auto mt-10">
    <a href="/home" class="hidden sm:flex items-center gap-2">
        <img src="/imgs/seta-esquerda.png" alt="Seta para voltar" class="max-w-4">
        <p>Voltar</p>
    </a>
    <a href="#" class="w-6 h-6 sm:hidden">
        <img src="/imgs/sandwich-menu.svg" alt="Menu de navegação">
    </a>
    <div>
        <?= comp('profile-menu'); ?>
    </div>
</header>

<div class="flex max-w-3xl mx-8 sm:mx-15 md:mx-auto mt-10 gap-2">
    <span class="bg-[#1B9AAA] max-h-50 min-w-1 rounded"></span>
    <h1 class="text-5xl sm:text-7xl md:text-8xl font-[newsreader]">Antigo <br><span class="italic">Testamento</span></h1>
</div>

<div class="max-w-3xl mx-8 sm:mx-15 md:mx-auto mt-12 relative">
    <div>
        <input type="text" placeholder="Pesquisar" class="bg-[#F5F5F5] text-black w-full py-2 px-14 border border-[#D9D9D9] rounded-full">
        <img src="/imgs/magnifying-glass.svg" alt="Lupa de pesquisa" class="w-4 h-4 absolute left-8 top-3">
    </div>
    <div class="sm:max-h-58 sm:overflow-y-auto text-lg sm:text-xl md:text-2xl mt-4">
        <ul class="divide-y divide-gray-200">
            <li class="py-2"><a href="#">Gênesis</a></li>
            <li class="py-2"><a href="#">Êxodo</a></li>
            <li class="py-2"><a href="#">Levítico</a></li>
            <li class="py-2"><a href="#">Números</a></li>
            <li class="py-2"><a href="#">Deuteronômio</a></li>
            <li class="py-2"><a href="#">Josué</a></li>
            <li class="py-2"><a href="#">Juízes</a></li>
            <li class="py-2"><a href="#">Rute</a></li>
            <li class="py-2"><a href="#">1 Samuel</a></li>
            <li class="py-2"><a href="#">2 Samuel</a></li>
        </ul>
    </div>
</div>

<?= comp('foot') ?>