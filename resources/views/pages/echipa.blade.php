@extends('pages.template')

@section('content')


<x-anonima />

<x-alert>
    <x-slot:title>
        Server Error
        </x-slot>

        <strong>Whoops!</strong> Something went wrong!
</x-alert>

@endsection