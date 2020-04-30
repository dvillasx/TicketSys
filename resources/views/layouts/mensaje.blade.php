@if (Session::has('mensaje'))
<div class="alert alert-dismissible fade show {{Session::get('clase-alerta', 'alert-info')}}" role="alert">
    <strong>{{Session::get('mensaje')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>  
@endif
