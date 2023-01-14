<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>

    <style>

        /* صفحة إنشاء المنشور */

        body {
            background-color: orange;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            position: absolute;

            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        form {
            border: 8px double black;
            padding: 20px;
            margin-top: 35px;
        }

        h2 {
            background-color: white;
        }

        #userName, #hLabel {
            height: 30px;
            width: 200px;
            margin-bottom: 10px;
            border: 2px solid black;
            border-radius: 5px;
        }

        textarea {
            margin-top: 15px;
            height: 110px;
            width: 210px;
            border: 2px solid black;
            border-radius: 5px;
            resize: none;
            /* resize: both; */
        }

        #send {
            height: 35px;
            width: 80px;
            background-color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        #send:active {
            background-color: silver;
        }

        a {
            background-color: white;
            border-radius: 3px;
            color: blue;
        }



        /* صفحة عرض المنشورات - الصفحة الرئيسية */

        .containerPost {
            background-color: white;
            border: 2px solid black;
            border-radius: 5px;
            padding: 10px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        #label, #name, #post {
            text-align: left;
            margin: 5px;
        }






    </style>
    
</body>
</html>