let first_button_click = false;
let score_button = 0;
let left_set = 0;
let right_set = 0;
function handle_button_click(button_class, button_id){
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
    else if(button_class === 'serve' && first_button_click){
        document.getElementById('info').innerHTML = score_button+"號發球"+document.getElementById(button_id).innerHTML;
        first_button_click = false;
    }

    else if(button_class === 'recieve' && first_button_click){
        document.getElementById('info').innerHTML = score_button+"號接發"+document.getElementById(button_id).innerHTML;
        first_button_click = false;
    }

    else if(button_class === 'attack' && first_button_click){
        document.getElementById('info').innerHTML = score_button+"號攻擊"+document.getElementById(button_id).innerHTML;
        first_button_click = false;
    }
    else if(button_class === 'defense' && first_button_click){
        document.getElementById('info').innerHTML = score_button+"號防守"+document.getElementById(button_id).innerHTML;
        first_button_click = false;
    }

    else if(button_class === 'block' && first_button_click){
        document.getElementById('info').innerHTML = score_button+"號欄網"+document.getElementById(button_id).innerHTML;
        first_button_click = false;
    }

    else if(button_class === 'setting' && first_button_click){
        document.getElementById('info').innerHTML = score_button+"號舉球/修正"+document.getElementById(button_id).innerHTML;
        first_button_click = false;
    }
}

document.getElementById('set').innerHTML = left_set + ' : ' + right_set;
document.getElementById('leftadd').addEventListener('click', function(){
    document.getElementById('leftscore').innerHTML++;
    if (document.getElementById('leftscore').innerHTML >= 25){
        document.getElementById('info').innerHTML = "一局結束";
        document.getElementById('leftscore').innerHTML = 0;
        left_set++;
        document.getElementById('set').innerHTML = left_set + ' : ' + right_set;
        if (left_set === 2){
            document.getElementById('info').innerHTML = "比賽結束";
        }
    }
});

document.getElementById('rightadd').addEventListener('click', function(){
    document.getElementById('rightscore').innerHTML++;
    if (document.getElementById('rightscore').innerHTML >= 25){
        document.getElementById('info').innerHTML = "一局結束";
        document.getElementById('rightscore').innerHTML = 0;
        right_set++;
        document.getElementById('set').innerHTML = left_set + ' : ' + right_set;
        if (right_set === 2){
            document.getElementById('info').innerHTML = "比賽結束";
        }
    }
})

document.getElementById('btn1').addEventListener('click', function(){
    handle_button_click('number', 'btn1');
});

document.getElementById('btn2').addEventListener('click', function(){
    handle_button_click('number', 'btn2');
});

document.getElementById('btn3').addEventListener('click', function(){
    handle_button_click('number', 'btn3');
});

document.getElementById('btn4').addEventListener('click', function(){
    handle_button_click('number', 'btn4');
});

document.getElementById('btn5').addEventListener('click', function(){
    handle_button_click('number', 'btn5');
});

document.getElementById('btn6').addEventListener('click', function(){
    handle_button_click('number', 'btn6');
});

document.getElementById('btn7').addEventListener('click', function(){
    handle_button_click('number', 'btn7');
});

document.getElementsByClassName('serve')[0].addEventListener('click', function(){
    handle_button_click('serve', 's_success');
})

document.getElementsByClassName('serve')[1].addEventListener('click', function(){
    handle_button_click('serve', 's_score');
})

document.getElementsByClassName('serve')[2].addEventListener('click', function(){
    handle_button_click('serve', 's_mistake');
})

document.getElementsByClassName('recieve')[0].addEventListener('click', function(){
    handle_button_click('recieve', 'r_nice');
})

document.getElementsByClassName('recieve')[1].addEventListener('click', function(){
    handle_button_click('recieve', 'r_mistake');
})

document.getElementsByClassName('attack')[0].addEventListener('click', function(){
    handle_button_click('attack', 'a_success');
})

document.getElementsByClassName('attack')[1].addEventListener('click', function(){
    handle_button_click('attack', 'a_score');
})

document.getElementsByClassName('attack')[2].addEventListener('click', function(){
    handle_button_click('attack', 'a_mistake');
})

document.getElementsByClassName('defense')[0].addEventListener('click', function(){
    handle_button_click('defense', 'd_nice');
})

document.getElementsByClassName('defense')[1].addEventListener('click', function(){
    handle_button_click('defense', 'd_mistake');
})

document.getElementsByClassName('block')[0].addEventListener('click', function(){
    handle_button_click('block', 'b_touch');
})

document.getElementsByClassName('block')[1].addEventListener('click', function(){
    handle_button_click('block', 'b_mistake');
})

document.getElementsByClassName('block')[2].addEventListener('click', function(){
    handle_button_click('block', 'b_score');
})

document.getElementsByClassName('block')[3].addEventListener('click', function(){
    handle_button_click('block', 'b_seam');
})

document.getElementsByClassName('setting')[0].addEventListener('click', function(){
    handle_button_click('setting', 'se_nice');
})

document.getElementsByClassName('setting')[1].addEventListener('click', function(){
    handle_button_click('setting', 'se_mistake');
})

let change_num = 0;
let timeout_num = 0;

document.getElementById('info_change').innerHTML = "換人: 0次";
document.getElementById('change').addEventListener('click', function(){
    change_num++;
    document.getElementById('info_change').innerHTML = "換人: " + change_num + "次";
})

document.getElementById('info_timeout').innerHTML = "暫停: 0次";
document.getElementById('timeout').addEventListener('click', function(){
    timeout_num++;
    document.getElementById('info_timeout').innerHTML = "暫停: " + timeout_num + "次";
})

document.getElementById('other_mistake').addEventListener('click', function(){
    document.getElementById('info').innerHTML = "對方失誤";
})
