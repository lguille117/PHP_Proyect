@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;
        case 'succes':
           $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;
        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
            break;
        case 'dark':
            $class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-400';
            break;
        default:
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
    }
@endphp



<div {{$attributes ->merge(['class' => 'p-4  text-sm rounded-lg' . $class])}}  role="alert">
    <span class="font-medium">{{$title ?? 'Informacion Importante!'}}</span> {{$slot}}
    {{--<p>{{$attributes}}</p> --}}
  </div>

