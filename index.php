<?php

class Text
{
    public $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function cut()
    {
        $firstText = str_split(substr($this->text, 0, '16'));
        $firstText = array_reverse($firstText);
        var_dump($firstText);
        $i = 0;
        if ($firstText[0] == ' ') {
            print implode(array_reverse($firstText));
        } else {
            foreach ($firstText as $value) {
                if ($value == ' ') {
                    break;
                }
                $i++;
            }
            $editText = array_splice($firstText, $i);
            $editText = array_reverse($editText);
            print implode($editText) . '...';
        }

    }

}

$obj = new Text('Mano vardas Toms ir as esu Botanikas.');
$obj->cut();
