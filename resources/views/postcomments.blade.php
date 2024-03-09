@include('layout.navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Post/Comments</title>
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
        <h4 class="text-center fw-bold border-bottom pb-3"> Comments on post </h4>
        {{-- @dd($postcomments); --}}
        <div class="table-responsive pt-5">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Post Title</th>
                        <th>Image</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($postcomments as $comment)
                    <tr>
                        <td>{{ $comment->post->title }}</td>
                        <td>
                            <image src="{{ $comment->post->image }}" alt="Post image" height="100" width="100"></image>
                        </td>
                        <td>
                            @if($comment->comment != "")
                                {{ $comment->comment }}
                            @else
                                <p>No comment</p>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-danger">No data found</td>
                    </tr>
                    @endforelse
                </tbody>
                
            </table>
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