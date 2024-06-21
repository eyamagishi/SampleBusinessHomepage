import React from 'react';

import Footer from './Footer';
import Header from './Header';
import Main from './Main';
import Pagetop from './Pagetop';

const Container: React.FC = () => {
    return (
        <div id="container">
            <Header />
            <Main />
            <Footer />
            <Pagetop />
        </div>
    );
};

export default Container;
