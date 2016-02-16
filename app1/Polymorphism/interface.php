<?php
    abstract class Shape {
    	 public abstract function calcArea();
    }
//Classes defined as abstract may not be instantiated
//Any class that contains at least one abstract method must also be abstract

    class Circle extends Shape {
    	//The extended class has all variables and functions of the base class
    	private $radius;
		
		//The constructor is a method which is automatically called on class instantiation.
		public function __construct($radius)
		{
			$this -> radius = $radius;
		}
		//$this is a reference to the current object
		
		public function calcArea()
		{
			return $this -> radius * $this -> radius * pi();
		}
    }


    class Rectangle extends Shape {
    	private $width;
		private $height;
		
		public function __construct($width, $height)
		{
			$this -> width = $width;
			$this -> height = $height;
		}
		
		public function calcArea()
		{
			return $this->width * $this -> height;
		}
		
    }
	

	
	$circ = new Circle(3);
	$rect = new Rectangle(3, 4);
	
	// <?= is the shortcut for <?php echo
	
	?>



	<?= $circ -> calcArea(); ?>
<br/>
	<?= $rect -> calcArea(); ?> 


	
