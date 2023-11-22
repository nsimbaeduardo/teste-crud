<?php
    include_once 'includes/header.php';
?>



<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Idade</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td >Nsimba Eduardo</td>
                    <td>Matambi Lukoki</td>
                    <td>nsimba570@gmail.com</td>
                    <td>20</td>
                    <td><a class="btn-floating orange" href=""><i class="material-icons">edit</i></a></td>
                    <td><a class="btn-floating red" href=""><i class="material-icons">delete</i></a></td>
                </tr>
            </tbody>
        </table>
        <br>

        <a class="btn" href="php-action/adicionar.php">Adicionar</a>
    </div>
</div>



<?php
    include_once 'includes/footer.php';
?>

   
