<div class=" rounded-sm leading-8 gap-6 p-4">
    @if(data_get($block, 'content.links'))
        @forelse (data_get($block, 'content.links') as $link)
          <a class="block my-1 bg-gray-100 py-1 px-3 rounded hover:bg-blue-50" target="_blank" href="{{data_get($link, 'link')}}">{{data_get($link, 'name')}}</a>
        @empty 
        @endforelse
    @endif
    {{-- <img src="{{\Storage::disk('public')->url(data_get($block, 'content.photo'))}}" alt="" class="w-auto p-1 rounded-md"> --}}
</div>

 