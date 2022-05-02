@extends('admin.layouts.main')

@section ('contentTopBar')

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

        <div class="container">
            <div class="col">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo_acheiterapia.jpg" alt="" style="width: 160px">
                </a>
            </div>

            <div class="col navbar-nav mr-auto">
                <span><b> Nome de Usuário aqui</b></span>
            </div>

            <div class="navbar-nav ml-auto col">
                <button class="btn btn-success" type="button" onclick="userLogOut()" >Sair</button>
            </div>

        </div>
    </nav>

@endsection


@section('scriptTopBar')
    <script>

        // let nameTitle = 'João';

        function userLogOut() {
            // nameTitle = 'Maria'
            console.log('Clicou para sair:', nameTitle);
            return nameTitle;
        };

    </script>
@endsection

