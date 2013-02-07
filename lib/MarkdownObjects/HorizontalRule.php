<?php

namespace lib\MarkdownObjects;

Class HorizontalRule extends MarkdownObject{

	public function getType(){
		return $this->tag . " - Horizontal Rule Object";
	}

	public function process(){
		return "------------------------------------";
	}

}

?>