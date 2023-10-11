$(document).ready(function(){
    // Add Option Function to insert new input Field in form on run time
    window.addOptionFunc = addOptionFunc;

    let counter=3;
    function addOptionFunc(){
        ++counter;
        document.getElementById('addOption').innerHTML +=
        `<div class='form-group d-flex flex-column mb-4'>
            <label for='option${counter}'>Option ${counter} .</label>
            <textarea class='rounded p-2 t-area' name='opt${counter}' id='option${counter}' cols='30' rows='1'></textarea>
        </div>`;
    }
    
    $("input[type='radio']").change(function() {
        var id=$(this).attr('id');
        var optionId;
        if(id==="opt1"){
            optionId=1;
        }else if(id==="opt2"){
            optionId=2;
        }else if(id==="opt3"){
            optionId=3;
        }else if(id==="opt4"){
            optionId=4;
        }else if(id==="opt5"){
            optionId=5;
        }else {
            optionId=6;
        }
            $("#option"+optionId).removeClass("poll-option-selected");
            console.log("remove"+ optionId);
        if($(this).is(":checked")) {
            console.log("add"+ optionId);
            $("#option"+optionId).addClass("poll-option-selected");
        }
    });

    //Load Poll Data from Database into Card
    window.pollData = pollData;
    /* function pollData(route, q_id){
        let csrf=document.getElementsByName('_token').value;
        console.log(csrf);
        console.log(route);
        console.log(q_id);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("test").innerHTML =
            this.responseText;
            }
        };
        xhttp.open("GET", route, true);
        xhttp.setRequestHeader('X-CSRF-Token', csrf);
        xhttp.setRequestHeader('q_id',q_id);
        xhttp.send();
    } */
    function pollData(route, q_id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: route,
            method: 'GET',
            data: {
                qid: q_id,
            },
            success: function (result) {
                console.log(result);
                $('#test').html(result);
            }
        });
    }
});