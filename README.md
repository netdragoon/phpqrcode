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

[![Build Status](https://travis-ci.org/netdragoon/phpqrcode.svg)](https://travis-ci.org/netdragoon/phpqrcode)
[![Latest Stable Version](https://poser.pugx.org/canducci/quickresponse/v/stable)](https://packagist.org/packages/canducci/quickresponse) 
[![Total Downloads](https://poser.pugx.org/canducci/quickresponse/downloads)](https://packagist.org/packages/canducci/quickresponse) 
[![Latest Unstable Version](https://poser.pugx.org/canducci/quickresponse/v/unstable)](https://packagist.org/packages/canducci/quickresponse) 
[![License](https://poser.pugx.org/canducci/quickresponse/license)](https://packagist.org/packages/canducci/quickresponse)

## Instalação

### Configurações

___Para aplicações Laravel, configure dessa maneira:___

Adicione em seu `composer.json` essa chave:

```PHP
"canducci/quickresponse": "0.0.1"
```

Agora execute esse comando no seu console:

    $ composer update

###Laravel

Abra o arquivo `config/app.php` e adicione essa linha em suas configurações de `providers`:

```PHP
'providers' => [
    ...    
    Canducci\QuickResponse\Providers\QuickResponseProvider::class,
    
]
```

Para funcionar o apelido (facade) adicione essa linha em suas configurações de `aliases`:
```PHP
'aliases' => [

    ...
    'QuickResponse' => Canducci\QuickResponse\Facades\QuickResponse::class
    
]
```

###Como utilizar no Laravel

___Para Texto ou Links:___

    $name = "test";
    $msg = new \Canducci\QuickResponse\MessageText($name); 
    //Facade 
    QuickResponse::data($msg)->saveAs('q/text.png');
    //Instância
    $qr = new Canducci\QuickResponse\QuickResponse();
    $qr->data($msg)->saveAs('q/text.png');
    
___Para Telefone___
    
    $msg = new \Canducci\QuickResponse\MessagePhone(55,11,1111111);    
    QuickResponse::data($msg)->saveAs('q/phone.png');
    
___Para SMS___
    
    $msg = new \Canducci\QuickResponse\MessageSMS(55,11,11111111);    
    QuickResponse::data($msg)->saveAs('q/sms.png');    
	

___Para Email Simples___

    $msg = new \Canducci\QuickResponse\MessageSimpleEmail('test@test.com');    
    QuickResponse::data($msg)->saveAs('q/emailsimple.png');
        
___Para Email Completo___
    
    $msg = new \Canducci\QuickResponse\MessageExtendedEmail('test@test.com', 'Test', 'Test Complete');    
    QuickResponse::data($msg)->saveAs('q/email.png');

___Para Skype___

    $msg = new \Canducci\QuickResponse\MessageSkype('test@test.com');    
    QuickResponse::data($msg)->saveAs('q/skype.png');

___Cartão de Visita Simples___

    $people = messagePeople('Test');
    $phone = messagePhone(55,11,11111111);
    $msg = messageBusinessCardSimple($people, $phone);
    QuickResponse::data($msg)->saveAs('q/cardsimple.png');
    
___Cartão de Visita Completo___

    $people = messagePeople('Test');
    $phone = messagePhone(55,11,11111111);
    $phone1 = messagePhone(55,18,32695189);
    $phone2 = messagePhone(55,18,32695189);
    $address = messageAddress('Office', '','Home','Rua, 001','Sao Paulo','SP','04500000','Brasil');
    $msg = messageBusinessCardDetailed($people,$phone,$phone1,$phone2,'sobre1;test1','Home Office','dt@dt.com', $address);
    QuickResponse::data($msg)->saveAs('q/carsdetailed.png');
    
___Cartão de Visita Simples com Foto___

    $people = messagePeople('Test');
    $phone = messagePhone(55,11,11111111);
    $msg = messageBusinessCardPhoto($people, $phone, file_get_contents('40x40.jpg'));
    QuickResponse::data($msg)->saveAs('q/carsphoto.png');

###Helpers

```
$msg = messageText('Test Laravel');
```

- Save
```PHP
qrSaveAs($msg, 't.png');
//ou
quickresponse()->data($msg)->saveAs('1.png');
//ou
QuickResponse::data($msg)->saveAs('1.png');
    
```    
- Render

```PHP    
return qrRender($msg); 
//ou
return quickresponse()->data($msg)->render();
//ou
return QuickResponse::data($msg)->render();
	
```	
___Mais Helpers___

    function messageText($text); 
        return new MessageText
        
    function messagePeople($name);
        return new MessagePeople
        
    function messageAddress($label, $pobox, $ext, $street, $town, $region, $postcode, $country);
        return new MessageAddress
        
    function messageSkype($name);
        return new MessageSkype
         
    function messagePhone($country,$area,$number);
        return new MessagePhone
        
    function messageSMS($country,$area, $number);
        return new MessageSMS
        
    function messageSimpleEmail($email);
        return new MessageSimpleEmail
        
    function messageExtendedEmail($email, $subject, $body);
        return new MessageExtendedEmail
        
    function messageBusinessCardSimple(IMessagePeople $people, IMessagePhone $phone);
        return new MessageBusinessCardSimple
        
    function messageBusinessCardDetailed(IMessagePeople $people, IMessagePhone $phone, $sortName, $orgName, 
                        $phoneprivate, $phonecelular, $address, $email);
        return new MessageBusinessCardDetailed
        
    function messageBusinessCardPhoto(IMessagePeople $people, IMessagePhone $phone, $photo);
        return new MessageBusinessCardPhoto
    
###Direto no navegador:

___Rota___

    get('print', function()
    {
        $msg = messageText('https://packagist.org/packages/canducci/quickresponse');
        //Facade
        return QuickResponse::data($msg)
                ->render();
    });
    
___View___

    <div>
        <img src="/print" border="0" />
    </div>

___

####Observação: ___Esse pacote funciona perfeitamente fora do framework Laravel___

Crie um composer.json com formato logo abaixo:

```JSON
{    
    "require": {     
        "canducci/quickresponse":"0.0.1"   
    }
}

```

Rode o comando `$ composer update`, e após a instalação use assim:

```PHP
<?php

    require 'vendor/autoload.php';
        
    //Instância
    $msg = new Canducci\QuickResponse\MessageText('Test');
    
    //Instância
    $qr = new Canducci\QuickResponse\QuickResponse();
    
    echo $qr->data($msg)->render(); // saída imagem
    
    //OU
    
    $qr->data($msg)->saveAs('path_da_pasta_nome_imagem'); // Exemplo: q/1.png

```