/*eslint-disable */
// set domain:
var domain = "http://localhost:3000";
//variable contain data of image:
var selDiv = "";
var arrImgs = [];
var arrImgObjs = [];
var arrPaths = [];
var arrImgID = [];
var arrPathAndID = [];
var imageID = 0;
var objbyid;

//-------------------------Process drag, drop, display seclected images:----------------------------- 
$(document).ready(function () {   
    var selDiv = "";
    selDiv = document.querySelector("#divimg");
    //get all tag img in div divimg:
    var divimg = $('#divimg');
    //Children of divimg:
    var divimgItems = divimg.children();
    // array tags img of divimg:
    var arrTagImg = [];
    arrTagImg = divimgItems.find('img');    
    //Update arrImgID and arrPaths:
    for (let i = 0; i < arrTagImg.length; i++) {
        arrImgID[i] = arrTagImg[i].id;
        arrPaths[i] = arrTagImg[i].currentSrc.replace(domain, "");
    }
    for (let i = 0; i < arrPaths.length; i++) {
        arrPathAndID[i] = arrImgID[i] + ',' + arrPaths[i].replace('x75_', 'Original_');
    }
    $("#imgPaths").val(arrPathAndID);
    arrPathAndID = [];

    //Event click on button OK:
    $("#btnOk").click(function () {        
        arrImgs.forEach(function (i) {
            let html = '<div class="item icart">';
            html = html + '<div class="divrm">';
            html = html + '<a onclick="removeSelectedImage(this)" class="remove ' + '">&times;</a>';
            html = html + '</div>' + i.tag + '</div>';          
            selDiv.innerHTML += html;          
        });
        //Reset arrImgs:
        arrImgs = [];
        //Update path selected images:
        addItemToPathArray();
        for (let i = 0; i < arrPaths.length; i++) {
            arrPathAndID[i] = arrImgID[i] + ',' + arrPaths[i].replace('x75_', 'Original_');
        }
        $("#imgPaths").val(arrPathAndID);
        //Reset:
        $("#cart_items").fadeOut("2000", function () {
            $(this).html("").fadeIn("fast").css({ left: 0 });
        });       
    });

    //even click on button Cancel:
    $("#btnCancel").click(function () {
        arrImgObjs = [];
		 //Reset:
        $("#cart_items").fadeOut("2000", function () {
            $(this).html("").fadeIn("fast").css({ left: 0 });
        });  
		
    });

         
});
//event browse file:
document.addEventListener("DOMContentLoaded", init, false);
function init() {
   // document.querySelector('#divajax #files').addEventListener('change', handleFileSelect, false);
   if (document.querySelector('#divajax #files') != null) {
	   document.querySelector('#divajax #files').addEventListener('change', handleFileSelect, false);
   }
    selDiv = document.querySelector("#divimg");
}

function handleFileSelect(e) {
    if (!e.target.files || !window.FileReader) return;
    createDirectory(uploadfile, getDataByMoment);
    var files = e.target.files;
    var filesArr = Array.prototype.slice.call(files);
}
var total_items = 0;
//Handle event drag-drop image on  Popup:
$(document).ready(function () {
    $(".item").draggable({
        revert: true
        //remove()
    });
    $("#cart_items").draggable({
        axis: "x"
    });
    $("#cart_items").droppable({
        accept: ".item",
        activeClass: "drop-active",
        hoverClass: "drop-hover",
        drop: function (event, ui) {
			
            let item = ui.draggable.html();
            let itemid = ui.draggable.attr("id");
            let html = '<div class="item icart">';
            html = html + '<div class="divrm">';
            html = html + '<a onclick="remove(this)" class="remove ' + itemid + '">&times;</a>';
            html = html + '</div>' + item + '</div>';
            console.log(html);	
			
            $("#cart_items").append(html);            
            console.log('currentSrc = ' + ui.draggable[0].firstElementChild.currentSrc);
            let strsrc = ui.draggable[0].firstElementChild.currentSrc.replace(domain, "");
            let imgID = ui.draggable[0].firstElementChild.id;        
            arrImgs.push({
                tag: item,
                id: imgID
            });
            arrImgObjs.push({
                id: imgID,
                path: strsrc
            });
            // update total items
            total_items++;
            $("#citem").html(total_items);
            // expand cart items
            if (total_items > 4) {
                $("#cart_items").animate({ width: "+=120" }, 'slow');
            }
        }
    });
    $("#btn_next").click(function () {
        $("#cart_items").animate({ left: "-=100" }, 100);
        return false;
    });
    $("#btn_prev").click(function () {
        $("#cart_items").animate({ left: "+=100" }, 100);
        return false;
    });
    $("#btn_clear").click(function () {
        $("#cart_items").fadeOut("2000", function () {
            $(this).html("").fadeIn("fast").css({ left: 0 });
        });
        $("#citem").html("0");
        total_items = 0;
        //Reset:
        arrImgObjs = [];
        arrImgs = [];
        return false;
    });   
});

