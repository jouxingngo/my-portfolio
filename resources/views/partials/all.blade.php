@push('script')
<script>
    function toggleDescription(id) {
      const shortDesc = document.getElementById(`desc-${id}`);
      const fullDesc = document.getElementById(`full-desc-${id}`);
      
      // Toggle visibility
      if (shortDesc.classList.contains('hidden')) {
        shortDesc.classList.remove('hidden');
        fullDesc.classList.add('hidden');
      } else {
        shortDesc.classList.add('hidden');
        fullDesc.classList.remove('hidden');
      }
    }
  </script>
@endpush
<section id="project" class="py-16">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full text-center text-slate-800 md:text-[2.7rem] text-2xl">
                Projects portfolio
            </div>
            <div class="w-full text-center  text-xl md:text-2xl pt-10  font-thin text-slate-700">
                Search projects by title
            </div>
         {{-- search form start --}}
         <div class="w-full mx-4 text-center text-2xl pt-5 font-thin text-slate-700">
            <form class="mx-auto" id="search-form" method="GET">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input autocomplete="off" type="search" id="default-search" name="search" class="block w-full focus:outline-none p-4 ps-10 text-sm text-gray-900 border border-primary rounded-lg bg-gray-50 focus:ring-primary focus:border-primary" placeholder="Search project by title..." />
                </div>
            </form>
        </div>
        {{-- search form end --}}
         {{-- projects start --}}
        <div class="flex justify-center">
            <div class="grid grid-cols-1 gap-4 mt-8 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4">
                @forelse ($projects as $project)
                <div class="group">
                    <div class="mx-4 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                        <div class="overflow-hidden rounded-t-lg h-72">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition duration-300" src="{{ asset('/storage/'.$project->img) }}" alt="" />
                        </div>

                        <div class="p-5">
                            <h5 class="mb-1 text-2xl font-bold text-center tracking-tight text-gray-900">{{ $project->title }}</h5>
                            @forelse ($project->technologies as $technology)
                            <span class="bg-blue-100 mb-2 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">#{{ $technology['name'] }}</span>
                            @empty
                            @endforelse
                            <p id="desc-{{ $project->id }}" class="mb-3 font-normal text-gray-700">
                                {{ Str::limit(strip_tags($project->description), 100, '') }}
                                @if (Str::length($project->description) > 100)
                                <span class="text-blue-500 cursor-pointer" onclick="toggleDescription({{ $project->id }})">... See More</span>
                                @endif
                            </p>

                            <!-- Full Description Hidden Initially -->
                            <p id="full-desc-{{ $project->id }}" class="mb-3 font-normal text-gray-700 hidden">
                                {{ strip_tags($project->description) }}
                                <span class="text-blue-500 cursor-pointer" onclick="toggleDescription({{ $project->id }})"> See Less</span>
                            </p>

                            <div class="flex justify-center gap-2 mt-3">
                                <a target="_blank" href="{{ $project->demo_link }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-600/60 focus:ring-4 focus:outline-none focus:ring-green-300">
                                    Demo
                                    <svg class="w-4 h-4 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>

                                <a href="{{ $project->repo_link }}" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-500/60 focus:ring-4 focus:outline-none focus:ring-primary">
                                    Code
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full text-center text-gray-500">No projects found.</div>
                @endforelse
            </div>
        </div>
        {{-- projects end --}}

        </div>
        <div class="my-10 mx-4">
            {{ $projects->links() }}
        </div>
    </div>
</section>