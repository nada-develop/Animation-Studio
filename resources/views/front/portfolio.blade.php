@extends('front.master')


@section ('page-title')
portfolio
@endsection



@section ('page-content')
<h1>portfolio</h1>
@foreach ($portfolio_list as $portfolio)

<ul>
    <li>{{$portfolio->id}}</li>
    <li>{{$portfolio->image}}</li>
    <li>{{$portfolio->name}}</li>
    <li>{{$portfolio->description}}</li>
    <li>{{$portfolio->production_date}}</li>
    <li>{{$portfolio->category_id}}</li>
</ul>
@endforeach
@endsection
