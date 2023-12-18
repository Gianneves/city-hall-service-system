<?php
    switch($_REQUEST["action"]) {
        case "register-protocol":
            $description = $_POST["description"];
            $date = $_POST["date"];
            $term = $_POST["term"];
            $taxpayer = $_POST["taxpayer"];
       
            $sql = "INSERT INTO protocol (description, date, term, taxpayer)
                    VALUES ('{$description}','{$date}','{$term}','{$taxpayer}')";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Protocolo criado com sucesso');</script>";
                print "<script>location.href='?page=consult-protocols';</script>";
            } else {
                print "<script>alert('Não foi possivel criar protocolo!');</script>";
                print "<script>location.href='?page=consult-protocols';</script>";
            }

            break;
        case "update-protocol":
            $description = $_POST["description"];
            $date = $_POST["date"];
            $term = $_POST["term"];
            $taxpayer = $_POST["taxpayer"];
    
            $sql = "UPDATE protocol SET
                                description='{$description}',
                                date='{$date}',
                                term='{$term}',
                                taxpayer='{$taxpayer}',
                            WHERE
                                id=" . $_REQUEST["id"];
    
            $res = $conn->query($sql);
    
            if ($res == true) {
                print "<script>alert('Protocolo editado com sucesso');</script>";
                print "<script>location.href='?page=consult-protocols';</script>";
            } else {
                print "<script>alert('Não foi possivel editar protocolo!');</script>";
                print "<script>location.href='?page=consult-protocols';</script>";
            }
    
        break;
        case "delete":
            $sql = "DELETE FROM protocol WHERE id=" . $_REQUEST["id"];

            $res = $conn->query($sql);
    
            if ($res == true) {
                print "<script>alert('Protocolo deletado com sucesso');</script>";
                print "<script>location.href='?page=consult-protocols';</script>";
            } else {
                print "<script>alert('Não foi possivel deletar protocolo!');</script>";
                print "<script>location.href='?page=consult-protocols';</script>";
            }
        break;
    }
?>