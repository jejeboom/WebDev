// for customers



$(function(){
    $("#add_category").click(function() {
        $(this).closest("form").attr("action", "add-category"); 
    });
    $("#edit_category").click(function() {
        $(this).closest("form").attr("action", "edit-category");     
    });
    $("#delete_category").click(function() {
        $(this).closest("form").attr("action", "delete-category");     
    });
    $("#clear_category").click(function() {
        document.getElementById("category_form").reset(); 
    });
    $("#add_prod").click(function() {
        $(this).closest("form").attr("action", "add-prod"); 
    });
    $("#edit_prod").click(function() {
        $(this).closest("form").attr("action", "edit-prod");     
    });
    $("#delete_prod").click(function() {
        $(this).closest("form").attr("action", "delete-prod");     
    });
    $("#clear_prod").click(function() {
        document.getElementById("prod_form").reset(); 
    }); 


    $("#addCust").click(function() {
        $(this).closest("form").attr("action", "add-customer"); 
    });
    $("#editCust").click(function() {
        $(this).closest("form").attr("action", "edit-customer");     
    });
    $("#delCust").click(function() {
        $(this).closest("form").attr("action", "delete-customer");     
    });
    $("#clearCust").click(function() {
        document.getElementById("custForm").reset(); 
    });


    $("#add").click(function() {
        $(this).closest("form").attr("action", "add-employee"); 
    });
    $("#edit").click(function() {
        $(this).closest("form").attr("action", "edit-employee");     
    });
    $("#delete").click(function() {
        $(this).closest("form").attr("action", "delete-employee");     
    });
    $("#clearCust").click(function() {
        document.getElementById("myform").reset(); 
    });

    $('#add_new_prod').click(function() {
        var $table = $("#add_table");
        var id = $("#add_item").val();
        var name = $("#add_item :selected").text();
        var qty = $("#add_qty").val();
        var newTR = $("<tr><td name=prodID[]>"+ id +"</td><td name= prodName[]>"+ name + "</td><td name=qty[]>" + qty +"</td></tr>");
 
        $table.append(newTR);

        $.ajax({
            url: 'add-sod',
            data: {
                soh: $('#sohcode').val(),
                itemcode: id,
                itemqty: qty,
            },
                type: 'POST',
                success: function(data) {
                },
                error: function(xhr) {
                    
                }
            });
    });


    $('#clr').click(function(){
        $("#reportTable > tbody").html("");
    });


});



(function () {
    if (window.addEventListener) {
        window.addEventListener('load', run, false);
    } else if (window.attachEvent) {
        window.attachEvent('onload', run);
    }

    function run() {
        var t = document.getElementById('cate_table');
        t.onclick = function (event) {
            event = event || window.event; //IE8
            var target = event.target || event.srcElement;
            while (target && target.nodeName != 'TR') { // find TR
                target = target.parentElement;
            }
            //if (!target) { return; } //tr should be always found
            var cells = target.cells; //cell collection - https://developer.mozilla.org/en-US/docs/Web/API/HTMLTableRowElement
            //var cells = target.getElementsByTagName('td'); //alternative
            if (!cells.length || target.parentNode.nodeName == 'THEAD') {
                return;
            }
            var f1 = document.getElementById('cateid');
            var f2 = document.getElementById('catename');
            var f3 = document.getElementById('catedesc');
            f1.value = cells[0].innerHTML;
            f2.value = cells[1].innerHTML;
            f3.value = cells[2].innerHTML;
            //console.log(target.nodeName, event);
        };
    }

})();


(function () {
    if (window.addEventListener) {
        window.addEventListener('load', run, false);
    } else if (window.attachEvent) {
        window.attachEvent('onload', run);
    }

    function run() {
        var t = document.getElementById('prod_table');
        t.onclick = function (event) {
            event = event || window.event; //IE8
            var target = event.target || event.srcElement;
            while (target && target.nodeName != 'TR') { // find TR
                target = target.parentElement;
            }
            //if (!target) { return; } //tr should be always found
            var cells = target.cells; //cell collection - https://developer.mozilla.org/en-US/docs/Web/API/HTMLTableRowElement
            //var cells = target.getElementsByTagName('td'); //alternative
            if (!cells.length || target.parentNode.nodeName == 'THEAD') {
                return;
            }
            var f1 = document.getElementById('prodid');
            var f2 = document.getElementById('prodname');
            var f3 = document.getElementById('prodprice');
            f1.value = cells[0].innerHTML;
            f2.value = cells[1].innerHTML;
            f3.value = cells[2].innerHTML;

            $("#catecode option").each(function(){
                  if ($(this).text() == cells[3].innerHTML)
                    $(this).attr("selected","selected");
              });
            //console.log(target.nodeName, event);
        };
    }

})();




