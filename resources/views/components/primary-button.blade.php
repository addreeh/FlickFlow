<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#e6030b] border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-redv-500 focus:ring-offset-2 hover:bg-[#e6030b]  transform hover:scale-110 transition-all']) }}>
    {{ $slot }}
</button>
