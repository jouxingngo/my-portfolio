@extends('layouts.app')
@section('content')
<body>
    <header>
        @include('partials.navbar')
    </header>
    <main>
        @include('partials.hero')
        @include('partials.project')
        
    </main>
</body>
@endsection