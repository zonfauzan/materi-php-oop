<?php
class frog extends animal{
    public $jump;

    function __construct($name, $legh, $jump, $cold_bloobed)
    {
        $this->name = $name;
        $this->legh = $legh;
        $this->jump = $jump;
        $this->cold_blooded = $cold_bloobed;
    }
    function get_name() {
        return $this->name;
    }
    function get_legh() {
        return $this->legh;
    }
    function get_jump() {
        return $this->jump;
    }
    function get_cold_blooded() {
        return $this->cold_blooded;
    }
}
$Gamabunta = new frog("Gamabunta", "4", "wooooook", "no");
echo "Nama : " . $Gamabunta->get_name();
echo "<br>";
echo "Kaki : ". $Gamabunta->get_legh();
echo "<br>";
echo "Lompat : ". $Gamabunta->get_jump();
echo "<br>";
echo "Cold Blooded : ". $Gamabunta->get_cold_blooded();
echo "<br>";
?>