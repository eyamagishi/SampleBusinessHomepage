import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter, Routes, Route, Link } from 'react-router-dom';

import About from './components/About';
import GlobalNav from './components/GlobalNav';
import Top from './components/Top';

const App = () => {
    return (
        <BrowserRouter>
            <React.Fragment>
                <GlobalNav />
                <Routes>
                    <Route path="/" element={<Top />} />
                    <Route path="/about" element={<About />} />
                </Routes>
            </React.Fragment>
        </BrowserRouter>
    );
}

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(<App />);
