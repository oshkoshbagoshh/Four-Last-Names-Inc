<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
        @if ($subtitle)
            <h6 class="card-subtitle">{{ $subtitle }}</h6>
        @endif
    </div>

    <div class="card-body">
        {{ $slot }}
    </div>

    @if ($hasFooter)
        <div class="card-footer">
            {{ $footer ?? 'Default footer content' }}
        </div>
    @endif
</div>
