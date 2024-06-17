import React from 'react';
import { Link } from 'react-router-dom';

import Menubar from './Menubar';

const Header = () => {
    return (
        <header>
            <h1 id="logo">
                <Link to="/">COMPANY_NAME</Link>
            </h1>
            <Menubar/>
        </header>
    );
};

export default Header;
