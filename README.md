Webox API Library
=================
PHP Wrapper for Webox API

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist peatrevo/weboxapi "*"
```

or add

```
"peatrevo/weboxapi": "*"
```

to the require section of your `composer.json` file.


Next, require Composer's autoloader, in your application, to automatically
load the Webox SDK in your project:
```PHP
require 'vendor/autoload.php';
use Weboxphp\Weboxphp;
```

Usage
-----
Here's how to create a parcel using the SDK:

```php
# First, instantiate the SDK with your API token and define your email address.
$wbx = new Weboxphp("token-example");
$email = "hello@example.com";

# Now, compose and create your parcel.
$wbx->createParcel($email, array('size'    				=> 'A',
                                 'target_machine_id'  	=> 'HUWBX001',
                                 'receiver_phone' 		=> '301234567',
								 'receiver_email' 		=> 'bob@example.com',
								 'customer_reference' 	=> 'custom reference number of parcel',
                                 'cod_amount'    		=> '0'));
```

Response
--------

Example Contents:
**$httpResponseCode** will contain an integer.

**$httpResponseBody** will contain an object of the API response. In the above
example, a var_dump($result) would contain the following:

```
object(stdClass)#46 (15) {
  ["_links"]=>
  object(stdClass)#51 (5) {
    ["self"]=>
    object(stdClass)#50 (1) {
      ["href"]=>
      string(25) "/v4/parcels/1000000003123"
    }
    ["target_machine"]=>
    object(stdClass)#48 (1) {
      ["href"]=>
      string(21) "/v4/machines/HUWBX001"
    }
    ["receiver"]=>
    object(stdClass)#71 (1) {
      ["href"]=>
      string(39) "/v4/customers/bob%2540example.com"
    }
    ["sender"]=>
    object(stdClass)#72 (1) {
      ["href"]=>
      string(38) "/v4/customers/hello%2540example.com"
    }
    ["sticker"]=>
    object(stdClass)#73 (1) {
      ["href"]=>
      string(33) "/v4/parcels/1000000003123/sticker"
    }
  }
  ["id"]=>
  string(13) "1000000003123"
  ["created_at"]=>
  string(29) "2014-08-26T13:06:37.035+02:00"
  ["status"]=>
  string(7) "created"
  ["calculated_amount"]=>
  string(3) "1.0"
  ["charged_amount"]=>
  string(3) "0.0"
  ["dropoff_code"]=>
  string(1) "0"
  ["receiver_email"]=>
  string(21) "bob@example.com"
  ["size"]=>
  string(1) "A"
  ["target_machine_id"]=>
  string(8) "HUWBX001"
  ["receiver_phone"]=>
  string(9) "301234567"
  ["sender_email"]=>
  string(20) "hello@example.com"
  ["sender_phone"]=>
  string(9) "301234567"
  ["customer_reference"]=>
  string(21) "custom reference number of parcel"
  ["cod_amount"]=>
  string(3) "0.0"
}
```