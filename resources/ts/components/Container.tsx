import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

import Footer from './Footer';
import Header from './Header';
import Index from './Index';
import Pagetop from './Pagetop';
import Todo from './Todo';

const Container: React.FC = () => {
    return (
        <div id="container">
            <Header />
            <Routes>
                <Route path="/" element={<Index />} />
                <Route path="/todo" element={<Todo />} />
            </Routes>
            <Footer />
            <Pagetop />
        </div>
    );
};

export default Container;
