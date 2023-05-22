const quizData = [
    {
        question: "Quais são os tipos de alimentos energéticos?",
        a: "fibras",
        b: "Sais minerais e proteínas",
        c: "proteínas e lipídeos",
        d: "carboidratos de lipídios",
        correct: "d",
    },
    {
        question: "O corpo humano é constituído aproximadamente por:",
        a: "27% de água",
        b: "65% de água",
        c: "45% de água",
        d: "56% de água",
        correct: "b",
    },
    {
        question: " O mel é um alimento:",
        a: "Construtores",
        b: "Plástico",
        c: "Energéticos",
        d: "Reguladores",
        correct: "c",
    },
    {
        question: "Qual dos alimentos abaixo possui uma grande quantidade de nutrientes que atuam como construtores no nosso organismo?",
        a: "Carne",
        b: "Mandioca",
        c: "feijão",
        d: "sopa",
        correct: "a",
    },
];


const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
loadQuiz()
function loadQuiz() {
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }
       currentQuiz++
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
        
           <center><h1>voce acertou ${score}/${quizData.length} questões corretamente.</h1>
           <button onclick="location.reload()"><H1>voltar ao inicio</h1></button></center>
           
           `
       }
    }
})