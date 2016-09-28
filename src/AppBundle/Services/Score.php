<?php

namespace AppBundle\Services;

use GuzzleHttp\Psr7\Response;

/**
 * Class Score
 */
class Score
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $pass;


    /**
     * Score constructor.
     * @param \GuzzleHttp\Client $client
     * @param string $url
     * @param string $key
     * @param string $pass
     */
    public function __construct(\GuzzleHttp\Client $client, $url = '', $key = '', $pass = '')
    {

        $this->client = $client;

        $this->url = $url;

        $this->key = $key;

        $this->pass = $pass;
    }

    /**
     * @param $question
     * @param $answer
     * @return Response
     */
    public function retrieve($question, $answer){

        return $this->client->request('GET', '?'. http_build_query(['q' => $question, 'a' => $answer]), [
            'base_uri' => $this->url,
            'auth' => [$this->key, $this->pass]
        ]);
    }
}