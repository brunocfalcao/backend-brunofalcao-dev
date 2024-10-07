<div class="relative">
    <div class="w-full rounded-full sm:p-2 sm:bg-gray-100 flex flex-col sm:flex-row sm:items-center gap-4">
        <div id="global_search" class="relative w-full max-w-full">
            @svg('heroicon-o-magnifying-glass', 'h-6 w-6 text-gray-500 absolute left-2.5 top-2.5')
            <input type="text" wire:model.live="query" placeholder="Type to search..." class="outline-none ring-0 focus:ring-0 bg-white text-gray-700 rounded-full pr-4 pl-10 py-2.5 w-full text-left max-w-full ring-primary-500 focus:border-primary-500 border border-gray-300 sm:border-none">

            @if(isset($results) && count($results) > 0)
            <ul id="global_search_results" class="w-full hidden absolute divide-y divide-gray-100 top-[calc(100%+0.5rem)] bg-white border border-gray-200 rounded-2xl left-0">
                @foreach ($results as $result)
            
                    <li>
                        <a href="#test" class="px-4 py-3.5 bg-white hover:bg-gray-100 text-gray-700 cursor-pointer flex items-center gap-2 @if($loop->first) rounded-t-2xl @elseif ($loop->last) rounded-b-2xl @endif">    
                            @svg('heroicon-o-arrow-top-right-on-square', 'h-5 w-5 text-gray-500')
                            <span>{{$result['title']}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            @endif
        </div>	
        
        <div class="sm:ml-auto rounded-full inline-flex items-center justify-start space-x-1 p-2 bg-primary-100 flex-shrink-0">
            <div class="rounded-full text-sm bg-primary-500 text-white py-1.5 px-3">New feature</div>
            <span class="text-primary-500 font-medium italic text-sm py-1.5 px-3">70% off on all classes</span>
        </div>
        <!-- 
        <span class="text-gray-700 text-sm font-medium italic hidden sm:inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
        -->
    </div>
    
    <style>
        #global_search:focus-within #global_search_results{
            display: block;
        }
    </style>
</div>
