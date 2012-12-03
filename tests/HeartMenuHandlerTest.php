<?php
return;

class HeartMenuHandlerTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		$this->handler = new HeartMenuHandler();
	}


        public function testHandlePluginHook() {
		$items = array(
			new ElggMenuItem('other', 'text', 'url'),
			new ElggMenuItem('friends', 'text', 'url'),
			new ElggMenuItem('add_friend', 'text', 'url'),
			new ElggMenuItem('remove_friend', 'text', 'url'),
		);

		$result = $this->handler->handlePluginHook('menu', 'hook', $items, array());

		$this->assertEquals(1, count($result));
		$this->assertEquals('other', $result[0]->getName());
        }                                                                                                                                
}    
