@extends('layout.hearder')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <center>
            	<a href="{{ route('login_direcao') }}"><button type="button" class="btn btn-outline-secondary btn-lg" style="width: 200px; height: 100px">DIREÇÃO</button></a></br></br>
            	<a href="{{ route('login_docente') }}"><button type="button" class="btn btn-outline-secondary btn-lg" style="width: 200px; height: 100px">DOCENTE</button></a></br></br>
            	<a href="{{ route('login_aluno') }}"><button type="button" class="btn btn-outline-secondary btn-lg" style="width: 200px; height: 100px">ALUNO(A)</button></a>
        	</center>

        </div>
    </div>
</div>
@endsection