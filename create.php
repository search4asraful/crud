<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-md-12">
      <div class="card mx-auto col-md-6 mt-2 p-2">
        <h1>Create user</h1>
        <form action="#" method="POST">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Phone</label>
            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput3" class="form-label">Email</label>
            <input type="email" class="form-control" id="formGroupExampleInput3" placeholder="Another input placeholder">
          </div>
          <button type="submit" class="btn btn-sm btn-success">Create</button>
        </form>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>