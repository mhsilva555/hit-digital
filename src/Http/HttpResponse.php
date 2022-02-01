<?php

namespace App\Http;

class HttpResponse
{
    private $content = '';

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}
