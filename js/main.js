let first_button_click = false;
let score_button = 0;
function handle_button_click(button_id){
    if (button_id === 'btn1' || button_id === 'btn2' || button_id === 'btn3' || button_id === 'btn4' || button_id === 'btn5' || button_id === 'btn6' || button_id === 'btn7'){
        first_button_click = true;
        switch(button_id){
            case 'btn1': 
                score_button = document.getElementById('btn1').innerHTML;
                break;
            case 'btn2':
                score_button = document.getElementById('btn2').innerHTML;
                break;
            case 'btn3': 
                score_button = document.getElementById('btn3').innerHTML;
                break;
            case 'btn4':
                score_button = document.getElementById('btn4').innerHTML;
                break;
            case 'btn5':
                score_button = document.getElementById('btn5').innerHTML;
                break;
            case 'btn6':
                score_button = document.getElementById('btn6').innerHTML;
                break;
            case 'btn7':
                score_button = document.getElementById('btn7').innerHTML;
                break;
            default:
                alert('cannot find match button');
        }
        
    }
    else if(button_id === 'success' && first_button_click){
        document.getElementById('info').innerHTML = score_button+"號發球成功";
        first_button_click = false;
    }
}

document.getElementById('leftadd').addEventListener('click', function(){
    document.getElementById('leftscore').innerHTML++;
    if (document.getElementById('leftscore').innerHTML >= 10){
        alert("game over");
    }
});

document.getElementById('rightadd').addEventListener('click', function(){
    document.getElementById('rightscore').innerHTML++;
    if (document.getElementById('rightscore').innerHTML >= 25){
        alert("game over");
    }
})

document.getElementById('btn1').addEventListener('click', function(){
    handle_button_click('btn1');
});

document.getElementById('success').addEventListener('click', function(){
    handle_button_click('success');
});

document.getElementById('btn2').addEventListener('click', function(){
    handle_button_click('btn2');
});

document.getElementById('btn3').addEventListener('click', function(){
    handle_button_click('btn3');
});

document.getElementById('btn4').addEventListener('click', function(){
    handle_button_click('btn4');
});

document.getElementById('btn5').addEventListener('click', function(){
    handle_button_click('btn5');
});

document.getElementById('btn6').addEventListener('click', function(){
    handle_button_click('btn6');
});

document.getElementById('btn7').addEventListener('click', function(){
    handle_button_click('btn7');
});