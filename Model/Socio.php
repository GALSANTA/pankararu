<?php

/**
 * Classe Socio
 *
 *Esta classe é a classe de acesso a tabela socio
 *
 *
 *@package Model
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */

namespace Model;

use \Core\Model;

class Socio extends Model
{
    public function getSocio($id)
    {
        $sql = "SELECT * FROM socio AS so
        JOIN endereco AS en ON so.id_endereco = en.id_endereco
        JOIN cidade AS ci ON en.id_cidade = ci.id_cidade
        JOIN estado AS es ON ci.sigla_estado = es.sigla_estado
        WHERE id_socio = :id_socio";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(":id_socio", $id);

        $sql->execute();

        return $sql->fetch();
    }

    public function getSocios()
    {
        $sql = "SELECT * FROM socio AS so
       JOIN endereco AS en ON so.id_endereco = en.id_endereco
       JOIN cidade AS ci ON en.id_cidade = ci.id_cidade
       JOIN estado AS es ON ci.sigla_estado = es.sigla_estado";

        $sql = $this->pdo->query($sql);

        return $sql->fetchAll();
    }

    public function getEstados()
    {
        $sql = "SELECT * FROM estado";
        $sql = $this->pdo->query($sql);

        return $sql->fetchAll();
    }

    public function buscar($filtro, $buscar)
    {
        $filtro2 = "";

        if ($filtro == 0) {

            $filtro2 = ":nome_socio";

            $sql = "SELECT * FROM socio AS so
            JOIN endereco AS en ON so.id_endereco = en.id_endereco
            JOIN cidade AS ci ON en.id_cidade = ci.id_cidade
            JOIN estado AS es ON ci.sigla_estado = es.sigla_estado
            WHERE nome_socio LIKE :nome_socio";
        }

        if ($filtro == 1) {

            $filtro2 = ":rg";

            $sql = "SELECT * FROM socio AS so
            JOIN endereco AS en ON so.id_endereco = en.id_endereco
            JOIN cidade AS ci ON en.id_cidade = ci.id_cidade
            JOIN estado AS es ON ci.sigla_estado = es.sigla_estado
            WHERE rg LIKE :rg";
        }

        if ($filtro == 2) {

            $filtro2 = ":cpf";

            $sql = "SELECT * FROM socio AS so
            JOIN endereco AS en ON so.id_endereco = en.id_endereco
            JOIN cidade AS ci ON en.id_cidade = ci.id_cidade
            JOIN estado AS es ON ci.sigla_estado = es.sigla_estado
            WHERE cpf LIKE :cpf";
        }

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue($filtro2, "%" . $buscar . "%");

        $sql->execute();

        return $sql->fetchAll();
    }

    //cadastro

