    <section id="section-shop" class="mt-10 md:mt-14">
     <div class="mb-4 md:mb-6 flex items-center justify-between">
      <h2 class="text-2xl md:text-3xl font-black text-neutral-900">🛍️ Shop</h2>
     </div>
     <div id="shopCardContainer" class="card-container grid grid-cols-2 gap-3 md:grid-cols-1 md:gap-5">
      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-rose-200">
       <!-- Mobile Layout (default) -->
       <div class="md:hidden flex flex-col h-full">
        <div class="relative">
         <!-- Badge Points at top-right -->
         <div class="absolute top-2 right-2 z-10">
          <div class="inline-flex items-center gap-1 bg-white/90 backdrop-blur-sm rounded-full px-2.5 py-1 shadow-md">
           <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[8px] font-bold shadow-sm">P</span>
           <span class="text-[10px] font-bold text-rose-600">100.000</span>
          </div>
         </div>
         
         <!-- Promo Image -->
         <div class="aspect-[4/3] rounded-t-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-wingstop.jpg') }}" alt="Wingstop Jemursari" class="w-full h-full object-cover">
         </div>
        </div>
        
        <!-- Card Content Below Image -->
        <div class="flex flex-col p-3 space-y-2">
         <!-- Title -->
         <h3 class="text-sm font-bold text-neutral-900 leading-tight">Wingstop Jemursari</h3>
         
         <!-- Description -->
         <p class="text-xs text-neutral-600 leading-relaxed">Diskon Rp 100,000 Wingstop melalui PaysQift</p>
         
         <!-- Stock & Valid Until -->
         <div class="flex flex-col gap-0.5 pt-1 border-t border-neutral-100">
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Stock:</span>
           <span class="font-semibold text-neutral-800">250</span>
          </div>
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Valid until:</span>
           <span class="font-semibold text-neutral-800">20 Jan 2025</span>
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
        <span class="font-medium">Stock • 250</span>
        <span class="font-medium">Valid until • 20 Jan 2025</span>
       </div>
      </article>

      <article class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all hover:shadow-xl hover:scale-[1.01] hover:border-blue-200">
       <!-- Mobile Layout (default) -->
       <div class="md:hidden flex flex-col h-full">
        <div class="relative">
         <!-- Badge Points at top-right -->
         <div class="absolute top-2 right-2 z-10">
          <div class="inline-flex items-center gap-1 bg-white/90 backdrop-blur-sm rounded-full px-2.5 py-1 shadow-md">
           <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[8px] font-bold shadow-sm">P</span>
           <span class="text-[10px] font-bold text-rose-600">100.000</span>
          </div>
         </div>
         
         <!-- Promo Image -->
         <div class="aspect-[4/3] rounded-t-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden"> 
          <img src="{{ asset('promo-transmart.jpeg') }}" alt="Transmart" class="w-full h-full object-cover">
         </div>
        </div>
        
        <!-- Card Content Below Image -->
        <div class="flex flex-col p-3 space-y-2">
         <!-- Title -->
         <h3 class="text-sm font-bold text-neutral-900 leading-tight">Transmart</h3>
         
         <!-- Description -->
         <p class="text-xs text-neutral-600 leading-relaxed">Diskon Rp 100,000 Transmart melalui PaysQift</p>
         
         <!-- Stock & Valid Until -->
         <div class="flex flex-col gap-0.5 pt-1 border-t border-neutral-100">
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Stock:</span>
           <span class="font-semibold text-neutral-800">150</span>
          </div>
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Valid until:</span>
           <span class="font-semibold text-neutral-800">20 Jan 2025</span>
          </div>
         </div>
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
       
      </article>

      <article id="extraShopCard" class="group overflow-hidden rounded-xl md:rounded-2xl border border-neutral-200 bg-white shadow-md transition-all duration-500 ease-in-out hover:shadow-xl hover:scale-[1.01] hover:border-green-200 max-h-0 opacity-0 scale-y-0 origin-top">
       <!-- Mobile Layout (default) -->
       <div class="md:hidden flex flex-col h-full">
        <div class="relative">
         <!-- Badge Points at top-right -->
         <div class="absolute top-2 right-2 z-10">
          <div class="inline-flex items-center gap-1 bg-white/90 backdrop-blur-sm rounded-full px-2.5 py-1 shadow-md">
           <span class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-gradient-to-br from-amber-400 to-orange-500 text-white text-[8px] font-bold shadow-sm">P</span>
           <span class="text-[10px] font-bold text-rose-600">50.000</span>
          </div>
         </div>
         
         <!-- Promo Image -->
         <div class="aspect-[4/3] rounded-t-xl bg-gradient-to-br from-neutral-100 to-neutral-200 shadow-inner overflow-hidden">
          <img src="{{ asset('promo-indomaret.jpg') }}" alt="Indomaret" class="w-full h-full object-cover">
         </div>
        </div>
        
        <!-- Card Content Below Image -->
        <div class="flex flex-col p-3 space-y-2">
         <!-- Title -->
         <h3 class="text-sm font-bold text-neutral-900 leading-tight">Voucher Indomaret</h3>
         
         <!-- Description -->
         <p class="text-xs text-neutral-600 leading-relaxed">Voucher Belanja Rp 50,000 Indomaret</p>
         
         <!-- Stock & Valid Until -->
         <div class="flex flex-col gap-0.5 pt-1 border-t border-neutral-100">
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Stock:</span>
           <span class="font-semibold text-neutral-800">300</span>
          </div>
          <div class="flex items-center gap-1.5 text-[10px] text-neutral-600">
           <span class="font-medium">Valid until:</span>
           <span class="font-semibold text-neutral-800">20 Jan 2025</span>
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