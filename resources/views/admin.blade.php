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

            // New function to toggle Kategori dropdown
            function toggleKategoriDropdown() {
                const dropdown = document.getElementById('kategoriDropdown');
                if (!dropdown) return;
                if (dropdown.classList.contains('hidden')) {
                    // Close any other open dropdowns first
                    closeAllDropdowns();
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

            // Function to close all dropdowns
            function closeAllDropdowns() {
                const dropdowns = document.querySelectorAll('[id$="Dropdown"], [id^="kategoriDropdown"]');
                dropdowns.forEach(dropdown => {
                    if (!dropdown.classList.contains('hidden')) {
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
                });
            }

            // Function to handle file upload
            function handleFileUpload(event) {
                const file = event.target.files[0];
                if (file) {
                    // Check if file is an image
                    if (!file.type.startsWith('image/')) {
                        alert('Please select an image file (JPEG, PNG, GIF, etc.)');
                        return;
                    }
                    
                    // Here you would typically send the file to your server
                    // For now, we'll just show a success message
                    alert(`File selected: ${file.name}\nSize: ${Math.round(file.size/1024)} KB\nType: ${file.type}`);
                    
                    // In a real application, you would do something like:
                    // const formData = new FormData();
                    // formData.append('image', file);
                    // fetch('/upload-image', { method: 'POST', body: formData })
                    //   .then(response => response.json())
                    //   .then(data => console.log('Success:', data))
                    //   .catch(error => console.error('Error:', error));
                }
            }

            // Functions for Merchant section
            function toggleKategoriDropdownMerchant() {
                const dropdown = document.getElementById('kategoriDropdownMerchant');
                if (!dropdown) return;
                if (dropdown.classList.contains('hidden')) {
                    // Close any other open dropdowns first
                    closeAllDropdowns();
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

            function handleFileUploadMerchant(event) {
                const file = event.target.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select an image file (JPEG, PNG, GIF, etc.)');
                        return;
                    }
                    alert(`File selected: ${file.name}\nSize: ${Math.round(file.size/1024)} KB\nType: ${file.type}`);
                }
            }

            // Functions for Merchandise section
            function toggleKategoriDropdownMerchandise() {
                const dropdown = document.getElementById('kategoriDropdownMerchandise');
                if (!dropdown) return;
                if (dropdown.classList.contains('hidden')) {
                    // Close any other open dropdowns first
                    closeAllDropdowns();
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

            function handleFileUploadMerchandise(event) {
                const file = event.target.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select an image file (JPEG, PNG, GIF, etc.)');
                        return;
                    }
                    alert(`File selected: ${file.name}\nSize: ${Math.round(file.size/1024)} KB\nType: ${file.type}`);
                }
            }

            // Functions for Telkom section
            function toggleKategoriDropdownTelkom() {
                const dropdown = document.getElementById('kategoriDropdownTelkom');
                if (!dropdown) return;
                if (dropdown.classList.contains('hidden')) {
                    // Close any other open dropdowns first
                    closeAllDropdowns();
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

            function handleFileUploadTelkom(event) {
                const file = event.target.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select an image file (JPEG, PNG, GIF, etc.)');
                        return;
                    }
                    alert(`File selected: ${file.name}\nSize: ${Math.round(file.size/1024)} KB\nType: ${file.type}`);
                }
            }

            // Functions for All section - Merchant
            function toggleKategoriDropdownAll1() {
                const dropdown = document.getElementById('kategoriDropdownAll1');
                if (!dropdown) return;
                if (dropdown.classList.contains('hidden')) {
                    // Close any other open dropdowns first
                    closeAllDropdowns();
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

            function handleFileUploadAll1(event) {
                const file = event.target.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select an image file (JPEG, PNG, GIF, etc.)');
                        return;
                    }
                    alert(`File selected: ${file.name}\nSize: ${Math.round(file.size/1024)} KB\nType: ${file.type}`);
                }
            }

            // Functions for All section - Merchandise
            function toggleKategoriDropdownAll2() {
                const dropdown = document.getElementById('kategoriDropdownAll2');
                if (!dropdown) return;
                if (dropdown.classList.contains('hidden')) {
                    // Close any other open dropdowns first
                    closeAllDropdowns();
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

            function handleFileUploadAll2(event) {
                const file = event.target.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select an image file (JPEG, PNG, GIF, etc.)');
                        return;
                    }
                    alert(`File selected: ${file.name}\nSize: ${Math.round(file.size/1024)} KB\nType: ${file.type}`);
                }
            }

            // Functions for All section - Telkom
            function toggleKategoriDropdownAll3() {
                const dropdown = document.getElementById('kategoriDropdownAll3');
                if (!dropdown) return;
                if (dropdown.classList.contains('hidden')) {
                    // Close any other open dropdowns first
                    closeAllDropdowns();
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

            function handleFileUploadAll3(event) {
                const file = event.target.files[0];
                if (file) {
                    if (!file.type.startsWith('image/')) {
                        alert('Please select an image file (JPEG, PNG, GIF, etc.)');
                        return;
                    }
                    alert(`File selected: ${file.name}\nSize: ${Math.round(file.size/1024)} KB\nType: ${file.type}`);
                }
            }



            // Function to preview single image
            function previewImage(event, previewId) {
                const file = event.target.files[0];
                const preview = document.getElementById(previewId);
                const fileNameSpan = document.getElementById('logoFileName');
                
                if (file) {
                    fileNameSpan.textContent = file.name;
                    
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            preview.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover rounded-xl">`;
                        };
                        reader.readAsDataURL(file);
                    } else {
                        preview.innerHTML = '<div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>';
                        alert('Please select an image file (JPEG, PNG, GIF, etc.)');
                    }
                } else {
                    preview.innerHTML = '<div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>';
                    fileNameSpan.textContent = 'No file chosen';
                }
            }

            // Function to preview multiple images
            function previewImages(event, previewId) {
                const files = event.target.files;
                const preview = document.getElementById(previewId);
                const countSpan = document.getElementById('imagesCount');
                
                preview.innerHTML = '';
                
                if (files.length > 0) {
                    countSpan.textContent = `${files.length} file(s) selected`;
                    
                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        if (file.type.startsWith('image/')) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                const imgContainer = document.createElement('div');
                                imgContainer.className = 'w-16 h-16 relative';
                                imgContainer.innerHTML = `
                                    <img src="${e.target.result}" class="w-full h-full object-cover rounded-xl">
                                    <button type="button" onclick="removeImage(this)" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">×</button>
                                `;
                                preview.appendChild(imgContainer);
                            };
                            reader.readAsDataURL(file);
                        }
                    }
                } else {
                    countSpan.textContent = 'No files chosen';
                }
            }

            // Function to remove image from preview
            function removeImage(button) {
                const imgContainer = button.parentElement;
                imgContainer.remove();
                
                // Update count
                const preview = document.getElementById('imagesPreview');
                const countSpan = document.getElementById('imagesCount');
                const imageCount = preview.children.length;
                countSpan.textContent = imageCount > 0 ? `${imageCount} file(s) selected` : 'No files chosen';
            }

            // Function to handle form submission
            function handleMerchantFormSubmit(event) {
                event.preventDefault();
                
                // Get form data
                const form = document.getElementById('merchantUploadFormElement');
                const formData = new FormData(form);
                
                // In a real application, you would send this data to your server
                // For now, we'll just show an alert with the data
                let message = 'Form Data:\n';
                for (let [key, value] of formData.entries()) {
                    if (key === 'images[]') {
                        message += `${key}: ${event.target.elements[key].files.length} file(s)\n`;
                    } else {
                        message += `${key}: ${value}\n`;
                    }
                }
                
                alert(message);
                
                // Reset form and hide it
                form.reset();
                document.getElementById('logoPreview').innerHTML = '<div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>';
                document.getElementById('imagesPreview').innerHTML = '';
                document.getElementById('logoFileName').textContent = 'No file chosen';
                document.getElementById('imagesCount').textContent = 'No files chosen';
                toggleMerchantUploadModal();
            }

            // Add event listener for form submission
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('merchantUploadFormElement');
                if (form) {
                    form.addEventListener('submit', handleMerchantFormSubmit);
                }
            });

            // Click outside to close dropdowns
            document.addEventListener('click', function(event) {
                // Handle main section dropdown
                const kategoriBtn = document.getElementById('kategoriBtn');
                const kategoriDropdown = document.getElementById('kategoriDropdown');
                
                if (kategoriBtn && kategoriDropdown && 
                    !kategoriBtn.contains(event.target) && 
                    !kategoriDropdown.contains(event.target) &&
                    !kategoriDropdown.classList.contains('hidden')) {
                    toggleKategoriDropdown();
                }
                
                // Handle merchant section dropdown
                const kategoriBtnMerchant = document.getElementById('kategoriBtnMerchant');
                const kategoriDropdownMerchant = document.getElementById('kategoriDropdownMerchant');
                
                if (kategoriBtnMerchant && kategoriDropdownMerchant && 
                    !kategoriBtnMerchant.contains(event.target) && 
                    !kategoriDropdownMerchant.contains(event.target) &&
                    !kategoriDropdownMerchant.classList.contains('hidden')) {
                    toggleKategoriDropdownMerchant();
                }
                
                // Handle merchandise section dropdown
                const kategoriBtnMerchandise = document.getElementById('kategoriBtnMerchandise');
                const kategoriDropdownMerchandise = document.getElementById('kategoriDropdownMerchandise');
                
                if (kategoriBtnMerchandise && kategoriDropdownMerchandise && 
                    !kategoriBtnMerchandise.contains(event.target) && 
                    !kategoriDropdownMerchandise.contains(event.target) &&
                    !kategoriDropdownMerchandise.classList.contains('hidden')) {
                    toggleKategoriDropdownMerchandise();
                }
                
                // Handle telkom section dropdown
                const kategoriBtnTelkom = document.getElementById('kategoriBtnTelkom');
                const kategoriDropdownTelkom = document.getElementById('kategoriDropdownTelkom');
                
                if (kategoriBtnTelkom && kategoriDropdownTelkom && 
                    !kategoriBtnTelkom.contains(event.target) && 
                    !kategoriDropdownTelkom.contains(event.target) &&
                    !kategoriDropdownTelkom.classList.contains('hidden')) {
                    toggleKategoriDropdownTelkom();
                }
                
                // Handle All section dropdowns
                const kategoriBtnAll1 = document.getElementById('kategoriBtnAll1');
                const kategoriDropdownAll1 = document.getElementById('kategoriDropdownAll1');
                
                if (kategoriBtnAll1 && kategoriDropdownAll1 && 
                    !kategoriBtnAll1.contains(event.target) && 
                    !kategoriDropdownAll1.contains(event.target) &&
                    !kategoriDropdownAll1.classList.contains('hidden')) {
                    toggleKategoriDropdownAll1();
                }
                
                const kategoriBtnAll2 = document.getElementById('kategoriBtnAll2');
                const kategoriDropdownAll2 = document.getElementById('kategoriDropdownAll2');
                
                if (kategoriBtnAll2 && kategoriDropdownAll2 && 
                    !kategoriBtnAll2.contains(event.target) && 
                    !kategoriDropdownAll2.contains(event.target) &&
                    !kategoriDropdownAll2.classList.contains('hidden')) {
                    toggleKategoriDropdownAll2();
                }
                
                const kategoriBtnAll3 = document.getElementById('kategoriBtnAll3');
                const kategoriDropdownAll3 = document.getElementById('kategoriDropdownAll3');
                
                if (kategoriBtnAll3 && kategoriDropdownAll3 && 
                    !kategoriBtnAll3.contains(event.target) && 
                    !kategoriDropdownAll3.contains(event.target) &&
                    !kategoriDropdownAll3.classList.contains('hidden')) {
                    toggleKategoriDropdownAll3();
                }
                
                // Also close date filters if clicking outside
                const dateFilterBtns = document.querySelectorAll('[onclick*="toggleDateFilter"]');
                const dateFilterDropdowns = document.querySelectorAll('[id^="dateFilter"]');
                
                let clickedInsideDateFilter = false;
                dateFilterBtns.forEach(btn => {
                    if (btn.contains(event.target)) clickedInsideDateFilter = true;
                });
                dateFilterDropdowns.forEach(dropdown => {
                    if (dropdown.contains(event.target)) clickedInsideDateFilter = true;
                });
                
                if (!clickedInsideDateFilter) {
                    dateFilterDropdowns.forEach(dropdown => {
                        if (!dropdown.classList.contains('hidden')) {
                            const id = dropdown.id;
                            const dropdownElement = document.getElementById(id);
                            if (dropdownElement) {
                                dropdownElement.style.transition = 'opacity .2s ease, transform .2s ease';
                                dropdownElement.style.opacity = '0';
                                dropdownElement.style.transform = 'translateY(-6px)';
                                setTimeout(() => {
                                    dropdownElement.classList.add('hidden');
                                    dropdownElement.style.transition = '';
                                    dropdownElement.style.opacity = '';
                                    dropdownElement.style.transform = '';
                                }, 200);
                            }
                        }
                    });
                }
            });


            
            // Trigger file input for All section

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

                // Reapply saved category states on the now-active section
                if (tab === 'all') {
                    ['merchant','merchandise','telkom'].forEach(type => applyCategoryState(type));
                } else if (['merchant','merchandise','telkom'].includes(tab)) {
                    applyCategoryState(tab);
                }
            }

            // Track active category for each table type
            const activeCategories = {
                merchant: null,
                merchandise: null,
                telkom: null
            };

            // Apply saved category state without toggling (used on tab switch)
            function applyCategoryState(tableType) {
                const saved = activeCategories[tableType];
                const category = saved ? saved : 'All';

                // Decide which button/dropdown IDs to target based on current visible section
                let buttonId = '';
                let dropdownId = '';
                if (document.getElementById('section-all').classList.contains('hidden') === false) {
                    if (tableType === 'merchant') { buttonId = 'kategoriBtnAll1'; dropdownId = 'kategoriDropdownAll1'; }
                    else if (tableType === 'merchandise') { buttonId = 'kategoriBtnAll2'; dropdownId = 'kategoriDropdownAll2'; }
                    else if (tableType === 'telkom') { buttonId = 'kategoriBtnAll3'; dropdownId = 'kategoriDropdownAll3'; }
                } else {
                    if (tableType === 'merchant') { buttonId = 'kategoriBtnMerchant'; dropdownId = 'kategoriDropdownMerchant'; }
                    else if (tableType === 'merchandise') { buttonId = 'kategoriBtnMerchandise'; dropdownId = 'kategoriDropdownMerchandise'; }
                    else if (tableType === 'telkom') { buttonId = 'kategoriBtnTelkom'; dropdownId = 'kategoriDropdownTelkom'; }
                }

                const button = document.getElementById(buttonId);
                if (button) {
                    if (category === 'All') {
                        button.innerHTML = `<i class="fas fa-list mr-2"></i>Kategori<i class="fas fa-chevron-down ml-2 text-xs"></i>`;
                        button.className = 'flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors';
                    } else {
                        button.innerHTML = `<i class=\"fas fa-list mr-2\"></i>${category}<i class=\"fas fa-chevron-down ml-2 text-xs\"></i>`;
                        button.className = 'flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-transparent bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white font-medium shadow-md hover:shadow-lg transition-all';
                    }
                }

                // Highlight dropdown item if dropdown exists
                const dropdown = document.getElementById(dropdownId);
                if (dropdown) {
                    const links = dropdown.querySelectorAll('a');
                    links.forEach(link => {
                        const linkCategory = link.textContent.trim();
                        if (linkCategory === category && category !== 'All') {
                            link.className = 'block px-4 py-2 text-sm text-white bg-gradient-to-r from-[#F81611] to-[#F0B100] rounded-lg font-medium shadow-sm';
                        } else {
                            link.className = 'block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg';
                        }
                    });
                }

                // Apply row filtering in the active container
                let tableBodyId = '';
                let rowClass = '';
                if (tableType === 'merchant') { tableBodyId = 'merchant-table-body'; rowClass = 'merchant-row'; }
                else if (tableType === 'merchandise') { tableBodyId = 'merchandise-table-body'; rowClass = 'merchandise-row'; }
                else if (tableType === 'telkom') { tableBodyId = 'telkom-table-body'; rowClass = 'telkom-row'; }

                let containerId = '';
                if (document.getElementById('section-all').classList.contains('hidden') === false) {
                    containerId = 'section-all';
                } else if (tableType === 'merchant') {
                    containerId = 'section-merchant';
                } else if (tableType === 'merchandise') {
                    containerId = 'section-merchandise';
                } else if (tableType === 'telkom') {
                    containerId = 'section-telkom';
                }
                const container = document.getElementById(containerId);
                const tableBody = container ? container.querySelector('#' + tableBodyId) : document.getElementById(tableBodyId);
                if (tableBody) {
                    const rows = tableBody.querySelectorAll(`.${rowClass}`);
                    rows.forEach(row => {
                        const rowCategory = row.getAttribute('data-category');
                        if (category === 'All' || rowCategory === category) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }
            }

            // Function to filter table based on category
            function filterTable(tableType, category) {
                // Check if clicking the same category - toggle to show all
                if (activeCategories[tableType] === category) {
                    category = 'All';
                    activeCategories[tableType] = null;
                } else {
                    activeCategories[tableType] = category;
                }
                
                // Close the dropdown after selection
                closeAllDropdowns();
                
                // Update the button text and style to show the selected category
                let buttonId = '';
                let dropdownId = '';
                if (document.getElementById('section-all').classList.contains('hidden') === false) {
                    // We are in the "All" section
                    if (tableType === 'merchant') {
                        buttonId = 'kategoriBtnAll1';
                        dropdownId = 'kategoriDropdownAll1';
                    } else if (tableType === 'merchandise') {
                        buttonId = 'kategoriBtnAll2';
                        dropdownId = 'kategoriDropdownAll2';
                    } else if (tableType === 'telkom') {
                        buttonId = 'kategoriBtnAll3';
                        dropdownId = 'kategoriDropdownAll3';
                    }
                } else {
                    // We are in a specific section
                    if (tableType === 'merchant') {
                        buttonId = 'kategoriBtnMerchant';
                        dropdownId = 'kategoriDropdownMerchant';
                    } else if (tableType === 'merchandise') {
                        buttonId = 'kategoriBtnMerchandise';
                        dropdownId = 'kategoriDropdownMerchandise';
                    } else if (tableType === 'telkom') {
                        buttonId = 'kategoriBtnTelkom';
                        dropdownId = 'kategoriDropdownTelkom';
                    }
                }
                
                const button = document.getElementById(buttonId);
                if (button) {
                    if (category === 'All') {
                        button.innerHTML = `<i class="fas fa-list mr-2"></i>Kategori<i class="fas fa-chevron-down ml-2 text-xs"></i>`;
                        button.className = 'flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors';
                    } else {
                        button.innerHTML = `<i class=\"fas fa-list mr-2\"></i>${category}<i class=\"fas fa-chevron-down ml-2 text-xs\"></i>`;
                        button.className = 'flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-transparent bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white font-medium shadow-md hover:shadow-lg transition-all';
                    }
                }
                
                // Update dropdown items styling
                const dropdown = document.getElementById(dropdownId);
                if (dropdown) {
                    const links = dropdown.querySelectorAll('a');
                    links.forEach(link => {
                        const linkCategory = link.textContent.trim();
                        if (linkCategory === category && category !== 'All') {
                            link.className = 'block px-4 py-2 text-sm text-white bg-gradient-to-r from-[#F81611] to-[#F0B100] rounded-lg font-medium shadow-sm';
                        } else {
                            link.className = 'block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg';
                        }
                    });
                }
                
                // Filter the table rows based on category
                let tableBodyId = '';
                let rowClass = '';
                
                if (tableType === 'merchant') {
                    tableBodyId = 'merchant-table-body';
                    rowClass = 'merchant-row';
                } else if (tableType === 'merchandise') {
                    tableBodyId = 'merchandise-table-body';
                    rowClass = 'merchandise-row';
                } else if (tableType === 'telkom') {
                    tableBodyId = 'telkom-table-body';
                    rowClass = 'telkom-row';
                }
                
                // Determine active container to avoid targeting hidden duplicates
                let containerId = '';
                if (document.getElementById('section-all').classList.contains('hidden') === false) {
                    containerId = 'section-all';
                } else if (tableType === 'merchant') {
                    containerId = 'section-merchant';
                } else if (tableType === 'merchandise') {
                    containerId = 'section-merchandise';
                } else if (tableType === 'telkom') {
                    containerId = 'section-telkom';
                }
                const container = document.getElementById(containerId);
                const tableBody = container ? container.querySelector('#' + tableBodyId) : document.getElementById(tableBodyId);
                if (tableBody) {
                    const rows = tableBody.querySelectorAll(`.${rowClass}`);
                    rows.forEach(row => {
                        const rowCategory = row.getAttribute('data-category');
                        if (category === 'All' || rowCategory === category) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }
            }

        </script>

        <!-- All Tables Section -->
        <div id="section-all" class="transition-all duration-300 opacity-100 translate-y-0">
            <!-- Merchant Table -->
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4">Merchant</h2>
            
            <!-- Merchant Controls -->
            <div class="flex items-center justify-between gap-4 mb-4">
                <div class="flex items-center space-x-3 flex-nowrap">
                    <!-- Kategori Dropdown -->
                    <div class="relative">
                        <button id="kategoriBtnAll1" onclick="toggleKategoriDropdownAll1()" class="flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-list mr-2"></i>
                            Kategori
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div id="kategoriDropdownAll1" class="hidden absolute left-0 mt-2 bg-white rounded-2xl shadow-2xl p-3 border border-gray-200 w-64 z-50">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'F&B'); return false;">F&B</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Entertain'); return false;">Entertain</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Vacation'); return false;">Vacation</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Shopping'); return false;">Shopping</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Beauty & Care'); return false;">Beauty & Care</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Telkomsel Packet'); return false;">Telkomsel Packet</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upload Button -->
                    <div class="relative">
                        <button type="button" onclick="toggleMerchantUploadModal()" class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-upload mr-2"></i>
                            Upload
                        </button>
                    </div>
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
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 mt-8 sm:mb-4">Merchandise</h2>
            
            <!-- Merchandise Controls -->
            <div class="flex items-center justify-between gap-4 mb-4">
                <div class="flex items-center space-x-3 flex-nowrap">
                    <!-- Kategori Dropdown -->
                    <div class="relative">
                        <button id="kategoriBtnAll2" onclick="toggleKategoriDropdownAll2()" class="flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-list mr-2"></i>
                            Kategori
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div id="kategoriDropdownAll2" class="hidden absolute left-0 mt-2 bg-white rounded-2xl shadow-2xl p-3 border border-gray-200 w-64 z-50">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'F&B'); return false;">F&B</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Entertain'); return false;">Entertain</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Vacation'); return false;">Vacation</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Shopping'); return false;">Shopping</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Beauty & Care'); return false;">Beauty & Care</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Telkomsel Packet'); return false;">Telkomsel Packet</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upload Button -->
                    <div class="relative">
                        <button type="button" onclick="toggleMerchantUploadModal()" class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-upload mr-2"></i>
                            Upload
                        </button>
                    </div>
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
            <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 mt-8 sm:mb-4">Telkom Packages</h2>
            
            <!-- Telkom Controls -->
            <div class="flex items-center justify-between gap-4 mb-4">
                <div class="flex items-center space-x-3 flex-nowrap">
                    <!-- Kategori Dropdown -->
                    <div class="relative">
                        <button id="kategoriBtnAll3" onclick="toggleKategoriDropdownAll3()" class="flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-list mr-2"></i>
                            Kategori
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div id="kategoriDropdownAll3" class="hidden absolute left-0 mt-2 bg-white rounded-2xl shadow-2xl p-3 border border-gray-200 w-64 z-50">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'F&B'); return false;">F&B</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Entertain'); return false;">Entertain</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Vacation'); return false;">Vacation</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Shopping'); return false;">Shopping</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Beauty & Care'); return false;">Beauty & Care</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Telkomsel Packet'); return false;">Telkomsel Packet</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upload Button -->
                    <div class="relative">
                        <button type="button" onclick="toggleMerchantUploadModal()" class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-upload mr-2"></i>
                            Upload
                        </button>
                    </div>
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
                    <!-- Kategori Dropdown -->
                    <div class="relative">
                        <button id="kategoriBtnMerchant" onclick="toggleKategoriDropdownMerchant()" class="flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-list mr-2"></i>
                            Kategori
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div id="kategoriDropdownMerchant" class="hidden absolute left-0 mt-2 bg-white rounded-2xl shadow-2xl p-3 border border-gray-200 w-64 z-50">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'F&B'); return false;">F&B</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Entertain'); return false;">Entertain</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Vacation'); return false;">Vacation</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Shopping'); return false;">Shopping</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Beauty & Care'); return false;">Beauty & Care</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchant', 'Telkomsel Packet'); return false;">Telkomsel Packet</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upload Button with File Input -->
                    <div class="relative">
                        <button type="button" onclick="toggleMerchantUploadModal()" class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-upload mr-2"></i>
                            Upload
                        </button>
                    </div>
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
                    <!-- Kategori Dropdown -->
                    <div class="relative">
                        <button id="kategoriBtnMerchandise" onclick="toggleKategoriDropdownMerchandise()" class="flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-list mr-2"></i>
                            Kategori
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div id="kategoriDropdownMerchandise" class="hidden absolute left-0 mt-2 bg-white rounded-2xl shadow-2xl p-3 border border-gray-200 w-64 z-50">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'F&B'); return false;">F&B</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Entertain'); return false;">Entertain</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Vacation'); return false;">Vacation</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Shopping'); return false;">Shopping</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Beauty & Care'); return false;">Beauty & Care</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('merchandise', 'Telkomsel Packet'); return false;">Telkomsel Packet</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upload Button with File Input -->
                    <div class="relative">
                        <button type="button" onclick="toggleMerchantUploadModal()" class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-upload mr-2"></i>
                            Upload
                        </button>
                        <input type="file" id="fileInputMerchandise" accept="image/*" class="hidden" onchange="handleFileUploadMerchandise(event)">
                    </div>
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
                    <!-- Kategori Dropdown -->
                    <div class="relative">
                        <button id="kategoriBtnTelkom" onclick="toggleKategoriDropdownTelkom()" class="flex items-center justify-between whitespace-nowrap min-w-[140px] px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-list mr-2"></i>
                            Kategori
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </button>
                        <div id="kategoriDropdownTelkom" class="hidden absolute left-0 mt-2 bg-white rounded-2xl shadow-2xl p-3 border border-gray-200 w-64 z-50">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'F&B'); return false;">F&B</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Entertain'); return false;">Entertain</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Vacation'); return false;">Vacation</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Shopping'); return false;">Shopping</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Beauty & Care'); return false;">Beauty & Care</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" onclick="filterTable('telkom', 'Telkomsel Packet'); return false;">Telkomsel Packet</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upload Button with File Input -->
                    <div class="relative">
                        <button type="button" onclick="toggleMerchantUploadModal()" class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-upload mr-2"></i>
                            Upload
                        </button>
                        <input type="file" id="fileInputTelkom" accept="image/*" class="hidden" onchange="handleFileUploadTelkom(event)">
                    </div>
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
    
    <!-- Merchant Upload Modal -->
    <div id="merchantUploadModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50" style="overflow-y: auto;">
        <div class="fixed inset-0 bg-black opacity-0 transition-opacity duration-300 ease-out"></div>
        <div class="relative bg-white rounded-xl shadow-lg w-full max-w-4xl max-h-[90vh] overflow-y-auto my-8 transform transition-all duration-300 ease-out scale-95 opacity-0">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Upload Merchant Data</h3>
                <button onclick="toggleMerchantUploadModal()" class="text-gray-500 hover:text-gray-700 transition-all duration-300 ease-out transform translate-y-2 opacity-0">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form id="merchantUploadFormElement" class="p-4 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Nama Merchant</label>
                        <input type="text" name="nama_merchant" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter merchant name">
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
                        <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Diskon</label>
                        <input type="text" name="diskon" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter discount">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">SKB</label>
                        <input type="text" name="skb" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="Enter SKB">
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
                        <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">End Date</label>
                        <input type="date" name="end_date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">CTA</label>
                        <input type="url" name="cta" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all duration-300 ease-out transform translate-y-2 opacity-0" placeholder="https://example.com">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Logo Merchant</label>
                        <div class="flex items-center space-x-2">
                            <input type="file" id="logoMerchantInput" name="logo_merchant" accept="image/*" class="hidden" onchange="previewImage(event, 'logoPreview')">
                            <button type="button" onclick="document.getElementById('logoMerchantInput').click()" class="px-3 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Choose File</button>
                            <span id="logoFileName" class="text-sm text-gray-500 transition-all duration-300 ease-out transform translate-y-2 opacity-0">No file chosen</span>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Images</label>
                        <div class="flex items-center space-x-2">
                            <input type="file" id="imagesMerchantInput" name="images[]" accept="image/*" multiple class="hidden" onchange="previewImages(event, 'imagesPreview')">
                            <button type="button" onclick="document.getElementById('imagesMerchantInput').click()" class="px-3 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Choose Files</button>
                            <span id="imagesCount" class="text-sm text-gray-500 transition-all duration-300 ease-out transform translate-y-2 opacity-0">No files chosen</span>
                        </div>
                        <div id="imagesPreview" class="mt-2 flex flex-wrap gap-2 transition-all duration-300 ease-out transform translate-y-2 opacity-0"></div>
                    </div>
                </div>
                
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button" onclick="toggleMerchantUploadModal()" class="px-4 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 transition-all duration-300 ease-out transform translate-y-2 opacity-0">Cancel</button>
                    <button type="submit" class="px-4 py-2 text-sm bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white rounded-lg hover:shadow-lg transition-all duration-300 ease-out transform translate-y-2 opacity-0">Upload</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Function to toggle merchant upload modal
        function toggleMerchantUploadModal() {
            const modal = document.getElementById('merchantUploadModal');
            const modalContent = modal.querySelector('div.relative');
            const backdrop = modal.querySelector('div.fixed');
            
            if (modal.classList.contains('hidden')) {
                // Show modal with transitions
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
                
                // Animate backdrop
                setTimeout(() => {
                    backdrop.style.opacity = '0.5';
                }, 10);
                
                // Animate modal content
                setTimeout(() => {
                    modalContent.style.transform = 'scale(1)';
                    modalContent.style.opacity = '1';
                }, 50);
                
                // Animate form elements with staggered delays
                const formElements = modalContent.querySelectorAll('h3, button, label, input, select, textarea, button.px-3, span, div#imagesPreview, button.px-4');
                formElements.forEach((el, index) => {
                    setTimeout(() => {
                        el.style.transform = 'translateY(0)';
                        el.style.opacity = '1';
                    }, 100 + (index * 30));
                });
            } else {
                // Hide modal with transitions
                
                // Animate form elements out
                const formElements = modalContent.querySelectorAll('h3, button, label, input, select, textarea, button.px-3, span, div#imagesPreview, button.px-4');
                formElements.forEach((el, index) => {
                    setTimeout(() => {
                        el.style.transform = 'translateY(10px)';
                        el.style.opacity = '0';
                    }, index * 20);
                });
                
                // Animate modal content
                setTimeout(() => {
                    modalContent.style.transform = 'scale(0.95)';
                    modalContent.style.opacity = '0';
                }, 100);
                
                // Animate backdrop
                setTimeout(() => {
                    backdrop.style.opacity = '0';
                }, 150);
                
                // Hide modal completely after animations
                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = ''; // Restore scrolling
                    
                    // Reset form when closing
                    const form = document.getElementById('merchantUploadFormElement');
                    form.reset();
                    document.getElementById('logoPreview').innerHTML = '<div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>';
                    document.getElementById('imagesPreview').innerHTML = '';
                    document.getElementById('logoFileName').textContent = 'No file chosen';
                    document.getElementById('imagesCount').textContent = 'No files chosen';
                    
                    // Reset form element positions
                    formElements.forEach(el => {
                        el.style.transform = 'translateY(10px)';
                        el.style.opacity = '0';
                    });
                    modalContent.style.transform = 'scale(0.95)';
                    modalContent.style.opacity = '0';
                    backdrop.style.opacity = '0';
                }, 400);
            }
        }
        
        // Close modal when clicking outside
        document.getElementById('merchantUploadModal').addEventListener('click', function(event) {
            if (event.target === this) {
                toggleMerchantUploadModal();
            }
        });
    </script>
</body>
</html>