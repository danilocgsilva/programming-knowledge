let fieldResults = document.getElementById("resultados")
let bhaskaraInputA = document.getElementById("bhaskara_a")
let bhaskaraInputB = document.getElementById("bhaskara_b")
let bhaskaraInputC = document.getElementById("bhaskara_c")

function cleanResults() {
    fieldResults.innerHTML = ""
}

function writeResults(texto) {
    cleanResults()
    
    fieldResults.innerHTML = texto
}

function isseconddegree() {
    if (
        bhaskaraInputA.value == "" || bhaskaraInputA.value == "0"
    ) {
        return true
    }
    return false
}

function calculatesResult() {
    let preResults = ["", "", ""]
    let a = bhaskaraInputA.value
    if (a == 0) {
        preResults[0] = "Is not a second degree equation."
        return preResults
    } 
    let b = bhaskaraInputB.value
    let c = bhaskaraInputC.value

    let D = Math.sqrt((b ** 2) - (4 * a * c))
    if (D < 0) {
        preResults[0] = "There's no real roots!"
        return preResults
    }
    preResults[1] = (-b + D)/(2*a)
    preResults[2] = (-b - D)/(2*a)
    return preResults
}

function fetchTextResults(resultados) {
    let textToReturn = ""
    if (resultados[0] !== "") {
        return resultados[0]
    }
    textToReturn += "X<sub>1</sub>: " + resultados[1] + "<br />"
    textToReturn += "X<sub>2</sub>: " + resultados[2]
    return textToReturn
}