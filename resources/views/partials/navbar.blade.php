@push('style')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('script')
    <script>
        // Fungsi untuk mengganti tema dan logo
        function toggleDarkMode() {
            const html = document.querySelector('html');
            const logoImg = document.getElementById('logo-img');

            // Toggle class 'dark' pada elemen <html>
            html.classList.toggle('dark');

            if (html.classList.contains('dark')) {
                logoImg.src = '{{ asset('logo_light.png') }}'; // Ganti dengan logo untuk mode dark
                localStorage.setItem('theme', 'dark'); // Simpan preferensi
            } else {
                logoImg.src = '{{ asset('logo-dark.png') }}'; // Ganti dengan logo untuk mode light
                localStorage.setItem('theme', 'light'); // Simpan preferensi
            }
        }

        // Fungsi untuk mengatur tema saat halaman dimuat
        function initializeTheme() {
            const html = document.querySelector('html');
            const logoImg = document.getElementById('logo-img');
            const savedTheme = localStorage.getItem('theme');

            // Cek preferensi tersimpan dan sesuaikan tema
            if (savedTheme === 'dark') {
                html.classList.add('dark');
                logoImg.src = '{{ asset('logo_light.png') }}'; // Set logo untuk mode dark
            } else {
                html.classList.remove('dark');
                logoImg.src = '{{ asset('logo-dark.png') }}'; // Set logo untuk mode light
            }
        }

        // Panggil fungsi initializeTheme saat halaman dimuat
        document.addEventListener('DOMContentLoaded', initializeTheme);

        // Nabvar toggle
        // Toggle menu (untuk tombol menu)
        function Menu(e) {
            let list = document.querySelector('ul');

            // Toggle menu dan tombol
            e.classList.toggle('close');
            e.classList.toggle('menu');

            list.classList.toggle('top-[80px]');
            list.classList.toggle('opacity-100');
        }
    </script>
@endpush
<!-- Navbar -->
<nav class="py-4 bg-white sticky shadow-sm dark:bg-[#0d2438] top-0  ">
    <div class="container md:px-12 md:flex md:items-center md:justify-between">
        <div class="flex  items-center justify-between">
            <a href="/" class="flex items-center">
                <img id="logo-img" src="{{ asset('logo-dark.png') }}" class="h-10 mr-3" alt="logo">
            </a>
            <button id="toggle-icon" onclick="toggleDarkMode()" aria-label="Toggle Dark Mode"
                class="px-4 py-3 text-yellow-500 bg-[#F8F8F8] p-2 dark:text-white dark:bg-[#102c45] shadow-sm rounded-lg md:hidden transition">
                <i class="fas fa-sun"></i>
            </button>
            <span class="block mx-2 text-3xl p-2 rounded-lg md:hidden">
                <button onclick="Menu(this)" name="menu" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                        stroke="currentColor"
                        class="w-6 h-6 text-gray-800 dark:text-white transition-colors duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </span>


        </div>

        <ul
            class="p-5 z-10 absolute  backdrop-blur w-full left-0 py-4 opacity-0 top-[-400px] transition-all ease-in duration-500 md:p-0 md:flex md:items-center md:space-x-8 md:static md:w-auto md:opacity-100">
            <li class="md:my-0">
                <a href="#home"
                    class="font-medium text-xl  duration-500 dark:text-white text-slate-900 hover:text-primary dark:hover:text-primary"
                    aria-current="page">Home</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="#project"
                    class="font-medium text-xl duration-500 dark:text-white text-gray-900 hover:text-primary dark:hover:text-primary"
                    aria-current="page">Projects</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="#contact"
                    class="font-medium text-xl duration-500 dark:text-white text-gray-900 hover:text-primary dark:hover:text-primary"
                    aria-current="page">Contact</a>
            </li>

            <li class="block md:hidden">
                <a href="mailto:jouxing66@gmail.com"
                    class=" text-white bg-primary font-medium rounded-lg text-lg px-6 py-3 text-center hover:bg-indigo-700 hover:drop-shadow-md transition duration-300 ease-in-out">Hire
                    Me</a>
            </li>

        </ul>
        <div>
            <ul
                class="p-5 z-10 after:absolute hidden  w-full left-0 py-4 opacity-0 top-[-400px] md:p-0 md:flex md:items-center md:space-x-8 md:static md:w-auto md:opacity-100">
                <li class="hidden md:block">
                    <a href="mailto:jouxing66@gmail.com"
                        class=" text-white bg-primary font-medium rounded-lg text-lg px-6 py-3 text-center hover:bg-indigo-700 hover:drop-shadow-md transition duration-300 ease-in-out">Hire
                        Me</a>
                </li>
                <li class="hidden md:block">
                    <button id="toggle-icon" onclick="toggleDarkMode()" aria-label="Toggle Dark Mode"
                        class="px-4 py-3 text-yellow-500 bg-[#F8F8F8] p-2 dark:text-white dark:bg-[#102c45] shadow-sm rounded-lg  transition">
                        <i class="fas fa-sun"></i>
                    </button>
                </li>
            </ul>
        </div>


    </div>
</nav>
<div class="fixed bottom-8 z-40 right-8" id="backtop">
    <a href="#"
        class="text-white transition duration-300 hover:bg-primary/60 flex justify-center items-center w-10 h-10 rounded-lg bg-primary"><i
            class="fas fa-arrow-up"></i></a>
</div>
@push('script')
    <script>
        window.onscroll = () => document.querySelector("#backtop").classList.toggle("hidden", !pageYOffset);
    </script>
@endpush
<!-- /Navbar -->
