<?php

namespace Alansnow\Ciencia\modelo;
use PDO;
use Exception;

class Categoria {

    private $id;
    private $titulo;
    private $fecha;
    private $descripcion;
    private $archivo;
    private $tipo;

    public function agregar($conectar,$temaId,$lenguaId,$usuarioId) {
        try {
            $consulta=$conectar->prepare("INSERT INTO categorias(titulo,fecha,descripcion,archivo,tipo,tema_id,lengua_id,usuario_id)
            VALUES(:titulo,NOW(),:descripcion,:archivo,:tipo,:temaId,:lenguaId,:usuarioId)");
            $consulta->bindValue(":titulo",$this->titulo);
            $consulta->bindValue(":descripcion",$this->descripcion);
            $consulta->bindValue(":archivo",$this->archivo);
            $consulta->bindValue(":tipo",$this->tipo);
            $consulta->bindValue(":temaId",$temaId);
            $consulta->bindValue(":lenguaId",$lenguaId);
            $consulta->bindValue(":usuarioId",$usuarioId);
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return $e;
        } 
    }

    public function editar($conectar,$temaId,$lenguaId,$usuarioId) {
        try {
            $consulta=$conectar->prepare("UPDATE categorias SET titulo=:titulo,descripcion=:descripcion,archivo=:archivo,tipo=:tipo,tema_id=:tema_id,lengua_id=:lengua_id,usuario_id=:usuario_id WHERE id=:id");          
            $consulta->bindValue(":titulo",$this->titulo);
            $consulta->bindValue(":descripcion",$this->descripcion);
            $consulta->bindValue(":archivo",$this->archivo);
            $consulta->bindValue(":tipo",$this->tipo);
            $consulta->bindValue(":tema_id",$temaId);
            $consulta->bindValue(":lengua_id",$lenguaId);
            $consulta->bindValue(":usuario_id",$usuarioId);
            $consulta->bindValue(":id",$this->id);                          
            $consulta->execute();
            return true;        
        } catch (Exception $e) {
            return $e;
        }
    }

    public function eliminar($conectar) {
        try {
            $consulta=$conectar->prepare("DELETE FROM categorias WHERE id=:id");  
            $consulta->bindValue(":id",$this->id);        
            $consulta->execute();
            return true;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerCategorias($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT titulo FROM categorias"); 
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();          
        } catch (Exception $e) {
            return 0;
        }
    }
    

    public function obtenerArchivo($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT archivo FROM categorias WHERE id=:id"); 
            $consulta->bindValue(":id",$this->id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return $e;
        }
    }

    public function existe($conectar) {
        try {
            $consulta=$conectar->prepare("SELECT categoria_id FROM contenido WHERE categoria_id=:id"); 
            $consulta->bindValue(":id",$this->id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerTodos($conectar) {
        try {
            $consulta = $conectar->prepare("
                SELECT c.id, c.titulo, c.fecha, c.descripcion, c.archivo, c.tipo, 
                t.nombre AS tema, l.nombre AS nombre, a.usuario AS usuario
                FROM categorias c
                JOIN temas t ON c.tema_id = t.id
                JOIN lenguas l ON c.lengua_id = l.id
                JOIN administradores a ON c.usuario_id = a.id
            "); 
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return 0;
        }
    }

    public function categoriasContenido($conectar,$id) {
        try {
            $consulta = $conectar->prepare("
            SELECT c.* 
            FROM categorias c
            JOIN categorias c2 ON c.tipo = c2.tipo
            WHERE c2.id = :id;
            "); 
            $consulta->bindValue(":id",$id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        } catch (Exception $e) {
            return $e;
        }
    }

    public function obtenerId($conectar,$id) {
        try {
            $consulta=$conectar->prepare("SELECT id,titulo,tipo,lengua_id FROM categorias WHERE lengua_id=:lengua_id"); 
            $consulta->bindValue(":lengua_id",$id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return 0;
        }
    }

    public function obtenerPorVideo($id,$conectar) {
        try {
            $consulta=$conectar->prepare("SELECT id,titulo,fecha,descripcion,archivo FROM categorias WHERE tipo='Video' AND tema_id=:id");
            $consulta->bindValue(":id",$id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return 0;
        }
    }

    public function ultimasCategoriasCombinadas($conectar) {
        try {
            $consulta = $conectar->prepare("
                (SELECT id, titulo, tipo, archivo
                FROM categorias
                WHERE tipo = 'Video'
                ORDER BY fecha DESC
                LIMIT 4)
    
                UNION ALL
    
                (SELECT id, titulo, tipo, archivo
                FROM categorias
                WHERE tipo = 'Infografia'
                ORDER BY RAND()
                LIMIT 4);
            ");
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        } catch (Exception $e) {
            return 0;
        }
    }
    

    public function obtenerPorInfografia($id,$conectar) {
        try {
            $consulta=$conectar->prepare("SELECT id,titulo,fecha,descripcion,archivo FROM categorias WHERE tipo='Infografia' AND tema_id=:id");
            $consulta->bindValue(":id",$id);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return 0;
        }
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id; 
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo; 
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getFecha() {
        return $this->fecha; 
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion() {
        return $this->descripcion; 
    }

    public function setArchivo($archivo) {
        $this->archivo = $archivo;
    }

    public function getArchivo() {
        return $this->archivo; 
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo; 
    }
}