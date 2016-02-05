<?php
    abstract class Shape {
    	 public abstract function calcArea();
    }


    class Circle extends Shape {
    	private $radius;
		
		public function __construct($radius)
		{
			$this -> radius = $radius;
		}
		
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
			echo $this->width;
			echo $this->height;
			return $this->width * $this -> height;
		}
		
    }
	
	
	
	$circ = new Circle(3);
	$rect = new Rectangle(3, 4);
	?>

	<?= $circ -> calcArea(); ?>
<br/>
	<?= $rect -> calcArea(); ?> 


	
