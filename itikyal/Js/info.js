
var dailyinfo=new Array()
var dailyinfolink=new Array()


dailyinfo[1]='Today there is no imformation available yat..!'
dailyinfo[2]='Today there is no imformation available yat..!'
dailyinfo[3]='Today there is no imformation available yat..!'
dailyinfo[4]='Today there is no imformation available yat..!'
dailyinfo[5]='Happy jenmastami in itikyal village..post by sangam rajendhar'
dailyinfo[6]='Today there is no imformation available yat..!'
dailyinfo[7]='Today there is no imformation available yat..!'
dailyinfo[8]='Today there is no imformation available yat..!'
dailyinfo[9]='Today there is no imformation available yat..!'
dailyinfo[10]='Today there is no imformation available yat..!'
dailyinfo[11]='Today there is no imformation available yat..!'
dailyinfo[12]='Today there is no imformation available yat..!'
dailyinfo[13]='Today there is no imformation available yat..!'
dailyinfo[14]='Today there is no imformation available yat..!'
dailyinfo[15]='Today there is no imformation available yat..!'
dailyinfo[16]='Today there is no imformation available yat..!'
dailyinfo[17]='Today there is no imformation available yat..!'
dailyinfo[18]='Today there is no imformation available yat..!'
dailyinfo[19]='Those who  had farms or crop motors TODAY meeting at 8 oclock moring at grampanchaty'
dailyinfo[20]='Today there is no imformation available yat..!'
dailyinfo[21]='Today there is no imformation available yat..!'
dailyinfo[22]='Today there is no imformation available yat..!'
dailyinfo[23]='Today there is no imformation available yat..!'
dailyinfo[24]='Today there is no imformation available yat..!'
dailyinfo[25]='Today there is no imformation available yat..!'
dailyinfo[26]='Today there is no imformation available yat..!'
dailyinfo[27]='Today there is no imformation available yat..!'
dailyinfo[28]='Message for the 28th of this month goes here'
dailyinfo[29]='Message for the 29th of this month goes here'
dailyinfo[30]='Message for the 30th of this month goes here'
dailyinfo[31]=''

dailyinfolink[28]="http://dynamicdrive.com"
dailyinfolink[29]="http://news.com"

var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()+1
if (month<10)
month="0"+month
var daym=mydate.getDate()

document.dailyinfo.cdate.value=month+"/"+daym+"/"+year
document.dailyinfo.dailycontent.value=dailyinfo[daym]

function moreinfo(){
if (dailyinfolink[daym])
window.location=dailyinfolink[daym]
else
alert("No additional itikyal information available for this news piece")
}
