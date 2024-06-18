import React from 'react';

import Contents from './Contents';
import Footermenu from './Footermenu';
import Mainimg from './Mainimg';

const Main: React.FC = () => {
    return (
        <>
            <Mainimg />
            <Contents />
            <Footermenu />
        </>
    );
};

export default Main;
