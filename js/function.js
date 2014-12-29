$(document).ready(function(e) {
	number = -1;
	good = 0;
	question = Array();
	options_a = Array();
	options_b = Array();
	options_c = Array();
	options_d = Array();
	corrects = Array();
	$.post("../scripts/load_exam_script.php", function(data){
		questions = data.questions;
		options_a = data.options_a;
		options_b = data.options_b;
		options_c = data.options_c;
		options_d = data.options_d;
		corrects = data.corrects;
		//next_question();
	}, "json").done(function(){
		$('#load_start_text').text('Your exam will start as soon as you click the "Start" button');
		$('#start_div').html('<input type="button" value="Start" id="start_btn" class="my_btn" />');
		$('#exam_instructions').html('Note that you have 10 seconds to make your desired choice of the correct answer to each question. After 10 seconds, the currently selected option is taken and the next question is loaded to you.');
	});
	
	next_question = function(){
		number++;
		$('#number').text(number + 1);
		$('#question').text(questions[number]);
		$('#label_a').text(options_a[number]);
		$('#label_b').text(options_b[number]);
		$('#label_c').text(options_c[number]);
		$('#label_d').text(options_d[number]);
	}
	
	answers = Array();
	goto_next = function(){
		
		$('#exam_div').slideUp('slow', 'linear', function(){
			if(number > -1){
				answers[number] = $('input[type= "radio"]:checked').val();
				//alert(answers[number]);
				if(answers[number] == corrects[number]){
					//alert('correct');
					good++;
					$('#marks').text(good);
				}
			}
			$('#exam_div input[type= "radio"]').removeAttr('checked');
			if(number == 5)
			{
				answers = answers.toString();
				window.location = "../exam_score/?ans="+answers;
			}
			else{
				
				next_question();
				$('#exam_div').slideDown('slow', function(){
					$('#timer_span').text(10);
					restart_timer();
				});
			}
		});
	}
	
	restart_timer = function(){
		//check if the interval is still on and clear it
		//clearInterval(next_q_interval);
		time = 9;
		next_q_interval = setInterval(function(){
			$('#timer_span').text(time);
			time--;
			if(time < 0){
				clearInterval(next_q_interval);
				goto_next();
			}
		}, 1000);
	}
	
    $('#start_div').on("click", function(e) {
        $('#load_exam_div').slideUp('slow', 'linear', function(){
			//$('#exam_div').slideDown('slow');
			goto_next();
		});
		
    });
	
	$('#next_btn').click(function(e) {
		clearInterval(next_q_interval);
        goto_next();
    });
});