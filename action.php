<?php
include 'conexao.php';

class Action {

    public function cadastrar(Data $data){
            $bd = new Conexao();
            $con = $bd->getConexao();

            $sql = "INSERT INTO contatos (nome, email, telefone) VALUES (?, ?, ?)";
            $stm = $con->prepare($sql);

            $retorno = $stm->execute([
                $data->getNome(),
                $data->getEmail(),
                $data->getTelefone()
            ]);

            if($retorno){
                echo '<h1>Cadastrado com Sucesso!</h1><a href="index.php">Voltar</a>';
            } else {
                echo '<h1>Erro ao Cadastrar</h1><a href="index.php">Voltar</a>';
            }
        }

    public function consultar(){
            $bd = new Conexao();
            $con = $bd->getConexao();

            $sql = "SELECT * FROM contatos";
            $stm = $con->prepare($sql);
            $stm->execute();

            return $stm->fetchAll(\PDO::FETCH_ASSOC);
        }

    public function atualizar(Data $data){
            $bd = new Conexao();
            $con = $bd->getConexao();
            $sql = "UPDATE contatos SET nome = ?, email = ?, telefone = ? WHERE id = ?";
            $stm = $con->prepare($sql);

            $retorno = $stm->execute([
                $data->getNome(),
                $data->getEmail(),
                $data->getTelefone(),
                $data->getId() 
            ]);

            if($retorno){
                echo '<h1>Atualizado com Sucesso!</h1><a href="index.php">Voltar</a>';
            } else {
                echo '<h1>Erro ao Atualizar</h1><a href="index.php">Voltar</a>';
            }
        }

    public function excluir(Data $data){
            $bd = new Conexao();
            $con = $bd->getConexao();

            $sql = "DELETE FROM contatos WHERE id = ?";
            $stm = $con->prepare($sql);

            $retorno = $stm->execute([
                $data->getId()
            ]);

            if($retorno){
                echo '<h1>Excluído com Sucesso!</h1><a href="index.php">Voltar</a>';
            } else {
                echo '<h1>Erro ao Excluir</h1><a href="index.php">Voltar</a>';
            }
        }
    }
?>