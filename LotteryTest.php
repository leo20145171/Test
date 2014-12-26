<?php
require_once 'frontend/module/Lottery.class.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Lottery test case.
 */
class LotteryTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var Lottery
	 */
	private $Lottery;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated LotteryTest::setUp()
		
		$this->Lottery = new \frontend\module\Lottery(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated LotteryTest::tearDown()
		$this->Lottery = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests Lottery->__construct()
	 */
	public function test__construct() {
		// TODO Auto-generated LotteryTest->test__construct()
		$this->markTestIncomplete ( "__construct test not implemented" );
		
		$this->Lottery->__construct(/* parameters */);
	}
	
	/**
	 * Tests Lottery->__destruct()
	 */
	public function test__destruct() {
		// TODO Auto-generated LotteryTest->test__destruct()
		$this->markTestIncomplete ( "__destruct test not implemented" );
		
		$this->Lottery->__destruct(/* parameters */);
	}
	
	/**
	 *Tests Lottery->judgeMoneyOfBet 
	 */
	public function test_judgeMoneyOfBet(){
		$result = $this->Lottery->judgeMoneyOfBet(1200);
		$this->assertFalse($result,'money of bet more than 1000');
		$result2 = $this->Lottery->judgeMoneyOfBet(1);
		$this->assertFalse($result2,'money of bet less than 10');
		$result3 = $this->Lottery->judgeMoneyOfBet(200);
		$this->assertTrue($result3,'money of bet less than 1000 and more than 10');
		$result4 = $this->Lottery->judgeMoneyOfBet('123');
		$this->assertFalse($result4,'string value ');
		$this->markTestIncomplete('success');
	}
}

