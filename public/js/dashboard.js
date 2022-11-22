document.addEventListener('DOMContentLoaded', () => {
    varkGrafica();
    personalidadGrafica();
    totalGrafica();
});

const totalGrafica = async () => {
    const total = document.getElementById('total');
    // URL to FETCH data
    const url = route('graph');
    // Set headers and method
    const init = {
        method: 'GET',
        headers: {
            Accept: 'application/json'
        }
    }
    // Send request to the back
    const req = await fetch(url, init);
    // Check if request returned a 200 status code
    if (req.ok) {
        const [labels, data] = await req.json();
        new Chart(total, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# de registros',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        });
    }
}

const personalidadGrafica = async () => {
    const personalidad = document.getElementById('personalidad');
    // URL to FETCH data
    const url = route('myersBriggs.graph');
    // Set headers and method
    const init = {
        method: 'GET',
        headers: {
            Accept: 'application/json'
        }
    }
    // Send request to the back
    const req = await fetch(url, init);
    // Check if request returned a 200 status code
    if (req.ok) {
        const [labels, data] = await req.json();
        new Chart(personalidad, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# de personas',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        });
    }
}

const varkGrafica = async () => {
    const vark = document.getElementById('vark');
    // URL to FETCH data
    const url = route('vark.graph');
    // Set headers and method
    const init = {
        method: 'GET',
        headers: {
            Accept: 'application/json'
        }
    }
    // Send request to the back
    const req = await fetch(url, init);
    // Check if request returned a 200 status code
    if (req.ok) {
        const [labels, data] = await req.json();
        new Chart(vark, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# de personas',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        });
    }
}