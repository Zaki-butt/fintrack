<!-- Navbar -->
<div class="h-16 bg-white border-b border-gray-200 fixed top-0 right-0 left-64 z-10">
  <div class="h-full px-6 flex items-center justify-between">

    <!-- Search Bar -->
    <div class="flex-1 max-w-xl">
      <div class="relative">
        <!-- Search Icon -->
        <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" width="20" height="20" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>

        <!-- Input -->
        <input type="text" placeholder="Search transactions, users..." class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg 
          focus:outline-none focus:ring-2 focus:ring-[#3B82F6] focus:border-transparent">
      </div>
    </div>

    <!-- Right Section -->
    <div class="flex items-center gap-4">

      <!-- Notification Bell -->
      <button class="relative p-2 hover:bg-gray-50 rounded-lg transition-colors">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="text-gray-600">
          <path d="M18 8a6 6 0 10-12 0c0 7-3 9-3 9h18s-3-2-3-9"></path>
          <path d="M13.73 21a2 2 0 01-3.46 0"></path>
        </svg>
        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
      </button>

      <!-- User Dropdown -->
      <div class="relative group">
        <button class="flex items-center gap-3 hover:bg-gray-50 rounded-lg px-3 py-2 transition-colors">

          <!-- Avatar -->
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop"
            class="h-8 w-8 rounded-full" />

          <!-- User Info -->
          <div class="text-left">
            <p class="text-gray-900 text-sm">
              {{ Auth::user()->name }}
            </p>
            <p class="text-gray-500 text-xs">
              {{ Auth::user()->getRoleNames()->first() ?? 'User' }}
            </p>
          </div>

          <!-- Chevron -->
          <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="text-gray-400">
            <polyline points="4 6 8 10 12 6"></polyline>
          </svg>
        </button>

        <!-- Dropdown menu -->
        <div
          class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-100 shadow-lg rounded-md p-2 group-hover:block z-50">
          <p class="px-3 py-2 text-gray-500 text-xs">My Account</p>
          <hr>

          <a href="{{ route('profile.edit') }}" class="block px-3 py-2 hover:bg-gray-100 rounded-md">
            Profile
          </a>

          <a href="#" class="block px-3 py-2 hover:bg-gray-100 rounded-md">
            Settings
          </a>

          <hr>

          <!-- Logout -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-3 py-2 hover:bg-gray-100 rounded-md">
              Log out
            </button>
          </form>
        </div>
      </div>


    </div>
  </div>
</div>