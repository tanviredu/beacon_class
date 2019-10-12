<?php 

/**
 *  insted of using include() or require once()
 *  we can use the trait it just copy the the whole code inside the  
 * 
 */

trait Logger{

    protected $logger;

    // using set and get in the logger function can be really handy
    public function set_logger($message){
        $this->logger = $message;
    }

    public function get_logger(){
        return $this->logger;
    }
}

    class UserLog{
        use Logger;  ///Logger will be copied here
    }
    class DatabaseLog{
        use Logger;     // logger will be copied here
    }


    $userlog = new UserLog;
    $databaselog = new DatabaseLog;
    $userlog->set_logger("User logg");
    echo $userlog->get_logger();
    echo "</br>";
    $databaselog = new DatabaseLog;
    $databaselog->set_logger("Database Logger");
    echo $databaselog->get_logger();


?>