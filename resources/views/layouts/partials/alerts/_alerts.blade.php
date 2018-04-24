@if (session('success'))
    @component('layouts.patrials.alerts._alerts_component')
        {{ session('success') }}
    @endcomponent
@endif

@if (session('error'))
    @component('layouts.patrials.alerts._alerts_component')
        {{ session('error') }}
    @endcomponent
@endif