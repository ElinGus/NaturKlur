(function(){
    function buildQuiz(){
      // variable to store the HTML output
      const output = [];
  
      // for each question...
      askedQuestions.forEach(
        (currentQuestion, questionNumber) => {
  
          // variable to store the list of possible answers
          const answers = [];
  
          // and for each available answer...
          for(letter in currentQuestion.answers){
  
            // ...add an HTML radio button
            answers.push(
              `<label>
                <input type="radio" name="question${questionNumber}" value="${letter}">
                ${letter} :
                ${currentQuestion.answers[letter]}
              </label>`
            );
          }
  
          // add this question and its answers to the output
          output.push(
            `<div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join('')} </div>`
          );
        }
      );
  
      // finally combine our output list into one string of HTML and put it on the page
      exercisesContainer.innerHTML = output.join('');
    }
  

    function showResults(){
  
      // gather answer containers from our quiz
      const answerContainers = exercisesContainer.querySelectorAll('.answers');
  
      // keep track of user's answers
      let numCorrect = 0;
  
      // for each question...
      askedQuestions.forEach( (currentQuestion, questionNumber) => {
  
        // find selected answer
        const answerContainer = answerContainers[questionNumber];
        const selector = `input[name=question${questionNumber}]:checked`;
        const userAnswer = (answerContainer.querySelector(selector) || {}).value;
  
        // if answer is correct
        if(userAnswer === currentQuestion.correctAnswer){
          // add to the number of correct answers
          numCorrect++;
  
          // color the answers green
          answerContainers[questionNumber].style.color = 'green';
        }
        // if answer is wrong or blank
        else{
          // color the answers red
          answerContainers[questionNumber].style.color = 'red';
        }
      });
  
      // show number of correct answers out of total
      resultsContainer.innerHTML = `Bra jobbat! Du fick ${numCorrect} rätt ut av ${askedQuestions.length}`;
    }
  
    const exercisesContainer = document.getElementById('exercises');
    const resultsContainer = document.getElementById('results');
    const submitButton = document.getElementById('submit');
    const askedQuestions = [
        {
          question: "Det här beskriver vad luft är.",
          answers: {
            A: "En blandning av olika gaser",
            B: "Rök",
            C: "Syre",
            D: "Inget"
          },
          correctAnswer: "A"
        },
        {
          question: "Hur kan du märka av luft i vatten?",
          answers: {
            A: "Det finns inte luft i vatten",
            B: "Det smarkar luft",
            C: "Det blir bubblor",
            D: "Du hör luften"
          },
          correctAnswer: "C"
        },
        {
          question: "Det behöver allt liv på jorden som andas luft.",
          answers: {
            A: "Syre",
            B: "Vätgas",
            C: "Gas",
            D: "Kväve"
          },
          correctAnswer: "A"
        },
        {
            question: "Kallas det som många bilar släpper ut.",
            answers: {
              A: "Avgaser",
              B: "Olja",
              C: "Bensin",
              D: "Smuts"
            },
            correctAnswer: "A"
          }
      ];
  
    // Kick things off
    buildQuiz();
  
    // Event listeners
    submitButton.addEventListener('click', showResults);
  })();