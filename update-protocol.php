<div class="container mt-5">
    <h1 class="home-title mt-5 mb-5">Editar Protocolo</h1>

    <?php
    $sql = "SELECT * FROM protocol WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>

    <form action="?page=save-protocol" method="POST">
        <input type="hidden" name="action" value="update-protocol">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <div class="mb-3">
            <label>Descrição: </label>
            <input type="text" name="description" value="<?php print $row->description; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data: </label>
            <input type="date" name="date" value="<?php print $row->date; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Prazo: </label>
            <input type="text" name="term" value="<?php print $row->term; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Id do Contribuinte: </label>
            <input type="text" name="id_taxpayer" value="<?php print $row->taxpayer; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>