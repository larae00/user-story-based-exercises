<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haustier-Notfall QR-Code Generator</title>
    <link rel="stylesheet" href="../css/styles.css">
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

    $phoneNumber = '';
    $showQR = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['phoneNumber'])) {
        $phoneNumber = 'tel:' . $_POST['phoneNumber'];
        $showQR = true;
    }

    if ($showQR) {
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
    }
    ?>

    <div class="container">
        <h1>Haustier-Notfall QR-Code Generator</h1>
        <form method="POST">
            <input type="tel" name="phoneNumber" placeholder="Telefonnummer eingeben (z.B. +4312233444)"
                pattern="[\+]?[0-9]{10,14}" required>
            <button type="submit">QR-Code generieren</button>
        </form>
        <?php if ($showQR): ?>
            <div class="qr-container">
                <img src="<?php echo $result->getDataUri(); ?>" alt="QR Code für Notfallkontakt">
            </div>
        <?php endif; ?>
    </div>
</body>

</html>