<div {{ $attributes->class(['logo-container']) }}>
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('img/logo.png') }}" width="75" height="35" alt="Porto Admin"/>
    </a>
    <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
         data-fire-event="sidebar-left-opened">
        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
    </div>
</div>
