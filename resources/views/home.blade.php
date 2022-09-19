@extends('layouts.app', ['title' => 'Home'])
{{-- @section('title', 'Home') --}}
@section('content')
    {{-- @include('components.alert', ['slot' => 'Ngisi slot disini']) --}}

    {{-- @component('components.alert', ['title'=>'Judul'])
        Ngisi slot begini juga bisa
    @endcomponent --}}

    {{-- @component('components.alert')
        @slot('title')
            Kalau begini bisa pake tag html <strong>Bro!</strong>
        @endslot
        Enakan ini sih
    @endcomponent --}}

    <x-alert>
        {{-- @slot('title')
            Kalau begini bisa pake tag html <strong>Bro!</strong>
        @endslot --}}
        <x-slot name="title">
            Kalau begini bisa pake tag html <strong>Bre!</strong>
        </x-slot>
        Pake tag x-slot juga bisa, asalkan komponen yg akan digunakan berada di "resource/views/components"
    </x-alert>

    <p>
        This is home page.
    </p>
@endsection
