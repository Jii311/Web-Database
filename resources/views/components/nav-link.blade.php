<a {{ $attributes }}
    class="{{ $active ? ' text-blue-700' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
    aria-current={{ $active ? 'page' : false }}>{{ $slot }}</a>
