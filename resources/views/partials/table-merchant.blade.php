<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mercant</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Diskon</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SKB</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reedem Point</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start End Periode</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CTA</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Images</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Logo Mercant</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200" id="merchant-table-body">
                <!-- Row 1 - F&B -->
                <tr class="hover:bg-gray-50 transition-colors merchant-row" data-category="F&B">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Restaurant ABC</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">F&B</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">20%</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SKU123</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">500 Points</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">100</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-01-01 - 2025-12-31</td>
                    <td class="px-6 py-4 text-sm text-blue-600 hover:text-blue-900">
                        <a href="https://example.com/restaurant" target="_blank">Link</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <div class="flex items-center">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">logo1.png</td>
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
                
                <!-- Row 2 - Entertain -->
                <tr class="hover:bg-gray-50 transition-colors merchant-row" data-category="Entertain">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Cinema XYZ</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Entertain</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15%</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SKU456</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">750 Points</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">50</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-02-01 - 2025-11-30</td>
                    <td class="px-6 py-4 text-sm text-blue-600 hover:text-blue-900">
                        <a href="https://example.com/cinema" target="_blank">Link</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <div class="flex items-center">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">logo2.png</td>
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
                
                <!-- Row 3 - Vacation -->
                <tr class="hover:bg-gray-50 transition-colors merchant-row" data-category="Vacation">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Hotel Paradise</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Vacation</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10%</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SKU789</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1000 Points</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">25</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-03-01 - 2025-10-31</td>
                    <td class="px-6 py-4 text-sm text-blue-600 hover:text-blue-900">
                        <a href="https://example.com/hotel" target="_blank">Link</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <div class="flex items-center">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">logo3.png</td>
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
                
                <!-- Row 4 - Shopping -->
                <tr class="hover:bg-gray-50 transition-colors merchant-row" data-category="Shopping">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Fashion Store</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Shopping</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">25%</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SKU101</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">300 Points</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">200</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-04-01 - 2025-09-30</td>
                    <td class="px-6 py-4 text-sm text-blue-600 hover:text-blue-900">
                        <a href="https://example.com/fashion" target="_blank">Link</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <div class="flex items-center">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">logo4.png</td>
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
                
                <!-- Row 5 - Beauty & Care -->
                <tr class="hover:bg-gray-50 transition-colors merchant-row" data-category="Beauty & Care">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Spa & Wellness</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Beauty & Care</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">30%</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SKU202</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">400 Points</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">75</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-05-01 - 2025-08-31</td>
                    <td class="px-6 py-4 text-sm text-blue-600 hover:text-blue-900">
                        <a href="https://example.com/spa" target="_blank">Link</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <div class="flex items-center">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">logo5.png</td>
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