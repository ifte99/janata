<?php
    class crude{
        private $db;

        function __construct($conn)
        {
            $this->db = $conn;
        }

        public function insert($SubmitDate,$Trade_Code,$High,$Low,$Opening,$Closing,$Volume){
                try{
                    $sql = "INSERT INTO `stock_market_data`( SubmitDate ,Trade_Code,High,Low,Opening,Closing,Volume) VALUES(:dob,:Trade_Code,:High,:Low,:Opening,:Closing,:Volume)";
                    $stmt = $this->db->prepare($sql);

                    $stmt -> bindparam(':dob',$SubmitDate);
                    $stmt -> bindparam(':Trade_Code',$Trade_Code);
                    $stmt -> bindparam(':High',$High);   
                    $stmt -> bindparam(':Low',$Low);
                    $stmt -> bindparam(':Opening',$Opening);
                    $stmt -> bindparam(':Closing',$Closing);
                    $stmt -> bindparam(':Volume',$Volume);

                    $stmt ->execute();

                    return true;

                }catch(PDOException $e){
                    //throw $th
                    echo $e-> getMessage();
                    return false;

                }
        }

        

        public function editAttendee($id,$SubmitDate,$Trade_Code,$High,$Low,$Opening,$Closing,$Volume){
         
            try{

                
            $sql = "UPDATE `stock_market_data` SET `SubmitDate`= :dob,`Trade_Code`= :Trade_Code,`High`= :High,`Low`= :Low ,`Opening`=:Opening,`Close`=:Closing,`Volume`=:Volume WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            // bind all placeholders to actual values
            $stmt -> bindparam(':id',$id);
            $stmt -> bindparam(':dob',$SubmitDate);
            $stmt -> bindparam(':Trade_Code',$Trade_Code);
            $stmt -> bindparam(':High',$High);   
            $stmt -> bindparam(':Low',$Low);
            $stmt -> bindparam(':Opening',$Opening);
            $stmt -> bindparam(':Closing',$Closing);
            $stmt -> bindparam(':Volume',$Volume);

            $stmt ->execute();

            return true;

            }catch(PDOException $e){
                //throw $th
                echo $e-> getMessage();
                return false;

            }


        }
        

        public function getAttendees(){
            try{
                $sql = "SELECT * FROM `stock_market_data`;";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                //throw $th
                echo $e-> getMessage();
                return false;

            } 

        }


        public function getAttendeeDetails($id){

            try{
                $sql = "SELECT * FROM `stock_market_data`;";
             $stmt = $this->db->prepare($sql);
             $stmt -> bindparam(':id',$id);
             $stmt ->execute();
             $result = $stmt->fetch();

             return $result;
                
            }catch(PDOException $e){
                //throw $th
                echo $e-> getMessage();
                return false;

            } 

            

             


        }
       


        

        public function deleteAttendee($id){
            try{
                $sql = "DELETE FROM `stock_market_data`  WHERE id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt -> bindparam(':id',$id);
                $stmt ->execute();
                return true;


            }catch(PDOException $e){
                //throw $th
                echo $e-> getMessage();
                return false;

            }

            

        }


        
    }

?>