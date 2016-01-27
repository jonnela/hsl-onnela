<?php
/**
 * Test with HslOnnela for 'http://omatlahdot.hkl.fi/interfaces/kamo?wsdl'
 * @package HslOnnela
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-27
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/HslOnnelaAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a HslOnnelaWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[HslOnnelaWsdlClass::WSDL_URL] = 'http://omatlahdot.hkl.fi/interfaces/kamo?wsdl';
 * $wsdl[HslOnnelaWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[HslOnnelaWsdlClass::WSDL_TRACE] = true;
 * $wsdl[HslOnnelaWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[HslOnnelaWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new HslOnnelaWsdlClass($wsdl);
 */
/**
 * Examples
 */


/*********************************
 * Example for HslOnnelaServiceGet
 */
$hslOnnelaServiceGet = new HslOnnelaServiceGet();
// sample call for HslOnnelaServiceGet::getLines()
if($hslOnnelaServiceGet->getLines($_string))
    print_r($hslOnnelaServiceGet->getResult());
else
    print_r($hslOnnelaServiceGet->getLastError());
// sample call for HslOnnelaServiceGet::getNextDepartures()
if($hslOnnelaServiceGet->getNextDepartures($_string))
    print_r($hslOnnelaServiceGet->getResult());
else
    print_r($hslOnnelaServiceGet->getLastError());
// sample call for HslOnnelaServiceGet::getNextDeparturesExt()
if($hslOnnelaServiceGet->getNextDeparturesExt($_string_1,new DateTime(/*** update parameters list ***/),$_int_3))
    print_r($hslOnnelaServiceGet->getResult());
else
    print_r($hslOnnelaServiceGet->getLastError());
// sample call for HslOnnelaServiceGet::getNextDeparturesExtRT()
if($hslOnnelaServiceGet->getNextDeparturesExtRT($_string_1,new DateTime(/*** update parameters list ***/),$_int_3))
    print_r($hslOnnelaServiceGet->getResult());
else
    print_r($hslOnnelaServiceGet->getLastError());
// sample call for HslOnnelaServiceGet::getNextDeparturesRT()
if($hslOnnelaServiceGet->getNextDeparturesRT($_string))
    print_r($hslOnnelaServiceGet->getResult());
else
    print_r($hslOnnelaServiceGet->getLastError());
// sample call for HslOnnelaServiceGet::getNextDeparturesRTStops()
if($hslOnnelaServiceGet->getNextDeparturesRTStops($_arrayOfstring))
    print_r($hslOnnelaServiceGet->getResult());
else
    print_r($hslOnnelaServiceGet->getLastError());
// sample call for HslOnnelaServiceGet::getPassingTimes()
if($hslOnnelaServiceGet->getPassingTimes($_string))
    print_r($hslOnnelaServiceGet->getResult());
else
    print_r($hslOnnelaServiceGet->getLastError());
// sample call for HslOnnelaServiceGet::getStopInfo()
if($hslOnnelaServiceGet->getStopInfo($_string))
    print_r($hslOnnelaServiceGet->getResult());
else
    print_r($hslOnnelaServiceGet->getLastError());
