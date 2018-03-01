
function show_answer(question_no)
{
 var answerid='q'+question_no+'answer';
 $('#'+answerid).css('display', 'inline-block');
}


function result_calculator()
{
$('#result_btn').attr('disabled',true);	
$('#result_btn').text('Loading Result ...');

var no_of_items=$('#no_of_items').text();
var result=0;

for (var i = 1; i <= no_of_items; i++) 
{
var answer=$('#q'+i+'answer').text();
var choosedanswer = $( 'input[name=q'+i+'choosedanswer]:checked' ).val();

if(choosedanswer=='undefined')
{
choosedanswer=0;
}

if(answer==choosedanswer)
{
result=result+1;
}

}

$('#result_span').text(result);
$('#no_of_items_span').text(no_of_items);
$('#result_modal').modal('show');
$('#result_btn').text('Show Result');
$('#result_btn').attr('disabled',false);	
}