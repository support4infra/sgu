<?php
class Dominio extends model {

    public function addDominio($nomeDominio, $nomeCliente, $id_entidade){
        $sql = $this->db->prepare("SELECT COUNT(*) as c FROM cadastro_dominio WHERE nomeDominio = :nomeDominio");
        $sql->bindValue(":nomeDominio", $nomeDominio);
        $sql->execute();
        $row = $sql->fetch();
        if ($row['c'] == '0') {
            $sql = $this->db->prepare("INSERT INTO cadastro_dominio SET id_entidade = :id_entidade, nomeDominio = :nomeDominio, nomeCliente = :nomeCliente");
            $sql->bindValue(":id_entidade", $id_entidade);
            $sql->bindValue(":nomeDominio", $nomeDominio);
            $sql->bindValue(":nomeCliente", $nomeCliente);
            $sql->execute();
            return '1';
        } else {
            return '0';
        }
        
    }

    public function getListDominio($id_entidade){
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM cadastro_dominio WHERE id_entidade = :id_entidade order by nomeCliente");
        $sql->bindValue(':id_entidade', $id_entidade);
        $sql->execute();
        $array = $sql->fetchAll();
        return $array;
    }

    public function getQuantidade(){
        $sql = "SELECT COUNT(*) as quantidadeDominios FROM cadastro_dominio";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            return $sql['quantidadeDominios'];
        } else {
            return 0;
        }
    }

    public function deletDominio($id){
        $sql = $this->db->prepare("DELETE FROM cadastro_dominio WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}