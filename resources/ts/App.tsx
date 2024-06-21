import { StrictMode } from 'react';
import { BrowserRouter } from 'react-router-dom';
import { createRoot } from 'react-dom/client';

import '../js/app.js';

import Container from './components/Container';
import MenubarHdr from './components/MenubarHdr';

const App = () => {
    return (
        <StrictMode>
            <BrowserRouter>
                <Container />
                <MenubarHdr />
            </BrowserRouter>
        </StrictMode>
    );
}

const container = document.getElementById('app');
const root = createRoot(container!);
root.render(<App />);
