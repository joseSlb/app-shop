@extends('layouts.app')

@section('body-class' ,'signup-page') <!-- primer valor es la seccion / segundo valor es el nombre de la clase -->


@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
               
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                      
               
                <form class="form" method="POST"  action="{{ route('register') }}">
                       
                    {!! csrf_field() !!} <!-- ACA VA TOKEN CSRF-->

                    <div class="header header-primary text-center">
                        <h4>Registro</h4>
                    </div>
                    <p class="text-divider">Completa tus datos</p>
                    <div class="content">

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">face</i>
                            </span>
                            <input type="text" class="form-control" placeholder="Nombre" 
                            name="name" value="{{ old('name') }}" required autofocus>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <input type="email" class="form-control" placeholder="Correo electronico" name="email" value="{{ old('email') }}" 
                            required autofocus>                       
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            <input type="password" id="password" placeholder="Password..." class="form-control" name="password" required />
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            <input type="password" placeholder="Password confirm" class="form-control" 
                            name="password_confirmation" required />
                        </div>

                         <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Registrar</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="http://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2016, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">Creative Tim</a>
        </div>
    </div>
</footer>

</div>
@endsection