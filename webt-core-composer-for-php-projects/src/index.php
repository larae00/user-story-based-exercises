<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haustier-Notfall QR-Code Generator</title>
</head>

<body>
    <?php
    require '../vendor/autoload.php';

    use Endroid\QrCode\Builder\Builder;
    use Endroid\QrCode\Encoding\Encoding;
    use Endroid\QrCode\ErrorCorrectionLevel;
    use Endroid\QrCode\Label\LabelAlignment;
    use Endroid\QrCode\Label\Font\OpenSans;
    use Endroid\QrCode\RoundBlockSizeMode;
    use Endroid\QrCode\Writer\PngWriter;

    $phoneNumber = '+431222333444';

    $builder = new Builder(
        writer: new PngWriter(),
        writerOptions: [],
        validateResult: false,
        data: $phoneNumber,
        encoding: new Encoding('UTF-8'),
        errorCorrectionLevel: ErrorCorrectionLevel::High,
        size: 300,
        margin: 10,
        roundBlockSizeMode: RoundBlockSizeMode::Margin,
        labelText: $phoneNumber,
        labelFont: new OpenSans(20),
        labelAlignment: LabelAlignment::Center
    );

    $result = $builder->build();
    ?>
    <!DOCTYPE html>
    <html lang="de">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Haustier-Notfall QR-Code Generator</title>
    </head>

    <body>
        <h1>Haustier-Notfall QR-Code</h1>
        <img src="<?php echo $result->getDataUri(); ?>" alt="QR Code für Notfallkontakt">
    </body>

    </html>