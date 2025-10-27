<!-- Table View -->
<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                <tr>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">No</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Merchant</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Kategori</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Diskon</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">SKB</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Point</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Stock</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Periode</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CTA</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Logo Merchant</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Images</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200" id="merchant-table-body">
                <!-- Row 1 -->
                <tr class="hover:bg-gray-50 transition-colors merchant-row" data-category="F&B">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Restaurant ABC</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">F&B</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="text-green-600 font-semibold">20%</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">SKU123</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">500 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">100</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/01/2025</div>
                        <div>31/12/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/logo/merchant1.png') }}" alt="Logo" class="h-10 w-16 object-cover rounded">
                        </div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                        <div class="flex items-center space-x-1">
                            <div class="bg-gray-200 border-2 border-dashed rounded w-8 h-8"></div>
                            <div class="bg-gray-200 border-2 border-dashed rounded w-8 h-8"></div>
                        </div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button onclick="openEditMerchant(1, {nama: 'Restaurant ABC', kategori: 'F&B', diskon: '20', skb: 'SKU123', redeem_point: '500', stock: 100, start_date: '01/01/2025', end_date: '31/12/2025', cta: 'https://example.com'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Merchant', 'Restaurant ABC', '1')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 2 -->
                <tr class="hover:bg-gray-50 transition-colors merchant-row" data-category="Entertain">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Cinema XYZ</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Entertain</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="text-green-600 font-semibold">15%</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">SKU456</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">300 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">50</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/01/2025</div>
                        <div>31/12/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/logo/merchant2.png') }}" alt="Logo" class="h-10 w-16 object-cover rounded">
                        </div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                        <div class="flex items-center space-x-1">
                            <div class="bg-gray-200 border-2 border-dashed rounded w-8 h-8"></div>
                            <div class="bg-gray-200 border-2 border-dashed rounded w-8 h-8"></div>
                        </div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button onclick="openEditMerchant(2, {nama: 'Cinema XYZ', kategori: 'Entertain', diskon: '15', skb: 'SKU456', redeem_point: '300', stock: 50, start_date: '01/01/2025', end_date: '31/12/2025', cta: 'https://example.com'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Merchant', 'Cinema XYZ', '2')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Improved Pagination -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-4 py-4 border-t border-gray-200">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="text-sm text-gray-700">
                Showing <span class="font-semibold text-gray-900">1</span> to <span class="font-semibold text-gray-900">2</span> of
                <span class="font-semibold text-gray-900">10</span> results
            </div>
            <nav class="flex items-center gap-1" aria-label="Pagination">
                <a href="#" class="inline-flex items-center justify-center w-9 h-9 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gradient-to-r hover:from-orange-50 hover:to-red-50 hover:border-orange-300 hover:text-orange-600 transition-all">
                    <i class="fas fa-chevron-left text-xs"></i>
                </a>
                <a href="#" class="inline-flex items-center justify-center w-9 h-9 rounded-lg border-2 border-orange-500 bg-gradient-to-r from-orange-50 to-red-50 text-sm font-semibold text-orange-600 shadow-sm">
                    1
                </a>
                <a href="#" class="inline-flex items-center justify-center w-9 h-9 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gradient-to-r hover:from-orange-50 hover:to-red-50 hover:border-orange-300 hover:text-orange-600 transition-all">
                    2
                </a>
                <a href="#" class="inline-flex items-center justify-center w-9 h-9 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gradient-to-r hover:from-orange-50 hover:to-red-50 hover:border-orange-300 hover:text-orange-600 transition-all">
                    3
                </a>
                <span class="inline-flex items-center justify-center w-9 h-9 text-gray-500">...</span>
                <a href="#" class="inline-flex items-center justify-center w-9 h-9 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gradient-to-r hover:from-orange-50 hover:to-red-50 hover:border-orange-300 hover:text-orange-600 transition-all">
                    5
                </a>
                <a href="#" class="inline-flex items-center justify-center w-9 h-9 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gradient-to-r hover:from-orange-50 hover:to-red-50 hover:border-orange-300 hover:text-orange-600 transition-all">
                    <i class="fas fa-chevron-right text-xs"></i>
                </a>
            </nav>
        </div>
    </div>
</div>

<!-- Mobile Card View - REMOVED, using table for all screen sizes -->
<div class="hidden space-y-4">
    <!-- Card 1 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow merchant-row" data-category="F&B">
        <div class="p-4">
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center flex-1">
                    <div class="h-12 w-12 flex-shrink-0">
                        <img src="{{ asset('storage/logo/merchant1.png') }}" alt="Logo" class="h-12 w-12 object-cover rounded">
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-semibold text-gray-900">Restaurant ABC</h3>
                        <p class="text-xs text-gray-500">SKU: SKU123</p>
                    </div>
                </div>
                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-orange-100 text-orange-800">F&B</span>
            </div>
            
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Diskon</p>
                    <p class="text-sm font-semibold text-green-600">20%</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Point</p>
                    <p class="text-sm font-semibold text-gray-900">500 pts</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Stock</p>
                    <p class="text-sm font-semibold text-blue-600">100</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Periode</p>
                    <p class="text-xs font-medium text-gray-900">01/01 - 31/12</p>
                </div>
            </div>
            
            <div class="flex space-x-2 pt-3 border-t">
                <button onclick="openEditMerchant(1, {nama: 'Restaurant ABC', kategori: 'F&B', diskon: '20', skb: 'SKU123', redeem_point: '500', stock: 100, start_date: '01/01/2025', end_date: '31/12/2025', cta: 'https://example.com'})" class="flex-1 px-3 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-edit mr-1"></i> Edit
                </button>
                <button onclick="showDeleteConfirmation('Merchant', 'Restaurant ABC', '1')" class="flex-1 px-3 py-2 text-sm font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                    <i class="fas fa-trash mr-1"></i> Hapus
                </button>
            </div>
        </div>
    </div>
    
    <!-- Card 2 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow merchant-row" data-category="Entertain">
        <div class="p-4">
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center flex-1">
                    <div class="h-12 w-12 flex-shrink-0">
                        <img src="{{ asset('storage/logo/merchant2.png') }}" alt="Logo" class="h-12 w-12 object-cover rounded">
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-semibold text-gray-900">Cinema XYZ</h3>
                        <p class="text-xs text-gray-500">SKU: SKU456</p>
                    </div>
                </div>
                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Entertain</span>
            </div>
            
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Diskon</p>
                    <p class="text-sm font-semibold text-green-600">15%</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Point</p>
                    <p class="text-sm font-semibold text-gray-900">300 pts</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Stock</p>
                    <p class="text-sm font-semibold text-blue-600">50</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Periode</p>
                    <p class="text-xs font-medium text-gray-900">01/01 - 31/12</p>
                </div>
            </div>
            
            <div class="flex space-x-2 pt-3 border-t">
                <button onclick="openEditMerchant(2, {nama: 'Cinema XYZ', kategori: 'Entertain', diskon: '15', skb: 'SKU456', redeem_point: '300', stock: 50, start_date: '01/01/2025', end_date: '31/12/2025', cta: 'https://example.com'})" class="flex-1 px-3 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-edit mr-1"></i> Edit
                </button>
                <button onclick="showDeleteConfirmation('Merchant', 'Cinema XYZ', '2')" class="flex-1 px-3 py-2 text-sm font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                    <i class="fas fa-trash mr-1"></i> Hapus
                </button>
            </div>
        </div>
    </div>
</div>
