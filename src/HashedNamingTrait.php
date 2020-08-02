<?php

namespace VSWTeam\LaravelHashedNaming;

trait HashedNamingTrait
{
    public static function bootHashedNamingTrait()
    {
        //
    }

    /**
     * 輸入名稱, 產生 MD5 雜湊命名
     *
     * @param  int $input
     * @return string
     */
    public function generateHashedName($input)
    {
        return md5($input);
    }

    /**
     * 輸入雜湊名稱產生對應的目錄結構路徑
     *
     * @param  string $hashedName
     * @return string
     */
    public function generateHashedDirectoryPath($input, $level = 1)
    {
        $hashedName = $this->generateHashedName($input);

        $digit = 2;
        $start = 0;
        $end = min(30, $level * $digit);

        return '/' . implode('/', str_split(substr($hashedName, $start, $end), $digit)) . '/' . $hashedName;
    }

    /**
     * 檢查是否為合法的 MD5 字串
     *
     * @param  string  $name
     * @return boolean
     */
    private function isValidMd5Name($name)
    {
        return strlen($name) == 32 && ctype_xdigit($name);
    }
}
