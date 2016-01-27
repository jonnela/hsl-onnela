<?php
/**
 * File for class HslOnnelaStructKAMOLine
 * @package HslOnnela
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
/**
 * This class stands for HslOnnelaStructKAMOLine originally named KAMOLine
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://omatlahdot.hkl.fi/interfaces/kamo?wsdl}
 * @package HslOnnela
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
class HslOnnelaStructKAMOLine extends HslOnnelaWsdlClass
{
    /**
     * The dest
     * @var string
     */
    public $dest;
    /**
     * The line
     * @var string
     */
    public $line;
    /**
     * The route
     * @var string
     */
    public $route;
    /**
     * Constructor method for KAMOLine
     * @see parent::__construct()
     * @param string $_dest
     * @param string $_line
     * @param string $_route
     * @return HslOnnelaStructKAMOLine
     */
    public function __construct($_dest = NULL,$_line = NULL,$_route = NULL)
    {
        parent::__construct(array('dest'=>$_dest,'line'=>$_line,'route'=>$_route),false);
    }
    /**
     * Get dest value
     * @return string|null
     */
    public function getDest()
    {
        return $this->dest;
    }
    /**
     * Set dest value
     * @param string $_dest the dest
     * @return string
     */
    public function setDest($_dest)
    {
        return ($this->dest = $_dest);
    }
    /**
     * Get line value
     * @return string|null
     */
    public function getLine()
    {
        return $this->line;
    }
    /**
     * Set line value
     * @param string $_line the line
     * @return string
     */
    public function setLine($_line)
    {
        return ($this->line = $_line);
    }
    /**
     * Get route value
     * @return string|null
     */
    public function getRoute()
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param string $_route the route
     * @return string
     */
    public function setRoute($_route)
    {
        return ($this->route = $_route);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see HslOnnelaWsdlClass::__set_state()
     * @uses HslOnnelaWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return HslOnnelaStructKAMOLine
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
