// Put your Last.fm API key here
var api_key = "9e21930a3c4140ba142c8885de8bdb98";
var artistNm;
function initialize(){
    artistNm = encodeURI(document.getElementById("hide").value);
    sendRequest();
}


function sendRequest () {
    var xhr = new XMLHttpRequest();
    var method = "artist.getinfo";
    var method2 = "artist.gettopalbums";
    var method3 = "artist.getsimilar";
    //console.log('Artist'+artistNm);
    //var artist = encodeURI(document.getElementById("form-input").value);
    xhr.open("GET", "http://localhost/JavaJam/application/js/proxy.php?method="+method+"&artist="+artistNm+"&api_key="+api_key+"&format=json", true);
    xhr.setRequestHeader("Accept","application/json");
    xhr.onreadystatechange = function () {
        if (this.readyState == 4) {
           // console.log(this.responseText);
            
            var json = JSON.parse(this.responseText);
            var str = JSON.stringify(json,undefined,2);
            //document.getElementById("output").innerHTML = "<pre>" + str + "</pre>";
            //document.getElementById("output").innerHTML = "<a href='"+json.artist.url+"'>"+json.artist.name+"</a>";
            document.getElementById("artist-name").innerHTML = "<h3>Name:  "+json.artist.name+"</h3>";
            document.getElementById("artist-img").setAttribute('src',json.artist.image[2]['#text']);
            document.getElementById("artist-url").setAttribute('href',json.artist.url);
            document.getElementById("artist-url").innerHTML = "Link to Last.fm for more info about "+json.artist.name;
            document.getElementById("descrptn").innerHTML = "<p>"+json.artist.bio.content+"</p>";
            
            for (i=0;i<3;i++)
		{
                     document.getElementById("simArt["+i+"]").innerHTML = json.artist.similar.artist[i].name;
                }
        }
    };
    var xhr2 = new XMLHttpRequest();
    xhr2.open("GET", "http://localhost/JavaJam/application/js/proxy.php?method="+method2+"&artist="+artistNm+"&api_key="+api_key+"&format=json", true);
    xhr2.setRequestHeader("Accept","application/json");
    xhr2.onreadystatechange = function () {
        if (this.readyState == 4) {
           // console.log(this.responseText);
            
            var json = JSON.parse(this.responseText);
            var str = JSON.stringify(json,undefined,2);
           
		for (i=0;i<3;i++)
			{
			 document.getElementById("topAlbm["+i+"]").setAttribute('src',json.topalbums.album[i].image[i]['#text']);
                         document.getElementById("topAlbm["+i+"]").style.width="50px";
                         document.getElementById("topAlbmName["+i+"]").innerHTML = json.topalbums.album[i].name;
			}
		
        }
    };
    var xhr3 = new XMLHttpRequest();
    xhr3.open("GET", "http://localhost/JavaJam/application/js/proxy.php?method="+method3+"&artist="+artistNm+"&api_key="+api_key+"&format=json", true);
    xhr3.setRequestHeader("Accept","application/json");
    xhr3.onreadystatechange = function () {
        if (this.readyState == 4) {
           // console.log(this.responseText);
            
            var json = JSON.parse(this.responseText);
            var str = JSON.stringify(json,undefined,2);
             //document.getElementById("second-api").innerHTML = "<pre>"+str+"</pre>";  
        }
    };
    
    xhr.send(null);
    xhr2.send(null);
    xhr3.send(null);
}

