
function fetchVisitorList() {

    $.get('http://localhost/Doorway/public/api/doorway/visit-list', function (data) {
        var mainCardDiv = $('#doorway-pr-cards');
        mainCardDiv.empty();
        if (data.code === 200) {
            $('.no-record').remove();
            if(data.data.length>0){
                data.data.forEach((item, i)=>{
                    console.log(i)
                    var xmlCard = (`<section class='doorway-pr-card' id='${i}'><div class='doorway-pr-card--details'><img src='https://cdn-icons-png.flaticon.com/512/3135/3135715.png' /><div class='ms-2'><p class='m-0 doorway-font-regular'>${item.visitor_name}</p><p class='m-0'>To Meet : ${item.person_to_meet}</p><p class='m-0'>Purpose : ${item.purpose}</p></div></div><div class='doorway-pr-card--actions mt-2' id='${i}'><section class='hvr-bounce-in' id='approval-yes-btn${i}'><i class='bi bi-check'></i></section><section class='hvr-bounce-in' id='approval-no-btn${i}'><span style='font-size: 17px;'>    x</span></section>               <section class='hvr-bounce-in view-visitor-detail' id='view-visitor-detail${i}'>                    <i class='bi bi-eye' style='font-size: 16px;'></i>             </section>                <section class='hvr-bounce-in'>                    <i class='bi bi-pencil-square' style='font-size: 14px;'></i>                </section>            </div></section>`)
                    var doc = new DOMParser().parseFromString(xmlCard, "text/html");
                    if(item.visit_accepted == "pending"){
                        checkPendingCount += 1;
                        mainCardDiv.append(doc.body.getElementsByClassName("doorway-pr-card"));
                    }

                    $(`#view-visitor-detail${i}`).on('click',()=>{
                        // var parent_id = $(this).parent().attr('id');
                        var visitor_detail_modal = $('#visitor-detail-modal');
                        visitor_detail_modal.empty();
                        let htmlVisitor = (`<div class="detail">
                        <section class="d-flex align-items-center ">
                            <img width="100px" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" />
                            <h4 class="m-0 ms-2">${item.visitor_name}</h4>
                        </section>
                        <section class="row mt-4">
                            <div class="col-md-12">
                                <ul>
                                    <li><span class="key">Person To Meet</span> : <span class="value">${item.person_to_meet}</span></li>
                                    <li><span class="key">Date of Visit</span> : <span class="value">${item.date_time}</span></li>
                                    <li><span class="key">Purpose</span> : <span class="value">${item.purpose}</span></li>

                                </ul>
                            </div>
                        </section>
                        </div>`);
                        let doc = new DOMParser().parseFromString(htmlVisitor, "text/html");
                        visitor_detail_modal.append(doc.body.getElementsByClassName("detail"))
                        $('#visit-view-modal').modal('show');
                    });
                    $(`#approval-yes-btn${i}`).on('click',()=>{
                        $.post("http://localhost/Doorway/public/api/doorway/approve-visit",
                            {"id": item.id, "acceptance": "yes"} ,
                            function(data,status){

                            }
                        );
                    });
                    $(`#approval-no-btn${i}`).on('click',()=>{
                        $.post("http://localhost/Doorway/public/api/doorway/approve-visit",
                            {"id": item.id, "acceptance": "no"} ,
                            function(data,status){

                            }
                        );
                    });
                });

            }
            //
        } else {
            let noDataText = $("<p></p>");
            noDataText.text("No Data Available");
            noDataText.addClass('no-record');
            mainCardDiv.append(noDataText);
        }
    });
}
// data-bs-toggle="modal" data-bs-target="#visit-view-modal"



fetchVisitorList();

$('#myForm').submit(function (e) {
    var formLength = 7;
    var validateInput = 0;
    var values = {};
    // prevent form reload
    e.preventDefault();
    // get all the inputs into an array.
    var $inputs = $('#myForm :input');
    $inputs.each(function () {
        values[this.name] = $(this).val();
    });


    Object.keys(values).map(item => {
        if (values[item] !== '') {
            console.log(validateInput);
            validateInput++;
        }
    });

    if (values && validateInput >= 6) {
        $('#save-btn').text('Proccessing...');
        $.post(
            "http://localhost/Doorway/public/api/doorway/create-gate-pass", {
            "visitor_name": values.visitor_name,
            "visitor_mobile": values.visitor_mobile,
            "visitor_address": values.visitor_address,
            "person_to_meet": values.person_to_meet,
            "purpose": values.purpose,
            "date_time": values.date_time,
        },
            function (data, status) {
                console.log(data, status);
                $('#save-btn').text('Save');
                if (data.code == 200) {
                    $('#create-gate-pass-modal').modal('hide');
                    var text = data.message;
                    fetchVisitorList();
                    $.toast({
                        text: text,
                        showHideTransition: 'slide', // It can be plain, fade or slide
                        bgColor: '#74b212', // Background color for toast
                        textColor: 'white', // text color
                        allowToastClose: false, // Show the close button or not
                        hideAfter: 3000, // `false` to make it sticky or time in miliseconds to hide after
                        stack: 5, // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                        textAlign: 'left', // Alignment of text i.e. left, right, center
                        position: 'top-right' // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                    })
                } else {
                    var text = data.message;
                    $.toast({
                        text: text,
                        showHideTransition: 'slide', // It can be plain, fade or slide
                        bgColor: '#ed5c5c', // Background color for toast
                        textColor: 'white', // text color
                        allowToastClose: false, // Show the close button or not
                        hideAfter: 5000, // `false` to make it sticky or time in miliseconds to hide after
                        stack: 5, // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                        textAlign: 'left', // Alignment of text i.e. left, right, center
                        position: 'top-right' // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                    })
                }
            }
        );
    } else {
        // alert('Please fill all the fields');
        console.log('values', values, validateInput);
        $('#alert').text('Please fill all the fields');
    }
});
$("#create-gate-pass-modal").on('hide.bs.modal', function () {
    console.log("Modal");
});
$("#create-gate-pass-modal").on('show.bs.modal', function () {
    $('#myForm :input').val('');
    $('#alert').text('');
    // clear_fetch();
});

