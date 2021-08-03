import React, {useState, createContext} from 'react';

export const BottomTabSelectedContext = createContext();

export const BottomTabSelectedProvider = (props) => {
    const [selectedIndex, setSelectedIndex] = useState(1);

    return(
        <BottomTabSelectedContext.Provider value={[selectedIndex, setSelectedIndex]}>
            {props.children}
        </BottomTabSelectedContext.Provider>
    );
}