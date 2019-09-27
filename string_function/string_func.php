<?php 

    class String_func{

        // chop function it removes the white spaces 
        //from the right end

        public function makechop($value){
            return chop($value);
        }

        public function makechr($value){

            return chr($value);
        }
        public function make_chunk_split($value,$limit,$identifier){
            return chunk_split($value,$limit,$identifier);
        }
        public function make_count_chars(){return true;}
        // this needs explanation

        
        public function  make_crypt($value,$salt){

            //encrypt the value based on the salt value
            // diffeent value of that parameter means
            // different different encrypt
            return crypt($value,$salt);
        }

        public function make_explode($key,$value){
            return explode($key,$value);
        }
        public function make_html_entities($value){
            return htmlentities($value);
        }
        public function make_html_special_chars($value){
            // you can see the change in the page source
            return htmlspecialchars($value);
        }
        public function make_implode($key,$array){
            return implode($key,$array);
        }
        //exact same work for the implode
        public function make_join($key,$value){
            return join($key,$value);

        }
        public function make_md5($value){
            return md5($value);
        }
        public function make_parse_string($value){
            parse_str($value);
            
        }
        public function make_str_word_count($value){
            return str_word_count($value);
        }

        public function make_compare($str1,$str2){
            // if the result is 0 then equal
            // if the result is  <0 then str1 is less than 0
            // if the result is >0 then str1 is greater than 0
            return strcmp($str1,$str2);
        }
        public function make_compare2($str1,$str2){
            // if the result is 0 then equal
            // if the result is  <0 then str1 is less than 0
            // if the result is >0 then str1 is greater than 0
            return strcmp($str1,$str2);
        }

        public function make_strip_tags($value){
            return strip_tags($value);
        }

        public function find_position($value,$key){
            return stripos($value,$key);
        }

        public function find_length($value){
            return strlen($value);
        }

        public function make_reverse($value){
            return strrev($value);
        }
        public function make_upper($value){
            return strtoupper($value);
        }
        public function make_lower($value){
            return strtolower($value);
        }
        public function make_strtok($value,$key){
            return strtok($value,$key);
        }
        public function make_trim($value,$key){
            return strtok($value,$key);
        }
    }


    $strf = new String_func;
    var_dump($strf->makechop("tanvir    "));
    var_dump($strf->makechr(43));
    var_dump($strf->make_chunk_split("tanvir rahman",2,'.'));
    var_dump($strf->make_crypt("Tanvir Rahman",'st'));
    var_dump($strf->make_crypt("Tanvir Rahman",'tanvir'));
    var_dump($strf->make_explode(" ","Tanvir Rahman ornob"));
    var_dump($strf->make_explode("@","ornobtanvir@gmail.com"));
    var_dump($strf->make_html_entities("<a href='https://www.w3schools.com'>Go to w3schools.com</a>"));
    var_dump($strf->make_html_special_chars("This is some <b>bold</b> text."));
    var_dump($strf->make_implode(',',['Tanvir','Rahman','ornob']));
    var_dump($strf->make_join(',',['Tanvir','Rahman','ornob']));
    var_dump($strf->make_md5('Tanvir rahman ornob'));
    var_dump($strf->make_parse_string("name='tanvir'&age=43"));
    var_dump($strf->make_str_word_count("tanvirrahmanornob"));
    var_dump($strf->make_str_word_count("ta nv ir ra hm an or no b"));
    var_dump($strf->make_compare("Tanvir","Tanvir"));
    var_dump($strf->make_compare("tanvir","Tanivr"));
    var_dump($strf->make_compare2("Tanvir","Tanvir"));
    var_dump($strf->make_strip_tags("This is some <b>bold</b> text."));
    var_dump($strf->find_position("This is some <b>bold</b> text.","some"));
    var_dump($strf->find_length("Tanvir"));
    var_dump($strf->make_reverse("Tanvir"));
    var_dump($strf->make_upper("Tanvir"));
    var_dump($strf->make_lower("Tanvir"));
    var_dump($strf->make_strtok("Ta nvir",' '));
    var_dump($strf->make_trim("Tanvir","Tr"));
?>
