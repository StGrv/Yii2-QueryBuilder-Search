<?php

use yii\db\Query ;
use frontend\models\Categories ;

if (isset($_POST['submitSearch'])) {
$search = $_POST['search'] ;
$search = preg_replace('/\s+/', '%', $search) ;  
$search = htmlspecialchars($search) ;
    
$query = new Query() ; 

$rows = $query
    ->select(['mark', 'model', 'engine', 'transmission'])
    ->from('categories')
    ->where(['like', 'mark', $search])
    ->orWhere(['like', 'model', $search])
    ->orWhere(['like', 'engine', $search])
    //->orWhere(["CONCAT(mark,' ',model,' ',engine) LIKE ?", $search])
    ->limit(10)
    ->all();

foreach ($rows as $row) {
    
    echo "Mark: ".$row['mark']
    .", Model: ".$row['model'] ."<br>"
    .", Engine: ".$row['engine'] ."<br>"
    .", Transmission: ".$row['transmission'] ."<br>" ;        
    }
}

if (!$rows) {
    echo "No results match your search!" ;
}

?>


    

