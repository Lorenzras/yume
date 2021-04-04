
<div class="col-12"><legend >{{ __('Job') }}</legend></div>
    <div class="col-12">
        <hr class="dashed">
    </div>

<div class="col-12 table-responsive">
<table id="myTable" class=" table order-list ">
        <thead>
            <tr>
                <th style="width: 10.00%">時間</th>
                <th style="width: 10.00%">分間</th>
                <th style="width: 20.00%"></th>
                <th style="width: 60.00%">備考</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="time" id="time_picker" name="name" class="form-control" />
                </td>
                <td>
                    <input type="number" placeholder="0" name="mail"  class="form-control"/>
                </td>
                <td>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>面談数</option>
                <option>買付件数</option>
                <option>決済</option>
                <option>案内数</option>
                <option>契約数</option>
                <option>媒介件数</option>
                <option>ローラー</option>
                </select>
                </td>
                <td>
                    <input type="text" name="phone"  class="form-control"/>
                </td>

                <td><a class="addRow"></a>
                <input type="button" class=" ibtnAdd btn btn-md btn-success " id="addrow" value="追加">
                </td>
                <td><a class="deleteRow"></a>

                </td>
                
            </tr>
        </tbody>
    
    </table>
</div>


<script  type="application/javascript" defer>
window.onload = function() {
    $('#date_picker').val(moment().format("YYYY-MM-DD"));
    $('#time_picker').val(moment().format("HH:mm"));
    $(document).ready(function () {
    var counter = 0;

        $("table.order-list").on("click", ".ibtnAdd", function (event) {
            $.fn.addRow();      
            
        });

        $("table.order-list").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();       
            counter -= 1
        });

        $.fn.addRow = function() {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="time" class="form-control" name="time' + counter + '" value="' + moment().format("HH:mm") + '"/></td>';
            cols += '<td><input type="number" class="form-control" name="mail' + counter + '"/></td>';
            cols += `<td><select class="form-control" name="phone` + counter + `"/>
                <option>面談数</option>
                <option>買付件数</option>
                <option>決済</option>
                <option>案内数</option>
                <option>契約数</option>
                <option>媒介件数</option>
                <option>ローラー</option>
                </select></td>`;
            cols += '<td><input type="text" class="form-control" name="phone' + counter + '"/></td>';
            cols += '<td><input type="button" class=" ibtnAdd btn btn-md btn-success " id="addrow" value="追加"></td>';
            cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="削除"></td>';
            
            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++;   
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
        }

        $.fn.addDivRow = function() {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<div class="col-md-4"> <input type="time" class="form-control" name="name' + counter + '"/></td><div>';
            cols += '<td><input type="text" class="form-control" name="mail' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="phone' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="phone' + counter + '"/></td>';
            cols += '<td><input type="button" class=" ibtnAdd btn btn-md btn-success " id="addrow" value="追加"></td>';
            cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="削除"></td>';
            
            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++;   
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
        }
       

    });


     
/* 
function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
} */

};
</script>