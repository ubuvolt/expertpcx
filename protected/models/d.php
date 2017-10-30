<?php

/**
 * Debug class
 */
class d
{
    // override constructor so we can use d()
    public function __construct()
    {
        
    }
    
    /**
     * Dump variable
     * New version of d::d with syntax highlighting
     * @param mixed $var variable to display
     * @param string $varName optional variable name to tell dumps apart from each other
     * @param bool $force will force output on production server, USE WITH CARE
     */
    public static function d($var, $varName = '', $force = false)
    {
        if (php_sapi_name() === 'cli')
        {
            if (!empty($varName))
            {
                echo "$varName $var\n";
            }
            else
            {
                echo "$var\n";
            }
            return;
        }
        
        if (!DEVELOPMENT && ($force === false))
        {
            return;
        }
        
        if (!empty($varName))
        {
            CVarDumper::dump($varName, 10, true);
        }
        
        CVarDumper::dump($var, 10, true);
        echo "<br />";
        //Yii::log("d::d was called with this stack trace", 'warning');
    }
    
    
    /*
     * Function to log to file. If on PRODUCTION don't log until forced
     */
    public static function f($data, $forced=FALSE)
    {
        if( !$forced )
        {
            return;
//            $customer = Customer::produceCustomer();
//            
//            if( $customer->id != 432 )
//            {
//                return; // disable dumping on production
//            }
        }
        
        //$d = "TIME: " .date('Y/m/d G:H:i'). " ===>>> ";
        $d = "TIME: " .date('Y/m/d H:i:s'). " ===>>> ";
        
        if( is_string($data) )
        {
            $d .= $data ."\n";
            
        } else {
            
            ob_start();
            var_dump($data);
            $d .= ob_get_clean(). "\n";
        }
        
        $path = '/var/www/new-shopto/runtime/log.log';
        $f = fopen($path, 'a+');
        fwrite($f, $d);
        
        return( fclose($f) );
    }
    
    
    /*
    // old d::d that looked like old shopto print '<xmp>'.$var'</xmp>';
    public static function d($var, $varName='')
    {
        $open = "<pre style='background:write; color:black; font-size:1.4em; text-align:left;'>";
        $close = "</pre>";
        
        if ($varName)
        {
            echo $open . $varName . $close;
        }
        
        //print $open;
        // Yii way of dumping vars, handles complex objects better than print_r or var_dump
        //print_r($var);
        
        CVarDumper::dump($var, 10, true);
        
        //echo CHtml::encode(CVarDumper::dumpAsString($var));
        //print $close;
    }*/
    
    public static function logError($message)
    {
        Yii::log($message, 'error');
    }
    
    /**
     * New version of d::d with syntax highlighting
     * @param mixed $var variable to display
     * @param string $varName optional variable name to tell dumps apart from each other
     */
    /*public static function c($var, $varName = '')
    {
        CVarDumper::dump($var, 10, true);
    }*/
}