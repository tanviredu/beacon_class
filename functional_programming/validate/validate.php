<?php 
    //email validate

    function emailvalidate($email){

        return filter_var($email,FILTER_VALIDATE_EMAIL);
    }

    //echo emailvalidate("ornobtanvir@gmail.com");
    //var_dump( emailvalidate("ornobtanvirgmail.com"));



    function validateaccepted($value){

        $acceptable = array('Yes','yes','on','On',1,'1','true');

        if (in_array($value, $acceptable)) {
            return true;
        }else{
            return false;
        }
    }

    //var_dump (validateaccepted('yes'));
    //var_dump (validateaccepted('Yes'));
    //var_dump (validateaccepted('es'));

    function isarray($input){
        return is_array($input);
    }

    //var_dump(isarray([1,2,3,4]));
    //var_dump(isarray(1));



    function isnumeric($input){
        return is_numeric($input);
    }

    //var_dump(isnumeric(1));
    //var_dump(isnumeric(1.2));

    function isinteger($number){
        return filter_var($number,FILTER_VALIDATE_INT);
    }
    //var_dump(isinteger('2'));
    //var_dump(isinteger(2));
    //var_dump(isinteger(2.2));

    //  function stringLength($value)
    // {
    //     if (!is_string($value)) {
    //         return false;
    //     } elseif (function_exists('mb_strlen')) {
    //         return mb_strlen($value);
    //     }
    //     return strlen($value);
    // }
        function isstring($input){
            return is_string($input);
        }

        //var_dump(isstring("hello"));
    
        function stringlength($value){
            if(!isstring($value)){
                return false;
            }elseif(function_exists('mb_strlen')){
                return mb_strlen($value);
            }

            return strlen($value);
        }
        //var_dump(stringLength("hello"));


        function iscontentisunique($value){
            if(!is_array($value)){
                return false;
            }else{
                return $value===array_unique($value,SORT_REGULAR);
            }
        }

        //var_dump(iscontentisunique([1,2,3,3]));


        function isIP($value){
            return filter_var($value,FILTER_VALIDATE_IP);
        }

        //var_dump(isIp('192.178.0.1.1'));

        function isMAC($value){
            return filter_var($value,FILTER_VALIDATE_MAC);
        }


        function isURL($value){
            return filter_var($value,FILTER_VALIDATE_URL);
        }

        

        function isDOMAIN($value){
            return filter_var($value,FILTER_VALIDATE_DOMAIN);
        }

        //var_dump(isDOMAIN("example.com.cc"));
        
        function isIpv4($value)
        {
            return filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false;
        }

        function isIpv6($value)
        {
            return filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false;
        }


        function validateAscii($value)
        {
            // multibyte extension needed
            if (function_exists('mb_detect_encoding')) {
                return mb_detect_encoding($value, 'ASCII', true);
            }
        }

        function isDate($value){
            if(strtotime($value)==false){
                return false;

            }else{
                return true;
            }
        }
        //var_dump(isDate('12-12-19933'));

        function stringMAX($value,$maxlimit){
            if(strlen($value)<=$maxlimit){
                return true;
            }
            else{
                return false;
            }
        }

        //var_dump(stringMAX('tn',3));

        function stringMIN($value,$minlimit){
            if(strlen($value)>=$minlimit){
                return true;
            }
            else{
                return false;
            }
        }

        //var_dump(stringMIN('tn',4));

        function string_min_max($input,$min,$max){

            // first one have to the max limit
            // second one has to be the min limit


            if(stringMAX($input,$min) && stringMIN($input,$max)){
                return true;
            }else{
                return false;
            }

        }

        //var_dump(string_min_max('tanvir',6,5));
    function validate_mobile($mobile)
        {
            return preg_match('/^[0-9]{11}+$/', $mobile);
        }
        
        //var_dump(validate_mobile("01554313265"));

?>