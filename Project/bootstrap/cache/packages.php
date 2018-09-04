<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'jrm2k6/cloudder' => 
  array (
    'providers' => 
    array (
      0 => 'JD\\Cloudder\\CloudderServiceProvider',
    ),
    'aliases' => 
    array (
      'Cloudder' => 'JD\\Cloudder\\Facades\\Cloudder',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
);