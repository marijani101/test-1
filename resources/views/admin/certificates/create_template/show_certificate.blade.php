<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .certificate-template-container {
            width: {{ \App\Models\CertificateTemplate::$templateWidth }}px;
            height: {{ \App\Models\CertificateTemplate::$templateHeight }}px;
            position: relative;
            border: 2px solid #000;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .certificate-template-container .draggable-element {
            position: absolute !important;
            display: inline-block;
            white-space: pre-wrap;

        }

    </style>
</head>
<body>

        {!! $body !!}

</body>
</html>
