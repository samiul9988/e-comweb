<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Create Product</h1>
    <div class="container">
    <form method="POST" action="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="name" name="name" class="form-control" id="" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripton</label>
            <input type="description" name="description" class="form-control" id="" aria-describedby="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example">
                <option selected></option>
              </select>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Upload Image</label>

            <input type="file" name="image" class="form-control" id="" aria-describedby="">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
