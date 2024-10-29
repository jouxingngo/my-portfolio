@push('style')
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endpush
@push('script')
<script>
    function Menu(e) {
        let list = document.querySelector('ul');

        e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100') ) : ( e.name = "menu" , list.classList.remove('top-[80px]'), list.classList.remove('opacity-100')) 
    }
</script>
@endpush
  <!-- Navbar -->
  <nav class="py-8 bg-white sticky top-0 border-b border-gray-100">
    <div class="container md:px-12 md:flex md:items-center md:justify-between">
        <div class="flex  items-center justify-between">
            <a href="/" class="flex items-center">
                <img src="{{ asset('logo-dark.png') }}" class="h-10 mr-3" alt="logo">
            </a>
            <button onclick="toggleDarkMode()" aria-label="Toggle Dark Mode" class="md:hidden px-3.5 py-3 text-yellow-500 bg-[#F8F8F8] p-2 rounded-lg hover:bg-gray-200  transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 3v1M12 20v1M4.22 4.22l.707.707M18.36 18.36l.707.707M1 12h1m20 0h1M4.22 19.78l.707-.707M18.36 5.64l.707-.707M12 5a7 7 0 100 14 7 7 0 000-14z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </button>
            <span class="block mx-2 text-3xl bg-gray-100 p-2 rounded-lg md:hidden">
                <svg name="menu" onclick="Menu(this)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>                      
            </span>
         
        </div>
   
        <ul class="p-5 z-10 absolute bg-white/80 backdrop-blur w-full left-0 py-4 opacity-0 top-[-400px] transition-all ease-in duration-500 md:p-0 md:flex md:items-center md:space-x-8 md:static md:w-auto md:opacity-100">
            <li class="md:my-0">
                <a href="#home" class="font-medium text-xl  duration-500 text-slate-900 hover:text-indigo-600" aria-current="page">Home</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="#home" class="font-medium text-xl duration-500 text-gray-900 hover:text-indigo-600" aria-current="page">Projects</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="#home" class="font-medium text-xl duration-500 text-gray-900 hover:text-indigo-600" aria-current="page">Contact</a>
            </li>
            
            <li class="block md:hidden">
                <button type="button" class=" text-white bg-primary font-medium rounded-lg text-lg px-6 py-3 text-center hover:bg-indigo-700 hover:drop-shadow-md transition duration-300 ease-in-out">Hire Me</button>
            </li>
            {{-- <li class="hidden md:block">
                <button onclick="toggleDarkMode()" aria-label="Toggle Dark Mode" class="px-3.5 py-3 text-yellow-500 bg-[#F8F8F8] p-2 rounded-lg hover:bg-gray-200  transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 3v1M12 20v1M4.22 4.22l.707.707M18.36 18.36l.707.707M1 12h1m20 0h1M4.22 19.78l.707-.707M18.36 5.64l.707-.707M12 5a7 7 0 100 14 7 7 0 000-14z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </button>
            </li> --}}
           
        </ul>
        <div>
        <ul class="p-5 z-10 after:absolute hidden bg-white/80 backdrop-blur w-full left-0 py-4 opacity-0 top-[-400px] md:p-0 md:flex md:items-center md:space-x-8 md:static md:w-auto md:opacity-100">
                <li class="hidden md:block">
                    <button type="button" class=" text-white bg-primary font-medium rounded-lg text-lg px-6 py-3 text-center hover:bg-indigo-700 hover:drop-shadow-md transition duration-300 ease-in-out">Hire Me</button>
                </li>
                <li class="hidden md:block">
                    <button onclick="toggleDarkMode()" aria-label="Toggle Dark Mode" class="px-3.5 py-3 text-yellow-500 bg-[#F8F8F8] p-2 rounded-lg hover:bg-gray-200  transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 3v1M12 20v1M4.22 4.22l.707.707M18.36 18.36l.707.707M1 12h1m20 0h1M4.22 19.78l.707-.707M18.36 5.64l.707-.707M12 5a7 7 0 100 14 7 7 0 000-14z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                    </button>
                </li>
            </ul>
        </div>
        
     
    </div>
</nav>
<!-- /Navbar -->