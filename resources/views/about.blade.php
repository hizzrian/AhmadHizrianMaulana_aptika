@extends('layouts.main')
@section('container')
	<h1>About</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, doloremque, eius, exercitationem ipsam iste laborum magni mollitia nisi nisi odio officiis provident quibusdam quidem quo reiciendis repellendus repudiandae sint temporibus ullam voluptatum?</p>
    <h1><?= $title; ?></h1>
    <h1>{{ $content }}</h1>
    <h2>Visi :</h2>
    <h4>{{ $vision }}</h4>
    <h2>Misi :</h2>
    <h4>{{ $mission }}</h4>
    <h2>Alamat :</h2>
    <h4>{{ $address }}</h4>
@endsection