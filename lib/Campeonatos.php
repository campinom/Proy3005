<?php

class Campeonato{
    var $codigo;
    var $nombre;
    var $fechanicio;
    var $fechatermino;
    var $cantidadpartidos;
    var $oDB;
    
    
    public function ListaCampeonatos(){
        if(!isset($this->$oDB)){
            $this->$oDB= new Conexion();
        }
        $oConn= new Conexion();
        
        if($oConn->Conectar())
            $this->$oDB=$oConn->objconn;
        else
            return FALSE;
        
        $sql="SELECT idcampeonato, codigo, nombre, fechainicio, fechatermino, cantidadpartidos. FROM campeonato";
        
        $resultado=$db->query(sql);
        $i=0;
        while($fila = $resultado->fetch_assoc()){
            $oCampeonato= new Campeonato()
        }
        
        
        
        $oCampeonato=new Campeonato();
        
        return $oCampeonato;
    }
    
}

