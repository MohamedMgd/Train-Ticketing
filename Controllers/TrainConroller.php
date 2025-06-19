<?php 

require_once '../../Models/train.php';
require_once '../../Controllers/DBController.php';
class TrainController
{
    protected $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection
    
    public function getTrains()
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="select * from train";
            return $this->db->select($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
    }
    public function addtrain(Train $train)
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            // $query="insert into train values ('','$train->train_name','$train->source','$train->destination',345,$train->departure_time,$train->arrival_time,$train->train_no)";
            $query="INSERT INTO `train` (`pnr`, `train_name`, `source`, `destination`, `seat_no`, `departure_time`, `arrival_time`, `train_no`) VALUES ('','$train->train_name','$train->source','$train->destination',345,$train->departure_time,8,$train->train_no)";
            return $this->db->insert($query);
            
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
    }
  }

?>