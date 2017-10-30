<?php

/**
 * Simple component wrapping cURL library
 */

class Curl extends CComponent
{
    /* @var resource $_curl to keep curl handler */
    private $_curl = null;
    /* @var string $_url URL to be called */
    private $_url =  null;
    /* @var integer $_port port to be called */
    private $_port = null;
    
    /* @cont integer DEFAULT_TIMEOUT default timeout */
    const DEFAULT_TIMEOUT = 30;
    /* @cont integer DEFAULT_PORT default port */
    const DEFAULT_PORT    = 80;
    
    /* @var array $_OPTIONS default cURL settings which can be ovewritten or new settings can be added by calling $this->setup() */
    private $_OPTIONS = array(
        CURLOPT_HEADER              => 0,
        CURLOPT_SSL_VERIFYPEER      => 0,
        CURLOPT_POST                => 1,
        CURLOPT_RETURNTRANSFER      => 1,
        CURLOPT_TIMEOUT             => self::DEFAULT_TIMEOUT,
        CURLOPT_USERAGENT           => 'ShopTo.Net',
        CURLOPT_FOLLOWLOCATION      => 1,
    );


    
    /**
     * Constructor used to set URL and change default PORT number if needed
     * @param string $url URL to be called
     * @param int $port optional, PORT to be used for call
     * @return \Curl
     * @throws Exception
     */
    public function __construct($url, $port=null)
    {
        $this->_curl = curl_init();
        
        if( !is_resource($this->_curl) )
        {
            throw new Exception("Can't initialize cURL");
        }
        
        $this->setUrl($url);
        $this->_port = (!is_int($port) ? $port : self::DEFAULT_PORT);
        
        
        return $this;
    }
    
    
    /**
     * Setter for $this->_url
     * @param string $url
     * @return \Curl
     */
    public function setUrl($url)
    {
        $this->_url = $url;
        
        return $this;
    }


    /**
     * Method to add/modify default (self::$_OPTIONS) settings of cURL library
     * @param array $options cURL options as KEYs with corresponding values as VALUEs. Options as per cURL docs
     * @return \Curl
     */
    public function setup(array $options)
    {
        foreach( $options as $key=>$value )
        {
            // URL and PORT have to be set in constructor
            if( $key != CURLOPT_URL && $key !=CURLOPT_PORT )
            {
                $this->_OPTIONS[$key] = $value;
            }
        }
        
        
        return $this;
    }


    /**
     * Method to set POST data for a cURL request. This will also set relevant cURL options to allow POST to go through
     * @param mixed $data
     * @return \Curl
     */
    public function setPostData($data)
    {
        $this->_OPTIONS[CURLOPT_POST] = 1;
        $this->_OPTIONS[CURLOPT_POSTFIELDS] = $data;
        
        
        return $this;
    }


    /**
     * Main method to execute cURL call
     * @return mixed
     * @throws Exception
     */
    public function call()
    {
        curl_setopt($this->_curl, CURLOPT_URL, $this->_url);
        curl_setopt($this->_curl, CURLOPT_PORT, $this->_port);

        foreach( $this->_OPTIONS as $key=>$value )
        {
            curl_setopt($this->_curl, $key, $value);
        }
        
        $res = curl_exec($this->_curl);
        
        if( $res === false )
        {
            throw new Exception(curl_error($this->_curl));
        }
        
        
        return $res;
    }
    
    public function setMethodToGet()
    {
        curl_setopt($this->_curl, CURLOPT_CUSTOMREQUEST, "GET"); 
    }
}
