@props(['name', 'title', 'checked' => false])
<div class="flex items-center">
    <!-- Enabled: "bg-primary-600", Not Enabled: "bg-gray-200" -->
    <button type="button" data-controls="{{ $name }}" class="@if ($checked) bg-primary-600 @else bg-gray-200 @endif fancy-toggle relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2" role="switch" aria-checked="false" aria-labelledby="annual-billing-label">
      <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
      <span aria-hidden="true" class="@if ($checked) translate-x-5 @else translate-x-0 @endif pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
    </button>
    <input type="checkbox" name={{ $name }} @if ($checked) checked @endif class="hidden" {{ $attributes }}>
    <span class="ml-3 text-sm hidden sm:inline">
      <span class="font-medium text-gray-900">{{ $title }}</span>
    </span>
</div>