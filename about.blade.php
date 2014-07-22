@extends('spicy-ginger.layout')

@section('title')
    About Us
@stop

@section('content')

	<section class="post">

		<h1 class="title">About Us</h1>
        <p>Welcome! Добро пожаловать! </p>
        <p>We are big foodies, Natasha & Edward. We invite you to Spicy Ginger where we share with you our love for food and life adventures!</p>
        <img src="{{ URL::to('/img/about.jpg') }}" width="200" />

	</section>

@stop