//Remove on the popup:
function remove(el) {
    //alert($(el).parent().parent());
    let divOfImg = $(el).parent().parent();
    let img = divOfImg.find('img')[0];
    let path = img.currentSrc;
    //alert(img.currentSrc);
    console.log(divOfImg);
    path = path.replace(domain, "");
    console.log(path);
    $(el).hide();
    $(el).parent().parent().effect("highlight", { color: "#ff0000" }, 10);
    $(el).parent().parent().fadeOut('1');
    setTimeout(function () {
        $(el).parent().parent().remove();
        // collapse cart items
        if (total_items > 3) {
            $("#cart_items").animate({ width: "-=120" }, 'normal');
        }
    }, 1100);
    //Remove path of image removed:
    removeItemOfPathTempArray(path);
    //removed item of array tags img:
    let id = img.id;
    for (let i = 0; i < arrImgs.length; i++) {
        if (arrImgs[i].id == id) {
            arrImgs.splice(i, 1);
            break;
        }
    }
    // update total item
    total_items--;
    $("#citem").html(total_items);

}

//Remove on the div selected images:
function removeSelectedImage(el) {
    //alert($(el).parent().parent());
    let divOfImg = $(el).parent().parent();
    let myDivUL = divOfImg.find('img')[0];
    let path = myDivUL.currentSrc;
    //alert(myDivUL.currentSrc);
    console.log(divOfImg);
    path = path.replace(domain, "");
    console.log(path);
    $(el).hide();
    $(el).parent().parent().effect("highlight", { color: "#ff0000" }, 10);
    $(el).parent().parent().fadeOut('1');
    setTimeout(function () {
        $(el).parent().parent().remove();
        // collapse cart items
        if (total_items > 3) {
            //$("#cart_items").animate({ width: "-=120" }, 'normal');
        }
    }, 1100);
    //Remove path of image removed:
    removeItemOfPathArray(path);
    arrPathAndID = [];
    for (let i = 0; i < arrPaths.length; i++) {
        arrPathAndID[i] = arrImgID[i] + ',' + arrPaths[i].replace('x75_', 'Original_');
    }
    $("#imgPaths").val(arrPathAndID);
    //hidden tab:
    document.getElementById('imgtab').style.display = "none";
}

//-----------------------Store selected images path:-----------------------------------
//Add item to array of image path:
function addItemToPathArray() {
    arrImgObjs.forEach(function (i) {
        arrPaths.push(i.path);
        arrImgID.push(i.id);
    });
    arrImgObjs = [];
}

//Delete item of temp array of image path:
function removeItemOfPathTempArray(path) {
    for (let i = 0; i < arrImgObjs.length; i++) {
        if (arrImgObjs[i].path == path) {
            arrImgObjs.splice(i, 1);
        }
    }
}
//Delete item of array of image path:
function removeItemOfPathArray(obj) {
    for (let i = 0; i < arrPaths.length; i++) {
        //alert((arrPaths[i] == obj));
        if (arrPaths[i] == obj) {
            arrPaths.splice(i, 1);
            arrImgID.splice(i, 1);
            break;
        }

    }
}

