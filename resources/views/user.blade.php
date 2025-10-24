<!doctype html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BlanjaPoin</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
 </head>
 <body class="bg-white text-neutral-900 antialiased font-poppins min-h-screen">
   <nav id="navbar" class="sticky top-0 z-20 bg-white transition-shadow duration-300 w-full">
    <div class="mx-auto max-w-[1120px] px-4 md:px-6 lg:px-8 py-4 md:py-5 lg:py-6">
     <div class="flex items-center justify-between">
      <div class="flex items-center gap-3">
       <img src="/logo.png" alt="BlanjaPoin" class="h-10 md:h-12 lg:h-14 w-auto" />
      </div>
      <div class="flex items-center gap-2 md:gap-3">
       <div class="flex items-center gap-1.5 md:gap-2 rounded-full bg-gradient-to-r from-amber-50 to-orange-50 px-3 md:px-4 py-1.5 md:py-2 shadow-lg drop-shadow-md ring-1 ring-amber-200/50 transition-all hover:shadow-xl hover:drop-shadow-lg hover:scale-105">
        <span class="inline-flex h-5 w-5 md:h-6 md:w-6 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[10px] md:text-xs font-bold shadow-sm">P</span>
        <span class="text-xs md:text-sm font-bold text-neutral-800">1,289</span>
       </div>
       <div class="relative">
        <button onclick="toggleUserDropdown()" id="userDropdownBtn" class="inline-flex items-center gap-1.5 md:gap-2 rounded-xl md:rounded-2xl bg-gradient-to-r from-[#FF3B30] via-[#FF6B2C] to-[#FF9F0A] px-4 md:px-6 py-2 md:py-2.5 text-xs md:text-sm font-semibold text-white shadow-lg shadow-orange-300/50 drop-shadow-lg ring-1 ring-white/30 transition-all hover:shadow-xl hover:shadow-orange-400/50 hover:drop-shadow-xl hover:scale-105 active:scale-95">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-3.5 w-3.5 md:h-4 md:w-4 opacity-95">
          <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.418 0-8 2.239-8 5v1h16v-1c0-2.761-3.582-5-8-5Z"/>
         </svg>
         <span class="tracking-tight">Willy</span>
         <svg id="userDropdownArrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-3 w-3 md:h-3.5 md:w-3.5 opacity-95 transition-transform duration-300">
          <path d="M7 10l5 5 5-5z"/>
         </svg>
        </button>
        <div id="userDropdown" class="absolute right-0 mt-2 w-48 rounded-xl bg-white shadow-xl ring-1 ring-neutral-200 overflow-hidden opacity-0 invisible scale-95 origin-top-right transition-all duration-300 ease-out z-50">
         <div class="py-1">
          <a href="{{ route('logout') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold text-red-600 hover:bg-red-50 transition-colors">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd" />
           </svg>
           <span>Logout</span>
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </nav>

  <div class="mx-auto max-w-[1120px]">
   <main class="px-4 md:px-7 lg:px-8 pb-12 md:pb-16">
    <section class="mt-6 md:mt-8">
     <div class="relative flex items-center gap-3 md:gap-4 group">
      <button onclick="prevSlide()" class="hidden md:grid h-10 w-10 md:h-12 md:w-12 place-items-center rounded-full bg-white shadow-xl transition-all hover:bg-neutral-50 hover:scale-110 active:scale-95 text-neutral-700 font-bold text-xl md:text-2xl flex-shrink-0">‹</button>
      
      <div class="flex-1">
       <div class="h-48 sm:h-52 md:h-64 lg:h-72 rounded-2xl md:rounded-[2rem] bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-xl md:shadow-2xl shadow-neutral-400/30 drop-shadow-xl md:drop-shadow-2xl overflow-hidden ring-1 ring-neutral-200/50 transition-all duration-200">
        <img id="bannerImage" src="{{ asset('iklan1.jpeg') }}" alt="Banner Promo" class="w-full h-full object-cover transition-opacity duration-500">
       </div>
       <div class="mt-4 md:mt-5 flex items-center justify-center gap-2 md:gap-2.5">
        <span onclick="goToSlide(0)" class="carousel-dot h-2 w-2 md:h-2.5 md:w-2.5 rounded-full bg-neutral-300 transition-all hover:scale-125 cursor-pointer hover:bg-neutral-400"></span>
        <span onclick="goToSlide(1)" class="carousel-dot h-2 w-2 md:h-2.5 md:w-2.5 rounded-full bg-neutral-300 transition-all hover:scale-125 cursor-pointer hover:bg-neutral-400"></span>
        <span onclick="goToSlide(2)" class="carousel-dot h-2 w-2 md:h-2.5 md:w-2.5 rounded-full bg-neutral-300 transition-all hover:scale-125 cursor-pointer hover:bg-neutral-400"></span>
       </div>
      </div>
      
      <button onclick="nextSlide()" class="hidden md:grid h-10 w-10 md:h-12 md:w-12 place-items-center rounded-full bg-white shadow-xl transition-all hover:bg-neutral-50 hover:scale-110 active:scale-95 text-neutral-700 font-bold text-xl md:text-2xl flex-shrink-0">›</button>
     </div>
    </section>

    <section class="mt-8 md:mt-10">
     <div class="grid grid-cols-3 gap-2.5 md:gap-4 sm:grid-cols-6">
      <button onclick="filterCategory('food')" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-rose-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-rose-100 to-rose-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">🍔</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-rose-600 transition-colors leading-tight">Food & Beverage</span>
      </button>
      <button onclick="filterCategory('entertain')" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-indigo-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-indigo-100 to-indigo-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">🎬</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-indigo-600 transition-colors leading-tight">Entertain</span>
      </button>
      <button onclick="filterCategory('vacation')" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-purple-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-purple-100 to-purple-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">🏖️</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-purple-600 transition-colors leading-tight">Vacation</span>
      </button>
      <button onclick="filterCategory('beauty')" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-pink-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-pink-100 to-pink-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">💄</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-pink-600 transition-colors leading-tight">Beauty & Care</span>
      </button>
      <button onclick="filterCategory('shop')" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-orange-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-orange-100 to-orange-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">🛍️</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-orange-600 transition-colors leading-tight">Shop</span>
      </button>
      <button onclick="filterCategory('telkomsel')" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-red-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-red-100 to-red-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">📶</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-red-600 transition-colors leading-tight">Telkomsel Data</span>
      </button>
     </div>
    </section>

    <section class="mt-8 md:mt-12">
     <div class="flex flex-col md:flex-row items-stretch md:items-center gap-2 md:gap-3 max-w-3xl">
      <div class="flex-1 rounded-lg md:rounded-xl bg-white px-3 md:px-4 py-2 md:py-2.5 shadow-md ring-1 ring-neutral-200/50 transition-all focus-within:ring-2 focus-within:ring-orange-400 focus-within:shadow-lg">
       <div class="flex items-center gap-2 text-neutral-500">
        <span class="text-base md:text-lg">🔍</span>
        <input class="w-full bg-transparent text-xs md:text-sm outline-none placeholder:text-neutral-400 font-semibold" placeholder="Cari produk atau voucher..." />
       </div>
      </div>
      <div class="rounded-lg md:rounded-xl border border-neutral-200 bg-white px-3 md:px-4 py-2 md:py-2.5 shadow-md">
       <div class="flex items-center gap-2 text-neutral-500">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-neutral-400">
         <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
        </svg>
        <input class="bg-transparent text-xs md:text-sm outline-none placeholder:text-neutral-400 font-semibold w-32" placeholder="Location" />
       </div>
      </div>
      <select class="rounded-lg md:rounded-xl border border-neutral-200 bg-white px-3 md:px-4 py-2 md:py-2.5 text-xs md:text-sm font-semibold shadow-md transition-all hover:shadow-lg hover:border-orange-400 focus:ring-2 focus:ring-orange-400 outline-none cursor-pointer">
       <option>According To Your Point</option>
       <option>Lowest</option>
       <option>Highest</option>
      </select>
     </div>
    </section>

    <section id="section-shop" class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">🛍️ Shop</h2>
     </div>
     <div id="shopCardContainer" class="card-container space-y-4 md:space-y-5">
      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-rose-200">
       <!-- Mobile Layout (default) -->
       <div class="md:hidden flex flex-col h-full">
        <div class="relative">
         <!-- Logo and Points stacked above image -->
         <div class="absolute top-2 left-2 z-10 flex items-end gap-5">
          <div class="inline-flex items-center gap-1 bg-white/70 rounded-full px-2 py-1">
           <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[8px] font-bold shadow-sm">P</span>
           <span class="text-[10px] md:text-[11px] font-semibold text-red-600">100.000</span>
          </div>
         </div>
         
         <!-- Promo Image -->
         <div class="aspect-[4/3] rounded-t-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-wingstop.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
        
        <!-- Card Content Below Image -->
        <div class="flex-1 flex flex-col justify-between">
         <div class="pb-0.5 px-1.5">
          <div class="text-center">
          <p class=" mt-2 text-center text-xs font-semibold text-base leading-tight whitespace-normal">
            Diskon 10% <br>
            <span class="font-medium">Diskon Rp 100,000 Wingstop melalui PaysQift</span>
            </p>
          </div>
         </div>
         
         <!-- Mobile Footer -->
         <div class="px-2 py-1 bg-neutral-50 text-[10px] text-neutral-600">
          <div class="flex justify-between items-center">
           <span class="font-medium">Remaining Stock • 250</span>
           <span class="font-medium">Valid until • 20 Jan 2025</span>
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Layout (md and up) -->
       <div class="hidden md:block">
        <div class="grid grid-cols-2 gap-0">
         <div class="card-content p-4 flex flex-col">
          <div class="mb-1">
           <img src="{{ asset('wingstop.png') }}" alt="WINGSTOP" class="card-logo w-[180px] h-[82px] object-contain">
          </div>
          <div class="pl-10 md:pl-14">
           <div class="card-title text-rose-600 font-bold text-base md:text-3xl mb-0.5">Diskon</div>
           <div class="card-price text-rose-600 font-bold text-xl md:text-2xl leading-none mb-2">Rp100<span class="text-xl md:text-2xl">ribu</span></div>
          </div>
          <div class="card-description mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Diskon Rp 100,000 Wingstop melalui PaysQift</div>
          <div class="card-points mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
           <span class="inline-flex h-5 w-5 md:h-6 md:w-6 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[10px] md:text-xs font-bold shadow-sm">P</span>
           <span>100000 Poin</span>
          </div>
         </div>  
         <div class="card-image-wrapper p-2">
          <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
           <img src="{{ asset('promo-wingstop.jpg') }}" alt="" class="w-full h-full object-cover">
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Footer -->
       <div class="hidden md:flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 250</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>

      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-blue-200">
       <!-- Mobile Layout (default) -->
       <div class="md:hidden flex flex-col h-full">
        <div class="relative">
         <!-- Logo and Points stacked above image -->
         <div class="absolute top-2 left-2 z-10 flex items-end gap-5">
          <div class="inline-flex items-center gap-1 bg-white/70 rounded-full px-2 py-1">
           <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[8px] font-bold shadow-sm">P</span>
           <span class="text-[10px] md:text-[11px] font-semibold text-red-600">100.000</span>
          </div>
         </div>
         
         <!-- Promo Image -->
         <div class="aspect-[4/3] rounded-t-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden"> 
          <img src="{{ asset('promo-transmart.jpeg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
        
        <!-- Card Content Below Image -->
        <div class="flex-1 flex flex-col justify-between">
         <div class="pb-0.5 px-1.5">
          <div class="text-left">
          <p class="text-rose-600 mt-2 text-center text-l font-bold text-base leading-tight whitespace-normal">
            Diskon Rp 100,000 <br>
          </p>
          <span class=" text-left text-[10px] font-medium text-gray-600 ">S&K <br></span>
          <span class=" text-left text-[10px] font-medium text-gray-600 ">menggunakan gopay cashback dengan minimal transaksi Rp 100.000 widna awindoawbfa aw fuaoflbqofbjq</span>
          </div>
         </div>
                
       <!-- Desktop Layout (md and up) -->
       <div class="hidden md:block">
        <div class="grid grid-cols-2 gap-0">
         <div class="card-content p-4 flex flex-col">
          <div class="mb-1">
           <img src="{{ asset('transmart.png') }}" alt="TRANSMART" class="card-logo w-[180px] h-[82px] object-contain">
          </div>
          <div class="pl-10 md:pl-14">
           <div class="card-title text-rose-600 font-bold text-base md:text-3xl mb-0.5">Diskon</div>
           <div class="card-price text-rose-600 font-bold text-xl md:text-2xl leading-none mb-2">Rp100<span class="text-xl md:text-2xl">ribu</span></div>
          </div>
          <div class="card-description mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Diskon Rp 100,000 Transmart melalui PaysQift</div>
          <div class="card-points mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
           <span class="text-sm">🔥</span>
           <span>100000 Poin</span>
          </div>
         </div>
         <div class="card-image-wrapper p-2">
          <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden"> 
           <img src="{{ asset('promo-transmart.jpeg') }}" alt="" class="w-full h-full object-cover">
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Footer -->
       <div class="hidden md:flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 150</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
       
       <!-- Mobile Footer -->
       <div class="md:hidden px-2 py-1 bg-neutral-50 text-[10px] text-neutral-600">
        <div class="flex justify-between items-center">
         <span class="font-medium">Remaining Stock • 150</span>
         <span class="font-medium">Valid until • 20 Jan 2025</span>
        </div>
       </div>
      </article>

      <article id="extraShopCard" class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all duration-500 ease-in-out hover:shadow-xl hover:scale-[1.01] hover:border-green-200 max-h-0 opacity-0 scale-y-0 origin-top">
       <!-- Mobile Layout (default) -->
       <div class="md:hidden flex flex-col h-full">
        <div class="relative">
         <!-- Logo and Points stacked above image -->
         <div class="absolute top-2 left-2 z-10 flex flex-col gap-1">
          <img src="{{ asset('indomaret.png') }}" alt="INDOMARET" class="w-16 h-8 object-contain bg-white/20 rounded px-1">
          <div class="inline-flex items-center gap-1 bg-white/90 rounded-full px-2 py-1">
           <span class="text-xs">🔥</span>
           <span class="text-[10px] font-semibold text-orange-600">50000 Poin</span>
          </div>
         </div>
         
         <!-- Promo Image -->
         <div class="aspect-[3/4] rounded-t-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-indomaret.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
        
        <!-- Card Content Below Image -->
        <div class="flex-1 flex flex-col justify-between">
         <div class="px-2 pt-1 pb-2">
          <div class="text-left">
           <div class="card-title text-rose-600 font-bold text-base mb-0.5">Voucher</div>
           <div class="card-price text-rose-600 font-bold text-xl leading-none mb-1">Rp50<span class="text-xl">ribu</span></div>
          </div>
          <div class="card-description text-left text-xs text-neutral-800 font-medium leading-relaxed">Voucher Belanja Rp 50,000 Indomaret</div>
         </div>
         
         <!-- Mobile Footer -->
         <div class="px-2 py-1 bg-neutral-50 text-[10px] text-neutral-600">
          <div class="flex justify-between items-center">
           <span class="font-medium">Stock • 300</span>
           <span class="font-medium">Expired • 20 Jan 2025</span>
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Layout (md and up) -->
       <div class="hidden md:block">
        <div class="grid grid-cols-2 gap-0">
         <div class="card-content p-4 flex flex-col">
          <div class="mb-1">
           <img src="{{ asset('indomaret.png') }}" alt="INDOMARET" class="card-logo w-[180px] h-[82px] object-contain">
          </div>
          <div class="pl-10 md:pl-14">
           <div class="card-title text-rose-600 font-bold text-base md:text-3xl mb-0.5">Voucher</div>
           <div class="card-price text-rose-600 font-bold text-xl md:text-2xl leading-none mb-2">Rp50<span class="text-xl md:text-2xl">ribu</span></div>
          </div>
          <div class="card-description mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Voucher Belanja Rp 50,000 Indomaret</div>
          <div class="card-points mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
           <span class="text-sm">🔥</span>
           <span>50000 Poin</span>
          </div>
         </div>
         <div class="card-image-wrapper p-2">
          <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
           <img src="{{ asset('promo-indomaret.jpg') }}" alt="" class="w-full h-full object-cover">
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Footer -->
       <div class="hidden md:flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 300</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>
     </div>
     <div class="mt-4 md:mt-6 flex justify-center">
      <button onclick="toggleShopCards()" id="shopSeeAllBtn" class="text-sm font-bold text-rose-600 hover:text-rose-700 transition-all flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-rose-50">
       <span id="shopSeeAllText">See All</span>
       <span id="shopSeeAllArrow" class="transition-transform group-hover:translate-y-1">↓</span>
      </button>
     </div>
    </section>

    <section id="section-food" class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">🍔 Food</h2>
      <a href="#" class="text-sm font-bold text-rose-600 hover:text-rose-700 transition-all flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-rose-50">
       <span>See All</span>
       <span class="transition-transform group-hover:translate-x-2">→</span>
      </a>
     </div>
     <div id="foodCardContainer" class="card-container space-y-4 md:space-y-5">
      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-emerald-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('coba.png') }}" alt="WINGSTOP" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Diskon</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">10<span class="text-xl md:text-2xl">%</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Diskon 10% Wingstop melalui PaysQift</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>100000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-wingstop.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 90</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>

      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-red-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('pizzahut.png') }}" alt="PIZZA HUT" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Diskon</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">Rp100<span class="text-xl md:text-2xl">ribu</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Diskon Rp 100,000 Pizza Hut melalui PaysQift</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>100000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-pizzahut.png') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 120</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>

      <article id="extraFoodCard" class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all duration-500 ease-in-out hover:shadow-xl hover:scale-[1.01] hover:border-yellow-200 max-h-0 opacity-0 scale-y-0 origin-top">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('kfc.png') }}" alt="KFC" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Diskon</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">15<span class="text-xl md:text-2xl">%</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Diskon 15% KFC melalui PaysQift</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>75000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-kfc.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 200</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>
     </div>
     <div class="mt-4 md:mt-6 flex justify-center">
      <button onclick="toggleFoodCards()" id="foodSeeAllBtn" class="text-sm font-bold text-rose-600 hover:text-rose-700 transition-all flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-rose-50">
       <span id="foodSeeAllText">See All</span>
       <span id="foodSeeAllArrow" class="transition-transform group-hover:translate-y-1">↓</span>
      </button>
     </div>
    </section>

    <section id="section-telkomsel" class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">📶 Telkomsel</h2>
     </div>
     <div id="telkomselCardContainer" class="card-container space-y-4 md:space-y-5">
      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-red-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('telkomsel.png') }}" alt="TELKOMSEL" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Paket Data</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">10<span class="text-xl md:text-2xl">GB</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Paket Data Telkomsel 10GB masa aktif 30 hari</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>50000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden"> 
          <img src="{{ asset('promo-telkomsel.jpg') }}" alt="TELKOMSEL" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 500</span>
        <span class="font-medium">Valid until • 31 Dec 2025</span>
       </div>
      </article>

      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-red-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('telkomsel.png') }}" alt="TELKOMSEL" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Paket Data</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">25<span class="text-xl md:text-2xl">GB</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Paket Data Telkomsel 25GB masa aktif 30 hari</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>100000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden"> 
          <img src="{{ asset('promo-telkomsel.jpg') }}" alt="TELKOMSEL" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 300</span>
        <span class="font-medium">Valid until • 31 Dec 2025</span>
       </div>
      </article>

      <article id="extraTelkomselCard" class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all duration-500 ease-in-out hover:shadow-xl hover:scale-[1.01] hover:border-red-200 max-h-0 opacity-0 scale-y-0 origin-top">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('telkomsel.png') }}" alt="TELKOMSEL" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Paket Data</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">50<span class="text-xl md:text-2xl">GB</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Paket Data Telkomsel 50GB masa aktif 30 hari</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>150000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-telkomsel.jpg') }}" alt="TELKOMSEL" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 200</span>
        <span class="font-medium">Valid until • 31 Dec 2025</span>
       </div>
      </article>
     </div>
     <div class="mt-4 md:mt-6 flex justify-center">
      <button onclick="toggleTelkomselCards()" id="telkomselSeeAllBtn" class="text-sm font-bold text-rose-600 hover:text-rose-700 transition-all flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-rose-50">
       <span id="telkomselSeeAllText">See All</span>
       <span id="telkomselSeeAllArrow" class="transition-transform group-hover:translate-y-1">↓</span>
      </button>
     </div>
    </section>

    <section id="section-entertain" class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">🎬 Entertain</h2>
     </div>
     <div class="space-y-4 md:space-y-5">
      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-indigo-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('cgv.png') }}" alt="CGV" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Voucher</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">Rp50<span class="text-xl md:text-2xl">ribu</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Voucher Nonton CGV Cinema Rp 50,000</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>60000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-cgv.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 180</span>
        <span class="font-medium">Valid until • 31 Mar 2025</span>
       </div>
      </article>

      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-purple-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('spotify.png') }}" alt="SPOTIFY" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Premium</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">1<span class="text-xl md:text-2xl">Bulan</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Spotify Premium 1 Bulan Individual</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>80000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-spotify.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 250</span>
        <span class="font-medium">Valid until • 31 Dec 2025</span>
       </div>
      </article>

      <article id="extraEntertainCard" class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all duration-500 ease-in-out hover:shadow-xl hover:scale-[1.01] hover:border-pink-200 max-h-0 opacity-0 scale-y-0 origin-top">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('netflix.png') }}" alt="NETFLIX" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Premium</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">1<span class="text-xl md:text-2xl">Bulan</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Netflix Premium 1 Bulan Mobile</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>70000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-netflix.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 150</span>
        <span class="font-medium">Valid until • 31 Dec 2025</span>
       </div>
      </article>
     </div>
     <div class="mt-4 md:mt-6 flex justify-center">
      <button onclick="toggleEntertainCards()" id="entertainSeeAllBtn" class="text-sm font-bold text-rose-600 hover:text-rose-700 transition-all flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-rose-50">
       <span id="entertainSeeAllText">See All</span>
       <span id="entertainSeeAllArrow" class="transition-transform group-hover:translate-y-1">↓</span>
      </button>
     </div>
    </section>

    <section id="section-vacation" class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">🏖️ Vacation</h2>
     </div>
     <div class="space-y-4 md:space-y-5">
      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-blue-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('traveloka.png') }}" alt="TRAVELOKA" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Voucher</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">Rp100<span class="text-xl md:text-2xl">ribu</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Voucher Hotel Traveloka Rp 100,000</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>120000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-traveloka.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 100</span>
        <span class="font-medium">Valid until • 30 Jun 2025</span>
       </div>
      </article>

      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-cyan-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('tiketcom.png') }}" alt="TIKET.COM" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Voucher</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">Rp75<span class="text-xl md:text-2xl">ribu</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Voucher Tiket.com Rp 75,000</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>90000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-tiketcom.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 120</span>
        <span class="font-medium">Valid until • 30 Jun 2025</span>
       </div>
      </article>

      <article id="extraVacationCard" class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all duration-500 ease-in-out hover:shadow-xl hover:scale-[1.01] hover:border-sky-200 max-h-0 opacity-0 scale-y-0 origin-top">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('pegipegi.png') }}" alt="PEGIPEGI" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Voucher</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">Rp50<span class="text-xl md:text-2xl">ribu</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Voucher PegiPegi Hotel Rp 50,000</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>60000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-pegipegi.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 140</span>
        <span class="font-medium">Valid until • 30 Jun 2025</span>
       </div>
      </article>
     </div>
     <div class="mt-4 md:mt-6 flex justify-center">
      <button onclick="toggleVacationCards()" id="vacationSeeAllBtn" class="text-sm font-bold text-rose-600 hover:text-rose-700 transition-all flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-rose-50">
       <span id="vacationSeeAllText">See All</span>
       <span id="vacationSeeAllArrow" class="transition-transform group-hover:translate-y-1">↓</span>
      </button>
     </div>
    </section>

    <section id="section-beauty" class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">💄 Beauty & Care</h2>
     </div>
     <div class="space-y-4 md:space-y-5">
      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-pink-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('sociolla.png') }}" alt="SOCIOLLA" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Voucher</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">Rp100<span class="text-xl md:text-2xl">ribu</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Voucher Sociolla Rp 100,000</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>110000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-sociolla.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 80</span>
        <span class="font-medium">Valid until • 31 Mar 2025</span>
       </div>
      </article>

      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-rose-200">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('guardian.png') }}" alt="GUARDIAN" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Voucher</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">Rp50<span class="text-xl md:text-2xl">ribu</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Voucher Guardian Rp 50,000</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>55000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-guardian.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 160</span>
        <span class="font-medium">Valid until • 31 Mar 2025</span>
       </div>
      </article>

      <article id="extraBeautyCard" class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all duration-500 ease-in-out hover:shadow-xl hover:scale-[1.01] hover:border-purple-200 max-h-0 opacity-0 scale-y-0 origin-top">
       <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <div class="p-3 md:p-4 flex flex-col">
         <div class="mb-1">
          <img src="{{ asset('watsons.png') }}" alt="WATSONS" class="w-[180px] h-[82px] object-contain">
         </div>
         <div class="pl-10 md:pl-14">
          <div class="text-rose-600 font-bold text-base md:text-3xl mb-0.5">Voucher</div>
          <div class="text-rose-600 font-bold text-3xl md:text-4xl leading-none mb-2">Rp75<span class="text-xl md:text-2xl">ribu</span></div>
         </div>
         <div class="mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Voucher Watsons Rp 75,000</div>
         <div class="mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
          <span class="text-sm">🔥</span>
          <span>80000 Poin</span>
         </div>
        </div>
        <div class="p-2">
         <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-watsons.jpg') }}" alt="" class="w-full h-full object-cover">
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Remaining Stock • 110</span>
        <span class="font-medium">Valid until • 31 Mar 2025</span>
       </div>
      </article>
     </div>
     <div class="mt-4 md:mt-6 flex justify-center">
      <button onclick="toggleBeautyCards()" id="beautySeeAllBtn" class="text-sm font-bold text-rose-600 hover:text-rose-700 transition-all flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-rose-50">
       <span id="beautySeeAllText">See All</span>
       <span id="beautySeeAllArrow" class="transition-transform group-hover:translate-y-1">↓</span>
      </button>
     </div>
    </section>

    <footer class="mt-16 pb-12 text-center">
     <div class="inline-block px-6 py-3 rounded-2xl bg-gradient-to-r from-orange-50 to-rose-50 shadow-sm ring-1 ring-neutral-200/50 mb-4">
      <div class="text-sm font-semibold text-neutral-700">✨ Redeem Poin Telkomsel</div>
     </div>
     <div class="text-xs text-neutral-500 font-medium"> 2025 BelanjaPoin. All rights reserved.</div>
    </footer>
   </main>
  </div>

  <script>
   // Carousel configuration
   const slides = [
    '{{ asset("iklan1.jpeg") }}',
    '{{ asset("iklan2.jpeg") }}',
    '{{ asset("iklan3.jpeg") }}'
   ];
   
   let currentSlide = 0;
   let autoSlideInterval;
   
   // Get elements
   const bannerImage = document.getElementById('bannerImage');
   const dots = document.querySelectorAll('.carousel-dot');
   
   // Update slide
   function updateSlide(index) {
    currentSlide = index;
    
    // Fade effect
    bannerImage.style.opacity = '0';
    
    setTimeout(() => {
     bannerImage.src = slides[currentSlide];
     bannerImage.style.opacity = '1';
    }, 250);
    
    // Update dots
    dots.forEach((dot, i) => {
     if (i === currentSlide) {
      dot.classList.remove('bg-neutral-300', 'w-2', 'md:w-2.5');
      dot.classList.add('bg-gradient-to-r', 'from-orange-500', 'to-rose-500', 'w-8', 'md:w-10', 'shadow-md');
     } else {
      dot.classList.remove('bg-gradient-to-r', 'from-orange-500', 'to-rose-500', 'w-8', 'md:w-10', 'shadow-md');
      dot.classList.add('bg-neutral-300', 'w-2', 'md:w-2.5');
     }
    });
   }
   
   // Next slide
   function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    updateSlide(currentSlide);
    resetAutoSlide();
   }
   
   // Previous slide
   function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    updateSlide(currentSlide);
    resetAutoSlide();
   }
   
   // Go to specific slide
   function goToSlide(index) {
    updateSlide(index);
    resetAutoSlide();
   }
   
   // Auto slide
   function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
     nextSlide();
    }, 2000); // Change slide every 5 seconds
   }
   
   // Reset auto slide
   function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
   }
   
   // Initialize
   updateSlide(0);
   startAutoSlide();
   
   // Pause on hover
   const carouselSection = document.querySelector('section');
   carouselSection.addEventListener('mouseenter', () => {
    clearInterval(autoSlideInterval);
   });
   
   carouselSection.addEventListener('mouseleave', () => {
    startAutoSlide();
   });

   // Toggle Shop Cards
   let shopCardsExpanded = false;
   
   function toggleShopCards() {
    const extraCard = document.getElementById('extraShopCard');
    const arrow = document.getElementById('shopSeeAllArrow');
    const text = document.getElementById('shopSeeAllText');
    
    if (!shopCardsExpanded) {
     extraCard.classList.remove('max-h-0', 'opacity-0', 'scale-y-0');
     extraCard.classList.add('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     arrow.textContent = '↑';
     text.textContent = 'Show Less';
     arrow.classList.remove('group-hover:translate-y-1');
     arrow.classList.add('group-hover:-translate-y-1');
     shopCardsExpanded = true;
    } else {
     extraCard.classList.remove('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     extraCard.classList.add('max-h-0', 'opacity-0', 'scale-y-0');
     arrow.textContent = '↓';
     text.textContent = 'See All';
     arrow.classList.remove('group-hover:-translate-y-1');
     arrow.classList.add('group-hover:translate-y-1');
     shopCardsExpanded = false;
    }
   }

   // Toggle Food Cards
   let foodCardsExpanded = false;
   
   function toggleFoodCards() {
    const extraCard = document.getElementById('extraFoodCard');
    const arrow = document.getElementById('foodSeeAllArrow');
    const text = document.getElementById('foodSeeAllText');
    
    if (!foodCardsExpanded) {
     extraCard.classList.remove('max-h-0', 'opacity-0', 'scale-y-0');
     extraCard.classList.add('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     arrow.textContent = '↑';
     text.textContent = 'Show Less';
     arrow.classList.remove('group-hover:translate-y-1');
     arrow.classList.add('group-hover:-translate-y-1');
     foodCardsExpanded = true;
    } else {
     extraCard.classList.remove('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     extraCard.classList.add('max-h-0', 'opacity-0', 'scale-y-0');
     arrow.textContent = '↓';
     text.textContent = 'See All';
     arrow.classList.remove('group-hover:-translate-y-1');
     arrow.classList.add('group-hover:translate-y-1');
     foodCardsExpanded = false;
    }
   }

   // Toggle Telkomsel Cards
   let telkomselCardsExpanded = false;
   
   function toggleTelkomselCards() {
    const extraCard = document.getElementById('extraTelkomselCard');
    const arrow = document.getElementById('telkomselSeeAllArrow');
    const text = document.getElementById('telkomselSeeAllText');
    
    if (!telkomselCardsExpanded) {
     extraCard.classList.remove('max-h-0', 'opacity-0', 'scale-y-0');
     extraCard.classList.add('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     arrow.textContent = '↑';
     text.textContent = 'Show Less';
     arrow.classList.remove('group-hover:translate-y-1');
     arrow.classList.add('group-hover:-translate-y-1');
     telkomselCardsExpanded = true;
    } else {
     extraCard.classList.remove('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     extraCard.classList.add('max-h-0', 'opacity-0', 'scale-y-0');
     arrow.textContent = '↓';
     text.textContent = 'See All';
     arrow.classList.remove('group-hover:-translate-y-1');
     arrow.classList.add('group-hover:translate-y-1');
     telkomselCardsExpanded = false;
    }
   }

   // Toggle Entertain Cards
   let entertainCardsExpanded = false;
   
   function toggleEntertainCards() {
    const extraCard = document.getElementById('extraEntertainCard');
    const arrow = document.getElementById('entertainSeeAllArrow');
    const text = document.getElementById('entertainSeeAllText');
    
    if (!entertainCardsExpanded) {
     extraCard.classList.remove('max-h-0', 'opacity-0', 'scale-y-0');
     extraCard.classList.add('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     arrow.textContent = '↑';
     text.textContent = 'Show Less';
     arrow.classList.remove('group-hover:translate-y-1');
     arrow.classList.add('group-hover:-translate-y-1');
     entertainCardsExpanded = true;
    } else {
     extraCard.classList.remove('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     extraCard.classList.add('max-h-0', 'opacity-0', 'scale-y-0');
     arrow.textContent = '↓';
     text.textContent = 'See All';
     arrow.classList.remove('group-hover:-translate-y-1');
     arrow.classList.add('group-hover:translate-y-1');
     entertainCardsExpanded = false;
    }
   }

   // Toggle Vacation Cards
   let vacationCardsExpanded = false;
   
   function toggleVacationCards() {
    const extraCard = document.getElementById('extraVacationCard');
    const arrow = document.getElementById('vacationSeeAllArrow');
    const text = document.getElementById('vacationSeeAllText');
    
    if (!vacationCardsExpanded) {
     extraCard.classList.remove('max-h-0', 'opacity-0', 'scale-y-0');
     extraCard.classList.add('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     arrow.textContent = '↑';
     text.textContent = 'Show Less';
     arrow.classList.remove('group-hover:translate-y-1');
     arrow.classList.add('group-hover:-translate-y-1');
     vacationCardsExpanded = true;
    } else {
     extraCard.classList.remove('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     extraCard.classList.add('max-h-0', 'opacity-0', 'scale-y-0');
     arrow.textContent = '↓';
     text.textContent = 'See All';
     arrow.classList.remove('group-hover:-translate-y-1');
     arrow.classList.add('group-hover:translate-y-1');
     vacationCardsExpanded = false;
    }
   }

   // Toggle Beauty Cards
   let beautyCardsExpanded = false;
   
   function toggleBeautyCards() {
    const extraCard = document.getElementById('extraBeautyCard');
    const arrow = document.getElementById('beautySeeAllArrow');
    const text = document.getElementById('beautySeeAllText');
    
    if (!beautyCardsExpanded) {
     extraCard.classList.remove('max-h-0', 'opacity-0', 'scale-y-0');
     extraCard.classList.add('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     arrow.textContent = '↑';
     text.textContent = 'Show Less';
     arrow.classList.remove('group-hover:translate-y-1');
     arrow.classList.add('group-hover:-translate-y-1');
     beautyCardsExpanded = true;
    } else {
     extraCard.classList.remove('max-h-[1000px]', 'opacity-100', 'scale-y-100');
     extraCard.classList.add('max-h-0', 'opacity-0', 'scale-y-0');
     arrow.textContent = '↓';
     text.textContent = 'See All';
     arrow.classList.remove('group-hover:-translate-y-1');
     arrow.classList.add('group-hover:translate-y-1');
     beautyCardsExpanded = false;
    }
   }

   // Filter Category - Scroll to section
   function filterCategory(category) {
    const selectedSection = document.getElementById('section-' + category);
    if (selectedSection) {
     selectedSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
   }

   // Toggle User Dropdown
   let userDropdownOpen = false;

   function toggleUserDropdown() {
    const dropdown = document.getElementById('userDropdown');
    const arrow = document.getElementById('userDropdownArrow');
    
    if (!userDropdownOpen) {
     dropdown.classList.remove('opacity-0', 'invisible', 'scale-95');
     dropdown.classList.add('opacity-100', 'visible', 'scale-100');
     arrow.classList.add('rotate-180');
     userDropdownOpen = true;
    } else {
     dropdown.classList.remove('opacity-100', 'visible', 'scale-100');
     dropdown.classList.add('opacity-0', 'invisible', 'scale-95');
     arrow.classList.remove('rotate-180');
     userDropdownOpen = false;
    }
   }

   // Close dropdown when clicking outside
   document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('userDropdown');
    const button = document.getElementById('userDropdownBtn');
    const arrow = document.getElementById('userDropdownArrow');
    
    if (dropdown && button && !button.contains(event.target) && !dropdown.contains(event.target)) {
     if (userDropdownOpen) {
      dropdown.classList.remove('opacity-100', 'visible', 'scale-100');
      dropdown.classList.add('opacity-0', 'invisible', 'scale-95');
      arrow.classList.remove('rotate-180');
      userDropdownOpen = false;
     }
    }
   });

   // Add shadow to navbar on scroll
   window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 0) {
     navbar.classList.add('shadow-lg');
    } else {
     navbar.classList.remove('shadow-lg');
    }
   });
  </script>
 </body>
</html>
