<div class=" rounded-sm leading-8 whitespace-pre-line  grid grid-cols-2 lg:grid-cols-5 gap-6 text-center p-4">
        @forelse ($block->getMedia('media') as $photo)
         @if($photo->getFullUrl())
            <img src="{{$photo->getFullUrl()}}" alt="" class="h-auto xl:h-36 rounded-sm text-center mx-auto">
        @endif 
        @empty 
            Not images yet.
        @endforelse
</div>

 