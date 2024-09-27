<div class="w-full grid 2xl:grid-cols-3 gap-6">
    <div class="order-2 2xl:order-1 2xl:col-span-1">
        <h1 class="text-xl lg:text-2xl text-black font-semibold">{{$course->name}}</h1>
        <p class="mt-3 text-sm text-gray-700 font-normal">{{$course->description}}</p>

        <div class="w-full rounded-xl bg-background-950 p-6 flex items-center gap-2 mt-6">
            <div class="w-full">
                <p class="text-white font-bold text-large">Progress</p>
                <p class="text-white opacity-50 text-sm font-semibold mt-1.5">{{$course->seen_episode_count}}/{{$course->episode_count}} Lectures Completed</p>
            </div>

            <div class="w-full">
                <p class="text-white font-normal text-large">{{$course->completed_percent}}% Completed</p>
                <div class="w-full h-2 mt-2 relative bg-progress-bar-background rounded-xl overflow-hidden">
                    <div class="h-2 absolute top-0 left-0 bottom-0 bg-progress-bar-foreground rounded-xl" style="width: {{$course->completed_percent}}%;"></div>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4 justify-between mt-6">
            <h2 class="text-xl text-black font-semibold flex-shrink-0">Class Content</h2>
            <p class="hidden xs:flex text-sm text-gray-800 font-normal text-right justify-end max-w-48 items-center">
                @svg('heroicon-s-folder', 'h-4 w-4 text-gray-500 mr-1') {{$course->chapter_count}} 
                @svg('heroicon-s-academic-cap', 'h-4 w-4 text-gray-500 ml-3 mr-1') {{$course->episode_count}} 
                @svg('heroicon-s-clock', 'h-4 w-4 text-gray-500 ml-3 mr-1') {{$course->duration_for_humans}}
            </p>
        </div>

        <div class="space-y-4 mt-6">
            @foreach($courseChapters as $chapter_i)
                <div class="flex">
                    <div class="flex-shrink flex-grow-0 hidden xs:flex flex-col gap-4">
                        <div class="flex flex-grow-0 @if ($loop->index >= 1) pt-1 @endif pr-4 bg-white rounded-xl">
                            @if($chapter_i->is_completed)
                            <div class="rounded-full p-1  bg-progress-bar-background">
                                @svg('heroicon-c-check', 'h-5 w-5 text-progress-bar-foreground')
                            </div>
                            @else
                            <div class="rounded-full p-1 bg-gray-200">
                                @svg('heroicon-c-ellipsis-horizontal', 'h-5 w-5 text-gray-500')
                            </div>
                            @endif
                        </div>
                        <div class="flex-grow flex justify-start pl-3">
                            @if($chapter_i->is_completed)
                            <div class="w-1 rounded-full bg-progress-bar-foreground"></div>
                            @else
                            <div class="w-1 rounded-full bg-gray-200"></div>
                            @endif
                        </div>
                    </div>

                    <div class="space-y-4 w-full @if ($loop->index >= 1) pt-[.45rem] @endif">
                        <p class="font-semibold text-black text-large px-2">{{ $chapter_i->name }}</p>
                        @foreach($chapter_i->episodes as $currentEpisode)
                        <a href="{{ route('episode.play', $currentEpisode->uuid) }}" class="@if($currentEpisode->is_current) bg-primary-100 @else bg-white @endif py-2 px-2 w-full rounded-xl flex items-center gap-2 {{--opacity-50 select-none--}}">
                            @if($currentEpisode->is_current == true)
                            @svg('heroicon-s-play-pause', 'h-5 w-5 text-gray-600 flex-shrink-0 hidden xs:block')
                            @elseif($currentEpisode->is_seen == true)
                            @svg('heroicon-s-check-circle', 'h-5 w-5 flex-shrink-0 text-progress-bar-foreground hidden xs:block')
                            @else
                            @svg('heroicon-s-play-circle', 'h-5 w-5 text-gray-500 flex-shrink-0 hidden xs:block')
                            @endif 
                            <p class="font-semibold text-sm">{{$currentEpisode->name}}</p>
                            <p class="font-normal text-sm flex-shrink-0 text-gray-400 ml-auto">{{$currentEpisode->duration_for_humans}}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="order-1 2xl:order-2 2xl:col-span-2">
        <video class="w-full rounded-xl" controls>
            <source src="{{ Vite::asset('resources/videos/example-course.mp4') }}">
            </source>
        </video>
    
        <div class="flex gap-3 mt-6">
            @if($episode->is_seen)
            <button wire:click="unmarkEpisodeAsSeen" class="p-3 bg-light-background rounded-xl hover:brightness-95">
                @svg('heroicon-s-check-circle', 'h-6 w-6 text-primary-500')
            </button>
            @else
            <button wire:click="markEpisodeAsSeen" class="p-3 bg-light-background rounded-xl hover:brightness-95">
                @svg('heroicon-o-check-circle', 'h-6 w-6 text-gray-500')
            </button>
            @endif 
            @if($episode->is_saved)
            <button wire:click="unsaveEpisode" class="p-3 bg-light-background rounded-xl hover:brightness-95">
                @svg('heroicon-s-bookmark', 'h-6 w-6 text-primary-500')
            </button>
            @else
            <button wire:click="saveEpisode" class="p-3 bg-light-background rounded-xl hover:brightness-95">
                @svg('heroicon-o-bookmark', 'h-6 w-6 text-gray-500')
            </button>
            @endif
    
            <a @isset($episode->previous_episode) href="{{ route('episode.play', $episode->previous_episode->uuid) }}" @endisset class="ml-auto p-4 rounded-xl @if(isset($episode->previous_episode)) bg-primary-100 hover:brightness-95 @else bg-primary-50 @endif">
                @if(isset($episode->previous_episode))
                @svg('heroicon-s-play', 'h-4 w-4 rotate-180 text-primary-500')
                @else
                @svg('heroicon-s-play', 'h-4 w-4 rotate-180 text-primary-300')
                @endif 
            </a>
            <a @isset($episode->next_episode) href="{{ route('episode.play', $episode->next_episode->uuid) }}" @endisset class="p-4 rounded-xl @if(isset($episode->next_episode)) bg-primary-100 hover:brightness-95 @else bg-primary-50 @endif">
                @if(isset($episode->next_episode))
                @svg('heroicon-s-play', 'h-4 w-4 text-primary-500')
                @else
                @svg('heroicon-s-play', 'h-4 w-4 text-primary-300')
                @endif
            </a>
        </div>
    
        <div class="py-6 border-b border-gray-200">
            <p class="text-gray-600 font-medium text-sm">{{$chapter->name}} • ({{$episode->index}}/{{$chapter->episode_count}})</p>
            <h2 class="text-black text-xl lg:text-2xl font-semibold mt-1">{{$episode->name}}</h2>
        </div>
        <div class="mt-6">
            <p class="text-gray-600 font-normal text-sm mt-1.5">{{$episode->description}}</p>
            {{--
            <div class="tabs-container mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0 md:max-w-2xl lg:max-w-full 2xl:max-w-lg">
                <div role="tablist" class="flex gap-2">
                    <button role="tab" id="tab-resources" aria-selected="true" aria-controls="panel-resources" class="text-black bg-light-background aria-selected:bg-primary-500 aria-selected:text-white font-medium text-large px-4 py-3 rounded-t-lg inline-block">Resources</button>
                    <button role="tab" id="tab-chat" aria-selected="false" aria-controls="panel-chat" class="text-black bg-light-background aria-selected:bg-primary-500 aria-selected:text-white font-medium text-large px-4 py-3 rounded-t-lg inline-block">Chat Room</button>
                </div>
                <div class="rounded-b-lg rounded-r-lg overflow-hidden bg-light-background p-4">
                    <div id="panel-resources" role="tabpanel" tabindex="0" aria-labelledby="tab-resources">
                        <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200 bg-white">
                            @for($i = 0; $i < 3; $i++)
                                <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                <div class="flex w-0 flex-1 items-center">
                                    @svg('heroicon-o-paper-clip', 'h-5 w-5 flex-shrink-0 text-gray-400')
                                    <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                        <span class="truncate font-medium">file_{{$i}}.pdf</span>
                                        <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                                    </div>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <a href="#" class="btn btn-outline">Download</a>
                                </div>
                                </li>
                                @endfor
                        </ul>
                    </div>
    
                    <div id="panel-chat" role="tabpanel" tabindex="0" aria-labelledby="tab-chat" class="hidden">
                        Chat!
                    </div>
                </div>
            </div>
        --}}
        </div>
    </div>
</div>