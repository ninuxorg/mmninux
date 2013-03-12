<!DOCTYPE html>
<html lang="it-IT">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                    <li><a href="javascript:void(0);" onclick="OpenMenu('ninuxoomenu');">Ninuxoo</a></li>
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
                            <input type="hidden" name="titlesearch" value="Titoli" />
                            <input type="submit" value="Cerca nel wiki" class="button"/>
                        </form>
                    </li>
                    <li><a href="javascript:void(0);" onclick="OpenMenu('mainmenu');"><<</a></li>
                </ul>
            </div>

            <div class="menu_box" id="ninuxoomenu">
                <ul>
                    <li><a href="http://ninuxoo.ninux.org">Ninuxoo</a></li>
                    <li>
                        <form method="get" action="http://ninuxoo.ninux.org">
                            <input type="text" name="q" value=""/>
                            <input type="submit" value="Cerca su Ninuxoo" class="button"/>
                        </form>
                    </li>
                    <li><a href="javascript:void(0);" onclick="OpenMenu('mainmenu');"><<</a></li>
                </ul>
            </div>


            <div class="menu_box" id="mapmenu">
                <ul>
                    <li><a href="http://map.ninux.org">Map server</a></li>
					<li><a href="geo:0,0?q=http://map.ninux.org/nodes.kml">Map for Android</a></li>
					<li><a href="http://maps.google.com/?q=http://map.ninux.org/nodes.kml">Map on googlemaps</a></li>
					<li><a href="http://map.ninux.org/nodes.kml">Kml</a></li>
                    <li><a href="javascript:void(0);" onclick="OpenMenu('mainmenu');"><<</a></li>
                </ul>
            </div>

        </div>
    </body>

</html>
