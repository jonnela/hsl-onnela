<?php
/**
 * File for class HslOnnelaServiceGet
 * @package HslOnnela
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
/**
 * This class stands for HslOnnelaServiceGet originally named Get
 * @package HslOnnela
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
class HslOnnelaServiceGet extends HslOnnelaWsdlClass
{
    /**
     * Method to call the operation originally named getLines
     * @uses HslOnnelaWsdlClass::getSoapClient()
     * @uses HslOnnelaWsdlClass::setResult()
     * @uses HslOnnelaWsdlClass::saveLastError()
     * @param string $_string
     * @return ArrayOfKAMOLine
     */
    public function getLines($_string)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getLines($_string));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getNextDepartures
     * @uses HslOnnelaWsdlClass::getSoapClient()
     * @uses HslOnnelaWsdlClass::setResult()
     * @uses HslOnnelaWsdlClass::saveLastError()
     * @param string $_string
     * @return ArrayOfKAMODeparture
     */
    public function getNextDepartures($_string)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getNextDepartures($_string));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getNextDeparturesExt
     * @uses HslOnnelaWsdlClass::getSoapClient()
     * @uses HslOnnelaWsdlClass::setResult()
     * @uses HslOnnelaWsdlClass::saveLastError()
     * @param string $_string_1
     * @param dateTime $_date_2
     * @param int $_int_3
     * @return ArrayOfKAMODeparture
     */
    public function getNextDeparturesExt($_string_1,$_date_2,$_int_3)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getNextDeparturesExt($_string_1,$_date_2,$_int_3));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getNextDeparturesExtRT
     * @uses HslOnnelaWsdlClass::getSoapClient()
     * @uses HslOnnelaWsdlClass::setResult()
     * @uses HslOnnelaWsdlClass::saveLastError()
     * @param string $_string_1
     * @param dateTime $_date_2
     * @param int $_int_3
     * @return ArrayOfKAMODeparture
     */
    public function getNextDeparturesExtRT($_string_1,$_date_2,$_int_3)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getNextDeparturesExtRT($_string_1,$_date_2,$_int_3));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getNextDeparturesRT
     * @uses HslOnnelaWsdlClass::getSoapClient()
     * @uses HslOnnelaWsdlClass::setResult()
     * @uses HslOnnelaWsdlClass::saveLastError()
     * @param string $_string
     * @return ArrayOfKAMODeparture
     */
    public function getNextDeparturesRT($_string)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getNextDeparturesRT($_string));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getNextDeparturesRTStops
     * @uses HslOnnelaWsdlClass::getSoapClient()
     * @uses HslOnnelaWsdlClass::setResult()
     * @uses HslOnnelaWsdlClass::saveLastError()
     * @param ArrayOfstring $_arrayOfstring
     * @return ArrayOfKAMODeparture
     */
    public function getNextDeparturesRTStops($_arrayOfstring)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getNextDeparturesRTStops($_arrayOfstring));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getPassingTimes
     * @uses HslOnnelaWsdlClass::getSoapClient()
     * @uses HslOnnelaWsdlClass::setResult()
     * @uses HslOnnelaWsdlClass::saveLastError()
     * @param string $_string
     * @return ArrayOfKAMODeparture
     */
    public function getPassingTimes($_string)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getPassingTimes($_string));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getStopInfo
     * @uses HslOnnelaWsdlClass::getSoapClient()
     * @uses HslOnnelaWsdlClass::setResult()
     * @uses HslOnnelaWsdlClass::saveLastError()
     * @param string $_string
     * @return ArrayOfKAMOStop
     */
    public function getStopInfo($_string)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getStopInfo($_string));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see HslOnnelaWsdlClass::getResult()
     * @return ArrayOfKAMODeparture|ArrayOfKAMOLine|ArrayOfKAMOStop
     */
    public function getResult()
    {
        return parent::getResult();
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
