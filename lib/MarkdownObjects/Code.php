<?php

namespace lib\MarkdownObjects;

Class Code extends MarkdownObject{

	public function getType(){
		return $this->tag . " - Code Object";
	}

	public function process(){
		return $this->text;
	}
}

?>