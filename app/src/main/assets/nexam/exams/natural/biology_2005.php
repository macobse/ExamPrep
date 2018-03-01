<!DOCTYPE html>

<html>

<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0"></meta>
<meta charset="utf-8">
<meta name="keyword" content="Ethiopia,National,Exams,National Exams,Grade,8
,10,12,grade 8,grade 10,grade 12,matric,entrance,EUEE,english,mathematics,physics,chemistry,biology,civics,sat,economics,geography,history,">

<title>Armonem</title>

<link rel='shortcut icon' href='../../favicon.ico' type='image/x-icon'/ >

<link href='../../bootstrap/css/bootstrap.min.css' rel='stylesheet'>

<link href='../../includes/exams.css' rel='stylesheet'>
<script type="text/javascript">
	function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
</script>

</head>

<body>

<script type="text/javascript">

var time_given=120*60*1000;//min*sec*milsec == in millsec

var exam_mode = getParameterByName('exam_mode');//$_GET["exam_mode"];
var showAnswer =  document.getElementByClassName('show_answer_btn');
var clock = document.getElementByClassName('clockdiv');
if(exam_mode=="exam")
{
	showAnswer.style.display = none;

	clock .style.display = block;
}

else
{
	showAnswer.style.display = inline-block;

	clock .style.display = block;
}
</script>

<!-----------------header div -------------------------------------->
<div class="header_div">
<p class="header_title">Ethiopian University Entrance Examination (EUEE)
Biology
Ginbot 2005/June2013</p>
<p class="header_subtitle"><span class="schoolname">School of tomorrow</span> | ልቀት National Exam training Software, Armonem Tech Solutions</p>
</div>
<!-----------------header div -------------------------------------->



<div class="container">

<a href="../../index.php" style="text-decoration: none;">Return to Home</a>

<!---------------- Clock div -------------------------->
<div id="clockdiv" class="clockdiv float-right sticky-top">
<span class="hours"></span>
<span class="minutes"></span>
<span class="seconds"></span>
</div>
<!---------------- Clock div -------------------------->



<!--------- Booklet code & No of items ---------------->
<p class="booklet_code">BOOKLET CODE: 31 </p>
<p class="booklet_code">Number of Items: <span id="no_of_items">100</span></p>
<!--------- Booklet code & No of items ---------------->


