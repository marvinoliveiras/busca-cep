<?php
namespace Marvinoliveiras\BuscaCep;
class Search
{
    private string $url =
        "https://viacep.com.br/ws/";
    public function getAdressfromZipcode(
        string $zipcode
        ): array
    {
        $filtredZipcode = preg_replace(
            '/[^0-9]/im','',$zipcode
        );
        $resultJson = file_get_contents(
            $this->url
            .$filtredZipcode
            .'/json'
        );
        return json_decode(
            $resultJson, TRUE
        );
    }
}