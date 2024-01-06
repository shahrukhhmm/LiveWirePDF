<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Livewire Example</title>


    <style>
        .{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .antialiased{
            width: 600px;
            margin: auto;
        }
        textarea{
            width: 100%;
            border: none;
            border-bottom: 2px solid black;
            border-radius: 5px;
            margin: 10px 0px;
        }
        textarea:focus{
           outline: none;
        }
        .mTextarea{
            height: 150px;
        }
        #header,#footer{
           text-align: center;
           padding: 20px 0px;
        }


        .middle-container{
            position: relative;
        }

        .removeBtn{
            position: absolute;
            top: 15px;
            right: 0;
            background: white;
            border-radius:30%; 
            color: red;
            font-weight: bold;
        }

       .addContainer{
            display: flex;
            justify-content: center;
            padding: 10px;
       }
       .addContainer input{
            width: 35px;
            border: 2px solid black;
            margin: 0px 10px;
            border-radius: 5px;

       }

       .addContainer button, .generatePDF {
            background: none;
            border-radius: 5px;
            text-transform: uppercase;
            padding: 2px;
            padding: 0px 10px;
            font-weight: bold;
            
       }
       .addContainer button:hover , .removeBtn:hover, .generatePDF:hover{
            background: black;
            color: white;
            border: 2px solid rgb(172, 164, 164);
            text-transform: uppercase;
       }
    </style>
</head>
<body class="antialiased">
    <livewire:dynamic-textareas />
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireScripts

   
</body>
</html>