(function () {
    if (window.addEventListener) {
        window.addEventListener('load', run, false);
    } else if (window.attachEvent) {
        window.attachEvent('onload', run);
    }

    function run() {
        var t = document.getElementById('custTable');
        t.onclick = function (event) {
            event = event || window.event; //IE8
            var target = event.target || event.srcElement;
            while (target && target.nodeName != 'TR') { // find TR
                target = target.parentElement;
            }
            //if (!target) { return; } //tr should be always found
            var cells = target.cells; //cell collection - https://developer.mozilla.org/en-US/docs/Web/API/HTMLTableRowElement
            //var cells = target.getElementsByTagName('td'); //alternative
            if (!cells.length || target.parentNode.nodeName == 'THEAD') {
                return;
            }
            var f1 = document.getElementById('custCode');
            var f2 = document.getElementById('custName');
            var f3 = document.getElementById('custNum');
            var f4 = document.getElementById('emailadd');
            var f5 = document.getElementById('address');

            f1.value = cells[0].innerHTML;
            f2.value = cells[1].innerHTML;
            f3.value = cells[2].innerHTML;
            f4.value = cells[3].innerHTML;
            f5s.value = cells[4].innerHTML;
            //console.log(target.nodeName, event);
        };
    }

})();




(function () {
    if (window.addEventListener) {
        window.addEventListener('load', run, false);
    } else if (window.attachEvent) {
        window.attachEvent('onload', run);
    }

    function run() {
        var t = document.getElementById('table_emp');
        t.onclick = function (event) {
            event = event || window.event; //IE8
            var target = event.target || event.srcElement;
            while (target && target.nodeName != 'TR') { // find TR
                target = target.parentElement;
            }
            //if (!target) { return; } //tr should be always found
            var cells = target.cells; //cell collection - https://developer.mozilla.org/en-US/docs/Web/API/HTMLTableRowElement
            //var cells = target.getElementsByTagName('td'); //alternative
            if (!cells.length || target.parentNode.nodeName == 'THEAD') {
                return;
            }
            var f1 = document.getElementById('empcode');
            var f2 = document.getElementById('fname');
            var f3 = document.getElementById('mname');
            var f4 = document.getElementById('lname');
            var f5 = document.getElementById('job');

            f1.value = cells[0].innerHTML;
            f2.value = cells[1].innerHTML;
            f3.value = cells[2].innerHTML;
            f4.value = cells[3].innerHTML;
            f5.value = cells[4].innerHTML;
            //console.log(target.nodeName, event);
        };
    }

})();

    function onChange() {
        $.ajax({
            url: 'get-cust-values',
            type: 'GET',
            data: {
                code: $('#cust_name').val(),
            },
            success: function(data){
                $('#new_add').val(data[0]['strCustAddress']);
                $('#new_contact').val(data[0]['strCustContactNumber']);
                $('#new_email').val(data[0]['strCustEmailAdd']);

            }
        });
    }

$(document).on('submit', '#new_sales', function(e){
    var form_data = $('#new_sales').serialize();
                var table = document.getElementById('add_table');
            var arr = [];
            var qty = [];
                for(var i = 1; i<table.rows.length; i++) {
                    arr[i-1] = document.getElementById('add_table').rows[i].cells[0].innerHTML;
                    qty[i-1] = document.getElementById('add_table').rows[i].cells[2].innerHTML;
                }
    $.ajax({
        url: 'add-soh',
        data: {form_data},
        type: 'POST',
        cache: false,
        dataType: 'JSON',
        success: function(data) {

        }
    });
}); 

function salesReport()
        {
                    $("#reportTable > tbody").html("");
            $table =  $('#reportTable');
            $.ajax({
                url: 'get-report-values',
                type: 'GET',
                data: {
                    toDate: $('#toDate').val(),
                    fromDate: $('#fromDate').val()
                },
               success: function (data)
               {
                  for(var i=0; i<data.length; i++){
                    var newTR = $("<tr><td name=prodID[]>"+ data[i]['strSOHCode'] +"</td><td name= prodName[]>"+ data[i]['datSOHDateIssued'] + "</td><td name=qty[]>" + data[i]['datSOHDeliveryDate'] +"</td></td><td name=qty[]>" + data[i]['strSODItemCode'] +"</td><td name=qty[]>" + data[i]['intSODQty'] +"</td></tr>");
                    $table.append(newTR);
                  }
                  
              }
            });
        }