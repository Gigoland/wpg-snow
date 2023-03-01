<?php
/*
    Plugin Name: WPG-Snow
    Description: Wordepress Plugin Gigoland - Snow.
    Version: 1.0
    Author URI: https://Gigoland.net
*/

/*
    Copyright 2010 Gigoland.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function wpgSnow()
{
    echo sprintf('<!-- WP-GSnow Plugin by Gigoland.com --><script type="text/javascript">var snowsrc="%s/wp-gsnow/images/0%s.gif",no=%s,hidesnowtime=%s,snowdistance="%s",ie4up=(document.all)?1:0,ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!="BackCompat")?document.documentElement:document.body;}var dx,xp,yp,am,stx,sty,i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight;}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight;}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();snowsrc=(snowsrc.indexOf("%s")!=-1)?"%s/wpg-snow/images/0%s.gif":snowsrc;for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random();if(ie4up||ns6up){if(i==0){document.write("<div id=\"dot"+i+"\" style=\"position:absolute;z-index:"+i+";visibility:visible;top:15px;left:15px;\"><a href=\"%s\"><img src=\""+snowsrc+"\" border=\"0\"><\/a><\/div>");}else{document.write("<div id=\"dot"+i+"\" style=\"position:absolute;z-index:"+i+";visibility:visible;top:15px;left:15px;\"><img src=\""+snowsrc+"\" border=\"0\"><\/div>");}}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=="windowheight")?window.innerHeight:(ie4up&&snowdistance=="windowheight")?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=="pageheight")?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random();}dx[i]+=stx[i];document.getElementById("dot"+i).style.top=yp[i]+"px";document.getElementById("dot"+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+"px";}snowtimer=setTimeout("snowIE_NS6()",10);}function hidesnow(){if(window.snowtimer)clearTimeout(snowtimer);for(i=0;i<no;i++)document.getElementById("dot"+i).style.visibility="hidden";}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout("hidesnow()",hidesnowtime*1000);}</script>',
        WP_PLUGIN_URL,
        get_option('wpg_snow_image'),
        get_option('wpg_snow_number'),
        get_option('wpg_snow_disappear'),
        get_option('wpg_snow_height'),
        get_option('home'),
        WP_PLUGIN_URL,
        get_option('wpg_snow_image'),
        get_option('wpg_snow_url')
    );
}

function wpgIncludeSettings()
{
    include('settings.php');
}

function wpgSnowAddSettingActions()
{
    add_options_page('WPG Snow Settings', 'WPG Snow', 1, 'settings', 'wpgIncludeSettings');
}

function wpgSnowUninstall()
{
    delete_option('wpg_snow_image');
    delete_option('wpg_snow_number');
    delete_option('wpg_snow_disappear');
    delete_option('wpg_snow_height');
    delete_option('wpg_snow_url');
    delete_option('wpg_snow_installed');
}

if (function_exists('register_uninstall_hook') ) {
	register_uninstall_hook(__FILE__, 'wpgSnowUninstall');
}

if (!get_option('wpg_snow_installed')) {
    add_option('wpg_snow_image', 1);
    add_option('wpg_snow_number', 10);
    add_option('wpg_snow_disappear', 0);
    add_option('wpg_snow_height', 'windowheight');
    add_option('wpg_snow_url', '#');
    add_option('wpg_snow_installed', 1);
}

add_action('admin_menu', 'wpgSnowAddSettingActions');
add_action('wp_footer', 'wpgSnow');