<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 1------>
1. Which of the following steps in the scientific method comes following observation?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q1choosedanswer" id="q1choiceA" value="A">
<label class="form-check-label" for="q1choiceA">
<!------ Choice A------> 
A. Prediction
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q1choosedanswer" id="q1choiceB" value="B">
<label class="form-check-label" for="q1choiceB">
<!------ Choice B------> 
B. Hypothesis
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q1choosedanswer" id="q1choiceC" value="C">
<label class="form-check-label" for="q1choiceC">
<!------ Choice C------> 
C. Experiment
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q1choosedanswer" id="q1choiceD" value="D">
<label class="form-check-label" for="q1choiceD">
<!------ Choice D------> 
D. Theory
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(1)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q1answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 2------>
2. The main component of the plant cell wall is _______________?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q2choosedanswer" id="q2choiceA" value="A">
<label class="form-check-label" for="q2choiceA">
<!------ Choice A------> 
A. Starch
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q2choosedanswer" id="q2choiceB" value="B">
<label class="form-check-label" for="q2choiceB">
<!------ Choice B------> 
B. Cellulose
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q2choosedanswer" id="q2choiceC" value="C">
<label class="form-check-label" for="q2choiceC">
<!------ Choice C------> 
C. Protein
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q2choosedanswer" id="q2choiceD" value="D">
<label class="form-check-label" for="q2choiceD">
<!------ Choice D------> 
D. Chitin
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(2)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q2answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 3------>
3. Which of the following classes of enzymes digests carbohydrates?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q3choosedanswer" id="q3choiceA" value="A">
<label class="form-check-label" for="q3choiceA">
<!------ Choice A------> 
A. Amylases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q3choosedanswer" id="q3choiceB" value="B">
<label class="form-check-label" for="q3choiceB">
<!------ Choice B------> 
B. Lipases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q3choosedanswer" id="q3choiceC" value="C">
<label class="form-check-label" for="q3choiceC">
<!------ Choice C------> 
C. Proteases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q3choosedanswer" id="q3choiceD" value="D">
<label class="form-check-label" for="q3choiceD">
<!------ Choice D------> 
D. Nucleases
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(3)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q3answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 4------>
4. Which of the following kingdoms of life is consisting of prokaryotic organisms?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q4choosedanswer" id="q4choiceA" value="A">
<label class="form-check-label" for="q4choiceA">
<!------ Choice A------> 
A. Fungi
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q4choosedanswer" id="q4choiceB" value="B">
<label class="form-check-label" for="q4choiceB">
<!------ Choice B------> 
B. Monera
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q4choosedanswer" id="q4choiceC" value="C">
<label class="form-check-label" for="q4choiceC">
<!------ Choice C------> 
C. Protista
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q4choosedanswer" id="q4choiceD" value="D">
<label class="form-check-label" for="q4choiceD">
<!------ Choice D------> 
D. Plantae
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(4)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q4answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 5------>
5. Which component of soil fertility is improved when farmers grow legumes in crop rotation?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q5choosedanswer" id="q5choiceA" value="A">
<label class="form-check-label" for="q5choiceA">
<!------ Choice A------> 
A. Phosphorus
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q5choosedanswer" id="q5choiceB" value="B">
<label class="form-check-label" for="q5choiceB">
<!------ Choice B------> 
B. Nitrogen
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q5choosedanswer" id="q5choiceC" value="C">
<label class="form-check-label" for="q5choiceC">
<!------ Choice C------> 
C. Sulfur
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q5choosedanswer" id="q5choiceD" value="D">
<label class="form-check-label" for="q5choiceD">
<!------ Choice D------> 
D. Carbon
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(5)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q5answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 6------>
6. Before making crosses, which part of the flower did Mendel remove to avoid self pollination?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q6choosedanswer" id="q6choiceA" value="A">
<label class="form-check-label" for="q6choiceA">
<!------ Choice A------> 
A. Stigma
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q6choosedanswer" id="q6choiceB" value="B">
<label class="form-check-label" for="q6choiceB">
<!------ Choice B------> 
B. Ovule
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q6choosedanswer" id="q6choiceC" value="C">
<label class="form-check-label" for="q6choiceC">
<!------ Choice C------> 
C. Ovary
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q6choosedanswer" id="q6choiceD" value="D">
<label class="form-check-label" for="q6choiceD">
<!------ Choice D------> 
D. Stamens
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(6)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q6answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 7------>
7. Which one of the following do bees use to inform other bees about the location and distance of a new source of nectar they discover?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q7choosedanswer" id="q7choiceA" value="A">
<label class="form-check-label" for="q7choiceA">
<!------ Choice A------> 
A. Pheromones
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q7choosedanswer" id="q7choiceB" value="B">
<label class="form-check-label" for="q7choiceB">
<!------ Choice B------> 
B. Waggle dance
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q7choosedanswer" id="q7choiceC" value="C">
<label class="form-check-label" for="q7choiceC">
<!------ Choice C------> 
C. Buzzing noise
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q7choosedanswer" id="q7choiceD" value="D">
<label class="form-check-label" for="q7choiceD">
<!------ Choice D------> 
D. Vibration of wings
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(7)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q7answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 8------>
8. One of the following molecules is the building units of an enzyme molecule.
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q8choosedanswer" id="q8choiceA" value="A">
<label class="form-check-label" for="q8choiceA">
<!------ Choice A------> 
A. Amino acids
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q8choosedanswer" id="q8choiceB" value="B">
<label class="form-check-label" for="q8choiceB">
<!------ Choice B------> 
B. Glucose
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q8choosedanswer" id="q8choiceC" value="C">
<label class="form-check-label" for="q8choiceC">
<!------ Choice C------> 
C. Nucleotides
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q8choosedanswer" id="q8choiceD" value="D">
<label class="form-check-label" for="q8choiceD">
<!------ Choice D------> 
D. Fatty acids
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(8)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q8answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 9------>
9. Which one of the following is the main constituent of biological membranes?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q9choosedanswer" id="q9choiceA" value="A">
<label class="form-check-label" for="q9choiceA">
<!------ Choice A------> 
A. Phospholipids
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q9choosedanswer" id="q9choiceB" value="B">
<label class="form-check-label" for="q9choiceB">
<!------ Choice B------> 
B. Glycoproteins
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q9choosedanswer" id="q9choiceC" value="C">
<label class="form-check-label" for="q9choiceC">
<!------ Choice C------> 
C. Glycolipids
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q9choosedanswer" id="q9choiceD" value="D">
<label class="form-check-label" for="q9choiceD">
<!------ Choice D------> 
D. Cholesterols
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(9)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q9answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 10------>
10. One of the following biomes in Africa is supporting large wild mammals such as elephants, giraffes and lions.
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q10choosedanswer" id="q10choiceA" value="A">
<label class="form-check-label" for="q10choiceA">
<!------ Choice A------> 
A. The Congo Rainforest
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q10choosedanswer" id="q10choiceB" value="B">
<label class="form-check-label" for="q10choiceB">
<!------ Choice B------> 
B. The Rain Forest of Western Ethiopia
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q10choosedanswer" id="q10choiceC" value="C">
<label class="form-check-label" for="q10choiceC">
<!------ Choice C------> 
C. The Savanna Grassland
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q10choosedanswer" id="q10choiceD" value="D">
<label class="form-check-label" for="q10choiceD">
<!------ Choice D------> 
D. The Sahara Desert
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(10)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q10answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 11------>
11. Which of the following is the correct F2 phenotypic ratio of a monohybrid cross?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q11choosedanswer" id="q11choiceA" value="A">
<label class="form-check-label" for="q11choiceA">
<!------ Choice A------> 
A. 1:2
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q11choosedanswer" id="q11choiceB" value="B">
<label class="form-check-label" for="q11choiceB">
<!------ Choice B------> 
B. 1:1
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q11choosedanswer" id="q11choiceC" value="C">
<label class="form-check-label" for="q11choiceC">
<!------ Choice C------> 
C. 3:1
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q11choosedanswer" id="q11choiceD" value="D">
<label class="form-check-label" for="q11choiceD">
<!------ Choice D------> 
D. 2:2
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(11)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q11answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 12------>
12. How many carbon atoms are there in one disaccharide molecule?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q12choosedanswer" id="q12choiceA" value="A">
<label class="form-check-label" for="q12choiceA">
<!------ Choice A------> 
A. 6
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q12choosedanswer" id="q12choiceB" value="B">
<label class="form-check-label" for="q12choiceB">
<!------ Choice B------> 
B. 12
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q12choosedanswer" id="q12choiceC" value="C">
<label class="form-check-label" for="q12choiceC">
<!------ Choice C------> 
C. 18
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q12choosedanswer" id="q12choiceD" value="D">
<label class="form-check-label" for="q12choiceD">
<!------ Choice D------> 
D. 24
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(12)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q12answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 13------>
13. Which unit is best to use for measuring the smallest cells and organelles?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q13choosedanswer" id="q13choiceA" value="A">
<label class="form-check-label" for="q13choiceA">
<!------ Choice A------> 
A. Micrometre
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q13choosedanswer" id="q13choiceB" value="B">
<label class="form-check-label" for="q13choiceB">
<!------ Choice B------> 
B. Mililitre
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q13choosedanswer" id="q13choiceC" value="C">
<label class="form-check-label" for="q13choiceC">
<!------ Choice C------> 
C. Milimetre
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q13choosedanswer" id="q13choiceD" value="D">
<label class="form-check-label" for="q13choiceD">
<!------ Choice D------> 
D. Nanometre
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(13)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q13answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 14------>
14. Which energy rich organic compound contains adenine in its molecule?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q14choosedanswer" id="q14choiceA" value="A">
<label class="form-check-label" for="q14choiceA">
<!------ Choice A------> 
A. Lipid
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q14choosedanswer" id="q14choiceB" value="B">
<label class="form-check-label" for="q14choiceB">
<!------ Choice B------> 
B. Carbohydrate
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q14choosedanswer" id="q14choiceC" value="C">
<label class="form-check-label" for="q14choiceC">
<!------ Choice C------> 
C. Glucose
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q14choosedanswer" id="q14choiceD" value="D">
<label class="form-check-label" for="q14choiceD">
<!------ Choice D------> 
D. ATP
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(14)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q14answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 15------>
15. What are the most frequent causative agents of food poisoning?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q15choosedanswer" id="q15choiceA" value="A">
<label class="form-check-label" for="q15choiceA">
<!------ Choice A------> 
A. Bacteria
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q15choosedanswer" id="q15choiceB" value="B">
<label class="form-check-label" for="q15choiceB">
<!------ Choice B------> 
B. Protozoa
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q15choosedanswer" id="q15choiceC" value="C">
<label class="form-check-label" for="q15choiceC">
<!------ Choice C------> 
C. Viruses
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q15choosedanswer" id="q15choiceD" value="D">
<label class="form-check-label" for="q15choiceD">
<!------ Choice D------> 
D. Worms
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(15)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q15answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 16------>
16. What are the most likely causes of variations within species?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q16choosedanswer" id="q16choiceA" value="A">
<label class="form-check-label" for="q16choiceA">
<!------ Choice A------> 
A. Mitosis and asexual reproduction
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q16choosedanswer" id="q16choiceB" value="B">
<label class="form-check-label" for="q16choiceB">
<!------ Choice B------> 
B. Overpopulation and overproduction
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q16choosedanswer" id="q16choiceC" value="C">
<label class="form-check-label" for="q16choiceC">
<!------ Choice C------> 
C. Vegetative propagation and cloning
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q16choosedanswer" id="q16choiceD" value="D">
<label class="form-check-label" for="q16choiceD">
<!------ Choice D------> 
D. Mutations and sexual reproduction
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(16)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q16answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 17------>
17. In which hominid species did scientists find the smallest brain size(cranial capacity)?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q17choosedanswer" id="q17choiceA" value="A">
<label class="form-check-label" for="q17choiceA">
<!------ Choice A------> 
A. Homo sapiens
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q17choosedanswer" id="q17choiceB" value="B">
<label class="form-check-label" for="q17choiceB">
<!------ Choice B------> 
B. Homo habilis
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q17choosedanswer" id="q17choiceC" value="C">
<label class="form-check-label" for="q17choiceC">
<!------ Choice C------> 
C. Homo erectus
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q17choosedanswer" id="q17choiceD" value="D">
<label class="form-check-label" for="q17choiceD">
<!------ Choice D------> 
D. Homo neanderthalensis
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(17)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q17answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 18------>
18. Which of the following is NOT classified as a learned behaviour?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q18choosedanswer" id="q18choiceA" value="A">
<label class="form-check-label" for="q18choiceA">
<!------ Choice A------> 
A. Insight
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q18choosedanswer" id="q18choiceB" value="B">
<label class="form-check-label" for="q18choiceB">
<!------ Choice B------> 
B. Innate
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q18choosedanswer" id="q18choiceC" value="C">
<label class="form-check-label" for="q18choiceC">
<!------ Choice C------> 
C. Latent
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q18choosedanswer" id="q18choiceD" value="D">
<label class="form-check-label" for="q18choiceD">
<!------ Choice D------> 
D. Conditioned
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(18)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q18answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 19------>
19. What is the specialist in biology called if he/she studies fossils to generate new knowledge on the origin and evolution of living things of past geologic periods?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q19choosedanswer" id="q19choiceA" value="A">
<label class="form-check-label" for="q19choiceA">
<!------ Choice A------> 
A. Geneticist
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q19choosedanswer" id="q19choiceB" value="B">
<label class="form-check-label" for="q19choiceB">
<!------ Choice B------> 
B. Ecologist
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q19choosedanswer" id="q19choiceC" value="C">
<label class="form-check-label" for="q19choiceC">
<!------ Choice C------> 
C. Paleontologist
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q19choosedanswer" id="q19choiceD" value="D">
<label class="form-check-label" for="q19choiceD">
<!------ Choice D------> 
D. Comparative Biochemist
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(19)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q19answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 20------>
20. All proteins contain carbon, hydrogen, oxygen and what other element?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q20choosedanswer" id="q20choiceA" value="A">
<label class="form-check-label" for="q20choiceA">
<!------ Choice A------> 
A. Chlorine
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q20choosedanswer" id="q20choiceB" value="B">
<label class="form-check-label" for="q20choiceB">
<!------ Choice B------> 
B. Fiourine
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q20choosedanswer" id="q20choiceC" value="C">
<label class="form-check-label" for="q20choiceC">
<!------ Choice C------> 
C. Nitrogen
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q20choosedanswer" id="q20choiceD" value="D">
<label class="form-check-label" for="q20choiceD">
<!------ Choice D------> 
D. Sulphur
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(20)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q20answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 21------>
21. What makes unsaturated fatty acids different from saturated fatty acids?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q21choosedanswer" id="q21choiceA" value="A">
<label class="form-check-label" for="q21choiceA">
<!------ Choice A------> 
A. The presence of long chain of carbon.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q21choosedanswer" id="q21choiceB" value="B">
<label class="form-check-label" for="q21choiceB">
<!------ Choice B------> 
B. The presence of one or more double bonds.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q21choosedanswer" id="q21choiceC" value="C">
<label class="form-check-label" for="q21choiceC">
<!------ Choice C------> 
C. The presence of large number of hydrogen atoms.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q21choosedanswer" id="q21choiceD" value="D">
<label class="form-check-label" for="q21choiceD">
<!------ Choice D------> 
D. Their occurrence as solid at room temperature.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(21)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q21answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 22------>
22. Which of the following pairs of molecules are known to have catalytic activity?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q22choosedanswer" id="q22choiceA" value="A">
<label class="form-check-label" for="q22choiceA">
<!------ Choice A------> 
A. Lipids and proteins
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q22choosedanswer" id="q22choiceB" value="B">
<label class="form-check-label" for="q22choiceB">
<!------ Choice B------> 
B. Carbohydrates and proteins
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q22choosedanswer" id="q22choiceC" value="C">
<label class="form-check-label" for="q22choiceC">
<!------ Choice C------> 
C. Proteins and RNAs
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q22choosedanswer" id="q22choiceD" value="D">
<label class="form-check-label" for="q22choiceD">
<!------ Choice D------> 
D. Proteins and DNAs
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(22)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q22answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 23------>
23. If a suspension of a mixture of cellular organelles is spun in a centrifuge, which organelle settles to the bottom first?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q23choosedanswer" id="q23choiceA" value="A">
<label class="form-check-label" for="q23choiceA">
<!------ Choice A------> 
A. Mitochondria
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q23choosedanswer" id="q23choiceB" value="B">
<label class="form-check-label" for="q23choiceB">
<!------ Choice B------> 
B. Nuclei
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q23choosedanswer" id="q23choiceC" value="C">
<label class="form-check-label" for="q23choiceC">
<!------ Choice C------> 
C. Chloroplasts
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q23choosedanswer" id="q23choiceD" value="D">
<label class="form-check-label" for="q23choiceD">
<!------ Choice D------> 
D. Ribosomes
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(23)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q23answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 24------>
24. During chemiosmosis, what substance diffuses from one side to the other side of the membrane?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q24choosedanswer" id="q24choiceA" value="A">
<label class="form-check-label" for="q24choiceA">
<!------ Choice A------> 
A. Water molecules
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q24choosedanswer" id="q24choiceB" value="B">
<label class="form-check-label" for="q24choiceB">
<!------ Choice B------> 
B. Protons
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q24choosedanswer" id="q24choiceC" value="C">
<label class="form-check-label" for="q24choiceC">
<!------ Choice C------> 
C. Electrons
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q24choosedanswer" id="q24choiceD" value="D">
<label class="form-check-label" for="q24choiceD">
<!------ Choice D------> 
D. ATP molecules
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(24)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q24answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 25------>
25. Which of the following human diseases can be prevented by taking proper diets?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q25choosedanswer" id="q25choiceA" value="A">
<label class="form-check-label" for="q25choiceA">
<!------ Choice A------> 
A. Degenerative diseases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q25choosedanswer" id="q25choiceB" value="B">
<label class="form-check-label" for="q25choiceB">
<!------ Choice B------> 
B. Genetic diseases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q25choosedanswer" id="q25choiceC" value="C">
<label class="form-check-label" for="q25choiceC">
<!------ Choice C------> 
C. Social diseases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q25choosedanswer" id="q25choiceD" value="D">
<label class="form-check-label" for="q25choiceD">
<!------ Choice D------> 
D. Deficiency diseases
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(25)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q25answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 26------>
26. When two species are compared, which of the following sources of evidence is least informative about the degree of relationships between the species?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q26choosedanswer" id="q26choiceA" value="A">
<label class="form-check-label" for="q26choiceA">
<!------ Choice A------> 
A. Nucleotide sequence of DNAs
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q26choosedanswer" id="q26choiceB" value="B">
<label class="form-check-label" for="q26choiceB">
<!------ Choice B------> 
B. Amino acid sequences of proteins
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q26choosedanswer" id="q26choiceC" value="C">
<label class="form-check-label" for="q26choiceC">
<!------ Choice C------> 
C. Glucose sequence of polysaccharides
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q26choosedanswer" id="q26choiceD" value="D">
<label class="form-check-label" for="q26choiceD">
<!------ Choice D------> 
D. DNA-DNA hybridization
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(26)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q26answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 27------>
27. Which of the following practices does NOT normally transmit HIV?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q27choosedanswer" id="q27choiceA" value="A">
<label class="form-check-label" for="q27choiceA">
<!------ Choice A------> 
A. Sexual intercourse through anus
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q27choosedanswer" id="q27choiceB" value="B">
<label class="form-check-label" for="q27choiceB">
<!------ Choice B------> 
B. Sharing injection needles
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q27choosedanswer" id="q27choiceC" value="C">
<label class="form-check-label" for="q27choiceC">
<!------ Choice C------> 
C. Blood transfusion
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q27choosedanswer" id="q27choiceD" value="D">
<label class="form-check-label" for="q27choiceD">
<!------ Choice D------> 
D. Shaking hands
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(27)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q27answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 28------>
28. What is the important role played by microorganisms such as bacteria and fungi in the ecosystem?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q28choosedanswer" id="q28choiceA" value="A">
<label class="form-check-label" for="q28choiceA">
<!------ Choice A------> 
A. Antibiotic production
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q28choosedanswer" id="q28choiceB" value="B">
<label class="form-check-label" for="q28choiceB">
<!------ Choice B------> 
B. Recycling of nutrients
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q28choosedanswer" id="q28choiceC" value="C">
<label class="form-check-label" for="q28choiceC">
<!------ Choice C------> 
C. Forming organic substances
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q28choosedanswer" id="q28choiceD" value="D">
<label class="form-check-label" for="q28choiceD">
<!------ Choice D------> 
D. Supplying energy to the ecosystem
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(28)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q28answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 29------>
29. In which one of the following aspects is the tropical rainforest biome poor?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q29choosedanswer" id="q29choiceA" value="A">
<label class="form-check-label" for="q29choiceA">
<!------ Choice A------> 
A. Species diversity
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q29choosedanswer" id="q29choiceB" value="B">
<label class="form-check-label" for="q29choiceB">
<!------ Choice B------> 
B. Amount of sunlight
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q29choosedanswer" id="q29choiceC" value="C">
<label class="form-check-label" for="q29choiceC">
<!------ Choice C------> 
C. Annual precipitation
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q29choosedanswer" id="q29choiceD" value="D">
<label class="form-check-label" for="q29choiceD">
<!------ Choice D------> 
D. Soil fertility
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(29)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q29answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 30------>
30. If the size of a cell increases, which one of the following gets smaller?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q30choosedanswer" id="q30choiceA" value="A">
<label class="form-check-label" for="q30choiceA">
<!------ Choice A------> 
A. The volume of the cell
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q30choosedanswer" id="q30choiceB" value="B">
<label class="form-check-label" for="q30choiceB">
<!------ Choice B------> 
B. The surface area of the cell
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q30choosedanswer" id="q30choiceC" value="C">
<label class="form-check-label" for="q30choiceC">
<!------ Choice C------> 
C. Surface area to volume ratio of the cell
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q30choosedanswer" id="q30choiceD" value="D">
<label class="form-check-label" for="q30choiceD">
<!------ Choice D------> 
D. Volume to surface area ratio of the cell
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(30)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q30answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 31------>
31. Which of the following is NOT usually true as an ecological succession progresses to advanced seral stages?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q31choosedanswer" id="q31choiceA" value="A">
<label class="form-check-label" for="q31choiceA">
<!------ Choice A------> 
A. More ecological niches are formed
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q31choosedanswer" id="q31choiceB" value="B">
<label class="form-check-label" for="q31choiceB">
<!------ Choice B------> 
B. Species become more diverse
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q31choosedanswer" id="q31choiceC" value="C">
<label class="form-check-label" for="q31choiceC">
<!------ Choice C------> 
C. The depth of the soil increases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q31choosedanswer" id="q31choiceD" value="D">
<label class="form-check-label" for="q31choiceD">
<!------ Choice D------> 
D. Less populations are supported
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(31)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q31answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 32------>
32. One of the following is an important cause of gene mutation.
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q32choosedanswer" id="q32choiceA" value="A">
<label class="form-check-label" for="q32choiceA">
<!------ Choice A------> 
A. Old age
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q32choosedanswer" id="q32choiceB" value="B">
<label class="form-check-label" for="q32choiceB">
<!------ Choice B------> 
B. Alcoholic drinks
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q32choosedanswer" id="q32choiceC" value="C">
<label class="form-check-label" for="q32choiceC">
<!------ Choice C------> 
C. Smoking
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q32choosedanswer" id="q32choiceD" value="D">
<label class="form-check-label" for="q32choiceD">
<!------ Choice D------> 
D. Radiation
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(32)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q32answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 33------>
33. What is the reproductive isolating mechanism called if two species of frogs do not interbreed because they cannot understand the mating calls of one another?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q33choosedanswer" id="q33choiceA" value="A">
<label class="form-check-label" for="q33choiceA">
<!------ Choice A------> 
A. Seasonal isolation
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q33choosedanswer" id="q33choiceB" value="B">
<label class="form-check-label" for="q33choiceB">
<!------ Choice B------> 
B. Behavioral isolation
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q33choosedanswer" id="q33choiceC" value="C">
<label class="form-check-label" for="q33choiceC">
<!------ Choice C------> 
C. Temporal isolation
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q33choosedanswer" id="q33choiceD" value="D">
<label class="form-check-label" for="q33choiceD">
<!------ Choice D------> 
D. Isolation by distance
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(33)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q33answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 34------>
34. How many chromosomes do humans inherit from each of their parents?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q34choosedanswer" id="q34choiceA" value="A">
<label class="form-check-label" for="q34choiceA">
<!------ Choice A------> 
A. 23 chromosomes
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q34choosedanswer" id="q34choiceB" value="B">
<label class="form-check-label" for="q34choiceB">
<!------ Choice B------> 
B. 23 pairs of chromosomes
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q34choosedanswer" id="q34choiceC" value="C">
<label class="form-check-label" for="q34choiceC">
<!------ Choice C------> 
C. 46 chromosomes
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q34choosedanswer" id="q34choiceD" value="D">
<label class="form-check-label" for="q34choiceD">
<!------ Choice D------> 
D. 46 pairs of chromosomes
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(34)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q34answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 35------>
35. In which one of the four phases of population growth is the number of the population the highest?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q35choosedanswer" id="q35choiceA" value="A">
<label class="form-check-label" for="q35choiceA">
<!------ Choice A------> 
A. Lag phase
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q35choosedanswer" id="q35choiceB" value="B">
<label class="form-check-label" for="q35choiceB">
<!------ Choice B------> 
B. Log Phase
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q35choosedanswer" id="q35choiceC" value="C">
<label class="form-check-label" for="q35choiceC">
<!------ Choice C------> 
C. Constant phase
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q35choosedanswer" id="q35choiceD" value="D">
<label class="form-check-label" for="q35choiceD">
<!------ Choice D------> 
D. Decline phase
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(35)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q35answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 36------>
36. Which of the following is NOT true about the gene called SRY?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q36choosedanswer" id="q36choiceA" value="A">
<label class="form-check-label" for="q36choiceA">
<!------ Choice A------> 
A. It is found on the Y-chromosome.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q36choosedanswer" id="q36choiceB" value="B">
<label class="form-check-label" for="q36choiceB">
<!------ Choice B------> 
B. It determines maleness.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q36choosedanswer" id="q36choiceC" value="C">
<label class="form-check-label" for="q36choiceC">
<!------ Choice C------> 
C. Testes develop in its presence.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q36choosedanswer" id="q36choiceD" value="D">
<label class="form-check-label" for="q36choiceD">
<!------ Choice D------> 
D. Females have two copies of this gene.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(36)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q36answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 37------>
37. To which of the following groups do those bacteriophages that integrate their DNA into the chromosome of their bacterial host belong?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q37choosedanswer" id="q37choiceA" value="A">
<label class="form-check-label" for="q37choiceA">
<!------ Choice A------> 
A. Virulent viruses
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q37choosedanswer" id="q37choiceB" value="B">
<label class="form-check-label" for="q37choiceB">
<!------ Choice B------> 
B. Lytic viruses
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q37choosedanswer" id="q37choiceC" value="C">
<label class="form-check-label" for="q37choiceC">
<!------ Choice C------> 
C. Lysogenic viruses
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q37choosedanswer" id="q37choiceD" value="D">
<label class="form-check-label" for="q37choiceD">
<!------ Choice D------> 
D. Non-parasitic viruses
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(37)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q37answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 38------>
38. What do we call the learned behaviour if a mouse that had just escaped from the mouth of a cat jumped violently at a slight touch by a trivial object?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q38choosedanswer" id="q38choiceA" value="A">
<label class="form-check-label" for="q38choiceA">
<!------ Choice A------> 
A. Latent learning
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q38choosedanswer" id="q38choiceB" value="B">
<label class="form-check-label" for="q38choiceB">
<!------ Choice B------> 
B. Sensitization
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q38choosedanswer" id="q38choiceC" value="C">
<label class="form-check-label" for="q38choiceC">
<!------ Choice C------> 
C. Conditioning
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q38choosedanswer" id="q38choiceD" value="D">
<label class="form-check-label" for="q38choiceD">
<!------ Choice D------> 
D. Imprinting
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(38)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q38answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 39------>
39. Which of the following theories explains evolutionary changes of living things in terms of changes in their allele frequencies?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q39choosedanswer" id="q39choiceA" value="A">
<label class="form-check-label" for="q39choiceA">
<!------ Choice A------> 
A. Darwin's natural selection
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q39choosedanswer" id="q39choiceB" value="B">
<label class="form-check-label" for="q39choiceB">
<!------ Choice B------> 
B. Spontaneous generation
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q39choosedanswer" id="q39choiceC" value="C">
<label class="form-check-label" for="q39choiceC">
<!------ Choice C------> 
C. Inheritance of acquired characteristics
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q39choosedanswer" id="q39choiceD" value="D">
<label class="form-check-label" for="q39choiceD">
<!------ Choice D------> 
D. Neo-Darwinism
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(39)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q39answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 40------>
40. Which of the following is an important function of the Golgi apparatus?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q40choosedanswer" id="q40choiceA" value="A">
<label class="form-check-label" for="q40choiceA">
<!------ Choice A------> 
A. Protein synthesis
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q40choosedanswer" id="q40choiceB" value="B">
<label class="form-check-label" for="q40choiceB">
<!------ Choice B------> 
B. Packaging of proteins for export out of the cell
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q40choosedanswer" id="q40choiceC" value="C">
<label class="form-check-label" for="q40choiceC">
<!------ Choice C------> 
C. Removing of debris from cell
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q40choosedanswer" id="q40choiceD" value="D">
<label class="form-check-label" for="q40choiceD">
<!------ Choice D------> 
D. Storage of waste materials not needed by the cell
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(40)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q40answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 41------>
41. Which of the following field equipment is used to determine an exact location of a place?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q41choosedanswer" id="q41choiceA" value="A">
<label class="form-check-label" for="q41choiceA">
<!------ Choice A------> 
A. Theodolite
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q41choosedanswer" id="q41choiceB" value="B">
<label class="form-check-label" for="q41choiceB">
<!------ Choice B------> 
B. Global positioning system
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q41choosedanswer" id="q41choiceC" value="C">
<label class="form-check-label" for="q41choiceC">
<!------ Choice C------> 
C. Field microscope
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q41choosedanswer" id="q41choiceD" value="D">
<label class="form-check-label" for="q41choiceD">
<!------ Choice D------> 
D. Field pH kit
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(41)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q41answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 42------>
42. The sheep 'dolly' is an example of which biotechnological manipulation of animals by human?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q42choosedanswer" id="q42choiceA" value="A">
<label class="form-check-label" for="q42choiceA">
<!------ Choice A------> 
A. Transgenic animal
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q42choosedanswer" id="q42choiceB" value="B">
<label class="form-check-label" for="q42choiceB">
<!------ Choice B------> 
B. Genetically engineered animal
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q42choosedanswer" id="q42choiceC" value="C">
<label class="form-check-label" for="q42choiceC">
<!------ Choice C------> 
C. Cloned animal
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q42choosedanswer" id="q42choiceD" value="D">
<label class="form-check-label" for="q42choiceD">
<!------ Choice D------> 
D. Hybrid animal
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(42)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q42answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 43------>
43. Among the following, which one is the best criterion to show that two populations belong to same species?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q43choosedanswer" id="q43choiceA" value="A">
<label class="form-check-label" for="q43choiceA">
<!------ Choice A------> 
A. Morphological similarity
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q43choosedanswer" id="q43choiceB" value="B">
<label class="form-check-label" for="q43choiceB">
<!------ Choice B------> 
B. Physiologically similarity
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q43choosedanswer" id="q43choiceC" value="C">
<label class="form-check-label" for="q43choiceC">
<!------ Choice C------> 
C. Inhabiting the same geographic area
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q43choosedanswer" id="q43choiceD" value="D">
<label class="form-check-label" for="q43choiceD">
<!------ Choice D------> 
D. Production of fertile offspring
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(43)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q43answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 44------>
44. In the process of the evolution of life on earth, which of the following four processes evolved last?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q44choosedanswer" id="q44choiceA" value="A">
<label class="form-check-label" for="q44choiceA">
<!------ Choice A------> 
A. Photosynthesis
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q44choosedanswer" id="q44choiceB" value="B">
<label class="form-check-label" for="q44choiceB">
<!------ Choice B------> 
B. Aerobic respiration
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q44choosedanswer" id="q44choiceC" value="C">
<label class="form-check-label" for="q44choiceC">
<!------ Choice C------> 
C. Chemosynthesis
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q44choosedanswer" id="q44choiceD" value="D">
<label class="form-check-label" for="q44choiceD">
<!------ Choice D------> 
D. Photo-autotrophism
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(44)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q44answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 45------>
45. What is a theory in biology?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q45choosedanswer" id="q45choiceA" value="A">
<label class="form-check-label" for="q45choiceA">
<!------ Choice A------> 
A. The outcome of an experiment
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q45choosedanswer" id="q45choiceB" value="B">
<label class="form-check-label" for="q45choiceB">
<!------ Choice B------> 
B. A proof that shows the hypothesis is true
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q45choosedanswer" id="q45choiceC" value="C">
<label class="form-check-label" for="q45choiceC">
<!------ Choice C------> 
C. A hypothesis supported by experiments and/or observations
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q45choosedanswer" id="q45choiceD" value="D">
<label class="form-check-label" for="q45choiceD">
<!------ Choice D------> 
D. An opinion or educated guess resulting from observations
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(45)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q45answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 46------>
46. For which of the following is a theodolite used in biology education?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q46choosedanswer" id="q46choiceA" value="A">
<label class="form-check-label" for="q46choiceA">
<!------ Choice A------> 
A. Measuring the height of trees.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q46choosedanswer" id="q46choiceB" value="B">
<label class="form-check-label" for="q46choiceB">
<!------ Choice B------> 
B. Recording positions where a species is found.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q46choosedanswer" id="q46choiceC" value="C">
<label class="form-check-label" for="q46choiceC">
<!------ Choice C------> 
C. Measuring the rate of flow of water in a cell.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q46choosedanswer" id="q46choiceD" value="D">
<label class="form-check-label" for="q46choiceD">
<!------ Choice D------> 
D. Measuring the pH of water or soil.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(46)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q46answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 47------>
47. What is the name of the sugar found in milk?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q47choosedanswer" id="q47choiceA" value="A">
<label class="form-check-label" for="q47choiceA">
<!------ Choice A------> 
A. Glucose
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q47choosedanswer" id="q47choiceB" value="B">
<label class="form-check-label" for="q47choiceB">
<!------ Choice B------> 
B. Lactose
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q47choosedanswer" id="q47choiceC" value="C">
<label class="form-check-label" for="q47choiceC">
<!------ Choice C------> 
C. Maltese
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q47choosedanswer" id="q47choiceD" value="D">
<label class="form-check-label" for="q47choiceD">
<!------ Choice D------> 
D. Sucrose
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(47)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q47answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 48------>
48. To which class of enzymes do the digestive enzymes belong?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q48choosedanswer" id="q48choiceA" value="A">
<label class="form-check-label" for="q48choiceA">
<!------ Choice A------> 
A. Esterases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q48choosedanswer" id="q48choiceB" value="B">
<label class="form-check-label" for="q48choiceB">
<!------ Choice B------> 
B. Transferases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q48choosedanswer" id="q48choiceC" value="C">
<label class="form-check-label" for="q48choiceC">
<!------ Choice C------> 
C. Hydrolases
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q48choosedanswer" id="q48choiceD" value="D">
<label class="form-check-label" for="q48choiceD">
<!------ Choice D------> 
D. lsomerases
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(48)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q48answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 49------>
49. In which of the following features are eukaryotic cells distinguished from prokaryotic cells?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q49choosedanswer" id="q49choiceA" value="A">
<label class="form-check-label" for="q49choiceA">
<!------ Choice A------> 
A. They have mitochondria.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q49choosedanswer" id="q49choiceB" value="B">
<label class="form-check-label" for="q49choiceB">
<!------ Choice B------> 
B. Their nuclei lack membranes.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q49choosedanswer" id="q49choiceC" value="C">
<label class="form-check-label" for="q49choiceC">
<!------ Choice C------> 
C. They have no DNA.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q49choosedanswer" id="q49choiceD" value="D">
<label class="form-check-label" for="q49choiceD">
<!------ Choice D------> 
D. They have smaller ribosomes.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(49)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q49answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 50------>
50. What will happen if human red blood cells are kept in a hypotonic solution?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q50choosedanswer" id="q50choiceA" value="A">
<label class="form-check-label" for="q50choiceA">
<!------ Choice A------> 
A. Lose water by osmosis and burst.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q50choosedanswer" id="q50choiceB" value="B">
<label class="form-check-label" for="q50choiceB">
<!------ Choice B------> 
B. Lose water by osmosis and shrink.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q50choosedanswer" id="q50choiceC" value="C">
<label class="form-check-label" for="q50choiceC">
<!------ Choice C------> 
C. Take in water by osmosis, swell and burst.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q50choosedanswer" id="q50choiceD" value="D">
<label class="form-check-label" for="q50choiceD">
<!------ Choice D------> 
D. Take in water by osmosis, swell and remain turgid.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(50)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q50answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 51------>
51. In which type of solution is the water potential more negative than in the cells?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q51choosedanswer" id="q51choiceA" value="A">
<label class="form-check-label" for="q51choiceA">
<!------ Choice A------> 
A. Hypotonic
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q51choosedanswer" id="q51choiceB" value="B">
<label class="form-check-label" for="q51choiceB">
<!------ Choice B------> 
B. Hypertonic
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q51choosedanswer" id="q51choiceC" value="C">
<label class="form-check-label" for="q51choiceC">
<!------ Choice C------> 
C. Isotonic
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q51choosedanswer" id="q51choiceD" value="D">
<label class="form-check-label" for="q51choiceD">
<!------ Choice D------> 
D. Equal solute and solvent concentration
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(51)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q51answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 52------>
52. Which of the following paired organelles are membrane-bound?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q52choosedanswer" id="q52choiceA" value="A">
<label class="form-check-label" for="q52choiceA">
<!------ Choice A------> 
A. Rihosomes and peroxisomes
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q52choosedanswer" id="q52choiceB" value="B">
<label class="form-check-label" for="q52choiceB">
<!------ Choice B------> 
B. Chloroplasts and ribosomes
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q52choosedanswer" id="q52choiceC" value="C">
<label class="form-check-label" for="q52choiceC">
<!------ Choice C------> 
C. Mitochondria and ribosomes
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q52choosedanswer" id="q52choiceD" value="D">
<label class="form-check-label" for="q52choiceD">
<!------ Choice D------> 
D. Chloroplasts and mitochondria
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(52)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q52answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 53------>
53. Most cell membranes are primarily composed of which compounds?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q53choosedanswer" id="q53choiceA" value="A">
<label class="form-check-label" for="q53choiceA">
<!------ Choice A------> 
A. Proteins and lipids
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q53choosedanswer" id="q53choiceB" value="B">
<label class="form-check-label" for="q53choiceB">
<!------ Choice B------> 
B. DNA and ATP
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q53choosedanswer" id="q53choiceC" value="C">
<label class="form-check-label" for="q53choiceC">
<!------ Choice C------> 
C. Chitin and starch
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q53choosedanswer" id="q53choiceD" value="D">
<label class="form-check-label" for="q53choiceD">
<!------ Choice D------> 
D. Nucleotides and amino acids
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(53)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q53answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 54------>
54. Which group of micro-organisms causes the disease known as athlete's foot?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q54choosedanswer" id="q54choiceA" value="A">
<label class="form-check-label" for="q54choiceA">
<!------ Choice A------> 
A. Bacteria
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q54choosedanswer" id="q54choiceB" value="B">
<label class="form-check-label" for="q54choiceB">
<!------ Choice B------> 
B. Fungi
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q54choosedanswer" id="q54choiceC" value="C">
<label class="form-check-label" for="q54choiceC">
<!------ Choice C------> 
C. Protozoa
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q54choosedanswer" id="q54choiceD" value="D">
<label class="form-check-label" for="q54choiceD">
<!------ Choice D------> 
D. Viruses
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(54)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q54answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 55------>
55. Choose the one that is different from all the others.
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q55choosedanswer" id="q55choiceA" value="A">
<label class="form-check-label" for="q55choiceA">
<!------ Choice A------> 
A. Genetically modified organisms
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q55choosedanswer" id="q55choiceB" value="B">
<label class="form-check-label" for="q55choiceB">
<!------ Choice B------> 
B. Genetically engineered organisms
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q55choosedanswer" id="q55choiceC" value="C">
<label class="form-check-label" for="q55choiceC">
<!------ Choice C------> 
C. Pathogenic organisms
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q55choosedanswer" id="q55choiceD" value="D">
<label class="form-check-label" for="q55choiceD">
<!------ Choice D------> 
D. Transgenic organisms
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(55)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q55answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 56------>
56. Under which of the following groups can the fungi be more conveniently placed?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q56choosedanswer" id="q56choiceA" value="A">
<label class="form-check-label" for="q56choiceA">
<!------ Choice A------> 
A. Autotrophs
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q56choosedanswer" id="q56choiceB" value="B">
<label class="form-check-label" for="q56choiceB">
<!------ Choice B------> 
B. Heterotrophs
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q56choosedanswer" id="q56choiceC" value="C">
<label class="form-check-label" for="q56choiceC">
<!------ Choice C------> 
C. Prokaryotes
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q56choosedanswer" id="q56choiceD" value="D">
<label class="form-check-label" for="q56choiceD">
<!------ Choice D------> 
D. Plants
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(56)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q56answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 57------>
57. What is the type of community called when it has reached the final and most complex stage of a succession?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q57choosedanswer" id="q57choiceA" value="A">
<label class="form-check-label" for="q57choiceA">
<!------ Choice A------> 
A. Pioneer Community
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q57choosedanswer" id="q57choiceB" value="B">
<label class="form-check-label" for="q57choiceB">
<!------ Choice B------> 
B. Seral Community
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q57choosedanswer" id="q57choiceC" value="C">
<label class="form-check-label" for="q57choiceC">
<!------ Choice C------> 
C. Climax Community
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q57choosedanswer" id="q57choiceD" value="D">
<label class="form-check-label" for="q57choiceD">
<!------ Choice D------> 
D. Secondary Community
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(57)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q57answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 58------>
58. Which of the following is an ecosystem?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q58choosedanswer" id="q58choiceA" value="A">
<label class="form-check-label" for="q58choiceA">
<!------ Choice A------> 
A. A Tropical Rainforest
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q58choosedanswer" id="q58choiceB" value="B">
<label class="form-check-label" for="q58choiceB">
<!------ Choice B------> 
B. The African continent
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q58choosedanswer" id="q58choiceC" value="C">
<label class="form-check-label" for="q58choiceC">
<!------ Choice C------> 
C. All the organisms in a given area
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q58choosedanswer" id="q58choiceD" value="D">
<label class="form-check-label" for="q58choiceD">
<!------ Choice D------> 
D. The non-living components of an environment
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(58)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q58answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 59------>
59. Which of the following crops is considered to be the best choice for a better balance of essential amino acids as a human diet?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q59choosedanswer" id="q59choiceA" value="A">
<label class="form-check-label" for="q59choiceA">
<!------ Choice A------> 
A. Maize
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q59choosedanswer" id="q59choiceB" value="B">
<label class="form-check-label" for="q59choiceB">
<!------ Choice B------> 
B. Quinoa
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q59choosedanswer" id="q59choiceC" value="C">
<label class="form-check-label" for="q59choiceC">
<!------ Choice C------> 
C. Rice
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q59choosedanswer" id="q59choiceD" value="D">
<label class="form-check-label" for="q59choiceD">
<!------ Choice D------> 
D. Wheat
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(59)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q59answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 60------>
60. What is the main reason for the high species richness of plants and mammals observed in Ethiopia?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q60choosedanswer" id="q60choiceA" value="A">
<label class="form-check-label" for="q60choiceA">
<!------ Choice A------> 
A. Lack of predators
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q60choosedanswer" id="q60choiceB" value="B">
<label class="form-check-label" for="q60choiceB">
<!------ Choice B------> 
B. Lack of disturbance
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q60choosedanswer" id="q60choiceC" value="C">
<label class="form-check-label" for="q60choiceC">
<!------ Choice C------> 
C. Presence of several biomes within the country
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q60choosedanswer" id="q60choiceD" value="D">
<label class="form-check-label" for="q60choiceD">
<!------ Choice D------> 
D. Effcient management of the ecological resources
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(60)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q60answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 61------>
61. In which of the following are flowers and fruits found?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q61choosedanswer" id="q61choiceA" value="A">
<label class="form-check-label" for="q61choiceA">
<!------ Choice A------> 
A. Ferns and relatives
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q61choosedanswer" id="q61choiceB" value="B">
<label class="form-check-label" for="q61choiceB">
<!------ Choice B------> 
B. Gymnosperms and ferns
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q61choosedanswer" id="q61choiceC" value="C">
<label class="form-check-label" for="q61choiceC">
<!------ Choice C------> 
C. Mosses and conifers
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q61choosedanswer" id="q61choiceD" value="D">
<label class="form-check-label" for="q61choiceD">
<!------ Choice D------> 
D. Monocots and dicots
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(61)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q61answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 62------>
62. In a cross between heterozygotes what proportion is expected to be homozygous recessive?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q62choosedanswer" id="q62choiceA" value="A">
<label class="form-check-label" for="q62choiceA">
<!------ Choice A------> 
A. 25%
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q62choosedanswer" id="q62choiceB" value="B">
<label class="form-check-label" for="q62choiceB">
<!------ Choice B------> 
B. 50%
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q62choosedanswer" id="q62choiceC" value="C">
<label class="form-check-label" for="q62choiceC">
<!------ Choice C------> 
C. 75%
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q62choosedanswer" id="q62choiceD" value="D">
<label class="form-check-label" for="q62choiceD">
<!------ Choice D------> 
D. 100%
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(62)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q62answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 63------>
63. Gene silencing is the function of one of the following molecules.
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q63choosedanswer" id="q63choiceA" value="A">
<label class="form-check-label" for="q63choiceA">
<!------ Choice A------> 
A. dsRNA
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q63choosedanswer" id="q63choiceB" value="B">
<label class="form-check-label" for="q63choiceB">
<!------ Choice B------> 
B. mRNA
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q63choosedanswer" id="q63choiceC" value="C">
<label class="form-check-label" for="q63choiceC">
<!------ Choice C------> 
C. siRNA
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q63choosedanswer" id="q63choiceD" value="D">
<label class="form-check-label" for="q63choiceD">
<!------ Choice D------> 
D. tRNA
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(63)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q63answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 64------>
64. Which process is held responsible for chronic myelogenous leukemia?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q64choosedanswer" id="q64choiceA" value="A">
<label class="form-check-label" for="q64choiceA">
<!------ Choice A------> 
A. Translocation
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q64choosedanswer" id="q64choiceB" value="B">
<label class="form-check-label" for="q64choiceB">
<!------ Choice B------> 
B. Translation
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q64choosedanswer" id="q64choiceC" value="C">
<label class="form-check-label" for="q64choiceC">
<!------ Choice C------> 
C. Transcription
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q64choosedanswer" id="q64choiceD" value="D">
<label class="form-check-label" for="q64choiceD">
<!------ Choice D------> 
D. Duplication
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(64)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q64answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 65------>
65. Two parents of genotype Aa are cross-bred. The alleles show complete dominance. What proportion of the offspring will phenotypioally look like their parents?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q65choosedanswer" id="q65choiceA" value="A">
<label class="form-check-label" for="q65choiceA">
<!------ Choice A------> 
A. 0
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q65choosedanswer" id="q65choiceB" value="B">
<label class="form-check-label" for="q65choiceB">
<!------ Choice B------> 
B. 1/4
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q65choosedanswer" id="q65choiceC" value="C">
<label class="form-check-label" for="q65choiceC">
<!------ Choice C------> 
C. 1/2
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q65choosedanswer" id="q65choiceD" value="D">
<label class="form-check-label" for="q65choiceD">
<!------ Choice D------> 
D. 3/4
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(65)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q65answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 66------>
66. Which one of the following concepts contains all the others?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q66choosedanswer" id="q66choiceA" value="A">
<label class="form-check-label" for="q66choiceA">
<!------ Choice A------> 
A. Species
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q66choosedanswer" id="q66choiceB" value="B">
<label class="form-check-label" for="q66choiceB">
<!------ Choice B------> 
B. Genus
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q66choosedanswer" id="q66choiceC" value="C">
<label class="form-check-label" for="q66choiceC">
<!------ Choice C------> 
C. Population
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q66choosedanswer" id="q66choiceD" value="D">
<label class="form-check-label" for="q66choiceD">
<!------ Choice D------> 
D. Community
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(66)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q66answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 67------>
67. Choose the one that is NOT a requirement of all living things.
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q67choosedanswer" id="q67choiceA" value="A">
<label class="form-check-label" for="q67choiceA">
<!------ Choice A------> 
A. Ability to think
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q67choosedanswer" id="q67choiceB" value="B">
<label class="form-check-label" for="q67choiceB">
<!------ Choice B------> 
B. Organization of parts
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q67choosedanswer" id="q67choiceC" value="C">
<label class="form-check-label" for="q67choiceC">
<!------ Choice C------> 
C. Response to the stimuli
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q67choosedanswer" id="q67choiceD" value="D">
<label class="form-check-label" for="q67choiceD">
<!------ Choice D------> 
D. Maintenance of internal constancy
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(67)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q67answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 68------>
68. What is the advantage of using HAART (highly active anti- retroviral therapy) for the treatment of HIV?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q68choosedanswer" id="q68choiceA" value="A">
<label class="form-check-label" for="q68choiceA">
<!------ Choice A------> 
A. It gives a lasting immunity to HIV,
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q68choosedanswer" id="q68choiceB" value="B">
<label class="form-check-label" for="q68choiceB">
<!------ Choice B------> 
B. It prevents mutation of HIV.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q68choosedanswer" id="q68choiceC" value="C">
<label class="form-check-label" for="q68choiceC">
<!------ Choice C------> 
C. It prevents reinfection by HIV.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q68choosedanswer" id="q68choiceD" value="D">
<label class="form-check-label" for="q68choiceD">
<!------ Choice D------> 
D. It helps to break the life cycle of HIV.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(68)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q68answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 69------>
69. Which of the following characteristics can show the evolutionary relationships among organisms?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q69choosedanswer" id="q69choiceA" value="A">
<label class="form-check-label" for="q69choiceA">
<!------ Choice A------> 
A. Structures having similar functions
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q69choosedanswer" id="q69choiceB" value="B">
<label class="form-check-label" for="q69choiceB">
<!------ Choice B------> 
B. Structures having same size
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q69choosedanswer" id="q69choiceC" value="C">
<label class="form-check-label" for="q69choiceC">
<!------ Choice C------> 
C. Structures having common origin
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q69choosedanswer" id="q69choiceD" value="D">
<label class="form-check-label" for="q69choiceD">
<!------ Choice D------> 
D. Structures having different origins
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(69)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q69answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 70------>
70. The group of the Ethiopian wolf which does NOT contribute to territory marking with their urine containing pheromones is
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q70choosedanswer" id="q70choiceA" value="A">
<label class="form-check-label" for="q70choiceA">
<!------ Choice A------> 
A. Adult males
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q70choosedanswer" id="q70choiceB" value="B">
<label class="form-check-label" for="q70choiceB">
<!------ Choice B------> 
B. Adult females
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q70choosedanswer" id="q70choiceC" value="C">
<label class="form-check-label" for="q70choiceC">
<!------ Choice C------> 
C. Sub-adult males
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q70choosedanswer" id="q70choiceD" value="D">
<label class="form-check-label" for="q70choiceD">
<!------ Choice D------> 
D. Sub-adult females
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(70)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q70answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 71------>
71. What can one conclude about the contents of the foodstuff if a mixture of Benedict solution and a foodstuff remain blue after heating?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q71choosedanswer" id="q71choiceA" value="A">
<label class="form-check-label" for="q71choiceA">
<!------ Choice A------> 
A. It contains proteins.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q71choosedanswer" id="q71choiceB" value="B">
<label class="form-check-label" for="q71choiceB">
<!------ Choice B------> 
B. It lacks starch.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q71choosedanswer" id="q71choiceC" value="C">
<label class="form-check-label" for="q71choiceC">
<!------ Choice C------> 
C. It contains fats.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q71choosedanswer" id="q71choiceD" value="D">
<label class="form-check-label" for="q71choiceD">
<!------ Choice D------> 
D. It lacks reducing sugar.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(71)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q71answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 72------>
72. Which of the following types of enzyme inhibitions can be removed when the end product of the metabolic pathway is depleted?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q72choosedanswer" id="q72choiceA" value="A">
<label class="form-check-label" for="q72choiceA">
<!------ Choice A------> 
A. Allosteric inhibition
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q72choosedanswer" id="q72choiceB" value="B">
<label class="form-check-label" for="q72choiceB">
<!------ Choice B------> 
B. Non-reversible inhibition
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q72choosedanswer" id="q72choiceC" value="C">
<label class="form-check-label" for="q72choiceC">
<!------ Choice C------> 
C. Competitive inhibition
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q72choosedanswer" id="q72choiceD" value="D">
<label class="form-check-label" for="q72choiceD">
<!------ Choice D------> 
D. Reversible competitive inhibition
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(72)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q72answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 73------>
73. If red blood cells shrink when placed in a certain solution, what is the strength of the solution relative to the strength of the protoplasm of the cells?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q73choosedanswer" id="q73choiceA" value="A">
<label class="form-check-label" for="q73choiceA">
<!------ Choice A------> 
A. Hypotonic
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q73choosedanswer" id="q73choiceB" value="B">
<label class="form-check-label" for="q73choiceB">
<!------ Choice B------> 
B. Isotonic
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q73choosedanswer" id="q73choiceC" value="C">
<label class="form-check-label" for="q73choiceC">
<!------ Choice C------> 
C. Hypertonic
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q73choosedanswer" id="q73choiceD" value="D">
<label class="form-check-label" for="q73choiceD">
<!------ Choice D------> 
D. Isoosmotic
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(73)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q73answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 74------>
74. Which of the following is NOT true about photosystem-II?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q74choosedanswer" id="q74choiceA" value="A">
<label class="form-check-label" for="q74choiceA">
<!------ Choice A------> 
A. Its reaction center molecule is P680.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q74choosedanswer" id="q74choiceB" value="B">
<label class="form-check-label" for="q74choiceB">
<!------ Choice B------> 
B. It passes its excited electrons to Photosystem-I.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q74choosedanswer" id="q74choiceC" value="C">
<label class="form-check-label" for="q74choiceC">
<!------ Choice C------> 
C. The energy lost from its excited electrons reduces NADP.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q74choosedanswer" id="q74choiceD" value="D">
<label class="form-check-label" for="q74choiceD">
<!------ Choice D------> 
D. It replenishes its lost electrons from photolysis of water.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(74)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q74answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 75------>
75. On which one of the following principles are most of the anti-HIV drugs currently in use working?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q75choosedanswer" id="q75choiceA" value="A">
<label class="form-check-label" for="q75choiceA">
<!------ Choice A------> 
A. Inhibition of enzyme action
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q75choosedanswer" id="q75choiceB" value="B">
<label class="form-check-label" for="q75choiceB">
<!------ Choice B------> 
B. Degradation of Viral RNA
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q75choosedanswer" id="q75choiceC" value="C">
<label class="form-check-label" for="q75choiceC">
<!------ Choice C------> 
C. Digesting of Viral particles
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q75choosedanswer" id="q75choiceD" value="D">
<label class="form-check-label" for="q75choiceD">
<!------ Choice D------> 
D. Phagocytosis of the virus
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(75)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q75answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 76------>
76. Among the following mating, where the ABO blood genotypes of the partners are shown, identify the mating in which all the children will have the same blood type.
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q76choosedanswer" id="q76choiceA" value="A">
<label class="form-check-label" for="q76choiceA">
<!------ Choice A------> 
A. AO x BO
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q76choosedanswer" id="q76choiceB" value="B">
<label class="form-check-label" for="q76choiceB">
<!------ Choice B------> 
B. AA x OO
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q76choosedanswer" id="q76choiceC" value="C">
<label class="form-check-label" for="q76choiceC">
<!------ Choice C------> 
C. AB x BO
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q76choosedanswer" id="q76choiceD" value="D">
<label class="form-check-label" for="q76choiceD">
<!------ Choice D------> 
D. BB x AO
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(76)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q76answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 77------>
77. If a new mutant allele arises in a certain population, which of the following factors determines if the allele is going to be adaptive or non-adaptive?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q77choosedanswer" id="q77choiceA" value="A">
<label class="form-check-label" for="q77choiceA">
<!------ Choice A------> 
A. The environment in which the population lives.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q77choosedanswer" id="q77choiceB" value="B">
<label class="form-check-label" for="q77choiceB">
<!------ Choice B------> 
B. The rate at which the gene mutates.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q77choosedanswer" id="q77choiceC" value="C">
<label class="form-check-label" for="q77choiceC">
<!------ Choice C------> 
C. The population in which the gene is found.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q77choosedanswer" id="q77choiceD" value="D">
<label class="form-check-label" for="q77choiceD">
<!------ Choice D------> 
D. The use and disuse of the gene by the population.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(77)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q77answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 78------>
78. Which of the following is the correct route that connects a stimulus and a response?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q78choosedanswer" id="q78choiceA" value="A">
<label class="form-check-label" for="q78choiceA">
<!------ Choice A------> 
A. Receptor → coordinator → effector
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q78choosedanswer" id="q78choiceB" value="B">
<label class="form-check-label" for="q78choiceB">
<!------ Choice B------> 
B. Coordinator → receptor → effector
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q78choosedanswer" id="q78choiceC" value="C">
<label class="form-check-label" for="q78choiceC">
<!------ Choice C------> 
C. Receptor → effector → coordinator
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q78choosedanswer" id="q78choiceD" value="D">
<label class="form-check-label" for="q78choiceD">
<!------ Choice D------> 
D. Effector → receptor → coordinator
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(78)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q78answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 79------>
79. Which of the following contents RNA differs from DNA?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q79choosedanswer" id="q79choiceA" value="A">
<label class="form-check-label" for="q79choiceA">
<!------ Choice A------> 
A. Deoxyribose and guanine
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q79choosedanswer" id="q79choiceB" value="B">
<label class="form-check-label" for="q79choiceB">
<!------ Choice B------> 
B. Ribose and uracil
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q79choosedanswer" id="q79choiceC" value="C">
<label class="form-check-label" for="q79choiceC">
<!------ Choice C------> 
C. Ribose and thymine
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q79choosedanswer" id="q79choiceD" value="D">
<label class="form-check-label" for="q79choiceD">
<!------ Choice D------> 
D. Phosphate and adenine
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(79)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q79answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 80------>
80. Which of the following cell types can be rich in lysosomes?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q80choosedanswer" id="q80choiceA" value="A">
<label class="form-check-label" for="q80choiceA">
<!------ Choice A------> 
A. Red blood cells
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q80choosedanswer" id="q80choiceB" value="B">
<label class="form-check-label" for="q80choiceB">
<!------ Choice B------> 
B. Nerve cells
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q80choosedanswer" id="q80choiceC" value="C">
<label class="form-check-label" for="q80choiceC">
<!------ Choice C------> 
C. Phagocytic cells
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q80choosedanswer" id="q80choiceD" value="D">
<label class="form-check-label" for="q80choiceD">
<!------ Choice D------> 
D. Muscle cells
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(80)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q80answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 81------>
81. What is the importance of chemiosmosis in photosynthesis and cellular respiration?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q81choosedanswer" id="q81choiceA" value="A">
<label class="form-check-label" for="q81choiceA">
<!------ Choice A------> 
A. Splitting of water molecule
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q81choosedanswer" id="q81choiceB" value="B">
<label class="form-check-label" for="q81choiceB">
<!------ Choice B------> 
B. Operating the proton pump
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q81choosedanswer" id="q81choiceC" value="C">
<label class="form-check-label" for="q81choiceC">
<!------ Choice C------> 
C. Combining hydrogen and carbon
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q81choosedanswer" id="q81choiceD" value="D">
<label class="form-check-label" for="q81choiceD">
<!------ Choice D------> 
D. Synthesizing ATP
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(81)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q81answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 82------>
82. If the age pyramid of a certain country is narrowing at the base, what does this tell about the trend of the population size of the country? The population size is:
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q82choosedanswer" id="q82choiceA" value="A">
<label class="form-check-label" for="q82choiceA">
<!------ Choice A------> 
A. declining.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q82choosedanswer" id="q82choiceB" value="B">
<label class="form-check-label" for="q82choiceB">
<!------ Choice B------> 
B. growing fast
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q82choosedanswer" id="q82choiceC" value="C">
<label class="form-check-label" for="q82choiceC">
<!------ Choice C------> 
C. increasing slowly.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q82choosedanswer" id="q82choiceD" value="D">
<label class="form-check-label" for="q82choiceD">
<!------ Choice D------> 
D. stabilising.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(82)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q82answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 83------>
83. Suppose the amino acid coding region in a mRNA is 1200 nucleotides long, how long is the protein in terms of amino acid number?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q83choosedanswer" id="q83choiceA" value="A">
<label class="form-check-label" for="q83choiceA">
<!------ Choice A------> 
A. 1200 amino acids
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q83choosedanswer" id="q83choiceB" value="B">
<label class="form-check-label" for="q83choiceB">
<!------ Choice B------> 
B. 600 amino acids
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q83choosedanswer" id="q83choiceC" value="C">
<label class="form-check-label" for="q83choiceC">
<!------ Choice C------> 
C. 400 amino acids
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q83choosedanswer" id="q83choiceD" value="D">
<label class="form-check-label" for="q83choiceD">
<!------ Choice D------> 
D. 300 amino acids
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(83)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q83answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 84------>
84. If a new anti-HIV drug is to be developed to prevent the virus from entering the host cell, which one of the following processes should the drug target?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q84choosedanswer" id="q84choiceA" value="A">
<label class="form-check-label" for="q84choiceA">
<!------ Choice A------> 
A. Reverse transcription
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q84choosedanswer" id="q84choiceB" value="B">
<label class="form-check-label" for="q84choiceB">
<!------ Choice B------> 
B. Binding of Gp120 and CD4
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q84choosedanswer" id="q84choiceC" value="C">
<label class="form-check-label" for="q84choiceC">
<!------ Choice C------> 
C. Integration of viral DNA into host DNA
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q84choosedanswer" id="q84choiceD" value="D">
<label class="form-check-label" for="q84choiceD">
<!------ Choice D------> 
D. Assembly of viral parts into a whole Virus
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(84)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q84answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 85------>
85. Which one of the following factors is NOT important for evolutionary change of a population?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q85choosedanswer" id="q85choiceA" value="A">
<label class="form-check-label" for="q85choiceA">
<!------ Choice A------> 
A. Over reproduction
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q85choosedanswer" id="q85choiceB" value="B">
<label class="form-check-label" for="q85choiceB">
<!------ Choice B------> 
B. Insufficiency of natural resources
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q85choosedanswer" id="q85choiceC" value="C">
<label class="form-check-label" for="q85choiceC">
<!------ Choice C------> 
C. Existence of heritable variation
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q85choosedanswer" id="q85choiceD" value="D">
<label class="form-check-label" for="q85choiceD">
<!------ Choice D------> 
D. Survival of all that are born
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(85)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q85answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 86------>
86. One of the following would be harder to see under the ordinary light microscope that is more likely to be available in school laboratories.
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q86choosedanswer" id="q86choiceA" value="A">
<label class="form-check-label" for="q86choiceA">
<!------ Choice A------> 
A. Nucleus
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q86choosedanswer" id="q86choiceB" value="B">
<label class="form-check-label" for="q86choiceB">
<!------ Choice B------> 
B. A bacteriumc
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q86choosedanswer" id="q86choiceC" value="C">
<label class="form-check-label" for="q86choiceC">
<!------ Choice C------> 
C. A mitochondrion
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q86choosedanswer" id="q86choiceD" value="D">
<label class="form-check-label" for="q86choiceD">
<!------ Choice D------> 
D. A ribosome
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(86)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q86answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 87------>
87. In some human liver cells there are 92 chromosomes per cell. What is the ploidy level of such cells?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q87choosedanswer" id="q87choiceA" value="A">
<label class="form-check-label" for="q87choiceA">
<!------ Choice A------> 
A. Haploid
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q87choosedanswer" id="q87choiceB" value="B">
<label class="form-check-label" for="q87choiceB">
<!------ Choice B------> 
B. Diploid
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q87choosedanswer" id="q87choiceC" value="C">
<label class="form-check-label" for="q87choiceC">
<!------ Choice C------> 
C. Tetraploid
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q87choosedanswer" id="q87choiceD" value="D">
<label class="form-check-label" for="q87choiceD">
<!------ Choice D------> 
D. Hexaploid
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(87)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q87answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 88------>
88. Which of the following groups of substances are all inorganic?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q88choosedanswer" id="q88choiceA" value="A">
<label class="form-check-label" for="q88choiceA">
<!------ Choice A------> 
A. Water, sugar, calcium carbonate
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q88choosedanswer" id="q88choiceB" value="B">
<label class="form-check-label" for="q88choiceB">
<!------ Choice B------> 
B. Sugar, fatty acid, amino acid
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q88choosedanswer" id="q88choiceC" value="C">
<label class="form-check-label" for="q88choiceC">
<!------ Choice C------> 
C. Water, calcium carbonate, carbon dioxide
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q88choosedanswer" id="q88choiceD" value="D">
<label class="form-check-label" for="q88choiceD">
<!------ Choice D------> 
D. Carbon dioxide, amino acid, fatty acid
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(88)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q88answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 89------>
89. In which of the following compounds are both members of the pair are polymers Of carbohydrates that naturally occur in plants only?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q89choosedanswer" id="q89choiceA" value="A">
<label class="form-check-label" for="q89choiceA">
<!------ Choice A------> 
A. Starch and chitin
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q89choosedanswer" id="q89choiceB" value="B">
<label class="form-check-label" for="q89choiceB">
<!------ Choice B------> 
B. Starch and cellulose
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q89choosedanswer" id="q89choiceC" value="C">
<label class="form-check-label" for="q89choiceC">
<!------ Choice C------> 
C. Glycogen and cellulose
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q89choosedanswer" id="q89choiceD" value="D">
<label class="form-check-label" for="q89choiceD">
<!------ Choice D------> 
D. Glycogen and chitin
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(89)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q89answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 90------>
90. Which of the following is generally expected to give better health benefits when present in human diet?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q90choosedanswer" id="q90choiceA" value="A">
<label class="form-check-label" for="q90choiceA">
<!------ Choice A------> 
A. Animal fat
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q90choosedanswer" id="q90choiceB" value="B">
<label class="form-check-label" for="q90choiceB">
<!------ Choice B------> 
B. Saturated fatty acid
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q90choosedanswer" id="q90choiceC" value="C">
<label class="form-check-label" for="q90choiceC">
<!------ Choice C------> 
C. Monounsaturated fatty acid
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q90choosedanswer" id="q90choiceD" value="D">
<label class="form-check-label" for="q90choiceD">
<!------ Choice D------> 
D. Polyunsaturated fatty acid
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(90)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q90answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 91------>
91. Where does the light dependent reaction of photosynthesis occur in the chloroplast?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q91choosedanswer" id="q91choiceA" value="A">
<label class="form-check-label" for="q91choiceA">
<!------ Choice A------> 
A. In the thylakoid membrane
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q91choosedanswer" id="q91choiceB" value="B">
<label class="form-check-label" for="q91choiceB">
<!------ Choice B------> 
B. In the fluid of the stroma
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q91choosedanswer" id="q91choiceC" value="C">
<label class="form-check-label" for="q91choiceC">
<!------ Choice C------> 
C. In all parts of the chloroplast
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q91choosedanswer" id="q91choiceD" value="D">
<label class="form-check-label" for="q91choiceD">
<!------ Choice D------> 
D. In the stomatal opening
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(91)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q91answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 92------>
92. For which of the following is the sugar produced by photosynthesis NOT used?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q92choosedanswer" id="q92choiceA" value="A">
<label class="form-check-label" for="q92choiceA">
<!------ Choice A------> 
A. To produce biomass.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q92choosedanswer" id="q92choiceB" value="B">
<label class="form-check-label" for="q92choiceB">
<!------ Choice B------> 
B. To make new DNA.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q92choosedanswer" id="q92choiceC" value="C">
<label class="form-check-label" for="q92choiceC">
<!------ Choice C------> 
C. To produce ATP in respiration.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q92choosedanswer" id="q92choiceD" value="D">
<label class="form-check-label" for="q92choiceD">
<!------ Choice D------> 
D. To produce enzymes.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(92)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q92answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 93------>
93. In which process is ATP generated during short distance high speed running?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q93choosedanswer" id="q93choiceA" value="A">
<label class="form-check-label" for="q93choiceA">
<!------ Choice A------> 
A. Aerobic respiration
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q93choosedanswer" id="q93choiceB" value="B">
<label class="form-check-label" for="q93choiceB">
<!------ Choice B------> 
B. Mitochondrial energy transformation
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q93choosedanswer" id="q93choiceC" value="C">
<label class="form-check-label" for="q93choiceC">
<!------ Choice C------> 
C. Anaerobic respiration
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q93choosedanswer" id="q93choiceD" value="D">
<label class="form-check-label" for="q93choiceD">
<!------ Choice D------> 
D. The Krebs cycle
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(93)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q93answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 94------>
94. Which one of the following choices shows the end products of a mitotic cell division?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q94choosedanswer" id="q94choiceA" value="A">
<label class="form-check-label" for="q94choiceA">
<!------ Choice A------> 
A. Gametes and ordinary cells
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q94choosedanswer" id="q94choiceB" value="B">
<label class="form-check-label" for="q94choiceB">
<!------ Choice B------> 
B. Four genetically different cells
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q94choosedanswer" id="q94choiceC" value="C">
<label class="form-check-label" for="q94choiceC">
<!------ Choice C------> 
C. Two genetically different cells
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q94choosedanswer" id="q94choiceD" value="D">
<label class="form-check-label" for="q94choiceD">
<!------ Choice D------> 
D. Two genetically identical cells
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(94)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q94answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 95------>
95. What exactly happens during a substitution mutation?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q95choosedanswer" id="q95choiceA" value="A">
<label class="form-check-label" for="q95choiceA">
<!------ Choice A------> 
A. One base is replaced by a different base.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q95choosedanswer" id="q95choiceB" value="B">
<label class="form-check-label" for="q95choiceB">
<!------ Choice B------> 
B. An extra base is added during DNA replication.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q95choosedanswer" id="q95choiceC" value="C">
<label class="form-check-label" for="q95choiceC">
<!------ Choice C------> 
C. A base is missed out during DNA replication.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q95choosedanswer" id="q95choiceD" value="D">
<label class="form-check-label" for="q95choiceD">
<!------ Choice D------> 
D. Changes occur in the arrangement or structure of a chromosome.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(95)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q95answer">A</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 96------>
96. During the course of evolution, which of the following events came before all the others?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q96choosedanswer" id="q96choiceA" value="A">
<label class="form-check-label" for="q96choiceA">
<!------ Choice A------> 
A. Origin of dinosaurs and other reptiles.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q96choosedanswer" id="q96choiceB" value="B">
<label class="form-check-label" for="q96choiceB">
<!------ Choice B------> 
B. Availability of free oxygen in the atmosphere.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q96choosedanswer" id="q96choiceC" value="C">
<label class="form-check-label" for="q96choiceC">
<!------ Choice C------> 
C. Origin of the oldest eukaryotic organisms.
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q96choosedanswer" id="q96choiceD" value="D">
<label class="form-check-label" for="q96choiceD">
<!------ Choice D------> 
D. Origin of the first multicellular animals and plants.
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(96)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q96answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 97------>
97. What kind of natural selection is at work in a situation where individuals at both extreme ends of the range get better survival advantages than those around the middle?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q97choosedanswer" id="q97choiceA" value="A">
<label class="form-check-label" for="q97choiceA">
<!------ Choice A------> 
A. Stabilizing selection
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q97choosedanswer" id="q97choiceB" value="B">
<label class="form-check-label" for="q97choiceB">
<!------ Choice B------> 
B. Directional selection
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q97choosedanswer" id="q97choiceC" value="C">
<label class="form-check-label" for="q97choiceC">
<!------ Choice C------> 
C. Disruptive selection
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q97choosedanswer" id="q97choiceD" value="D">
<label class="form-check-label" for="q97choiceD">
<!------ Choice D------> 
D. Selection that removes the extremes
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(97)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q97answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 98------>
98. In which geologic period does the fossil record show more diverse and relatively higher forms of organisms?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q98choosedanswer" id="q98choiceA" value="A">
<label class="form-check-label" for="q98choiceA">
<!------ Choice A------> 
A. Devonian
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q98choosedanswer" id="q98choiceB" value="B">
<label class="form-check-label" for="q98choiceB">
<!------ Choice B------> 
B. Cretaceous
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q98choosedanswer" id="q98choiceC" value="C">
<label class="form-check-label" for="q98choiceC">
<!------ Choice C------> 
C. Jurassic
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q98choosedanswer" id="q98choiceD" value="D">
<label class="form-check-label" for="q98choiceD">
<!------ Choice D------> 
D. Permian
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(98)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q98answer">B</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 99------>
99. To what kind of animal behaviour can the spinning of a web by a spider be classified?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q99choosedanswer" id="q99choiceA" value="A">
<label class="form-check-label" for="q99choiceA">
<!------ Choice A------> 
A. Learned behaviour
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q99choosedanswer" id="q99choiceB" value="B">
<label class="form-check-label" for="q99choiceB">
<!------ Choice B------> 
B. Experiential behaviour
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q99choosedanswer" id="q99choiceC" value="C">
<label class="form-check-label" for="q99choiceC">
<!------ Choice C------> 
C. Instinctive behaviour
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q99choosedanswer" id="q99choiceD" value="D">
<label class="form-check-label" for="q99choiceD">
<!------ Choice D------> 
D. Accidental behaviour
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(99)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q99answer">C</p>
</div>

