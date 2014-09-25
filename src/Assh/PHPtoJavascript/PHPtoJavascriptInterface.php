<?php namespace Assh\PHPtoJavascript;

interface PHPtoJavascriptInterface {
    /**
     * @param array $mix
     * @return $this
     */
    public function add(array $mix);

    /**
     * @param array $mix
     * @return $this|void
     */
    public function put(array $mix);

    /**
     * @return mixed
     */
    public function publish();
}