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
 <body class="bg-white text-neutral-900 antialiased font-sans min-h-screen">
  <div class="mx-auto max-w-[1120px]">
   <header class="sticky top-0 z-20 bg-white shadow-sm">
    <div class="px-4 md:px-6 lg:px-8 py-3 md:py-4">
     <div class="flex items-center justify-between">
      <div class="flex items-center gap-3">
       <img src="/logo.png" alt="BlanjaPoin" class="h-8 md:h-10 lg:h-12 w-auto" />
      </div>
      <div class="flex items-center gap-2 md:gap-3">
       <div class="flex items-center gap-1.5 md:gap-2 rounded-full bg-gradient-to-r from-amber-50 to-orange-50 px-3 md:px-4 py-1.5 md:py-2 shadow-lg drop-shadow-md ring-1 ring-amber-200/50 transition-all hover:shadow-xl hover:drop-shadow-lg hover:scale-105">
        <span class="inline-flex h-5 w-5 md:h-6 md:w-6 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[10px] md:text-xs font-bold shadow-sm">P</span>
        <span class="text-xs md:text-sm font-bold text-neutral-800">1,289</span>
       </div>
       <button class="inline-flex items-center gap-1.5 md:gap-2 rounded-xl md:rounded-2xl bg-gradient-to-r from-[#FF3B30] via-[#FF6B2C] to-[#FF9F0A] px-4 md:px-6 py-2 md:py-2.5 text-xs md:text-sm font-semibold text-white shadow-lg shadow-orange-300/50 drop-shadow-lg ring-1 ring-white/30 transition-all hover:shadow-xl hover:shadow-orange-400/50 hover:drop-shadow-xl hover:scale-105 active:scale-95">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-3.5 w-3.5 md:h-4 md:w-4 opacity-95">
         <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.418 0-8 2.239-8 5v1h16v-1c0-2.761-3.582-5-8-5Z"/>
        </svg>
        <span class="tracking-tight">Willy</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-3 w-3 md:h-3.5 md:w-3.5 opacity-95">
         <path d="M7 10l5 5 5-5z"/>
        </svg>
       </button>
      </div>
     </div>
    </div>
   </header>

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
      <a href="#" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-rose-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-rose-100 to-rose-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">🍔</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-rose-600 transition-colors leading-tight">Food & Beverage</span>
      </a>
      <a href="#" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-indigo-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-indigo-100 to-indigo-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">🎬</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-indigo-600 transition-colors leading-tight">Entertain</span>
      </a>
      <a href="#" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-purple-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-purple-100 to-purple-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">🏖️</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-purple-600 transition-colors leading-tight">Vocation</span>
      </a>
      <a href="#" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-pink-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-pink-100 to-pink-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">💄</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-pink-600 transition-colors leading-tight">Beauty & Care</span>
      </a>
      <a href="#" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-orange-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-orange-100 to-orange-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">🛍️</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-orange-600 transition-colors leading-tight">Shop</span>
      </a>
      <a href="#" class="group flex flex-col items-center gap-2 md:gap-3 rounded-xl md:rounded-2xl bg-white p-3 md:p-5 text-center shadow-md md:shadow-lg drop-shadow-sm md:drop-shadow-md ring-1 ring-neutral-100/50 transition-all hover:shadow-2xl hover:drop-shadow-xl hover:scale-110 hover:ring-red-300 hover:-translate-y-1 active:scale-95">
       <span class="grid h-12 w-12 md:h-16 md:w-16 place-items-center rounded-full bg-gradient-to-br from-red-100 to-red-200 text-2xl md:text-3xl transition-transform group-hover:scale-125 group-hover:rotate-12 shadow-sm md:shadow-md drop-shadow-sm">📶</span>
       <span class="text-[10px] md:text-xs font-bold text-neutral-700 group-hover:text-red-600 transition-colors leading-tight">Telkomsel Data</span>
      </a>
     </div>
    </section>

    <section class="mt-8 md:mt-12">
     <div class="flex flex-col md:flex-row items-stretch md:items-center gap-3 md:gap-4">
      <div class="flex-1 rounded-xl md:rounded-2xl bg-white px-4 md:px-6 py-3 md:py-4 shadow-md md:shadow-lg ring-1 ring-neutral-200/50 transition-all focus-within:ring-2 focus-within:ring-orange-400 focus-within:shadow-xl">
       <div class="flex items-center gap-2 md:gap-3 text-neutral-500">
        <span class="text-lg md:text-xl">🔍</span>
        <input class="w-full bg-transparent text-xs md:text-sm outline-none placeholder:text-neutral-400 font-semibold" placeholder="Cari produk atau voucher..." />
       </div>
      </div>
      <select class="rounded-xl md:rounded-2xl border border-neutral-200 bg-white px-3 md:px-5 py-3 md:py-4 text-xs md:text-sm font-semibold shadow-md md:shadow-lg transition-all hover:shadow-xl hover:border-orange-400 focus:ring-2 focus:ring-orange-400 outline-none cursor-pointer">
       <option>Semua</option>
       <option>Indonesia</option>
      </select>
      <select class="rounded-xl md:rounded-2xl border border-neutral-200 bg-white px-3 md:px-5 py-3 md:py-4 text-xs md:text-sm font-semibold shadow-md md:shadow-lg transition-all hover:shadow-xl hover:border-orange-400 focus:ring-2 focus:ring-orange-400 outline-none cursor-pointer">
       <option>According To Your Point</option>
       <option>Lowest</option>
       <option>Highest</option>
      </select>
     </div>
    </section>

    <section class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">🛍️ Shop</h2>
      <a href="#" class="text-sm font-bold text-rose-600 hover:text-rose-700 transition-all flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-rose-50">
       <span>See All</span>
       <span class="transition-transform group-hover:translate-x-2">→</span>
      </a>
     </div>
     <div class="space-y-4 md:space-y-5">
      <article class="group overflow-hidden rounded-2xl md:rounded-3xl border border-neutral-200 bg-white shadow-lg transition-all hover:shadow-2xl hover:scale-[1.02] hover:border-rose-200">
       <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
        <div class="md:col-span-3 p-4 md:p-6 flex flex-col">
         <div class="mb-auto">
          <div class="text-rose-600 font-bold text-xl md:text-2xl mb-1">ZALORA</div>
         </div>
         <div class="mt-3 md:mt-4">
          <div class="text-rose-600 font-bold text-base md:text-lg mb-1">Diskon</div>
          <div class="text-rose-600 font-black text-4xl md:text-5xl leading-none mb-1">Rp100<span class="text-3xl">ribu</span></div>
         </div>
         <div class="mt-3 md:mt-4 text-xs md:text-sm text-neutral-800 font-medium">Diskon Rp 100,000 Zalora melalui PaysQift</div>
         <div class="mt-2 md:mt-3 inline-flex items-center gap-2 text-xs md:text-sm font-semibold text-orange-600">
          <span class="text-base">🔥</span>
          <span>100000 Poin</span>
         </div>
        </div>
        <div class="md:col-span-2 p-3">
         <div class="h-40 md:h-full rounded-2xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <!-- Product image here -->
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-4 md:px-6 py-3 bg-neutral-50 text-[10px] md:text-xs text-neutral-600 gap-2 md:gap-0">
        <span class="font-medium">Remaining Stock • 250</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>

      <article class="group overflow-hidden rounded-2xl md:rounded-3xl border border-neutral-200 bg-white shadow-lg transition-all hover:shadow-2xl hover:scale-[1.02] hover:border-blue-200">
       <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
        <div class="md:col-span-3 p-4 md:p-6 flex flex-col">
         <div class="mb-auto">
          <div class="text-rose-600 font-bold text-xl md:text-2xl mb-1">TRANSmart</div>
         </div>
         <div class="mt-3 md:mt-4">
          <div class="text-rose-600 font-bold text-base md:text-lg mb-1">Diskon</div>
          <div class="text-rose-600 font-black text-4xl md:text-5xl leading-none mb-1">Rp100<span class="text-3xl">ribu</span></div>
         </div>
         <div class="mt-3 md:mt-4 text-xs md:text-sm text-neutral-800 font-medium">Diskon Rp 100,000 Transmart melalui PaysQift</div>
         <div class="mt-2 md:mt-3 inline-flex items-center gap-2 text-xs md:text-sm font-semibold text-orange-600">
          <span class="text-base">🔥</span>
          <span>100000 Poin</span>
         </div>
        </div>
        <div class="md:col-span-2 p-3">
         <div class="h-40 md:h-full rounded-2xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <!-- Product image here -->
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-4 md:px-6 py-3 bg-neutral-50 text-[10px] md:text-xs text-neutral-600 gap-2 md:gap-0">
        <span class="font-medium">Remaining Stock • 150</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>
     </div>
    </section>

    <section class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">🍔 Food</h2>
      <a href="#" class="text-sm font-bold text-rose-600 hover:text-rose-700 transition-all flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-rose-50">
       <span>See All</span>
       <span class="transition-transform group-hover:translate-x-2">→</span>
      </a>
     </div>
     <div class="space-y-4 md:space-y-5">
      <article class="group overflow-hidden rounded-2xl md:rounded-3xl border border-neutral-200 bg-white shadow-lg transition-all hover:shadow-2xl hover:scale-[1.02] hover:border-emerald-200">
       <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
        <div class="md:col-span-3 p-4 md:p-6 flex flex-col">
         <div class="mb-auto">
          <div class="text-rose-600 font-bold text-xl md:text-2xl mb-1">WINGSTOP</div>
         </div>
         <div class="mt-3 md:mt-4">
          <div class="text-rose-600 font-bold text-base md:text-lg mb-1">Diskon</div>
          <div class="text-rose-600 font-black text-4xl md:text-5xl leading-none mb-1">10<span class="text-3xl">%</span></div>
         </div>
         <div class="mt-3 md:mt-4 text-xs md:text-sm text-neutral-800 font-medium">Diskon 10% Wingstop melalui PaysQift</div>
         <div class="mt-2 md:mt-3 inline-flex items-center gap-2 text-xs md:text-sm font-semibold text-orange-600">
          <span class="text-base">🔥</span>
          <span>100000 Poin</span>
         </div>
        </div>
        <div class="md:col-span-2 p-3">
         <div class="h-40 md:h-full rounded-2xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <!-- Product image here -->
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-4 md:px-6 py-3 bg-neutral-50 text-[10px] md:text-xs text-neutral-600 gap-2 md:gap-0">
        <span class="font-medium">Remaining Stock • 90</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>

      <article class="group overflow-hidden rounded-2xl md:rounded-3xl border border-neutral-200 bg-white shadow-lg transition-all hover:shadow-2xl hover:scale-[1.02] hover:border-red-200">
       <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
        <div class="md:col-span-3 p-4 md:p-6 flex flex-col">
         <div class="mb-auto">
          <div class="text-rose-600 font-bold text-xl md:text-2xl mb-1">PIZZA HUT</div>
         </div>
         <div class="mt-3 md:mt-4">
          <div class="text-rose-600 font-bold text-base md:text-lg mb-1">Diskon</div>
          <div class="text-rose-600 font-black text-4xl md:text-5xl leading-none mb-1">Rp100<span class="text-3xl">ribu</span></div>
         </div>
         <div class="mt-3 md:mt-4 text-xs md:text-sm text-neutral-800 font-medium">Diskon Rp 100,000 Pizza Hut melalui PaysQift</div>
         <div class="mt-2 md:mt-3 inline-flex items-center gap-2 text-xs md:text-sm font-semibold text-orange-600">
          <span class="text-base">🔥</span>
          <span>100000 Poin</span>
         </div>
        </div>
        <div class="md:col-span-2 p-3">
         <div class="h-40 md:h-full rounded-2xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <!-- Product image here -->
         </div>
        </div>
       </div>
       <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-4 md:px-6 py-3 bg-neutral-50 text-[10px] md:text-xs text-neutral-600 gap-2 md:gap-0">
        <span class="font-medium">Remaining Stock • 120</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>
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
  </script>
 </body>
</html>
