<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calculator</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&family=Share:ital@1&display=swap');
        </style> 
    <style>
        html,body{
            padding: 0;
            margin: 0;

        }
        .calculator{
            background: #353535;
            width: 300px;
            padding: 15px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 6px 0 #a1a1a1, 0 8px 10px rgba(0, 0, 0, 0.75);
        }
        .result{
            background-color: #cecfac;
            color: #3b3e32;
            width: 90%;
            margin: 8px 0 20px 10px;
            text-align: right;
            height: 50px;
            line-height: 50px;
            font-size: 35px;
            padding-right: 10px;
            overflow: hidden;
            box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5),inset 0px 2px 0 #a1a1a1;
        }
        ul{
            padding: 0;
            margin: 0;
        }
        ul li {
            list-style: none;
            background: #4c4c4c;
            padding: 10px;
            width: 15%;
            float: left;
            color: white;
            margin: 5px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 0 #a5a5a5,inset 0 2px 0 #a1a1a1;
        }
        ul li:active{
            position: relative;
            top: 5px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.4);
        }
        ul li:nth-child(16){
            height: 75px;
            line-height: 75px;
        }
        ul li:last-child{
           margin-top: -48px;
           width: 65%;
        }
        .signature{
            color: #fff;
            font-size: 0.75rem;
            text-align: right;
            position: relative;
            top: 4px;
            right: 5px;
            z-index: -1;
            font-family: 'Share', cursive;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <div class="result">0</div>
        <ul>
            <li>c</li>
            <li>*</li>
            <li>/</li>
            <li>.</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>+</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>-</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>=</li>
            <li>0</li>
        </ul>
        <p class="signature">Nice Calculator by D K THAKUR</p>
    </div>
    <script src="../Assets/js/cal.js">
       
    </script>
</body>
</html>