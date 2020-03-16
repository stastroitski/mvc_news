<?php
class ViewNews{
    
    public static function NewsByCategory($arr){
        foreach($arr as $value){
            echo '<img src="date:image/jpeg;base64,'.base64_encode($value['imageNews']).'"
                    width=150/><br>';
            echo "<h2>".$value['nameNews']."</h2>";
            echo "<a href='news?id=".$value['idNews']."'>Edasi</a><br>";
        }
    }
    
    public static function AllNews($arr){
        foreach($arr as $value){
            echo "<li>".$value['nameNews'];
            echo "<a href='news?id=".$value['idNews']."'>Edasi</a></li><br>";
        }
    }
    
    public static function ReadNews($n){
        echo "<h2>".$n['nameNews']."</h2>";
        echo '<img src="date:image/jpeg;base64,'.base64_encode($n['imageNews']).'"
                    width=150/><br>';
        echo "<p>".$n['textNews']."</p>";
    }
}