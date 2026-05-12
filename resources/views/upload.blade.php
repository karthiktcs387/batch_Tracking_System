<!DOCTYPE html>
<html>
<head>
    <title>Batch Processing</title>
</head>
<body>

<h1>File Upload System</h1>

<form method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>

</body>
</html>