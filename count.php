<?php

	Class Count{

		protected
			$leave,
			$absent,
			$sick,
			$overtime;
		const
			OVTPHOUR = 5,
			SALARY = 500,
			PRESENCE = 30,
			TRANSCOSTS = 10;

		public function __construct($leave=0, $absent=0, $sick=0, $overtime=0){
			$this->leave = $leave;
			$this->absent = $absent;
			$this->sick = $sick;
			$this->overtime = $overtime;
		}

		public function countPresence(){
			$sumPresence = self::PRESENCE-($this->leave+$this->absent+$this->sick);
			return $sumPresence;
		}

		public function countOvertime(){
			$sumOvertime = $this->overtime*self::OVTPHOUR;
			return $sumOvertime;
		}

		public function countSalary(){
			$sumSalary = self::SALARY+$this->countOvertime()+($this->countPresence()*self::TRANSCOSTS);
			return $sumSalary;
		}

		public function getInfo(){
			$str = "Total Presence: {$this->countPresence()} Days<br/> Total Overtime: {$this->countOvertime()} USD<br/> Total Salary: {$this->countSalary()} USD";
			return $str;
		}

		// setter
		public function setLeave($leave){
			$this->leave = $leave;
		}

		public function setAbsent($absent){
			$this->absent = $absent;
		}

		public function setSick($sick){
			$this->sick = $sick;
		}

		public function setOvertime($overtime){
			$this->overtime = $overtime;
		}

	}

	$lecture = new Count(0, 0, 0, 10);

	echo($lecture->getInfo());
