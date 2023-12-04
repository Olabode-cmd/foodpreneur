@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'fw-bold text-sm text-success dark:text-green-400']) }}>
        {{ $status }}
    </div>
@endif
