<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="practice">
	<div class="practice__text">
	<?php if ( have_posts() ):
			while ( have_posts() ): ?>
				<?php the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content(); ?>
	</div>

	
	<div class="practice__flexible" id="exercises">

		<div class="practice__icons">
			<div class="practice__icons--icon" id="icon-1"></div>
			<div class="practice__icons--icon" id="icon-2"></div>
			<div class="practice__icons--icon" id="icon-3"></div>
			<div class="practice__icons--icon" id="icon-4"></div>
		</div>

		<?php // Check value exists.
		 if( have_rows('flexible_content') ):

			// Loop through rows.
			while ( have_rows('flexible_content') ) : the_row();
		?>
			<div class="practice__flexible--question_text" id="question-<?php echo get_row_index(); ?>">
				<?php // Question layout.
				if( get_row_layout() == 'question' ):
					$question_text = get_sub_field('question_text');
					the_sub_field('question_text'); ?>
					 
			</div>

			<div class="practice__flexible--answer_btn">				
				<?php // Answers layout.
					elseif( get_row_layout() == 'answers' ): ?>
						
					<div id="answer-A<?php echo get_row_index(); ?>">
						<?php $answer_A = get_sub_field('answer_A'); ?>
						<input type="button" class="items" value="<?php the_sub_field('answer_A'); ?>"></input>
					</div>
				
					<div id="answer-B<?php echo get_row_index(); ?>">
						<?php $answer_B = get_sub_field('answer_B'); ?>
						<input type="button" class="items" value="<?php the_sub_field('answer_B'); ?>"></input>
					</div>

					<div id="answer-C<?php echo get_row_index(); ?>">
						<?php $answer_C = get_sub_field('answer_C'); ?>
						<input type="button" class="items" value="<?php the_sub_field('answer_C'); ?>"></input>
					</div>

					<div id="answer-D<?php echo get_row_index(); ?>">
						<?php $answer_D = get_sub_field('answer_D'); ?>
						<input type="button" class="items" value="<?php the_sub_field('answer_D'); ?>"></input>
					</div>	
			</div>

				<?php
					endif;
				// End loop.
				endwhile;
			// No value.
			else :
				// Do something...
			endif;
		?>

		
		<div class="practice__result-buttons">
		<button id="previous">Förra fråga</button>
		<button id="next">Nästa fråga</button>

		<button id="submit">Visa resultat</button>
		<div id="results"></div>

	</div>

</section>







<!--
<table style="width:583px">
	<tr>
	  <td>
	  	<div>
	  		<p class="question">1. Quiz question #1</p>

	    	<ul>
	    	<input class="answer" type="radio" name="q1" value="1">
	        <label id="correctString1">correct answer 1</label>
	    	<br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>wrong answer</label>
    		</ul>
	  	</div>
	  </td>
	  <td>
	  	<div>
	  		<p class="question">2. Quiz question #2</p>

	    	<ul>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="1">
	        <label id="correctString2">correct answer 2</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>wrong answer</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question">3. Quiz question #3</p>

	    	<ul>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="1">
	        <label id="correctString3">correct answer 3</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>wrong answer</label>
	    	</ul>
		</div>
	  </td>
	  <td>
	  	<div>
	  		<p class="question">4. Quiz question #4</p>

	    	<ul>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="1">
	        <label id="correctString4">correct answer 4</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>wrong answer</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>wrong answer</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	</table>
<br/>
  
  <div class="submitter">
          <input class="quizSubmit" id="submitButton" onClick="submitQuiz()"
          type="submit" value="Submit" />
	</div>
		-->
  
	<!--show only wrong answers on submit-->		
   <!-- <div class="quizAnswers" id="correctAnswer1"></div>
		<div class="quizAnswers" id="correctAnswer2"></div>
    	<div class="quizAnswers" id="correctAnswer3"></div>
    	<div class="quizAnswers" id="correctAnswer4"></div> -->

	<!--show score upon submit-->
    <!-- <div>
    	<h2 class="quizScore" id="userScore"></h2>
    </div>
	</div>

</body>
		-->





<!--

  // QUIZ 1 

<h1>Quiz on Important Facts</h1>
<div class="quiz-container">
  <div id="quiz"></div>
</div>

<button id="previous">Previous Question</button>
<button id="next">Next Question</button>
<button id="submit">Submit Quiz</button>
<div id="results"></div>

-->







	<?php // Slutet på wp-loopen
	endwhile;
	else: 
	?>
	<p>Sorry, no posts.</p>
	<?php endif ?>

<?php get_footer(); ?>
