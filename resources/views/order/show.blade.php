<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>View Order | Carwash</title>

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
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                            <div class="size-full overflow-x-hidden overflow-y-auto pointer-events-none">
                              <div class="w-full">
                                <div class="relative flex flex-col bg-white shadow-lg rounded-xl pointer-events-auto">
                                  <div class="relative overflow-hidden min-h-32 text-center rounded-t-xl bg-indigo-500">

                                    <figure class="absolute inset-x-0 bottom-0 -mb-px">
                                      <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                                        <path fill="currentColor" class="fill-white" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                                      </svg>
                                    </figure>
                                  </div>

                                  <div class="relative z-10 -mt-12">
                                    <!-- Icon -->
                                    <span class="mx-auto flex justify-center items-center size-[62px] rounded-full border border-gray-200 bg-white text-gray-700 shadow-sm">
                                      <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                                        <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                                      </svg>
                                    </span>
                                  </div>

                                  <div class="p-4 sm:p-7 overflow-y-auto">
                                    <div class="text-center">
                                      <h3 class="text-lg font-semibold text-gray-800">
                                        Invoice from Carwash
                                      </h3>
                                      <p class="text-sm text-gray-500">
                                        Invoice #{{ $order->id }}
                                      </p>
                                    </div>

                                    <div class="mt-5 sm:mt-10 grid grid-cols-2 sm:grid-cols-4 gap-5">
                                        <div>
                                          <span class="block text-xs uppercase text-gray-500">Customer Name:</span>
                                          <span class="block text-sm font-medium text-gray-800">{{ $order->customer_name }}</span>
                                        </div>

                                        <div>
                                          <span class="block text-xs uppercase text-gray-500">Service:</span>
                                          <span class="block text-sm font-medium text-gray-800">{{ $order->service_name }}</span>
                                        </div>

                                        <div>
                                            <span class="block text-xs uppercase text-gray-500">Total Price:</span>
                                            <span class="block text-sm font-medium text-gray-800">Rp{{ $order->total_price }}</span>
                                        </div>

                                        <div>
                                            <span class="block text-xs uppercase text-gray-500">Created At:</span>
                                            <span class="block text-sm font-medium text-gray-800">{{ $order->created_at }}</span>
                                        </div>
                                    </div>

                                    <div class="mt-5 sm:mt-10">
                                      <h4 class="text-xs font-semibold uppercase text-gray-800">Summary</h4>

                                      <ul class="mt-3 flex flex-col">
                                        <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg">
                                          <div class="flex items-center justify-between w-full">
                                            <span>Price</span>
                                            <span>Rp{{ $order->price }}</span>
                                          </div>
                                        </li>
                                        <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg">
                                          <div class="flex items-center justify-between w-full">
                                            <span>Discount Price</span>
                                            <span class="text-green-500">-Rp{{ $order->discount_price }}</span>
                                          </div>
                                        </li>
                                        <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-semibold bg-gray-50 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg">
                                          <div class="flex items-center justify-between w-full">
                                            <span>Total Price</span>
                                            <span>Rp{{ $order->total_price }}</span>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>

                                    <div class="mt-5 flex justify-end gap-x-2">
                                      <a href="{{ route('dashboard.home') }}" class="py-2 px-6 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                                        Back
                                      </a>
                                      @if($order->status == 'pending')
                                      <a href="{{ route('order.payment', $order->id) }}" class="py-2 px-6 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z"></path>
                                          <path clip-rule="evenodd" fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z"></path></svg>
                                        Pay
                                      </a>
                                      @endif
                                    </div>

                                    <div class="mt-5 sm:mt-10">
                                      <p class="text-sm text-gray-500">If you have any questions, please contact us at <a class="inline-flex items-center gap-x-1.5 text-indigo-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">admin@carwash.com</a> or call at <a class="inline-flex items-center gap-x-1.5 text-indigo-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="tel:+1898345492">+62 85772277338</a></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
