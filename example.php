<?php

## Simple command-line script to show examples

require "./Badger.php";

$config = array(
    'user' => 'badgercoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '23389' );

// create client connection
$badger = new Badger( $config );


// create a new address
$address = $badger->get_address( 'name' );
print( "Address: $address \n" );

// list accounts in wallet
print_r( $badger->list_accounts() );

// get balance in wallet
print( "name: " . $badger->get_balance( 'name' ) );

// move money from accounts in wallet
// moves from 'name2' to account 'name'
$badger->move( 'name2', 'name', 10000 );

// send money externally (withdrawl?)
// send from account to external address
$badger->send( 'name', 'BQa5nJ9qt72K4QK9jvwMfKo4BLwvRGCPvZ', 100 );


