<?php
require_once("base.php");
class Medicina extends BaseController
{
    function getArchieveActivity() //prende tutte le attività formative
    {
        $sql = "SELECT p.codice, p.nome, p.CFU
        FROM formativa_didattica f
        RIGHT JOIN piano_di_studi p ON p.codice = f.didattica
        WHERE f.didattica IS NULL;";
        $result = $this->conn->query($sql);
        $this->SendOutput($result, JSON_OK);
    }
    function ReturnArchieveActivity() //prende tutte le attività formative, ma non le invia
    {
        $sql = "SELECT p.codice, p.nome, p.CFU
        FROM formativa_didattica f
        RIGHT JOIN piano_di_studi p ON p.codice = f.didattica
        WHERE f.didattica IS NULL;";
        $result = $this->conn->query($sql);
        return $result;
    }
    function getArchieveUnity()
    {
        $sql = "SELECT p1.codice AS 'a_codice', p1.nome AS 'a_nome', p2.codice AS 'u_codice', p2.nome AS 'u_nome' 
        FROM piano_di_studi p1
        INNER JOIN formativa_didattica fd ON p1.codice = fd.formativa
        INNER JOIN piano_di_studi p2 ON p2.codice = fd.didattica
        WHERE 1=1;";
        $result = $this->conn->query($sql);
        $this->SendOutput($result, JSON_OK);
    }
    function deleteActivity($codice)
    {
        $sql = sprintf(
            "SELECT fd.didattica 
            FROM formativa_didattica fd 
            INNER JOIN piano_di_studi pd ON pd.codice = fd.formativa
            WHERE pd.codice = '%s'",
            $codice
        );
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            unset($sql);
            $sql = sprintf(
                "DELETE FROM formativa_didattica 
                WHERE formativa = '%s'",
                $codice
            );
            $this->conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                unset($sql);
                $sql = sprintf(
                    "DELETE FROM piano_di_studi 
                    WHERE codice = '%s'",
                    $row['didattica']
                );
                $this->conn->query($sql);
            }
        }

        unset($sql);
        $sql = sprintf(
            "DELETE FROM piano_di_studi 
            WHERE codice = '%s'",
            $codice
        );
        $this->conn->query($sql);
    }
    function deleteUnity($codice)
    {
        $sql = sprintf(
            "SELECT fd.formativa
            FROM formativa_didattica fd 
            INNER JOIN piano_di_studi pd ON pd.codice = fd.didattica
            WHERE pd.codice = '%s'",
            $codice
        );
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            unset($sql);
            $sql = sprintf(
                "DELETE FROM formativa_didattica 
                WHERE didattica = '%s'",
                $codice
            );
            $this->conn->query($sql);
        }

        unset($sql);
        $sql = sprintf(
            "DELETE FROM piano_di_studi 
            WHERE codice = '%s'",
            $codice
        );
        $this->conn->query($sql);
    }
}
?>