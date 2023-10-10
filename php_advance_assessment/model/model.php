<?php 
class model
{

        public $connection;


    public function __construct()
    {      
        try
        {

            $this->connection = new mysqli("localhost","root","","php_adv_assessment");
        }
        catch(\Throwable $th)
        {
            
        }
    }

    public function register($data)
    {

        array_pop($data);
        
        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);
        $sql = "INSERT INTO user ($keysdata) VALUES ('$valuesdata')";
        $this->connection->query($sql);

       
        echo "</pre>";
    } 


    public function login($data)
    {
        if(isset($data['log']))
        {
            print_r($data);
            $SQL = "SELECT * FROM user WHERE (name = '$data[name]' AND email = '$data[email]');";
          $sqlex = $this->connection->query($SQL);
        
        if($sqlex->num_rows > 0)
        {
            $userdata = $sqlex->fetch_object();
        
            if($userdata->role_as == 1)
            {
                echo "Admin side";
                header("location:admin-dashboard");
            }
            else
            {
                header("location:home");
            }

        }
        else
        {
            echo "<script> alert('Invalid Username or Password')  </script>";

        }
    
    }
        else
        {

        }
    }





    public function select($table)
    {
        $SQL = "SELECT * FROM $table";
     
        $SQLEX = $this->connection->query($SQL);
     
        if($SQLEX->num_rows > 0)
        {
    
          
    
            while($data = $SQLEX->fetch_object())
            {
                $datas[] = $data;
            }
         
            return $datas;
      
    
        }
    }

    public function insert($tbl,$data)
    {
      $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

        echo "<pre>";
        
        echo "<br>";
        
        echo "<br>";

            
            $sql = "INSERT INTO $tbl ($keysdata) VALUES ('$valuesdata')";

           
            $this->connection->query($sql);
           
        echo "</pre>";
    } 

    public function insertprice($tbl,$data)
    {
  

        echo "<pre>";
        
        echo "<br>";
        
        echo "<br>";

        
    
            $sql = "INSERT INTO $tbl (price) VALUES ($data)";
            echo $sql;
           
            $this->connection->query($sql);
           
        echo "</pre>";
    } 

    public function selectwhere($tbl,$id)
{
    $SQL = "SELECT * FROM $tbl WHERE id = $id";

    $sqlex = $this->connection->query($SQL);

    if($sqlex->num_rows > 0)
    {
        $data = $sqlex->fetch_object();
       
    }
    else 
    {
        $data = "Something Went Wrong";
      
    }
    return $data;
  
}


public function selectprice($tbl,$id)
{
    $SQL = "SELECT price FROM $tbl WHERE id = $id";

    $sqlex = $this->connection->query($SQL);

    if($sqlex->num_rows > 0)
    {
        $data = $sqlex->fetch_object();
       
    }
    else 
    {
        $data = "Something Went Wrong";
      
    }
    return $data;
  
}

public function total($input,$tbl)
{
    $SQL = "SELECT SUM($input) FROM $tbl";
    // echo $SQL;

    $sqlex = $this->connection->query($SQL);

    if($sqlex->num_rows > 0)
    {
        $data = $sqlex->fetch_object();
       
    }
    else 
    {
        $data = "Something Went Wrong";
      
    }
    return $data;
}

}

$obj = new model;
?>