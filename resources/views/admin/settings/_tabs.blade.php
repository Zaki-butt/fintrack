<div class="border-b mb-6 flex gap-6 text-sm font-medium">
    <a href="{{ route('admin.settings.general') }}"
       class="pb-2 {{ request()->routeIs('admin.settings.general') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-500' }}">
        General
    </a>

    <a href="{{ route('admin.settings.finance') }}"
       class="pb-2 {{ request()->routeIs('admin.settings.finance') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-500' }}">
        Finance
    </a>

    <a href="{{ route('admin.settings.billing') }}"
       class="pb-2 {{ request()->routeIs('admin.settings.billing') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-500' }}">
        Billing
    </a>

    <a href="{{ route('admin.settings.stripe') }}"
       class="pb-2 {{ request()->routeIs('admin.settings.stripe') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-500' }}">
        Stripe
    </a>

    <a href="{{ route('admin.settings.security') }}"
       class="pb-2 {{ request()->routeIs('admin.settings.security') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-500' }}">
        Security
    </a>

    <a href="{{ route('admin.settings.system') }}"
       class="pb-2 {{ request()->routeIs('admin.settings.system') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-600 hover:text-blue-500' }}">
        System
    </a>
</div>
