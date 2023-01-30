<?php
abstract class person {
    protected $firstname;
    protected $lastname;
    private $class;
    private $year;
	public $classes = ["2BKI11","2BKI12","2BKI21","2BKI22"];

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

	public function getClass() {
		return $this->class;
	}

	public function setClass($class) {
		$this->class = $class;
	}

	public function getYear() {
		return $this->year;
	}

	public function setYear($year) {
		$this->year = $year;
	}



    public function __construct($firstname, $lastname){
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
    }
    public function versetzen(){
        if($this->year == 1){
			$this->year++;
		}
    }
    public function ausgabe(){
        echo "Ich bin $this->firstname $this->lastname, Schueler der $this->class und bin nach den Ferien im Jahr $this->year.";
		echo "<br>";
	}
    

}
?>