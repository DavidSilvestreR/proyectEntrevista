 <?php
    class RegistraProductos{
        private $con;
        public function __construct($con){
            $this->con = $con;
        }
         public function registraProductos($campos){
        	$query="INSERT INTO stock SET             
        	nombre=:nombre,
        	cantidad=:cantidad,
        	precio=:precio";
        	$bind[':nombre']=$campos['nombre'];
        	$bind[':cantidad']=$campos['cantidad'];
        	$bind[':precio']=$campos['precio'];        	
        	
        	 try{
                $insert = $this->con->prepare($query);
                foreach($bind as $key => $b){
                    $insert->bindParam($key,$bind[$key]);
                }
                $insert->execute();
                if($insert->rowCount() > 0){
                    return $this->con->lastInsertId();
                }                
            }catch(PDOException $e){

            }
            return false;
        }
        public function getProductos(){
            $query="SELECT * FROM stock WHERE 1";
             $select = $this->con->prepare($query);
            $select->execute();
            if($select->rowCount() > 0){
                return $select->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return false;
            }
        } 
        public function registraCompra($campos){
            $query="INSERT INTO compras SET             
            id_priducto=:id_priducto,
            cantidad=:cantidad";
            $bind[':id_priducto']=$campos['id'];
            $bind[':cantidad']=$campos['cantidad'];
             try{
                $insert = $this->con->prepare($query);
                foreach($bind as $key => $b){
                    $insert->bindParam($key,$bind[$key]);                }
                $insert->execute();
                if($insert->rowCount() > 0){
                    return $this->con->lastInsertId();
                }                
            }catch(PDOException $e){

            }
            return false;
        } 
        public function getEstaditicas(){
             $query="SELECT b.nombre , SUM(a.cantidad) as ventas FROM compras as a
                      LEFT JOIN stock as b on a.id_priducto=b.id_producto
                       WHERE 1 GROUP BY id_priducto";
             $select = $this->con->prepare($query);
            $select->execute();
            if($select->rowCount() > 0){
                return $select->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return false;
            }
        }       
    }        
        
