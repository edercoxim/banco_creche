@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    Voce esta Logado!
=======
                    You are logged in!
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
