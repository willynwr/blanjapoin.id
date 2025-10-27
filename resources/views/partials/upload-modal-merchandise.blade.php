<!-- Merchandise Upload Modal -->
<div id="uploadModalMerchandise" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50">
    <div class="fixed inset-0 bg-black opacity-0 transition-opacity duration-300 ease-out"></div>
    <div class="relative bg-white rounded-xl shadow-2xl w-full max-w-4xl max-h-[90vh] flex flex-col transform transition-all duration-300 ease-out scale-95 opacity-0">
        <div class="sticky top-0 z-10 flex justify-between items-center px-6 py-4 border-b bg-white rounded-t-xl">
            <h3 class="text-xl font-semibold text-gray-800 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Upload Merchandise Data</h3>
            <button type="button" onclick="closeUploadMerchandise()" class="text-gray-400 hover:text-gray-600 transition-all duration-300 ease-out transform translate-y-2 opacity-0">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        
        <form id="formUploadMerchandise" class="flex-1 overflow-y-auto">
            <div class="p-6 space-y-4">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Nama Merchandise</label>
                            <input type="text" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter merchandise name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Deskripsi</label>
                            <input type="text" name="deskripsi" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter description">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Redeem Point</label>
                            <input type="text" name="redeem_point" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter redeem points">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Stock</label>
                            <input type="number" name="stock" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter stock">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Start Date</label>
                            <input type="text" name="start_date" placeholder="DD/MM/YYYY" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" maxlength="10" onkeyup="formatDateInput(this)" onkeypress="return isNumberKey(event)">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0">End Date</label>
                            <input type="text" name="end_date" placeholder="DD/MM/YYYY" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" maxlength="10" onkeyup="formatDateInput(this)" onkeypress="return isNumberKey(event)">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0">CTA</label>
                            <input type="url" name="cta" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="https://example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Gambar Merchandise</label>
                            <div class="relative">
                                <input type="file" id="gambarMerchandiseInput" name="gambar_merchandise" accept="image/*" class="hidden" onchange="previewGambarMerchandise(this)">
                                <button type="button" onclick="document.getElementById('gambarMerchandiseInput').click()" class="w-full px-4 py-3 border-2 border-dashed border-gray-300 rounded-lg hover:border-orange-400 focus:outline-none focus:border-orange-500 transition-all duration-300 flex items-center justify-center text-gray-600 hover:text-orange-600 transition-all duration-300 ease-out transform translate-y-2 opacity-0">
                                    <i class="fas fa-cloud-upload-alt mr-2"></i>
                                    <span id="gambarMerchandiseText">Click to upload image</span>
                                </button>
                                <div id="gambarMerchandisePreview" class="mt-3 hidden">
                                    <img src="" alt="Preview" class="w-full h-32 object-cover rounded-lg">
                                    <button type="button" onclick="removeGambarMerchandise()" class="mt-2 text-sm text-red-600 hover:text-red-800">
                                        <i class="fas fa-times mr-1"></i> Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Images</label>
                            <div class="relative">
                                <input type="file" id="merchandiseImagesInput" name="images[]" accept="image/*" multiple class="hidden" onchange="previewMerchandiseImages(this)">
                                <button type="button" onclick="document.getElementById('merchandiseImagesInput').click()" class="w-full px-4 py-3 border-2 border-dashed border-gray-300 rounded-lg hover:border-orange-400 focus:outline-none focus:border-orange-500 transition-all duration-300 flex items-center justify-center text-gray-600 hover:text-orange-600 transition-all duration-300 ease-out transform translate-y-2 opacity-0">
                                    <i class="fas fa-images mr-2"></i>
                                    <span id="merchandiseImagesText">Click to upload images</span>
                                </button>
                                <div id="merchandiseImagesPreview" class="mt-3 grid grid-cols-3 gap-2 hidden"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sticky bottom-0 z-10 flex justify-end space-x-3 px-6 py-4 border-t bg-white rounded-b-xl">
                <button type="button" onclick="closeUploadMerchandise()" class="px-5 py-2.5 text-sm font-medium border border-gray-300 rounded-lg hover:bg-gray-50 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Cancel</button>
                <button type="submit" class="px-5 py-2.5 text-sm font-medium bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white rounded-lg hover:shadow-lg transition-all duration-300 ease-out transform translate-y-2 opacity-0">Upload</button>
            </div>
        </form>
    </div>
