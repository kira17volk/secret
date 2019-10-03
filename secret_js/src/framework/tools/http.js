class Http {
    get(url) {
        return sendGetRequest('GET', url);
    }

    post(url, data) {
        return sendRequest('POST', url, data);
    }
    // put()
}

function sendGetRequest(method, url) {
    return fetch(url, {method, mode: 'no-cors'})
    .then(response => response.json())
}

function sendRequest(method, url, data = {}) {

    return fetch(url, {
        method,
        mode: 'no-cors',
        headers: {
            'Content-Type': 'application/json',
            // 'Content-Type': 'application/x-www-form-urlencoded',
        }, 
        body:JSON.stringify(data)
    })
    // .then(response => console.log('Успех:', response))
    // .catch(error => console.error('Ошибка:', error));
}

export const http = new Http();