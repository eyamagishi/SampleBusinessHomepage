import '@js/bootstrap';
import '@js/main.js';

import React from 'react';
import { BrowserRouter } from 'react-router-dom';
import { createRoot } from 'react-dom/client';

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

const container = document.getElementById('container');
const root = createRoot(container!);
root.render(<App />);
