import './bootstrap';
import './main.js';

import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';

import Header from './components/Header';

const App = () => {
    return (
        <BrowserRouter>
            <React.StrictMode>
                <Header />
            </React.StrictMode>
        </BrowserRouter>
    );
}

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(<App />);
