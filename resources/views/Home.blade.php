@extends('layout.master')
@section('head.content')
Tieu de bai viet
@stop
@section('body.content')
		
		<div style="text-align: center">
			<div>Them bai viet</div>
		<a href="{{route ('article.create')}}">them</a>
			@foreach ($articles as $a)
			<div>
				{{$a -> NAME}}
			</div>
			
   
			<a href="{{route('article.show', $a->id)}}">
				ReadMore
			</a>
		</div>
			@endforeach
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				{{ $articles->render() }}
			</div>
		</div>
		</div>
	@stop

