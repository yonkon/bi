<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => '',
    'readme' => 'modxSite
=====================================================

This MODX Extra automatically installing most popular MODX-packages on your MODX-site
',
    'changelog' => 'modxSite-1.3.1
=============================================================
1. Changed check captcha order 
2. Force Smarty compiling on non-cached templates (in controller)
3. Minor bugfix


modxSite-1.3.0
=============================================================
1. Queries new order
2. SQL errors loging


modxSite-1.2.3
=============================================================
1. prepareResponse bugfix


modxSite-1.2.2
=============================================================
1. Code refactoring
2. Added default connector


modxSite-1.2.1
=============================================================
1.  Custom MODX core directory and tables prefix supporting


modxSite-1.2.0
=============================================================
1.  Added form processor


modxSite-1.1.1
=============================================================
1.  Added auto-installing packages:
        - Console
        - Ace


modxSite-1.1.0
=============================================================
1.  Added method modxsite::loadProcessor()
2.  Create mediaSources:
        - Controllers
        - Smarty templates
        - Public templates
        - Images
        - Files
3.  Install packages:
        - phpTemplates
        - modxSmarty
4.  Added getlist/getdata processors from shopModx
5.  Added plugin Debug
6.  Added plugin memory_get_usage
7.  Added modxclub.ru transport provider
        

modxSite-1.0.0-rc
=============================================================
1.  Removed operator GOTO in package resolver for support php lower than 5.3
2.  Minor bugfix in package resolver


modxSite-0.0.2-beta
=============================================================
1.  Added MediaSource Controllers for site controllers (modTemplate`s)
2.  Added MediaSource Templates for site templates (site skins)
3.  Added system setting modxSite.template_url


modxSite-0.0.1-beta
=============================================================
1.  Created core
2.  Created packages installation resolver',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '98fea6382c4de65742487ff32b558310',
      'native_key' => 'modxsite',
      'filename' => 'modNamespace/57813e0e77e1034152b26780834e3b3f.vehicle',
      'namespace' => 'modxsite',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '406ac1b18ab82269fb2f53052273bf33',
      'native_key' => 'modxSite.template_url',
      'filename' => 'modSystemSetting/0982539e6938790ae4ece68ca2af14b4.vehicle',
      'namespace' => 'modxsite',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMediaSource',
      'guid' => '70afed4365e229fb490afab704638069',
      'native_key' => 0,
      'filename' => 'modMediaSource/7b71841a617942922fa73268f84f6ab8.vehicle',
      'namespace' => 'modxsite',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMediaSource',
      'guid' => '932f431fb3754e9148c3716bd399f4c7',
      'native_key' => 0,
      'filename' => 'modMediaSource/765e3468af7652ee52a45249830aa86d.vehicle',
      'namespace' => 'modxsite',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMediaSource',
      'guid' => 'e9d7fc7ada54f6c1ca2c11f4f79c409f',
      'native_key' => 0,
      'filename' => 'modMediaSource/e5dab6a7a3eddcb0d2f608e4da621b80.vehicle',
      'namespace' => 'modxsite',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMediaSource',
      'guid' => '9952c9a1117653d4d1b5d70b8578e97f',
      'native_key' => 0,
      'filename' => 'modMediaSource/9b9b05a7ed12f7eb649ea1e4e72ce9ac.vehicle',
      'namespace' => 'modxsite',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMediaSource',
      'guid' => '2bcafe00255b788237793bfee4146477',
      'native_key' => 0,
      'filename' => 'modMediaSource/dd4f9400728370368e34a54d1ad90042.vehicle',
      'namespace' => 'modxsite',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modTransportProvider',
      'guid' => 'd564acd360db9fee9992dabfc02ce963',
      'native_key' => 0,
      'filename' => 'modTransportProvider/e1634187fd4a0a453ea4e05a26d58952.vehicle',
      'namespace' => 'modxsite',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'ad853cc5a2eb1ca502f77760ac1347ff',
      'native_key' => 1,
      'filename' => 'modCategory/29d6c2ed06ab55a53a9a4e2da73079c7.vehicle',
      'namespace' => 'modxsite',
    ),
  ),
);