//-------------------------Handle event click :--------------------------------------------

$(document).on('click', '#divimg img', function (evt) {    
    document.getElementById('imgtab').style.display = "block";
    //reset tag img:
    $("#imgsrc0").attr('src', "");
	imageID = this.id;
    getDataByID(this.id);
   
	$('.selected').removeClass('selected'); // removes the previous selected class
    $(this).addClass('selected'); // adds the class to the clicked image
});

$(document).on('click', '#btnPopup', function (evt) {    
    getData();
	var selDiv = "";
    selDiv = document.querySelector("#divimg");
    //get all tag img in div divimg:
    var divimg = $('#divimg');
    //Children of divimg:
    var divimgItems = divimg.children();
    //array tags img of divimg:
    var arrTagImg = [];
    arrTagImg = divimgItems.find('img');
    //Display images on div of selected images on popup:
    $("#cart_items").children = divimgItems;
    for (let i = 0; i < arrTagImg.length; i++) {
        let img = arrTagImg[i];
        console.log(arrTagImg[i]);
        let width = arrTagImg[i].width;
        let obj = $("#" + arrTagImg[i].id);
        if (width < 75) {
            //$(".element").css( { marginLeft : "200px", marginRight : "200px" } );           
           // img = $("#" + arrTagImg[i].id).css( { paddingLeft : "20px", paddingRight : "20px" } );
            img = arrTagImg[i];
        }
        let html = '<div class="item icart">';
        html = html + '<div class="divrm">';
        html = html + '<a onclick="remove(this)" class="remove ' + '">&times;</a>';
        html = html + '</div>' + arrTagImg[i].outerHTML + '</div>';
        $("#cart_items").append(html);       
    }
    let divcart = $("#cart_items");

    //Set padding for tag img:
    //$(".item img").css( { paddingLeft : "20px", paddingRight : "20px" } );
    let objs = $(".item img");
    for (let j = 0; j < objs.length; j++) {       
        let id = objs[j].id;
        let width = objs[j].width;
        let height = objs[j].height;
        if (width < 75) {
            let img = $(".item  #" + id);
               // $("#item_container  #" + id).css( { paddingLeft : "20px", paddingRight : "20px" } );
        }
    }       
});
$(document).on('click', '#btnImgInfo', function (evt) {    
    let data = getImageInfo();
    updateImageInfo(data);  
});

$(document).on('click', '#btnInsertImage', function (evt) {    
    insertAndUploadImageData();    
});
//Update image info with form image:
$(document).on('click', '#btnUpdateImage', function (evt) {    
    let data = getImageInfo();
    updateImageInfoWithFormImage(data);    
});

//crop image:
$(document).on('click', '#btnCrop', function (evt) {
    let radio = $("#save input[type='radio']:checked").val();
    //alert(radio);

    if ($("#save input[type='radio']:checked").val() == "auto") {
        cropAutoImage(imageID);
    } else {       
        let x1 = $('#imgX1').val();
        let y1 = $('#imgY1').val();
        let width = $('#imgWidth').val();
        let height = $('#imgHeight').val();
        let canvas = $("#myCanvas")[0];
        let context = canvas.getContext('2d');
        let img = new Image();
        img.onload = function () {
            canvas.height = height;
            canvas.width = width;
            context.drawImage(img, x1, y1, width, height, 0, 0, width, height);  
           
            $("#imgCrop").attr("src", canvas.toDataURL());
        };
        img.src = $('#cp_' + imageID).attr("src");

        $("#modalCropManual").modal();
    }
    
    
});

//Highlight image after click:
$('img').click(function(){
    $('.selected').removeClass('selected'); // removes the previous selected class
    $(this).addClass('selected'); // adds the class to the clicked image
 });
 
 $('img').click(function(){
     //$(this).toggleClass('selectedIMG');
 });

