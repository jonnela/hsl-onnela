<?php
/**
 * File for the class which returns the class map definition
 * @package HslOnnela
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
/**
 * Class which returns the class map definition by the static method HslOnnelaClassMap::classMap()
 * @package HslOnnela
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
class HslOnnelaClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'KAMODeparture' => 'HslOnnelaStructKAMODeparture',
  'KAMOLine' => 'HslOnnelaStructKAMOLine',
  'KAMOStop' => 'HslOnnelaStructKAMOStop',
);
    }
}
