<?
function db_connect(){
        $host = 'localhost';
        $user = 'Akmat';
        $pswd = 'qwerty';
        $db = 'diplom';
        
        $connection = mysql_connect($host, $user, $pswd);
        if(!$connection || !mysql_select_db($db,$connection))
        {
            return false;
        }
        return $connection;
    }

    
    
    function db_result_to_array($result){
        $res_array = array();
        
        $count = 0;
        
        while($row = mysql_fetch_array($result))
        {
            $res_array[$count] = $row;
            $count++;
        }
        return $res_array;
    }
    
    
    function get_products($table){
        db_connect();
        
        $query = "SELECT * FROM $table ORDER BY id DESC";
        
        $result = mysql_query($query);
        
        $result = db_result_to_array($result);
        
        return $result;
    }
    //Вывод одного книга
    function get_product($id,$table){
        //первый параметр принимает id товара
        //второй таблицу.
        db_connect();
        $query=("SELECT * FROM $table WHERE id='$id' ");
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        return $row;
    }