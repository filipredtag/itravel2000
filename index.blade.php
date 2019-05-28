@extends('layouts.a')

@section('head')
	<title>{{ $meta->title or config('app.name_' . $siteLocale, '') }}</title>
    <meta name="description" content="{{ $meta->description or '' }}">
    <meta name="keywords" content="{{ $meta->keywords or '' }}">
@stop

@section('abovethefold')
	@include('modules.banner')
	@include('modules.breadcrumbs')
@stop

@section('content')
	@if (! empty($snippet))
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				{{-- <h2 class="text-center"></h2> --}}
				<div class="intro text-center mb-3 ">
					{!! $snippet->htmlText !!}
				</div>
			</div>
		</div>
	</div>
	@endif

	
		@if (! empty($defaultSnippet))
		<div class="container mb-4">
			<div class="row">
				<div class="col-12">
					{{-- <h2 class="text-center"></h2> --}}
					<div class="intro text-center mb-3 ">
						{!! $defaultSnippet->htmlText !!}
					</div>
				</div>
			</div>
		</div>
		@endif

	@if (! empty($promos))
		@include('modules.promotions')
	@endif

	@include('modules.deals')

@stop
