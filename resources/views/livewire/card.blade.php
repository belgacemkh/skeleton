
<div  wire:init="loadCardData" class="bg-white border border-gray-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
    @isset($data)
    <div class="flex space-x-4">
        <img src="{{ $data['avatarURL'] }}" alt="{{ $data['title'] }}" class="rounded-full h-12 w-12">
        <div>
            <h2 class="text-xl font-semibold">{{ $data['title'] }}</h2>
            <p class="text-sm">{{ $data['bio'] }}</p>
        </div>
    </div>
    @else
    <div class="animate-pulse flex space-x-4">
        <div class="rounded-full bg-gray-400 h-12 w-12"></div>
        <div class="flex-1 space-y-4 py-1">
            <div class="h-4 bg-gray-400 rounded w-3/4"></div>
            <div class="space-y-2">
                <div class="h-4 bg-gray-400 rounded"></div>
                <div class="h-4 bg-gray-400 rounded w-5/6"></div>
            </div>
        </div>
    </div>
    @endif
</div>

