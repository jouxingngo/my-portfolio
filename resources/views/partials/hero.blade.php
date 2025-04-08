@push('script')
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<!-- Setup and start animation! -->
<script>
    
 var typed = new Typed('#typing2', {
    strings: [
      '^3000 A passionate full-stack developer from Indonesia.',
      'Creating beautiful and functional web applications.',
      'Always eager to learn and grow.'
    ],
    typeSpeed: 70,
    backSpeed: 30, // Kecepatan saat menghapus teks
    backDelay: 500, // Waktu tunggu sebelum menghapus teks
    loop: true,
    showCursor: true,
    cursorChar: '|',
    smartBackspace: true // Menghapus dengan cara yang lebih pintar

  });
  var typed2 = new Typed('#typing-1', {
    strings:[
        "I'AM JOUXING NGO"
    ],
    cursorChar: '',
    typeSpeed:100,
    backSpeed:50,

  })
</script>
@endpush
 <!-- Home -->
 <section id="home" class="">
    <div class="container flex flex-wrap items-center justify-center mx-auto  md:px-12">
        <div class="my-14 lg:mb-0 w-full md:w-1/3">
            <h1 class=" text-[1.5rem]  md:text-[2.2rem] dark:text-white text-gray-600 font-bold font-sans text-center md:text-5xl lg:text-left lg:leading-tight mb-5">
                HI THERE 👋<br><span id="typing-1"></span>
            </h1>
            <span  id="typing2" class="max-w-xl text-center text-lg lg:text-3xl text-bold dark:dark:text-white text-gray-500 lg:text-left lg:max-w-md"></span>
            <div class="flex justify-center -mt-3 lg:justify-start">
                <a 
                    download="CV_JOUXING_NGO" 
                    href="{{ asset('CV_JOUXING_NGO.pdf') }}"
                    class="flex items-center justify-center w-36 sm:w-48 mt-12 mb-6 sm:mb-0 py-2.5 sm:py-3 px-4 rounded-lg shadow-lg 
                           text-sm sm:text-lg font-medium 
                           bg-indigo-50 text-gray-600 
                           border border-indigo-200 dark:border-ternary-dark 
                           hover:bg-indigo-500 hover:text-white 
                           focus:ring-2 focus:ring-indigo-600 
                           transition duration-300 ease-in-out"
                    aria-label="Download Resume"
                >
                    <svg 
                        stroke="currentColor" fill="none" stroke-width="2" 
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" 
                        class="mr-2 sm:mr-3 h-5 w-5 sm:h-6 sm:w-6" 
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="8 12 12 16 16 12"></polyline>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                    </svg>
                    <span>Download CV</span>
                </a>
            </div>
        </div>
        <div class="md:w-2/3 w-full">
            <img class="" src="{{ asset('profiletes.svg') }}" alt="" />
        </div>
    </div>
</section>
<!-- /Home -->