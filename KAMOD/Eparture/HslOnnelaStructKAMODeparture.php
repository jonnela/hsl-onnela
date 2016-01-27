<?php
/**
 * File for class HslOnnelaStructKAMODeparture
 * @package HslOnnela
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
/**
 * This class stands for HslOnnelaStructKAMODeparture originally named KAMODeparture
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://omatlahdot.hkl.fi/interfaces/kamo?wsdl}
 * @package HslOnnela
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
class HslOnnelaStructKAMODeparture extends HslOnnelaWsdlClass
{
    /**
     * The dest
     * @var string
     */
    public $dest;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The info
     * @var string
     */
    public $info;
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
     * The rtime
     * @var string
     */
    public $rtime;
    /**
     * The stop
     * @var string
     */
    public $stop;
    /**
     * The stopname
     * @var string
     */
    public $stopname;
    /**
     * The time
     * @var string
     */
    public $time;
    /**
     * Constructor method for KAMODeparture
     * @see parent::__construct()
     * @param string $_dest
     * @param string $_id
     * @param string $_info
     * @param string $_line
     * @param string $_route
     * @param string $_rtime
     * @param string $_stop
     * @param string $_stopname
     * @param string $_time
     * @return HslOnnelaStructKAMODeparture
     */
    public function __construct($_dest = NULL,$_id = NULL,$_info = NULL,$_line = NULL,$_route = NULL,$_rtime = NULL,$_stop = NULL,$_stopname = NULL,$_time = NULL)
    {
        parent::__construct(array('dest'=>$_dest,'id'=>$_id,'info'=>$_info,'line'=>$_line,'route'=>$_route,'rtime'=>$_rtime,'stop'=>$_stop,'stopname'=>$_stopname,'time'=>$_time),false);
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
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $_id the id
     * @return string
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
    }
    /**
     * Get info value
     * @return string|null
     */
    public function getInfo()
    {
        return $this->info;
    }
    /**
     * Set info value
     * @param string $_info the info
     * @return string
     */
    public function setInfo($_info)
    {
        return ($this->info = $_info);
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
     * Get rtime value
     * @return string|null
     */
    public function getRtime()
    {
        return $this->rtime;
    }
    /**
     * Set rtime value
     * @param string $_rtime the rtime
     * @return string
     */
    public function setRtime($_rtime)
    {
        return ($this->rtime = $_rtime);
    }
    /**
     * Get stop value
     * @return string|null
     */
    public function getStop()
    {
        return $this->stop;
    }
    /**
     * Set stop value
     * @param string $_stop the stop
     * @return string
     */
    public function setStop($_stop)
    {
        return ($this->stop = $_stop);
    }
    /**
     * Get stopname value
     * @return string|null
     */
    public function getStopname()
    {
        return $this->stopname;
    }
    /**
     * Set stopname value
     * @param string $_stopname the stopname
     * @return string
     */
    public function setStopname($_stopname)
    {
        return ($this->stopname = $_stopname);
    }
    /**
     * Get time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $_time the time
     * @return string
     */
    public function setTime($_time)
    {
        return ($this->time = $_time);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see HslOnnelaWsdlClass::__set_state()
     * @uses HslOnnelaWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return HslOnnelaStructKAMODeparture
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
