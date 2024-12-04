<a {{ $attributes }}
    class="flex items-center w-full p-2 text-base font-medium text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
    aria-current={{ $active ? 'page' : false }}>{{ $slot }}</a>
