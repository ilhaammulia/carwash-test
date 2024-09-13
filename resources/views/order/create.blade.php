<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Order | Carwash</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="font-sans antialiased">
        <main class="max-w-screen-2xl mx-auto">
            <div class="min-h-screen flex flex-col sm:flex-row antialiased text-gray-800">
                <x-sidebar active="dashboard" />
                <div class="w-full p-8 bg-gray-50">
                    <div class="w-full mt-8">
                        <x-alert />
                        <form action="{{ route('order.store') }}" method="post" class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        @csrf
                          <!-- Header -->
                          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <div>
                              <h2 class="text-xl font-semibold text-gray-800">
                                New Order
                              </h2>
                              <p class="text-sm text-gray-600">
                                Create your new order
                              </p>
                            </div>
                          </div>

                          <!-- Form -->
                          <div class="flex flex-col gap-4 mt-2 space-y-3 p-4">
                              <select name="customer_id" class="py-4 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option disabled selected>Select Customer</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                              </select>
                              <select name="service_id" class="py-4 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option disabled selected>Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }} (Rp{{ $service->price }})</option>
                                @endforeach
                              </select>
                          </div>

                          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                            <div>
                              <div class="inline-flex gap-x-2">
                                <a href="{{ route('dashboard.home') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                  Cancel
                                </a>

                                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-indigo-500 text-gray-100 shadow-sm hover:bg-indigo-600 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                  Submit
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
