<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1>INPUT FORM</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label>Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" value="<?= $name ?>" class="form-control" placeholder="Enter your name">
                                <span class="text-danger"><?= $err_name?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Class <span class="text-danger">*</span></label>
                                <input type="text" name="class" value="<?= $class ?>" class="form-control" placeholder="Enter your class">
                                <span class="text-danger"><?= $err_class?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Roll <span class="text-danger">*</span></label>
                                <input type="text" name="roll" value="<?= $roll ?>" class="form-control" placeholder="Enter your roll">
                                <span class="text-danger"><?= $err_roll?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Registration <span class="text-danger">*</span></label>
                                <input type="text" name="registration" value="<?= $registration ?>" class="form-control" placeholder="Enter your registration no">
                                <span class="text-danger"><?= $err_registration?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label>Note</label>
                               <textarea name="note" class="form-control" placeholder="write a note"><?= $note ?></textarea>
                               <span class="text-danger"><?= $err_note?></span>
                            </div>
                            <input type="submit" name="submit" value="submit" class="btn btn-sm btn-outline-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>