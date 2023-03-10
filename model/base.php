<?php

define(
    'JSON_OK',
    array(
        'Content-Type: application/json',
        'HTTP/1.1 200 OK'
    )
);

class BaseController
{
    public $conn;
    function __construct($connection)
    {
        $this->conn = $connection;
    }

    protected function SendOutput($data, $headers = array()) //Mostra contenuto json come jsonencode passandogli le informazioni che si vogliono vedere
    {
        $this->SetHeaders($headers);

        $arr = array();
        while ($row = $data->fetch_assoc()) {
            array_push($arr, $row);
        }
        print_r(json_encode($arr, JSON_PRETTY_PRINT));
        exit;
    }
    public function SendError($headers = array()) //Viene utilizzata per inviare una risposta JSON che indica un errore di parametro incorretto. Viene chiamata passando un array di intestazioni HTTP opzionale.
    {
        $this->SetHeaders($headers);

        $err = "incorrect_parameters";
        print_r(json_encode($err));
        exit;
    }
    public function SendState($state, $headers = array()) //Viene utilizzata per inviare una risposta JSON che rappresenta lo stato corrente dell'applicazione. Richiede un parametro di stato e un array di intestazioni HTTP opzionale.
    {
        $this->SetHeaders($headers);

        print_r(json_encode($state));
        exit;
    }


    protected function SetHeaders($httpHeaders = array()) //Viene utilizzata per impostare le intestazioni HTTP sulla risposta. Rimuove l'intestazione 'Set-Cookie' (se presente) e imposta eventuali altre intestazioni specificate nell'array di intestazioni HTTP passato come parametro.
    {
        header_remove('Set-Cookie');
        if (is_array($httpHeaders) && count($httpHeaders)) {
            foreach ($httpHeaders as $httpHeader) {
                header($httpHeader);
            }
        }
    }
}
?>