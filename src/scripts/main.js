AOS.init();

const dataEvento = new Date("Dec 12, 2024 19:00:00");
const timeStampDoEvento = dataEvento.getTime();

const contaAsHoras = setInterval(function() {
    const agora = new Date();
    const timeStampAtual = agora.getTime();

    const distanciaAteEvento = timeStampDoEvento - timeStampAtual;

    const diasEmMs = 1000 * 60 * 60 * 24;
    const horasEmMs = 1000 * 60 * 60;
    const minutoEmMs = 1000 * 60;

    const diasAteOEvento = Math.floor(distanciaAteEvento / diasEmMs);
    const horasAteOEvento = Math.floor((distanciaAteEvento % diasEmMs) / horasEmMs);
    const minutoAteOEvento = Math.floor((distanciaAteEvento % horasEmMs) / minutoEmMs);
    const segundosAteOEvento = Math.floor((distanciaAteEvento % minutoEmMs) / 1000);

    document.getElementById('contador').innerHTML = `${diasAteOEvento}d ${horasAteOEvento}h ${minutoAteOEvento}m ${segundosAteOEvento}s`;

    
}, 1000);
