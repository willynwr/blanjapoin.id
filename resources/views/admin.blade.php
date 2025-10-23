<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blanjapoin.id - Merchant</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('logo.png') }}" class="h-12 w-auto">
                </div>
                
                <!-- User Profile -->
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <button class="flex items-center px-3 py-2 rounded-md bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white font-medium text-sm hover:shadow-lg transition-all">
                            <i class="fas fa-user mr-1"></i>
                            Willy
                            <i class="fas fa-chevron-down ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-2 sm:px-4 md:px-6 lg:px-8 py-4 sm:py-8">
        <!-- Navigation Tabs -->
        <div class="mb-6 -mx-4 sm:mx-0 overflow-x-auto">
            <div class="flex space-x-3 px-4 sm:px-0 min-w-max">
                <button onclick="switchTab('all')" id="tab-all" class="shrink-0 px-6 py-2 rounded-full bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white font-medium shadow-lg">All</button>
                <button onclick="switchTab('merchant')" id="tab-merchant" class="shrink-0 px-6 py-2 rounded-full border border-orange-400 text-gray-700 hover:bg-orange-50 transition-colors">Merchant</button>
                <button onclick="switchTab('merchandise')" id="tab-merchandise" class="shrink-0 px-6 py-2 rounded-full border border-orange-400 text-gray-700 hover:bg-orange-50 transition-colors">Merchandise</button>
                <button onclick="switchTab('telkom')" id="tab-telkom" class="shrink-0 px-6 py-2 rounded-full border border-orange-400 text-gray-700 hover:bg-orange-50 transition-colors">Telkom Packages</button>
            </div>
        </div>


        <script>
            function toggleDateFilter(id) {
                const dropdown = document.getElementById(id || 'dateFilterDropdown');
                if (!dropdown) return;
                if (dropdown.classList.contains('hidden')) {
                    dropdown.classList.remove('hidden');
                    dropdown.style.opacity = '0';
                    dropdown.style.transform = 'translateY(-6px)';
                    requestAnimationFrame(() => {
                        dropdown.style.transition = 'opacity .25s ease, transform .25s ease';
                        dropdown.style.opacity = '1';
                        dropdown.style.transform = 'translateY(0)';
                    });
                } else {
                    dropdown.style.transition = 'opacity .2s ease, transform .2s ease';
                    dropdown.style.opacity = '0';
                    dropdown.style.transform = 'translateY(-6px)';
                    setTimeout(() => {
                        dropdown.classList.add('hidden');
                        dropdown.style.transition = '';
                        dropdown.style.opacity = '';
                        dropdown.style.transform = '';
                    }, 200);
                }
            }

            function switchTab(tab) {
                // Reset all tabs
                const tabs = ['all', 'merchant', 'merchandise', 'telkom'];
                tabs.forEach(t => {
                    const btn = document.getElementById('tab-' + t);
                    btn.className = 'px-6 py-2 rounded-full border border-orange-400 text-gray-700 hover:bg-orange-50 transition-colors';
                });
                
                // Activate selected tab
                const activeBtn = document.getElementById('tab-' + tab);
                activeBtn.className = 'px-6 py-2 rounded-full bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white font-medium shadow-lg';
                
                // Hide non-active sections with Tailwind utilities
                const sections = ['all', 'merchant', 'merchandise', 'telkom'];
                sections.forEach(s => {
                    const section = document.getElementById('section-' + s);
                    if (section) {
                        if (s !== tab) {
                            section.classList.remove('opacity-100','translate-y-0');
                            section.classList.add('opacity-0','translate-y-5','pointer-events-none');
                            section.classList.add('hidden');
                        }
                    }
                });
                
                // Show and activate selected section
                const activeSection = document.getElementById('section-' + tab);
                if (activeSection) {
                    activeSection.classList.remove('hidden','pointer-events-none');
                    // ensure starting at hidden state
                    activeSection.classList.add('opacity-0','translate-y-5');
                    requestAnimationFrame(() => {
                        activeSection.classList.remove('opacity-0','translate-y-5');
                        activeSection.classList.add('opacity-100','translate-y-0');
                    });
                }
            }
        </script>

        <!-- All Tables Section -->
        <div id="section-all" class="transition-all duration-300 opacity-100 translate-y-0">
            <!-- Merchant Table -->
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4 mt-4 sm:mt-8">Merchant</h2>
            
            <!-- Merchant Controls -->
            <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                <div class="flex space-x-3">
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-list mr-2"></i>
                        Kategori
                    </button>
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-upload mr-2"></i>
                        Upload
                    </button>
                </div>
                
                <div class="flex flex-col sm:flex-row sm:items-center gap-3 w-full sm:w-auto">
                    <div class="relative w-full sm:w-auto">
                        <input type="text" placeholder="Search..." class="w-full sm:w-48 pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter1'])
                </div>
            </div>
            
            @include('partials.table-merchant')

            <!-- Merchandise Table -->
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4 mt-8 sm:mt-12">Merchandise</h2>
            
            <!-- Merchandise Controls -->
            <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                <div class="flex space-x-3">
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-list mr-2"></i>
                        Kategori
                    </button>
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-upload mr-2"></i>
                        Upload
                    </button>
                </div>
                
                <div class="flex flex-col sm:flex-row sm:items-center gap-3 w-full sm:w-auto">
                    <div class="relative w-full sm:w-auto">
                        <input type="text" placeholder="Search..." class="w-full sm:w-48 pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter2'])
                </div>
            </div>
            
            @include('partials.table-merchandise')

            <!-- Telkom Packages Table -->
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4 mt-8 sm:mt-12">Telkom Packages</h2>
            
            <!-- Telkom Controls -->
            <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                <div class="flex space-x-3">
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-list mr-2"></i>
                        Kategori
                    </button>
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-upload mr-2"></i>
                        Upload
                    </button>
                </div>
                
                <div class="flex flex-col sm:flex-row sm:items-center gap-3 w-full sm:w-auto">
                    <div class="relative w-full sm:w-auto">
                        <input type="text" placeholder="Search..." class="w-full sm:w-48 pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter3'])
                </div>
            </div>
            
            @include('partials.table-talkompackages')
        </div>

        <!-- Merchant Only Section -->
        <div id="section-merchant" class="transition-all duration-300 opacity-0 translate-y-5 hidden pointer-events-none">
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4">Merchant</h2>
            
            <!-- Merchant Controls -->
            <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                <div class="flex space-x-3">
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-list mr-2"></i>
                        Kategori
                    </button>
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-upload mr-2"></i>
                        Upload
                    </button>
                </div>
                
                <div class="flex flex-col sm:flex-row sm:items-center gap-3 w-full sm:w-auto">
                    <div class="relative w-full sm:w-auto">
                        <input type="text" placeholder="Search..." class="w-full sm:w-48 pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter4'])
                </div>
            </div>
            
            @include('partials.table-merchant')

        </div>

        <!-- Merchandise Only Section -->
        <div id="section-merchandise" class="transition-all duration-300 opacity-0 translate-y-5 hidden pointer-events-none">
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4">Merchandise</h2>
            
            <!-- Merchandise Controls -->
            <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                <div class="flex space-x-3">
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-list mr-2"></i>
                        Kategori
                    </button>
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-upload mr-2"></i>
                        Upload
                    </button>
                </div>
                
                <div class="flex flex-col sm:flex-row sm:items-center gap-3 w-full sm:w-auto">
                    <div class="relative w-full sm:w-auto">
                        <input type="text" placeholder="Search..." class="w-full sm:w-48 pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter5'])
                </div>
            </div>
            
            @include('partials.table-merchandise')
        </div>

        <!-- Telkom Packages Only Section -->
        <div id="section-telkom" class="transition-all duration-300 opacity-0 translate-y-5 hidden pointer-events-none">
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4">Telkom Packages</h2>
            
            <!-- Telkom Controls -->
            <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                <div class="flex space-x-3">
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-list mr-2"></i>
                        Kategori
                    </button>
                    <button class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fas fa-upload mr-2"></i>
                        Upload
                    </button>
                </div>
                
                <div class="flex flex-col sm:flex-row sm:items-center gap-3 w-full sm:w-auto">
                    <div class="relative w-full sm:w-auto">
                        <input type="text" placeholder="Search..." class="w-full sm:w-48 pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter6'])
                </div>
            </div>
            
            @include('partials.table-talkompackages')
        </div>
    </main>
</body>
</html>