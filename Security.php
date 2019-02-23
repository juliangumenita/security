<?php
  class Security{
    const METHOD = "AES-256-CBC";
    const KEY = "SECRET_KEY";
    const IV = "16_BYTES_LONG_IV";

    public static function encrypt($string){
      return base64_encode(
        openssl_encrypt($string, self::METHOD, self::KEY, false, self::IV)
      );
    }

    public static function decrypt($string){
      return openssl_decrypt(
        base64_decode($string), self::METHOD, self::KEY, false, self::IV
      );
    }
  }
?>
