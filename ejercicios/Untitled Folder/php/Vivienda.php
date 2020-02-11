<?php
require_once('Conexion.php');
/**

 *
 */
class Vivienda extends Conexion
{
    public $tipo;
    public $zona;
    public $dormitorios;
    public $precio;
    public $image;
    public $garage;
    public $zonascomunes;
    public $jardin;
    public $padel;
    public $piscina;
    
    public function constructorXml($tipo, $zona, $dormitorios, $precio, $image, $garage, $zonascomunes, $jardin, $padel, $piscina)
    {
        $this->tipo=(int)$tipo;
        $this->zona=(int)$zona;
        $this->dormitorios=(int)$dormitorios;
        $this->precio=(int)$precio;
        $this->image=$image;
        $this->garage=$garage;
        $this->zonascomunes=$zonascomunes;
        $this->jardin=$jardin;
        $this->padel=$padel;
        $this->piscina=$piscina;
    }

    public function insertVivienda()
    {
        $sql= "INSERT INTO viviendas (tipo, zona, precio, dormitorios, garage, jardin, padel, piscina, zonascomunes, imagen) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $sttm= $this->conexion->prepare($sql);
        $sttm->execute([
			$this->tipo,
			$this->zona,
			$this->precio,
			$this->dormitorios,
			$this->garage,
			$this->jardin,
			$this->padel,
			$this->piscina,
			$this->zonascomunes,
			$this->image
        ]);
        return $sttm->errorCode();
    }
    
    public function printViviendas($tipo, $zona, $dormitorios, $precio, $garage, $jardin, $padel, $piscina, $zonascomunes)
    {
        $sql = 'SELECT viviendas.id, zonas.lugar, tipos.tipo, precio, dormitorios, garage, jardin, padel, piscina, zonascomunes, imagen 
        FROM viviendas, tipos, zonas 
        WHERE
        (
        tipos.id = viviendas.tipo AND
        zonas.id = viviendas.zona AND
        viviendas.tipo = :tipo  AND 
        viviendas.zona = :zona AND 
        precio >= :precio AND 
        dormitorios >= :dormitorios
        )';

        if($garage){
            $sql .= " AND garage = si";
        }

        if($jardin){
            $sql .= " AND jardin = si";
        }

        if($zonascomunes){
            $sql .= " AND zonascomunes = si";
        }

        if($padel){
            $sql .= " AND padel = si";
        }

        if($piscina){
            $sql .= " AND piscina = si";
        }
        

        $sttm = $this->conect()->prepare($sql);
        $sttm->bindParam(":tipo",$this->tipo);
        $sttm->bindParam(":zona",$this->zona);
        $sttm->bindParam(":precio",$this->precio);
        $sttm->bindParam(":dormitorios",$this->dormitorios);
        $sttm->execute();
        return $sttm->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function selectViviendaById($id)
    {
        $sql = "SELECT zonas.lugar, tipos.tipo, precio, dormitorios, garage, jardin, padel, piscina, zonascomunes, imagen 
        FROM viviendas, tipos, zonas 
        WHERE
        (
        tipos.id = viviendas.tipo AND
        zonas.id = viviendas.zona AND
        viviendas.id = :id)";
        $sttm = $this->conect()->prepare($sql);
        $sttm->bindParam(":id", $id);
        $sttm->execute();
        return $sttm->fetch();
    }
    
    public function toString()
    {
        var_dump($this->tipo)  . "<br>";
        var_dump($this->zona)  . "<br>";
        var_dump($this->dormitorios)  . "<br>";
        var_dump($this->precio)  . "<br>";
        var_dump($this->image)  . "<br>";
        var_dump($this->garage)  . "<br>";
        var_dump($this->zonascomunes)  . "<br>";
        var_dump($this->jardin)  . "<br>";
        var_dump($this->padel)  . "<br>";
        var_dump($this->piscina)  . "<br>";
    }
}
