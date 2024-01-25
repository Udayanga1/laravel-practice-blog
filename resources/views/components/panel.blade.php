<div {{ $attributes(['class' => "border border-gray-200 p-6 rounded-xl"]) }}>
  {{ $slot }}
</div>

{{-- To fix the error "Undefined variable $atttributes", you need to replace $atttributes with $attributes in the code --}}