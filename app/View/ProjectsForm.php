<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/form.css">
    <title>Projects</title>
</head>

<body>
    <div class="container">
        <h1>Projects</h1>

        <?php
        if(isset($_GET['success']) && $_GET['success'] == 1){
            echo "<div class=\"alert alert-success alert-dismissible fade show\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Sucesso ao cadastrar um projeto!</strong> Acesse o seu portfolio para verificar
            </div>";
        } else if(isset($_GET['success']) && $_GET['success'] == 0){
            echo "<div class=\"alert alert-danger alert-dismissible fade show\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Erro ao cadastrar um projeto!</strong> Algo deu errado ao tentar cadastrar um novo projeto
            </div>";
        }
        ?>

        <form method="post" action="InsertProject">

            <!-- Nome -->
            <div class="mb-3 mt-3">
                <label for="nome" class="form-label">Nome</label>
                <div class="col-md-12 mb-3"> <input type="text" class="form-control" id="nome" name="name" placeholder="Nome" maxlenght="64" minlenght="2" autocomplete='off' required>
                </div>
            </div>

            <!-- E-mail -->
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">E-mail</label>
                <div class="col-md-12 mb-3"> <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" maxlength="128" minlength="5" pattern="^[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}$" autocomplete='off' required>
                </div>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile" name="projectImage">
            </div>

            <div class="row g-3">
                <div class="col">
                    <label for="">Start Date</label>
                    <input type="date" class="form-control" placeholder="Start name" aria-label="First name" name="StartDate">
                </div>
                <div class="col">
                    <label for="">Finish Date</label>
                    <input type="date" class="form-control" placeholder="Finish Date" aria-label="Last name" name="FinishDate">
                </div>
            </div>


            <div class="clearfix">
                <button type="submit" class="btn btn-sm btn-outline-primary float-md-end mt-3 " id="cadastrar">Regsiter</button>
            </div>
        </form>
    </div>

</body>

</html>