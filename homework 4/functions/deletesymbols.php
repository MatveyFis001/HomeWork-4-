<?php

    function deletesymbols(string $filename) : string
    {
        $pattern = '/[\W]/';

        $info = pathinfo($filename);
        $name = $info['filename'];
        $extension = $info['extension']; // Розширення файлу

        $name = preg_replace($pattern, '',$name);

        return $name.".".$extension;
    }
