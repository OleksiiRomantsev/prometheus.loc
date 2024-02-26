<?php
namespace App\myclasses\words;

use Symfony\Component\DomCrawler\Crawler;

class cambridgeAudio extends aAudio
{
    private $url = "https://dictionary.cambridge.org/dictionary/english-russian/";
    private $fallbackUrl = "https://dictionary.cambridge.org/dictionary/english/";
    private $domain = 'https://dictionary.cambridge.org';

    public function getAudio($word)
    {
        $url = $this->url . urlencode($word);
        $html = $this->sendRequest($url);
        if(!$html) return [];

        $crawler = new Crawler($html);

        // получаем перевод
        $trans = 'нет перевода';
        if($crawler->filter('body .trans')->count() > 0) {
            $trans = $crawler->filter('body .trans')->text();
            $trans = str_replace(['\n', '\r', '\t'], [''], $trans);
            $trans = trim($trans);
        } else {

            // вторая попытка ))
            sleep(1);
            $html = $this->sendRequest($this->fallbackUrl . urlencode($word));
            $crawler = new Crawler($html);
        }

        // получить транскрипцию слова
        $transcription = '';
        if($crawler->filter('body .pron .ipa')->count() > 0) {
            $transcription = $crawler->filter('body .pron .ipa')->text();
        }

        $audio_uk = '';
        if($crawler->filter('body .uk source[type="audio/mpeg"]')->count() > 0) {
            $audio_uk = $crawler->filter('body .uk source[type="audio/mpeg"]')->attr('src');
            $audio_uk = $this->domain.$audio_uk;
        }

        $audio_us = '';
        if($crawler->filter('body .uk source[type="audio/mpeg"]')->count() > 0) {
            $audio_us = $crawler->filter('body .us source[type="audio/mpeg"]')->attr('src');
            $audio_us = $this->domain . $audio_us;
        }


        return array($trans, $audio_uk, $audio_us, $transcription);
    }
}
