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
<section id="project" class="py-[60px] ">
    <div class="container">
        <div class="flex flex-wrap">
            <p class="dark:text-white w-full text-center my-10 text-slate-700 md:text-[2.7rem] text-2xl">
                Projects portfolio
            </p>
            {{-- project start --}}
            <div class="flex w-full flex-wrap justify-center">
                <div class="flex w-full mx-4 justify-center">
                    <hr class="h-px w-full text-center my-8 bg-slate-200 border-0 dark:bg-[#1d4065]">
                </div>
                @forelse ($projects as $project)
                <div class="my-5 md:w-1/2 lg:w-1/3 2xl:w-1/4 group">
                    <div class="mx-4 dark:bg-[#102c45] bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                        <div class="overflow-hidden rounded-t-lg h-72">
                            <img class="w-full object-center h-full object-fill group-hover:scale-105 transition duration-300" src="{{ asset('/storage/'.$project->img) }}" alt="" />
                        </div>

                        <div class="p-5">
                            <h5 class="mb-1 dark:text-white text-2xl font-bold text-center tracking-tight text-gray-900">{{ $project->title }}</h5>
                            @forelse ($project->technologies as $technology)
                            <span class="bg-blue-100 mb-2 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">#{{ $technology['name'] }}</span>
                            @empty
                            @endforelse
                            <p id="desc-{{ $project->id }}" class="mb-3 dark:text-white font-normal text-gray-700">
                                {{ Str::limit(strip_tags($project->description), 100, '') }}
                                @if (Str::length($project->description) > 100)
                                <span class="text-blue-500 cursor-pointer" onclick="toggleDescription({{ $project->id }})">... See More</span>
                                @endif
                            </p>

                            <!-- Full Description Hidden Initially -->
                            <p id="full-desc-{{ $project->id }}" class="mb-3 font-normal dark:text-white text-gray-700 hidden">
                                {{ strip_tags($project->description) }}
                                <span class="text-blue-500 cursor-pointer" onclick="toggleDescription({{ $project->id }})"> See Less</span>
                            </p>

                            <div class="flex justify-center gap-2 mt-3">
                                <a target="_blank" href="{{ $project->demo_link }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-600/60 focus:ring-4 focus:outline-none focus:ring-green-300 ">
                                    Demo
                                    <svg class="w-4 h-4 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>

                                <a href="{{ $project->repo_link }}" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-primary/90 focus:ring-4 focus:outline-none focus:ring-primary ">
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
                <p class="text-center text-gray-500">No projects found.</p>
                @endforelse
            </div>

            @if ($projects->count() == 6)
            <div class="my-8 sm:mt-10 mx-auto ">
                <a class="font-general-medium flex items-center px-6 py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white text-lg sm:text-xl duration-300" aria-label="More Projects" href="{{ route('projects') }}">
                    <button>More Projects</button>
                </a>
            </div>
            <div class="flex w-full mx-4 justify-center">
                <hr class="h-px w-full text-center my-8 bg-slate-200 border-0 dark:bg-[#1d4065]">
            </div>
            @endif
        {{-- project end --}}

        </div>
    </div>
</section>