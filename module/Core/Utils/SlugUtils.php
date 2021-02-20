<?php

namespace Module\Core\Utils;

class SlugUtils {

    /**
     * This function is for generate the slug.
     *
     * @param string $string The string that is to be slugified.
     *
     * @return  string
     */
    public function slugify(string $string): string
    {
        try {
            //The place where we slugify
            // replace non letter or digits by
            $string = preg_replace('~[^\pL\d]+~u', '-', $string);

            // transliterate
            $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);

            // remove unwanted characters
            $string = preg_replace('~[^-\w]+~', '', $string);

            // trim
            $string = trim($string, '-');

            // remove duplicate
            $string = preg_replace('~-+~', '-', $string);

            // lowercase
            $string = strtolower($string);

            if (empty($string)) {
                $string = 'n-a';
            }
        } catch (\Exception $e) {
            throw new $e;
        }

        return $string;
    }
}
