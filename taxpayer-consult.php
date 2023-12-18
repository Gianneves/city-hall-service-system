<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/taxpayers.css">
</head>
<div class="arrow-back">
        <a href="?page=protocols">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" /> </svg>
        </a>
</div>

<div class="container home-title">
    <h1 class="mb-5">Contribuinte</h1>  
</div>

<?php
$sql = "SELECT * FROM person WHERE id=" . $_REQUEST["id"];

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
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não foi encontrado resultados!</p>";
}
?>