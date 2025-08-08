<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>ATStekno</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

    .font {
        font-family: "Outfit", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
</style>

<body class="font bg-[#ececec]">
    <div class="h-[70px] bg-white flex justify-between pr-[20px]">
        <div class="flex items-center">
            <a href="">
                <img src="/images/logoats.png" width="270px" alt="">
            </a>
        </div>

        <div class="flex items-center">
            <ul class="flex space-x-4 font-medium">
                <!-- Dashboard -->
                <li>
                    <a href="#"
                        class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Dashboard</a>
                </li>

                <!-- Product List Dropdown -->
                <li class="relative group">
                    <a href="#"
                        class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                        Product List
                    </a>
                    <ul
                        class="absolute left-0 mt-2 w-40 bg-white shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 z-100">
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Switches</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Indicators</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Contactors</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Contactors</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Contactors</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Contactors</a></li>
                    </ul>
                </li>

                <!-- Brands Dropdown -->
                <li class="relative group">
                    <a href="#"
                        class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                        Brands
                    </a>
                    <ul
                        class="absolute left-0 mt-2 w-40 bg-white shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 z-100">
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Schneider</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Omron</a></li>
                        <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Mitsubishi</a></li>
                    </ul>
                </li>

                <!-- Menu Lainnya -->
                <li><a href="#"
                        class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Price
                        List</a></li>
                <li><a href="#"
                        class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Blog
                        Post</a></li>
                <li><a href="#"
                        class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Lowongan
                        Kerja</a></li>
                <li><a href="#"
                        class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Hubungi
                        Kami</a></li>
                <li><a href="#"
                        class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Tentang
                        Kami</a></li>
                <li><a href="#"
                        class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Profile</a>
                </li>
            </ul>
        </div>

    </div>


    <div class="bg-white flex justify-between mt-10">
        <div class="w-[25%] flex-shrink:0 flex justify-center pt-[75px]">
            <p class="text-xl bg-amber-200 font-bold">PRODUCT CATEGORIES</p>
        </div>
        <div class="w-[50%] flex-shrink:0">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="images/1.webp"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="images/2.webp"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a href="">

                            <img src="images/3.webp"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                    </div>
                    </a>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="images/4.webp"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="images/5.webp"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div
                    class="absolute z-30 hidden lg:flex -translate-x-1/2 lg:bottom-[80px]  sm: left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="w-[25%] flex-shrink:0 flex justify-center pt-[75px]">
            <p class="text-xl font-bold">TOP RATED PRODUCT</p>
        </div>
    </div>
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</html>
