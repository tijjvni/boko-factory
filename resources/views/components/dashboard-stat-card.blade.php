<div  {{ $attributes->merge(['class' => 'p-4 bg-gray-50 rounded-xl text-gray-800']) }} >
    <div class="font-bold text-2xl leading-none">{{$title}}</div>
    <div class="mt-2">
        {{$value}} <span class="text-xs">{{$info}}</span>
        <span class="float-right  text-xs text-gray-600">
            {{$slot}}
        </span>
    </div>

</div>