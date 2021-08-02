/* eslint-disable no-undef */
import React, {useState, useEffect} from 'react';
import {StatusBar} from 'react-native';
import LoadingScreen from './src/screens/LoadingScreen';
import HomeAppScreen from './src/screens/HomeAppScreen';

const App = () => {
  const [isLoading, setIsLoading] = useState(true);

  useEffect(() => {
    setTimeout(()=> {
      setIsLoading(false);
    }, 2000)
  });
  return (
    <>
      <StatusBar backgroundColor="#00a538" />
      {isLoading ? <LoadingScreen /> : <HomeAppScreen />}
    </>
  );
};

export default App;
