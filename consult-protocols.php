<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/consulting-protocols.css">
</head>

<div class="container home-title">
    <h1 class="mt-5 mb-5">Consultar Protocolos</h1>
</div>
<div>
    <?php
    $sql = "SELECT * FROM protocol";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped tabled table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Descrição</th>";
        print "<th>Data</th>";
        print "<th>Prazo</th>";
        print "<th>Contribuinte</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->description . "</td>";
            print "<td>" . $row->date . "</td>";
            print "<td>" . $row->term . ' dia(s)' . "</td>";
            print "<td><button onclick=\"location.href='?page=taxpayer-consult&id=" . $row->id . "';\" class='btn btn-success'>Ver</button></td>";
            print "<td>
                    <button onclick=\"location.href='?page=update-protocol&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>
                    
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save-protocol&action=delete&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
                  </td";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não foi encontrado resultados!</p>";
    }
    ?>

</div>
<div class="consulting-protocol"></div>

