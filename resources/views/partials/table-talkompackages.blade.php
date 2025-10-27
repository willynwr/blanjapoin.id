<div class="bg-white rounded-xl shadow overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                <tr>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">No</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Nama Paket</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Redeem Point</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Stock</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Periode</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">CTA</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Gambar Paket</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Images</th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200" id="telkom-table-body">
                <!-- Row 1 - Telkomsel Packet -->
                <tr class="hover:bg-gray-50 transition-colors telkom-row" data-category="Telkomsel Packet">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Unlimited Data 10GB</div>
                        <div class="text-xs text-gray-500">Paket data internet</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">500 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">200</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/01/2025</div>
                        <div>31/12/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/data10gb" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/telkom/data10gb.jpg') }}" alt="Package" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditTelkom(1, {nama: 'Unlimited Data 10GB', deskripsi: 'Paket data internet', redeem_point: '500', stock: 200, start_date: '01/01/2025', end_date: '31/12/2025', cta: 'https://example.com/data10gb'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Telkom Package', 'Unlimited Data 10GB', '1', 'Package Unlimited Data 10GB akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 2 - Telkomsel Packet -->
                <tr class="hover:bg-gray-50 transition-colors telkom-row" data-category="Telkomsel Packet">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Unlimited Calls 500min</div>
                        <div class="text-xs text-gray-500">Paket telepon unlimited</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">300 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">150</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>02/01/2025</div>
                        <div>30/11/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/calls500min" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/telkom/calls500min.jpg') }}" alt="Package" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditTelkom(2, {nama: 'Unlimited Calls 500min', deskripsi: 'Paket telepon unlimited', redeem_point: '300', stock: 150, start_date: '02/01/2025', end_date: '30/11/2025', cta: 'https://example.com/calls500min'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Telkom Package', 'Unlimited Calls 500min', '2', 'Package Unlimited Calls 500min akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 3 - Telkomsel Packet -->
                <tr class="hover:bg-gray-50 transition-colors telkom-row" data-category="Telkomsel Packet">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Combo Package 5GB+300min</div>
                        <div class="text-xs text-gray-500">Paket combo data dan telepon</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">700 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">100</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/03/2025</div>
                        <div>31/10/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/combo5gb" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/telkom/combo5gb.jpg') }}" alt="Package" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditTelkom(3, {nama: 'Combo Package 5GB+300min', deskripsi: 'Paket combo data dan telepon', redeem_point: '700', stock: 100, start_date: '01/03/2025', end_date: '31/10/2025', cta: 'https://example.com/combo5gb'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Telkom Package', 'Combo Package 5GB+300min', '3', 'Package Combo Package 5GB+300min akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 4 - Telkomsel Packet -->
                <tr class="hover:bg-gray-50 transition-colors telkom-row" data-category="Telkomsel Packet">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Unlimited Data 20GB</div>
                        <div class="text-xs text-gray-500">Paket data internet premium</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">900 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">75</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/04/2025</div>
                        <div>30/09/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/data20gb" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/telkom/data20gb.jpg') }}" alt="Package" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditTelkom(4, {nama: 'Unlimited Data 20GB', deskripsi: 'Paket data internet premium', redeem_point: '900', stock: 75, start_date: '01/04/2025', end_date: '30/09/2025', cta: 'https://example.com/data20gb'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Telkom Package', 'Unlimited Data 20GB', '4', 'Package Unlimited Data 20GB akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 5 - Telkomsel Packet -->
                <tr class="hover:bg-gray-50 transition-colors telkom-row" data-category="Telkomsel Packet">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                    <td class="px-4 py-4 text-sm">
                        <div class="text-sm font-medium text-gray-900">Premium Package 50GB</div>
                        <div class="text-xs text-gray-500">Paket data super premium</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">1500 pts</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">50</span>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                        <div>01/05/2025</div>
                        <div>31/08/2025</div>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm">
                        <a href="https://example.com/data50gb" target="_blank" class="text-blue-600 hover:text-blue-900 hover:underline">Link</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex-shrink-0 h-10 w-16">
                            <img src="{{ asset('storage/telkom/data50gb.jpg') }}" alt="Package" class="h-10 w-16 object-cover rounded">
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
                            <button onclick="openEditTelkom(5, {nama: 'Premium Package 50GB', deskripsi: 'Paket data super premium', redeem_point: '1500', stock: 50, start_date: '01/05/2025', end_date: '31/08/2025', cta: 'https://example.com/data50gb'})" class="text-blue-600 hover:text-blue-900 transition-colors">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="showDeleteConfirmation('Telkom Package', 'Premium Package 50GB', '5', 'Package Premium Package 50GB akan dihapus dari sistem')" class="text-red-600 hover:text-red-900 transition-colors">
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