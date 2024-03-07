<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<style> 
    .card{
        display: flex;
        flex-direction: column;
        padding: 5px;
        margin: 20px;
        margin-bottom: 5px;
        height: 500px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        justify-content: space-between;
        margin: 5px;
    }

    .card-button{
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
</style>

<body>
    {{-- @dd($posts); --}}
    <div class="container-fluid px-5 pt-3">
        <h4 class="text-center fw-bold border-bottom pb-3"> Posts / Has Many Relationship</h4>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @forelse ($posts as $post)            
                <div class="col">
                    <div class="card post-card">
                        <div class="card-body">
                            <h5 class="card-title">Post ID: {{ $post->id ?? '-' }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">User Name: {{ $post->user->name ?? '-' }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">User id: {{ $post->user->id ?? '-' }}</h6><br>
                            <img src="{{$post->image}}" alt="Post image" height="200" width="340"><br>
                            <p class="card-text">Post Title: {{ $post->title ?? '-' }}</p>
                            <p class="card-text">Post Description: {{ $post->description ?? '-' }}</p>
                            <div class="card-button">
                                <a href="#" class="btn btn-outline-success">Add Comment</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p class="text-danger">No data found</p>
                </div>
            @endforelse
        </div>
    </div>
</body>

</html>
