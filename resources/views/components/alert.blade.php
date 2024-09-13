@if (session("fail"))
<div role="alert" class="mb-4">
  <div class="bg-red-500 text-white font-bold rounded-t-md px-4 py-2">
    Error
  </div>
  <div class="border border-t-0 border-red-400 rounded-b-md bg-red-100 px-4 py-3 text-red-700">
    <p>{{ session("fail") }}</p>
  </div>
</div>
@endif

@if (session("message"))
<div role="alert" class="mb-4">
  <div class="bg-green-500 text-white font-bold rounded-t-md px-4 py-2">
    Success
  </div>
  <div class="border border-t-0 border-green-400 rounded-b-md bg-green-100 px-4 py-3 text-green-700">
    <p>{{ session("message") }}</p>
  </div>
</div>
@endif
