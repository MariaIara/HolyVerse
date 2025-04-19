<?= comp('head') ?>

<main class="border-2 flex flex-col justify-center items-center h-screen w-full">
    <h1 class="text-center text-6xl font-bold font-[newsreader]">Criar Conta</h1>
    <form action="/register" method="POST" class="mt-16 max-w-[360px] w-xs">
        <div>
            <label for="username" class="block">Username</label>
            <input type="text" name="username" class="bg-[#F5F5F5] border border-[#D9D9D9] px-2 py-2 w-full mt-1.5 rounded-2xl" placeholder="Dominique" required>
        </div>
        <div class="mt-5">
            <label for="email" class="block">Email</label>
            <input type="email" name="email" class="bg-[#F5F5F5] border border-[#D9D9D9] px-2 py-2 w-full mt-1.5 rounded-2xl" placeholder="exemplo@email.com" required>
        </div>
        <div class="mt-5">
            <label for="password" class="block">Senha</label>
            <input type="password" class="bg-[#F5F5F5] border border-[#D9D9D9] px-2 py-2 w-full mt-1.5 rounded-2xl" name="password" placeholder="************" required>
        </div>
        <div class="mt-10">
            <button type="submit" class="bg-[#E76F51] cursor-pointer block w-full py-2 rounded-full text-white font-semibold hover:bg-[#D65F43] transition-all duration-150 ease-in-out">Criar Conta</button>
            <p class="text-sm text-center mt-5">Já tem uma conta? <a href="/login" class="font-semibold underline">Fazer Login</a></p>
        </div>
    </form>
</main>

<?= comp('foot') ?>