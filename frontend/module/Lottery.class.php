<?php

namespace frontend\module;
/** 
 * @author huofenghuang
 * @version 1.0.0
 * 
 */
class Lottery {
	//set init var
	protected $startTime;//starting time of bet
	protected $endTime;//ending time of bet
	protected $upperLimit;//upper limit of bet
	protected $lowerLimit;//lower limit of bet
	protected $number;//number of bet
	/**
	 */
	function __construct() {
		
		$this->upperLimit = 1000;
		$this->lowerLimit = 10;
		$this->number = 1;
	}
	
	/**
	 */
	function __destruct() {
		
		echo 'object cancel.';
	}
	
	/**
	 * to determine the amount or the bet
	 * @param int $money 0:no limit;
	 * @return boolean
	 * TODO permission
	 */
	public function judgeMoneyOfBet($money){
		if(!is_int($money)){
			return false;
		}
		if($this->upperLimit !== 0 && $this->upperLimit<$money){
			return false;
		}elseif ($this->lowerLimit !== 0 && $this->lowerLimit>$money){
			return false;
		}else {
			return true;
		}
	}
	
	/**
	 * to determine the number or the bet
	 * @param int $num the number of the bet (0:no limit)
	 * @return boolean
	 * TODO permission
	 */
	public function judgeNumberOfBet($num){
		if(!is_int($num)){
			return false;
		}
		if($this->number !== 0 && $this->number<$num){
			return false;
		}else {
			return true;
		}
	}
	
	/**
	 * to determine can bet
	 * @param timestamp $betTime
	 * @return number(-1:unbegin;0:ok;1:end;)
	 * TODO permission
	 */
	public function judgeTimeOfBet($betTime){
		if($this->startTime>$betTime){
			return -1;
		}elseif ($this->lowerLimit<$betTime){
			return 1;
		}else {
			return 0;
		}
	}
}

?>