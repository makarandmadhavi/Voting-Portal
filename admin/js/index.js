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
    console.log("removebtn"+this.id);
    $("#removebtn"+this.id).removeClass('hide');
    $("#editbtn"+this.id).removeClass('hide');
    
}, function () {
    $("#removebtn"+this.id).addClass('hide');
    $("#editbtn"+this.id).addClass('hide');
    //after hover
});