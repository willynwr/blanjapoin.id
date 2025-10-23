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
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Smooth transitions for sections */
        .section-content {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.4s ease-out, transform 0.4s ease-out;
        }
        
        .section-content.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Calendar styles */
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 4px;
        }
        
        .calendar-day {
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .calendar-day:hover {
            background-color: #f3f4f6;
        }
        
        .calendar-day.selected {
            background: linear-gradient(to right, #F81611, #F0B100);
            color: white;
        }
    </style>
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
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Navigation Tabs -->
        <div class="flex space-x-4 mb-8">
            <button onclick="switchTab('all')" id="tab-all" class="px-6 py-2 rounded-full bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white font-medium shadow-lg">All</button>
            <button onclick="switchTab('merchant')" id="tab-merchant" class="px-6 py-2 rounded-full border border-orange-400 text-gray-700 hover:bg-orange-50 transition-colors">Merchant</button>
            <button onclick="switchTab('merchandise')" id="tab-merchandise" class="px-6 py-2 rounded-full border border-orange-400 text-gray-700 hover:bg-orange-50 transition-colors">Merchandise</button>
            <button onclick="switchTab('telkom')" id="tab-telkom" class="px-6 py-2 rounded-full border border-orange-400 text-gray-700 hover:bg-orange-50 transition-colors">Telkom Packages</button>
        </div>


        <script>
            function toggleDateFilter(id) {
                const dropdown = document.getElementById(id || 'dateFilterDropdown');
                dropdown.classList.toggle('hidden');
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
                
                // Remove active class from all sections
                const sections = ['all', 'merchant', 'merchandise', 'telkom'];
                sections.forEach(s => {
                    const section = document.getElementById('section-' + s);
                    if (section) {
                        section.classList.remove('active');
                        // Hide after transition
                        setTimeout(() => {
                            if (!section.classList.contains('active')) {
                                section.style.display = 'none';
                            }
                        }, 400);
                    }
                });
                
                // Show and activate selected section
                setTimeout(() => {
                    const activeSection = document.getElementById('section-' + tab);
                    if (activeSection) {
                        activeSection.style.display = 'block';
                        // Trigger reflow to ensure transition works
                        activeSection.offsetHeight;
                        activeSection.classList.add('active');
                    }
                }, 50);
            }
        </script>

        <!-- All Tables Section -->
        <div id="section-all" class="section-content active">
            <!-- Merchant Table -->
            <h2 class="text-xl font-bold text-gray-800 mb-4 mt-8">Merchant</h2>
            
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
                
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400 w-48">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter1'])
                </div>
            </div>
            
            @include('partials.table-merchant')

            <!-- Merchandise Table -->
            <h2 class="text-xl font-bold text-gray-800 mb-4 mt-12">Merchandise</h2>
            
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
                
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400 w-48">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter2'])
                </div>
            </div>
            
            @include('partials.table-merchandise')

            <!-- Telkom Packages Table -->
            <h2 class="text-xl font-bold text-gray-800 mb-4 mt-12">Telkom Packages</h2>
            
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
                
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400 w-48">
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
        <div id="section-merchant" class="section-content" style="display:none;">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Merchant</h2>
            
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
                
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400 w-48">
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
        <div id="section-merchandise" class="section-content" style="display:none;">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Merchandise</h2>
            
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
                
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400 w-48">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter5'])
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Merchandise</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reedem Point</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start End Periode</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CTA</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Images</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @for($i = 1; $i <= 5; $i++)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $i }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Merchandise {{ $i }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">500 Points</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">100</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-01-01 - 2025-12-31</td>
                                <td class="px-6 py-4 text-sm text-blue-600 hover:text-blue-900">
                                    <a href="https://example.com/merchandise{{ $i }}" target="_blank">Link</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16" />
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-900">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of
                                <span class="font-medium">20</span> results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    1
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    2
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    3
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('partials.table-merchandise')
        </div>

        <!-- Telkom Packages Only Section -->
        <div id="section-telkom" class="section-content" style="display:none;">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Telkom Packages</h2>
            
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
                
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="pl-9 pr-4 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400 w-48">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search text-sm"></i>
                        </div>
                    </div>
                    
                    @include('partials.date-filter', ['filterId' => 'dateFilter6'])
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Package</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reedem Point</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start End Periode</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CTA</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Images</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @for($i = 1; $i <= 5; $i++)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $i }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Telkom Package {{ $i }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2000 Points</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">30</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-01-01 - 2025-12-31</td>
                                <td class="px-6 py-4 text-sm text-blue-600 hover:text-blue-900">
                                    <a href="https://example.com/telkom{{ $i }}" target="_blank">Link</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16" />
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-900">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-900">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of
                                <span class="font-medium">20</span> results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    1
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    2
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    3
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('partials.table-talkompackages')
        </div>
    </main>
</body>
</html>