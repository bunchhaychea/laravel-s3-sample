<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload</title>
</head>
<body>
  <div class="max-w-sm mx-auto py-8">
    <form action="/" method="post" enctype="multipart/form-data">
      @csrf
        <input type="file" name="image" id="image">
        <button type="submit">Upload</button>
    </form>
  </div>
</body>
</html>