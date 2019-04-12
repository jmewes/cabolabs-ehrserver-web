<?php
session_start();

date_default_timezone_set('America/Montevideo');

function log_to_file($filepath, $text)
{
   if ($file = fopen($filepath, 'w+'))
   {
      fwrite($file, $text);
   }
   fclose($file);
}

function send_mail()
{
   $email_text = '';

   // Useful data from $_SERVER
   $email_text .= 'Client IP: '. $_SERVER['REMOTE_ADDR'] .'<br/>';
   $email_text .= 'Client User Agent: '. $_SERVER['HTTP_USER_AGENT'] .'<br/>';
   //$email_text .= 'Client IP: '. $_SERVER[CONTENT_TYPE] => application/x-www-form-urlencoded .'<br/>';
   $email_text .= 'Referer: '. $_SERVER['HTTP_REFERER'] .'<br/>';
   $email_text .= 'Languages Accepted: '. $_SERVER['HTTP_ACCEPT_LANGUAGE'] .'<br/>';
   $email_text .= '<br/>';
   $email_text .= 'Contact Name: '. $_POST['name'] .'<br/>';
   $email_text .= 'Contact Email: '. $_POST['email'] .'<br/>';
   $email_text .= 'Organization: '. $_POST['organization'] .'<br/>';
   $email_text .= 'Message: '. $_POST['message'];


   $body = "<h2>Contacto desde CloudEHRServer.com</h2>";
   $body .= $email_text;

   $headers = "From: ". $_POST['email'] . " <" . $_POST['email'] . ">\r\n"; //optional headerfields
   $headers .="Return-Path:<" . $_POST['email'] . ">\r\n"; // avoid ending in spam folder http://php.net/manual/en/function.mail.php

   // To send HTML mail, the Content-type header must be set
   $headers .= 'MIME-Version: 1.0'. "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";

   ini_set('sendmail_from', $_POST['email']);

   // TODO: los errores logueados a disco
   // Por si no tengo servidor de email
   try
   {
      // bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )
      if (!mail('info@cabolabs.com', 'Contacto desde CloudEHRServer.com', $body, $headers))
      {
         log_to_file('logs/'.date("YmdHis").'.log', 'No se pudo enviar el correo: '. $email_text);
         return false;
      }
      else
      {
         return true;
      }
   }
   catch (Exception $e)
   {
      // Por problemas t&eacute;cnicos no se pudo enviar notificacion
      log_to_file('logs/'.date("YmdHis").'.log', 'No se pudo enviar el correo: '.$email_text.' ('.$e->getMessage().')');
      return false;
   }
}

/* TODO add check to  avoid spam

// The form should come from the UI and using POST
if ($_SERVER['REQUEST_METHOD'] != 'POST' ||
    !isset($_POST['nonce']) ||
    !isset($_SESSION['form_id']) ||
    $_POST['nonce'] != $_SESSION['form_id'])
{
   header('HTTP/1.1 404 Not Found');
   //http_response_code(404);
   include_once("../404.php");
   exit;
}

*/


// ===========================================================================================
// reCaptcha
// https://github.com/google/recaptcha/blob/master/src/ReCaptcha/RequestMethod/CurlPost.php

class RequestParameters
{
    /**
     * Site secret.
     * @var string
     */
    private $secret;
    /**
     * Form response.
     * @var string
     */
    private $response;
    /**
     * Remote user's IP address.
     * @var string
     */
    private $remoteIp;
    /**
     * Client version.
     * @var string
     */
    private $version;
    /**
     * Initialise parameters.
     *
     * @param string $secret Site secret.
     * @param string $response Value from g-captcha-response form field.
     * @param string $remoteIp User's IP address.
     * @param string $version Version of this client library.
     */
    public function __construct($secret, $response, $remoteIp = null, $version = null)
    {
        $this->secret = $secret;
        $this->response = $response;
        $this->remoteIp = $remoteIp;
        $this->version = $version;
    }
    /**
     * Array representation.
     *
     * @return array Array formatted parameters.
     */
    public function toArray()
    {
        $params = array('secret' => $this->secret, 'response' => $this->response);
        if (!is_null($this->remoteIp)) {
            $params['remoteip'] = $this->remoteIp;
        }
        if (!is_null($this->version)) {
            $params['version'] = $this->version;
        }
        return $params;
    }
    /**
     * Query string representation for HTTP request.
     *
     * @return string Query string formatted parameters.
     */
    public function toQueryString()
    {
        return http_build_query($this->toArray(), '', '&');
    }
}

