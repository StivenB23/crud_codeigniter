<?php
$id = $data[0]['idpeople'];
$document = $data[0]['numberDocument'];
$name = $data[0]['name'];
$lastname = $data[0]['lastname'];
$age = $data[0]['age'];
$sex = $data[0]['sex'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://bootswatch.com/5/sandstone/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row pt-5">
            <h1>UPDATE INFORMATION</h1>
            <div class="col-8 redonded p-3 shadow-lg">
                <form method="post" action="<?php echo base_url() . '/update' ?>">
                    <input type="hidden" id="idPeople" name="idPeople" value="<?php echo $id ?>">
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-2 col-form-label">Number Document:</label>
                        <div class="col-sm-10">
                            <input type="number" readonly class="form-control-plaintext" name="numberdocument"  id="" value="<?php echo $document ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="" value="<?php echo $name ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lastname" class="col-sm-2 col-form-label">Lastname:</label>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" class="form-control" id="" value="<?php echo $lastname ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6">
                            <label for="lastname" class="col-sm-2 col-form-label">Age:</label>
                            <div class="col-sm-12">
                                <input type="number" name="age" class="form-control" id="" value="<?php echo $age ?>" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="col-sm-12">
                                <label for="lastname" class="col-sm-2 col-form-label">Sex:</label>
                                <select name="sex" class="form-control" required>
                                    <option>Seleccionar</option>
                                    <?php if($sex == 'Man'): ?>
                                        <option value="Man" selected>Man</option>
                                        <option value="Woman">Woman</option>

                                    <?php endif; ?>
                                    <?php if($sex == 'Woman'): ?>
                                        <option value="Woman" selected>Woman</option>
                                        <option value="Man" >Man</option>

                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="m-3 row">
                        <button class="btn btn-primary d-grid">Update</button>
                    </div>
                    <a href="/" >Come Back</a>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>