<?php

namespace lib\MarkdownObjects;

Class Paragraph extends MarkdownObject{

	public function getType(){
		return $this->tag . " - Paragraph Object";
	}

	public function process(){
		return $this->text;
	}

}

?>