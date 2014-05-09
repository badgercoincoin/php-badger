# php-badger

A basic PHP library to talk to a badgercoind daemon to get you started in your badgercoin project.

I plan to expand upon the end points of the API.  Right now accounts and movement of coins is working.

*Notes:* You can follow along (and suggest... please do) which API endpoints I work on next.  Head to the [issues area](https://github.com/wpstudio/php-badger/issues) to contribute or to see what upcoming endpoints will be added to this api.


## Requirements

Requires **badgercoind** to already be installed and running on your local server or reachable by your server.  

Get badgercoin source from: https://github.com/badgercoincoin/badgercoin


## Usage:

Example use, see examples.php for more

```
require "./Badger.php";

$config = array(
    'user' => 'badgercoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '22555' );

// create client conncetion
$badger = new Badger( $config );

// create a new address
$address = $badger->get_address( 'name' );
print( $address );

// check balance 
print( "name: " . $badger->get_balance( 'name' ) );

// send money externally (withdrawl?)
$badger->send( 'name', 'BQa5nJ9qt72K4QK9jvwMfKo4BLwvRGCPvZ', 100 );

```


## About

Library originally created by Marcus Kazmierczak, http://mkaz.com/, for Dogecoin

Library adapted for BadgerCoin


