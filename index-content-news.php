/*!
 Print button for Buttons and DataTables.
 2016 SpryMedia Ltd - datatables.net/license
*/
(function(c){"function"===typeof define&&define.amd?define(["jquery","datatables.net","datatables.net-buttons"],function(e){return c(e,window,document)}):"object"===typeof exports?module.exports=function(e,a){e||(e=window);a&&a.fn.dataTable||(a=require("datatables.net")(e,a).$);a.fn.dataTable.Buttons||require("datatables.net-buttons")(e,a);return c(a,e,e.document)}:c(jQuery,window,document)})(function(c,e,a,q){var k=c.fn.dataTable,d=a.createElement("a"),p=function(b){d.href=b;b=d.host;-1===b.indexOf("/")&&
0!==d.pathname.indexOf("/")&&(b+="/");return d.protocol+"//"+b+d.pathname+d.search};k.ext.buttons.print={className:"buttons-print",text:function(b){return b.i18n("buttons.print","Print")},action:function(b,a,d,g){b=a.buttons.exportData(c.extend({decodeEntities:!1},g.exportOptions));d=a.buttons.exportInfo(g);var k=a.columns(g.exportOptions.columns).flatten().map(function(b){return a.settings()[0].aoColumns[a.column(b).index()].sClass}).toArray(),m=function(b,a){for(var d="<tr>",c=0,e=b.length;c<e;c++)d+=
"<"+a+" "+(k[c]?'class="'+k[c]+'"':"")+">"+(null===b[c]||b[c]===q?"":b[c])+"</"+a+">";return d+"</tr>"},h='<table class="'+a.table().node().className+'">';g.header&&(h+="<thead>"+m(b.header,"th")+"</thead>");h+="<tbody>";for(var n=0,r=b.body.length;n<r;n++)h+=m(b.body[n],"td");h+="</tbody>";g.footer&&b.footer&&(h+="<tfoot>"+m(b.footer,"th")+"</tfoot>");h+="</table>";var f=e.open("","");f.document.close();var l="<titl