    public function cadastrar($array): bool
    {

        if ($this->verificarCPF($array['cpf'])) {

            $id_endereco = $this->cadastrarEndereco($array);

            $sql = "INSERT INTO `socio`(`nome_socio`, `cpf`, `rg`, `dt_nascimento`,`email`, `nome_pai`, `nome_mae`, `telefone`, `id_endereco`) VALUES (:nome_socio, :cpf, :rg, :dt_nascimento, :email, :nome_pai, :nome_mae, :telefone, :id_endereco)";

            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':nome_socio', $array['nome']);
            $sql->bindValue(':cpf', $array['cpf']);
            $sql->bindValue(':dt_nascimento', $array['dt_nascimento']);
            $sql->bindValue(':rg', $array['rg']);
            $sql->bindValue(':email', $array['email']);
            $sql->bindValue(':nome_pai', $array['pai']);
            $sql->bindValue(':nome_mae', $array['mae']);
            $sql->bindValue(':telefone', $array['telefone']);
            $sql->bindValue(':id_endereco', $id_endereco);

            $sql->execute();

            $sql = ($sql->rowCount() > 0 ? TRUE : FALSE);

            return $sql;
        }
        return FALSE;
    }

    public function verificarCPF($cpf): bool
    {
        $sql = "SELECT * FROM socio WHERE cpf = :cpf";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(':cpf', $cpf);

        $sql->execute();

        $sql = ($sql->rowCount() > 0 ? FALSE : TRUE);

        return $sql;
    }

    public function cadastrarEndereco($array): int
    {
         
        $id_endereco = $this->verificarEndereco($array);
        $id_cidade = $this->cadastrarCidade($array);


        if ($id_endereco == 0) {

            $sql = "INSERT INTO `endereco`(`numero`, `rua`, `bairro`, `id_cidade`) VALUES (:numero, :rua, :bairro, :id_cidade  )";

            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':numero', $array['numero']);
            $sql->bindValue(':rua', $array['rua']);
            $sql->bindValue(':bairro', $array['bairro']);
            $sql->bindValue(':id_cidade', $id_cidade);

            $sql->execute();

            $id_endereco = $this->verificarEndereco($array);

            return $id_endereco;
        }

        return $id_endereco;
    }
    public function verificarEndereco($array)
    {

        $id_cidade = $this->cadastrarCidade($array);

        $sql = "SELECT id_endereco FROM endereco WHERE numero = :numero AND rua = :rua AND
        bairro = :bairro AND id_cidade = :id_cidade";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(':numero', $array['numero']);
        $sql->bindValue(':rua', $array['rua']);
        $sql->bindValue(':bairro', $array['bairro']);
        $sql->bindValue(':id_cidade', $id_cidade);

        $sql->execute();

        $sql = ($sql->rowCount() > 0 ? $sql->fetch()[0] : 0);

        return $sql;
    }

    public function cadastrarCidade($array): int
    {

        $id_cidade = $this->verificarCidade($array);

        if ($id_cidade == 0) {

            $sql = "INSERT INTO `cidade`(`sigla_estado`, `nome_cidade`)
            VALUES (:sigla_estado, :nome_cidade)";

            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':nome_cidade', $array['cidade']);
            $sql->bindValue(':sigla_estado', $array['estado']);

            $sql->execute();

            $id_cidade = $this->verificarCidade($array);

            return $id_cidade;
        }
        return $id_cidade;
    }

    public function verificarCidade($array): int
    {

        $sql = "SELECT id_cidade FROM cidade WHERE nome_cidade = :nome_cidade AND sigla_estado = :sigla_estado";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(':nome_cidade', $array['cidade']);
        $sql->bindValue(':sigla_estado', $array['estado']);

        $sql->execute();

        $sql = ($sql->rowCount() > 0 ? $sql->fetch()[0] : 0);

        return $sql;
    }

    //editar

    public function editar($array): bool
    {
        $id_endereco = $this->cadastrarEndereco($array);

        $sql = "UPDATE `socio` SET `nome_socio`= :nome_socio,`cpf`= :cpf,`rg`= :rg,
        `dt_nascimento`= :dt_nascimento,`email`= :email,`nome_pai`= :nome_pai,`nome_mae`=:nome_mae,
        `telefone`= :telefone,`id_endereco`= :id_endereco WHERE id_socio = :id_socio";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(':id_socio', $array['id']);
        $sql->bindValue(':nome_socio', $array['nome']);
        $sql->bindValue(':cpf', $array['cpf']);
        $sql->bindValue(':dt_nascimento', $array['dt_nascimento']);
        $sql->bindValue(':rg', $array['rg']);
        $sql->bindValue(':email', $array['email']);
        $sql->bindValue(':nome_pai', $array['pai']);
        $sql->bindValue(':nome_mae', $array['mae']);
        $sql->bindValue(':telefone', $array['telefone']);
        $sql->bindValue(':id_endereco', $id_endereco);

        $sql->execute();

        $sql = ($sql->rowCount() > 0 ? TRUE : FALSE);

        return $sql;

    }

    public function excluir($id)
    {
        $sql = "DELETE FROM socio WHERE id_socio = :id_socio";

        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(':id_socio', $id);

        $sql->execute(); 
    }
}