</div>

<!---------- question div ------------------------------------------>

<!---------- question div ------------------------------------------>

<div class="questions_div">

<p class="questions">
<!------ question no 100------>
100. Which of the following is a recently developed active area of research in biology today?
</p>

<div class="form-check choices">
<input class="form-check-input" type="radio" name="q100choosedanswer" id="q100choiceA" value="A">
<label class="form-check-label" for="q100choiceA">
<!------ Choice A------> 
A. Taxonomic study
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q100choosedanswer" id="q100choiceB" value="B">
<label class="form-check-label" for="q100choiceB">
<!------ Choice B------> 
B. Study about the cell theory
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q100choosedanswer" id="q100choiceC" value="C">
<label class="form-check-label" for="q100choiceC">
<!------ Choice C------> 
C. Ecological research
</label>
</div>


<div class="form-check choices">
<input class="form-check-input" type="radio" name="q100choosedanswer" id="q100choiceD" value="D">
<label class="form-check-label" for="q100choiceD">
<!------ Choice D------> 
D. Stem cell research
</label>
</div>


<div class="answer">
<button type="button" class="btn btn-sm btn-outline-danger show_answer_btn" onclick="show_answer(100)">Show Answer</button>
<!------ Answer------> 
<p class="answers" id="q100answer">D</p>
</div>

