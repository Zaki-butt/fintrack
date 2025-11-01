<!-- Sidebar -->
<div class="w-64 bg-white border-r border-gray-200 h-screen fixed left-0 top-0">

  <!-- ✅ Logo Section -->
  <div class="p-6 flex items-center gap-3">
    <a href="{{ route('home') }}" class="flex items-center gap-2">
      <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
        <span class="text-white text-xl">💰</span>
      </div>
      <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent font-semibold text-lg">
        FinanceTracker
      </span>
    </a>
  </div>

  <nav class="px-4 space-y-1">

    <!-- Dashboard -->
    <a href="{{ route('dashboard') }}" 
       class="w-full flex items-center gap-3 px-4 py-3 rounded-lg 
       {{ request()->routeIs('dashboard') ? 'bg-[#3B82F6] text-white' : 'text-gray-600 hover:bg-gray-50' }}">
      <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round">
        <rect x="3" y="3" width="7" height="7"></rect>
        <rect x="14" y="3" width="7" height="7"></rect>
        <rect x="14" y="14" width="7" height="7"></rect>
        <rect x="3" y="14" width="7" height="7"></rect>
      </svg>
      <span>Dashboard</span>
    </a>

    <!-- Income -->
    <button class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
      <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round">
        <path d="M12 19V5"></path>
        <path d="M5 12l7-7 7 7"></path>
      </svg>
      <span>Income</span>
    </button>

    <!-- Expenses -->
    <button class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
      <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round">
        <path d="M12 5v14"></path>
        <path d="M19 12l-7 7-7-7"></path>
      </svg>
      <span>Expenses</span>
    </button>

    <!-- Subscriptions -->
    <button class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
      <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round">
        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
        <line x1="2" y1="11" x2="22" y2="11"></line>
      </svg>
      <span>Subscriptions</span>
    </button>

    @role('admin')
    <!-- Users -->
    <a href="{{ route('admin.users.index') }}" 
       class="w-full flex items-center gap-3 px-4 py-3 rounded-lg 
       {{ request()->routeIs('admin.users.*') ? 'bg-[#3B82F6] text-white' : 'text-gray-600 hover:bg-gray-50' }}">
      <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round">
        <path d="M20 21v-2a4 4 0 00-3-3.87"></path>
        <path d="M8 21v-2a4 4 0 013-3.87"></path>
        <circle cx="12" cy="7" r="4"></circle>
      </svg>
      <span>Users</span>
    </a>

    <!-- Settings -->
    <div x-data="{ open: {{ request()->routeIs('admin.settings.*') ? 'true' : 'false' }} }">
      <button @click="open = !open"
          class="w-full flex items-center justify-between px-4 py-3 rounded-lg 
          {{ request()->routeIs('admin.settings.*') ? 'bg-[#3B82F6] text-white' : 'text-gray-600 hover:bg-gray-50' }}">
          
          <div class="flex items-center gap-3">
              <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path
                      d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06-1.45 1.45-.06-.06a1.65 1.65 0 00-1.82-.33 
                      1.65 1.65 0 00-1 1.51V21h-2v-.21a1.65 1.65 0 00-1-1.51 1.65 1.65 0 00-1.82.33l-.06.06
                      -1.45-1.45.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3v-2h.21a1.65 1.65 
                      0 001.51-1 1.65 1.65 0 00-.33-1.82l-.06-.06 1.45-1.45.06.06a1.65 1.65 0 001.82.33h.21V3h2v.21
                      c0 .7.39 1.33 1 1.51a1.65 1.65 0 001.82-.33l.06-.06 1.45 1.45-.06.06a1.65 1.65 0 00-.33 1.82
                      c.18.61.81 1 1.51 1H21v2h-.21a1.65 1.65 0 00-1.39 1z">
                  </path>
              </svg>
              <span>Settings</span>
          </div>

          <svg :class="{'rotate-180': open}" class="w-4 h-4 transform transition-transform"
              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
      </button>

      <!-- Dropdown -->
      <div x-show="open" x-cloak class="ml-10 mt-2 flex flex-col gap-1">
          <a href="{{ route('admin.settings.general') }}" 
             class="py-2 text-sm rounded {{ request()->routeIs('admin.settings.general') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-500' }}">
             General
          </a>
          <a href="{{ route('admin.settings.finance') }}" 
             class="py-2 text-sm rounded {{ request()->routeIs('admin.settings.finance') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-500' }}">
             Finance
          </a>
          <a href="{{ route('admin.settings.billing') }}" 
             class="py-2 text-sm rounded {{ request()->routeIs('admin.settings.billing') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-500' }}">
             Billing
          </a>
          <a href="{{ route('admin.settings.stripe') }}" 
             class="py-2 text-sm rounded {{ request()->routeIs('admin.settings.stripe') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-500' }}">
             Stripe
          </a>
          <a href="{{ route('admin.settings.security') }}" 
             class="py-2 text-sm rounded {{ request()->routeIs('admin.settings.security') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-500' }}">
             Security
          </a>
          <a href="{{ route('admin.settings.system') }}" 
             class="py-2 text-sm rounded {{ request()->routeIs('admin.settings.system') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-500' }}">
             System
          </a>
      </div>
    </div>
    @endrole

  </nav>
</div>
