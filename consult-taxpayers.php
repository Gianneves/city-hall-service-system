<div class="container home-title">
    <h1 class="mb-5">Consultar Contribuintes</h1>
</div>

<?php
    $sql = "SELECT * FROM person";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped tabled table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>CPF</th>";
        print "<th>Sexo</th>";
        print "<th>Cidade</th>";
        print "<th>Bairro</th>";
        print "<th>Rua</th>";
        print "<th>Número</th>";
        print "<th>Complemento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->name . "</td>";
            print "<td>" . $row->birthdate . "</td>";
            print "<td>" . $row->cpf . "</td>";
            print "<td>" . $row->gender . "</td>";
            print "<td>" . $row->city . "</td>";
            print "<td>" . $row->district . "</td>";
            print "<td>" . $row->street . "</td>";
            print "<td>" . $row->number . "</td>";
            print "<td>" . $row->complement . "</td>";
            print "<td>
                    <button onclick=\"location.href='?page=update-taxpayer&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save-user&action=delete&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não foi encontrado resultados!</p>";
    }
    ?>