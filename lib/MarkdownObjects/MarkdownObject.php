<?php

namespace lib\MarkdownObjects;


Class MarkdownObject{
	private $text;
	private $tag;

	public function __construct($raw){
		$this->text = substr($raw, 4);
		$this->tag = substr($raw, 0, 4);
	}

	public function getType(){
		return $this->tag . " - Generic Markdown Object";
	}

	public function process(){
		return $this->text;
	}
}


?>