//crop image:
$(document).on('click', '#btnSubmit', function (evt) {
    //Crop manual image:   
    let canvas = $("#myCanvas")[0];
    let dataURL = canvas.toDataURL();
    let data = {};
    data.imgBase64 = dataURL;
    data.img = objbyid;
    $.ajax({
        type: "POST",
        url: "/urlsave",
        data: data
    }).done(function (o) {
        console.log('saved');
        // If you want the file to be visible in the browser 
        // - please modify the callback in javascript. All you
        // need is to return the url to the file, you just saved 
        // and than put the image in your browser.
        console.log(o);        

        $("#modalCropManual").modal('hide');

        alert(o);
    });
});

//-------------------------------------Handle upload file and insert data----------------------------------------------
function uploadfile(cb) {
    //debugger;
    if (window.FormData !== undefined) {
        var fileUpload = $("#files").get(0);
        var files = fileUpload.files;
        var filedata = new FormData();
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            filedata.append('pictures', file, file.name);
        }
        $.ajax(
            {
                url: '/image/ajaxUpload',
                type: 'POST',
                contentType: false,
                processData: false,
                data: filedata,
                success: function (result) {                    
                    console.log(result);                    
					cb(result);
                    //window.location.reload();
                }, error: function (err) {
                    alert(err);
                    console.log(err);
                }
            }
        );

    }
    else {
        alert("FormData not support");
    }
}

//function upload files and insert data of images:
function insertAndUploadImageData(cb) {
    //debugger; 	
	createDirectory(uploadImageData, insertImageInfo);
	
	
}
//Upload image:
function uploadImageData(cb) {
	if (window.FormData !== undefined) {
        var fileUpload = $("#files").get(0);
        var files = fileUpload.files;

        var filedata = new FormData();

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            filedata.append('pictures', file, file.name);
        }
        $.ajax(
            {
                url: '/image/upload',
                type: 'POST',
                contentType: false,
                processData: false,
                data: filedata,
                success: function (result) {                   
                    console.log(result);                   
                    let data = getImageInfo();
                    cb(data);
                    return false;
                }, error: function (err) {
                    alert('0 ' + err);
                }
            }
        );
    }
    else {
        alert("FormData not support");
    }		
}

//Insert image info:
function insertImageInfo(imgdata) {    
    $.ajax(
        {
            url: '/image/insert',
            type: 'POST',
            data: JSON.stringify(imgdata),
            contentType: "application/json",          
            dataType: 'json',
            success: function (result) {               
                window.location.href = '/image';
            }, error: function (err) {
                alert(err);
            }
        }
    );
}

