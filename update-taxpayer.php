<div class="container">
    <h1 class="m-3 home-title">Editar Contribuinte</h1>

    <?php
        $sql = "SELECT * FROM person WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    ?>

    <form action="?page=save-user" method="POST">
        <input type="hidden" name="action" value="update-taxpayer">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <div class="mb-3">
            <label>Nome Completo: </label>
            <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data de Nascimento: </label>
            <input type="date" name="birthdate"  value="<?php print $row->birthdate; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Cpf (Apenas números): </label>
            <input type="text" name="cpf"  value="<?php print $row->cpf; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Sexo ("M" ou "F"): </label>
            <input type="text" name="gender"  value="<?php print $row->gender; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Cidade: </label>
            <input type="text" name="city"  value="<?php print $row->city; ?>"  class="form-control">
        </div>
        <div class="mb-3">
            <label>Bairro: </label>
            <input type="text" name="district"  value="<?php print $row->district; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Rua: </label>
            <input type="text" name="street"  value="<?php print $row->street; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Número: </label>
            <input type="text" name="number"  value="<?php print $row->number; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Complemento (Opcional): </label>
            <input type="text" name="complement"  value="<?php print $row->complement; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>