</div>

@include('partials.upload-verification-modal')

<script>
function previewGambarMerchandise(input) {
    const preview = document.getElementById('gambarMerchandisePreview');
    const text = document.getElementById('gambarMerchandiseText');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.querySelector('img').src = e.target.result;
            preview.classList.remove('hidden');
            if (text) text.textContent = input.files[0].name;
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function removeGambarMerchandise() {
    document.getElementById('gambarMerchandiseInput').value = '';
    document.getElementById('gambarMerchandisePreview').classList.add('hidden');
    document.getElementById('gambarMerchandiseText').textContent = 'Click to upload image';
}

function previewMerchandiseImages(input) {
    const preview = document.getElementById('merchandiseImagesPreview');
    const text = document.getElementById('merchandiseImagesText');
    preview.innerHTML = '';
    if (input.files && input.files.length > 0) {
        preview.classList.remove('hidden');
        if (text) text.textContent = `${input.files.length} file(s) selected`;
        Array.from(input.files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const div = document.createElement('div');
                div.className = 'relative';
                div.innerHTML = `<img src="${e.target.result}" class="w-full h-24 object-cover rounded-lg"><button type="button" onclick="removeMerchandiseImage(${index})" class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600"><i class="fas fa-times text-xs"></i></button>`;
                preview.appendChild(div);
            };
            reader.readAsDataURL(file);
        });
    }
}

function removeMerchandiseImage(index) {
    const input = document.getElementById('merchandiseImagesInput');
    const dt = new DataTransfer();
    for (let i = 0; i < input.files.length; i++) {
        if (i !== index) dt.items.add(input.files[i]);
    }
    input.files = dt.files;
    previewMerchandiseImages(input);
    if (input.files.length === 0) {
        document.getElementById('merchandiseImagesPreview').classList.add('hidden');
        document.getElementById('merchandiseImagesText').textContent = 'Click to upload images';
    }
}

function openUploadMerchandise() {
    const modal = document.getElementById('uploadModalMerchandise');
    if (!modal) return;
    const modalContent = modal.querySelector('div.relative');
    const backdrop = modal.querySelector('div.fixed');
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    setTimeout(() => { if (backdrop) backdrop.style.opacity = '0.5'; }, 10);
    setTimeout(() => { if (modalContent) { modalContent.style.transform = 'scale(1)'; modalContent.style.opacity = '1'; } }, 50);
    const formElements = modalContent.querySelectorAll('h3, button, label, input, select, textarea');
    formElements.forEach((el, index) => { setTimeout(() => { el.style.transform = 'translateY(0)'; el.style.opacity = '1'; }, 100 + (index * 30)); });
}

function closeUploadMerchandise() {
    const modal = document.getElementById('uploadModalMerchandise');
    if (!modal) return;
    const modalContent = modal.querySelector('div.relative');
    const backdrop = modal.querySelector('div.fixed');
    const formElements = modalContent.querySelectorAll('h3, button, label, input, select, textarea');
    formElements.forEach((el, index) => { setTimeout(() => { el.style.transform = 'translateY(10px)'; el.style.opacity = '0'; }, index * 20); });
    setTimeout(() => { if (modalContent) { modalContent.style.transform = 'scale(0.95)'; modalContent.style.opacity = '0'; } }, 100);
    setTimeout(() => { if (backdrop) backdrop.style.opacity = '0'; }, 150);
    setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
        const form = document.getElementById('formUploadMerchandise');
        if (form) form.reset();
        formElements.forEach(el => { el.style.transform = 'translateY(10px)'; el.style.opacity = '0'; });
        if (modalContent) { modalContent.style.transform = 'scale(0.95)'; modalContent.style.opacity = '0'; }
        if (backdrop) backdrop.style.opacity = '0';
    }, 400);
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formUploadMerchandise');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(form);
            const data = {};
            for (const [key, value] of formData.entries()) { data[key] = value; }
            if (typeof showUploadVerification === 'function') { showUploadVerification(data, 'Merchandise'); }
        });
    }
    const modal = document.getElementById('uploadModalMerchandise');
    if (modal) { modal.addEventListener('click', function(event) { if (event.target === this) closeUploadMerchandise(); }); }
});
</script>
