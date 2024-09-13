<div class="flex flex-col bg-white border shadow-sm rounded-xl">
    <div class="p-4 md:p-5 flex justify-between gap-x-3">
        <div>
            <p class="text-xs uppercase tracking-wide text-gray-500">
            {{ $title }}
            </p>
            <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                {{ $value }}
            </h3>
            </div>
        </div>
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-indigo-600 text-white rounded-full">
            {{ $slot }}
        </div>
    </div>
</div>
