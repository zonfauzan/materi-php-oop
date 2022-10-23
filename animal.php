<?php 
class animal 
{
    public $name;
    public $legh;
    public $cold_blooded;
    public $yell;


    function __construct($name, $legh, $yell, $cold_bloobed)
    {
        $this->name = $name;
        $this->legh = $legh;
        $this->yell = $yell;
        $this->cold_blooded = $cold_bloobed;
    }
    function get_name() {
        return $this->name;
    }
    function get_legh() {
        return $this->legh;
    }
    function get_yell() {
        return $this->yell;
    }
    function get_cold_blooded() {
        return $this->cold_blooded;
    }
}
$cr7 = new animal("GoatCR7", "2", "Suiiiii", "no");
echo "Nama : " . $cr7->get_name();
echo "<br>";
echo "Kaki : ". $cr7->get_legh();
echo "<br>";
echo "Suara : ". $cr7->get_yell();
echo "<br>";
echo "Cold Blooded : ". $cr7->get_cold_blooded();
echo "<br>";
