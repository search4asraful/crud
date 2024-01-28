<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
          <div class="card">
              <div class="card-header">
                <h3>User List</h3>
                <a href="create.php" class="btn btn-success float-end" style="margin-top: -40px;">Create new</a>
            </div>
            <div class="card-body">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td class="col-md-2">
                    <a href="update.php" class="btn btn-info">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                <td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td class="col-md-2">
                    <a href="#" class="btn btn-info">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                <td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Bird</td>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td class="col-md-2">
                    <a href="#" class="btn btn-info">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                <td>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>