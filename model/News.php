<?php

class News {
    
    public static function getLast10News(){
        $query = "SELECT * FROM news ORDER BY idNews DESC LIMIT 3";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    
    public static function getAllNews(){
        $query = "SELECT * FROM news ORDER BY idNews DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    
    public static function getNewsByCategoryID($id){
        $query = "SELECT * FROM news WHERE idCategory=".(string)$id." ORDER BY idNews DESC";
        $db = new database();
        $arr = $db->getAll($query);
        return $arr;
    }
    
    public static function getNewsByID($id){
        $query = "SELECT * FROM news WHERE idNews=".(string)$id;
        $db = new database();
        $n = $db->getAll($query);
        return $n;
    }
}
