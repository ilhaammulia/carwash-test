<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Customer | Carwash</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="font-sans antialiased">
        <main class="max-w-screen-2xl mx-auto">
            <div class="min-h-screen flex flex-col sm:flex-row antialiased text-gray-800">
                <x-sidebar active="customers" />
                <div class="w-full p-8 bg-gray-50">
                    <div class="w-full mt-8">
                        <x-alert />
                        <form action="{{ route('customer.update', $customer->id) }}" method="post" class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        @csrf
                          <!-- Header -->
                          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <div>
                              <h2 class="text-xl font-semibold text-gray-800">
                                Edit Customer
                              </h2>
                              <p class="text-sm text-gray-600">
                                Edit your customer
                              </p>
                            </div>
                          </div>

                          <!-- Form -->
                          <div class="flex flex-col gap-4 mt-2 space-y-3 p-4">
                              <input type="text" name="name" value="{{ $customer->name }}" class="py-4 px-3 pe-11 block w-full border-gray-500 shadow-sm text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none" placeholder="Customer Name">
                              <input type="text" name="phone" value="{{ $customer->phone }}" class="py-4 px-3 pe-11 block w-full border-gray-500 shadow-sm text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none" placeholder="Phone Number">
                          </div>
                          <!-- End Form -->

                          <!-- Footer -->
                          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                            <div>
                              <div class="inline-flex gap-x-2">
                                <a href="{{ route('customer.home') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                  Cancel
                                </a>

                                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-indigo-500 text-gray-100 shadow-sm hover:bg-indigo-600 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                  Submit
                                </button>
                              </div>
                            </div>
                          </div>
                          <!-- End Footer -->
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
