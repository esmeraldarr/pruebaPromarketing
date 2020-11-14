<div {{ $attributes->merge(['class' => 'card bg-white']) }}>
    <div class="card-header p-0">{{ $title }}</div>
    <div class="row no-gutters">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>

