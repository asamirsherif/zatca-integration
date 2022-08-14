# Laravel ZATCA Integration

## Introduction 

### Laravel package to Integrate with ZATCA API servers and Generate the QR code signed and Validated for ZATCA E-invoicing 

### **Currently In progress (only phase one done!)**

## Installation

To get the latest version of zatca-integration on your project, you can require it from "composer":

```
$ composer require asamirsherif/zatca-integration
```

### Laravel

Register the provider directly in your app configuration file config/app.php `config/app.php`:

Laravel >= 5.5 provides package auto-discovery, you won't need to add it manaully

providers and facades will be add as

```
'providers' => [
    Asamirsherif\Zatca\ZatcaServiceProvider::class,
]
```

```
'aliases' => [
  'Zatca' => Asamirsherif\Zatca\Facades\Zatca::class,
]

```

## Usage

### Generate Base64

```
`use Asamirsherif\Zatca\Facades\Zatca;$base64 = Zatca::sellerName('Seller Name/اسم البائع')
            ->vatRegistrationNumber("123456789123456")
            ->timestamp("2022-07-04T13:00:09Z")
            ->totalWithVat('100.00')
            ->vatTotal('15.00')
            ->toBase64();
```

### Render QR of TLV base64 encrypted

```
$qrCode = zatca()
            ->sellerName('اسم البائع/Seller Name')
            ->vatRegistrationNumber("123456789123456")
            ->timestamp("2022-07-01T14:00:09Z")
            ->totalWithVat('100.00')
            ->vatTotal('15.00')
            ->toQrCode(
              qrCodeOptions()
                ->format("svg")
                ->color(255,0,0,1)
                ->size(300)
            );
```
