@extends('layouts.app')

@section('content')

    <main class="pages home">
        <div class="content">
            @include('partials.header')

            <div class="d-flex justify-content-center">
                <div class="page-title">
                    <h2>Introdução</h2>
                </div>
            </div>

            <div class="wrapper-content text-homepage">
                {{ \App\Models\Update::get() }}
            </div>

        </div>
    </main>

@endsection
