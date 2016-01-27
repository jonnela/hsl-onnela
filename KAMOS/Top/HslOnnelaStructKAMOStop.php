<?php
/**
 * File for class HslOnnelaStructKAMOStop
 * @package HslOnnela
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
/**
 * This class stands for HslOnnelaStructKAMOStop originally named KAMOStop
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://omatlahdot.hkl.fi/interfaces/kamo?wsdl}
 * @package HslOnnela
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
class HslOnnelaStructKAMOStop extends HslOnnelaWsdlClass
{
    /**
     * The addr
     * @var string
     */
    public $addr;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The id2
     * @var string
     */
    public $id2;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for KAMOStop
     * @see parent::__construct()
     * @param string $_addr
     * @param string $_id
     * @param string $_id2
     * @param string $_name
     * @return HslOnnelaStructKAMOStop
     */
    public function __construct($_addr = NULL,$_id = NULL,$_id2 = NULL,$_name = NULL)
    {
        parent::__construct(array('addr'=>$_addr,'id'=>$_id,'id2'=>$_id2,'name'=>$_name),false);
    }
    /**
     * Get addr value
     * @return string|null
     */
    public function getAddr()
    {
        return $this->addr;
    }
    /**
     * Set addr value
     * @param string $_addr the addr
     * @return string
     */
    public function setAddr($_addr)
    {
        return ($this->addr = $_addr);
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
     * Get id2 value
     * @return string|null
     */
    public function getId2()
    {
        return $this->id2;
    }
    /**
     * Set id2 value
     * @param string $_id2 the id2
     * @return string
     */
    public function setId2($_id2)
    {
        return ($this->id2 = $_id2);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see HslOnnelaWsdlClass::__set_state()
     * @uses HslOnnelaWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return HslOnnelaStructKAMOStop
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
