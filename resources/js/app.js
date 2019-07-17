import React from 'react';
import ReactDOM, { hydrate } from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom';

import Index from './views/Index';
import About from './views/About';

function App() {
    return (
        <BrowserRouter>
            <Switch>
                <Route path="/" exact component={Index} />
                <Route path="/about" component={About} />
            </Switch>
        </BrowserRouter>
    );
}

//ReactDOM.render(<App />, document.getElementById('app'));

const rootElement = document.getElementById('app');
if (rootElement.hasChildNodes()) {
  hydrate(<App />, rootElement);
} else {
  render(<App />, rootElement);
}