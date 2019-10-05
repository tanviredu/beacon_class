<?php

    // class SSLcommerce{

    //     protected $paymentProvider;
    //     public function __construct(){
        
    //         $this->paymentProvider = "bkash";
    //     }
    //     public function checkout(){
    //         return $this->paymentProvider;
    //     }
    // } 

    // class SSLcommerceDBBL{

    //     protected $paymentProvider;
    //     public function __construct(){
        
    //         $this->paymentProvider = "DBBL";
    //     }
    //     public function checkout(){
    //         return $this->paymentProvider;
    //     }
    // } 



    //bkash

//     $sslCommerce = new SSLcommerce();
//    echo  $sslCommerce->checkout();

//    $sslCommerceDBBL = new SSLcommerceDBBL();
//    echo  $sslCommerceDBBL->checkout();

   // this is not efficient so we have to make sure that it is efficient

?>





<?php


        // check the comment by number (VVVVVVI)

interface PaymentProvider{ // (1) first we make an interface so
                            // we must use the function
    public function checkout();
}


class SSLcommerce{

        protected $paymentProvider;
            // (6) we say that inthe constructor that 
            // payment provider will be one of the interface like bkash object or DBBL
            
         public function __construct(Paymentprovider $paymentProvider){
        
             $this->paymentProvider = $paymentProvider;
         }
         public function checkout(){

            // 7) then i call the checkout function of the pymentprovider(bkash)
            // inside this checkout function  
            //  
             return $this->paymentProvider->checkout();
         }
     }



     // (2)we create the payment provider and implemnt with bkash
    class Bkash implements Paymentprovider{
        public function checkout(){
            return "bkash";
        }
    }

    // (3) and we make another thing which is DBBL
    class DBBL implements Paymentprovider{
        public function checkout(){
            return "DBBL";
        }
    }
    //(4) we pass the object to the base class 
    $sslCommerce = new SSLcommerce(new Bkash);
    echo $sslCommerce->checkout();
    $sslCommerce = new SSLcommerce(new DBBL);
    echo $sslCommerce->checkout();

?>


