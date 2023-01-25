<?php
include ("../Config/Database.php");
    class Vehiculo{
        private $id;
        private $placa;
        private $marca;
        private $motor;
        private $chasis;
        private $combustible;
        private $anio;
        private $color;        
        private $avaluo;

        public function __construct(){            
        }

        public function setId($_ID) {
            $this->id = $_ID;
        }
        
        public function getId() {
            return $this->id;
        }
        public function getAnio(){
                return $this->anio;
        }

        public function setAnio($anio) {
                $this->anio = $anio;

                return $this;
        }

        public function getPlaca(){
                return $this->placa;
        }

        public function setPlaca($placa){
                $this->placa = $placa;

                return $this;
        }
        
        public function getMarca(){
                return $this->marca;
        }

        public function setMarca($marca){
                $this->marca = $marca;

                return $this;
        }

        public function getMotor() {
                return $this->motor;
        }

        public function setMotor($motor){
                $this->motor = $motor;

                return $this;
        }

        public function getChasis(){
                return $this->chasis;
        }

        public function setChasis($chasis){
                $this->chasis = $chasis;

                return $this;
        }

        public function getCombustible(){
                return $this->combustible;
        }

        public function setCombustible($combustible){
                $this->combustible = $combustible;

                return $this;
        }

        public function getAvaluo() {
                return $this->avaluo;
        }
 
        public function setAvaluo($avaluo){
                $this->avaluo = $avaluo;

                return $this;
        }

        public function getColor(){
                return $this->color;
        }

        public function setColor($color){
                $this->color = $color;

                return $this;
        }


        public function Insertar(){
                $conn = new DataBase();

                $sql = "insert into vehiculo(id,placa,marca,motor,chasis,combustible,anio,color,foto,avaluo) values (null,?,?,?,?,?,?,?,null,?);";
                $stmt = $conn->ms->prepare($sql);
                $stmt->bind_param("sisssiid",$this->placa,$this->marca,$this->motor,$this->chasis,$this->combustible,$this->anio,$this->color,$this->avaluo);
                $stmt->execute();
                $id = $stmt->insert_id;
                return ($id);
        }
  

        public function Actualizar(){
                $conn = new DataBase();
            
                $sql = "update vehiculo set placa = ?,marca = ?,motor = ?,chasis = ?,combustible = ?,anio = ?,color = ?, avaluo = ? where id = ?;";
                $stmt = $conn->ms->prepare($sql);
                $stmt->bind_param("sisssiidi",$this->placa,$this->marca,$this->motor,$this->chasis,$this->combustible,$this->anio,$this->color,$this->avaluo,$this->id);            
                $stmt->execute();    
        }

        public function Eliminar(){
                $conn = new DataBase();
            
            $sql = "delete from vehiculo where id = ?;";
            $stmt = $conn->ms->prepare($sql);
            $stmt->bind_param("i",$this->id);
            $stmt->execute();
        }


        public function BuscarTodos(){
                $conn = new DataBase();

                $sql = "select v.id,v.placa,m.descripcion,v.motor,v.chasis,v.combustible,v.anio,c.descripcion,v.avaluo from vehiculo v,marca m,color c where v.marca = m.id and v.color = c.id;";
                $stmt = $conn->ms->prepare($sql);            
                $stmt->execute();
                $result = $stmt->get_result();
                return $result->fetch_all();  
        }
        
    }
?>