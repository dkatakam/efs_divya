<!DOCTYPE html>
<html>
    <head>
        <title>Eagle Financial Services</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
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
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
				<div align="center"><H1><FONT SIZE="6" FACE="arial" COLOR=blue>EAGLE FINANCIAL SERVICES </FONT></H1></div>
				<div align="center"> <FONT SIZE="3" FACE="verdana" COLOR=red>YOUR MID WEST FINANCIAL SERVICES PARTNER</div>
<div id="header1">
	<!-- header1 Left -->
	<div class="header1left">
		<div class="logo">
			
			
		</div>

		<nav class="menu">
			<ul>
				<li><a href="{{ action('CustomerController@index') }}">Customers</a></li>
				<li><a href="{{ action('StockController@index') }}">Stocks</a></li>
				<li><a href="{{ action('InvestmentController@index') }}">Investments</a></li>
				<li><a href="{{ action('MutualfundController@index') }}">Mutualfunds</a></li>
				
			</ul>
		</nav>
	</div>
</div>

<div class=""><img src="http://northwesternbusinessreview.org/wp-content/uploads/2016/05/finance-photo-.jpg" width="100%" height="600"></div>
				
            </div>
        </div>
    </body>
</html>
