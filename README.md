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
$wbx->createParcel($email, array('size'    		=> 'A',
                                 'target_machine_id'  	=> 'HUWBX001',
                                 'receiver_phone' 	=> '301234567',
				 'receiver_email' 	=> 'bob@example.com',
				 'customer_reference' 	=> 'custom reference number of parcel',
                                 'cod_amount'    	=> '1200'));
```

