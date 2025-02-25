@extends('layouts.base')



@section('title', 'Services')
@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora blanditiis maiores assumenda rerum placeat expedita iste impedit earum dicta ipsum voluptates, ipsam, vero, quidem non.')
    @endcomponent

    @component('_components.card')
        @slot('title', 'Service 2')
        @slot('text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora blanditiis maiores assumenda rerum placeat expedita iste impedit earum dicta ipsum voluptates, ipsam, vero, quidem non.')
    @endcomponent

    @component('_components.card')
        @slot('title', 'Service 3')
        @slot('text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora blanditiis maiores assumenda rerum placeat expedita iste impedit earum dicta ipsum voluptates, ipsam, vero, quidem non.')
    @endcomponent
@endsection