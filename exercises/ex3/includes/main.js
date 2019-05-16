var boxCounter=0;
var lastSize=80;
var counter=0
var result=['','',''];
var temp=0;
var first=0;
var i=0;
var flag=0;
var tmpLtter;
var temper=0;
var j=0;
var t;
var colorCount=0;
var painted=0;
var arrAllBoxes=[];
var lastClickedBox = [];
var letters=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
var charactersLength = letters.length;
function createBoxes(){
    if(first == charactersLength){
        first=0;
    }
    temp=boxCounter%2;
    if(temp==0){//odd
        result[i]=letters[first];
        i+=1;
        result[i]=letters[first];
        i+=1;
        result[i]=letters[first+1];
        var k= result.length;
        while(--k){
            j=Math.floor(Math.random()*(k-1));
            temper =result[k];
            result[k]=result[j];
            result[j]=temper;
        }
        k=0;
        j=0;
        i=0;
        first+=2;
    }
    else{//even
        result[i]=letters[first-1];
        i+=1;
        result[i]=letters[first];
        i+=1;
        result[i]=letters[first];
        var k= result.length , j , temper;
        while(--k){
            j=Math.floor(Math.random()*(k-1));
            temper =result[k];
            result[k]=result[j];
            result[j]=temper;
        }
        k=0;
        j=0;
        i=0;
        first+=1;
    }
    while(counter<3){
        var rec = document.createElement("DIV");
        var box = document.getElementsByClassName("boxes_in_main")[0]; 
        box.appendChild(rec);
        rec.style.height=lastSize+"px";
        rec.style.width=lastSize+"px";
        rec.style.backgroundColor="black";
        rec.className="rec"+boxCounter;
        rec.style.marginLeft="132px";
        rec.style.marginTop="123px";
        rec.style.marginBottom="107px";
        rec.style.cssFloat="left";
        arrAllBoxes.push(rec);
        lastSize+=20;
        boxCounter++;
        var myP=document.createElement("P");
        myP.innerHTML=result[counter];
        myP.style.color="#00000";
         myP.style.textAlign='center';
        myP.style.marginTop = lastSize*0.25 + "px";
        myP.style.fontSize = lastSize*0.25 + "px";
        myP.innerHTML=result[counter];
        rec.appendChild(myP);
        rec.addEventListener('click', showBox); 
        counter++;    
    }
    counter=0;
}
function showBox(){
    if(this.style.backgroundColor==="rgb(235, 170, 218)" ){
        if(flag==1)
        {
            if(lastClickedBox.length >= 0){
                lastClickedBox[0].style.color ="#000000";
                lastClickedBox=[];
            }
        }
        flag=0;
        
    }
    else if(flag==1){//second enter
        if(this.innerText == tmpLtter.innerText && this!=tmpLtter){//if the letters are equal         
            this.style.backgroundColor="#ebaada";//pink
            lastClickedBox[0].style.backgroundColor="#ebaada";//pink
            this.style.color="#EBEF18";//yellow
            lastClickedBox[0].style.color="#EBEF18";//yellow
            colorCount+=2;
            lastClickedBox=[];
        }
        else{
            this.style.color="#EBEF18";//yellow
            lastClickedBox[0].style.color="#EBEF18";//yellow
            lastClickedBox.push(this);
            t = setInterval(setColor, 500);
        }
        flag=0;
    }
    else if(flag==0 && arrAllBoxes.length-1 != colorCount){//first enter
        this.style.color="#EBEF18";
        tmpLtter=document.getElementsByClassName(this.className)[0];
        lastClickedBox.push(tmpLtter);
        flag=1;
    }    
}
function setColor(){
    lastClickedBox[1].style.color ="#000000";
    lastClickedBox.pop();
    lastClickedBox[0].style.color ="#000000";
    lastClickedBox=[];
    clearInterval(t);
}

window.onload=function(){
    var rec = document.createElement("DIV");
    document.body.appendChild(rec);
    rec.style.position="absolute";
    rec.style.backgroundColor="#000000";
    rec.style.top="21px";
    rec.style.right="24px";
    rec.style.height="80px";
    rec.style.width="80px";
    rec.className="box";
    rec.addEventListener('click', createBoxes)
}
