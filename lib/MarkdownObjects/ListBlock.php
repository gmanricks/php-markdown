<?php

namespace lib\MarkdownObjects;


Class ListBlock extends MarkdownObject{

	public function getType(){
		return $this->tag . " - List Object";
	}

	public function process(){
		return $this->text;
	}
}

?>