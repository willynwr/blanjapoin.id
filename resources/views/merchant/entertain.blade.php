    <section id="section-entertain" class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">🎬 Entertain</h2>
     </div>
     <div class="grid grid-cols-2 gap-3 lg:grid-cols-1 lg:gap-5 items-stretch">
      <article onclick="window.open('https://instagram.com', '_blank')" class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-indigo-200 cursor-pointer opacity-0 translate-y-2 transition-all duration-200 ease-out h-full min-h-[280px]" style="animation-delay: 0.05s">
       <!-- Mobile Layout (default) -->
       <div class="lg:hidden flex flex-col h-full">
        <div class="relative">
         <!-- Badge Points at top-right -->
         <div class="absolute top-2 right-2 z-10">
          <div class="inline-flex items-center gap-1 bg-white/90 backdrop-blur-sm rounded-full px-2.5 py-1 shadow-md">
           <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[8px] font-bold shadow-sm">P</span>
           <span class="text-[10px] font-bold text-rose-600">60.000</span>
          </div>
         </div>
         
         <!-- Promo Image -->
         <div class="aspect-[4/3] rounded-t-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('storage/promo/promo-cgv.jpg') }}" alt="CGV Cinema" class="w-full h-full object-cover" loading="lazy">
         </div>
        </div>
        
        <!-- Card Content Below Image -->
        <div class="flex flex-col p-3 space-y-2 flex-1">
         <!-- Title -->
         <h3 class="text-sm font-bold text-neutral-900 leading-tight">Voucher CGV Rp50 ribu</h3>
         
         <!-- Description -->
         <p class="text-xs text-neutral-600 leading-relaxed">Voucher Nonton CGV Cinema Rp 50,000</p>
         
         <!-- Stock & Valid Until -->
         <div class="flex flex-col gap-0.5 pt-1 border-t border-neutral-100 mt-auto">
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Stock:</span>
           <span class="font-semibold text-neutral-800">180</span>
          </div>
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Valid until:</span>
           <span class="font-semibold text-neutral-800">31 Mar 2025</span>
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Layout (md and up) -->
       <div class="hidden lg:block">
        <div class="grid grid-cols-2 gap-0">
         <div class="card-content p-4 flex flex-col">
          <div class="mb-1">
           <img src="{{ asset('storage/logo/cgv.png') }}" alt="CGV" class="card-logo w-[180px] h-[82px] object-contain" loading="lazy">
          </div>
          <div class="pl-10 md:pl-14">
           <div class="card-title text-rose-600 font-bold text-base md:text-3xl mb-0.5">Voucher</div>
           <div class="card-price text-rose-600 font-bold text-xl md:text-2xl leading-none mb-2">Rp50<span class="text-xl md:text-2xl">ribu</span></div>
          </div>
          <div class="card-description mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Voucher Nonton CGV Cinema Rp 50,000</div>
          <div class="card-points mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
           <span class="inline-flex h-5 w-5 md:h-6 md:w-6 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[10px] md:text-xs font-bold shadow-sm">P</span>
           <span>60000 Poin</span>
          </div>
         </div>  
         <div class="card-image-wrapper p-2">
          <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
           <img src="{{ asset('storage/promo/promo-cgv.jpg') }}" alt="" class="w-full h-full object-cover" loading="lazy">
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Footer -->
       <div class="hidden lg:flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Stock • 180</span>
        <span class="font-medium">Valid until • 31 Mar 2025</span>
       </div>
      </article>

      <article onclick="window.open('https://instagram.com', '_blank')" class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-purple-200 cursor-pointer opacity-0 translate-y-2 transition-all duration-200 ease-out h-full min-h-[280px]" style="animation-delay: 0.08s">
       <!-- Mobile Layout (default) -->
       <div class="lg:hidden flex flex-col h-full">
        <div class="relative">
         <!-- Badge Points at top-right -->
         <div class="absolute top-2 right-2 z-10">
          <div class="inline-flex items-center gap-1 bg-white/90 backdrop-blur-sm rounded-full px-2.5 py-1 shadow-md">
           <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[8px] font-bold shadow-sm">P</span>
           <span class="text-[10px] font-bold text-rose-600">80.000</span>
          </div>
         </div>
         
         <!-- Promo Image -->
         <div class="aspect-[4/3] rounded-t-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('storage/promo/promo-spotify.jpg') }}" alt="Spotify Premium" class="w-full h-full object-cover" loading="lazy">
         </div>
        </div>
        
        <!-- Card Content Below Image -->
        <div class="flex flex-col p-3 space-y-2 flex-1">
         <!-- Title -->
         <h3 class="text-sm font-bold text-neutral-900 leading-tight">Spotify Premium 1 Bulan</h3>
         
         <!-- Description -->
         <p class="text-xs text-neutral-600 leading-relaxed">Spotify Premium 1 Bulan Individual</p>
         
         <!-- Stock & Valid Until -->
         <div class="flex flex-col gap-0.5 pt-1 border-t border-neutral-100 mt-auto">
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Stock:</span>
           <span class="font-semibold text-neutral-800">250</span>
          </div>
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Valid until:</span>
           <span class="font-semibold text-neutral-800">31 Dec 2025</span>
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Layout (md and up) -->
       <div class="hidden lg:block">
        <div class="grid grid-cols-2 gap-0">
         <div class="card-content p-4 flex flex-col">
          <div class="mb-1">
           <img src="{{ asset('storage/logo/spotify.png') }}" alt="SPOTIFY" class="card-logo w-[180px] h-[82px] object-contain" loading="lazy">
          </div>
          <div class="pl-10 md:pl-14">
           <div class="card-title text-rose-600 font-bold text-base md:text-3xl mb-0.5">Premium</div>
           <div class="card-price text-rose-600 font-bold text-xl md:text-2xl leading-none mb-2">1<span class="text-xl md:text-2xl">Bulan</span></div>
          </div>
          <div class="card-description mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Spotify Premium 1 Bulan Individual</div>
          <div class="card-points mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
           <span class="inline-flex h-5 w-5 md:h-6 md:w-6 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[10px] md:text-xs font-bold shadow-sm">P</span>
           <span>80000 Poin</span>
          </div>
         </div>  
         <div class="card-image-wrapper p-2">
          <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
           <img src="{{ asset('storage/promo/promo-spotify.jpg') }}" alt="" class="w-full h-full object-cover" loading="lazy">
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Footer -->
       <div class="hidden lg:flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Stock • 250</span>
        <span class="font-medium">Valid until • 31 Dec 2025</span>
       </div>
      </article>

      <article id="extraEntertainCard" onclick="window.open('https://instagram.com', '_blank')" class="mt-2 group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all duration-500 ease-in-out hover:shadow-xl hover:scale-[1.01] hover:border-pink-200 max-h-0 opacity-0 scale-y-0 origin-top cursor-pointer h-full">
       <!-- Mobile Layout (default) -->
       <div class="lg:hidden flex flex-col h-full">
        <div class="relative">
         <!-- Badge Points at top-right -->
         <div class="absolute top-2 right-2 z-10">
          <div class="inline-flex items-center gap-1 bg-white/90 backdrop-blur-sm rounded-full px-2.5 py-1 shadow-md">
           <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[8px] font-bold shadow-sm">P</span>
           <span class="text-[10px] font-bold text-rose-600">70.000</span>
          </div>
         </div>
         
         <!-- Promo Image -->
         <div class="aspect-[4/3] rounded-t-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('storage/promo/promo-netflix.jpg') }}" alt="Netflix Premium" class="w-full h-full object-cover" loading="lazy">
         </div>
        </div>
        
        <!-- Card Content Below Image -->
        <div class="flex flex-col p-3 space-y-2 flex-1">
         <!-- Title -->
         <h3 class="text-sm font-bold text-neutral-900 leading-tight">Netflix Premium 1 Bulan</h3>
         
         <!-- Description -->
         <p class="text-xs text-neutral-600 leading-relaxed">Netflix Premium 1 Bulan Subscription</p>
         
         <!-- Stock & Valid Until -->
         <div class="flex flex-col gap-0.5 pt-1 border-t border-neutral-100 mt-auto">
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Stock:</span>
           <span class="font-semibold text-neutral-800">150</span>
          </div>
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Valid until:</span>
           <span class="font-semibold text-neutral-800">31 Dec 2025</span>
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Layout (md and up) -->
       <div class="hidden lg:block">
        <div class="grid grid-cols-2 gap-0">
         <div class="card-content p-4 flex flex-col">
          <div class="mb-1">
           <img src="{{ asset('storage/logo/netflix.png') }}" alt="NETFLIX" class="card-logo w-[180px] h-[82px] object-contain" loading="lazy">
          </div>
          <div class="pl-10 md:pl-14">
           <div class="card-title text-rose-600 font-bold text-base md:text-3xl mb-0.5">Premium</div>
           <div class="card-price text-rose-600 font-bold text-xl md:text-2xl leading-none mb-2">1<span class="text-xl md:text-2xl">Bulan</span></div>
          </div>
          <div class="card-description mt-1 md:mt-2 text-[11px] md:text-xs text-neutral-800 font-medium">Netflix Premium 1 Bulan Mobile</div>
          <div class="card-points mt-1 md:mt-2 inline-flex items-center gap-1.5 text-[11px] md:text-xs font-semibold text-orange-600">
           <span class="inline-flex h-5 w-5 md:h-6 md:w-6 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[10px] md:text-xs font-bold shadow-sm">P</span>
           <span>70000 Poin</span>
          </div>
         </div>  
         <div class="card-image-wrapper p-2">
          <div class="aspect-[6/3] md:h-full rounded-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
           <img src="{{ asset('storage/promo/promo-netflix.jpg') }}" alt="" class="w-full h-full object-cover" loading="lazy">
          </div>
         </div>
        </div>
       </div>
       
       <!-- Desktop Footer -->
       <div class="hidden lg:flex flex-col md:flex-row items-start md:items-center justify-between px-3 md:px-4 py-2 bg-neutral-50 text-[10px] md:text-[11px] text-neutral-600 gap-1.5 md:gap-0">
        <span class="font-medium">Stock • 150</span>
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