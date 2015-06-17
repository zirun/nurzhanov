<!DOCTYPE html>
<html>
    <head>
        <title>Zhandos Nurzhanov</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                
                font-weight: 100;
                font-family: 'Lato';

                background: rgba(255,255,255,0.9);
                background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,0.9) 0%, rgba(233,245,255,0.9) 100%);
                background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,0.9)), color-stop(100%, rgba(233,245,255,0.9)));
                background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,0.9) 0%, rgba(233,245,255,0.9) 100%);
                background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,0.9) 0%, rgba(233,245,255,0.9) 100%);
                background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,0.9) 0%, rgba(233,245,255,0.9) 100%);
                background: radial-gradient(ellipse at center, rgba(255,255,255,0.9) 0%, rgba(233,245,255,0.9) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e9f5ff', GradientType=1 );
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <div class="quote">{{ Inspiring::quote() }}</div>
            </div>
        </div>
    </body>
</html>
