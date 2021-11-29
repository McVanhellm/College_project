document.addEventListener("DOMContentLoaded", ready);
function ready(){
    document.getElementById('level_one').hidden = true;
    document.getElementById('level_two').hidden = true;
    document.getElementById('level_three').hidden = true;
    document.getElementById('level_four').hidden = true;
    document.getElementById('level_five').hidden = true;
    document.getElementById('level_six').hidden = true;
}
const levels = document.querySelectorAll(".levels")
const first = document.querySelector("#first_level")

document.getElementById('first_level').onclick = function(){ // Два миллиона говно-кода, я действовал наверняка
    document.getElementById('level_one').hidden = false;
    document.getElementById('level_two').hidden = true;
    document.getElementById('level_three').hidden = true;
    document.getElementById('level_four').hidden = true;
    document.getElementById('level_five').hidden = true;
    document.getElementById('level_six').hidden = true;

    first_level.classList.add('selected');
    second_level.classList.remove('selected');
    third_level.classList.remove('selected');
    fourth_level.classList.remove('selected');
    fifth_level.classList.remove('selected');
    sixth_level.classList.remove('selected');
   
}
document.getElementById('second_level').onclick = function(){
    document.getElementById('level_one').hidden = true;
    document.getElementById('level_two').hidden = false;
    document.getElementById('level_three').hidden = true;
    document.getElementById('level_four').hidden = true;
    document.getElementById('level_five').hidden = true;
    document.getElementById('level_six').hidden = true;

    first_level.classList.remove('selected');
    second_level.classList.add('selected');
    third_level.classList.remove('selected');
    fourth_level.classList.remove('selected');
    fifth_level.classList.remove('selected');
    sixth_level.classList.remove('selected');
 
}
document.getElementById('third_level').onclick = function(){
    document.getElementById('level_one').hidden = true;
    document.getElementById('level_two').hidden = true;
    document.getElementById('level_three').hidden = false;
    document.getElementById('level_four').hidden = true;
    document.getElementById('level_five').hidden = true;
    document.getElementById('level_six').hidden = true;

    first_level.classList.remove('selected');
    second_level.classList.remove('selected');
    third_level.classList.add('selected');
    fourth_level.classList.remove('selected');
    fifth_level.classList.remove('selected');
    sixth_level.classList.remove('selected');
   
}
document.getElementById('fourth_level').onclick = function(){
    document.getElementById('level_one').hidden = true;
    document.getElementById('level_two').hidden = true;
    document.getElementById('level_three').hidden = true;
    document.getElementById('level_four').hidden = false;
    document.getElementById('level_five').hidden = true;
    document.getElementById('level_six').hidden = true;

    first_level.classList.remove('selected');
    second_level.classList.remove('selected');
    third_level.classList.remove('selected');
    fourth_level.classList.add('selected');
    fifth_level.classList.remove('selected');
    sixth_level.classList.remove('selected');
  
}
document.getElementById('fifth_level').onclick = function(){
    document.getElementById('level_one').hidden = true;
    document.getElementById('level_two').hidden = true;
    document.getElementById('level_three').hidden = true;
    document.getElementById('level_four').hidden = true;
    document.getElementById('level_five').hidden = false;
    document.getElementById('level_six').hidden = true;

    first_level.classList.remove('selected');
    second_level.classList.remove('selected');
    third_level.classList.remove('selected');
    fourth_level.classList.remove('selected');
    fifth_level.classList.add('selected');
    sixth_level.classList.remove('selected');
  
}
document.getElementById('sixth_level').onclick = function(){
    document.getElementById('level_one').hidden = true;
    document.getElementById('level_two').hidden = true;
    document.getElementById('level_three').hidden = true;
    document.getElementById('level_four').hidden = true;
    document.getElementById('level_five').hidden = true;
    document.getElementById('level_six').hidden = false;

    first_level.classList.remove('selected');
    second_level.classList.remove('selected');
    third_level.classList.remove('selected');
    fourth_level.classList.remove('selected');
    fifth_level.classList.remove('selected');
    sixth_level.classList.add('selected');
  
}