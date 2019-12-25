import React from 'react'
import { BASE_URL } from '../util/constants'

export default function HelloWorld () {
    return (
        <div>
            <h1>Hello, World!</h1>
            <h4>This is React baby!! ;)</h4>
            <a href={`${BASE_URL}/welcome/contributing`}>Contributing</a>
        </div>
    )
}