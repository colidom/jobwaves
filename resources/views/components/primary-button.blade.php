<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-sky-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-700 focus:bg-sky-700 dark:focus:bg-sky active:bg-sky-900 dark:active:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 dark:focus:ring-offset-sky-200 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
