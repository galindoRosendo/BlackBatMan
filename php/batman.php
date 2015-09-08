<?php 
	public class Batman{
		
		Batman(){
			/* Number of important people */
			$myAge = $_POST['age'];
			$myFamily = $_POST['family'];
			$myFriends = $_POST['friends'];
			$mySoulMate = $_POST['batGirl'];
			$mySelf = $_POST['name'];
			$myQuestion = $_POST['question'];

			/*Validate the batman quality */
			$this-> isBatmanHappy($myFamily,$mySoulMate,$mySelf,$myQuestion);


		}
		

		public function isBatmanHappy(){
			$this->metodFamily($this->$myFamily);
			$this->metodfriends($this->$myFamily);
			$this->metodbatGirl($this->$myFamily);
			$this->metodname($this->$myFamily);
			$this->metodquestion($this->$myFamily);
		}

		/* if the field have more tan 0 you have an age, family, and all the above*/
		public function metodStatus(){

		}

		public function metodmetodFamily(){

		}

		public function metodfriends(){

		}

		public function metodbatGirl(){

		}

		public function metodname(){

		}
		
		public function metodquestion(){

		}

		public function batmanOnAction(){
			/* 
			batman status false = sad, true = happy 
			batman ready false="invencible", true="death"	
			*/
		    $batmanStatus = false;
		    $batmanReady = true;
		    $this->$myAge;
		    while($batmanStatus){
		    	$batmanReady+=;
		    	
		    }
		    
		    return $batmanReady;
		}
	}	
?>