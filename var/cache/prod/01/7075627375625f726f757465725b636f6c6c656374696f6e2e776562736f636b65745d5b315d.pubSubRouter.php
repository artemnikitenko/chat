<?php return array (
  'lifetime' => 0,
  'data' => 
  Gos\Bundle\PubSubRouterBundle\Router\RouteCollection::__set_state(array(
     'routes' => 
    array (
      'acme_topic' => 
      Gos\Bundle\PubSubRouterBundle\Router\Route::__set_state(array(
         'pattern' => 'acme/channel',
         'callback' => 'acme.topic',
         'args' => 
        array (
        ),
         'requirements' => 
        array (
        ),
         'name' => NULL,
      )),
      'acme_rpc' => 
      Gos\Bundle\PubSubRouterBundle\Router\Route::__set_state(array(
         'pattern' => 'sample/{method}',
         'callback' => 'acme.rpc',
         'args' => 
        array (
        ),
         'requirements' => 
        array (
          'method' => 
          array (
            'pattern' => '[a-z_]+',
          ),
        ),
         'name' => NULL,
      )),
    ),
  )),
);