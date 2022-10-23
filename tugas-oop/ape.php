<?php
class ape extends animal{
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
$SonGoku = new ape("Songoku", "2", "Aaaaaaaarrrrrgggghhhhhh", "no");
echo "Nama : " . $SonGoku->get_name();
echo "<br>";
echo "Kaki : ". $SonGoku->get_legh();
echo "<br>";
echo "Suara : ". $SonGoku->get_yell();
echo "<br>";
echo "Cold Blooded : ". $SonGoku->get_cold_blooded();
echo "<br>";

?>