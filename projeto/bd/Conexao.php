<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Conexao::abrirConexao();
class Conexao
{

    public static function abrirConexao()
    {
        $ambiente = "dev";

        switch ($ambiente) {
            case 'dev':
                $servername = "localhost";     
                $username = "root";
                $password = "usbw";
                $dbname = "mydb"; 
                break; 
            case 'tes':
                $servername = "";
                $username = "";
                $password = "";
                $dbname = "";
                break;
            case 'prd':
                $servername = "";
                $username = "";
                $password = "";
                $dbname = "";
                break;
            default:
                # code...
                break;
        }

        try {
            $conexao = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", "$username", "$password");

            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //echo "Está funcionando!";
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        
        }
        return $conexao;
    }
}
