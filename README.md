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

###Como utilizar no Laravel

___Para Texto ou Links:___

    $name = "test";
    $msg = new \Canducci\QRcode\MessageText();
    $msg->setText($name);
    QuickResponse::data($msg)->saveAs('q/text.png');
    
___Para Telefone___
    
    $msg = new \Canducci\QRcode\MessagePhone();
    $msg->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
    QuickResponse::data($msg)->saveAs('q/phone.png');
    
___Para SMS___
    
    $msg = new \Canducci\QRcode\MessageSMS();
    $msg->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
    QuickResponse::data($msg)->saveAs('q/sms.png');    
	

___Para Email Simples___

    $msg = new \Canducci\QRcode\MessageSimpleEmail();
    $msg->setEmail('test@test.com');
    QuickResponse::data($msg)->saveAs('q/emailsimple.png');
        
___Para Email Completo___
    
    $msg = new \Canducci\QRcode\MessageExtendedEmail();
    $msg->setEmail('test@test.com')
        ->setSubject('Test')
        ->setBody('Test Complete');
    QuickResponse::data($msg)->saveAs('q/email.png');

___Para Skype___

    $msg = new \Canducci\QRcode\MessageSkype();
    $msg->setName('test@test.com');
    QuickResponse::data($msg)->saveAs('q/skype.png');

___Cartão de Visita Simples___

    $msg = new \Canducci\QRcode\MessageBusinessCardSimple();
    
    $people = new \Canducci\QRcode\MessagePeople();
    $people->setName('Nome');
    
    $phone = new \Canducci\QRcode\MessagePhone();
    $phone->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
        
    $msg->setPeople($people);
    $msg->setPhone($phone);
    
    QuickResponse::data($msg)->saveAs('q/cardsimple.png');
    
___Cartão de Visita Completo___

    $msg = new \Canducci\QRcode\MessageBusinessCardDetailed();
    $people = new \Canducci\QRcode\MessagePeople();
    $people->setName('Test');
    
    $phone1 = new \Canducci\QRcode\MessagePhone();
    $phone1->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
        
    $phone2 = new \Canducci\QRcode\MessagePhone();
    $phone2->setCountry(55)
        ->setArea(12)
        ->setNumber(12121212);
        
    $phone3 = new \Canducci\QRcode\MessagePhone();
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
    $address = new \Canducci\QRcode\MessageAddress();
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

    $msg = new \Canducci\QRcode\MessageBusinessCardPhoto();
    $people = new \Canducci\QRcode\MessagePeople();
    $people->setName('Test');
    $phone = new \Canducci\QRcode\MessagePhone();
    $phone->setCountry(55)
        ->setArea(11)
        ->setNumber(11111111);
    $msg->setPeople($people);
    $msg->setPhone($phone);
    //Foto proposta de 40x40 de baixa resolução 
    $msg->setPhoto(file_get_contents('40x40.jpg'));
    QuickResponse::data($msg)->saveAs('q/carsphoto.png');
    
###Direto no navegador:

___Crie um rota___

    get('print', function()
    {
        $msg = new \Canducci\QRcode\MessageText();
        $msg->setText('https://packagist.org/packages/canducci/quickresponse');
    
        return QuickResponse::data($msg)
                ->render();
    });
    
___Em dua View___

    <div>
        <img src="/print" border="0" />
    </div>