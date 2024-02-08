# Barcodes
The Barcodes module provides a field formatter to display various field types
as rendered Barcodes with configurable style options for each field.

## Installation
- Install this module using the official Backdrop CMS instructions at
  https://docs.backdropcms.org/documentation/extend-with-modules.

## Differences from Drupal 7 
- The requirement to install via composer has been removed

## Documentation 
- Add a field of one of the types of email, integer, link, string, telephone, text, text_long or text_with_summary
- Choose Barcode as formatter
- Adjust the settings like type, color and dimensions to your liking

### Available Barcodes
- C39        : CODE 39 - ANSI MH10.8M-1983 - USD-3 - 3 of 9
- C39+       : CODE 39 with checksum
- C39E       : CODE 39 EXTENDED
- C39E+      : CODE 39 EXTENDED + CHECKSUM
- C93        : CODE 93 - USS-93
- S25        : Standard 2 of 5
- S25+       : Standard 2 of 5 + CHECKSUM
- I25        : Interleaved 2 of 5
- I25+       : Interleaved 2 of 5 + CHECKSUM
- C128       : CODE 128
- C128A      : CODE 128 A
- C128B      : CODE 128 B
- C128C      : CODE 128 C
- EAN2       : 2-Digits UPC-Based Extension
- EAN5       : 5-Digits UPC-Based Extension
- EAN8       : EAN 8
- EAN13      : EAN 13
- UPCA       : UPC-A
- UPCE       : UPC-E
- MSI        : MSI (Variation of Plessey code)
- MSI+       : MSI + CHECKSUM (modulo 11)
- POSTNET    : POSTNET
- PLANET     : PLANET
- RMS4CC     : RMS4CC (Royal Mail 4-state Customer Code) - CBC (Customer Bar Code)
- KIX        : KIX (Klant index - Customer index)
- IMB        : IMB - Intelligent Mail Barcode - Onecode - USPS-B-3200
- IMBPRE     : IMB - Intelligent Mail Barcode - Onecode - USPS-B-3200- pre-processed
- CODABAR    : CODABAR
- CODE11     : CODE 11
- PHARMA     : PHARMACODE
- PHARMA2T   : PHARMACODE TWO-TRACKS
- DATAMATRIX : DATAMATRIX (ISO/IEC 16022)
- PDF417     : PDF417 (ISO/IEC 15438:2006)
- QRCODE     : QR-CODE
- RAW        : 2D RAW MODE comma-separated rows
- RAW2       : 2D RAW MODE rows enclosed in square parentheses

Additional documentation is located in [the Wiki](https://github.com/backdrop-contrib/barcodes/wiki).

## Issues
Bugs and feature requests should be reported in [the Issue Queue](https://github.com/backdrop-contrib/barcodes/issues).

## Current Maintainers
- [Martin Price](https://github.com/yorkshire-pudding) - [System Horizons Ltd](https://www.systemhorizons.co.uk)
- Collaboration and co-maintainers welcome!

## Credits
- Ported to Backdrop CMS by [Martin Price](https://github.com/yorkshire-pudding) - [System Horizons Ltd](https://www.systemhorizons.co.uk).
- Originally written for Drupal by [Stefan Auditor](https://www.drupal.org/u/sanduhrs).
- This project includes the [tc-lib-barcode](https://github.com/tecnickcom/tc-lib-barcode) and [tc-lib-color](https://github.com/tecnickcom/tc-lib-color) libraries written by [Nicola Asuni](https://github.com/nicolaasuni) - [Tecnick.com Ltd](https://github.com/tecnickcom).

## License
This project is GPL v3 software.  This is because it includes libraries that
are both GPL v3.  
See the LICENSE.txt file in this directory for complete text.
