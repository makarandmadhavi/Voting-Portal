var active=0;
var txt="";

function login() {
    username = $('#username').val();
    password = $('#password').val();
    //console.log(username);
    //console.log(password);
    $.ajax({
        type: "POST",
        url: "backend/login_ajax.php",
        data: {
            //data goes here
            username,
            password
        },
        success: function (data) {
            //data is returned here
            if (data == "SUCCESS") {
                alert("Successful Login");
                window.location = 'admin.php';
            } else {
                alert("Incorect Username, password combination");
                window.location = '';
            }
        }
    });
}

function addcandidate() {
    name = $('#name').val();
    post = $('#post').val();
    house = "na";
    if (post == "House Captain" || post == "House Vice Captain") {
        house = $('#house').val();
    }
    console.log(name);
    console.log(post);
    console.log(house);
    if (name == '') {
        alert("Please Enter Candidate Name");
    } else {
        $.ajax({
            type: "POST",
            url: "backend/addcandidate_ajax.php",
            data: {
                //data goes here
                name,
                post,
                house
            },
            success: function (data) {
                //data is returned here
                if (data == "SUCCESS") {
                    alert("Candidate added");
                    $("#name").val(null);
                } else {
                    alert("Error Adding Candidate");
                    window.location = '';
                }
            }
        });
    }
}

function removecandidate(id, name) {
    if (confirm("Do you wish to remove " + name + " from candidates ?")) {
        console.log(id);
        $.ajax({
            type: "POST",
            url: "backend/removecandidate_ajax.php",
            data: {
                //data goes here
                id

            },
            success: function (data) {
                //data is returned here
                if (data == "SUCCESS") {
                    alert("Candidate Removed");
                    window.location = '';
                } else {
                    alert("Error Removing candidate");
                    window.location = '';
                }
            }
        });
    }

}

function updatecandidate(id) {
        name=$("#candidate"+id).val();
        console.log(id);
        $.ajax({
            type: "POST",
            url: "backend/updatecandidate_ajax.php",
            data: {
                //data goes here
                id,
                name

            },
            success: function (data) {
                //data is returned here
                if (data == "SUCCESS") {
                    alert("Candidate updated");
                    window.location = '';
                } else {
                    alert("Error updating candidate");
                    window.location = '';
                }
            }
        });
    

}

function generatekeys() {
    keys=$('#keys').val();
    console.log(keys);
    //console.log(username);
    //console.log(password);
    $.ajax({
        type: "POST",
        url: "backend/generatekeys_ajax.php",
        data: {
            //data goes here
            keys
        },
        success: function (data) {
            //data is returned here
            console.log(data);
            if (data == "SUCCESS") {
                alert("Successful");
                window.location = 'keys.php';
            } else {
                alert("Error generating keys");
                //window.location = '';
            }
        }
    });
}


function editbtn(id){
    //console.log(id);
    active=id;
    $("#"+id).css("background-color","#f0f0f0");
    txt=$("#candidate"+id).val();
    $("#candidate"+id).removeAttr("disabled");
    $("#candidate"+id).focus();
    $("#editbtn"+id).hide();
    $("#removebtn"+id).hide();
    $("#cancelbtn"+id).show();
    $("#updatebtn"+id).show();
}

function cancelbtn(id,name){
    //console.log(id);
    //console.log(name);
    $("#"+id).css("background-color","");
    $("#candidate"+id).val(name);
    $("#editbtn"+id).show();
    $("#removebtn"+id).show();
    $("#cancelbtn"+id).hide();
    $("#updatebtn"+id).hide();
    $("#removebtn"+id).addClass('hide');
    $("#editbtn"+id).addClass('hide');
    active=0;
}

$("body").click(function(){
    //console.log(event.target.nodeName);
    //console.log(event.target.id);
    if(active && event.target.id!="candidate"+active && event.target.nodeName!="BUTTON" ){
        cancelbtn(active,txt);
        //console.log("Cancel"+active);

    }
});

$("#postdiv").change(function () {
    var optionSelected = $(this).find("option:selected");
    var valueSelected = optionSelected.val();
    //console.log(valueSelected);
    if (valueSelected == "House Captain" || valueSelected == "House Vice Captain") {
        $("#housediv").show();
    } else {
        $("#housediv").hide();
    }

});


$(".hov").hover(function () {

    //console.log("removebtn"+this.id);
    if(!active){
        $("#removebtn"+this.id).removeClass('hide');
        $("#editbtn"+this.id).removeClass('hide');
    }
    
        

}, function () {
    if(!active){
        $("#removebtn"+this.id).addClass('hide');
        $("#editbtn"+this.id).addClass('hide');
    }
    
    //after hover
});

