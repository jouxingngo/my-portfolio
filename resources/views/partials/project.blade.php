<section id="project" class="py-32">
    <div class="container">
        <div class="flex text-center flex-wrap">
            <div class="w-full   text-slate-800 md:text-[2.7rem] text-2xl">
                Projects portfolio
            </div>
            <div class="w-full  text-xl md:text-2xl pt-10  font-thin text-slate-700">
                Search projects by title
            </div>
            <div class="w-full mx-4 text-center text-2xl pt-5 font-thin text-slate-700">
                <form class=" mx-auto">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full focus:outline-none p-4 ps-10 text-sm text-gray-900 border border-primary rounded-lg bg-gray-50 focus:ring-primary focus:border-primary " placeholder="Search project by title..." />
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-primary hover:bg-primary/60 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                    </div>
                </form>
            </div>
            {{-- project start --}}
            <div class="flex flex-wrap justify-center">
            @forelse ($projects as $project )
            <div class="w-full mt-8 md:w-1/2 lg:w-1/3 2xl:w-1/4"> 
                <div class="mx-4 bg-white  rounded-lg shadow-md  hover:shadow-lg transition duration-300 ease-in-out ">
                    <a href="{{ route('project.show', $project->id) }}">
                        <div class="overflow-hidden rounded-t-lg h-72">
                            <img class="w-full h-full object-cover" src="{{ asset('/storage/'.$project->img) }}" alt="" />
                        </div>
                        
                    <div class="p-5">
                        <h5 class="mb-1 text-2xl font-bold  tracking-tight text-gray-900">{{ $project->title }}</h5>
                        @forelse ($project->technologies as $technology )
                        <span class="bg-blue-100 mb-2 text-blue-800 text-xs font-medium  px-2.5 py-0.5 rounded ">{{ $technology['name'] }}</span>
                        @empty
                            
                        @endforelse
                        <p class="mb-3 font-normal text-gray-700">{{ Str::limit(strip_tags($project->description), 100, '...') }}</p>
                    </a>

                    <div class="flex justify-center gap-2 mt-3">
                        <a target="_blank" href="{{ $project->demo_link }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-600/60 focus:ring-4 focus:outline-none focus:ring-green-300 ">
                            Demo
                            <svg class="w-4 h-4 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    
                        <a href="{{ $project->repo_link }}" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-500/60 focus:ring-4 focus:outline-none focus:ring-primary ">
                            Code
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                        
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
        @if ($projects->count() == 6)
        <div class="mt-8 sm:mt-10 mx-auto ">
            <a class="font-general-medium flex items-center px-6 py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white text-lg sm:text-xl duration-300" aria-label="More Projects" href="/projects">
                <button>More Projects</button>
            </a>
        </div>
        @endif

         
            {{-- project end --}}
        </div>
    </div>
</section>