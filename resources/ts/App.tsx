import { StrictMode } from 'react';
import { BrowserRouter } from 'react-router-dom';
import { createRoot } from 'react-dom/client';

import '../js/bootstrap';
import '../js/main.js';

import Footer from './components/Footer';
import Header from './components/Header';
import Main from './components/Main';
import Pagetop from './components/Pagetop';

const App = () => {
    return (
        <StrictMode>
            <BrowserRouter>
            <div id="container">
                <Header />
                <Main />
                <Footer />
                <Pagetop />
            </div>
            <div id="menubar_hdr">
                <span></span><span></span><span></span>
            </div>
            </BrowserRouter>
        </StrictMode>
    );
}

const container = document.getElementById('app');
const root = createRoot(container!);
root.render(<App />);
