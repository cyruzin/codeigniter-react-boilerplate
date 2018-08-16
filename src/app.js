import React from 'react'
import ReactDOM from 'react-dom'
import HelloWorld from './components/HelloWorld'
import Contributing from './components/Contributing'

const elements = document.getElementsByClassName('App');

for (let i = 0; i <= elements.length; i++) {
    switch (elements[i].id) {
        case 'HelloWorld':
            ReactDOM.render((<HelloWorld />),
                document.getElementById('HelloWorld'));
            break
        case 'Contributing':
            ReactDOM.render((<Contributing />),
                document.getElementById('Contributing'));
            break
        default:
            break
    }
}