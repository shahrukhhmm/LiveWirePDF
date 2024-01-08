<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Livewire Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>



    <style>
        .{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        textarea{
            margin: 15px 0px;
        }
        textarea:focus{
           outline: none;
        }
        .textAreaCount{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .heading{
            padding: 18px 10px;
            color: #484848;
        }
      
        #header,#footer, #mTextArea{
           text-align: center;
           padding: 20px 0px;
        }
        .middle-container{
            position: relative;
        }
        .removeBtn {
            position: absolute;
            top: 0;
            right: 0;
            background: #ff5c5c; 
            border: none;
            color: #fff; 
            font-weight: 500;
            padding: 2px 8px;
            cursor: pointer;
            border-radius: 4px;
        }

        .removeBtn:hover {
            background: #e84141; 
        }

       .addContainer{
            display: flex;
            justify-content: center;
            padding: 10px;
       }
       .addContainer input{
            width: 75px;
            border: 1px solid #c5c5c5;
            margin-right: 20px;
            border-radius: 5px;
       }
       .addContainer button{
         
            text-transform: uppercase;
            padding: 0px 22px;
            
       }

       .generatePDF{
            float: right;
            margin: 15px 0px;
       }

       .addContainer button:hover , .generatePDF:hover {
            color: #0b5ed7;
            background-color: #ffffff;
            border-color: #0b5ed7;
       }
     
    </style>
</head>

<body >
    <livewire:new-dynamic-textarea />
    @livewireScripts

</body>
</html>
