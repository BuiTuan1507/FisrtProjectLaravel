@extends ('layout.master')
@section ('head.title')
them tai khoan
@stop

@section('body.content')
<div>
<form action="{{route('article.store')}} " method="POST">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
   
   <input type="text" placeholder="ten" name="ten" >
   <input type="text" placeholder="info" name="info">
   <input type="text" placeholder="pass" name="pass">
<button >Them</button>
</form>
</div>
@stop 