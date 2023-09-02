let variavel = 0
let tempoInicial = Date.now()
for (let i = 0; i < 1_000_000_000; i++) {
    variavel = variavel + Math.random()
}
let tempoFinal = Date.now()
console.log(`---> ${variavel} <---`)
console.log(`Tempo inicial ${tempoInicial}`)
console.log(`Tempo final ${tempoFinal}`)
console.log(`Diferença ${tempoFinal - tempoInicial}`)
