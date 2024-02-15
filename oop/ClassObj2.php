<?php
//  PHP তে class এর মধ্যে অবস্থিত property, method এবং constant ব্যবহারের নিয়ম কি ?
class ClassObj
{

    public $var = 'Hello, this is a simple class.';
    private const a =  'BD';

    public function displayVar(){
        echo $this->var;
    }
}

$obj = new ClassObj();
$obj->displayVar();

?>