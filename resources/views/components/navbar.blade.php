<!-- NAVBAR (unchanged except minor z fix on dropdowns) -->
<div class="h-[70px] backdrop-blur-xl border-b-[1px] border-white flex justify-between items-center pr-[5%] shadow-md">
    <div class="flex items-center">
        <a href="">
            <img src="/images/logoats.png" width="290px" alt="">
        </a>
    </div>

    <div class="flex items-center">
        <ul class="flex space-x-16 font-medium">
            <!-- Home -->
            <li>
                <a href="#"
                    class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Home</a>
            </li>

            <!-- Product List Dropdown -->
            <li class="relative group">
                <a href="#"
                    class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                    Product List
                </a>
                <ul
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 z-[1000]">
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">ACB</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">MCB</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">MCCB</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Capacitor</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Contactor</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Inverter</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Sensor</a></li>
                </ul>
            </li>

            <!-- Brands Dropdown -->
            <li class="relative group">
                <a href="#"
                    class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">
                    Brands
                </a>
                <ul
                    class="absolute left-0 mt-2 w-40 bg-white shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 z-[1000]">
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Schneider</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Fort</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">DV Electric</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">GAE</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Mitsubishi</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Supreme Cable</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Jembo Cable</a></li>
                    <li><a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Autonics</a></li>
                </ul>
            </li>

            <li><a href="#"
                    class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Tentang Kami</a></li>
            <li><a href="#"
                    class="hover:text-red-600 inline-block after:block after:h-[2px] after:bg-red-600 after:scale-x-0 after:origin-left after:transition-transform after:duration-300 hover:after:scale-x-100">Hubungi
                    Kami</a></li>
        </ul>
    </div>

    <!-- Hamburger -->
    <div class="shrink-0">
        <a href="#" id="menuToggle" class="group" aria-controls="sidebar" aria-expanded="false" role="button">
            <svg viewBox="-0.5 0 25 25" width="30px" height="30px" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 12.32H22" class="stroke-black group-hover:stroke-red-500 transition-colors duration-300"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M2 18.32H22" class="stroke-black group-hover:stroke-red-500 transition-colors duration-300"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M2 6.32001H22" class="stroke-black group-hover:stroke-red-500 transition-colors duration-300"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </a>
    </div>
</div>

<!-- ⬇️ Move these OUTSIDE the navbar container -->

<!-- Backdrop -->
<div id="backdrop" class="fixed inset-0 bg-black/40 opacity-0 pointer-events-none transition-opacity z-40"></div>

<!-- Right sidebar -->
<aside id="sidebar"
    class="fixed top-0 right-0 h-full w-80 max-w-[90vw] bg-white shadow-xl translate-x-full transition-transform duration-300 z-50"
    role="dialog" aria-modal="true" aria-labelledby="sidebarTitle">
    <div class="flex items-center justify-between px-4 py-3 border-b border-red-600">
        <h2 id="sidebarTitle" class="text-base font-semibold">Menu</h2>
        <button id="closeSidebar" class="p-2 rounded hover:bg-gray-100" aria-label="Close menu">✕</button>
    </div>
    <nav class="p-4 space-y-2">
        <a href="#" class="block px-3 py-2 rounded hover:bg-gray-100">Price List</a>
        <a href="#" class="block px-3 py-2 rounded hover:bg-gray-100">Blog Post</a>
        <a href="#" class="block px-3 py-2 rounded hover:bg-gray-100">Career</a>
        <a href="#" class="block px-3 py-2 rounded hover:bg-gray-100">Profile</a>
    </nav>
</aside>


<script>
    const btn = document.getElementById('menuToggle');
    const closeBtn = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('sidebar');
    const backdrop = document.getElementById('backdrop');

    function openSidebar() {
        sidebar.classList.remove('translate-x-full');
        backdrop.classList.remove('pointer-events-none');
        backdrop.classList.add('opacity-100');
        btn.setAttribute('aria-expanded', 'true');
        closeBtn?.focus();
    }

    function closeSidebar() {
        sidebar.classList.add('translate-x-full');
        backdrop.classList.add('pointer-events-none');
        backdrop.classList.remove('opacity-100');
        btn.setAttribute('aria-expanded', 'false');
    }

    btn.addEventListener('click', (e) => {
        e.preventDefault();
        openSidebar();
    });
    backdrop.addEventListener('click', closeSidebar);
    closeBtn.addEventListener('click', closeSidebar);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeSidebar();
    });
</script>
