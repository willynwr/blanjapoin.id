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
                        <button class="flex items-center px-3 py-2 rounded-md bg-red-500 text-white font-medium text-sm hover:bg-red-600 transition-colors">
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
            <button class="px-6 py-2 rounded-full bg-gradient-to-r from-red-500 to-orange-500 text-white font-medium shadow-lg">All</button>
            <button class="px-6 py-2 rounded-full border border-yellow-500 text-gray-700 hover:bg-yellow-50 transition-colors">Merchant</button>
            <button class="px-6 py-2 rounded-full border border-yellow-500 text-gray-700 hover:bg-yellow-50 transition-colors">Merchandise</button>
            <button class="px-6 py-2 rounded-full border border-yellow-500 text-gray-700 hover:bg-yellow-50 transition-colors">Telkom Packages</button>
        </div>

        <!-- Header -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Merchant</h1>

        <!-- Controls -->
        <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
            <div class="flex space-x-4">
                <button class="flex items-center px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                    <i class="fas fa-list mr-2"></i>
                    Kategori Mercant
                </button>
                <button class="flex items-center px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                    <i class="fas fa-upload mr-2"></i>
                    Upload Mercant
                </button>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- Start Date -->
                <div class="relative">
                    <input type="date" class="pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 w-40">
                    <div class="absolute left-3 top-2.5 text-gray-500">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <span class="absolute left-12 top-2.5 text-gray-700 text-sm">Start Date</span>
                </div>
                
                <!-- End Date -->
                <div class="relative">
                    <input type="date" class="pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 w-40">
                    <div class="absolute left-3 top-2.5 text-gray-500">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <span class="absolute left-12 top-2.5 text-gray-700 text-sm">End date</span>
                </div>
                
                <button class="p-2 rounded-full border border-gray-300 hover:bg-gray-50 transition-colors">
                    <i class="fas fa-filter text-gray-600"></i>
                </button>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mercant</th>
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
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Merchant {{ $i }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1000 Points</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">50</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-01-01 - 2025-12-31</td>
                            <td class="px-6 py-4 text-sm text-blue-600 hover:text-blue-900">
                                <a href="https://example.com/merchant{{ $i }}" target="_blank">Link</a>
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
    </main>
</body>
</html>