<?php

//Indicamos o namespace

namespace Model;

//Criamos a herança entre comentario e ComentarioDAO
class ComentarioDAO extends Comentario
{
    //Atributos - serão os comandos SQL  + um objeto Sql
    private static $SELECT_ALL = "select * from comentario where cod_status_comentario = '1'";

    private static $SELECT_ID = "select * from comentario where id_comentario = :idComentario";
    private static $INSERT = "INSERT INTO comentario
                                (id_comentario_parente, txt_comentario, data_hora_comentario, id_post, id_usuario)
                                VALUES (:idComentarioParente, :txtComentario, :dataHoraComentario, :idPost, :idUsuario)";

    private static $UPDATE = "UPDATE comentario SET
                                 txt_comentario = :txtComentario 
                              WHERE id_comentario =  :idComentario";

    //DELETE lógico -> altera status
    private static $DELETE = "UPDATE comentario SET
                                    cod_status_comentario = '0'
                                WHERE id_comentario = :idComentario ";

    //Atributo par armazenar o Objeto SQL 
    private $sql;

    //Método Construtor - setamos os parametros e passamos um obj SQL
    public function __construct($objSql = "", $idComentario = "", $txtComentario = "", $dataHoraComentario = "", $codStatusComentario = "", $idPost = "", $idUsuario = "", $idComentarioParente = "")
    {
        parent::__construct($idComentario, $txtComentario, $dataHoraComentario, $codStatusComentario, $idPost, $idUsuario, $idComentarioParente);
        $this->sql = $objSql;
    }

    //Métodos especialistas - irão executar os SQL dos Atributos

    public function listarComentario()
    {
        //executar a consulta no banco
        $result = $this->sql->query(ComentarioDAO::$SELECT_ALL);
     
        //devolver o resultado
        if ($result->rowCount() > 0) {
            while ($linha = $result->fetch(\PDO::FETCH_OBJ)) {
                $itens[] = array(
                    'idComentario' => $linha->id_comentario,
                    'idComentarioParente' => $linha->id_comentario_parente,
                    'txtComentario' => $linha->txt_comentario,
                    'dataHoraComentario' => $linha->data_hora_comentario,
                    'codStatusComentario' => $linha->cod_status_comentario,
                    'idPost' => $linha->id_post,
                    'idUsuario' => $linha->id_usuario
                );
            }
        } else {
            $itens = null;
        }
        return $itens;
    }

    public function listarComentarioId()
    {
        //executar a consulta no banco
        $result = $this->sql->query(
            ComentarioDAO::$SELECT_ID,
            array(
                ':idComentario' => array(0 => $this->getIdComentario(), 1 => \PDO::PARAM_INT)
            )
        );
        if ($result->rowCount() == 1) {
            $linha = $result->fetch(\PDO::FETCH_OBJ);
            $itens = array(
                'idComentario' => $linha->id_comentario,
                'idComentarioParente' => $linha->id_comentario_parente,
                'txtComentario' => $linha->txt_comentario,
                'dataHoraComentario' => $linha->data_hora_comentario,
                'codStatusComentario' => $linha->cod_status_comentario,
                'idPost' => $linha->id_post,
                'idUsuario' => $linha->id_usuario
            );
        } else {
            $itens = null;
        }
        //devolver o resultado     
        return $itens;
    }

    public function adicionarComentario()
    {
        $result = $this->sql->execute(
            ComentarioDAO::$INSERT,
            array(
                ':idPost' => array(0 => $this->getIdPost(), 1 => \PDO::PARAM_STR),
                ':idUsuario' => array(0 => $this->getIdUsuario(), 1 => \PDO::PARAM_INT),
                ':idComentarioParente' => array(0 => $this->getIdComentarioParente(), 1 => \PDO::PARAM_INT),
                ':txtComentario' => array(0 => $this->getTxtComentario(), 1 => \PDO::PARAM_STR),
                ':dataHoraComentario' => array(0 => $this->getDataHoraComentario(), 1 => \PDO::PARAM_STR)
                
            )
        );
        return $result;
    }

    public function alterarComentario()
    {
        $result = $this->sql->execute(
            ComentarioDAO::$UPDATE,
            array(
                ':txtComentario' => array(0 => $this->getTxtComentario(), 1 => \PDO::PARAM_STR),
                ':idComentario' => array(0 => $this->getIdComentarioParente(), 1 => \PDO::PARAM_INT)
            )
        );
        return $result;
    }

    public function excluirComentario()
    {
        $result = $this->sql->execute(
            ComentarioDAO::$DELETE,
            array(
                'idComentario' => array(0 => $this->getIdcomentario(), 1 => \PDO::PARAM_INT)
            )
        );
        return $result;
    }
}
