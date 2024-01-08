<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generated PDF</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
        }

        @page {
            margin: 0.5cm 2cm; 
        }

        .header-heading, {
            text-align: center;
        }
        
        .footer-heading {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px; 
            text-align: center;
        }

        .textarea {
            margin: 15px 0px;
            text-align: justify;
            font-size: 12px !important;

        }
    </style>
</head>
<body>

    <div class="header-heading">
        <p>{!! $header !!}</p>
    </div>

    <div>
        @foreach($middleTextareas as $textarea)
            <p class="textarea">{!! $textarea !!}</p>
        @endforeach
    </div>

    <div class="footer-heading">
            <p>{!! $footer !!}</p>
    </div>

 
</body>
</html>


