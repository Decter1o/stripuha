@props(['breadcrumbs' => []])
<div x-data="{ lang: 'kz', menuOpen: false, fontSize: 16 }" class="fixed top-0 left-0 w-full z-50 bg-white shadow-md border-b border-gray-200" style="font-family: 'Roboto', Arial, sans-serif; font-size: 16px;">
  <div class="max-w-screen-xl mx-auto flex items-center justify-between py-2 px-4 lg:px-8">
    <!-- Логотип и название -->
    <div class="flex items-center space-x-3">
      <!-- SVG логотип -->
      <div class="w-12 h-12 flex items-center justify-center">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="22" fill="#1E3A8A"/>
          <path d="M24 10L28 24L24 38L20 24L24 10Z" fill="#F97316"/>
          <circle cx="24" cy="24" r="6" fill="#3B82F6"/>
        </svg>
      </div>
      <div class="flex flex-col leading-snug">
        <span class="text-[#1E3A8A] font-bold" x-bind:style="'font-size:' + fontSize + 'px'">Ұлттық білім беру дамыту орталығы</span>
        <span class="text-[#1E3A8A] text-xs" x-bind:style="'font-size:' + (fontSize-2) + 'px'">NATIONAL CENTER FOR HIGHER EDUCATION DEVELOPMENT</span>
      </div>
    </div>
    <!-- Меню навигации -->
    <nav class="hidden md:flex flex-1 justify-center space-x-6">
      <a href="#" class="text-[#1E3A8A] hover:text-[#3B82F6] transition-colors">Q. Нәтиже</a>
      <a href="#" class="text-[#1E3A8A] hover:text-[#3B82F6] transition-colors">По дате заявки</a>
      <a href="#" class="text-[#1E3A8A] hover:text-[#3B82F6] transition-colors">Проверить статус</a>
      <a href="#" class="text-[#1E3A8A] hover:text-[#3B82F6] transition-colors">Поиск вуза</a>
    </nav>
    <!-- Контакты и кнопка -->
    <div class="flex items-center space-x-4">
      <!-- Breadcrumbs -->
      <nav aria-label="breadcrumb" class="hidden lg:block">
        <ol class="flex space-x-2 text-xs text-gray-500">
          @foreach($breadcrumbs as $breadcrumb)
            <li>
              @if(!$loop->last)
                <a href="{{ $breadcrumb['url'] }}" class="hover:text-[#3B82F6]">{{ $breadcrumb['label'] }}</a>
                <span>/</span>
              @else
                <span class="text-[#1E3A8A]">{{ $breadcrumb['label'] }}</span>
              @endif
            </li>
          @endforeach
        </ol>
      </nav>
      <!-- Телефон и флаг -->
      <div class="flex items-center space-x-1">
        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2zm12-12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zm0 12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
        <span class="text-[#1E3A8A] font-medium">+7 (7172) 57-20-75</span>
        <span class="ml-1"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Flag_of_Kazakhstan.svg" alt="KZ" class="w-5 h-3 inline-block rounded-sm border"/></span>
      </div>
      <!-- Кнопка -->
      <a href="#" class="bg-[#3B82F6] text-white px-4 py-2 rounded-lg font-semibold hover:bg-[#2563EB] transition-colors">Личный кабинет</a>
      <!-- Языки -->
      <div class="relative">
        <button @click="menuOpen = !menuOpen" class="flex items-center px-2 py-1 border border-gray-300 rounded hover:bg-gray-100">
          <span x-text="lang.toUpperCase()"></span>
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div x-show="menuOpen" @click.away="menuOpen = false" class="absolute right-0 mt-2 w-24 bg-white border rounded shadow-lg z-10">
          <a href="#" @click.prevent="lang = 'kz'; menuOpen = false" class="block px-4 py-2 hover:bg-[#3B82F6] hover:text-white">Қазақша</a>
          <a href="#" @click.prevent="lang = 'ru'; menuOpen = false" class="block px-4 py-2 hover:bg-[#3B82F6] hover:text-white">Русский</a>
          <a href="#" @click.prevent="lang = 'en'; menuOpen = false" class="block px-4 py-2 hover:bg-[#3B82F6] hover:text-white">English</a>
        </div>
      </div>
      <!-- Меню для мобильных -->
      <button class="md:hidden ml-2" @click="menuOpen = !menuOpen">
        <svg class="w-8 h-8 text-[#1E3A8A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>
  </div>
  <!-- Мобильное меню -->
  <nav x-show="menuOpen" class="md:hidden bg-white border-t border-gray-200 px-4 pb-4">
    <a href="#" class="block py-2 text-[#1E3A8A] hover:text-[#3B82F6]">Q. Нәтиже</a>
    <a href="#" class="block py-2 text-[#1E3A8A] hover:text-[#3B82F6]">По дате заявки</a>
    <a href="#" class="block py-2 text-[#1E3A8A] hover:text-[#3B82F6]">Проверить статус</a>
    <a href="#" class="block py-2 text-[#1E3A8A] hover:text-[#3B82F6]">Поиск вуза</a>
  </nav>
  <!-- Кнопки доступности -->
  <div class="absolute right-4 top-2 flex space-x-2">
    <button @click="fontSize = fontSize + 2" class="text-xs px-2 py-1 bg-[#E5E7EB] rounded hover:bg-[#3B82F6] hover:text-white" aria-label="Увеличить шрифт">A+</button>
    <button @click="fontSize = fontSize - 2" class="text-xs px-2 py-1 bg-[#E5E7EB] rounded hover:bg-[#3B82F6] hover:text-white" aria-label="Уменьшить шрифт">A-</button>
  </div>
</div>
<!-- Подключение Alpine.js (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<!-- Tailwind CSS должен быть подключён в вашем проекте -->