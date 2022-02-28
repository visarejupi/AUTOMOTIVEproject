<?php

class page {
    private $static_content;
    private $dynamic_content;

    public function __construct($static_content, $dynamic_content) {
        $this->static_content = $static_content;
        $this->dynamic_content = $dynamic_content;
    }

    public function render() {
        print($this->join());
    }  

    public function join() {
        $joined="$this->static_content";
        foreach ($this->dynamic_content as $key => $value) {
            $joined=preg_replace("<<<<<".$key.">>>>>", $value, $this->static_content);
        }
        return $joined;
    }
}

?>