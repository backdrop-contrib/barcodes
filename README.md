# README

## Install
Install module xautoload
Install dependencies with composer from the module root.
> composer require tecnickcom/tc-lib-barcode:^1.9

This library includes utility PHP classes to generate linear and bidimensional barcodes:

    C39 : CODE 39 - ANSI MH10.8M-1983 - USD-3 - 3 of 9
    C39+ : CODE 39 with checksum
    C39E : CODE 39 EXTENDED
    C39E+ : CODE 39 EXTENDED + CHECKSUM
    C93 : CODE 93 - USS-93
    S25 : Standard 2 of 5
    S25+ : Standard 2 of 5 + CHECKSUM
    I25 : Interleaved 2 of 5
    I25+ : Interleaved 2 of 5 + CHECKSUM
    C128 : CODE 128
    C128A : CODE 128 A
    C128B : CODE 128 B
    C128C : CODE 128 C
    EAN2 : 2-Digits UPC-Based Extension
    EAN5 : 5-Digits UPC-Based Extension
    EAN8 : EAN 8
    EAN13 : EAN 13
    UPCA : UPC-A
    UPCE : UPC-E
    MSI : MSI (Variation of Plessey code)
    MSI+ : MSI + CHECKSUM (modulo 11)
    POSTNET : POSTNET
    PLANET : PLANET
    RMS4CC : RMS4CC (Royal Mail 4-state Customer Code) - CBC (Customer Bar Code)
    KIX : KIX (Klant index - Customer index)
    IMB : IMB - Intelligent Mail Barcode - Onecode - USPS-B-3200
    IMBPRE : IMB - Intelligent Mail Barcode - Onecode - USPS-B-3200- pre-processed
    CODABAR : CODABAR
    CODE11 : CODE 11
    PHARMA : PHARMACODE
    PHARMA2T : PHARMACODE TWO-TRACKS
    DATAMATRIX : DATAMATRIX (ISO/IEC 16022)
    PDF417 : PDF417 (ISO/IEC 15438:2006)
    QRCODE : QR-CODE
    RAW : 2D RAW MODE comma-separated rows
    RAW2 : 2D RAW MODE rows enclosed in square parentheses

Output Formats

    PNG Image
    SVG Image
    HTML DIV
    Unicode String
    Binary String

example of use:
$variables = array(
  'type' => 'QRCODE',
  'value' => '1234567890123456',
  'width' => -4,
  'height' => -4,
  'color' => 'black',
  'background_color' => 'white'
);
theme('barcode__c128', $variables)

## Warning

Please keep in mind that not any type of Barcode can contain any type of content.
Some Barcode types can contain numbers only, some even need a fixed count of characters.
Others are more versatile, but we do not check for validity.
