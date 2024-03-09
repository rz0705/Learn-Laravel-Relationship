@include('layout.navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

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
                            <p class="card-text">Uploaded on:{{$post->created_at ?? '-'}}</p>
                            <div class="card-button">
                                <a href="{{ route('getCommentsByPost', ['id' => $post->id]) }}" class="btn btn-outline-success">View Comment</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p class="text-danger">No post found</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
