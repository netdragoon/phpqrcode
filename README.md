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
"canducci/quickresponse": "dev-master"
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
    $msg = new \Canducci\QuickResponse\MessageText();
    $msg->setText($name);
    QuickResponse::data($msg)->saveAs('q/text.png');
    
___Para Telefone___
    
    $msg = new \Canducci\QuickResponse\MessagePhone();
    $msg->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
    QuickResponse::data($msg)->saveAs('q/phone.png');
    
___Para SMS___
    
    $msg = new \Canducci\QuickResponse\MessageSMS();
    $msg->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
    QuickResponse::data($msg)->saveAs('q/sms.png');    
	

___Para Email Simples___

    $msg = new \Canducci\QuickResponse\MessageSimpleEmail();
    $msg->setEmail('test@test.com');
    QuickResponse::data($msg)->saveAs('q/emailsimple.png');
        
___Para Email Completo___
    
    $msg = new \Canducci\QuickResponse\MessageExtendedEmail();
    $msg->setEmail('test@test.com')
        ->setSubject('Test')
        ->setBody('Test Complete');
    QuickResponse::data($msg)->saveAs('q/email.png');

___Para Skype___

    $msg = new \Canducci\QuickResponse\MessageSkype();
    $msg->setName('test@test.com');
    QuickResponse::data($msg)->saveAs('q/skype.png');

___Cartão de Visita Simples___

    $msg = new \Canducci\QuickResponse\MessageBusinessCardSimple();
    
    $people = new \Canducci\QuickResponse\MessagePeople();
    $people->setName('Nome');
    
    $phone = new \Canducci\QuickResponse\MessagePhone();
    $phone->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
        
    $msg->setPeople($people);
    $msg->setPhone($phone);
    
    QuickResponse::data($msg)->saveAs('q/cardsimple.png');
    
___Cartão de Visita Completo___

    $msg = new \Canducci\QuickResponse\MessageBusinessCardDetailed();
    $people = new \Canducci\QuickResponse\MessagePeople();
    $people->setName('Test');
    
    $phone1 = new \Canducci\QuickResponse\MessagePhone();
    $phone1->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
        
    $phone2 = new \Canducci\QuickResponse\MessagePhone();
    $phone2->setCountry(55)
        ->setArea(12)
        ->setNumber(12121212);
        
    $phone3 = new \Canducci\QuickResponse\MessagePhone();
    $phone3->setCountry(55)
        ->setArea(13)
        ->setNumber(13131313);
        
    $msg->setPeople($people);
    $msg->setPhone($phone1);
    $msg->setPhonePrivate($phone2);
    $msg->setPhoneCelular($phone3);
    
    $msg->setEmail('test@test.com');
    $msg->setOrganizationName('Home Office');
    $msg->setSortName('test1;test2');
    $address = new \Canducci\QuickResponse\MessageAddress();
    $address->setCountry('Brasil')
            ->setExt('Home')
            ->setLabel('Office')
            ->setPobox('')
            ->setTown('Sao Paulo')
            ->setPostCode('04500000')
            ->setRegion('SP')
            ->setStreet('Rua Test, 001');
            
    $msg->setMessageAddress($address);
    
    QuickResponse::data($msg)->saveAs('q/carsdetailed.png');
    
___Cartão de Visita Simples com Foto___

    $msg = new \Canducci\QuickResponse\MessageBusinessCardPhoto();
    $people = new \Canducci\QuickResponse\MessagePeople();
    $people->setName('Test');
    $phone = new \Canducci\QuickResponse\MessagePhone();
    $phone->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
    $msg->setPeople($people);
    $msg->setPhone($phone);
    //Foto proposta de 40x40 de baixa resolução 
    $msg->setPhoto(file_get_contents('40x40.jpg'));
    QuickResponse::data($msg)->saveAs('q/carsphoto.png');

###Helpers

```
$msg = new \Canducci\QuickResponse\MessageText();
$msg->setText("Test Laravel");
```

- Save
```PHP
qrSaveAs($msg, 't.png');
//ou
return quickresponse()->data($msg)->saveAs('1.png');
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
	
###Direto no navegador:

___Rota___

    get('print', function()
    {
        $msg = new \Canducci\QuickResponse\MessageText();
        $msg->setText('https://packagist.org/packages/canducci/quickresponse');
    
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
        "canducci/quickresponse":"dev-master"   
    }
}

```

Rode o comando `$ composer update`, e após a instalação use assim:

```PHP
<?php

    require 'vendor/autoload.php';    
    
    $qr      = new Canducci\QuickResponse\QuickResponse();
    
    $msg = new Canducci\QuickResponse\MessageText();
    $msg->setText("Test");
    echo $qr->data($msg)->render();
    
    //OU
    
    //echo $qr->data($msg)->saveAs('path_da_pasta_nome_imagem'); 
    // Exemplo: q/1.png

```