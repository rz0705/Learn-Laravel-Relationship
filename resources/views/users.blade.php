@include('layout.navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users</title>
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
        <h4 class="text-center fw-bold border-bottom pb-3"> Users / One to One Relationship</h4>
        <div class="table-responsive pt-5">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    {{-- @dd($users); --}}
                    {{-- @dd($user->userProfile->phone_number); --}}
                        <tr>
                            <td>{{ $user->id }} </td>
                                <td><a href="{{route('getUserPosts', $user->id)}}">{{ $user->name }}</a></td>
                            <td>
                                <p>Primary: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a><br />
                                    Alternate: <a href="mailto:{{ $user->userProfile->alternate_email ?? '-' }}">{{ $user->userProfile->alternate_email ?? '-' }}
                                </p>
                            </td>
                            <td>
                                <p>Primary: {{ $user->userProfile->phone_number ?? '-'}} <br />
                                    Alternate: {{ $user->userProfile->alternate_phone ?? '-' }}
                                </p>
                            </td>
                            <td>
                                <p>Address: {{ $user->userProfile->address ?? '-'}} <br />
                                    City: {{ $user->userProfile->city ?? '-'}} <br />
                                    State: {{ $user->userProfile->state ?? '-'}} <br />
                                    Country: {{ $user->userProfile->country ?? '-'}} <br />
                                    Zip: {{ $user->userProfile->zip_code ?? '-'}}
                                </p>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <p class="text-danger">No post found </p>
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