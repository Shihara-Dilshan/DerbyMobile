import React from 'react';
import {View, Image, StyleSheet, Text} from 'react-native';
import * as Animatable from 'react-native-animatable';

const LoadingScreen = () => {
  return (
    <View style={styles.container}>
      <Animatable.View animation="bounceInRight">
        <Image
          style={styles.logo}
          source={require("./../assets/images/logo2.png")}
        />
      </Animatable.View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    backgroundColor: "#00a538",
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
  },
  logo: {
    width: 350,
    height: 350,
    marginBottom: 80,
  },
});

export default LoadingScreen;
