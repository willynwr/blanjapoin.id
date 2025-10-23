<div class="relative">
    <button onclick="toggleDateFilter('{{ $filterId }}')" class="flex items-center px-4 py-2 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
        <i class="fas fa-calendar-alt mr-2"></i>
        Date
    </button>
    <div id="{{ $filterId }}" class="hidden absolute right-0 mt-2 bg-white rounded-xl shadow-xl p-4 border border-gray-200 w-80 z-10">
        <!-- Period Selection -->
        <div class="mb-4 pb-3 border-b border-gray-200">
            <label class="text-xs font-medium text-gray-600 mb-2 block">Start - End Periode</label>
            <div class="flex items-center gap-2">
                <input type="date" class="flex-1 px-3 py-1.5 text-xs rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                <span class="text-gray-400 text-xs">to</span>
                <input type="date" class="flex-1 px-3 py-1.5 text-xs rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
        </div>
        
        <!-- Calendar Header -->
        <div class="flex items-center justify-between mb-4">
            <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                <i class="fas fa-chevron-left text-gray-600"></i>
            </button>
            <div class="flex items-center gap-2">
                <select class="text-base font-semibold text-gray-800 border-0 focus:outline-none focus:ring-0 cursor-pointer bg-transparent">
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option selected>December</option>
                </select>
                <select class="text-base font-semibold text-gray-800 border-0 focus:outline-none focus:ring-0 cursor-pointer bg-transparent">
                    <option>2023</option>
                    <option selected>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                </select>
            </div>
            <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                <i class="fas fa-chevron-right text-gray-600"></i>
            </button>
        </div>
        
        <!-- Calendar Days Header -->
        <div class="calendar-grid mb-2">
            <div class="text-center text-xs font-medium text-gray-500 py-2">M</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">T</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">W</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">T</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">F</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">S</div>
            <div class="text-center text-xs font-medium text-gray-500 py-2">S</div>
        </div>
        
        <!-- Calendar Days -->
        <div class="calendar-grid mb-4">
            <!-- Empty cells for alignment -->
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            
            <!-- Days -->
            <div class="calendar-day text-sm text-gray-700">1</div>
            <div class="calendar-day text-sm text-gray-700">2</div>
            <div class="calendar-day text-sm text-gray-700">3</div>
            <div class="calendar-day text-sm text-gray-700">4</div>
            <div class="calendar-day text-sm text-gray-700">5</div>
            <div class="calendar-day text-sm text-gray-700">6</div>
            <div class="calendar-day text-sm text-gray-700">7</div>
            <div class="calendar-day text-sm text-gray-700">8</div>
            <div class="calendar-day text-sm text-gray-700">9</div>
            <div class="calendar-day text-sm text-gray-700">10</div>
            <div class="calendar-day text-sm text-gray-700">11</div>
            <div class="calendar-day text-sm text-gray-700">12</div>
            <div class="calendar-day text-sm text-gray-700">13</div>
            <div class="calendar-day text-sm text-gray-700">14</div>
            <div class="calendar-day text-sm text-gray-700">15</div>
            <div class="calendar-day text-sm text-gray-700">16</div>
            <div class="calendar-day text-sm text-gray-700">17</div>
            <div class="calendar-day text-sm text-gray-700">18</div>
            <div class="calendar-day text-sm text-gray-700">19</div>
            <div class="calendar-day text-sm text-gray-700">20</div>
            <div class="calendar-day text-sm text-gray-700">21</div>
            <div class="calendar-day text-sm text-gray-700">22</div>
            <div class="calendar-day text-sm text-gray-700">23</div>
            <div class="calendar-day selected text-sm font-semibold">24</div>
            <div class="calendar-day text-sm text-gray-700">25</div>
            <div class="calendar-day text-sm text-gray-700">26</div>
            <div class="calendar-day text-sm text-gray-700">27</div>
            <div class="calendar-day text-sm text-gray-700">28</div>
            <div class="calendar-day text-sm text-gray-700">29</div>
            <div class="calendar-day text-sm text-gray-700">30</div>
            <div class="calendar-day text-sm text-gray-700">31</div>
        </div>
        
        <!-- Action Buttons -->
        <div class="flex gap-2 pt-3 border-t border-gray-100">
            <button class="flex-1 px-4 py-2 text-sm rounded-lg bg-gradient-to-r from-[#F81611] to-[#F0B100] text-white font-medium hover:shadow-lg transition-all">
                Apply
            </button>
            <button onclick="toggleDateFilter('{{ $filterId }}')" class="px-4 py-2 text-sm rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                Cancel
            </button>
        </div>
    </div>
</div>
