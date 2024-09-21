@props(['active' => false, 'type' => "a"])

@php
    if ($active) {
        $active_class = 'bg-gray-900 text-white';
    } else {
        $active_class = 'text-gray-300 hover:bg-gray-700 hover:text-white';
    }  
@endphp


@if ($type === "a")
    <a {{$attributes}} class="{{$active_class}} rounded-md px-3 py-2 text-sm font-medium text-white" 
    aria-current="{{ $active ? 'page' : 'false' }}"> {{$slot}} </a>
@elseif ($type === "button")
    <button {{$attributes}} class="{{$active_class}} rounded-md px-3 py-2 text-sm font-medium text-white" 
    aria-current="{{ $active ? 'page' : 'false' }}"> {{$slot}} </button>
@else
    <strong> {{$slot}} </strong>
@endif
