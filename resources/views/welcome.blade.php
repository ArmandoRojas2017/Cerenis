@extends ('template/index')

@section ('cuerpo')
    
    <div class="flex-center position-ref full-height">
            <div class="content container jumbotron" >
                <div class="title m-b-md">
                    {{ $titulo }}
                </div>

                <h2>by: {{ $autor }} </h2>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
@endsection 