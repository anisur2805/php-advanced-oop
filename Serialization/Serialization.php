<?php
class user {
    public $name;
    public $age;
    protected $email = "default email";
    protected $phone = "default phone";

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __sleep() {
        return ['name', 'age'];
    }

    public function __wakeup() {
        echo "I am wake up <br/>";
    }

    public function __serialize() {
        return [
            'first_name' => $this->name,
            'second_name' => $this->age,
            'third_name' => $this->email,
            'fourth_name' => $this->phone,
            'fifth'         => "habi jabi",
        ];
    }    
    
}

$user = new User("Anisur", 26);
$srlObj = serialize($user);
echo "Serialize: " . $srlObj . "<br/><br/>";

$unserializeObj = unserialize($srlObj);
var_dump($unserializeObj);
