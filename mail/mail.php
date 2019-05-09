<?php

 /*----------------------------------------------------------------------------*\
|*  Email settings for sending all emails from your website forms.              *|
 \*============================================================================*/

// Choose here whether to use php mail() function or your SMTP server (recommended) to send the email.
// Use 'smtp' for better reliability, or use 'phpmail' for quick + easy setup with lower reliability.
$emailMethod                = 'smtp'; // REQUIRED value. Options: 'smtp' , 'phpmail'

// Outgoing Server Settings - replace values on the right of the = sign with your own.
// These 3 settings are only required if you choose 'smtp' for emailMethod above.
//$outgoingServerAddress      = 'mail.yourdomain.com'; // Consult your hosting provider.
//$outgoingServerPort         = '25';                  // Options: '587' , '25' - Consult your hosting provider.
//$outgoingServerSecurity     = 'tls';                 // Options: 'ssl' , 'tls' , null - Consult your hosting provider.
$outgoingServerAddress      = 'email-smtp.us-west-2.amazonaws.com'; // Consult your hosting provider.
$outgoingServerPort         = '587';                  // Options: '587' , '25' - Consult your hosting provider.
$outgoingServerSecurity     = 'tls';                 // Options: 'ssl' , 'tls' , null - Consult your hosting provider.

// Sending Account Settings - replace these details with an email account held on the SMTP server entered above.
// These 2 settings are only required if you choose 'smtp' for emailMethod above.
//$sendingAccountUsername     = 'aaaaaaaaaaaa';
//$sendingAccountPassword     = 'aaaaaaaaaaaaaaa';
$sendingAccountUsername     = 'bbbbbbbbbbb';
$sendingAccountPassword     = 'bbbbbbbbbb';


// Recipient (To:) Details  - Change this to the email details of who will receive all the emails from the website.
$recipientEmail             = 'presupuesto@buhos.com.ar'; // REQUIRED value
$recipientName              = 'Buhos S.R.L. Contácto';             // REQUIRED value.

// Email details            - Change these to suit your website needs
$emailSubject               = 'Mensaje enviado desde Web'; // REQUIRED value. Subject of the email that the recipient will see
$websiteName                = 'Página web Buhos S.R.L.';                // REQUIRED value. This is used when a name or email is not collected from the website form

$timeZone					= 'America/Argentina/Buenos_Aires';         // OPTIONAL, but some servers require this to be set. 
                                                             // See a list of all supported timezones at: http://php.net/manual/en/timezones.php
 /*----------------------------------------------------------------------------*\
|*  You do not need to edit anything below this line, the rest is automatic.    *|
 \*============================================================================*/
include('lib/mail_sender.php');

?>
