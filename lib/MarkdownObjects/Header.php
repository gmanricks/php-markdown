<?php

namespace lib\MarkdownObjects;

Class Header extends MarkdownObject{

	public function getType(){
		return $this->tag . " - Header Object";
	}

	public function process(){
		switch ($this->tag) {
			case '_H1_':
				return $this->h1();
			case '_H2_':
				return $this->h2();
			case '_H3_':
				return $this->h3();
			case '_H4_':
				return $this->h4();
			case '_H5_':
				return $this->h5();
			case '_H6_':
				return $this->h6();
			default:
				return $this->text();
		}
	}	

	private function h1(){
		
	}

	private function h2(){
		
	}

	private function h3(){
		
	}

	private function h4(){
		
	}

	private function h5(){
		
	}

	private function h6(){
		
	}

}


?>