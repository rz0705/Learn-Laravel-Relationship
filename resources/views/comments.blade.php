@include('layout.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .table {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-5 pt-3">
        <h4 class="text-center fw-bold border-bottom pb-3"> Comments </h4>
        <div class="table-responsive pt-5">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Post</th>
                        <th>Post Image</th>
                        <th>Comment</th>
                        <th>Post uploaded by</th>
                    </tr>
                    {{-- @dd($comments); --}}
                </thead>
                <tbody>
                    @forelse ($comments as $comment)
                        {{-- @dd($comment); --}}
                    {{-- @dd($comment->Post->user_id); --}}
                        <tr>
                            <td>{{ $comment->post->title ?? '-' }}</td>
                            <td>
                                <img src="{{ $comment->post->image ?? '-' }}" alt="Post image" height="100" width="100"></td>
                                {{-- <td>{{ $comment->post->image ?? '-' }}</td> --}}
                                <td>{{ $comment->comment ?? '-' }}</td>
                                <td>{{ $comment->post->user->name }} </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <p class="text-danger">No comments found </p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
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