import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

import Index from './Index';
import Todo from './Todo';

const Main: React.FC = () => {
    return (
        <>
            <Routes>
                <Route path="/" element={<Index />} />
                <Route path="/todo" element={<Todo />} />
            </Routes>
        </>
    );
};

export default Main;
