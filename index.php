<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <title>Ninux.org</title>
        <link rel="stylesheet" href="main.css" type="text/css" media="all" />
        <meta name="viewport" content="width=480;" />
		<script type="text/javascript" src="menu.js"></script>
    </head>

    <body onload="OpenMenu('mainmenu');">
        <div id="container">
            <div id="header"><img src="img/ninuxlogo.png" alt="ninux.org" /></div>

            <div class="menu_box" id="mainmenu">
                <ul>
                    <li><a href="javascript:void(0);" onclick="OpenMenu('wikimenu');">Wiki</a></li>
                    <li><a href="javascript:void(0);" onclick="OpenMenu('mapmenu');">Map</a></li>
                    <li><a href="javascript:void(0);">Social</a></li>
                    <li><a href="javascript:void(0);">Tools</a></li>
                </ul>
            </div>

            <div class="menu_box" id="wikimenu">
                <ul>
                    <li><a href="http://wiki.ninux.org"><img src="img/wiki.png" alt="" />Vai al Wiki</a></li>
                    <li>
                        <form method="get" action="http://wiki.ninux.org">
                            <input type="text" name="value" value=""/>
                            <input type="hidden" name="action" value="fullsearch" />
                            <input type="hidden" name="context" value="180" />
                            <input type="hidden" name="titlesearch" value="Titoli" /><br/>
                            <input type="submit" value="Cerca nel wiki"/>
                        </form>
                    </li>
                    <li><a href="javascript:void(0);" onclick="OpenMenu('mainmenu');"><<</a></li>
                </ul>
            </div>


            <div class="menu_box" id="mapmenu">
                <ul>
                    <li><a href="javascript:void(0);" onclick="OpenMenu('mainmenu');"><<</a></li>
                </ul>
            </div>

        </div>
    </body>

</html>
