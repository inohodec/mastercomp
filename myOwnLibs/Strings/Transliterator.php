<?php

namespace Ostepan\Lib\String;

class Transliterator 
{
    private static $russianSmall = [
        "а", "б", "в", "г", "д", "е", "ё", "ж",
        "з", "и", "й", "к", "л", "м", "н", "о", "п", "р",
        "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ъ",
        "ы", "ь", "э", "ю", "я", " "
    ];
    private static $englishSmall = [
        "a", "b", "v", "g", "d", "e", "Yo", "zh",
        "z", "i", "y", "k", "l", "m", "n", "o", "p", "r",
        "s", "t", "u", "f", "h", "ts", "ch", "sh", "sch", "",
        "yi", "", "e", "yu", "ya", "_"
    ];
    public static function convert(string $text = "", bool $toLowercase = true): string
    {
        $smallText = self::toLowercase($text);
        $transliteratedText = self::transliterate($smallText);
        return $transliteratedText;        
    }
    
    private static function toLowercase(string $text)
    {
        return strtolower($text);
    }

    private static function transliterate(string $text)
    {
        return $text = str_replace(self::$russianSmall, self::$englishSmall, $text);
    }
}