/**
 * The response returned from the service.
 */
class Response
{
    /**
     * Succes or failure.
     * @var boolean
     */
    private $success = false;
    /**
     * Error code strings.
     * @var array
     */
    private $errorCodes = array();
    /**
     * Build the response from the expected JSON returned by the service.
     *
     * @param string $json
     * @return \ReCaptcha\Response
     */
    public static function fromJson($json)
    {
        $responseData = json_decode($json, true);
        if (!$responseData) {
            return new Response(false, array('invalid-json'));
        }
        if (isset($responseData['success']) && $responseData['success'] == true) {
            return new Response(true);
        }
        if (isset($responseData['error-codes']) && is_array($responseData['error-codes'])) {
            return new Response(false, $responseData['error-codes']);
        }
        return new Response(false);
    }
    /**
     * Constructor.
     *
     * @param boolean $success
     * @param array $errorCodes
     */
    public function __construct($success, array $errorCodes = array())
    {
        $this->success = $success;
        $this->errorCodes = $errorCodes;
    }
    /**
     * Is success?
     *
     * @return boolean
     */
    public function isSuccess()
    {
        return $this->success;
    }
    /**
     * Get error codes.
     *
     * @return array
     */
    public function getErrorCodes()
    {
        return $this->errorCodes;
    }
}


// captcha response no puede ser null
if (empty($_POST['g-recaptcha-response']))
{
   if ($_SESSION['lang'] == "es")
     echo json_encode(array('status' => 'error', 'msg' => "Ha ocurrido un error al verificar el captcha"));
   else
     echo json_encode(array('status' => 'error', 'msg' => "An error has occurred verifying the captcha"));

   exit;
}


$params = new RequestParameters('6Le0-w4UAAAAACYnmQyx6ta0hUmR88JcWQhTGr0F', $_POST['g-recaptcha-response'], $_SERVER[REMOTE_ADDR], 'php_1.1.2');

$SITE_VERIFY_URL = 'https://www.google.com/recaptcha/api/siteverify';
$handle = curl_init($SITE_VERIFY_URL);
$options = array(
   CURLOPT_POST => true,
   CURLOPT_POSTFIELDS => $params->toQueryString(), // RequestParameters $params
   CURLOPT_HTTPHEADER => array(
       'Content-Type: application/x-www-form-urlencoded'
   ),
   CURLINFO_HEADER_OUT => false,
   CURLOPT_HEADER => false,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_SSL_VERIFYPEER => true
);
curl_setopt_array($handle, $options);
$response = curl_exec($handle);
curl_close($handle);
$rawResponse = $response;
$resp = Response::fromJson($rawResponse);


// JSON
header('Content-Type: application/json');

if (!$resp->isSuccess())
{
   $errors = $resp->getErrorCodes();

   if ($_SESSION['lang'] == "es")
     echo json_encode(array('status' => 'error', 'msg' => "Ha ocurrido un error al verificar el captcha, por favor pruebe mas tarde o contáctenos en info@cabolabs.com"));
   else
     echo json_encode(array('status' => 'error', 'msg' => "An error has occurred verifying the captcha, please try again later or contact us at info@cabolabs.com"));

   exit;
}
// ===========================================================================================


// Clear nonce from SESSION after the submit to avoid second submits or page reload
//unset( $_SESSION['form_id'] );

if (!send_mail())
{
   if ($_SESSION['lang'] == "es")
     echo json_encode(array('status' => 'error', 'msg' => "Ha ocurrido un error al enviar el mensaje, por favor pruebe mas tarde o contáctenos en info@cabolabs.com"));
   else
     echo json_encode(array('status' => 'error', 'msg' => "An error sending the message has occurred, please try again later or contact us at info@cabolabs.com"));
}
else
{
   if ($_SESSION['lang'] == "es")
     echo json_encode(array('status' => 'ok', 'msg' => "Hemos recibido tu mensaje, nos pondremos en contacto en breve"));
   else
     echo json_encode(array('status' => 'ok', 'msg' => "We have received your message, we'll contact you back ASAP"));
}
exit;

?>
