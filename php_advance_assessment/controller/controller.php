<?php 
require_once("model/model.php");

class controller extends model
{
    public $baseurl = "http:localhost/php_practice/php_advance_assessment/assests/";

    public function __construct()
    {
        parent::__construct();
        if(isset($_SERVER['PATH_INFO']))
        {
           switch($_SERVER['PATH_INFO'])
           {
                case "/home":

                    
                    $products =  $this->select("products");
                    
                    if(isset($_REQUEST['addc']))
                    {
                        $arr = $_REQUEST['addc'];
                        // echo "inside if";
                        json_encode($arr);
                        
                        
                        
                        print_r($arr);
                        
                        $this->insertprice("cart", $arr);


                     }

                    require_once("view/home.php");
                    break;

                case "/register":
                    if(isset($_REQUEST['reg']))
                    {
                        $data = $_REQUEST;
                        $this->register($data);
                    }
                    require_once("view/register.php");
                    

                    if(isset($_REQUEST['data']))
                    {
                    header("location:view/login.php");

                    }

                    break;

                case "/login":
                    require_once("view/login.php");

                        $data = $_REQUEST;
                        $user_detail=$this->login($data);

                        require_once("view/login.php");
                        break;

                
                  case "/admin-dashboard":
                                
                    echo "<pre>";
                    $fetch =  $this->select("user");

                    require_once("view/admin/adminhome.php");
                   
                        
                        if(isset($_REQUEST['addproduct']))
                        {
                            header("location:view/admin/addproduct.php");
                        }
                        break;                              
                                
                                case "/admin/addproduct":
                                    
                                  if(isset($_REQUEST['addp']))
                                    {   
                                         $image = "uploads/products/".time().$_FILES['image']["name"];
                                        move_uploaded_file($_FILES['image']['tmp_name'],$image);
        
                                        $data = array(
                                            "name" => $_REQUEST['name'],
                                            "price" => $_REQUEST['price'],
                                            "description" => $_REQUEST['description'],
                                            "image" => $image
                                        );
        
                                            $this->insert("products",$data);
                                            
                                            exit();
                                        }
                                        
                                        require_once("view/admin/addproduct.php");
                                    
        
                                    break;
                                   
                                        case "/admin/products":

                                            $products = $this->select("products");
                                          
                                            require_once("view/admin/adminproduct.php");
                                           
                                          
                                            break; 


                                    case "/cartpage":

                                        $cartdata = $this->select("cart");
                                        // print_r($cartdata);

                                       
                                        $total = $this->total("price","cart");
                                        
                                        foreach($total as $value)
                                            {
                                                echo "<h1>TOTAL AMOUNT IS :  $value<h1>";
                                            }
                                
                                        // print_r($total);
                                        
                                        

                                        require_once("view/cartpage.php");


                                        
                                     }
                                            }
        else
        {
            header("location:home"); } }}
$obj = new controller();
?>