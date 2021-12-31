<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search</title>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<body>

    <div id="search-box" style="color: red">
        <input id="search" onkeyup="june()" name="search" type="text" autocomplete="off" placeholder="Search here" />
        <div id="result"> </div>
    </div>
<br></br><br></br>


<p id="topcompanies" >topcompanies

<div id="r"></div>

</p>

<p id="profit" >profitcompanies

<div id="s"></div>

</p>


<script>

var inputVal = $('#search').val();

function june(inputVal,&action="companylist",&fetch="search")
{
        
    a[inputVal]=data;
    var values=a[inputVal];
    var res = '';
    for (var element of values) 
    { 
        res += "<div>"+element+"</div>";
    }
        $('#result').html(res);


};
                                        
$(document).on("click", "#result div", function()
{
    $("#result div").parents("#search-box").find('#search').val($(this).text());
    $(this).parent("#result").empty();
});



function january(action="companylist",&fetch="topcompanies")
{

      var data = //array;
      var resi = '';
      for (var e of data) 
      { 
        resi += "<div>"+e+"</div>";
      }
      $('#r').html(resi);
}

function february(action="companylist",&fetch="profitcompanies"){

      var data = //array;
      var resi = '';
      for (var e of data) 
      { 
        resi += "<div>"+e+"</div>";
      }
      $('#s').html(resi);
}

$(document).ready(function() 
{
  january(topcompanies);
  february(profitcompanies);
});


$.ajax
({
        type:'post',
        url:'end.php',

        data://?????????,

        success:function(resp)
        {
            var data = JSON.parse(resp);
            a[inputVal]=data;

        }
});


</script>

</body>
</head>

</html>















