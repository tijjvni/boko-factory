<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <style type="text/css">

            .clearfix:after {
              content: "";
              display: table;
              clear: both;
            }

            a {
              color: #0087C3;
              text-decoration: none;
            }

            body {
              color: #555555;
              background: #FFFFFF; 
              font-family: Arial, sans-serif; 
              font-size: 14px; 
              font-family: SourceSansPro;
            }


header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 150px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#user {
  padding-left: 6px;
  border-left: 6px solid #00000F;
  float: left;
}

#user .title {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

h2.time {
  color: #777777;
}



table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: ;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

.text-right {
    text-align: right;
}

        </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <header class="clearfix">
                <div id="logo">
                    <img src="logo.png">
                </div>
                <div id="company">
                    <h3 class="name">Boko Factory</h3>
                    <div>No 61 Ungogo Road, Kano.</div>
                    <div>Kano State, Nigeria</div>
                    <div>08032173656, 08169669906</div>
                    <div>
                        <a href="mailto:bokoagroallied@gmail.com">bokoagroallied@gmail.com</a>
                    </div>
                </div>
            </header>
            <h4 style="text-align:center;">@yield('title','Document')</h4>
            <hr/>

            {{ $slot }}
        </div>
    </body>
</html>

