@extends('layouts.app')

@section('content')


    <main class="pages painel">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="m-0 text-white">PAINEL ADMINISTRATIVO</h3>
                </div>

                <div class="col-lg-6 text-end">
                    <a class="btn btn-danger" href="{{ Url() }}/painel/sair">SAIR</a>
                </div>
            </div>

            <hr>

            {{--EDITOR--}}
            <form method="POST" action="{{ Url() }}/painel/update">
                <textarea id="editor" name="texto">
                    {{ \App\Models\Update::get() }}
                </textarea>

                <button type="submit" class="btn btn-success mt-3">Atualizar</button>
            </form>
        </div>

    </main>



@endsection
