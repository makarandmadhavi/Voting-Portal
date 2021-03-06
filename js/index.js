function login() {
    key = $('#key').val();
    house = $('#house').val();
    console.log(key);
    console.log(house);
    $.ajax({
        type: "POST",
        url: "backend/login_ajax.php",
        data: {
            //data goes here
            key,
            house
        },
        success: function (data) {
            //data is returned here
            if (data == "SUCCESS") {
                window.location = 'vote.php';
            } else if (data == "KEYUSED") {
                alert("The ID has already been used for Voting! if you haven't voted please request another ID!");
                window.location = '';
            } else if (data == "CLOSED"){
                alert("Voting is closed. Please come back during voting period to vote");
            } else {
                alert("Incorrect ID! ID does not exist");
                window.location = '';
            }
        }
    });
}

function addvotes(voteids) {
    voteids = JSON.stringify(voteids);
    //console.log(voteids);
    $.ajax({
        type: "POST",
        url: "backend/addvotes_ajax.php",
        data: {
            //data goes here
            voteids
        },
        success: function (data) {
            //data is returned here
            if (data == "SUCCESS") {
                window.location = 'logout.php';
            } else {
                alert("Error");
                window.location = '';
            }
        }
    });
}

function vote(but) {
    $(".vote-btn").prop("disabled",true);
    voteids = [];
    allselected = 1;
    //console.log(headboy);
    $.ajax({
        type: "POST",
        url: "backend/getposts_ajax.php",
        data: {
            //data goes here

        },
        success: function (data) {
            //data is returned here
            if (data) {
                arr = JSON.parse(data);
                arr.forEach(post => {
                    voteid = $("input[name='" + post + "']:checked").val();
                    voteids.push(voteid)
                    //console.log(voteid);
                    if (voteid == undefined) {
                        allselected = 0;
                        //console.log("inside "+allselected)
                    }
                });
                if (allselected) {
                    //console.log("all selected");
                    addvotes(voteids);
                } else {
                    alert("Please Vote for all Posts!");
                    $(".vote-btn").prop("disabled",false);
                }
                //console.log(voteids);
            } else {
                $(".vote-btn").prop("disabled",false);
                alert("Error Voting");
            }
        }
    });

}