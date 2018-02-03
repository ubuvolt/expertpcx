<?php

class Ebay_api extends CComponent {

    public $production = true;   // toggle to true if going against production
    public $debug = false;   // toggle to provide debugging info
    public $compatabilityLevel = 967;    // eBay API version
    public $findingVer = "1.8.0"; //eBay Finding API version
    public $errorLanguage = "en_GB"; //eBay Finding API version

    public function getApiKey() {


        if ($this->production) {

            $devID = 'f960693b-414d-47b4-8f6d-58c6f482c40b';   // these prod keys are different from sandbox keys
            $appID = 'ubuvoltce-6a5c-4c1e-8151-622a43703db';
            $certID = 'b4ecb267-658e-47b3-9e0a-2c1bee310326';
            //set the Server to use (Sandbox or Production)
            $serverUrl = 'https://api.ebay.com/ws/api.dll';      // server URL different for prod and sandbox
            $shoppingURL = 'http://open.api.ebay.com/shopping';
            $findingURL = 'http://svcs.ebay.com/services/search/FindingService/v1';
            //SiteID must also be set in the request
            //SiteID = 0  (US) - UK = 3, Canada = 2, Australia = 15, ....
            //SiteID Indicates the eBay site to associate the call with
            $siteID = 3;

            // This is used in the Auth and Auth flow
            // This is an initial token, not to be confused with the token that is fetched by the FetchToken call
            // Token for: hairacc4youcom
            // Expires: Mon, 18 Mar 2019 10:29:39 GMT
//            if ($curent_company == 'hairacc4you')
            $appToken = 'AgAAAA**AQAAAA**aAAAAA**E4nHWQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6AEkoamDpWHqQ6dj6x9nY+seQ**jqECAA**AAMAAA**eOYtu2JLG7gG31en9rXogGowCUXU0ambn2o8bmvTIK6kRPD4TbV4JlEhdryHqwj61YyTi0y+Jtj0jGDBAG0U9UB9lv9bG2Gm10lo2k9OtwqNcYIWuiymJbgB3hRolcdoEC4sEaqGD2OO7kPGek6rCiW4P5JTxaKUqb9TqbEyNqY45JjDe86Xu9XHLDrGotTi60t9ZTRR39JH6Ly4cGxY4rLcJaX8U+TY+c8LMAIfQIz7y7cMZ8Q4XXewF4mCqWVRA73/072TiVTCIm97hA5smFQMMZhFZMjKM2zPd64gcrfV5sZK9bC+zIDIwfPxyavXscTpoivzCflWN4wBiia+R9X2iaLUyAaBY04kjdtDo1AaL3dk2ptJXens8ylsrRcd0eYBiN37rZXbyh4Ywp0TC/XICtL6KK05Z4FcK4Czmrz1Nzl4N/BJLKoIh+E4UiY5IKYSfgMTZRtQcIFTQm+Bzv3/DphIQpSOxRUFpfWlIEojhRtE0UUD8bQ4YB7n1j5QmkSOKJWwLdF9+nKkF5V/JTEXI9Zw8Hv2tA7pYlX/TllRTbM4G9oXYAY+IlA5LjmCNmt9J00ldeCp+QLMnRjypXQ+hb6thMS04PV3TYiIszLqvescAS5DMJWxNevCBveAixrxayN1PTdCYA2gbHtQFd26koJ9HlhDSpY+oULTXjWutkBEmeAJt1Py1XWiJu2H/BEFxAb8w8KPz0sYdSBHFRDIi2P216WLzmAvDxabgv6T0QGzHofz+V9kUM2m8pSE';

//            if ($curent_company == 'expertpcx')
//            $appToken = 'AgAAAA**AQAAAA**aAAAAA**IxcCWg**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wGkYWnCJOLoQ+dj6x9nY+seQ**jqECAA**AAMAAA**bHJVYkbeALRZKLA2Uq3qTeVzOg98UAxX7V/f4sybXZGCQjF3axPbSg2isBUG7MJfbzLZMluPebPrVhx/STnfDi+sKN1Mqh9w0LnX4ugbP/6kWh1qIuwgW1+ALErFhoVU+x92A17WgqvZvCIQhC7Yek7VIljsCzlDaE+eP7uKv/3GOIWsk3BmY2T2nFUQHWPjtRSdRo92s/52PsGBCaaHFu1RGTOU5QFOUWGPwJFFofYjsV5fho5+fPKsItmLAHKylWSt1+SbkRVqV5REemedGlURDUGmA9ZF6WzW51A1MSSgGT7DQA/YJT4PlW5DqaHk9CY4W37L/lZOoIH65Zd+3qSM84N5g8Zoygg6XJVOXxKdF7XJ4SEn2SGdDz+kZZ8Fyf7cZU2Yehl9OwE1uKNJ5qKKTqjeJFebwSCEUEDSOOxYvjb7keZ63d5BliCShexy6ba2vlQTlxF93xz6LRl4WYgmglBZ1yY8IoWz18HXjJ5tq6Bvd07rPHCTT5plBgeumQf+5J8sTHoQxhGvvHu9wTY4+3MndsWsi2Ba3X8URp+kRpLPgDqIOaodUEyTfwZB1V3Vb7uD9/KMKO/pwrBWYxbJ46EJUFmWtwYHcyq6CM5E0vY8v4YuP0btVhbFbWOjJZjZBbbmOhIqXpg8p2sp0eOf4YnhdbIvvz6n9VSzxRxphNsLSvG/oGfjON1IogS7CufE+y0RGkI48vLXUzM0LcrMw1TZNqdAevnxbAWtc2Gq/uqIF0ebJMtddcwNxuJ4';

            $apiKey['devID'] = $devID;
            $apiKey['appID'] = $appID;
            $apiKey['certID'] = $certID;
            $apiKey['serverUrl'] = $serverUrl;
            $apiKey['appToken'] = $appToken;
            $apiKey['siteID'] = $siteID;
            $apiKey['errorLanguage'] = $this->errorLanguage;
            $apiKey['compatabilityLevel'] = $this->compatabilityLevel;
        } else {

            // sandbox (test) environment
            $devID = 'f960693b-414d-47b4-8f6d-58c6f482c40b';   // insert your devID for sandbox
            $appID = 'ubuvolt7b-632c-4853-922e-a4f5ddc56cb';   // different from prod keys
            $certID = '70ebaa10-a754-42a4-bb5f-61fc750120ba';   // need three keys and one token
            //set the Server to use (Sandbox or Production)
            $serverUrl = 'https://api.sandbox.ebay.com/ws/api.dll';
            $shoppingURL = 'http://open.api.sandbox.ebay.com/shopping';
            $findingURL = 'http://svcs.sandbox.ebay.com/services/search/FindingService/v1';
            //SiteID must also be set in the request
            //SiteID = 0  (US) - UK = 3, Canada = 2, Australia = 15, ....
            //SiteID Indicates the eBay site to associate the call with
            $siteID = 0;

            $loginURL = 'https://signin.sandbox.ebay.com/ws/eBayISAPI.dll'; // This is the URL to start the Auth & Auth process
            $feedbackURL = 'http://feedback.sandbox.ebay.com/ws/eBayISAPI.dll'; // This is used to for link to feedback

            $runame = '';  // sandbox runame
            // This is the sandbox application token, not to be confused with the sandbox user token that is fetched.
            // This token is a long string - do not insert new lines.
            // Token for: testuser_janneahonenski
            // Expires: Mon, 18 Mar 2019 10:26:26 GMT
//            if ($curent_company == 'hairacc4you')
            $appToken = 'AgAAAA**AQAAAA**aAAAAA**UojHWQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4GnCZGApwudj6x9nY+seQ**OisDAA**AAMAAA**szbmjLMx2B+fEArUebCltKL8pU0Ywwhmwm1JXJVxiS73EQEyh6K+ObcHsmajfedLrHwg8GbPDaRv4efccjzhSRyPXVa6/rBfs5tpUy8kkILL0Vi9pqRbeb6v407os2Nn+taFc5j9Wv41dZFLjIQfpJKLZ2MH9yP6TC2yIZN+YjimBsgiXeuGvTK0yAedxrsk9FcHWaJjQUl3a9O0PUKebJEOmNQfYNzgcZi9Pia1AoZn/nYKwGqdb4pytjbCEGJT2+UI2OuGw62CA1GX+gVaKZB5BiDVO9uuPWwtQIK0SD40Gs9/OgHZCcPx7Z2xIML1ySE0QGhESff0Qfdiau4rmNwwvfUmfueHvRDVspJES1cTZuzi+Bbs1Obg4Bpmu4flK/szeV0pcHcEnap3x8cv89M/1AoMtPEwawb2DiNqWYyKr7rYb21BQ0cFBJQQ69VHU7+APFCZyu6PhFzYAGkZuQWM8eOVp6q1ten0vGLoilNfuz7+P6cOc0NC821Q/SC+eD+KHMX0TyGtLUmcMJOIM1RzxaBO+WswwdR+NEqNx9OUVjcX3rObbiQL22hsw9w5z3eKiCI1lYPcewyCVnXvo0H+rGIRtz/lEdK0Bx6cu1UUZuYbdn+/SwPWX69wnf78mvYNI7QOI+igGqmo4gHQH0WLklvt56IFA2pNW0soakIIfmP002ZQN1m8AKgypV07/BHmpKRobDyKQyQbbgFUbb4Lb9WmnkxFZ+MQ6w7xDudXhczqmpyxSD/BMQVJKCF4';

//            if ($curent_company == 'expertpcx')
//                $appToken = 'AgAAAA**AQAAAA**aAAAAA**UojHWQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4GnCZGApwudj6x9nY+seQ**OisDAA**AAMAAA**szbmjLMx2B+fEArUebCltKL8pU0Ywwhmwm1JXJVxiS73EQEyh6K+ObcHsmajfedLrHwg8GbPDaRv4efccjzhSRyPXVa6/rBfs5tpUy8kkILL0Vi9pqRbeb6v407os2Nn+taFc5j9Wv41dZFLjIQfpJKLZ2MH9yP6TC2yIZN+YjimBsgiXeuGvTK0yAedxrsk9FcHWaJjQUl3a9O0PUKebJEOmNQfYNzgcZi9Pia1AoZn/nYKwGqdb4pytjbCEGJT2+UI2OuGw62CA1GX+gVaKZB5BiDVO9uuPWwtQIK0SD40Gs9/OgHZCcPx7Z2xIML1ySE0QGhESff0Qfdiau4rmNwwvfUmfueHvRDVspJES1cTZuzi+Bbs1Obg4Bpmu4flK/szeV0pcHcEnap3x8cv89M/1AoMtPEwawb2DiNqWYyKr7rYb21BQ0cFBJQQ69VHU7+APFCZyu6PhFzYAGkZuQWM8eOVp6q1ten0vGLoilNfuz7+P6cOc0NC821Q/SC+eD+KHMX0TyGtLUmcMJOIM1RzxaBO+WswwdR+NEqNx9OUVjcX3rObbiQL22hsw9w5z3eKiCI1lYPcewyCVnXvo0H+rGIRtz/lEdK0Bx6cu1UUZuYbdn+/SwPWX69wnf78mvYNI7QOI+igGqmo4gHQH0WLklvt56IFA2pNW0soakIIfmP002ZQN1m8AKgypV07/BHmpKRobDyKQyQbbgFUbb4Lb9WmnkxFZ+MQ6w7xDudXhczqmpyxSD/BMQVJKCF4';

            $apiKey['devID'] = $devID;
            $apiKey['appID'] = $appID;
            $apiKey['certID'] = $certID;
            $apiKey['serverUrl'] = $serverUrl;
            $apiKey['appToken'] = $appToken;
            $apiKey['siteID'] = $siteID;
            $apiKey['errorLanguage'] = $this->errorLanguage;
            $apiKey['compatabilityLevel'] = $this->compatabilityLevel;
        }
        return $apiKey;
    }

}
