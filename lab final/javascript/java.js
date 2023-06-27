function demo(){
    var res=document.getElementById("result");
    var date=new Date();
    var h=date.getHours();
    var m=date.getMinutes();
    var s=date.getSeconds();
    var w=h+":"+m+":"+s;
    res.innerHTML=w;


}
setInterval(demo,1000);