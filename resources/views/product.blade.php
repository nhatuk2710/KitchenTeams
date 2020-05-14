@extends('layout')
@section('all')
      @foreach($cart as $c)
        {{$c->product_name}}
        {{$c->cart_qty}}
    @endforeach
    @endsection
