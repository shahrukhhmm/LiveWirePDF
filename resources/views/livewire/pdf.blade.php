<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generated PDF</title>

    <style>
        .{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header-heading,.footer-heading{
            text-align: center;
            padding: 15px 0px;
        }
        .textarea{
            padding: 0px 20px;
        }
    </style>
</head>
<body>
    <div class="header-heading">
        <p>{{ $header }}</p>
    </div>

    <div>
        @foreach($middleTextareas as $textarea)
            <p class="textarea">{{ $textarea }}</p>
        @endforeach
    </div>

    <div>
        <p class="footer-heading">{{ $footer }}</p>
    </div>
</body>
</html>
