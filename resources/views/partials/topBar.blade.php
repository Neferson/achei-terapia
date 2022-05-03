@extends('admin.layouts.main')

@section ('contentTopBar')

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

        <div class="container">
            <div class="navbar-nav mr-auto ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo_acheiterapia.jpg" alt="" style="width: 160px">
                </a>
            </div>

            <div class="navbar-nav mr-auto">
                <span><b> {{ auth()->user()->name }} </b></span>
            </div>

            <div class="navbar-nav ml-auto ">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-success" type="submit" onclick="userLogOut()" >Sair</button>
                </form>
            </div>

        </div>
    </nav>

@endsection


@section('scriptTopBar')
    <script>

        let nameTitle = 'João';

        function userLogOut() {
            // nameTitle = 'Maria'
            console.log('Clicou para sair:', nameTitle);
            return nameTitle;
        };

    </script>
@endsection

