import React from 'react'
import ReactDOM from 'react-dom'

import HelloWorld from './components/HelloWorld'
import Contributing from './components/Contributing'

const elements = document.getElementsByClassName('App')

const components = {
    HelloWorld: <HelloWorld />,
    Contributing: <Contributing />
}

for (let i = 0; i <= elements.length; i++) {
    if (elements[i]) {
        const currentComponent = Object.keys(components)
            .find(component => component === elements[i].id)

        ReactDOM.render((components[currentComponent]),
            document.getElementById(currentComponent))
    }
}
