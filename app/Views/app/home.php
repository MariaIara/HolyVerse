<?= comp('head') ?>

<header class="max-w-3xl mx-auto mt-20 flex justify-between items-start">
    <h1 class="text-8xl font-[newsreader]">Olá, <br> <span class="font-semibold"><?= explode(' ', sessao()->pegar('user.username'))[0] ?></span></h1>
    <div class="flex items-center">
        <span class="mr-1.5 text-xl font-medium">29</span>
        <img src="/imgs/seed.svg" alt="seed icon">
        <a href="/profile">
            <img class="ml-3 max-w-12 w-full rounded-full border-2 border-[#F5F5F5] hover:scale-105 transition-all duration-150 ease-in-out" src="/imgs/profile-picture.png" alt="profile picture">
        </a>
    </div>
</header>

<section class="cursor-pointer max-w-3xl mx-auto mt-16 bg-[#F5F5F5] rounded-[32px] py-6 px-8 hover:scale-[0.99] transition-all duration-150 ease-in-out">
    <div class="flex justify-between">
        <h3 class="text-xl font-bold">Versículo do dia ☀️️</h3>
        <a href="#" class="hover:scale-105 transition-all duration-150 ease-in-out">
            <img src="/imgs/heart.svg" alt="heart icon">
        </a>
    </div>
    <div class="pt-8">
        <p class="italic text-lg">“No princípio era a Palavra, e a Palavra estava com Deus e a Palavra era Deus.”</p>
        <p class="mt-3 text-lg opacity-50">João 1:1</p>
    </div>
</section>

<section class="max-w-3xl mx-auto my-10">
    <h3 class="text-xl font-bold">Bíblia digital 📖</h3>
    <div class="flex justify-between gap-10 mt-5">
        <div class="cursor-pointer bg-[#1B9AAA] w-full rounded-[32px] py-6 px-8 hover:scale-[0.97] transition-all duration-150 ease-in-out">
            <h2 class="text-4xl text-white font-[newsreader] font-semibold">Antigo <br> <span class="italic font-bold">Testamento</span></h2>
        </div>
        <div class="cursor-pointer bg-[#E76F51] w-full rounded-[32px] py-6 px-8 hover:scale-[0.97] transition-all duration-150 ease-in-out">
            <h2 class="text-4xl text-white font-[newsreader] font-semibold">Novo <br> <span class="italic font-bold">Testamento</span></h2>
        </div>
    </div>
</section>

<?= comp('foot') ?>