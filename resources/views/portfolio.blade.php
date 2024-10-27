<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jouxingngo</title>
</head>
<body>
    <h1 class="text-primary">Welcome to my portfolio</h1>
    @forelse ($projects as $project )
        <p>{{ $project->title }}</p>
        <p>Technologies :  
            @foreach ($project->technologies as $technology )
            {{ $technology["name"] }}
            @endforeach
        </p>
    @empty
        
    @endforelse
</body>
</html>