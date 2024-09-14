<div class="hidden sm:flex flex-col w-64 bg-white h-screen">
  <div class="overflow-y-auto overflow-x-hidden flex-grow">
    <ul class="flex flex-col py-4 space-y-1">
      <li class="px-5">
        <div class="flex flex-row items-center h-8">
          <div class="text-sm font-light tracking-wide text-gray-500">Carwash Center</div>
        </div>
      </li>
      <li>
        <a href="{{ route('dashboard.home') }}" @class(['relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 border-l-4 hover:border-indigo-500 hover:text-indigo-500 pr-6', 'border-indigo-500 bg-gray-50' => $active == 'dashboard', 'border-transparent' => $active != 'dashboard'])>
          <span @class(['inline-flex justify-center items-center ml-4 hover:text-indigo-500', 'text-indigo-500' => $active == 'dashboard'])>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
          </span>
          <span @class(['ml-2 text-sm tracking-wide truncate font-semibold', 'text-indigo-500' => $active == 'dashboard'])>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ route('service.home') }}" @class(['relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 border-l-4 hover:border-indigo-500 hover:text-indigo-500 pr-6', 'border-indigo-500 bg-gray-50' => $active == 'services', 'border-transparent' => $active != 'services'])>
            <span @class(['inline-flex justify-center items-center ml-4 hover:text-indigo-500', 'text-indigo-500' => $active == 'services'])>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
          </span>
          <span @class(['ml-2 text-sm tracking-wide truncate font-semibold', 'text-indigo-500' => $active == 'services'])>Services</span>
        </a>
      </li>
      <li>
        <a href="{{ route('customer.home') }}" @class(['relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 border-l-4 hover:border-indigo-500 hover:text-indigo-500 pr-6', 'border-indigo-500 bg-gray-50' => $active == 'customers', 'border-transparent' => $active != 'customers'])>
            <span @class(['inline-flex justify-center items-center ml-4 hover:text-indigo-500', 'text-indigo-500' => $active == 'customers'])>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"></path></svg>
          </span>
          <span @class(['ml-2 text-sm tracking-wide truncate font-semibold', 'text-indigo-500' => $active == 'customers'])>Customers</span>
        </a>
      </li>
    </ul>
  </div>
  <div>
</div>
</div>

<div class="mt-4 px-4 sm:hidden w-full flex justify-center items-center">
    <a href="{{ route('dashboard.home') }}" @class(['relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 border-l-4 hover:border-indigo-500 hover:text-indigo-500 pr-6', 'border-indigo-500 bg-gray-50' => $active == 'dashboard', 'border-transparent' => $active != 'dashboard'])>
      <span @class(['inline-flex justify-center items-center ml-4 hover:text-indigo-500', 'text-indigo-500' => $active == 'dashboard'])>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
      </span>
      <span @class(['ml-2 text-sm tracking-wide truncate font-semibold', 'text-indigo-500' => $active == 'dashboard'])>Dashboard</span>
    </a>
    <a href="{{ route('service.home') }}" @class(['relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 border-l-4 hover:border-indigo-500 hover:text-indigo-500 pr-6', 'border-indigo-500 bg-gray-50' => $active == 'services', 'border-transparent' => $active != 'services'])>
        <span @class(['inline-flex justify-center items-center ml-4 hover:text-indigo-500', 'text-indigo-500' => $active == 'services'])>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
      </span>
      <span @class(['ml-2 text-sm tracking-wide truncate font-semibold', 'text-indigo-500' => $active == 'services'])>Services</span>
    </a>
    <a href="{{ route('customer.home') }}" @class(['relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 border-l-4 hover:border-indigo-500 hover:text-indigo-500 pr-6', 'border-indigo-500 bg-gray-50' => $active == 'customers', 'border-transparent' => $active != 'customers'])>
        <span @class(['inline-flex justify-center items-center ml-4 hover:text-indigo-500', 'text-indigo-500' => $active == 'customers'])>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"></path></svg>
      </span>
      <span @class(['ml-2 text-sm tracking-wide truncate font-semibold', 'text-indigo-500' => $active == 'customers'])>Customers</span>
    </a>
</div>
