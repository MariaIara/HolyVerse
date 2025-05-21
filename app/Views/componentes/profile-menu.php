<div class="relative group inline-block text-left">
    <a href="/profile">
        <img class="ml-3 max-w-12 w-full rounded-full border-2 border-[#F5F5F5] hover:scale-105 transition-all duration-150 ease-in-out"
            src="/imgs/profile-picture.png" alt="profile picture">
    </a>

    <div class="absolute right-0 mt-0 w-48 bg-white border-2 border-[#F5F5F5] rounded-xl shadow-lg z-50 hidden group-hover:block">
        <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F5F5F5]">Meu Perfil</a>
        <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F5F5F5]">Configurações</a>
        <form action="/logout" method="POST">
            <button type="submit" class="block cursor-pointer w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sair</button>
        </form>
    </div>
</div>