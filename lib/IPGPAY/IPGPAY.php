<?php
/**
 * @copyright Copyright (c) 2002 - 2017 IPG Group Limited (a company incorporated in the SAR of Hong Kong).
 * All rights reserved. Use is strictly subject to licence terms & conditions.
 * This computer software programme is protected by copyright law and international treaties.
 * Unauthorised reproduction, reverse engineering or distribution of the programme, or any part of it, may
 * result in severe civil and criminal penalties and will be prosecuted to the maximum extent permissible at law.
 * for further information, please contact the copyright owner by email copyright@ipggroup.com
 */
$dir = dirname(__FILE__);
require($dir . '/Config.php');
require($dir . '/Functions.php');
require($dir . '/Request/Abstract.php');
require($dir . '/Request/Settle.php');
require($dir . '/Request/Void.php');
require($dir . '/Request/Credit.php');
require($dir . '/Response/Abstract.php');
require($dir . '/Response/Success.php');
require($dir . '/Response/Declined.php');
require($dir . '/Response/Error.php');
require($dir . '/Exceptions/InvalidRequestException.php');
require($dir . '/Exceptions/InvalidResponseException.php');
require($dir . '/Exceptions/CommunicationException.php');