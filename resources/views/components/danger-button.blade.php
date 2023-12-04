<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger-subtle waves-effect waves-light w-100']) }}>
    {{ $slot }}
</button>
