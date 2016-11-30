<?php
ini_set('display_errors', 0); // Выключаем ошибки

class MyException extends Exception {

}

try {
    $name = filter_input(INPUT_GET, 'name');
    if(is_null($name)){
        throw new Exception('Данные получены не в полной мере');
    }
    if($name==='adik'){
       throw new MyException('Какое житие твое - пёс смердячий!');
    }
    echo "Привет, $name";
}catch (Exception $ex) {
    echo $ex->getMessage();
} catch (MyException $ex){
    echo $ex->getMessage();
} finally {
    echo '<br>Бля буду - не забуду!';
}