import { StrictMode } from 'react';
import { BrowserRouter } from 'react-router-dom';
import { createRoot } from 'react-dom/client';

import '../js/app.js';

import Container from './components/Container';
import HamburgerMenu from './components/HamburgerMenu.jsx';

const App = () => {
    return (
        <StrictMode>
            <BrowserRouter>
                <Container />
                <HamburgerMenu />
            </BrowserRouter>
        </StrictMode>
    );
}

const container = document.getElementById('app');
const root = createRoot(container!);
root.render(<App />);
