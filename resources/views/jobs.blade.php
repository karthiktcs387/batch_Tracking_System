<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Files</title>
</head>
<body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">

    <h1 class="mb-4">Uploaded Files</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>File Name</th>
                <th>Status</th>
                <th>Download</th>
                <th>Delete</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

        @foreach($jobs as $job)

            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->file_name }}</td>
                <td>{{ $job->status }}</td>

                <td>
                    <a href="/uploads/{{ $job->file_name }}" class="btn btn-primary btn-sm" download>
                        Download
                    </a>
                </td>

                <td>
                    <a href="/delete/{{ $job->id }}" class="btn btn-danger btn-sm">
                        Delete
                    </a>
                </td>

                <td>
                    <a href="/complete/{{ $job->id }}" class="btn btn-success btn-sm">
                        Complete
                    </a>
                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

</body>
</html>