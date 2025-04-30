<?= comp('head') ?>

<div class="block md:hidden mt-5 w-full flex justify-between px-2">
    <button class="block p-2">
        <span class="block w-7 h-1 rounded-xl bg-black mb-1.5"></span>
        <span class="block w-7 h-1 rounded-xl bg-black mb-1.5"></span>
        <span class="block w-7 h-1 rounded-xl bg-black"></span>
    </button>
    <?= comp('dropdown-menu') ?>
</div>

<header class="px-2 lg:px-0 max-w-3xl mx-auto mt-10 flex justify-between items-start">
    <h1 class="text-6xl sm:text-8xl font-[newsreader]">Olá, <br> <span class="font-semibold"><?= explode(' ', sessao()->pegar('user.username'))[0] ?></span></h1>
    <div class="hidden md:block">
        <?= comp('dropdown-menu') ?>
    </div>
</header>

<section class="px-2 lg:px-0 max-w-3xl mx-auto mt-10 sm:mt-16">
    <div class="cursor-pointer bg-[#F5F5F5] rounded-[32px] py-6 px-8 hover:-translate-y-2 transition-all duration-150 ease-in-out">
        <div class="flex justify-between">
            <h3 class="text-xl font-bold">Versículo do dia ☀️️</h3>
            <a href="#" class="transition-all duration-150 ease-in-out">
                <img src="/imgs/heart.svg" alt="heart icon">
            </a>
        </div>
        <div class="pt-4 sm:pt-8">
            <p class="italic text-lg" id="daily-verse">“No princípio era a Palavra, e a Palavra estava com Deus e a Palavra era Deus.”</p>
            <p class="mt-3 text-lg opacity-50" id="reference">João 1:1</p>
        </div>
    </div>
</section>

<section class="px-2 lg:px-0 max-w-3xl mx-auto my-10">
    <h3 class="text-xl font-bold">Bíblia digital 📖</h3>
    <div class="block md:flex justify-between gap-10 mt-5">
        <div class="cursor-pointer bg-[#1B9AAA] w-full rounded-[32px] mb-5 md:mb-0 py-6 px-8 hover:scale-[0.98] transition-all duration-150 ease-in-out">
            <h2 class="text-5xl text-white font-[newsreader] font-semibold">Antigo <br> <span class="italic font-bold">Testamento</span></h2>
        </div>
        <div class="cursor-pointer bg-[#E76F51] w-full rounded-[32px] py-6 px-8 hover:scale-[0.98] transition-all duration-150 ease-in-out">
            <h2 class="text-5xl text-white font-[newsreader] font-semibold">Novo <br> <span class="italic font-bold">Testamento</span></h2>
        </div>
    </div>
</section>

<?= comp('foot') ?>

<script>
    const daily_verse = document.getElementById('daily-verse')
    const reference = document.getElementById('reference')

    async function fetchVerse() {
        try {
            const response = await fetch('https://www.abibliadigital.com.br/api/verses/nvi/random', {
                headers: {
                    'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdHIiOiJXZWQgQXByIDMwIDIwMjUgMDA6MDI6MjkgR01UKzAwMDAubWFyaWFpYXJhc2JyYWdhQGdtYWlsLmNvbSIsImlhdCI6MTc0NTk3MTM0OX0.MipqEq5U2G432Zb1kMK-Ji-BzBX3ed7nXpvlPc2SzKo',
                    'Content-Type': 'application/json'
                }
            });

            const response_json = await response.json()

            const verse_api = response_json.text
            daily_verse.innerText = verse_api

            const reference_api = response_json.book.name + ' ' + response_json.chapter + ':' + response_json.number
            reference.innerText = reference_api

        } catch (error) {
            console.log(error)
        }
    }

    fetchVerse()
</script>