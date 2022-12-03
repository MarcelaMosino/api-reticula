<?php
    class Clases{
        private $conexion;
        private $tabla = 'clases';

        // Propiedades
        public $id_class;
        public $class_key;
        public $semester;
        public $class_name;
        public $theo_credits;
        public $prac_credits;
        public $total_credits;

        //Constructor
        public function __construct($db){
            $this->conexion = $db;
        }

        //Get todos albumes
        public function read(){
            // Crear consulta
            $consulta = 'SELECT * FROM '. $this->tabla;
            $resultado = mysqli_query($this->conexion, $consulta);
            return $resultado;
        }

        public function readID(){
            $consulta = 'SELECT * FROM ' 
            . $this->tabla . ' WHERE id_class = '.$this->id_class.' LIMIT 0,1';
            $resultado = mysqli_query($this->conexion, $consulta);

            $row = mysqli_fetch_assoc($resultado);
            if($row){
                $this->class_key = $row['class_key'];
                $this->semester = $row['semester'];
                $this->class_name = $row['class_name'];
                $this->theo_credits = $row['theo_credits'];
                $this->prac_credits = $row['prac_credits'];
                $this->total_credits = $row['total_credits'];
            }return false;
        }

        public function create(){
            $consulta = 'INSERT INTO ' . $this->tabla . 
            '(class_key,semester,class_name,theo_credits,prac_credits,total_credits) 
            VALUES("'.$this->class_key.'",'.$this->semester.',"'.$this->class_name.'",'.$this->theo_credits.','.$this->prac_credits.','.$this->total_credits.')'; 

            if(mysqli_query($this->conexion, $consulta)){
                return true;
            }
            print_r("\nError en la inserción\n");
            return false;
        }

        public function update(){
            $consulta = 'UPDATE ' . $this->tabla . '
            SET class_key = "'.$this->class_key.'",
            semester = '.$this->semester.',
            class_name = "'.$this->class_name.'",
            theo_credits = '.$this->theo_credits.',
            prac_credits = '.$this->prac_credits.',
            total_credits = '.$this->total_credits.'
            WHERE id_class= '.$this->id_class;
            
            if(mysqli_query($this->conexion, $consulta)){
                return true;
            }            
            print_r("\nError al actualizar\n");
            return false;
        }

        public function delete(){
            $consulta = 'DELETE FROM ' . $this->tabla . ' WHERE id_class= '.$this->id_class;
            if(mysqli_query($this->conexion, $consulta)){
                return true;
            }
            print_r("\nError eliminando\n");
            return false;
        }
    }

