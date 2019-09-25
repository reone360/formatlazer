<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formatlazer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #424242;
                color: #d2bbf3;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 400;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            textarea {
                position: absolute;
                left: 38%;
                margin: auto;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                border-radius: 20px 20px 0 0;
                background-color: #717171;
                border-color: #272727;
            }

            .inputArea {
                top: 30%;
            }

            .outputArea{
                top: 60%;
            }

            .transformbtn{
                position: absolute;
                top: 43%;
                left: 38%;
                width: 542px;
                height: 73px;
                text-align: center;
                font-family: 'Nunito', sans-serif;
                font-weight: 600;
                border-radius: 0px 0px 20px 20px;
                font-size: 18px;
                background-color: #171717;
                border-color: #171717;
                color: #d2bbf3;
            }
            h1{
                position: absolute;
                left: 39%;
                top: 23%;
            }

            h2{
                position: absolute;
                left: 46%;
                top: 55%;
            }
        </style>
    </head>
    <body>

        <h1>Enter your text below to Formalize</h1>
        <form>
            <textarea name="inputArea" class="inputArea" style="resize: none;" rows="10" cols="50" autofocus ></textarea>
            <input class="transformbtn" type="submit" value="Transform">
        </form>

        <h2>Formal result</h2>
        <textarea name="outputArea" class="outputArea" style="resize: none;" rows="10" cols="50" autofocus ></textarea>
    </body>
</html>
