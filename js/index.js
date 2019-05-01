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
                alert("Successful Login");
                window.location = 'vote.php';
            } else {
                alert("Incorect sfsfsfKey");
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
                alert("Vote Successful");
                window.location = 'logout.php';
            } else {
                alert("Error");
                window.location = '';
            }
        }
    });
}

function vote(){
    voteids=[];
    allselected=1;
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
                    voteid=$("input[name='"+post+"']:checked").val();
                    voteids.push(voteid)
                    //console.log(voteid);
                    if(voteid==undefined){
                        allselected=0;
                        //console.log("inside "+allselected)
                    }
                });
                if(allselected){
                    //console.log("all selected");
                    addvotes(voteids);
                }
                else{
                    alert("Please Vote for all Posts!");
                }
                //console.log(voteids);
            } else {
               
                alert("Error Voting");
            }
        }
    });

}