//--------------------Get data from database:--------------------------------------------------------
//get data with moment:
function getDataByMoment(moment) {
    //debugger;
    let data = {
        moment: moment
    }
    $.ajax(
        {
            url: '/image/dataByMoment',

            type: 'POST',
            data: JSON.stringify(data),
            contentType: "application/json",            
            dataType: 'json',
            success: function (result) {                
                //window.location.reload();
                result.forEach(function (f) {  
                    //let path = f.media + '/' + f.medialist.thumbnail.thumbnail_400x400;
                    //+ "style=\"height : 75px\" "
                    let thumbnail_75x75 = f.medialist.articlePreview;
                    let path = f.media + '/' + thumbnail_75x75;
                    let img = "<img  src=\"" + path + "\" " + "id = \"" + f._id + "\" " + "style=\"width: 75px; height : 79px\";  " + ">  ";
                    let html = '<div class="item icart">';
                    html = html + '<div class="divrm">';
                    html = html + '<a onclick="removeSelectedImage(this)" class="remove ' + '">&times;</a>';
                    html = html + '</div>'  + img + '</div>';                   
                    selDiv.innerHTML += html;
                    //Update array image path:
                    arrPaths.push(path);
                    arrImgID.push(f._id);   
                                 
                });
                //refreshDivimg();
                //update path of selected images:   
                for (let i = 0; i < arrPaths.length; i++) {
                    arrPathAndID[i] = arrImgID[i] + ',' + arrPaths[i].replace('x75_', 'Original_');
                }
                $("#imgPaths").val(arrPathAndID);                
                
            }, error: function (err) {
                alert(err);
            }
        }
    );
}
//function get all data:
function getData() {
    $.ajax(
        {
            url: '/image/data',
            type: 'GET',
            contentType: false,
            processData: false,
            data: null,
            success: function (result) {
                console.log(result);
            }, error: function (err) {
                alert(err);
            }
        }
    );
}
//get data by id;
function getDataByID(id) {
    let data = { id: id };
    $.ajax(
        { 
            url: '/image/databyid',
            type: 'POST',
            data: JSON.stringify(data),
            contentType: "application/json",          
            dataType: 'json',
            success: function (result) {               
                if (result !== null && result != 'undefined') {                   
                    console.log(result);
                    objbyid = result[0];
                    initImageTabcontent(result[0]);
                }
            }, error: function (err) {
                console.log(err);
            }
        }
    );
}
//Refresh divimg:
function refreshDivimg() {
    getData();
	let selDiv = "";
    selDiv = document.querySelector("#divimg");
    //get all tag img in div divimg:
    let divimg = $('#divimg');
    //Children of divimg:
    let divimgItems = divimg.children();
    //array tags img of divimg:
    let arrTagImg = [];
    arrTagImg = divimgItems.find('img');
    //Display images on div of selected images on popup:     
    for (let i = 0; i < arrTagImg.length; i++) {
        let img = arrTagImg[i];
        console.log(arrTagImg[i]);
        let width = arrTagImg[i].style.width;
        let height = arrTagImg[i].style.height;        
        let obj = $("#" + arrTagImg[i].id);
        if (width < 75) {
            //$(".element").css( { marginLeft : "200px", marginRight : "200px" } );           
            img = $("#" + arrTagImg[i].id).css( { paddingLeft : "20px", paddingRight : "20px" } );
            img = arrTagImg[i];
        }
       
    }   
}
//-----------------------update data of image:---------------------------------------------------------
function updateImageInfo(imgdata) {
    $.ajax(
        {
            url: '/image/ajax/' + imgdata.id,
            type: 'POST',
            data: JSON.stringify(imgdata),
            contentType: "application/json",            
            dataType: 'json',
            success: function (result) {
				let rst = result;
				console.log(rst);
                //window.location.reload();  
				if (document.getElementById('imgtab') != null){					
					document.getElementById('imgtab').style.display = "none";
				}
            }, error: function (err) {
                alert(err);
            }
        }
    );


}

//update data of image:
function updateImageInfoWithFormImage(imgdata) {
    $.ajax(
        {
            url: '/image/' + imgdata.id,
            type: 'POST',
            data: JSON.stringify(imgdata),
            contentType: "application/json",            
            dataType: 'json',
            success: function (result) {                
                alert('Updated successful');                   
                window.location.href = '/image';
            }, error: function (err) {
                alert(err);
            }
        }
    );

}

//---------------------Get and biding data of tab of image:---------------------------------------------
//function init tab content include data of image:
var jcrop_api = null;
function initImageTabcontent(imgdata) {
    
    let src = imgdata.media + "/" + imgdata.medialist.thumbnail.thumbnail_400x400;
    $("#description").val(imgdata.description);
    $("#heading").val(imgdata.heading);
    $("#photographer").val(imgdata.photographer);   
    $("#imgid").val(imgdata._id);    
    let html = "<img src=\"" + src + "\" " + "id = \"cp_" + imgdata._id + "\"" + ">  "; 
		
    $("#divImgSelected").empty();
    $("#divImgSelected").append(html);
   
	//Display dimension of image:
	$("#" + "cp_" + imgdata._id).load(function() {
        //alert($(this).height());
       // alert($(this).width());
        let width = $(this).width();
        let height = $(this).height();
        let html = "<br /> <label>" + width +" x " + height + "</label> <br />";
        $("#divImgSelected").append(html);

    });     
    
    if ($("#save input[type='radio']:checked").val() != "auto") {
        $(".demo-container #cp_" + imgdata._id).Jcrop({
            onChange: SetCoordinates,
            onSelect: SetCoordinates
        }, function() {
            jcrop_api = this;
        });
    } 

    //Click rodio button: 
    $(function () {

        $('#save input:radio').change(function () {
            //alert('changed');
            //JQuery.Jcop:
            
            if ($("#save input[type='radio']:checked").val() != "auto") {
                $(".demo-container #cp_" + imgdata._id).Jcrop({
                    onChange: SetCoordinates,
                    onSelect: SetCoordinates
                }, function() {
                    jcrop_api = this;
                });
            } else {
                //getDataByID(imageID);
                jcrop_api.destroy();
            }
        });

    });


}
function SetCoordinates(c) {
    $('#imgX1').val(c.x);
    $('#imgY1').val(c.y);
    $('#imgWidth').val(c.w);
    $('#imgHeight').val(c.h);
    //$('#btnCrop0').show();
};	

