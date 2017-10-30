<?php
/*  � 2013 eBay Inc., All Rights Reserved */ 
/* Licensed under CDDL 1.0 -  http://opensource.org/licenses/cddl1.php */
    //show all errors - useful whilst developing
    error_reporting(E_ALL);

    // these keys can be obtained by registering at http://developer.ebay.com
    
    $production         = false;   // toggle to true if going against production
    $compatabilityLevel = 535;    // eBay API version
    
    if ($production) {
        $devID = '';   // these prod keys are different from sandbox keys
        $appID = '';
        $certID = '';
        //set the Server to use (Sandbox or Production)
        $serverUrl = 'https://api.ebay.com/ws/api.dll';      // server URL different for prod and sandbox
        //the token representing the eBay user to assign the call with
        $userToken = 'YOUR_PROD_TOKEN';          
    } else {  
        // sandbox (test) environment
        $devID = 'f960693b-414d-47b4-8f6d-58c6f482c40b';         // insert your devID for sandbox
        $appID = 'ubuvolt7b-632c-4853-922e-a4f5ddc56cb';   // different from prod keys
        $certID = '70ebaa10-a754-42a4-bb5f-61fc750120ba';  // need three 'keys' and one token
        //set the Server to use (Sandbox or Production)
        $serverUrl = 'https://api.sandbox.ebay.com/ws/api.dll';
        // the token representing the eBay user to assign the call with
        // this token is a long string - don't insert new lines - different from prod token
        $userToken = 'AgAAAA**AQAAAA**aAAAAA**EW/HWQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4GnCZGApwudj6x9nY+seQ**OisDAA**AAMAAA**szbmjLMx2B+fEArUebCltKL8pU0Ywwhmwm1JXJVxiS73EQEyh6K+ObcHsmajfedLrHwg8GbPDaRv4efccjzhSRyPXVa6/rBfs5tpUy8kkILL0Vi9pqRbeb6v407os2Nn+taFc5j9Wv41dZFLjIQfpJKLZ2MH9yP6TC2yIZN+YjimBsgiXeuGvTK0yAedxrsk9FcHWaJjQUl3a9O0PUKebJEOmNQfYNzgcZi9Pia1AoZn/nYKwGqdb4pytjbCEGJT2+UI2OuGw62CA1GX+gVaKZB5BiDVO9uuPWwtQIK0SD40Gs9/OgHZCcPx7Z2xIML1ySE0QGhESff0Qfdiau4rmNwwvfUmfueHvRDVspJES1cTZuzi+Bbs1Obg4Bpmu4flK/szeV0pcHcEnap3x8cv89M/1AoMtPEwawb2DiNqWYyKr7rYb21BQ0cFBJQQ69VHU7+APFCZyu6PhFzYAGkZuQWM8eOVp6q1ten0vGLoilNfuz7+P6cOc0NC821Q/SC+eD+KHMX0TyGtLUmcMJOIM1RzxaBO+WswwdR+NEqNx9OUVjcX3rObbiQL22hsw9w5z3eKiCI1lYPcewyCVnXvo0H+rGIRtz/lEdK0Bx6cu1UUZuYbdn+/SwPWX69wnf78mvYNI7QOI+igGqmo4gHQH0WLklvt56IFA2pNW0soakIIfmP002ZQN1m8AKgypV07/BHmpKRobDyKQyQbbgFUbb4Lb9WmnkxFZ+MQ6w7xDudXhczqmpyxSD/BMQVJKCF4';                 
    }
    
    
?>