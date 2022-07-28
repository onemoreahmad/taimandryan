<div class=" rounded-sm leading-8 whitespace-pre-line  grid grid-cols-2 lg:grid-cols-5 gap-6 text-center p-4">
    
        @forelse ($block->getMedia('gallery-block') as $photo)
         {{-- <img src="{{\Storage::disk('public')->url($photo)}}" :wire:key="{{$loop->index}}" alt="" class="h-auto lg:h-36 rounded-sm text-center mx-auto"> --}}
         @if($photo->getFullUrl())
            <img src="{{$photo->getFullUrl()}}" alt="" class="h-auto xl:h-36 rounded-sm text-center mx-auto">
        @endif 
        @empty 
            Not images yet.
        @endforelse
    
    {{-- <img src="{{\Storage::disk('public')->url(data_get($block, 'content.photo'))}}" alt="" class="w-auto p-1 rounded-md"> --}}
</div>

 