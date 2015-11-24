# PHP QR Code 

###PHP QR Code version (1.1.4)

PHP QR Code - Site http://sourceforge.net/projects/phpqrcode/ 

This is PHP implementation of QR Code 2-D barcode generator. It is pure-php
LGPL-licensed implementation based on C libqrencode by Kentaro Fukuchi.

___LICENSING___

___Copyright (C) 2010 by Dominik Dzienia___ 

This library is free software; you can redistribute it and/or modify it under
the terms of the GNU Lesser General Public License as published by the Free
Software Foundation; either version 3 of the License, or any later version.

This library is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU Lesser General Public License (LICENSE file)
for more details.

You should have received a copy of the GNU Lesser General Public License along
with this library; if not, write to the Free Software Foundation, Inc., 51
Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

___== INSTALATION AND USAGE ==___

 * INSTALL file
 * http://sourceforge.net/apps/mediawiki/phpqrcode/index.php?title=Main_Page

___== CONTACT ==___

Fell free to contact me via e-mail (deltalab at poczta dot fm) or using
folowing project pages:

 * http://sourceforge.net/projects/phpqrcode/
 * http://phpqrcode.sourceforge.net/
  
___== ACKNOWLEDGMENTS ==___

Based on C libqrencode library (ver. 3.1.1) 
Copyright (C) 2006-2010 by Kentaro Fukuchi
http://megaui.net/fukuchi/works/qrencode/index.en.html

QR Code is registered trademarks of DENSO WAVE INCORPORATED in JAPAN and other
countries.

Reed-Solomon code encoder is written by Phil Karn, KA9Q.
Copyright (C) 2002, 2003, 2004, 2006 Phil Karn, KA9Q

# Canducci QuickResponse

### QR Code

[![Canducci QuickResponse](http://i666.photobucket.com/albums/vv25/netdragoon/pacote_zpsvgkl4fbt.png)](https://packagist.org/packages/canducci/quickresponse)

## Instalação

### Configurações

___Para aplicações Laravel, configure dessa maneira:___

Adicione em seu `composer.json` essa chave:

```PHP
"canducci/quickresponse": "0.1.*"
```

Agora execute esse comando no seu console:

    $ composer update


Abra o arquivo `config/app.php` e adicione essa linha em suas configurações de `providers`:

```PHP
'providers' => [
    ...    
    Canducci\QRcode\Providers\QuickResponseProvider::class,
    
]
```

Para funcionar o apelido (facade) adicione essa linha em suas configurações de `aliases`:
```PHP
'aliases' => [

    ...
    'QuickResponse' => Canducci\QRcode\Facades\QuickResponse::class
    
]
```
	

