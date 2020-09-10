<?php
	/**
	 * 
	 */
	class Circle
	{
		private $radius;

		public function __construct($radius){
			$this->radius = $radius;
		}

		public function circlePrimeter(){
			return $this->radius*2*3.14;
		}

		public function circleArea(){
			return $this->radius*$this->radius*3.14;
		}
	}
	do{
	    echo " 1.acreage \n 2.perimeter \n 3.exist \n ";
	    $option =readline('option:');
	    if ( is_numeric($option) == 1){
	        $radius =readline('Radius:');
	        if (is_numeric($radius) == 1 && $radius >=0){
	            $obj = new Circle($radius);
	            switch ($option){
	                case 1:
	                    echo "result: ".number_format((float)$obj->circleArea(),2,'.','')."\n";
	                    break;
	                case 2:
	                	echo "result: ".number_format($obj->circlePrimeter(),2,'.','')."\n";
	                	break;
	                case 3:
	                	break;
	            }
	        }else{
	            echo "please input number!\n";
	        }
	    }else{
	        echo "please input number!\n";
	    }
	}while( $option <3);
?>