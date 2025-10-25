<!-- Merchandise Upload Modal -->
<div id="merchandiseUploadModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50" style="overflow-y: auto;">
    <div class="fixed inset-0 bg-black opacity-0 transition-opacity duration-300 ease-out"></div>
    <div class="relative bg-white rounded-xl shadow-lg w-full max-w-4xl max-h-[90vh] overflow-y-auto my-8 transform transition-all duration-300 ease-out scale-95 opacity-0">
        <div class="flex justify-between items-center p-4 border-b">
            <h3 class="text-lg font-semibold text-gray-800 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Upload Merchandise Data</h3>
            <button onclick="toggleMerchandiseUploadModal()" class="text-gray-500 hover:text-gray-700 transition-all duration-300 ease-out transform translate-y-2 opacity-0">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <form id="merchandiseUploadFormElement" class="p-4 space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Nama Merchandise</label>
                    <input type="text" name="nama_merchandise" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter merchandise name">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Kategori</label>
                    <select name="kategori" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0">
                        <option value="">Select Category</option>
                        <option value="F&B">F&B</option>
                        <option value="Entertain">Entertain</option>
                        <option value="Vacation">Vacation</option>
                        <option value="Shopping">Shopping</option>
                        <option value="Beauty & Care">Beauty & Care</option>
                        <option value="Telkomsel Packet">Telkomsel Packet</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Harga</label>
                    <input type="text" name="harga" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter price">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Redeem Point</label>
                    <input type="text" name="redeem_point" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter redeem points">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Stock</label>
                    <input type="number" name="stock" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter stock">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Start Date</label>
                    <input type="date" name="start_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0">
                </div>

                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">CTA</label>
                    <input type="url" name="cta" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="https://example.com">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Gambar Merchandise</label>
                    <div class="flex items-center space-x-2">
                        <input type="file" id="logoMerchandiseInput" name="gambar_merchandise" accept="image/*" class="hidden" onchange="previewImage(event, 'logoMerchandisePreview')">
                        <button type="button" onclick="document.getElementById('logoMerchandiseInput').click()" class="px-3 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Choose File</button>
                        <span id="logoMerchandiseFileName" class="text-sm text-gray-500 transition-all duration-300 ease-out transform translate-y-2 opacity-0">No file chosen</span>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Images</label>
                    <div class="flex items-center space-x-2">
                        <input type="file" id="imagesMerchandiseInput" name="images[]" accept="image/*" multiple class="hidden" onchange="previewImages(event, 'imagesMerchandisePreview')">
                        <button type="button" onclick="document.getElementById('imagesMerchandiseInput').click()" class="px-3 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Choose Files</button>
                        <span id="imagesMerchandiseCount" class="text-sm text-gray-500 transition-all duration-300 ease-out transform translate-y-2 opacity-0">No files chosen</span>
                    </div>
                    <div id="imagesMerchandisePreview" class="mt-2 flex flex-wrap gap-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0"></div>
                </div>
            </div>
            
            <div class="flex justify-end space-x-3 pt-4">
                <button type="button" onclick="toggleMerchandiseUploadModal()" class="px-4 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Cancel</button>
                <button type="submit" class="px-4 py-2 text-sm bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white rounded-lg hover:shadow-lg transition-all duration-300 ease-out transform translate-y-2 opacity-0">Upload</button>
            </div>
        </form>
    </div>
</div>