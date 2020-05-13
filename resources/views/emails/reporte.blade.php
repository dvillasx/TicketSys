@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
Descripción Ticket: {{$reporte->titulo}}
@endcomponent
@endslot
{{-- Body --}}
<strong>Ticket ID: </strong> {{$reporte->id}}<br>
<strong>Titulo: </strong> {{$reporte->titulo}}<br>
<strong>Fecha Inicio: </strong> {{$reporte->created_at->format('d/m/y')}}<br>
<strong>Descripción: </strong> {{$reporte->descripcion}}<br>
<strong>Area: </strong> {{$reporte->area->nombre_area}}<br>
<strong>ID Personal Asignado: </strong> {{$reporte->user_asig_id}}<br>
{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset
{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
@endcomponent
@endslot
@endcomponent