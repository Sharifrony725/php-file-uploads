<!-- PHP তে class এর মধ্যে constant, property এবং method ঘোষণা করার নিয়ম কি? -->
<?php
class ClassObj
{
    public $var  = 'a default value'; // public property Declaration
    private const a = 'america'; //private const Declaration 
    // public method declaration
    public function displayVar()
    {
        echo $this->var;
    }
}
?>

