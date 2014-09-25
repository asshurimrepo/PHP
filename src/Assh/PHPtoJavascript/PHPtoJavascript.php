<?php namespace Assh\PHPtoJavascript;


use Laracasts\Utilities\JavaScript\Facades\JavaScript;

class PHPtoJavascript implements PHPtoJavascriptInterface {

    protected $dataToPass = [];

    /**
     * @param array $mix
     * @return $this
     */
    public function add(array $mix)
    {
        $this->dataToPass = array_merge($this->dataToPass, $mix);
        return $this;
    }

    /**
     * @param array $mix
     * @return $this|void
     */
    public function put(array $mix)
    {
        $this->dataToPass = $mix;
        $this->publish();
    }

    /**
     * Published Data
     */
    public function publish()
    {
        Javascript::put($this->dataToPass);
    }
}