@extends('layouts.app')

@section('content')


    <main class="pages login">

        <div class="login-wrapper d-flex justify-content-center align-items-center">
            <div class="form-login">

                <h3 class="text-center">Login Painel</h3>

                <form action="{{ Url() }}/loginUser" method="POST" class="form-group">
                    <input class="form-control" type="text" name="user" placeholder="Usuário">
                    <input class="form-control" type="password" name="password" placeholder="*********">

                    <button type="submit" class="btn btn-dark mt-2">Logar</button>
                </form>

            </div>
        </div>

    </main>


@endsection
