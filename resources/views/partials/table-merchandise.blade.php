<!-- Table View -->
<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                <tr>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">No</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Merchandise</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Point</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Stock</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Periode</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CTA</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Gambar Merchandise</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Images</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200" id="merchandise-table-body">
                <!-- Row 1 - F&B -->
                <tr class="hover:bg-gray-50 transition-colors merchandise-row" data-category="F&B">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Gourmet Gift Box</div>
                        <div class="text-xs text-gray-500">Premium gift package</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">1000 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">50</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/01/2025</div>
                        <div>31/12/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/giftbox" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/merchandise/giftbox.jpg') }}" alt="Merchandise" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditMerchandise(1, {nama: 'Gourmet Gift Box', deskripsi: 'Premium gift package', redeem_point: '1000', stock: 50, start_date: '01/01/2025', end_date: '31/12/2025', cta: 'https://example.com/giftbox'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Merchandise', 'Gourmet Gift Box', '1', 'Merchandise Gourmet Gift Box akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 2 - Entertain -->
                <tr class="hover:bg-gray-50 transition-colors merchandise-row" data-category="Entertain">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Movie Tickets</div>
                        <div class="text-xs text-gray-500">Cinema vouchers</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">750 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">100</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/02/2025</div>
                        <div>30/11/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/movietickets" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/merchandise/movie.jpg') }}" alt="Merchandise" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditMerchandise(2, {nama: 'Movie Tickets', deskripsi: 'Cinema vouchers', redeem_point: '750', stock: 100, start_date: '01/02/2025', end_date: '30/11/2025', cta: 'https://example.com/movietickets'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Merchandise', 'Movie Tickets', '2', 'Merchandise Movie Tickets akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 3 - Vacation -->
                <tr class="hover:bg-gray-50 transition-colors merchandise-row" data-category="Vacation">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Travel Voucher</div>
                        <div class="text-xs text-gray-500">Holiday packages</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">2000 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">25</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/03/2025</div>
                        <div>31/10/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/travelvoucher" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/merchandise/travel.jpg') }}" alt="Merchandise" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditMerchandise(3, {nama: 'Travel Voucher', deskripsi: 'Holiday packages', redeem_point: '2000', stock: 25, start_date: '01/03/2025', end_date: '31/10/2025', cta: 'https://example.com/travelvoucher'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Merchandise', 'Travel Voucher', '3', 'Merchandise Travel Voucher akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 4 - Shopping -->
                <tr class="hover:bg-gray-50 transition-colors merchandise-row" data-category="Shopping">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Designer Handbag</div>
                        <div class="text-xs text-gray-500">Luxury fashion item</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">1500 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">10</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/04/2025</div>
                        <div>30/09/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/handbag" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/merchandise/handbag.jpg') }}" alt="Merchandise" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditMerchandise(4, {nama: 'Designer Handbag', deskripsi: 'Luxury fashion item', redeem_point: '1500', stock: 10, start_date: '01/04/2025', end_date: '30/09/2025', cta: 'https://example.com/handbag'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Merchandise', 'Designer Handbag', '4', 'Merchandise Designer Handbag akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 5 - Beauty & Care -->
                <tr class="hover:bg-gray-50 transition-colors merchandise-row" data-category="Beauty & Care">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Skincare Set</div>
                        <div class="text-xs text-gray-500">Beauty products</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">500 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">75</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/05/2025</div>
                        <div>31/08/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/skincare" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/merchandise/skincare.jpg') }}" alt="Merchandise" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditMerchandise(5, {nama: 'Skincare Set', deskripsi: 'Beauty products', redeem_point: '500', stock: 75, start_date: '01/05/2025', end_date: '31/08/2025', cta: 'https://example.com/skincare'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Merchandise', 'Skincare Set', '5', 'Merchandise Skincare Set akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
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
                Showing <span class="font-semibold text-gray-900">1</span> to <span class="font-semibold text-gray-900">5</span> of
                <span class="font-semibold text-gray-900">20</span> results
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
                    10
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
    <!-- Card 1 - F&B -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow merchandise-row" data-category="F&B">
        <div class="p-4">
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center flex-1">
                    <div class="h-12 w-12 flex-shrink-0">
                        <img src="{{ asset('storage/merchandise/giftbox.jpg') }}" alt="Merchandise" class="h-12 w-12 object-cover rounded">
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-semibold text-gray-900">Gourmet Gift Box</h3>
                        <p class="text-xs text-gray-500">Premium gift package</p>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Point</p>
                    <p class="text-sm font-semibold text-gray-900">1000 pts</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Stock</p>
                    <p class="text-sm font-semibold text-blue-600">50</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2 col-span-2">
                    <p class="text-xs text-gray-500">Periode</p>
                    <p class="text-xs font-medium text-gray-900">01/01/2025 - 31/12/2025</p>
                </div>
            </div>
            
            <div class="flex space-x-2 pt-3 border-t">
                <button class="flex-1 px-3 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-edit mr-1"></i> Edit
                </button>
                <button onclick="showDeleteConfirmation('Merchandise', 'Gourmet Gift Box', '1', 'Merchandise akan dihapus')" class="flex-1 px-3 py-2 text-sm font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                    <i class="fas fa-trash mr-1"></i> Hapus
                </button>
            </div>
        </div>
    </div>
    
    <!-- Card 2 - Entertain -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow merchandise-row" data-category="Entertain">
        <div class="p-4">
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center flex-1">
                    <div class="h-12 w-12 flex-shrink-0">
                        <img src="{{ asset('storage/merchandise/movie.jpg') }}" alt="Merchandise" class="h-12 w-12 object-cover rounded">
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-semibold text-gray-900">Movie Tickets</h3>
                        <p class="text-xs text-gray-500">Cinema vouchers</p>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Point</p>
                    <p class="text-sm font-semibold text-gray-900">750 pts</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2">
                    <p class="text-xs text-gray-500">Stock</p>
                    <p class="text-sm font-semibold text-blue-600">100</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-2 col-span-2">
                    <p class="text-xs text-gray-500">Periode</p>
                    <p class="text-xs font-medium text-gray-900">01/02/2025 - 30/11/2025</p>
                </div>
            </div>
            
            <div class="flex space-x-2 pt-3 border-t">
                <button class="flex-1 px-3 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-edit mr-1"></i> Edit
                </button>
                <button onclick="showDeleteConfirmation('Merchandise', 'Movie Tickets', '2', 'Merchandise akan dihapus')" class="flex-1 px-3 py-2 text-sm font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                    <i class="fas fa-trash mr-1"></i> Hapus
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Pagination -->
    <div class="bg-white rounded-xl shadow-md p-4">
        <div class="flex flex-col items-center gap-3">
            <div class="text-sm text-gray-700">
                Page <span class="font-semibold text-gray-900">1</span> of <span class="font-semibold text-gray-900">10</span>
            </div>
            <nav class="flex items-center gap-2" aria-label="Pagination">
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-orange-50 hover:border-orange-300 hover:text-orange-600 transition-all">
                    <i class="fas fa-chevron-left text-xs"></i>
                </a>
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg border-2 border-orange-500 bg-gradient-to-r from-orange-50 to-red-50 text-sm font-semibold text-orange-600">
                    1
                </a>
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-orange-50 hover:border-orange-300 hover:text-orange-600 transition-all">
                    2
                </a>
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-orange-50 hover:border-orange-300 hover:text-orange-600 transition-all">
                    3
                </a>
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-orange-50 hover:border-orange-300 hover:text-orange-600 transition-all">
                    <i class="fas fa-chevron-right text-xs"></i>
                </a>
            </nav>
        </div>
    </div>
</div>