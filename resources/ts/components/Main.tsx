import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

import Contents from './Contents';
import Footermenu from './Footermenu';
import Mainimg from './Mainimg';
import Todo from './Todo';

const Main: React.FC = () => {
    return (
        <Routes>
          <Route path="/" element={<Mainimg />} />
          <Route path="/" element={<Contents />} />
          <Route path="/" element={<Footermenu />} />
          <Route path="/todo" element={<Todo />} />
        </Routes>
    );
};

export default Main;
