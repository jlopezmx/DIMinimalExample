Dependency Injection - A minimal Symfony Example
---

Unlike other posts revolving around Dependency Injection this one cares only the very basic about definition and instead it focuses on how to get things done relatively simple.

What you need to know is that by following DI pattern using Symfony your classes become "services" that are available for other parts of the application through the Symfony Service Locator.

The same way your class becomes a service that others can use, you can use other available services.

Say for example that your class needs to interact with an API. Save time and instead of building up a custom API client require Guzzle in your project.


### Get started


>[DISCLOSURE] As always you can refer to the docs in the Symfony official site but be aware the code samples are sometimes too abstract and without practical context it becomes a pain to get the application going. My purpose for this guideline is to clear things out of the path.

After the brief disclosure time to move along; since we want to use Guzzle we have to require it as it is not shipped with Symfony as default. Go ahead and add this package to your composer.json. Run composer update to get your vendor directory updated.

After Guzzle is installed create a class in your bundle that will interact with an "score" API. The class constructor will tell us what are the minimal required arguments to get it working: an instance of Guzzle and three string scalars for url, key and pass respectively.

##### AppBundle/Services/Score.php

```php
<?php 

namespace AppBundle\Services;

/**
 * Class Score
 * /
 class Score{
    /**
     * @var \GuzzleHttp\Client
     */private $client;

    /**
     * @var string
     */private $url;

    /**
     * @var string
     */private $key;

    /**
     * @var string
     */private $pass;


    /**
     * Score constructor.
     * @param \GuzzleHttp\Client $client
     * @param string $url
     * @param string $key
     * @param string $pass
     */public function __construct(\GuzzleHttp\Client $client, $url = '', $key = '', $pass = ''){

        $this->client = $client;

        $this->url = $url;

        $this->key = $key;

        $this->pass = $pass;
    }
}
````

Next step is to let the Service Locator know about this new class.

##### app/config/services.yml

```yml
# Learn more about services, parameters and containers at# http://symfony.com/doc/current/book/service_container.html

parameters:

  ## arguments for guzzle
  url: http://jlopez.mx/scores/
  key: key
  pass: secret

services:

  ## guzzle http client
  guzzle:
    class: \GuzzleHttp\Client

  ## score
  score:
    class: AppBundle\Services\Score
    arguments: ["@guzzle", "%url%", "%key%", "%pass%"]
```

Observe what is happening here:

- The application will be aware of a service named `guzzle` and it resolves to an instance of \GuzzleHttp\Client.
- The application will be aware of a service named `score` and the arguments are an instance of \GuzzHttp\Client and three scalar values for api url, api key and api password respectively. It resolves your custom class.
- When you inject a service into another service you have to prefix it with @
- When you inject scalar values to your service you have to start and end with %

So at this point your dependencies are declared and ready to be injected yet there is not actual logic at all.

Lets implement something to make an API call and output the response from the default Symfony controller.

##### AppBundle/Services/Score.php
```php
<?php

namespace AppBundle\Services;

use GuzzleHttp\Psr7\Response;


/**
 * Class Score
 */

class Score{
    /**
     * @var \GuzzleHttp\Client
     */private $client;

    /**
     * @var string
     */private $url;

    /**
     * @var string
     */private $key;

    /**
     * @var string
     */private $pass;


    /**
     * Score constructor.
     * @param \GuzzleHttp\Client $client
     * @param string $url
     * @param string $key
     * @param string $pass
     */
    public function __construct(\GuzzleHttp\Client $client, $url = '', $key = '', $pass = ''){

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

        return$this->client->request('GET', '?'. http_build_query(['q' => $question, 'a' => $answer]), [
            'base_uri' => $this->url,
            'auth' => [$this->key, $this->pass]
        ]);
    }
}
```


##### AppBundle/Controller/DefaultController.php

```php
<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request){

        // invoke score service
        $score = $this->get('score');

        // retrieve results for question 1, answer option 1
        return Response::create($score->retrieve(1,1)->getBody()->getContents());
    }
}
```

Testing the actual code in a browser displays a value for the score.

{"score":10}

### Bottomline

Though it may look a pretty basic example the implementation shows what you have to setup in order for the Dependency Injector become aware of your custom code.

If walked thru the example you have noticed that the service locator reads the declaration of your services and parameters in only one configuration file and it automatically resolves and injects such services throughout the application.

### Benefits

Stop worrying to scan all your base code to see the how classes relate and communicate each other. This is a key DI benefit.

Leverage this pattern the next time you find yourself not declaring up front class-dependencies but instead creating objects on-demand: at the long term your application will be eating unnecesary large chunks of memory to hold these objects having bad performance as a result.

If you plan ahead to use DI with Symfony have this guideline as reference to help you to get started.



##### Jaziel Lopez, Experienced Software Developer, Tijuana Area Mexico, 2016

