import { StrictMode } from 'react';
import { BrowserRouter } from 'react-router-dom';
import { createRoot } from 'react-dom/client';

import '../js/app.js';

import Container from './components/Container';

const App = () => {
    return (
        <StrictMode>
            <BrowserRouter>
                <Container />
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
