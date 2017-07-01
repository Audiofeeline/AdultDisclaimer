function disclaimercookie(){
disclaimerdays=1;
disclaimerdate = new Date();
disclaimerdate.setTime(disclaimerdate.getTime()+(disclaimerdays*24*60*60*1000));
document.cookie = 'cookiename=disclaimer; expires=' + disclaimerdate.toGMTString();
}

if(expires != ""){
document.write('<div id="disclaimer">');
document.write('<p>Bla Bla Bla Bla</p>');
document.write('<a href="#" onClick="javascript:document.getElementById(\'disclaimer\').style.display=\'none\';disclaimercookie()">Entrer</a> - <a href="">Sortir</a>);
document.write('</div>')
}

else {document.getElementById(\'disclaimer\').style.display=\'none\'}
