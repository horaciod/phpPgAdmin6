<?php

namespace PHPPgAdmin\Decorators;

class UrlDecorator extends Decorator
{
    public function __construct($base, $queryVars = null)
    {

        $this->b = $base;
        if ($queryVars !== null) {
            $this->q = $queryVars;
        }
    }

    public function value($fields)
    {
        $url = Decorator::get_sanitized_value($this->b, $fields);

        if ($url === false) {
            return '';
        }

        if (!empty($this->q)) {
            $queryVars = Decorator::get_sanitized_value($this->q, $fields);

            $sep = '?';
            ksort($queryVars);
            foreach ($queryVars as $var => $value) {
                $url .= $sep . Decorator::value_url($var, $fields) . '=' . Decorator::value_url($value, $fields);
                $sep = '&';
            }
        }
        //$this->prtrace('url before', $url);
        if (SUBFOLDER !== '' && (strpos($url, '/') === 0) && (strpos($url, SUBFOLDER) === false)) {
            $url = str_replace('//', '/', SUBFOLDER . '/' . $url);
        }
        //$this->prtrace('url after', $url);
        return $url;
    }
}
