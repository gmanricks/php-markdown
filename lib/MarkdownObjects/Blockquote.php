<?php

namespace lib\MarkdownObjects;


Class Blockquote extends MarkdownObject{

	public function getType(){
		return $this->tag . " - Blockquote Object";
	}

	public function process(){
		return $this->text;
	}

}


?>