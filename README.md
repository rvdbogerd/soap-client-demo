# Toezicht S2S client library

This project was forked and altered from the original [goetas-webservices/soap-client-demo](https://github.com/goetas-webservices/soap-client-demo) project.

It is meant to be a standalone library with convenience classes and services to work with the Rechtspraak Toezicht S2S Soap Services.

## Installation

1. run `composer install`

## Generating a new Service

Steps to import a new WSDL and generate the corresponding metadata files and classes
 
1. Download the wsdl file and place it in `config/wsdl/newservice.v2.xml`
2. run `vendor/bin/soap-client -vvv generate config/config.yml src/Container --dest-class=Container/SoapContainer`
 to generate all the required files. NOTE: You WILL get errors when executing this script. They are quite easy to solve, 
 just have a look at section [Troubleshooting](#troubleshooting)
3. enjoy SOAP again
4. bonus: notice the code and type hinting by PhpStorm on `$client` and `$result` variable, this is possible because of 
 the generated class stubs in  
5. There is an example script in `bin/example.php`, which shows you how to use the generated client code (for retrieving 
 a Codelijst from the MetadataService).
6. For more info about usage of the client, see [goetas-webservices/soap-client](https://github.com/goetas-webservices/soap-client)


## Troubleshooting

```php
Can't find type named {http://rechtspraak.nl/Model/Algemeen/v1}#ModelVersies, 
at line 507 in config/wsdl/zaak.v1.xml
```

You can try to debug this problem, but it is easier to workaround it. It has something to do with the Rechtspraak service 
not explicitly importing the namespaces which are declared earlier in the WSDL file, and the library not understanding it.

Can be fixed by adding import statements for every missing type, within the parent schema. For example, see this snippet:

```xml
<?xml version="1.0" encoding="utf-8"?>
<wsdl:definitions name="MetadataService" targetNamespace="http://rechtspraak.nl/MetadataService/v1"
                  xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/"
                  xmlns:tns="http://rechtspraak.nl/MetadataService/v1"
                  xmlns:xs="http://www.w3.org/2001/XMLSchema"
                  xmlns:q1="http://rechtspraak.nl/Service/DataTypes"
>
    <wsdl:types>
        <xs:schema elementFormDefault="qualified" attributeFormDefault="qualified" targetNamespace="http://rechtspraak.nl/Service/DataTypes"
                   xmlns:q1="http://rechtspraak.nl/Service/DataTypes">
            <xs:complexType name="CodelijstWaarde">
                <xs:sequence>
                    <xs:element name="Titel" type="xs:string"/>
                    <xs:element name="Waarde" type="xs:string"/>
                </xs:sequence>
            </xs:complexType>
            <xs:element name="CodelijstWaarde" type="q1:CodelijstWaarde"/>
        </xs:schema>
        <xs:schema elementFormDefault="qualified" attributeFormDefault="qualified" targetNamespace="http://rechtspraak.nl/Service/DataTypes"
                   xmlns:q1="http://rechtspraak.nl/Service/DataTypes">
            <!--<xs:import namespace="http://rechtspraak.nl/Service/DataTypes"/>  - This line is needed -->
            <xs:simpleType name="String50">
                <xs:restriction base="xs:string">
                    <xs:minLength value="1"/>
                    <xs:maxLength value="50"/>
                </xs:restriction>
            </xs:simpleType>
            <xs:element name="String50" type="q1:String50" xmlns:q1="http://rechtspraak.nl/Service/DataTypes"/>
        </xs:schema>
        <xs:schema elementFormDefault="qualified" attributeFormDefault="qualified" targetNamespace="http://rechtspraak.nl/Service/Metadata" xmlns:tns="http://rechtspraak.nl/Service/Metadata"
                   xmlns:q1="http://rechtspraak.nl/Service/DataTypes">
            <!--<xs:import namespace="http://rechtspraak.nl/Service/DataTypes"/> - And this one too -->
            <xs:complexType name="CodelijstWaarden">
                <xs:sequence>
                    <xs:element minOccurs="0" maxOccurs="unbounded" name="CodelijstWaarde" nillable="true" type="q1:CodelijstWaarde"  />
                </xs:sequence>
            </xs:complexType>
            <xs:element name="CodelijstWaarden" type="tns:CodelijstWaarden"/>
        </xs:schema>
    </wsdl:types>
</wsdl:definitions>
```

So just keep adding import statements, until errors like this one disappear. Then you will probably bump into the following 
error:

```php
In PhpConverter.php line 212:

  [Exception]
  Can't find a PHP namespace to 'http://rechtspraak.nl/MijnRechtspraak/Toezicht/Model/Zaken/v1' namespace

```

This is a normal error and means that you did not define a namespace mapping yet in your config. For every error you get, 
just add the namespace mapping to the `namespaces` section of config/config.yml.

Then, finally you will probably bump into this error:

```php
In Psr4PathGenerator.php line 26:

  [GoetasWebservices\Xsd\XsdToPhp\PathGenerator\PathGeneratorException]
  Unable to determine location to save PHP class 'ToezichtS2S\MijnRechtspraak\Toezicht\Model\Zaken\v1\SoortGrondBewind'

```

Easy peasy, just add the new Namespace to the class mapping under `destinations_php`.

Then, finally, the last error you will probably get:

```php
In Psr4PathGenerator.php line 25:

  [GoetasWebservices\Xsd\XsdToPhp\PathGenerator\PathGeneratorException]
  Unable to determine location to save JMS metadata for class 'ToezichtS2S\MijnRechtspraak\Toezicht\Model\Zaken\v1\Bewind'
```

You'll probably have the hang of it now, but for sake of completeness, just add the namespace to the metadata mapping, 
under `destinations_jms`.

Just another error I saw while running the script:

```php
In PhpConverter.php line 159:

  [Exception]
  Can't find a PHP namespace to '' namespace
```

It seems that the wsdl is trying to declare the "date" property on the global namespace and the converter can't figure 
out where to put it. I just commented the problematic xml declaration, as the library will pick up native types 
automatically. I have seen no problems with it, yet :)

```xml
<!--<xs:schema elementFormDefault="qualified" xmlns:xs="http://www.w3.org/2001/XMLSchema">-->
    <!--<xs:element name="date" type="xs:date"/>-->
<!--</xs:schema>-->
```


## Dependencies 

Here an explanation of dependencies present in `composer.json`

- `php` this demo is tested on ^7.2 php versions
- `symfony/var-dumper` is optional and is used in this demo ony to color the output on the console
- `goetas-webservices/soap-client` this is the main SOAP client dependency
- `php-http/guzzle6-adapter` your HTTP client implementation, any [php-http client](http://docs.php-http.org/en/latest/clients.html) 
 implementation works fine(I have opted for [guzzle6](https://github.com/guzzle/guzzle), at the moment guzzle, curl, buzz and react clients are supported).
- `php-http/message` PSR-7 http message factories, more info are available on [docs.php-http.org](http://docs.php-http.org/en/latest/httplug/users.html)
- `guzzlehttp/psr7`, my PSR-7 message implementation choice for `php-http/message` 
- `goetas-webservices/wsdl2php` (require-dev) this is the main dev dependency, has to be used during development 
 the generate all the necessary information (php classes, jms mappings, wsdl metadata) used in production
