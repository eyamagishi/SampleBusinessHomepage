import React from 'react';

import Information from './Information';
import WhatIsNew from './WhatIsNew';

const Main: React.FC = () => {
    return (
        <main>
            <Information />
            <WhatIsNew />
        </main>
    );
};

export default Main;
