<?php
switch ($_POST["action"]) {
    case 'register-person':
        $name = $_POST["name"];
        $birthdate = $_POST["birthdate"];
        $cpf = $_POST["cpf"];
        $gender = $_POST["gender"];
        $city = $_POST["city"];
        $district = $_POST["district"];
        $street = $_POST["street"];
        $number = $_POST["number"];
        $complement = $_POST["complement"];

        $sql = "INSERT INTO person (name, birthdate, cpf, gender, city, district, street, number, complement)
                        VALUES ('{$name}', '{$birthdate}', '{$cpf}', '{$gender}', '{$city}',
                        '{$district}', '{$street}', '{$number}', '{$complement}')";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Contribuinte cadastrado com sucesso');</script>";
            print "<script>location.href='?page=registration';</script>";
        } else {
            print "<script>alert('Não foi possivel cadastrar contribuite!');</script>";
            print "<script>location.href='?page=registration';</script>";
        }
        break;
    case 'update-taxpayer':
        $name = $_POST["name"];
        $birthdate = $_POST["birthdate"];
        $cpf = $_POST["cpf"];
        $gender = $_POST["gender"];
        $city = $_POST["city"];
        $district = $_POST["district"];
        $street = $_POST["street"];
        $number = $_POST["number"];
        $complement = $_POST["complement"];

        $sql = "UPDATE person SET
                            name='{$name}',
                            birthdate='{$birthdate}',
                            cpf='{$cpf}',
                            gender='{$gender}',
                            city='{$city}',
                            district='{$district}',
                            street='{$street}',
                            number='{$number}',
                            complement='{$complement}'
                        WHERE
                            id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Contribuinte editado com sucesso');</script>";
            print "<script>location.href='?page=consult-taxpayers';</script>";
        } else {
            print "<script>alert('Não foi possivel editar contribuite!');</script>";
            print "<script>location.href='?page=consult-taxpayers';</script>";
        }

        break;
    case 'delete':
        $sql = "DELETE FROM person WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Contribuinte deletado com sucesso');</script>";
            print "<script>location.href='?page=consult-taxpayers';</script>";
        } else {
            print "<script>alert('Não foi possivel deletar contribuite!');</script>";
            print "<script>location.href='?page=consult-taxpayers';</script>";
        }
        break;
}
?>