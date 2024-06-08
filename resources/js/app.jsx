import './bootstrap';
import './main.js';

import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';

import Footer from './components/Footer';
import Header from './components/Header';
import Main from './components/Main';
import Pagetop from './components/Pagetop';

const App = () => {
    return (
        <BrowserRouter>
            <React.StrictMode>
                <Header />
                <Main />
                <Footer />
                <Pagetop />
            </React.StrictMode>
        </BrowserRouter>
    );
}

const root = ReactDOM.createRoot(document.getElementById('container'));
root.render(<App />);
