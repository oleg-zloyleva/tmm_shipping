<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Letter</title>
</head>
<body>
    <div>
        <h1>USPPI Written Authorization Letter</h1>
    </div>
    <hr>
    <div class="usspi-block">
        <form action="" id="usspi-form">
            <div class="usspi-block__title">
                WRITTEN AUTHORIZATION TO PREPARE OR <br>TRANSMIT SHIPPER’S EXPORT INFORMATION
            </div>
            <div class="usspi-block__content">
                <div class="content-authorize">I, <u>{{ $firstExporterName }}</u> <u>{{ $secondExporterName }}</u>, authorize</div>
                TMM international, to act as forwarding agent for export control and customs purposes and to sign any Shipper’s Export Declaration (SED), or transmit such export information electronically, which may be required by law or regulation in connection with the exportation or transportation of any merchandise on behalf of said U.S. Principal Party in Interest. The U.S. Principal Party in Interest certifies that necessary and proper documentation to accurately complete the SED or transmit the information electronically is and will be provided to the said forwarding Agent. The U.S. Principal Party in Interest further understands that civil and criminal penalties may be imposed for making false or fraudulent statements or for the violation of any United State laws or regulations on exportation and agrees to be bound by all statements of said agent based upon information or documentation provided by exporter to said agent.
                <div class="content-signature">
                    <label class="label-content">
                        Signature:
                        <u>{{ $signatureFirst }}</u>*<u>{{ $signatureSecond }}</u>
                    </label>
                </div>
                <div class="content-print">
                    <label class="label-content">
                        Print Name:
                        <u>{{ $printName }}</u>
                    </label>
                </div>
                <div class="content-ein">
                    <label class="label-content">
                        E.I.N. (TAX ID):
                        <u>{{ $einTaxId }}</u>
                    </label>
                </div>
                <div class="content-title">
                    <label class="label-content">
                        Title:
                        <u>{{ $titleFirst }}</u>*<u>{{ $titleSecond }}</u>
                    </label>
                </div>
                <div class="content-date">
                    <label class="label-content">
                        Date:
                        <u>{{ $dateFirst }}</u>*<u>{{ $dateSecond }}</u>
                    </label>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
