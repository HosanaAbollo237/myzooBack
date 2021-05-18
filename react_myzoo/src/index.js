import React from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter } from 'react-router-dom'
import App from './App'

import createBrowserHistory from '../src/components/history/History'
const history = createBrowserHistory();

ReactDOM.render(
<React.StrictMode>
    <App/>
</React.StrictMode>, document.getElementById('root')
);