//get data on tab content of image:
function getImageInfo() {
    let imgdata = {};
    imgdata.id = $("#imgid").val();
    imgdata.description = $("#description").val();
    imgdata.heading = $("#heading").val();
    imgdata.photographer = $("#photographer").val();
    imgdata.usercreate = $("#usercreate").val();
    return imgdata;
}

//reset tab content:
function resetImageTabcontent() {
    $("#description").val("");
    $("#heading").val("");
    $("#photographer").val("");
    $("#imgsrc").attr('src', "");
    $("#imgid").val("");
}

//---------------------Handle create directory:-----------------------------------------------------
//function create directory:
function createDirectory(cb, cb2) {
    //debugger;  
    console.log('created directory');
    $.ajax(
        {
            url: '/image/createDirectory',
            type: 'GET',
            contentType: false,
            processData: false,
            data: null,
            success: function (result) {                
                console.log('creat dir ' + result);               
				cb(cb2);
                //window.location.reload();
            }, error: function (err) {
                alert(err);
            }
        }
    );
   
}

//---------------------------Crop image:------------------------------------------------------

//function crop image:
function cropAutoImage(id) {
	let data = { id: id };
	 $.ajax(
        {
            url: '/image/cropImage/faces',
            type: 'POST',
            data: JSON.stringify(data),
            contentType: "application/json",
            //contentType: "application/x-www-form-urlencoded",
            dataType: 'json',
            success: function (result) {                
                console.log(result); 
				displayImageCropAuto(result);

            }, error: function (err) {
                alert(err);
            }
        }
    );
}

//function display image crop automatic:
function displayImageCropAuto(data) {
	$("#divFaces").empty();
	for (let i = 0; i < data.count; i++) {
		let src = data.path + "/" + data.filename + "_face_" + i + ".jpg";
		let img = "<img src=\"" + src + "\" " + "style= \"" + "width : 75px; height : 75px \"" +  ">  ";
		let html = '<div class="item icart">';
		html += img + '</div>';		
        $("#divFaces").append(html);
        $("#modalFaces").modal();
	}
	 
}

//--------------------------------Trackingjs:----------------------------------------------------------

//Function detect faces:
function detectFaces() {

    var img = document.getElementById('imgsr');
    var tracker = new tracking.ObjectTracker(['face']);
    tracker.setStepSize(1.7);
    // tracking.track('#imgsrc0', tracker);
    tracking.track(img, tracker);
    tracker.on('track', function (event) {
        event.data.forEach(function (rect) {
            window.plot(rect.x, rect.y, rect.width, rect.height);
        });
    });
    window.plot = function (x, y, w, h) {
        var rect = document.createElement('div');
        document.querySelector('.demo-container').appendChild(rect);
        rect.classList.add('rect');
        rect.style.width = w + 'px';
        rect.style.height = h + 'px';
        rect.style.left = (img.offsetLeft + x) + 'px';
        rect.style.top = (img.offsetTop + y) + 'px';
    };

}