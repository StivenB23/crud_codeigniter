<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Codeigniter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://bootswatch.com/5/sandstone/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-lg mb-3 bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">System People</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#formRegister">
            Register new People
        </button>
        <div class="row">
            <!-- Modal -->
            <div class="modal fade" id="formRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Form People</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo base_url() . '/create' ?>">
                                <div class="mb-3 row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Number Document:</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="numberdocument" class="form-control" id="" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="" required >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="lastname" class="col-sm-2 col-form-label">Lastname:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="lastname" class="form-control" id="" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-6">
                                        <label for="lastname" class="col-sm-2 col-form-label">Age:</label>
                                        <div class="col-sm-12">
                                            <input type="number" name="age" class="form-control" id="" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-sm-12">
                                            <label for="lastname" class="col-sm-2 col-form-label">Sex:</label>
                                            <select name="sex" class="form-control" required >
                                                <option>Seleccionar</option>
                                                <option value="Man">Man</option>
                                                <option value="Woman">Woman</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-3 row">
                                    <button class="btn btn-primary d-grid">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table table-responsive">
                    <table class="table table-light table-hover text-center shadow-lg ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Document</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Age</th>
                                <th scope="col">Sex</th>
                                <th scope="col" colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $key) : ?>
                                <tr>
                                    <th scope="row"><?php echo $key->idpeople; ?></th>
                                    <td><?php echo $key->numberDocument; ?></td>
                                    <td><?php echo $key->name; ?> <?php echo $key->lastname; ?></td>
                                    <td><?php echo $key->age; ?></td>
                                    <td><?php echo $key->sex; ?></td>
                                
                                    <td><a href="<?php echo base_url() . '/findId/' . $key->idpeople ?>" class="btn btn-warning btn-sm ">Edit</a></td>
                                    <td><a href="<?php echo base_url() . '/delete/' . $key->idpeople ?>" class="btn btn-danger btn-sm ">Delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let message = '<?php echo $message ?>';

        if (message == 'saveError') {
            Swal.fire({
                title: 'Create!',
                text: 'Add error, sorry an error ocurred',
                icon: 'error',
                confirmButtonText: 'Cool'
            })

        } else if (message == 'saveSuccessfully') {
            Swal.fire({
                title: 'Create!',
                text: 'Add success',
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        } else if (message == 'updateSuccessfully') {
            Swal.fire({
                title: 'Update!',
                text: 'Update success',
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        } else if (message == 'updateError') {
            Swal.fire({
                title: 'Update!',
                text: 'Update Error, sorry an error ocurred',
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        } else if (message == 'deleteSuccessfully') {
            Swal.fire({
                title: 'Delete!',
                text: 'People delete success',
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        } else if (message == 'deleteError') {
            Swal.fire({
                title: 'Delete!',
                text: 'delete Error, sorry an error ocurred',
                icon: 'error',
                confirmButtonText: 'Cool'
            })
        }
    </script>
</body>

</html>