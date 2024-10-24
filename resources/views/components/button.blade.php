@props(['color' => 'green','colorText' => 'white', 'type' => 'submit'])

@if ($type == 'submit')
    <button {{ $attributes->merge(['type' => $type, 'class' => 'text-xs btn btn-xs px-4 lg:btn-base h-10 shadow-md inline-flex items-center border border-gray-300 rounded-md lg:font-medium text-'.$colorText.' bg-'.$color.'-500 duration-300 transform hover:bg-'.$color.'-600 hover:shadow-lg focus:shadow-lg focus:bg-'.$color.'-600 active:shadow-lg ']) }}>
        {{ $slot }}
    </button>
@else
    <a {{ $attributes->merge(['type' => $type, 'class' => 'text-xs btn btn-xs px-4 lg:btn-base h-10 shadow-md inline-flex items-center border border-gray-300 rounded-md lg:font-medium text-'.$colorText.' bg-'.$color.'-500 duration-300 transform hover:bg-'.$color.'-600 hover:shadow-lg focus:shadow-lg focus:bg-'.$color.'-600 active:shadow-lg ']) }}>
        {{ $slot }}
    </a>
@endif

