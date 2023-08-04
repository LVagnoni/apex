(function() {
   'use strict';
   /* jshint browser: true */

/**********************These are the editable values***********************************/

   var yr=2018;                    /* year value */
   var mo=3;                       /* month value */
   var da=1;                       /* day value */
   var hr=20;                       /* hours value */
   var mn=59;                       /* minutes value */
   var sc=59;                       /* seconds value */
   var ltr='Time left to submit:';       /* heading text for event*/
   var msg='Submissions now closed.';  /* heading text for event date reached  */ 
   var afr='Jurying begins in a few days.'; /* heading text for after event */

/*************************************************************************************/

   var obj,el,now,nwy,nwm,nwd,nwh,nwmn,nws,nwstr,ltrstr,dd,ddy,dhr,dmn,dsc,si;
   var d=document;
   var mos=['January','February','March','April','May','June','July','August','September','October','November','December'];
   var dys=(60*60*1000*24);
   var hrs=(60*60*1000);
   var mns=(60*1000);

function countdown(){
   obj=d.getElementById('wrapper');
   el=d.getElementById('event');
   el.firstChild.nodeValue=ltr;
   d.getElementById('date').firstChild.nodeValue=mos[mo-1]+' '+da+', '+yr;

   now=new Date();
   nwy=now.getUTCFullYear();
   nwm=now.getMonth();
   nwd=now.getDate();
   nwh=now.getHours();
   nwmn=now.getMinutes();
   nws=now.getSeconds();

   nwstr=mos[nwm]+' '+nwd+', '+nwy+' '+nwh+':'+nwmn+':'+nws;
   ltrstr=mos[mo-1]+' '+da+', '+yr+' '+hr+':'+mn+':'+sc;

   dd=Date.parse(ltrstr)-Date.parse(nwstr);
   ddy=Math.floor(dd/dys*1);
   dhr=Math.floor((dd%dys)/hrs*1);
   dmn=Math.floor(((dd%dys)%hrs)/mns*1);
   dsc=Math.floor((((dd%dys)%hrs)%mns)/1000*1);

if((ddy<=0)&&(dhr<=0)&&(dmn<=0)&&(dsc<=1)&&(nws<sc)){
   el.firstChild.nodeValue=msg;
   obj.classList.remove('hide');
   return;
 }
else { 
if(dsc<=-1) {
   el.firstChild.nodeValue=afr;
   obj.classList.remove('hide');
   clearInterval(si);
   return;
 }
else {
if(ddy<10){
   ddy='0'+ddy;
 }
if(dhr<10){
   dhr='0'+dhr;
 }
if(dmn<10){
   dmn='0'+dmn;
 }
if(dsc<10){
   dsc='0'+dsc;
 }
   d.getElementById('days').firstChild.nodeValue=ddy;
   d.getElementById('hours').firstChild.nodeValue=dhr;
   d.getElementById('minutes').firstChild.nodeValue=dmn;
   d.getElementById('seconds').firstChild.nodeValue=dsc;
   obj.classList.remove('hide');
   }
  }
 }
   si=setInterval(countdown,1000);
}());