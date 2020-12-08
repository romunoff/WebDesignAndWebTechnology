const requestURL = "https://jsonplaceholder.typicode.com/users"

const head = document.getElementById('head')
const body = document.getElementById('body')

sendRequest = (method, url) => {
    return fetch(url).then((response) => response.json())
}

sendRequest('GET', requestURL)
    .then(data => {
        let table = head.insertRow(0)

        for(let i = 0 ; i < Object.keys(data[0]).length; i++){
            let cell = table.insertCell(i)
            let text = document.createTextNode(Object.keys(data[0])[i])
            cell.appendChild(text)
        }

        for (let i = 0; i < Object.keys(data[0]).length; i++) {
            let table = body.insertRow(i)
            for (let j = 0; j < Object.keys(data[0]).length; j++) {
                let cell = table.insertCell(j)
                let text = document.createTextNode(data[i][Object.keys(data[0])[j]])
                cell.appendChild(text)
            }
        }

    })
    .catch(error => console.error(error))