</div>

<!---------- question div ------------------------------------------>



<!------------- show result div ------------------------------------>
<hr>
<div class="result_div">
<center>
<button type="button" class="btn btn-danger" onclick="result_calculator()" id="result_btn">Show Result</button>
</center>
</div>
<!------------- show result div ------------------------------------>


<!------------ run out of time modal ------------------------------>
<div id="out_of_time_modal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background:#05A7AD;color:#fff;">
<h4 class="modal-title" style="color:#fff;">You have run out of time !</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
You have used all your time, you have to stop now
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" onclick="result_calculator()" data-dismiss="modal">Show Result</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!------------ run out of time modal ------------------------------>


<!------------ result modal ------------------------------>
<div id="result_modal" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background:#05A7AD;color:#fff;">
        <h4 class="modal-title" style="color:#fff;">You got</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<p class="result_p"><span class="result_no" id="result_span"></span> out of <span class="result_no" id="no_of_items_span"></span></p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!------------ result modal ------------------------------>

</div>
<!----closing container div ------------------>

<script type="text/javascript" src="../../includes/jquery-3.3.1.min.js" ></script> 
<script type="text/javascript" src="../../bootstrap/js/bootstrap.js" ></script> 
<script type="text/javascript" src="../../includes/exams.js" ></script> 
<script type="text/javascript" src="../../includes/clock.js" ></script>

<!------------- initializing clock -------------------->

<script type="text/javascript">
if(exam_mode=="exam")
{
$(document).ready(function() {
var deadline = Date.parse(new Date()) + time_given;
initializeClock('clockdiv', deadline);
});
</script>

}





<div class="container">
<footer style="padding-bottom: 5px;">
<p style="display: inline-block;">School of tomorrow | ልቀት National Exam training Software,Armonem Tech Solutions</p>
<a href="../../index.php" style="text-decoration: none;" class="float-right">Return to Home</a>	
</footer>
</div>
</body>
</html>