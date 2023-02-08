<?php
abstract class person {
    protected $firstname;
    protected $lastname;

	public function getFirstname() {
		return $this->firstname;
	}

	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	public function getLastname() {
		return $this->lastname;
	}

	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

    public function __construct($firstname, $lastname){
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
    }
    public function ausgabe(){
        echo "Ich bin $this->firstname $this->lastname,";
		echo "<br>";
	}
    

}
?>