##main structure
[main]
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{TITLE}</title>
        {CSS}
    </head>
    <body>
    <div id="header">
    	{HEADER}
    </div>
    <div id="content">
    	{CONTENT}
    </div>
    {JS}
    </body>
</html>

##pieces
[css]
<link href="{CSS_FILE}" rel="stylesheet">

[js]
<script src="{JS_FILE}"></script>

[header]
<div class="title">{TITLE}</div>
<a href="{LINK_URL}index">{LANG:HOME}</a>